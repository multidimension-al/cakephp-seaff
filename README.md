# CakePHP SEAFF Plugin
CakePHP Plugin Implementing the Shopify Embedded App Frontend Framework by Microapps.

Based on [SEAFF](https://github.com/microapps/Shopify-Embedded-App-Frontend-Framework) by [Microapps](http://microapps.com).

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require --prefer-dist multidimensional/cakephp-seaff
```

## Setup

Load the plugin by running following command in terminal:

```
bin/cake plugin load Seaff
```

Or by manually adding following line to your app's `config/bootstrap.php`:

```php
Plugin::load('Seaff');
```

## Usage

Add this in your Controller (requires CakePHP 3.1 or newer):

```php
public function beforeRender(\Cake\Event\Event $event)
{
	$this->viewBuilder()->theme('Seaff');
}
```

If using a version prior to 3.1, you can set the Theme using the following in your controller.

```php
public $theme = 'Seaff';
```

For more information about Themes, see this [page](http://book.cakephp.org/3.0/en/views/themes.html).

## Improve CakePHP Performance

Once you have a production ready CakePHP application, it is important to create symlinks to move all your webroot files (including this one) into your main webroot folder. This is easily done by running a command in terminal for CakaPHP.

[CakePHP Documentation > Improve Your Application’s Performance](http://book.cakephp.org/3.0/en/deployment.html#improve-your-application-s-performance)

```php
bin/cake plugin assets (symlink | copy)
```
