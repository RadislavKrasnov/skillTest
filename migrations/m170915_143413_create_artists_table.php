<?php

use yii\db\Migration;

/**
 * Handles the creation of table `artists`.
 */
class m170915_143413_create_artists_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('artists', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('artists');
    }
}
