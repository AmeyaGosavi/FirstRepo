<?php
namespace app\APIManager;
use app\models\Api;
use app\models\ApiSearch;
use app\APIManager\APIInterface;
use Yii;

class APIManager implements APIInterface{
    public function index()
    {
        $request = Yii::$app->request;
        $searchModel = new ApiSearch();
        $dataProvider = $searchModel->search($request->queryParams);

        return $array = [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ];
    }
    public function create(){
        $model = new Api();
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
    public function update($api_id)
    {
        $request = Yii::$app->request;
        $params = Yii::$app->getRequest()->getBodyParams();
        
        $model = Api::findOne($api_id);
        if ($model !== null) 
        {
            if ($request->isPost && $model->load($params) && $model->save()) {
                return Yii::$app->response->redirect(['api/view', 'api_id' => $model->api_id]);;
            }
            
        }
        return $model;
    }
    public function delete($api_id)
    {
        if(Api::findOne($api_id)->delete())
        {
            return 1;
        }

    }
    public function view($api_id)
    {
        return Api::findOne($api_id);
    }    
}
?>