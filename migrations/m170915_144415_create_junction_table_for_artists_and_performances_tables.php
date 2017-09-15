<?php

use yii\db\Migration;

/**
 * Handles the creation of table `artists_performances`.
 * Has foreign keys to the tables:
 *
 * - `artists`
 * - `performances`
 */
class m170915_144415_create_junction_table_for_artists_and_performances_tables extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('artists_performances', [
            'artists_id' => $this->integer(),
            'performances_id' => $this->integer(),
            'PRIMARY KEY(artists_id, performances_id)',
        ]);

        // creates index for column `artists_id`
        $this->createIndex(
            'idx-artists_performances-artists_id',
            'artists_performances',
            'artists_id'
        );

        // add foreign key for table `artists`
        $this->addForeignKey(
            'fk-artists_performances-artists_id',
            'artists_performances',
            'artists_id',
            'artists',
            'id',
            'CASCADE'
        );

        // creates index for column `performances_id`
        $this->createIndex(
            'idx-artists_performances-performances_id',
            'artists_performances',
            'performances_id'
        );

        // add foreign key for table `performances`
        $this->addForeignKey(
            'fk-artists_performances-performances_id',
            'artists_performances',
            'performances_id',
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
        // drops foreign key for table `artists`
//        $this->dropForeignKey(
//            'fk-artists_performances-artists_id',
//            'artists_performances'
//        );
//
//        // drops index for column `artists_id`
//        $this->dropIndex(
//            'idx-artists_performances-artists_id',
//            'artists_performances'
//        );
//
//        // drops foreign key for table `performances`
//        $this->dropForeignKey(
//            'fk-artists_performances-performances_id',
//            'artists_performances'
//        );
//
//        // drops index for column `performances_id`
//        $this->dropIndex(
//            'idx-artists_performances-performances_id',
//            'artists_performances'
//        );

        $this->dropTable('artists_performances');
    }
}
