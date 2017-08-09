<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modulo_aluno".
 *
 * @property string $idaluno
 * @property string $idmodulo
 * @property double $nota1
 * @property double $nota2
 *
 * @property Frequenciamoduloaluno[] $frequenciamoduloalunos
 * @property Aluno $idaluno0
 * @property Modulo $idmodulo0
 */
class ModuloAluno extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'modulo_aluno';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idaluno', 'idmodulo', 'nota1', 'nota2'], 'required'],
            [['idaluno', 'idmodulo'], 'integer'],
            [['nota1', 'nota2'], 'number'],
            [['idaluno'], 'exist', 'skipOnError' => true, 'targetClass' => Aluno::className(), 'targetAttribute' => ['idaluno' => 'idaluno']],
            [['idmodulo'], 'exist', 'skipOnError' => true, 'targetClass' => Modulo::className(), 'targetAttribute' => ['idmodulo' => 'idmodulo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idaluno' => 'Idaluno',
            'idmodulo' => 'Idmodulo',
            'nota1' => 'Nota1',
            'nota2' => 'Nota2',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFrequenciamoduloalunos()
    {
        return $this->hasMany(Frequenciamoduloaluno::className(), ['idaluno' => 'idaluno', 'idmodulo' => 'idmodulo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdaluno0()
    {
        return $this->hasOne(Aluno::className(), ['idaluno' => 'idaluno']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdmodulo0()
    {
        return $this->hasOne(Modulo::className(), ['idmodulo' => 'idmodulo']);
    }
}
