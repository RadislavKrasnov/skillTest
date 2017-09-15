<?php

use yii\db\Migration;

/**
 * Handles the creation of table `admins`.
 */
class m170915_063722_create_admins_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('admins', [
            'id' => $this->primaryKey(),
            'email' => $this->string()->unique(),
            'password' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('admins');
    }
}
