<?php
/**
 * Created by PhpStorm.
 * User: radik
 * Date: 9/15/17
 * Time: 10:41 AM
 */

namespace app\models;
use yii\db\ActiveRecord;


class Concert extends ActiveRecord

{
//    public $id;
//    public $place;
//    public $artist_id;

    public static function tableName()
    {
        return '{{concerts}}';
    }

    public function getPerformance()
    {
        return $this->hasMany(Performance::className(), ['id' => 'performance_id']);
    }

}