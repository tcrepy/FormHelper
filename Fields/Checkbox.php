<?php

namespace My_Helper\Form\Fields;


class Checkbox extends Field
{
    protected $checkboxes;

    public function __construct($name, $id, $class, $taille = 3, $label, array $checkboxes)
    {
        parent::__construct('checkbox', $name, $id, $class, '', '', $taille, $label);
        $this->checkboxes = $checkboxes;
    }

    /**
     * @return CheckboxOptions[]
     */
    public function getCheckboxes()
    {
        return $this->checkboxes;
    }

    /**
     * @param CheckboxOptions[] $checkboxes
     */
    public function setCheckboxes($checkboxes)
    {
        $this->checkboxes = $checkboxes;
    }


    public function getHtmlField()
    {
        $outDatas = '<div id="'. $this->getId() .'"><h6 class="color-theme">'. $this->getLabel() .'</h6>
                    <ul class="checkbox">';
        foreach ($this->getCheckboxes() as $checkbox) {
            $outDatas .= $checkbox->getHtmlField();
        }
        $outDatas .= '</ul></div>';
        return $outDatas;
    }

}