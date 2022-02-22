<?php

namespace app\classes\widgets;

use phpDocumentor\Reflection\Types\This;
use yii\base\Widget;
use yii\helpers\Html;

class HelloWidget extends Widget
{
    public $message;
    public $subMessage;
    public function init()
    {
       parent::init();

       if($this->message === null) {
            $this->message = 'Hello World';
       }
       if ($this->subMessage === null) {
           $this->subMessage = "Sub Mensagem!";
       }

    }
    public function run()
    {
        return  $this->render('hello', [
                'message' => $this->message,
                'subMessage' => $this->subMessage
        ]);

       
    }
}