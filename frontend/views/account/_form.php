<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Account $model */
/** @var yii\widgets\ActiveForm $form */

    $options = ['maxlength' => true];
    if (!$model->isNewRecord) {
        $options = ['maxlength' => true, 'disabled'=>'disabled'];
        $model->password = "";
    }

?>

<div class="account-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput($options) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'role')->dropDownList(
            ['admin' => 'Admin', 'author' => 'Author']
    ); ?>

    <div class="form-group" style="padding-top:10px;">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
