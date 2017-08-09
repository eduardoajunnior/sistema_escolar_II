<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ModuloAluno;

/**
 * ModuloAlunoSearch represents the model behind the search form about `app\models\ModuloAluno`.
 */
class ModuloAlunoSearch extends ModuloAluno
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idaluno', 'idmodulo'], 'integer'],
            [['nota1', 'nota2'], 'number'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = ModuloAluno::find();

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
            'idaluno' => $this->idaluno,
            'idmodulo' => $this->idmodulo,
            'nota1' => $this->nota1,
            'nota2' => $this->nota2,
        ]);

        return $dataProvider;
    }
}
