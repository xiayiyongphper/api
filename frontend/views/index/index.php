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

echo \frontend\widget\DataWidget::widget([
    'model' => $model,
    'options' => [
        'style' => [
            'width' => '520px',
            'float' => 'right',
        ],
        'class' => 'container-right'
    ]
]);
