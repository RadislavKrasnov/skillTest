<?php

use yii\db\Migration;

/**
 * Handles the creation of table `performances`.
 * Has foreign keys to the tables:
 *
 * - `concerts`
 */
class m170915_143811_create_performances_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('performances', [
            'id' => $this->primaryKey(),
            'date' => $this->string(),
            'time' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('performances');
    }
}
