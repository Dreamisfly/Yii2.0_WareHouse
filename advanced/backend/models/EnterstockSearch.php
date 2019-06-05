<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Enterstock;

/**
 * EnterstockSearch represents the model behind the search form of `backend\models\Enterstock`.
 */
class EnterstockSearch extends Enterstock
{
    public $wid_name;
    public $gid_name;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'wid', 'gid', 'num', 'type', 'price', 'enter_warehouse'], 'integer'],
            [['wid_name','gid_name'],'string'],
            [['enter_order', 'create_at'], 'safe'],
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
        $query = Enterstock::find ()
                ->joinWith('warehouse')
                ->joinWith('goods');

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

        // grid filtering conditions
        $query->andFilterWhere([
            'Id' => $this->Id,
            'wid' => $this->wid,
            'gid' => $this->gid,
            'num' => $this->num,
            'type' => $this->type,
            'price' => $this->price,
            'enter_warehouse' => $this->enter_warehouse,
            'create_at' => $this->create_at,
        ]);

        $query->andFilterWhere(['like', 'enter_order', $this->enter_order]);
        $query->andFilterWhere(['like', 'warehouse.warehouse_name', $this->wid_name]);
        $query->andFilterWhere(['like', 'goods.goods_name', $this->gid_name]);

        return $dataProvider;
    }
}
