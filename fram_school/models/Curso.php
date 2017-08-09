<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "curso".
 *
 * @property string $idcurso
 * @property string $nome
 * @property integer $status
 * @property string $idmodalidade
 * @property integer $versao
 * @property integer $quantidadeturma
 *
 * @property Modalidade $idmodalidade0
 * @property Cursomodulo[] $cursomodulos
 * @property Modulo[] $idmodulos
 * @property Cursoturmahorario[] $cursoturmahorarios
 * @property Horario[] $idhorarios
 * @property Turma[] $turmas
 */
class Curso extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'curso';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'status', 'idmodalidade', 'versao', 'quantidadeturma'], 'required'],
            [['status', 'idmodalidade', 'versao', 'quantidadeturma'], 'integer'],
            [['nome'], 'string', 'max' => 45],
            [['idmodalidade'], 'exist', 'skipOnError' => true, 'targetClass' => Modalidade::className(), 'targetAttribute' => ['idmodalidade' => 'idmodalidade']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcurso' => 'Idcurso',
            'nome' => 'Nome',
            'status' => 'Status',
            'idmodalidade' => 'Idmodalidade',
            'versao' => 'Versao',
            'quantidadeturma' => 'Quantidadeturma',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdmodalidade0()
    {
        return $this->hasOne(Modalidade::className(), ['idmodalidade' => 'idmodalidade']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCursomodulos()
    {
        return $this->hasMany(Cursomodulo::className(), ['idcurso' => 'idcurso']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdmodulos()
    {
        return $this->hasMany(Modulo::className(), ['idmodulo' => 'idmodulo'])->viaTable('cursomodulo', ['idcurso' => 'idcurso']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCursoturmahorarios()
    {
        return $this->hasMany(Cursoturmahorario::className(), ['idcurso' => 'idcurso']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdhorarios()
    {
        return $this->hasMany(Horario::className(), ['idhorario' => 'idhorario'])->viaTable('cursoturmahorario', ['idcurso' => 'idcurso']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTurmas()
    {
        return $this->hasMany(Turma::className(), ['idcurso' => 'idcurso']);
    }
}
