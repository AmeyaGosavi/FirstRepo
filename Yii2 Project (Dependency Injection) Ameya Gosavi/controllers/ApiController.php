<?php
namespace app\controllers;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii;
use app\APIManager\APIInterface;
use yii\di\Container;
use app\models\Modules;
class ApiController extends Controller
{
    protected $finder;
    public function __construct($id, $module, APIInterface $finder, $config = [])
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
    public function actionView($api_id)
    {
        $model = $this->finder->view($api_id);
        if(!empty($model)){
            return $this->render('view', [
                'model' => $model,
            ]);
        }
    }
    public function actionCreate()
    {
        $model = $this->finder->create();
        if(isset($model->api_id))
        {
            return $this->redirect(['view', 'api_id' => $model->api_id]);
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }
    public function actionUpdate($api_id)
    {
        $model = $this->finder->update($api_id);
        if(isset($model->api_id))
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
    public function actionList($id)
    {               
        $modules = Modules::find()
                ->where(['project_id' => $id])
                ->orderBy('id DESC')
                ->all();
                
        if (!empty($modules)) {
            foreach($modules as $module) {
                echo "<option value='".$module->module_id."'>".$module->title."</option>";
            }
        } else {
            echo "<option>-</option>";
        }
        
    }
}
Yii::$container->set('app\APIManager\APIInterface', 'app\APIManager\APIManager');