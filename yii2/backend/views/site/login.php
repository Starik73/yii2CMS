<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Вход в административную панель';
?>
<div class="site-login">
    <div class="panel panel-info">
        <div class="panel-body">


            <h1 class="text-center"><?= Html::encode($this->title) ?></h1>

            <p>Оставь надежду всяк сюда входящий:</p>

            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Введите логин:') ?>

            <?= $form->field($model, 'password')->passwordInput()->label('Введите пароль:') ?>

            <?= $form->field($model, 'rememberMe')->checkbox()->label('запомнить') ?>

            <div class="form-group">
                <?= Html::submitButton('ВХОД', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>