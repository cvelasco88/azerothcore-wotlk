<?php

namespace app\models\base;

use Yii;

/**
 * This is the base class for DBC (Database Client Cache) active records.
 */
abstract class DbcActiveRecord extends \yii\db\ActiveRecord
{
    protected bool $preventInit = false;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        
        if(!$this->preventInit) {
            // Fetch default attribute values from the database schema
            $schema = $this->getTableSchema();
            
            if ($schema) {
                foreach ($schema->columns as $columnName => $column) {
                    if ($column->defaultValue !== null && $this->$columnName === null) {
                        $this->$columnName = $column->defaultValue;
                    }
                }
            }
        }
    }

    /**
     * Retrieves the column definitions for the database table associated with this ActiveRecord.
     *
     * @return array An array containing column definitions.
     */
    public function getDefinition()
    {
        $columnDefinitions = [];
        $tableSchema = $this->getTableSchema();

        foreach ($this->attributes() as $attribute) {
            // Get the column schema
            $columnSchema = $tableSchema->getColumn($attribute);

            // Determine the type of the attribute
            $columnType = $columnSchema->type;

            // Check if the column is unsigned
            $isUnsigned = stripos($columnSchema->dbType, 'unsigned') !== false;

            // Add column type to the definitions array
            $columnDefinitions[$attribute] = [
                'type' => $columnType,
                'unsigned' => $isUnsigned,
            ];
        }

        return $columnDefinitions;
    }

    /**
     * Imports values from DBC (Database Client Cache) into the current ActiveRecord instance.
     *
     * @param array $values The values to import from DBC.
     * @param array $definition The column definition for mapping imported values.
     */
    public function importFromDbc(array $values, array $definition)
    {
        $data = $this->mapImportedDbcValues($values, $definition);
        $this->load($data, '');
    }

    /**
     * Exports values from the current ActiveRecord instance to DBC (Database Client Cache) format.
     *
     * @param array $definition The column definition for mapping exported values.
     * @return array The exported values.
     */
    public function exportToDbc(array $definition)
    {
        // Get all properties of the target class
        $keys = array_keys($definition);

        $data = $this->toArray($keys);
        return $this->mapExportedDbcValues($data, $definition);
    }

    /**
     * Maps imported DBC values to attributes of the current ActiveRecord instance.
     *
     * @param array $data The imported DBC values.
     * @param array $definition The column definition for mapping imported values.
     * @return array The mapped values.
     */
    protected function mapImportedDbcValues(array $data, array $definition)
    {
        // Get all properties of the target class
        $properties = array_keys($definition);
        return array_combine($properties, $data);
    }

    /**
     * Maps exported attribute values of the current ActiveRecord instance to DBC format.
     *
     * @param array $data The attribute values of the current ActiveRecord instance.
     * @param array $definition The column definition for mapping exported values.
     * @return array The exported values in DBC format.
     */
    protected function mapExportedDbcValues(array $data, array $definition)
    {
        // Get all properties of the target class
        $properties = array_keys($definition);

        $values = [];
        foreach ($properties as $propertyName) {
            // Set the value from the property of the target object

            // TODO: test if to use "??" or "?:"
            // TODO: maybe is better to replace "null" by zero
            $values[] = $data[$propertyName] ?: null;
        }
        return $values;
    }
}
