<?php

namespace app\ModuleManager;
use app\models\Modules;
use app\models\ModulesSearch;
use app\ModuleManager\ModuleInterface;
use Yii;

class ModuleManager implements ModuleInterface{
    public function index()
    {
        $request = Yii::$app->request;
        $searchModel = new ModulesSearch();
        $dataProvider = $searchModel->search($request->queryParams);

        return $array = [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ];
    }
    public function create(){
        $model = new Modules();

        $params = Yii::$app->getRequest()->getBodyParams();
        if (isset($params) && !empty($params)) {
            if ($model->load($params) && $model->save()) 
            {
                return $model;
            }
        } 
        else 
        {
            $model->loadDefaultValues();
        }
        return $model;
    }
    public function update($module_id)
    {
        $request = Yii::$app->request;
        $params = Yii::$app->getRequest()->getBodyParams();
        
        $model = Modules::findOne($module_id);
        if ($model !== null) 
        {
            if ($request->isPost && $model->load($params) && $model->save()) {
                return Yii::$app->response->redirect(['modules/view', 'module_id' => $model->module_id]);;
            }
            
        }
        return $model;
    }
    public function view($module_id)
    {
        return Modules::findOne($module_id);
    } 

    public function delete($module_id)
    {
        if(Modules::findOne($module_id)->delete())
        {
            return 1;
        }

    }  
}

?>