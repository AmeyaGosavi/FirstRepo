<?php
namespace app\controllers;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\ProjectManager\ProjectInterface;
use yii\di\Container;
use Yii;
class ProjectController extends Controller
{
    protected $finder;
    public function __construct($id, $module, ProjectInterface $finder, $config = [])
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
    public function actionView($project_id)
    {
        $model = $this->finder->view($project_id);
        if(!empty($model)){
            return $this->render('view', [
                'model' => $model,
            ]);
        }
    }
    public function actionCreate()
    {
        $model = $this->finder->create();
        if(isset($model->project_id))
        {
            return $this->redirect(['view', 'project_id' => $model->project_id]);
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }
    public function actionUpdate($project_id)
    {
        $model = $this->finder->update($project_id);
        if(isset($model->project_id))
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
Yii::$container->set('app\ProjectManager\ProjectInterface', 'app\ProjectManager\ProjectManager');