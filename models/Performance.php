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

    public static function tableName()
    {
        return '{{performances}}';
    }

    public function getArtist()
    {
        return $this->hasMany(Artist::className(), ['id' => 'artists_id'])
            ->viaTable('artists_performances', ['performances_id' => 'id']);
    }

    public function getConcert()
    {
        return $this->hasOne(Concert::className(), ['performance_id' => 'id']);
    }

}