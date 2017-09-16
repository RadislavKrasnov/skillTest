<?php
/**
 * Created by PhpStorm.
 * User: radik
 * Date: 9/15/17
 * Time: 10:42 AM
 */

namespace app\models;
use Yii;
use yii\db\ActiveRecord;

class Admin extends ActiveRecord
{

    public static function tableName()
    {
        return '{{admins}}';
    }

}