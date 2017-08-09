<?php

namespace app\controllers;

use Yii;
use app\models\ModuloAluno;
use app\models\ModuloAlunoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ModuloAlunoController implements the CRUD actions for ModuloAluno model.
 */
class ModuloAlunoController extends Controller
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
     * Lists all ModuloAluno models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ModuloAlunoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ModuloAluno model.
     * @param string $idaluno
     * @param string $idmodulo
     * @return mixed
     */
    public function actionView($idaluno, $idmodulo)
    {
        return $this->render('view', [
            'model' => $this->findModel($idaluno, $idmodulo),
        ]);
    }

    /**
     * Creates a new ModuloAluno model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ModuloAluno();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idaluno' => $model->idaluno, 'idmodulo' => $model->idmodulo]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ModuloAluno model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $idaluno
     * @param string $idmodulo
     * @return mixed
     */
    public function actionUpdate($idaluno, $idmodulo)
    {
        $model = $this->findModel($idaluno, $idmodulo);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idaluno' => $model->idaluno, 'idmodulo' => $model->idmodulo]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ModuloAluno model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $idaluno
     * @param string $idmodulo
     * @return mixed
     */
    public function actionDelete($idaluno, $idmodulo)
    {
        $this->findModel($idaluno, $idmodulo)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ModuloAluno model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $idaluno
     * @param string $idmodulo
     * @return ModuloAluno the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idaluno, $idmodulo)
    {
        if (($model = ModuloAluno::findOne(['idaluno' => $idaluno, 'idmodulo' => $idmodulo])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
