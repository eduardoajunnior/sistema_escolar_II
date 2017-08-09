<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modalidade".
 *
 * @property string $idmodalidade
 * @property string $nome
 * @property integer $status
 *
 * @property Curso[] $cursos
 */
class Modalidade extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'modalidade';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'status'], 'required'],
            [['status'], 'integer'],
            [['nome'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idmodalidade' => 'Idmodalidade',
            'nome' => 'Nome',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCursos()
    {
        return $this->hasMany(Curso::className(), ['idmodalidade' => 'idmodalidade']);
    }
}
