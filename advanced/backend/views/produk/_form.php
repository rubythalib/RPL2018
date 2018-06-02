<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Produk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produk-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'namaProduk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsiProduk')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Harga')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
