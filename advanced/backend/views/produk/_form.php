<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model backend\models\Produk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produk-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

	<?= $form->field($model, 'id')->textInput() ?>  

	<?= $form->field($model, 'id')->dropDownList(
		ArrayHelper::map(User::find()->all(),'id','username'),
		['prompt'=>'Select username']
	) ?>  

	<?= $form->field($model,'image1')->fileInput();  ?>

    <?= $form->field($model, 'namaProduk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsiProduk')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Harga')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
