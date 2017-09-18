<?php
/**
 * Created by PhpStorm.
 * User: radik
 * Date: 9/15/17
 * Time: 10:41 AM
 */

namespace app\models;
use yii\db\ActiveRecord;

class Artist extends ActiveRecord
{
    public $password;
    public $authKey;

    public function rules()
    {
        return [
            ['id', 'number'],
            ['name', 'string']
        ];
    }

    public static function tableName()
    {
        return '{{artists}}';
    }

    public function getPerformance()
    {
//        return $this->hasMany(Performance::className(), ['id' => 'artists_id'])
//            ->viaTable('performances', ['artists_id' => 'id']);
        return $this->hasOne(Performance::className(), ['artists_id' => 'id']);
    }

//    public function getConcert()
//    {
//        return $this->hasMany(Concert::className(), ['id' => 'concerts_id'])
//            ->viaTable('artists_concerts', ['artists_id' => 'id']);
//    }

    public static function getAll()
    {
        $artists = self::find()->all();
        return $artists;
    }
}