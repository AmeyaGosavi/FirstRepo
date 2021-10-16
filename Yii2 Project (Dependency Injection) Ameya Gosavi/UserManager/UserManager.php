<?php

namespace app\UserManager;
use app\models\Users;
use app\models\UsersSearch;
use app\UserManager\UserInterface;
use Yii;

class UserManager implements UserInterface{

    public function index()
    {
        $request = Yii::$app->request;
        $searchModel = new UsersSearch();
        $dataProvider = $searchModel->search($request->queryParams);

        return $array = [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ];
    }

    public function create(){
        $model = new Users();
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
    public function update($user_id)
    {
        $request = Yii::$app->request;
        $params = Yii::$app->getRequest()->getBodyParams();
        
        $model = Users::findOne($user_id);
        if ($model !== null) 
        {
            if ($request->isPost && $model->load($params) && $model->save()) {
                return Yii::$app->response->redirect(['users/view', 'user_id' => $model->user_id]);;
            }
            
        }
        return $model;
    }
    public function delete($user_id)
    {
        if(Users::findOne($user_id)->delete())
        {
            return 1;
        }

    }
    public function view($user_id)
    {
        return Users::findOne($user_id);
    }    
}

?>