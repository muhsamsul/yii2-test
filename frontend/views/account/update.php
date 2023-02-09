<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Account $model */

$this->title = Yii::t('app', 'Update Account: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Accounts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'username' => $model->username]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="account-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
