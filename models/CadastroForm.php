<?php

namespace app\models;

use yii\base\Model;

class CadastroForm extends Model
{
    public $nome;
    public $email;
    public $idade;
    public $dataNascimento;
    public $dataInicial;
    public $dataFinal;

    public function rules()
    {
        return [
            [['nome', 'email', 'idade', 'dataNascimento', 'dataInicial', 'dataFinal'], 'required']
        ]; 
    }

    public function attributeLabels()
    {
        return [
            'nome' => 'Nome',
            'email' => 'E-mail',
            'idade' => 'Idade',
            'dataNascimento' => 'Data de Nasciemnto',
            'dataInicial' => 'Data Inicial',
            'dataFinal' => 'Data Final'
        ];
    }
}