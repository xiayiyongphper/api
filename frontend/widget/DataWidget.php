<?php
namespace frontend\widget;

use yii\bootstrap\Widget;
use yii\helpers\Html;

class DataWidget extends Widget
{
    public $model;

    public function run()
    {
        return $this->render('data', array('model' => $this->model));
    }

    public function init()
    {
        parent::init();
        if (!isset($this->options['class'])) {
            Html::addCssClass($this->options, 'container-right');
        }
    }
}