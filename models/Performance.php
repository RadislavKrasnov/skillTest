<?php
/**
 * Created by PhpStorm.
 * User: radik
 * Date: 9/15/17
 * Time: 10:41 AM
 */

namespace app\models;
use yii\db\ActiveRecord;



class Performance extends ActiveRecord
{
//    public $id;
//    public $date;
//    public $artist_id;
//    public $place_id;

    public function rules()
    {
        return [
            ['id', 'number'],
            ['date', 'string'],
            ['time', 'string']
        ];
    }

    public static function tableName()
    {
        return '{{performances}}';
    }

    public function getArtist()
    {
//        return $this->hasMany(Artist::className(), ['id' => 'artists_id'])
//            ->viaTable('performances', ['artists_id' => 'id']);
        return $this->hasOne(Artist::className(), ['id' => 'artists_id']);
    }

    public function getConcert()
    {
//        return $this->hasMany(Concert::className(), ['id' => 'concerts_id'])
//            ->viaTable('performances', ['concerts_id' => 'id']);
        return $this->hasOne(Concert::className(), ['id' => 'concerts_id']);
    }

    public static function concerts()
    {
        $concerts = Concert::find()->all();
        $arrayConcert = [];
        foreach ($concerts as $concert) {
            $arrayConcert[$concert->id] = $concert->title;
        }
        return $arrayConcert;
    }

}