<?php

namespace app\models\forms;

use app\models\TalentTabDbc;
use yii\base\Model;

class TalentTabDbcForm extends Model
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

    public function initModelAttributes(TalentTabDbc $model) {
        $this->raceMask = $this->initAttributes(
            $model->RaceMask,
            $model::getRaceMaskOptions(),
                $model::RACE_MASK_ANY
        );
        $this->classMask = $this->initAttributes(
            $model->ClassMask,
            $model::getClassMaskOptions(),
                $model::CLASS_MASK_ANY
        );
    }

    public function processForm(TalentTabDbc $model, $postData)
    {
        // Load other attributes from the form
        $model->load($postData);
        if ($this->load($postData) && $this->validate()) {            
            // Process checkbox lists
            $model->RaceMask = $this->processCheckboxList($this->raceMask);
            $model->ClassMask = $this->processCheckboxList($this->classMask);

            // Save the model
            if ($model->save()) {
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
                if (in_array(TalentTabDbc::RACE_MASK_ANY, $this->$attribute) && count($this->$attribute) > 1) {
                    $this->addError($attribute, 'Can\'t be "Any" and another value at the same time.');
                }
                break;
            case "classMask":
                // Ensure the constant value is present in the array
                if (in_array(TalentTabDbc::CLASS_MASK_ANY, $this->$attribute) && count($this->$attribute) > 1) {
                    $this->addError($attribute, 'Can\'t be "Any" and another value at the same time.');
                }
                break;
        }

        

        // Add your custom validation logic here if needed
    }
}
