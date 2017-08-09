<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "conteudoprogramatico".
 *
 * @property string $idconteudoprogramatico
 * @property string $nome
 * @property integer $aula
 * @property string $idmodulo
 * @property integer $status
 *
 * @property Modulo $idmodulo0
 */
class Conteudoprogramatico extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'conteudoprogramatico';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'aula', 'idmodulo', 'status'], 'required'],
            [['aula', 'idmodulo', 'status'], 'integer'],
            [['nome'], 'string', 'max' => 255],
            [['idmodulo'], 'exist', 'skipOnError' => true, 'targetClass' => Modulo::className(), 'targetAttribute' => ['idmodulo' => 'idmodulo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idconteudoprogramatico' => 'Idconteudoprogramatico',
            'nome' => 'Nome',
            'aula' => 'Aula',
            'idmodulo' => 'Idmodulo',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdmodulo0()
    {
        return $this->hasOne(Modulo::className(), ['idmodulo' => 'idmodulo']);
    }
}
