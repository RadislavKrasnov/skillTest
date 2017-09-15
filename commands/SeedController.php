<?php
/**
 * Created by PhpStorm.
 * User: radik
 * Date: 9/15/17
 * Time: 10:23 AM
 */

namespace app\commands;

use yii\console\Controller;
use app\models\Admin;

class SeedController extends Controller
{
    public function actionIndex()
    {
        $seeder = new \tebazil\yii2seeder\Seeder();
        $generator = $seeder->getGeneratorConfigurator();
        $faker = $generator->getFakerConfigurator();

        $seeder->table('admins')->columns([
            'email'=>$faker->unique()->email,
            'password'=>$faker->password
        ])->rowQuantity(20);

        $seeder->table('artists')->columns([
            'name'=>$faker->name
        ])->rowQuantity(20);

        $seeder->table('performances')->columns([
            'date'=>$faker->date($format = 'Y-m-d', $max = 'now'),
            'time'=>$faker->time($format = 'H:i:s', $max = 'now'),
        ])->rowQuantity(20);

        $seeder->table('artists_performances')->columns([
            'artists_id'=>$faker->numberBetween(1, 20),
            'performances_id'=>$faker->numberBetween(1, 20)
        ])->rowQuantity(20);

        $seeder->table('concerts')->columns([
            'title'=>$faker->catchPhrase,
            'place'=>$faker->address,
            'performance_id'=>$faker->unique()->numberBetween(1, 20)
        ])->rowQuantity(20);

        $seeder->refill();


    }
}