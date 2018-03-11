<?php
namespace Base;

class Controller extends \Prefab
{
    /**
     *
     */
    public function beforeRoute(\Base $f3, $params)
    {
        
    }
    
    /**
     *
     */
    public function afterRoute(\Base $f3, $params)
    {
        if (!empty($f3->get('template'))) {
            echo \View::instance()->render($f3->get('template'));
        }
    }
}