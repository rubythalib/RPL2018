<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Produk */

$this->title = $model->codeProduk;
$this->params['breadcrumbs'][] = ['label' => 'Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produk-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->codeProduk], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->codeProduk], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id0.username',
            [
                'attribute'=>'image',
                'value'=> 'http://localhost/advanced/image/'.$model->image,
                'format'=>['image',['widht'=>'500']],
            ],
            'codeProduk',
            'namaProduk',
            // 'username',
            'deskripsiProduk:ntext',
            'Harga',
            'id0.alamatToko',
            'uploadDate',
        ],
    ]) ?>

</div>
