<?php
namespace app\controllers;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\UserManager\UserInterface;
use yii\di\Container;
use Yii;
class UsersController extends Controller
{
    protected $finder;
    public function __construct($id, $module, UserInterface $finder, $config = [])
    {
        $this->finder = $finder;
        parent::__construct($id, $module, $config);
    }
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }
    public function actionIndex()
    {
        $model = $this->finder->index();
        return $this->render('index', $model);
    }
    public function actionView($user_id)
    {
        $model = $this->finder->view($user_id);
        if(!empty($model)){
            return $this->render('view', [
                'model' => $model,
            ]);
        }
    }
    public function actionCreate()
    {
        $model = $this->finder->create();
        if(isset($model->user_id))
        {
            return $this->redirect(['view', 'user_id' => $model->user_id]);
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }
    public function actionUpdate($user_id)
    {
        $model = $this->finder->update($user_id);
        if(isset($model->user_id))
        {
            return $this->render('update', [
            'model' => $model,
            ]);
        }
    }
    public function actionDelete($id)
    {
        $model = $this->finder->delete($id);
        if($model == 1)
        {
            return $this->redirect(['index']);
        }
        return $this->redirect(['index']);
    }
}
Yii::$container->set('app\UserManager\UserInterface', 'app\UserManager\UserManager');