<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "feriado".
 *
 * @property string $idferiado
 * @property string $inicio_feriado
 * @property string $fim_feriado
 * @property string $idetapa
 *
 * @property Etapa $idetapa0
 */
class Feriado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'feriado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idferiado', 'inicio_feriado', 'fim_feriado', 'idetapa'], 'required'],
            [['idferiado', 'idetapa'], 'integer'],
            [['inicio_feriado', 'fim_feriado'], 'safe'],
            [['idetapa'], 'exist', 'skipOnError' => true, 'targetClass' => Etapa::className(), 'targetAttribute' => ['idetapa' => 'idetapa']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idferiado' => 'Idferiado',
            'inicio_feriado' => 'Inicio Feriado',
            'fim_feriado' => 'Fim Feriado',
            'idetapa' => 'Idetapa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdetapa0()
    {
        return $this->hasOne(Etapa::className(), ['idetapa' => 'idetapa']);
    }
}
