<?php
/* 2014-12-11
 * @author Prawee Wongsa <konkeanweb@gmail.com>
 * @version 1.1
 */
namespace prawee\widgets;

use yii\base\Widget;
class VideoJS extends Widget{
    public function init()
    {
        parent::init();
    }

    public function run(){
        $this->registerAssets();
        echo 'ok';
    }
    protected function registerAssets(){
        $view = $this->getView();
        $js='
            
        ';
        $view->registerJs($js);
    }
}

