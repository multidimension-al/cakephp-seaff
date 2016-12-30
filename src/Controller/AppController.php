<?php
namespace Multidimensional\Seaff\Controller;

use Cake\Event\Event;

use App\Controller\AppController as BaseController;

class AppController extends BaseController
{

    public function initialize() {
        
        parent::initialize();
        $this->loadComponent('Flash');
        
    }
    

    
}
