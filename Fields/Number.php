<?php

namespace My_Helper\Form\Fields;


class Number extends Field
{
    protected $min, $max, $step;

    public function __construct($name, $id, $class, $value, $placeholder, $taille = 3, $label, $min = 0, $max = '', $step = 1)
    {
        parent::__construct('number', $name, $id, $class, $value, $placeholder, $taille, $label);
        $this->min = $min;
        $this->max = $max;
        $this->step = $step;
    }

    /**
     * @return int
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * @param int $min
     */
    public function setMin($min)
    {
        $this->min = $min;
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
     * @return int
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * @param int $step
     */
    public function setStep($step)
    {
        $this->step = $step;
    }

    public function getHtmlField()
    {
        return '<label class="label">' . $this->getLabel() . '</label>
            <input type="' . $this->getType() . '" name="' . $this->getName() . '" id="' . $this->getId() . '" class="' . $this->getClass() . '" value="' . $this->getValue() . '" placeholder="' . $this->getPlaceholder() . '">';
    }
}