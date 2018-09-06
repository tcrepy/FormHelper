<?php

namespace My_Helper\Form\Fields;

class Options
{
    protected $value, $name, $selected;

    /**
     * Options constructor.
     * @param $value
     * @param $name
     * @param $selected
     */
    public function __construct($value, $name, $selected = false)
    {
        $this->value = $value;
        $this->name = $name;
        $this->selected = $selected;
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
    public function getSelected()
    {
        return $this->selected;
    }

    protected function getSelectedText()
    {
        switch ($this->getSelected()) {
            case true:
                return 'selected';
                break;
            case false:
                return '';
                break;
        }
    }

    /**
     * @param bool $selected
     */
    public function setSelected($selected)
    {
        $this->selected = $selected;
    }

    public function getHtml()
    {
        return '<option value="' . $this->getValue() . '" '.$this->getSelectedText().' >' . $this->getName() . '</option>';
    }
}