<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%clientes}}`.
 */
class m220315_184621_create_clientes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%clientes}}', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(60)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%clientes}}');
    }
}
