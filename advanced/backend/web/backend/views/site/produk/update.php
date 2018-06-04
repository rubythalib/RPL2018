<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Produk */

$this->title = 'Update Produk: ' . $model->codeProduk;
$this->params['breadcrumbs'][] = ['label' => 'Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codeProduk, 'url' => ['view', 'id' => $model->codeProduk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="produk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
