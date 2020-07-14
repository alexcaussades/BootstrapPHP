<?php
declare(strict_types=1);
namespace Bootstrap;

/**
 * 
 * @since 06/07/2020
 * @author Alexcaussades (alexcaussades@gmail.com)
 * @copyright Alexcaussades
 * @version 0.1
 * @version bootstrap 5.0.0 Alpha
 */

//require "trait/traitButton.php";

class Bootstrap {

	use bootstrapButtonTrait;
	use bootstrapLinkTrait;

	/**
	 * @return stylesheet
	 * @version 5.0.0 Alpha
	 */
	public function setCss()
	{
		?>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
		<?php		
	}

	/**
	 * @return viewport
	 * @version Mobile 
	 */
	public function setViewport()
	{	?>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">'
		<?php
	}

	/**
	 * @return css
	 */

	Public function getHeaderBootsrap()
	{
		return $this->setCss();
		
	}

	/**
	 * @return js
	 */
	public function getJS()
	{
		?>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

		<?php
	}

	public function startContainer()
	{
		 ?><div class="container"><?php
		
	}

	public function startContainerfluid()
	{  
		?>
		<div class="container-fluid">
		<?php
	}
	
	/** @link https://v5.getbootstrap.com/docs/5.0/layout/breakpoints/ */

	public function startContainerResponsive($value = 'md')
	{
		 ?> 
		 <div class="container-<?= $value; ?>"> 
		 <?php
	}

	public function endContainer(){$container = '</div>'; return $container;}

	/** Start Row */
	public function startrow()
	{
		?> 
		<div class="row">
		<?php
	}

	public function endrow()
	{
		?>
			</div>
		<?php
	}

	/** Start Col */
	public function startcol()
	{
		?>
		<div class="col">
		<?php
	}
	public function startColOption($value = "sm")
	{
		?>
		<div class="col-<?= $value; ?>">
		<?php
	}
	public function startColOptionResponsive($value = "sm", $number)
	{
		?>
		<div class="col-<?=$value;?>-<?=$number;?>">
		<?php
	}
	
	public function endcol()
	{
		?>
			</div>
		<?php
	}

	/** Magique Class */
	public function magiqueClass($value)
	{
		 ?>
		 <div class="<?=$value; ?>">
		 <?php
	}

	public function endMagiqueClass()
	{
		?>
			</div>
		<?php
	}
}