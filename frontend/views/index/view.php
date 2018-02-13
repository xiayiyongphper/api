<?php
/**
 * Created by PhpStorm.
 * User: Jason Y. wang
 * Date: 16-11-1
 * Time: 上午9:56
 */
/** @var $model \frontend\test\TestAbstract */
echo $model->route;
echo $model->request;
echo $model->response;
echo $model->description;
print_r($model->data);
echo "<a href=\"http://test.laile.com/customer/send?api={$api}\">send</a>";