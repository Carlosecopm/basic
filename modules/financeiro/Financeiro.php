<?php

namespace app\modules\financeiro;

use Yii;
use yii\base\Module;

class Financeiro extends Module
{
    public $layout = 'blank';
    
    public function init()
    {
        parent::init();
        Yii::configure($this, require(__DIR__ . '/config/main.php'));
    }
}