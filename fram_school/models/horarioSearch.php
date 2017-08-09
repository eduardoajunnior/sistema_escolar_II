<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\horario;

/**
 * horarioSearch represents the model behind the search form about `app\models\horario`.
 */
class horarioSearch extends horario
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idhorario', 'segunda', 'terca', 'quarta', 'quinta', 'sexta', 'sabado', 'status'], 'integer'],
            [['horainicio', 'horafim'], 'safe'],
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
        $query = horario::find();

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
            'idhorario' => $this->idhorario,
            'segunda' => $this->segunda,
            'terca' => $this->terca,
            'quarta' => $this->quarta,
            'quinta' => $this->quinta,
            'sexta' => $this->sexta,
            'sabado' => $this->sabado,
            'horainicio' => $this->horainicio,
            'horafim' => $this->horafim,
            'status' => $this->status,
        ]);

        return $dataProvider;
    }
}
