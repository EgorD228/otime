<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\tovari;
use app\models\User;
use app\models\sendemail;
use yii\widgets\LinkPage;


class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
            $model = tovari::find()->all();
        return $this->render('index',['model'=>$model]);
    }


    public function actionAddbook()
    {
        $model=new tovari();
        if($model->load(Yii::$app->request->post())&& $model->save())
        {   
            $alert='Добавлено';
            return $this->render('bookadds',['model'=>$model,'alert'=>$alert]);
        }
    }

    

    public function actionBookadds(){
        $model=new tovari();

        return $this->render('bookadds',compact('model'));
    }    
}
