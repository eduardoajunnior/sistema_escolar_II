<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "etapa".
 *
 * @property string $idetapa
 * @property integer $etapa
 * @property string $ano
 *
 * @property Feriado[] $feriados
 * @property Turma[] $turmas
 */
class Etapa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'etapa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['etapa', 'ano'], 'required'],
            [['etapa'], 'integer'],
            [['ano'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idetapa' => 'Idetapa',
            'etapa' => 'Etapa',
            'ano' => 'Ano',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFeriados()
    {
        return $this->hasMany(Feriado::className(), ['idetapa' => 'idetapa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTurmas()
    {
        return $this->hasMany(Turma::className(), ['idetapa' => 'idetapa']);
    }
}
