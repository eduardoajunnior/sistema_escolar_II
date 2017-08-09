<?php

namespace app\controllers;

use Yii;
use app\models\Cursomodulo;
use app\models\CursomoduloSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CursomoduloController implements the CRUD actions for Cursomodulo model.
 */
class CursomoduloController extends Controller
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
     * Lists all Cursomodulo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CursomoduloSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Cursomodulo model.
     * @param string $idmodulo
     * @param string $idcurso
     * @return mixed
     */
    public function actionView($idmodulo, $idcurso)
    {
        return $this->render('view', [
            'model' => $this->findModel($idmodulo, $idcurso),
        ]);
    }

    /**
     * Creates a new Cursomodulo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Cursomodulo();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idmodulo' => $model->idmodulo, 'idcurso' => $model->idcurso]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Cursomodulo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $idmodulo
     * @param string $idcurso
     * @return mixed
     */
    public function actionUpdate($idmodulo, $idcurso)
    {
        $model = $this->findModel($idmodulo, $idcurso);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idmodulo' => $model->idmodulo, 'idcurso' => $model->idcurso]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Cursomodulo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $idmodulo
     * @param string $idcurso
     * @return mixed
     */
    public function actionDelete($idmodulo, $idcurso)
    {
        $this->findModel($idmodulo, $idcurso)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Cursomodulo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $idmodulo
     * @param string $idcurso
     * @return Cursomodulo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idmodulo, $idcurso)
    {
        if (($model = Cursomodulo::findOne(['idmodulo' => $idmodulo, 'idcurso' => $idcurso])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
