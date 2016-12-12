<?php
namespace Seaff\View\Helper;

use Cake\View\Helper\HtmlHelper;

class SeaffHtmlHelper extends HtmlHelper
{
	 public function beforeLayout() {
		$this->Html->css('seaff.min.css', ['inline' => false]);
	 }
}