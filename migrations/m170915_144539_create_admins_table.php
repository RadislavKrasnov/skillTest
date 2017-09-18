<?php

use yii\db\Migration;

/**
 * Handles the creation of table `admins`.
 */
class m170915_144539_create_admins_table extends Migration
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
            'auth_key' => $this->string(),
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
