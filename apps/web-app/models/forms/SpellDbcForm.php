<?php

namespace app\models\forms;

use app\models\SpellDbc;
use yii\base\Model;

class SpellDbcForm extends Model
{
    public $Attributes;
    public $Targets;
    public $TargetCreatureType;

    public function rules()
    {
        return [
            [['Attributes', 'Targets', 'TargetCreatureType'], 'required'],
            [['Attributes', 'Targets', 'TargetCreatureType'], 'each', 'rule' => ['integer']],
            [['Attributes', 'Targets', 'TargetCreatureType'], 'validateCheckboxList'],
        ];
    }

    public function initModelAttributes(SpellDbc $model) {
        $this->Attributes = $this->initAttributes(
            $model->Attributes,
            SpellDbc::getSpellAttributesOptions(),
                SpellDbc::SPELL_ATTR0_NONE
        );
        $this->Targets = $this->initAttributes(
            $model->Targets,
            SpellDbc::getTargetFlagOptions(),
                SpellDbc::TARGET_FLAG_NONE
        );
        $this->TargetCreatureType = $this->initAttributes(
            $model->TargetCreatureType,
            SpellDbc::getTargetCreatureTypeOptions(),
                SpellDbc::TYPE_NONE
        );
    }

    public function processForm(SpellDbc $model, $postData)
    {
        // Load other attributes from the form
        $model->load($postData);
        if ($this->load($postData) && $this->validate()) {            
            // Process checkbox lists
            $model->Attributes = $this->processCheckboxList($this->Attributes);
            $model->Targets = $this->processCheckboxList($this->Targets);
            $model->TargetCreatureType = $this->processCheckboxList($this->TargetCreatureType);

            // Save the model
            if ($model->validate() && $model->save()) {
                return true; // Successfully processed the form
            }
        }

        return false; // Form processing failed
    }

    public function processCheckboxList($values)
    {
        $result = 0;
        foreach ($values as $opt) {
            $result |= $opt;
        }
        return $result;
    }

    public function initAttributes($selected, $possibleOptions, $default)
    {
        $arr = [];
        foreach ($possibleOptions as $option => $label) {
            if (isset($selected) && ($selected & $option) || ($selected == 0 && $option == 0)) {
                $arr[] = $option;
            }
        }
        if (empty($arr)) {
            $arr = [
                $default
            ];
        }
        return $arr;
    }

    public function validateCheckboxList($attribute, $params)
    {
        // Ensure the array is not empty
        switch($attribute) {
            case "Attributes":
                // Ensure the constant value is present in the array
                if (in_array(SpellDbc::SPELL_ATTR0_NONE, $this->$attribute) && count($this->$attribute) > 1) {
                    $this->addError($attribute, 'Can\'t be "Any" and another value at the same time.');
                }
                break;
            case "Targets":
                // Ensure the constant value is present in the array
                if (in_array(SpellDbc::TARGET_FLAG_NONE, $this->$attribute) && count($this->$attribute) > 1) {
                    $this->addError($attribute, 'Can\'t be "Any" and another value at the same time.');
                }
                break;
            case "TargetCreatureType":
                // Ensure the constant value is present in the array
                if (in_array(SpellDbc::TYPE_NONE, $this->$attribute) && count($this->$attribute) > 1) {
                    $this->addError($attribute, 'Can\'t be "Any" and another value at the same time.');
                }
                break;
        }

        

        // Add your custom validation logic here if needed
    }
}
