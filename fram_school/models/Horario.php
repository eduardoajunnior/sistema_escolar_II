<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "horario".
 *
 * @property string $idhorario
 * @property integer $segunda
 * @property integer $terca
 * @property integer $quarta
 * @property integer $quinta
 * @property integer $sexta
 * @property integer $sabado
 * @property string $horainicio
 * @property string $horafim
 * @property integer $status
 *
 * @property Cursoturmahorario[] $cursoturmahorarios
 * @property Curso[] $idcursos
 */
class Horario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'horario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['segunda', 'terca', 'quarta', 'quinta', 'sexta', 'sabado', 'status'], 'integer'],
            [['horainicio', 'horafim', 'status'], 'required'],
            [['horainicio', 'horafim'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idhorario' => 'Idhorario',
            'segunda' => 'Segunda',
            'terca' => 'Terca',
            'quarta' => 'Quarta',
            'quinta' => 'Quinta',
            'sexta' => 'Sexta',
            'sabado' => 'Sabado',
            'horainicio' => 'Horainicio',
            'horafim' => 'Horafim',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCursoturmahorarios()
    {
        return $this->hasMany(Cursoturmahorario::className(), ['idhorario' => 'idhorario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdcursos()
    {
        return $this->hasMany(Curso::className(), ['idcurso' => 'idcurso'])->viaTable('cursoturmahorario', ['idhorario' => 'idhorario']);
    }
}
