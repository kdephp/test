<?php


use app\modules\user\Module;

/* @var $this yii\web\View */
/* @var $model app\modules\user\models\User */

$this->title = Module::t('module', 'TITLE_ALL_USERS');
$this->params['breadcrumbs'][] = ['label' => Module::t('module', 'TITLE_PROFILE'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
foreach ($item as $items) {
    $i++;

    echo $i . '. <a title="' . $items['name'] . '" href="/profile/user'. $items['id'] . '">' . $items['email'] . '</a><br>';
}