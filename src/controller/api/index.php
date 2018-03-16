<?php

namespace Controller\Api;

use Base\View as View;

/**
 * Index Controller.
 */
class index extends \Base\Controller
{
    public function get(\Base $f3, $params)
    {
        //set($single_use = true, $target = null)
    }

    public function post(\Base $f3, $params)
    {
    }

    public function put(\Base $f3, $params)
    {
    }

    public function delete(\Base $f3, $params)
    {
    }

    /*
     *
     */
    /*public function index(\Base $f3, $params)
    {
        $this->user = new \Model\User($f3);

        //
        $f3->mset([
            'template' => 'src/view/template.php',
            'page' => [
                'title' => 'Home',
                'body' => \View::instance()->render('src/view/index/index.php')
            ]
        ]);
    }*/
}
