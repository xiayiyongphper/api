<div class="container-fluid" style="float: left;width:1000px;">

<?php
/**
 * Created by PhpStorm.
 * User: Jason Y. wang
 * Date: 16-11-7
 * Time: 下午6:13
 */

echo '<div class="panel panel-default">';
echo '<div class="panel-heading">';
echo '描述';
echo '</div>';
echo '<div class="panel-body">';
/** @var \frontend\test\TestAbstract $model */
echo $model->description;
echo '</div>';
echo '</div>';

echo '<div class="panel panel-default">';
echo '<div class="panel-heading">';
echo '请求proto文件';
echo '</div>';
//echo '请求proto文件:';
echo '<div class="panel-body">';
print_r($model->request);
//echo '</pre>';
echo '</div>';
echo '</div>';


echo '<div class="panel panel-default">';
echo '<div class="panel-heading">';
echo '返回proto文件:';
echo '</div>';
echo '<div class="panel-body">';
print_r($model->response);
echo '</div>';
echo '</div>';

echo '<div class="panel panel-default">';
echo '<div class="panel-heading">';
echo '命令:';
echo '</div>';
echo '<div class="panel-body">';
print_r($model->route);
echo '</div>';
echo '</div>';

echo '<div class="panel panel-default">';
echo '<div class="panel-heading">';
echo '参数';
echo '</div>';
echo '<div class="panel-body">';
$data = $model->data;
$form = \yii\bootstrap\ActiveForm::begin(['id' => 'customer','action' => 'index/send']);
echo \yii\helpers\Html::textInput('class',get_class($model), ['class' => 'form-control','type' => 'hidden']);
if($data){
    foreach ($data as $key => $item) {
        echo \yii\helpers\Html::label($item['label']);
        echo \yii\helpers\Html::textInput('data_'.$key,$item['value'], ['class' => 'form-control','style' => 'margin-bottom: 20px;']);
//    \yii\bootstrap\Html::activeTextInput()
    }
}

echo '<div class="form-group">';
echo \yii\helpers\Html::submitButton('Send', ['class' => 'btn btn-primary', 'name' => 'login-button']);
echo '</div>';
\yii\bootstrap\ActiveForm::end();
echo '</div>';
echo '</div>';
?>
</div>
