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

    public function rules()
    {
        return [
            ['id', 'number'],
            ['title', 'string'],
            ['place', 'string'],
//            ['performance_id', 'number']
        ];
    }

    public static function tableName()
    {
        return '{{concerts}}';
    }

    public function getPerformance()
    {
        return $this->hasOne(Performance::className(), ['concerts_id' => 'id']);
    }

//    public function getArtist()
//    {
//        return $this->hasMany(Artist::className(), ['id' => 'artists_id'])
//            ->viaTable('artists_concerts', ['concerts_id' => 'id']);
//    }

}