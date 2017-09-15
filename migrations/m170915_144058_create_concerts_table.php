<?php

use yii\db\Migration;

/**
 * Handles the creation of table `concerts`.
 * Has foreign keys to the tables:
 *
 * - `performance`
 */
class m170915_144058_create_concerts_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('concerts', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'place' => $this->string(),
            'performance_id' => $this->integer(),
        ]);

        // creates index for column `performance_id`
        $this->createIndex(
            'idx-concerts-performance_id',
            'concerts',
            'performance_id'
        );

        // add foreign key for table `performance`
        $this->addForeignKey(
            'fk-concerts-performance_id',
            'concerts',
            'performance_id',
            'performances',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `performance`
//        $this->dropForeignKey(
//            'fk-concerts-performance_id',
//            'concerts'
//        );
//
//        // drops index for column `performance_id`
//        $this->dropIndex(
//            'idx-concerts-performance_id',
//            'concerts'
//        );

        $this->dropTable('concerts');
    }
}
