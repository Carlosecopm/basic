<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        /*
        $auth = Yii::$app->authManager;

        $dono = $auth->createRole('dono');
        $gerente = $auth->createRole('gerente');
        $vendedor = $auth->createRole('vendedor');

        $auth->add($dono);
        $auth->add($gerente);
        $auth->add($vendedor);

        $viewPost = $auth->createPermission('post-index');
        $addPost = $auth->createPermission('post-create');
        $editPost = $auth->createPermission('post-edit');
        $deletePost = $auth->createPermission('post-delete');

        $auth->add($viewPost);
        $auth->add($addPost);
        $auth->add($editPost);
        $auth->add($deletePost);

        $auth->addChild($dono, $viewPost);
        $auth->addChild($dono, $addPost);
        $auth->addChild($dono, $editPost);
        $auth->addChild($dono, $deletePost);

        $auth->addChild($gerente, $viewPost);
        $auth->addChild($gerente, $editPost);
        $auth->addChild($gerente, $addPost);

        $auth->addChild($vendedor, $viewPost);

        $auth->assign($dono, 1);
        $auth->assign($gerente, 2);
        $auth->assign($vendedor, 3);
        */
        return $this->render('index');
    }
    /*
    public function actionTestePermission($userId){

        $auth = Yii::$app->authManager;

        var_dump($auth);
        exit;

    }*/

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
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
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
