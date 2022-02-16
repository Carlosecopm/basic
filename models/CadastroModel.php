<?php

namespace app\models;

use yii\base\Model;

class CadastroModel extends Model 
{
    public $nome;
    public $idade;
    public $email;

    public function rules()
    {
        return [
            [['nome', 'idade', 'email'], 'required'],
            ['email', 'email'],
            ['idade', 'number', 'integerOnly'=>true]
        ];
    }
    public function attributeLabels()
    {
        return [
            'nome' => 'Nome Completo',
            'email' => 'E-mail',
            'idade' => 'Idade'
        ];
    }
}