<?php

echo \frontend\widget\SideNavWidget::widget([
    'items' => $menu,
    'options' => [
        'style' => [
            'width' => '120px',
            'float' => 'left'
        ]
    ]
]);
echo '<div class="result" style="float: left;width:1000px;padding-left: 20px">';
if (isset($exception)) {
    echo '<pre>';
    print_r($exception);
    exit();
}

echo '<div class="panel panel-default">';
echo '<div class="panel-heading">';
echo '请求参数:';
echo '</div>';
echo '<div class="panel-body">';
echo '<pre>';
print_r($request);
echo '</pre>';
echo '</div>';
echo '</div>';

echo '<div class="panel panel-default">';
echo '<div class="panel-heading">';
echo '接口时长:';
echo '</div>';
echo '<div class="panel-body">';
echo '<pre>';
print_r($time);
echo '</pre>';
echo '</div>';
echo '</div>';


echo '<div class="panel panel-default">';
echo '<div class="panel-heading">';
echo '返回包头:';
echo '</div>';
echo '<div class="panel-body">';
echo '<pre>';
print_r($header);
echo '</pre>';
echo '</div>';
echo '</div>';


echo '<div class="panel panel-default">';
echo '<div class="panel-heading">';
echo '返回包体:';
echo '</div>';
echo '<div class="panel-body">';
echo '<pre>';
print_r($body);
echo '</pre>';
echo '</div>';
echo '</div>';
    
