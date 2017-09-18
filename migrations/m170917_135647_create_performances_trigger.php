<?php

use yii\db\Migration;

class m170917_135647_create_performances_trigger extends Migration
{
    public function up()
    {
        $sql = '
CREATE TRIGGER `trigger_performance`
AFTER INSERT
   ON `concerts`
   FOR EACH ROW
BEGIN
UPDATE `performances`
SET concerts_id = NEW.id
WHERE artists_id = NEW.id;
END;
';
        $this->execute($sql);
    }

    public function down()
    {
        $this->execute('DROP TRIGGER IF EXISTS `trigger_performance`');
    }
}
