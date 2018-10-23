<?php

namespace My_Helper\Form\Fields;

class Time extends Field
{
    public function __construct($name, $id, $class, $value, $taille = 3, $label, $min = '', $max = '')
    {
        parent::__construct('time', $name, $id, $class, $value, '', $taille, $label);
        $this->min = $min;
        $this->max = $max;
    }

    /**
     * @return string
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * @param string $max
     */
    public function setMax($max)
    {
        $this->max = $max;
    }

    /**
     * @return string
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * @param string $min
     */
    public function setMin($min)
    {
        $this->min = $min;
    }


    public function getHtmlField()
    {
        return '<label class="label">' . $this->getLabel() . '</label>
            <input type="' . $this->getType() . '" name="' . $this->getName() . '" id="' . $this->getId() . '" class="' . $this->getClass() . '" value="' . $this->getValue() . '" placeholder="' . $this->getPlaceholder() . '" min="' . $this->getMin() . '" max="' . $this->getMax() . '">';

    }
}