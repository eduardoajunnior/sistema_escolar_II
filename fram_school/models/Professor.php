<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "professor".
 *
 * @property string $idprofessor
 * @property string $nome
 * @property string $cpf
 * @property string $email
 * @property resource $foto
 *
 * @property Usuario $idprofessor0
 * @property Turma[] $turmas
 */
class Professor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'professor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idprofessor', 'nome', 'cpf'], 'required'],
            [['idprofessor'], 'integer'],
            [['foto'], 'string'],
            [['nome', 'cpf', 'email'], 'string', 'max' => 45],
            [['idprofessor'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['idprofessor' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idprofessor' => 'Idprofessor',
            'nome' => 'Nome',
            'cpf' => 'Cpf',
            'email' => 'Email',
            'foto' => 'Foto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdprofessor0()
    {
        return $this->hasOne(Usuario::className(), ['id' => 'idprofessor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTurmas()
    {
        return $this->hasMany(Turma::className(), ['idprofessor' => 'idprofessor']);
    }
}
