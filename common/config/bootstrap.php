<?php
Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');
Yii::setAlias('@service', dirname(dirname(__DIR__)) . '/service');
Yii::setAlias('framework', dirname(dirname(__DIR__)) . '/framework');
Yii::setAlias('service/message', dirname(dirname(__DIR__)) . '/service/proto/7/message');
Yii::setAlias('@test', '@frontend/test');
