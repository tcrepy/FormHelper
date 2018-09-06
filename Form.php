<?php

namespace My_Helper\Form;

class Form
{
    protected $param;

    /**
     * Form constructor.
     * @param $param
     */
    public function __construct(array $param)
    {
        $this->param = $param;
    }

    /**
     * @return mixed
     */
    public function getParam()
    {
        return $this->param;
    }

    /**
     * @param mixed $param
     */
    public function setParam($param)
    {
        $this->param = $param;
    }

    public function addField(Field $field)
    {
        $this->param[] = $field;
    }

    public function constructForm()
    {
        $outDatas = '<div class="row padding-top">';
        $i = 0;
        /** @var Field $field */
        foreach ($this->getParam() as $field) {
            $i += $field->getTaille();
            if ($i > 12) {
                $outDatas .= '</div><div class="row padding-top">';
                $i = 0;
            }
            $outDatas .= '<div class="column_' . $field->getTaille() . '">';
            $outDatas .= $field->getHtmlField();
            $outDatas .= '</div>';
        }
        $outDatas .= '</div>';
        return $outDatas;
    }

    public function addSubmitButton($id = 'valider', $name = 'Valider', $class = '', $taille = 2)
    {
        return
        '<div class="row padding-top">
            <div class="column_'. $taille .'">
                <button type="submit" id="'. $id .'" class="'. $class.'">'. $name .'</button>
            </div>
        </div>';
    }
}


