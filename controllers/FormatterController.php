<?php 

namespace app\controllers;

use Yii;
use yii\web\Controller;

class FormatterController extends Controller
{
    public function actionIndex()
    {
        $appLang = Yii::$app->language;
        $formatter = Yii::$app->formatter;

        echo "<h2>{$appLang}</h2>";

        echo "
            <p>Percentuais: {$formatter->asPercent(0.12345, 2)}</p>
        ";
    }
}