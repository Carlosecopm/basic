<?php

use app\models\Cliente;
use phpDocumentor\Reflection\Types\This;
use yii\db\Migration;

/**
 * Handles adding columns to table `{{%clientes}}`.
 */
class m220316_131329_add_foto_column_to_clientes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(Cliente::tableName(), 'foto', $this->string(60));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn(Cliente::tableName(), 'foto');
    }
}
