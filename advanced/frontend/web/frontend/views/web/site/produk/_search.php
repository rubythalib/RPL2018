<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProdukSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'codeProduk') ?>

    <?= $form->field($model, 'namaProduk') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'deskripsiProduk') ?>

    <?php // echo $form->field($model, 'Harga') ?>

    <?php // echo $form->field($model, 'uploudDate') ?>

    <?php // echo $form->field($model, 'uploadTime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
