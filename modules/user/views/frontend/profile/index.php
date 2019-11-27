<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\modules\user\Module;

/* @var $this yii\web\View */
/* @var $model app\modules\user\models\User */

$this->title = Module::t('module', 'TITLE_PROFILE');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-profile">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Module::t('module', 'BUTTON_UPDATE'), ['update'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Module::t('module', 'LINK_PASSWORD_CHANGE'), ['password-change'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Module::t('module', 'BUTTON_INFO'), ['info'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Module::t('module', 'BUTTON_ALL_USERS'), ['users'], ['class' => 'btn btn-primary']) ?>
    </p>


    <?php
    
    ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'login',
            'email',
            'gender' ,
            'info' ,


        ],

    ]) ?>

</div>

