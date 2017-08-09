<?php

namespace app\controllers;

use Yii;
use app\models\Frequenciamoduloaluno;
use app\models\FrequenciamoduloalunoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FrequenciamoduloalunoController implements the CRUD actions for Frequenciamoduloaluno model.
 */
class FrequenciamoduloalunoController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Frequenciamoduloaluno models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FrequenciamoduloalunoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Frequenciamoduloaluno model.
     * @param string $idfrequenciamoduloaluno
     * @param string $idaluno
     * @param string $idmodulo
     * @return mixed
     */
    public function actionView($idfrequenciamoduloaluno, $idaluno, $idmodulo)
    {
        return $this->render('view', [
            'model' => $this->findModel($idfrequenciamoduloaluno, $idaluno, $idmodulo),
        ]);
    }

    /**
     * Creates a new Frequenciamoduloaluno model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Frequenciamoduloaluno();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idfrequenciamoduloaluno' => $model->idfrequenciamoduloaluno, 'idaluno' => $model->idaluno, 'idmodulo' => $model->idmodulo]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Frequenciamoduloaluno model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $idfrequenciamoduloaluno
     * @param string $idaluno
     * @param string $idmodulo
     * @return mixed
     */
    public function actionUpdate($idfrequenciamoduloaluno, $idaluno, $idmodulo)
    {
        $model = $this->findModel($idfrequenciamoduloaluno, $idaluno, $idmodulo);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idfrequenciamoduloaluno' => $model->idfrequenciamoduloaluno, 'idaluno' => $model->idaluno, 'idmodulo' => $model->idmodulo]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Frequenciamoduloaluno model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $idfrequenciamoduloaluno
     * @param string $idaluno
     * @param string $idmodulo
     * @return mixed
     */
    public function actionDelete($idfrequenciamoduloaluno, $idaluno, $idmodulo)
    {
        $this->findModel($idfrequenciamoduloaluno, $idaluno, $idmodulo)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Frequenciamoduloaluno model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $idfrequenciamoduloaluno
     * @param string $idaluno
     * @param string $idmodulo
     * @return Frequenciamoduloaluno the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idfrequenciamoduloaluno, $idaluno, $idmodulo)
    {
        if (($model = Frequenciamoduloaluno::findOne(['idfrequenciamoduloaluno' => $idfrequenciamoduloaluno, 'idaluno' => $idaluno, 'idmodulo' => $idmodulo])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
