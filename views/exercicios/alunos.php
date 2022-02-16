<?php

use yii\widgets\LinkPager;

?>
<h1>Alunos</h1>
<hr>

<ul>
  

 <?php foreach($alunos as $aluno) :  ?>
        <li> 
            <?= $aluno->nome . ' ' . $aluno->idade ?> <br /> 
            <small><?= $aluno->estado?></small>
        </li>
    <?php endforeach ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]);