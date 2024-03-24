<?php

namespace app\models\forms;

use app\models\SpellDbc;
use yii\base\Model;

class SpellDbcForm extends Model
{
    public $Attributes;
    public $Targets;
    public $TargetCreatureType;
    public $AttributesEx;
    public $AttributesEx2;
    public $AttributesEx3;
    public $AttributesEx4;
    public $AttributesEx5;
    public $AttributesEx6;
    public $AttributesEx7;

    public function rules()
    {
        return [
            [['Attributes', 'Targets', 'TargetCreatureType', 'AttributesEx', 'AttributesEx1', 'AttributesEx2', 'AttributesEx3', 'AttributesEx4', 'AttributesEx5', 'AttributesEx6', 'AttributesEx7'], 'required'],
            [['Attributes', 'Targets', 'TargetCreatureType', 'AttributesEx', 'AttributesEx1', 'AttributesEx2', 'AttributesEx3', 'AttributesEx4', 'AttributesEx5', 'AttributesEx6', 'AttributesEx7'], 'each', 'rule' => ['integer']],
            [['Attributes', 'Targets', 'TargetCreatureType', 'AttributesEx', 'AttributesEx1', 'AttributesEx2', 'AttributesEx3', 'AttributesEx4', 'AttributesEx5', 'AttributesEx6', 'AttributesEx7'], 'validateCheckboxList'],
        ];
    }

    public function initModelAttributes(SpellDbc $model)
    {
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
        $this->AttributesEx = $this->initAttributes(
            $model->AttributesEx,
            SpellDbc::getSpellAttributesEx1Options(),
            SpellDbc::SPELL_ATTR1_NONE
        );
        $this->AttributesEx2 = $this->initAttributes(
            $model->AttributesEx2,
            SpellDbc::getSpellAttributesEx2Options(),
            SpellDbc::SPELL_ATTR2_NONE
        );
        $this->AttributesEx3 = $this->initAttributes(
            $model->AttributesEx3,
            SpellDbc::getSpellAttributesEx3Options(),
            SpellDbc::SPELL_ATTR3_NONE
        );
        $this->AttributesEx4 = $this->initAttributes(
            $model->AttributesEx4,
            SpellDbc::getSpellAttributesEx4Options(),
            SpellDbc::SPELL_ATTR4_NONE
        );
        $this->AttributesEx5 = $this->initAttributes(
            $model->AttributesEx5,
            SpellDbc::getSpellAttributesEx5Options(),
            SpellDbc::SPELL_ATTR5_NONE
        );
        $this->AttributesEx6 = $this->initAttributes(
            $model->AttributesEx6,
            SpellDbc::getSpellAttributesEx6Options(),
            SpellDbc::SPELL_ATTR6_NONE
        );
        $this->AttributesEx7 = $this->initAttributes(
            $model->AttributesEx7,
            SpellDbc::getSpellAttributesEx7Options(),
            SpellDbc::SPELL_ATTR7_NONE
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
            $model->AttributesEx = $this->processCheckboxList($this->AttributesEx);
            $model->AttributesEx2 = $this->processCheckboxList($this->AttributesEx2);
            $model->AttributesEx3 = $this->processCheckboxList($this->AttributesEx3);
            $model->AttributesEx4 = $this->processCheckboxList($this->AttributesEx4);
            $model->AttributesEx5 = $this->processCheckboxList($this->AttributesEx5);
            $model->AttributesEx6 = $this->processCheckboxList($this->AttributesEx6);
            $model->AttributesEx7 = $this->processCheckboxList($this->AttributesEx7);

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
            if (isset ($selected) && ($selected & $option) || ($selected == 0 && $option == 0)) {
                $arr[] = $option;
            }
        }
        if (empty ($arr)) {
            $arr = [
                $default
            ];
        }
        return $arr;
    }

    public function validateCheckboxList($attribute, $params)
    {
        // Ensure the array is not empty
        switch ($attribute) {
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
            case "AttributesEx":
                // Ensure the constant value is present in the array
                if (in_array(SpellDbc::SPELL_ATTR1_NONE, $this->$attribute) && count($this->$attribute) > 1) {
                    $this->addError($attribute, 'Can\'t be "Any" and another value at the same time.');
                }
                break;
            case "AttributesEx2":
                // Ensure the constant value is present in the array
                if (in_array(SpellDbc::SPELL_ATTR2_NONE, $this->$attribute) && count($this->$attribute) > 1) {
                    $this->addError($attribute, 'Can\'t be "Any" and another value at the same time.');
                }
                break;
            case "AttributesEx3":
                // Ensure the constant value is present in the array
                if (in_array(SpellDbc::SPELL_ATTR3_NONE, $this->$attribute) && count($this->$attribute) > 1) {
                    $this->addError($attribute, 'Can\'t be "Any" and another value at the same time.');
                }
                break;
            case "AttributesEx4":
                // Ensure the constant value is present in the array
                if (in_array(SpellDbc::SPELL_ATTR4_NONE, $this->$attribute) && count($this->$attribute) > 1) {
                    $this->addError($attribute, 'Can\'t be "Any" and another value at the same time.');
                }
                break;
            case "AttributesEx5":
                // Ensure the constant value is present in the array
                if (in_array(SpellDbc::SPELL_ATTR5_NONE, $this->$attribute) && count($this->$attribute) > 1) {
                    $this->addError($attribute, 'Can\'t be "Any" and another value at the same time.');
                }
                break;
            case "AttributesEx6":
                // Ensure the constant value is present in the array
                if (in_array(SpellDbc::SPELL_ATTR6_NONE, $this->$attribute) && count($this->$attribute) > 1) {
                    $this->addError($attribute, 'Can\'t be "Any" and another value at the same time.');
                }
                break;
            case "AttributesEx7":
                // Ensure the constant value is present in the array
                if (in_array(SpellDbc::SPELL_ATTR7_NONE, $this->$attribute) && count($this->$attribute) > 1) {
                    $this->addError($attribute, 'Can\'t be "Any" and another value at the same time.');
                }
                break;
        }



        // Add your custom validation logic here if needed
    }
}
