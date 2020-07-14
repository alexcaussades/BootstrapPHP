
[![Bootstrap](https://upload.wikimedia.org/wikipedia/commons/b/b2/Bootstrap_logo.svg)](https://v5.getbootstrap.com/)

# Bootstrap php library for AlexCaussades

This library for Bootstrap on the php.


[![Latest Stable Version](https://poser.pugx.org/alexcaussades/bootstrap/v)](//packagist.org/packages/alexcaussades/bootstrap) [![Total Downloads](https://poser.pugx.org/alexcaussades/bootstrap/downloads)](//packagist.org/packages/alexcaussades/bootstrap) [![Latest Unstable Version](https://poser.pugx.org/alexcaussades/bootstrap/v/unstable)](//packagist.org/packages/alexcaussades/bootstrap) [![License](https://poser.pugx.org/alexcaussades/bootstrap/license)](//packagist.org/packages/alexcaussades/bootstrap) [![Version](https://poser.pugx.org/alexcaussades/bootstrap/version)](//packagist.org/packages/alexcaussades/bootstrap) [![Dependents](https://poser.pugx.org/alexcaussades/bootstrap/dependents)](//packagist.org/packages/alexcaussades/bootstrap)


## Installation

```php
composer require alexcaussades/bootstrap:dev-master
```

## Usage

```php
<?php

require 'vendor/autoload.php';
use Bootstrap\Alerts;
use Bootstrap\Bootstrap;
use Bootstrap\Form;

$boot = new Bootstrap();
$alerts = new Alerts();
?>
```

## HEAD Meta

````php

<?= $boot->getHeaderBootsrap(); ?>

````

## Container Col Row 

```php

/** Start */
<?=  $boot->startContainer();?>
<?=  $boot->startrow();?>
<?=  $boot->startcol();?>

/** End  */
<?=  $boot->endcol();?>
<?=  $boot->endrow();?>
<?=  $boot->endContainer();?>
```

## Alerts

```php
<?=  $alerts->setAlertsDimissing("danger", 'hello');?>
```

## Fromulaire

```php 

<?=  $boot->startContainer();?>
	<?php $form = new form("#", "get"); ?>
	<?php $form->startForm(); ?>
	<?php $form->FormLabel("test");?>
	<?php $form->inputTextdefault(null,"info", "ceci est un test", 0, 255);?>
	<?php $form->inputTextsmRequire(null,"info", "ceci est un test", 0, 255);?>
	<?php $form->inputPassword(null,"password", "votre mot de passe");?>
	<?=  $boot->startContainer();?>
	<?php $form->FormLabel("select");?>
	<?php $form->selectFormDefault();?>
		<?php $form->selectOption("test", "test");  $form->selectOption("test", "test");  $form->selectOption("test", "test"); $form->selectOption("test", "test");  $form->selectOption("test", "test"); $form->selectOption("test", "test"); ?>
	<?php $form->endSelectForm();?>
	<?php $form->selectFormDataListDefault("test","yui","hello"); 
	$form->selectFormDatalistName("test"); 
		$form->selectFormDatalistoption('coucou'); 
		$form->selectFormDatalistoption('coucou'); 
		$form->selectFormDatalistoption('coucou'); 
		$form->selectFormDatalistoption('coucou'); 
	$form->endSelectDataList();?>
	<?php $form->ButtonSubmit("primary", "send") ;?>
	<?php $form->buttonSubmitBlock("primary", "coucou");?>
	<?php $form->endForm(); ?>
<?= $boot->endContainer(); ?>
<?= $boot->endContainer(); ?>

```

## MagiqueClass

```php
<?=  $boot->magiqueClass("row justify-content-md-center");?>
<?= $boot->endMagiqueClass(); ?>
```

## Footer 
```php
<?=  $boot->getJS();?>
```