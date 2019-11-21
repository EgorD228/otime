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
use app\models\search;
use app\models\User;
use yii\data\Pagination;
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

    public function actionIndex($search=null)
    {       if (isset($_GET['search'])) {
                $query = tovari::find()->where(['like','name',$_GET['search']]);
                $pages = new Pagination(['totalCount' =>count($query->all()), 'pageSize' => 5]);
                $model = $query->offset($pages->offset)
                    ->limit($pages->limit)
                    ->all();
            }else{
                $query = tovari::find();
                $model = tovari::find()->all();
                $pages = new Pagination(['totalCount' =>count($query->all()), 'pageSize' => 5]);
                $model = $query->offset($pages->offset)
                    ->limit($pages->limit)
                    ->all();
            }
        return $this->render('index',['model'=>$model,'pages'=>$pages,'query'=>$query,'search'=>$search]);
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
