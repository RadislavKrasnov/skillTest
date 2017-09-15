<?php

use yii\db\Migration;

/**
 * Handles the creation of table `preformances`.
 * Has foreign keys to the tables:
 *
 * - `artists`
 * - `concert_places`
 */
class m170915_062948_create_preformances_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('preformances', [
            'id' => $this->primaryKey(),
            'date' => $this->string(),
            'artist_id' => $this->integer()->notNull(),
            'place_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `artist_id`
        $this->createIndex(
            'idx-preformances-artist_id',
            'preformances',
            'artist_id'
        );

        // add foreign key for table `artists`
        $this->addForeignKey(
            'fk-preformances-artist_id',
            'preformances',
            'artist_id',
            'artists',
            'id',
            'CASCADE'
        );

        // creates index for column `place_id`
        $this->createIndex(
            'idx-preformances-place_id',
            'preformances',
            'place_id'
        );

        // add foreign key for table `concert_places`
        $this->addForeignKey(
            'fk-preformances-place_id',
            'preformances',
            'place_id',
            'concert_places',
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
        $this->dropForeignKey(
            'fk-preformances-artist_id',
            'preformances'
        );

        // drops index for column `artist_id`
        $this->dropIndex(
            'idx-preformances-artist_id',
            'preformances'
        );

        // drops foreign key for table `concert_places`
        $this->dropForeignKey(
            'fk-preformances-place_id',
            'preformances'
        );

        // drops index for column `place_id`
        $this->dropIndex(
            'idx-preformances-place_id',
            'preformances'
        );

        $this->dropTable('preformances');
    }
}
