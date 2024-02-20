<?php

namespace app\models\forms;

use app\models\PlayerCreateInfoSkill;
use yii\base\Model;

class PlayerCreateInfoSkillForm extends Model
{
    public $raceMask;
    public $classMask;

    public function rules()
    {
        return [
            [['raceMask', 'classMask'], 'required'],
            [['raceMask', 'classMask'], 'each', 'rule' => ['integer']],
            [['raceMask', 'classMask'], 'validateCheckboxList'],
        ];
    }

    public function initModelAttributes(PlayerCreateInfoSkill $model) {
        $this->raceMask = $this->initAttributes(
            $model->raceMask,
            PlayerCreateInfoSkill::getRaceMaskOptions(),
                PlayerCreateInfoSkill::RACE_MASK_ANY
        );
        $this->classMask = $this->initAttributes(
            $model->classMask,
            PlayerCreateInfoSkill::getClassMaskOptions(),
                PlayerCreateInfoSkill::CLASS_MASK_ANY
        );
    }

    public function processForm(PlayerCreateInfoSkill $model, $postData)
    {
        // Load other attributes from the form
        $model->load($postData);
        if ($this->load($postData) && $this->validate()) {            
            // Process checkbox lists
            $model->raceMask = $this->processCheckboxList($this->raceMask);
            $model->classMask = $this->processCheckboxList($this->classMask);

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
            case "raceMask":
                // Ensure the constant value is present in the array
                if (in_array(PlayerCreateInfoSkill::RACE_MASK_ANY, $this->$attribute) && count($this->$attribute) > 1) {
                    $this->addError($attribute, 'Can\'t be "Any" and another value at the same time.');
                }
                break;
            case "classMask":
                // Ensure the constant value is present in the array
                if (in_array(PlayerCreateInfoSkill::CLASS_MASK_ANY, $this->$attribute) && count($this->$attribute) > 1) {
                    $this->addError($attribute, 'Can\'t be "Any" and another value at the same time.');
                }
                break;
        }

        

        // Add your custom validation logic here if needed
    }
}
