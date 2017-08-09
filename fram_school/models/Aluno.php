<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aluno".
 *
 * @property string $idaluno
 * @property string $nome
 * @property string $rg
 * @property string $cpf
 * @property string $endereco
 * @property string $telefone
 * @property string $cep
 * @property string $bairro
 *
 * @property Matricula[] $matriculas
 * @property ModuloAluno[] $moduloAlunos
 * @property Modulo[] $idmodulos
 */
class Aluno extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aluno';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'rg'], 'required','message'=>'Preencha o campo!'],
            [['nome', 'bairro'], 'string', 'max' => 45],
            [['rg'], 'string', 'max' => 15],
            [['cpf'], 'string', 'max' => 11],
            [['endereco'], 'string', 'max' => 255],
            [['telefone'], 'string', 'max' => 8],
            [['cep'], 'string', 'max' => 7],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idaluno' => 'Id',
            'nome' => 'Nome do Aluno',
            'rg' => 'Rg do Aluno',
            'cpf' => 'Cpf do Aluno',
            'endereco' => 'Endereco',
            'telefone' => 'Telefone',
            'cep' => 'Cep',
            'bairro' => 'Bairro',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatriculas()
    {
        return $this->hasMany(Matricula::className(), ['idaluno' => 'idaluno']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModuloAlunos()
    {
        return $this->hasMany(ModuloAluno::className(), ['idaluno' => 'idaluno']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdmodulos()
    {
        return $this->hasMany(Modulo::className(), ['idmodulo' => 'idmodulo'])->viaTable('modulo_aluno', ['idaluno' => 'idaluno']);
    }
}
