
<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\modules\user\Module;

/* @var $this yii\web\View */
/* @var $model app\modules\user\models\User */


$this->title = Module::t('module', 'TITLE_PROFILE_INFO');
$this->params['breadcrumbs'][] = ['label' => Module::t('module', 'TITLE_PROFILE'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>



<h2>Email:</h2><br><?php echo $item['email']; ?>
<?php
if (empty($info['info'])){
    echo '<br>Для просмотра дополнительной информации <a href="info">заполните свой профиль</a>';
}
else{
    echo '<br><h2>Информация о пользотвателе:</h2><br>' . $item['info'];
}


 ?>

