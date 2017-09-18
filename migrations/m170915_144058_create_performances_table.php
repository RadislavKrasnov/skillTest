<?php

use yii\db\Migration;

/**
 * Handles the creation of table `performances`.
 * Has foreign keys to the tables:
 *
 * - `concerts`
 */
class m170915_144058_create_performances_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('performances', [
            'id' => $this->primaryKey(),
            'artists_id' => $this->integer(),
            'concerts_id' => $this->integer(),
            'date' => $this->string(),
            'time' => $this->string()
        ]);

        // creates index for column `artists_id`
        $this->createIndex(
            'idx-performances-artists_id',
            'performances',
            'artists_id'
        );

        // add foreign key for table `artists`
        $this->addForeignKey(
            'fk-performances-artists_id',
            'performances',
            'artists_id',
            'artists',
            'id',
            'CASCADE'
        );

        // creates index for column `concerts_id`
        $this->createIndex(
            'idx-performances-concerts_id',
            'performances',
            'concerts_id'
        );

        // add foreign key for table `concerts`
        $this->addForeignKey(
            'fk-performances-concerts_id',
            'performances',
            'concerts_id',
            'concerts',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('performances');
    }
}
