<?php
/**
 * Created by PhpStorm.
 * User: radik
 * Date: 9/16/17
 * Time: 10:28 PM
 */

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\AdminLoginForm;
use app\models\ContactForm;
use app\models\Artist;

class AuthController extends Controller
{
    public function actionLogin()
    {
        if (!Yii::$app->admin->isGuest) {
            return $this->goHome();
        }

        $model = new AdminLoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
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
        Yii::$app->admin->logout();

        return $this->goHome();
    }
}