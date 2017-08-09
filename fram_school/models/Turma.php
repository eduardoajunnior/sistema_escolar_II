<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "turma".
 *
 * @property string $idturma
 * @property string $idcurso
 * @property string $idprofessor
 * @property string $idetapa
 * @property string $data_inicio
 * @property string $data_fim
 * @property integer $status
 * @property string $idhorario
 *
 * @property Matricula[] $matriculas
 * @property Curso $idcurso0
 * @property Cursoturmahorario $idhorario0
 * @property Etapa $idetapa0
 * @property Professor $idprofessor0
 */
class Turma extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'turma';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcurso', 'idprofessor', 'idetapa', 'data_inicio', 'data_fim', 'status', 'idhorario'], 'required'],
            [['idcurso', 'idprofessor', 'idetapa', 'status', 'idhorario'], 'integer'],
            [['data_inicio', 'data_fim'], 'safe'],
            [['idcurso'], 'exist', 'skipOnError' => true, 'targetClass' => Curso::className(), 'targetAttribute' => ['idcurso' => 'idcurso']],
            [['idhorario'], 'exist', 'skipOnError' => true, 'targetClass' => Cursoturmahorario::className(), 'targetAttribute' => ['idhorario' => 'idhorario']],
            [['idetapa'], 'exist', 'skipOnError' => true, 'targetClass' => Etapa::className(), 'targetAttribute' => ['idetapa' => 'idetapa']],
            [['idprofessor'], 'exist', 'skipOnError' => true, 'targetClass' => Professor::className(), 'targetAttribute' => ['idprofessor' => 'idprofessor']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idturma' => 'Idturma',
            'idcurso' => 'Idcurso',
            'idprofessor' => 'Idprofessor',
            'idetapa' => 'Idetapa',
            'data_inicio' => 'Data Inicio',
            'data_fim' => 'Data Fim',
            'status' => 'Status',
            'idhorario' => 'Idhorario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatriculas()
    {
        return $this->hasMany(Matricula::className(), ['idturma' => 'idturma']);
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
    public function getIdhorario0()
    {
        return $this->hasOne(Cursoturmahorario::className(), ['idhorario' => 'idhorario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdetapa0()
    {
        return $this->hasOne(Etapa::className(), ['idetapa' => 'idetapa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdprofessor0()
    {
        return $this->hasOne(Professor::className(), ['idprofessor' => 'idprofessor']);
    }
}
