<?php
/**
 * Created by PhpStorm.
 * User: CrepyT
 * Date: 06/09/2018
 * Time: 16:59
 */

namespace My_Helper\Form\Fields;


class RadioOptions implements iField
{

    protected $label, $value, $name, $id, $class, $checked;

    /**
     * RadioOptions constructor.
     * @param $label
     * @param $value
     * @param $name
     * @param $id
     * @param $class
     * @param $checked
     */
    public function __construct($label, $value, $name, $id, $class, $checked = false)
    {
        $this->label = $label;
        $this->value = $value;
        $this->name = $name;
        $this->id = $id;
        $this->class = $class;
        $this->checked = $checked;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param mixed $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }

    /**
     * @return bool
     */
    public function isChecked()
    {
        return $this->checked;
    }

    /**
     * @param bool $checked
     */
    public function setChecked($checked)
    {
        $this->checked = $checked;
    }

    protected function getCheckedText()
    {
        switch ($this->isChecked()) {
            case true:
                return 'checked';
                break;
            case false:
                return '';
                break;
        }
    }

    public function getHtmlField()
    {
        return '<label for="'. $this->getId() .'" class="margin-right"><input type="radio" name="'. $this->getName() .'" id="'. $this->getId() .'" value="'. $this->getValue() .'" '. $this->getCheckedText() .'> '. $this->getLabel() .'</label>';
    }

}