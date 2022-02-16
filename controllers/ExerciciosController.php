<?php

namespace app\controllers;

use app\models\Aluno;
use app\models\CadastroModel;
use Yii;
use yii\base\Controller;
use yii\data\Pagination;

class ExerciciosController extends Controller
{
    public function actionFormulario()
    {
        $cadastroModel = new CadastroModel;
        $post = Yii::$app->request->post();

        if ($cadastroModel->load($post) && $cadastroModel->validate()) {
            return $this->render('formulario-confirmacao', [
                'model' => $cadastroModel
            ]);
        } else {
            return $this->render('formulario', [
                'model' => $cadastroModel
            ]);
        }
       
    }
    public function actionAluno()
    {
       /* $alunos = Aluno::find()->orderBy('nome')->all();
        echo '<pre>'; print_r($alunos); */

        /*$aluno = Aluno::findOne(2);
        echo $aluno->nome . ' - ' . $aluno->idade;

        $aluno = Aluno::findOne(2);
        $aluno->nome = 'Carlos Luiz Silva';
        $aluno->save();

        echo $aluno->nome;*/

        $query = Aluno::find();

        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $query->count()
        ]);

        $alunos = $query->orderBy('nome')
                        ->offset($pagination->offset)
                        ->limit($pagination->limit)
                        ->all();
        
        return $this->render('alunos', [
            'alunos' => $alunos,
            'pagination' => $pagination
        ]);
    }
}