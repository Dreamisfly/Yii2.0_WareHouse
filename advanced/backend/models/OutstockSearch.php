<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Outstock;

/**
 * OutstockSearch represents the model behind the search form of `backend\models\Outstock`.
 */
class OutstockSearch extends Outstock
{
    public $wid_name;
    public $gid_name;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'wid', 'gid', 'num', 'price'], 'integer'],
            [['wid_name','gid_name'],'string'],
            [['out_order', 'type', 'out_warehouse', 'create_at'], 'safe'],
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
        $query = Outstock::find()
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
            'price' => $this->price,
            'create_at' => $this->create_at,
        ]);

        $query->andFilterWhere(['like', 'out_order', $this->out_order])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'out_warehouse', $this->out_warehouse]);
        $query->andFilterWhere(['like', 'warehouse.warehouse_name', $this->wid_name]);
        $query->andFilterWhere(['like', 'goods.goods_name', $this->gid_name]);

        return $dataProvider;
    }
}
