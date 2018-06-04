<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Produk;

/**
 * ProdukSearch represents the model behind the search form of `frontend\models\Produk`.
 */
class ProdukSearch extends Produk
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codeProduk', 'Harga'], 'integer'],
            [['namaProduk','id', 'deskripsiProduk', 'uploadDate'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Produk::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('id0');

        // grid filtering conditions
        $query->andFilterWhere([
            'codeProduk' => $this->codeProduk,
            'Harga' => $this->Harga,
            'uploadDate' => $this->uploadDate,
        ]);

        $query->andFilterWhere(['like', 'namaProduk', $this->namaProduk])
            ->andFilterWhere(['like', 'deskripsiProduk', $this->deskripsiProduk])
            ->andFilterWhere(['like', 'user.username', $this->id]);

        return $dataProvider;
    }
}
