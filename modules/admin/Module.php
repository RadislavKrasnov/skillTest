<?php

namespace app\modules\admin;
use yii\filters\AccessControl;
use Yii;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $layout = '/admin';
    public $controllerNamespace = 'app\modules\admin\controllers';

    public function behaviors()
    {
       return [
           'access' => [
               'class' => AccessControl::className(),
               'denyCallback' => function($role, $action)
               {
                    throw new \yii\web\NotFoundHttpException();
               },
               'rules' => [
                   [
                       'allow' => true,
                       'matchCallback' => function($rule, $action)
                       {
                           return Yii::$app->admin->identity;
                       }
                   ]
               ]
           ]
       ];
    }

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
