<?php

namespace backend\controllers;

use Yii;
use app\models\Atlet;
use app\models\AtletSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * AtletController implements the CRUD actions for Atlet model.
 */
class AtletController extends Controller
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
     * Lists all Atlet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AtletSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Atlet model.
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
     * Creates a new Atlet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Atlet();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $imageName = $model->name;
            $model->avatar = UploadedFile::getInstance($model, 'avatar');
            if(empty($model->avatar)) {
                return $this->redirect(['view', 'id' => $model->id]);
                throw new NotFoundHttpException('Avatar Required!');
            } else {
                //BEGIN FILE UPLOAD CONTROLLER
                    $model->avatar->saveAs( 'uploads/atlet/'.$imageName.'-1.'.$model->avatar->extension );
                    $model->avatar = 'uploads/atlet/'.$imageName.'-1.'.$model->avatar->extension;
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
     * Updates an existing Atlet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $dc = Atlet::find()->where(['id' =>  $id])->One();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
             $imageName = $model->id;
                if (empty($dc['avatar'])) {
                    if ($model->load(Yii::$app->request->post()) && $model->save()) {
                       
                        $model->avatar = UploadedFile::getInstance($model, 'avatar');
                        if(empty($model->avatar)) {
                            return $this->redirect(['view', 'id' => $model->id]);
                        } else {
                            //BEGIN FILE UPLOAD CONTROLLER
                                $model->avatar->saveAs( 'uploads/atlet/'.$imageName.'-1.'.$model->avatar->extension );
                                $model->avatar = 'uploads/atlet/'.$imageName.'-1.'.$model->avatar->extension;
                                $model->save();
                            //END FILE UPLOAD CONTROLLER
                        }
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                } else {
                    $model->avatar = $dc['avatar'];
                    $model->save();
                }
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Atlet model.
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
     * Finds the Atlet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Atlet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Atlet::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
