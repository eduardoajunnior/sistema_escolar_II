<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property string $id
 * @property string $password
 * @property string $username
 * @property string $perfil
 * @property string $acesstoken
 * @property string $authkey
 *
 * @property Professor $professor
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['password', 'username', 'perfil', 'acesstoken', 'authkey'], 'required'],
            [['password', 'perfil'], 'string', 'max' => 45],
            [['username', 'acesstoken', 'authkey'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'password' => 'Password',
            'username' => 'Username',
            'perfil' => 'Perfil',
            'acesstoken' => 'Acesstoken',
            'authkey' => 'Authkey',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfessor()
    {
        return $this->hasOne(Professor::className(), ['idprofessor' => 'id']);
    }
}
