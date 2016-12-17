<?php
namespace Multidimensional\Seaff\View;

use Cake\View\View;
use \Cake\Event\Event;

class SeaffView extends View
{
	
	public function initialize()
    {
        parent::initialize();
		
	}
	
	public function	beforeRender(Event $event)
    {
        parent::beforeRender($event);
		$this->set('shopifyAPIkey', '');
		$this->set('shopifyShopDomain', '');
		
	}
	
    public function render($view = null, $layout = null)
    {
        

		
    }
}