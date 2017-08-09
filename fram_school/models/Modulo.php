<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modulo".
 *
 * @property string $idmodulo
 * @property string $nome
 * @property integer $status
 * @property integer $carga_horaria
 *
 * @property Conteudoprogramatico[] $conteudoprogramaticos
 * @property Cursomodulo[] $cursomodulos
 * @property Curso[] $idcursos
 * @property ModuloAluno[] $moduloAlunos
 * @property Aluno[] $idalunos
 */
class Modulo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'modulo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'status', 'carga_horaria'], 'required'],
            [['status', 'carga_horaria'], 'integer'],
            [['nome'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idmodulo' => 'Idmodulo',
            'nome' => 'Nome',
            'status' => 'Status',
            'carga_horaria' => 'Carga Horaria',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConteudoprogramaticos()
    {
        return $this->hasMany(Conteudoprogramatico::className(), ['idmodulo' => 'idmodulo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCursomodulos()
    {
        return $this->hasMany(Cursomodulo::className(), ['idmodulo' => 'idmodulo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdcursos()
    {
        return $this->hasMany(Curso::className(), ['idcurso' => 'idcurso'])->viaTable('cursomodulo', ['idmodulo' => 'idmodulo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModuloAlunos()
    {
        return $this->hasMany(ModuloAluno::className(), ['idmodulo' => 'idmodulo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdalunos()
    {
        return $this->hasMany(Aluno::className(), ['idaluno' => 'idaluno'])->viaTable('modulo_aluno', ['idmodulo' => 'idmodulo']);
    }
}
