<?php

namespace app\controllers;

use app\models\Cliente;
use yii\web\Controller;

class InsertController extends Controller
{
    public function actionIndex()
    {
        $clientes = [
            ['nome' => 'Carlos'],
            ['nome' => 'Luiz'],
            ['nome' => 'Santos'],
            ['nome' => 'Silva'],
            ['nome' => 'Carlos teste']
        ];
        /*
        foreach ($clientes as $cliente) {
            $row = new Cliente;
            $row->nome = $cliente['nome'];
            $row->save();
        }
        */
        \Yii::$app->db
            ->createCommand()
            ->batchInsert(Cliente::tableName(), ['nome'], $clientes)
            ->execute();

            
        echo 'Sucesso!';
    }
}