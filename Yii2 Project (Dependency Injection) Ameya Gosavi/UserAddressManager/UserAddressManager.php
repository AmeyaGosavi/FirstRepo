<?php

namespace app\UserAddressManager;
use app\models\Useraddress;
use app\models\AddressSearch;
use app\UserAddressManager\UserAddressInterface;
use Yii;

class UserAddressManager implements UserAddressInterface{
    public function index()
    {
        $request = Yii::$app->request;
        $searchModel = new AddressSearch();
        $dataProvider = $searchModel->search($request->queryParams);

        return $array = [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ];
    }
    public function create(){
        $model = new Useraddress();

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
    public function update($user_address_id)
    {
        $request = Yii::$app->request;
        $params = Yii::$app->getRequest()->getBodyParams();
        
        $model = Useraddress::findOne($user_address_id);
        if ($model !== null) 
        {
            if ($request->isPost && $model->load($params) && $model->save()) {
                return Yii::$app->response->redirect(['address/view', 'user_address_id' => $model->user_address_id]);;
            }
            
        }
        return $model;
    }
    public function view($user_address_id)
    {
        return Useraddress::findOne($user_address_id);
    } 

    public function delete($user_address_id)
    {
        if(Useraddress::findOne($user_address_id)->delete())
        {
            return 1;
        }

    }  
}

?>