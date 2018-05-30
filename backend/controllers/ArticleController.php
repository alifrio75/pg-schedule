<?php

namespace backend\controllers;

use Yii;
use app\models\Article;
use app\models\ArticleSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * ArticleController implements the CRUD actions for Article model.
 */
class ArticleController extends Controller
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
     * Lists all Article models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ArticleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionSort($status)
    {
        return $this->render('sort', [
            'model' => $this->findModel($status),
        ]);
    }
    
    public function actionTest($status)
    {
        $varr = $this->findModel($status);
    }

    /**
     * Displays a single Article model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Article model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Article();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $imageName = $model->id;
            $model->img1 = UploadedFile::getInstance($model, 'img1');
            if(empty($model->img1)) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                //BEGIN FILE UPLOAD CONTROLLER
                    $model->img1->saveAs( 'uploads/article/'.$imageName.'-1.'.$model->img1->extension );
                    $model->img1 = 'uploads/article/'.$imageName.'-1.'.$model->img1->extension;
                    $model->save();
                //END FILE UPLOAD CONTROLLER
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Article model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $dc = Article::find()->where(['id' =>  $id])->One();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
                if (empty($dc['img1'])) {
                    if ($model->load(Yii::$app->request->post()) && $model->save()) {
                        $imageName = $model->id;
                        $model->img1 = UploadedFile::getInstance($model, 'img1');
                        if(empty($model->img1)) {
                            return $this->redirect(['view', 'id' => $model->id]);
                        } else {
                            //BEGIN FILE UPLOAD CONTROLLER
                                $model->img1->saveAs( 'uploads/article/'.$imageName.'-1.'.$model->img1->extension );
                                $model->img1 = 'uploads/article/'.$imageName.'-1.'.$model->img1->extension;
                                $model->save();
                            //END FILE UPLOAD CONTROLLER
                        }
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                } else {
                    $model->img1 = $dc['img1'];
                    $model->save();
                }
            return $this->redirect(['view', 'id' => $model->id]);
        }
 
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Article model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Article model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Article the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Article::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
