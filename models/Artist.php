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
    public static function tableName()
    {
        return '{{artists}}';
    }

    public function getPerformance()
    {
        return $this->hasMany(Performance::className(), ['id' => 'performances_id'])
            ->viaTable('artists_performances', ['artists_id' => 'id']);
    }

    public static function getAll()
    {
        $artists = self::find()->all();
        return $artists;
    }
}