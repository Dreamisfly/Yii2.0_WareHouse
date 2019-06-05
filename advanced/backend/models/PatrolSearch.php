<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Patrol;

/**
 * PatrolSearch represents the model behind the search form of `backend\models\Patrol`.
 */
class PatrolSearch extends Patrol
{
    public $wid_name;
    public $gid_name;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'wid', 'gid', 'status'], 'integer'],
            [['wid_name','gid_name'],'string'],
            [['patrol_information', 'hidden_danger', 'patrol_user'], 'safe'],
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
        $query = Patrol::find()
            ->joinWith('warehouse')
            ->joinWith('goods');;

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
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'patrol_information', $this->patrol_information])
            ->andFilterWhere(['like', 'hidden_danger', $this->hidden_danger])
            ->andFilterWhere(['like', 'patrol_user', $this->patrol_user]);
        $query->andFilterWhere(['like', 'warehouse.warehouse_name', $this->wid_name]);
        $query->andFilterWhere(['like', 'goods.goods_name', $this->gid_name]);

        return $dataProvider;
    }
}
