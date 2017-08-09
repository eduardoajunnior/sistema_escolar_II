<?php

namespace app\controllers;

use Yii;
use app\models\Cursoturmahorario;
use app\models\CursoturmahorarioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CursoturmahorarioController implements the CRUD actions for Cursoturmahorario model.
 */
class CursoturmahorarioController extends Controller
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
     * Lists all Cursoturmahorario models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CursoturmahorarioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Cursoturmahorario model.
     * @param string $idhorario
     * @param string $idcurso
     * @return mixed
     */
    public function actionView($idhorario, $idcurso)
    {
        return $this->render('view', [
            'model' => $this->findModel($idhorario, $idcurso),
        ]);
    }

    /**
     * Creates a new Cursoturmahorario model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Cursoturmahorario();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idhorario' => $model->idhorario, 'idcurso' => $model->idcurso]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Cursoturmahorario model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $idhorario
     * @param string $idcurso
     * @return mixed
     */
    public function actionUpdate($idhorario, $idcurso)
    {
        $model = $this->findModel($idhorario, $idcurso);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idhorario' => $model->idhorario, 'idcurso' => $model->idcurso]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Cursoturmahorario model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $idhorario
     * @param string $idcurso
     * @return mixed
     */
    public function actionDelete($idhorario, $idcurso)
    {
        $this->findModel($idhorario, $idcurso)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Cursoturmahorario model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $idhorario
     * @param string $idcurso
     * @return Cursoturmahorario the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idhorario, $idcurso)
    {
        if (($model = Cursoturmahorario::findOne(['idhorario' => $idhorario, 'idcurso' => $idcurso])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
