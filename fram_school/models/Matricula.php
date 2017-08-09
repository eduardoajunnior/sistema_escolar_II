<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "matricula".
 *
 * @property string $idturma
 * @property string $idaluno
 * @property string $status
 * @property string $idmatricula
 *
 * @property Aluno $idaluno0
 * @property Turma $idturma0
 */
class Matricula extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'matricula';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idturma', 'idaluno', 'status'], 'required'],
            [['idturma', 'idaluno'], 'integer'],
            [['status'], 'string', 'max' => 45],
            [['idaluno'], 'exist', 'skipOnError' => true, 'targetClass' => Aluno::className(), 'targetAttribute' => ['idaluno' => 'idaluno']],
            [['idturma'], 'exist', 'skipOnError' => true, 'targetClass' => Turma::className(), 'targetAttribute' => ['idturma' => 'idturma']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idturma' => 'Idturma',
            'idaluno' => 'Idaluno',
            'status' => 'Status',
            'idmatricula' => 'Idmatricula',
        ];
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
    public function getIdturma0()
    {
        return $this->hasOne(Turma::className(), ['idturma' => 'idturma']);
    }
}
