<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Inventory;

/**
 * InventorySearch represents the model behind the search form of `backend\models\Inventory`.
 */
class InventorySearch extends Inventory
{
    public $wid_name;
    public $gid_name;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'gid', 'wid'], 'integer'],
            [['wid_name','gid_name'],'string'],
            [['inventory_free', 'inventory_status', 'inventory_date', 'inventory_user'], 'safe'],
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
        $query = Inventory::find()
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
            'gid' => $this->gid,
            'wid' => $this->wid,
            'inventory_date' => $this->inventory_date,
        ]);

        $query->andFilterWhere(['like', 'inventory_free', $this->inventory_free])
            ->andFilterWhere(['like', 'inventory_status', $this->inventory_status])
            ->andFilterWhere(['like', 'inventory_user', $this->inventory_user]);
        $query->andFilterWhere(['like', 'warehouse.warehouse_name', $this->wid_name]);
        $query->andFilterWhere(['like', 'goods.goods_name', $this->gid_name]);

        return $dataProvider;
    }
}
