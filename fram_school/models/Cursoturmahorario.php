<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cursoturmahorario".
 *
 * @property string $idhorario
 * @property string $idcurso
 * @property integer $status
 *
 * @property Horario $idhorario0
 * @property Curso $idcurso0
 * @property Turma[] $turmas
 */
class Cursoturmahorario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cursoturmahorario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idhorario', 'idcurso', 'status'], 'required'],
            [['idhorario', 'idcurso', 'status'], 'integer'],
            [['idhorario'], 'exist', 'skipOnError' => true, 'targetClass' => Horario::className(), 'targetAttribute' => ['idhorario' => 'idhorario']],
            [['idcurso'], 'exist', 'skipOnError' => true, 'targetClass' => Curso::className(), 'targetAttribute' => ['idcurso' => 'idcurso']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idhorario' => 'Idhorario',
            'idcurso' => 'Idcurso',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdhorario0()
    {
        return $this->hasOne(Horario::className(), ['idhorario' => 'idhorario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdcurso0()
    {
        return $this->hasOne(Curso::className(), ['idcurso' => 'idcurso']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTurmas()
    {
        return $this->hasMany(Turma::className(), ['idhorario' => 'idhorario']);
    }
}
