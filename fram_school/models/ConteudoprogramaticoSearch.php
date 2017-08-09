<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Conteudoprogramatico;

/**
 * ConteudoprogramaticoSearch represents the model behind the search form about `app\models\Conteudoprogramatico`.
 */
class ConteudoprogramaticoSearch extends Conteudoprogramatico
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idconteudoprogramatico', 'aula', 'idmodulo', 'status'], 'integer'],
            [['nome'], 'safe'],
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
        $query = Conteudoprogramatico::find();

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
            'idconteudoprogramatico' => $this->idconteudoprogramatico,
            'aula' => $this->aula,
            'idmodulo' => $this->idmodulo,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome]);

        return $dataProvider;
    }
}
