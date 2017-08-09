<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cursomodulo;

/**
 * CursomoduloSearch represents the model behind the search form about `app\models\Cursomodulo`.
 */
class CursomoduloSearch extends Cursomodulo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idmodulo', 'idcurso', 'ordem'], 'integer'],
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
        $query = Cursomodulo::find();

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
            'idmodulo' => $this->idmodulo,
            'idcurso' => $this->idcurso,
            'ordem' => $this->ordem,
        ]);

        return $dataProvider;
    }
}
