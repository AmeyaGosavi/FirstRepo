<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Modules;

/**
 * ModulesSearch represents the model behind the search form of `app\models\Modules`.
 */
class ModulesSearch extends Modules
{

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['module_id', 'project_id'], 'integer'],
            [['module_title', 'module_description', 'project_id'], 'safe'],
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
        $query = Modules::find();
        $query->joinWith(['project']);
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
            'module_id' => $this->module_id,
            'project_id' => $this->project_id,
        ]);

        $query->andFilterWhere(['like', 'module_title', $this->module_title])
            ->andFilterWhere(['like', 'module_description', $this->module_description])->andFilterWhere(['like', 'project.project_title', $this->project_id]);

        return $dataProvider;
    }
}
