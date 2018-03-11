<?php
namespace Controller;

/**
 * Index Controller
 * 
 */
class Index extends \Base\Controller
{
    /**
     *
     */
    public function index(\Base $f3, $params)
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
    }

}
