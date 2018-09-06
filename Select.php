<?php

namespace My_Helper\Form;

class Select extends Field
{
    protected $options;

    /**
     * Field constructor.
     * @param $type
     * @param $name
     * @param $id
     * @param $class
     * @param $value
     * @param $placeholder
     */
    public function __construct($type = 'select', $name, $id, $class, $value, $placeholder, $taille = 3, $label, array $options = [])
    {
        parent::__construct($type, $name, $id, $class, $value, $placeholder, $taille = 3, $label);
        $this->options = $options;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param array $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }

    public function getHtmlField()
    {
        $outDatas =
            '<label class="label">' . $this->getLabel() . '</label>
            <select name="' . $this->getName() . '" id="' . $this->getId() . '" class="' . $this->getClass() . '">
                <option value="">--</option>';
        /** @var Options $option */
        foreach ($this->getOptions() as $option) {
            $outDatas .= $option->getHtml();
        }
        $outDatas .= '</select>';
        return $outDatas;
    }

}