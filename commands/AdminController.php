<?php
/**
 * Created by PhpStorm.
 * User: radik
 * Date: 9/18/17
 * Time: 7:30 PM
 */

namespace app\commands;
use yii\console\Controller;
use app\models\Admin;
use Yii;

class AdminController extends Controller
{
    public function actionIndex($email, $password)
    {
        $admin = new Admin();
        $admin->email = $email;
        $admin->password =  /*Yii::$app->getSecurity()->generatePasswordHash(*/$password;
        $admin->save();
    }

}