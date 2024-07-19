<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\modules\dashboard\models\Cause;
use app\modules\dashboard\models\Event;
use app\modules\dashboard\models\Gallery;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
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
                'class' => VerbFilter::class,
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->layout='FrontendLayout';
        $events = Event::find()->orderBy(['id'=>SORT_DESC])->limit(4)->all(); 
        $causes = Cause::find()->orderBy(['id'=>SORT_DESC])->limit(4)->all();
        return $this->render('index',[
            // 'causes'=>Cause::find()->orderBy(['id'=>SORT_DESC])->limit(4)->all()
            'events'=>$events,
            'causes'=>$causes
        ]);
    }

    public function actionGallery()
    {
        $this->layout='FrontendLayout';
        $galleries = Gallery::find()->orderBy(['id'=>SORT_DESC])->all(); 

        return $this->render('gallery',[
            'galleries'=>$galleries
        ]);
    }

    public function actionEvent()
    {
        $this->layout='FrontendLayout';
        $events = Event::find()->orderBy(['id'=>SORT_DESC])->all();
        return $this->render('event',[
            'events'=>$events
        ]);
    }

    public function actionAbout()
    {
        $this->layout='FrontendLayout';
        return $this->render('about');
    }

    public function actionContact()
    {
        $this->layout='FrontendLayout';
        return $this->render('contact');
    }

    public function actionSingleevent()
    {
        $this->layout='FrontendLayout';
        $id = $_GET['id'];
        $model=Event::findOne(['id'=>$id]);
        return $this->render('singleEvent',[
            'model'=>$model
        ]);
    }

    public function actionCause()
    {
        $this->layout='FrontendLayout';
        $causes=Cause::find()->orderBy(['id'=>SORT_DESC])->all();
        return $this->render('cause',[
            'causes'=>$causes
        ]);
    }

    public function actionSinglecause()
    {
        $this->layout='FrontendLayout';
        $id = $_GET['id'];
        $model=Cause::findOne(['id'=>$id]);
        return $this->render('singleCause',[
            'model'=>$model
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $this->layout='LoginLayout';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */

    /**
     * Displays about page.
     *
     * @return string
     */

}
