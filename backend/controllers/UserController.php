<?php

namespace backend\controllers;

use Yii;
use common\models\User;
use common\models\UserSearch;
use common\models\ChangePassword;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'create', 'update', 'view', 'delete', 'edit-profile', 'change-password', 'mail-setting'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        $model = new User();

        if ($model->load(Yii::$app->request->post()) && $model->validate())
        {   
            $userPost = Yii::$app->request->post('User'); 
            $model->setPassword($userPost['password_hash']);
            $model->generateAuthKey();
            if($model->save()){
               return $this->redirect(['view', 'id' => $model->id]); 
            }else{
                echo "<pre>"; print_r($model->getErrors()); exit;  
            }
            //
            
        }
        else
        {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionEditProfile()
    {
        $id = Yii::$app->user->identity->id;
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('edit-profile', [
                'model' => $model,
            ]);
        }
    }

    public function actionChangePassword()
    {
        $id = Yii::$app->user->identity->id;
        $user = $this->findModel($id);
        $model = new ChangePassword();
        $username = $user->username;

        if ($model->load(Yii::$app->request->post())) {
            
        
            if($model->validatePass($model->old_password)){
                
                $user->setPassword($model->new_password);
                    
                if($user->save()) {
                    Yii::$app->getSession()->setFlash('success', 'Password has been updated.');
                    return $this->redirect(['/site/index']);
                }
                else{
                    Yii::$app->getSession()->setFlash('danger', 'Password not updated.');
                    return $this->render('change_password',[
                        'model'=>$model,
                        'username'=>$username
                    ]);
                }
            }else{
                
                Yii::$app->getSession()->setFlash('danger', 'Incorrect Password.');
                return $this->render('change_password',[
                    'model'=>$model,
                    'username'=>$username
                ]);
            }
        }
        else{
            return $this->render('change_password',[
                'model'=>$model,
                'username'=>$username
            ]);
        }
    }

    protected function passwordEncrypt( $string, $s_key, $s_iv, $action = 'e')
    {
        // you may change these values to your own
        $secret_key = $s_key;
        $secret_iv = $s_iv;
     
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $key = hash( 'sha256', $secret_key );
        $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
     
        if( $action == 'e' ) {
            $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
        }
        else if( $action == 'd' ){
            $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
        }
     
        return $output;
    }

    public function actionMailSetting()
    {
        $id = Yii::$app->user->identity->id;
        $model = $this->findModel($id);
        $model->scenario = 'mail_setting';
        if($model->load(Yii::$app->request->post()) &&  $model->validate())
        {
            $model->app_password = $this->passwordEncrypt($model->app_password, $model->email, "random_string");
            $model->save();
            return $this->render('view', [
                'model' => $model,
            ]);
        }
        return $this->render('mail-setting',[
            'model'=>$model,
        ]);
    }

}
