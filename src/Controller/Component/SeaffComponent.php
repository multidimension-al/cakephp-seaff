<?php

namespace Multidimensional\Seaff\Controller\Component;

use Cake\Core\Configure;
use Cake\Controller\Component;
use Cake\Event\Event;
use Cake\Network\Session;

class SeaffComponent extends Component {
    
    private $controller;
    private $api_key;
    private $shop_domain;
    
    public function initialize(array $config = []) {
        
        parent::initialize($config);
        $this->controller = $this->_registry->getController();
        $this->controller->loadComponent('Flash');
        
        $this->api_key = ((isset($config['api_key'])) ? $config['api_key'] : Configure::read('Shopify.api_key'));
        if (!empty($this->api_key)) {
            $this->shop_domain = ((isset($config['shop_domain'])) ? $config['shop_domain'] : $this->controller->request->session()->read('shopify_shop_domain_'.$this->api_key));
        }
    }
    
    public function beforeRender(Event $event) {
        
        if (empty($this->shop_domain) && !empty($this->api_key)) {
            $this->controller->request->session()->read('shopify_shop_domain_'.$this->api_key);
        }
        
        $this->controller->viewBuilder()->theme('Multidimensional/Seaff');        
        $this->controller->set(["shopifyAPIkey" => $this->api_key, "shopifyShopDomain" => $this->shop_domain]);
        
    }
    
}
