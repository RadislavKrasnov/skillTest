<?php

use yii\db\Migration;

class m170917_132630_create_artist_trigger extends Migration
{
    public function up()
    {
        $sql = '
CREATE TRIGGER `trigger_artist`
AFTER INSERT
   ON `artists`
   FOR EACH ROW
BEGIN
INSERT INTO `performances` (`artists_id`)
VALUES (NEW.id);
END;
';
        $this->execute($sql);
    }

    public function down()
    {
        $this->execute('DROP TRIGGER IF EXISTS `trigger_artist`');
    }
}
