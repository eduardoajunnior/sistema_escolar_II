<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "frequenciamoduloaluno".
 *
 * @property string $idfrequenciamoduloaluno
 * @property string $data_
 * @property integer $presente
 * @property string $idaluno
 * @property string $idmodulo
 *
 * @property ModuloAluno $idaluno0
 */
class Frequenciamoduloaluno extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'frequenciamoduloaluno';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data_', 'presente', 'idaluno', 'idmodulo'], 'required'],
            [['data_'], 'safe'],
            [['presente', 'idaluno', 'idmodulo'], 'integer'],
            [['idaluno', 'idmodulo'], 'exist', 'skipOnError' => true, 'targetClass' => ModuloAluno::className(), 'targetAttribute' => ['idaluno' => 'idaluno', 'idmodulo' => 'idmodulo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idfrequenciamoduloaluno' => 'Idfrequenciamoduloaluno',
            'data_' => 'Data',
            'presente' => 'Presente',
            'idaluno' => 'Idaluno',
            'idmodulo' => 'Idmodulo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdaluno0()
    {
        return $this->hasOne(ModuloAluno::className(), ['idaluno' => 'idaluno', 'idmodulo' => 'idmodulo']);
    }
}
