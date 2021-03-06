# CakePHP SEAFF Plugin

[![Latest Stable Version](https://poser.pugx.org/multidimensional/cakephp-seaff/v/stable.svg)](https://packagist.org/packages/multidimensional/cakephp-seaff) [![Total Downloads](https://poser.pugx.org/multidimensional/cakephp-seaff/downloads)](https://packagist.org/packages/multidimensional/cakephp-seaff)

CakePHP Plugin Implementing the [Shopify Embedded App Frontend Framework]((https://github.com/microapps/Shopify-Embedded-App-Frontend-Framework)) by [Microapps](http://microapps.com).

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require --prefer-dist multidimensional/cakephp-seaff
```

## Setup

Load the plugin by running following command in terminal:

```
bin/cake plugin load Multidimensional/Seaff
```

Or by manually adding following line to your app's `config/bootstrap.php`:

```php
Plugin::load('Multidimensional/Seaff');
```

## Usage

Add this in your Controller:

```php
// In a controller
public function initialize()
{
    parent::initialize();
    $this->loadComponent('Multidimensional/Seaff.Seaff]);
}
```

For more information about Components, see this [page](http://book.cakephp.org/3.0/en/controllers/components.html).

## Improve CakePHP Performance

Once you have a production ready CakePHP application, it is important to create symlinks to move all your webroot files (including this one) into your main webroot folder. This is easily done by running a command in terminal for CakaPHP.

[CakePHP Documentation > Improve Your Application’s Performance](http://book.cakephp.org/3.0/en/deployment.html#improve-your-application-s-performance)

```php
bin/cake plugin assets (symlink | copy)
```
