<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cursomodulo".
 *
 * @property string $idmodulo
 * @property string $idcurso
 * @property integer $ordem
 *
 * @property Curso $idcurso0
 * @property Modulo $idmodulo0
 */
class Cursomodulo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cursomodulo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idmodulo', 'idcurso', 'ordem'], 'required'],
            [['idmodulo', 'idcurso', 'ordem'], 'integer'],
            [['idcurso'], 'exist', 'skipOnError' => true, 'targetClass' => Curso::className(), 'targetAttribute' => ['idcurso' => 'idcurso']],
            [['idmodulo'], 'exist', 'skipOnError' => true, 'targetClass' => Modulo::className(), 'targetAttribute' => ['idmodulo' => 'idmodulo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idmodulo' => 'Idmodulo',
            'idcurso' => 'Idcurso',
            'ordem' => 'Ordem',
        ];
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
    public function getIdmodulo0()
    {
        return $this->hasOne(Modulo::className(), ['idmodulo' => 'idmodulo']);
    }
}
