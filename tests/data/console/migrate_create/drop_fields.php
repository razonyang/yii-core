<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

return <<<CODE
<?php

use Yiisoft\Db\Migration;

/**
 * Handles the dropping of table `{table}`.
 */
class {$class} extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        \$this->dropTable('{table}');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        \$this->createTable('{table}', [
            'id' => \$this->primaryKey(),
            'body' => \$this->text()->notNull(),
            'price' => \$this->money(11,2),
        ]);
    }
}

CODE;
