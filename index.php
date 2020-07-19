<?php

require 'vendor/autoload.php';

use Bootstrap\Alerts;
use Bootstrap\Bootstrap;
use Bootstrap\Form;
use Bootstrap\card;

$boot = new Bootstrap();
$alerts = new Alerts();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?= $boot->getHeaderBootsrap(); ?>
	<title>Document de test </title>
</head>
<body>
	
</body>
</html>

<br>
<?=  $boot->startContainer();?>
<?=  $boot->startrow();?>

<?=  $boot->startcol();?>
<?=  $alerts->setAlertsDimissing("danger", 'hello');?>
<?=  $boot->endcol();?>

<?=  $boot->startcol();?>
<?=  $alerts->setAlertsDimissing("warning", 'hello');?>
<?=  $boot->endcol();?>

<?=  $boot->startcol();?>
<?=  $alerts->setAlertsDimissing("primary", 'hello');?>
<?=  $boot->endcol();?>

<?=  $boot->endrow();?>
<?=  $boot->endContainer();?>


<?=  $boot->startContainer();?>
<?=  $boot->magiqueClass("row justify-content-md-center");?>

<?= $boot->endMagiqueClass(); ?>
<?=  $boot->endContainer();?>

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

<?= $boot->link("#","primary","sa fonctionne trop bien");?>

<?= $boot->startContainer(); ?>
<?php $card = new card;
$card->cardBuilder(null,"coucou ses nous", "hop hop hop ", null, null);
echo $card->cardCreat(); ?>
<?= $boot->endContainer(); ?>
<?=  $boot->getJS();?>
