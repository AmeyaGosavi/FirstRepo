<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Api;


class ApiSearch extends Api
{
    public $api_title;
    public $api_url;
    public function rules()
    {
        return [
            [['api_title', 'api_url'], 'safe'],
        ];
    }

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
        $query = Api::find();
        
        $this->load($params);
        $query->orFilterWhere(['like', 'title', $this->api_title]);
        $query->orFilterWhere(['like', 'url', $this->api_url]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 2,
            ],
            'sort' => [
                'attributes' => ['title', 'method'],
            ]
        ]);

        
        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        return $dataProvider;
    }
}
