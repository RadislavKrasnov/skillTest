<?php

use yii\db\Migration;

/**
 * Handles the creation of table `concert_places`.
 * Has foreign keys to the tables:
 *
 * - `artists`
 */
class m170915_062724_create_concert_places_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('concert_places', [
            'id' => $this->primaryKey(),
            'place' => $this->string(),
            'artist_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `artist_id`
        $this->createIndex(
            'idx-concert_places-artist_id',
            'concert_places',
            'artist_id'
        );

        // add foreign key for table `artists`
        $this->addForeignKey(
            'fk-concert_places-artist_id',
            'concert_places',
            'artist_id',
            'artists',
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
            'fk-concert_places-artist_id',
            'concert_places'
        );

        // drops index for column `artist_id`
        $this->dropIndex(
            'idx-concert_places-artist_id',
            'concert_places'
        );

        $this->dropTable('concert_places');
    }
}
