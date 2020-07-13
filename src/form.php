<?php


namespace Bootstrap;


/**
 * @version 0.1
 */

class form extends Bootstrap 
{   
	
	private $action;
	private $method;
	
	
	public function __construct($action, $method)
	{
		$this->action = $action;
		$this->method = $method;
	}

	
	public function startForm()
	{
		?>
			<form action="<?= $this->action; ?>" method="<?= $this->method; ?>">
		<?php
	}

	public function endForm()
	{
		?>
			</form>
		<?php
	}

	public function FormLabel($label)
	{
		?>
			<label class="form-label"><?= $label; ?></label>
		<?php
	}

	public function inputTextdefault($id=null,$name=null,$placeholder=null,$minlength=null,$maxlength=null)
	{
		?>
		<input class="form-control" id="<?= $id;?>" name="<?= $name;?>" type="text" placeholder="<?= $placeholder;?>"  minlength="<?= $minlength;?>" maxlength="<?= $maxlength;?>" aria-label="deafult input example">
		<?php
	}

	public function inputTextsm($id=null,$name=null,$placeholder=null,$minlength=null,$maxlength=null)
	{
		?>
		<input class="form-control form-control-sm" id="<?= $id;?>" name="<?= $name;?>" type="text" placeholder="<?= $placeholder;?>"  minlength="<?= $minlength;?>" maxlength="<?= $maxlength;?>" aria-label="deafult input example">
		<?php
	}

	public function inputTextlg($id=null,$name=null,$placeholder=null,$minlength=null,$maxlength=null)
	{
		?>
		<input class="form-control form-control-lg" id="<?= $id;?>" name="<?= $name;?>" type="text" placeholder="<?= $placeholder;?>"  minlength="<?= $minlength;?>" maxlength="<?= $maxlength;?>" aria-label="deafult input example">
		<?php
	}

	public function inputTextdefaultRequire($id=null,$name=null,$placeholder=null,$minlength=null,$maxlength=null)
	{
		?>
		<input class="form-control" id="<?= $id;?>" name="<?= $name;?>" required type="text" placeholder="<?= $placeholder;?>"  minlength="<?= $minlength;?>" maxlength="<?= $maxlength;?>" aria-label="deafult input example">
		<?php
	}

	public function inputTextsmRequire($id=null,$name=null,$placeholder=null,$minlength=null,$maxlength=null)
	{
		?>
		<input class="form-control form-control-sm" id="<?= $id;?>" name="<?= $name;?>" required type="text" placeholder="<?= $placeholder;?>"  minlength="<?= $minlength;?>" maxlength="<?= $maxlength;?>" aria-label="deafult input example">
		<?php
	}

	public function inputTextlgRequire($id=null,$name=null,$placeholder=null,$minlength=null,$maxlength=null)
	{
		?>
		<input class="form-control form-control-lg" id="<?= $id;?>" name="<?= $name;?>" required type="text" placeholder="<?= $placeholder;?>"  minlength="<?= $minlength;?>" maxlength="<?= $maxlength;?>" aria-label="deafult input example">
		<?php
	}

	public function inputTextRedonly($id=null,$name=null,$placeholder=null,$minlength=null,$maxlength=null)
	{
		?>
		<input class="form-control form-control-lg" id="<?= $id;?>" name="<?= $name;?>" type="text" placeholder="<?= $placeholder;?>"  minlength="<?= $minlength;?>" maxlength="<?= $maxlength;?>" aria-label="deafult input example" readonly>
		<?php
	}

	public function inputTextsmRedonly($id=null,$name=null,$placeholder=null,$minlength=null,$maxlength=null)
	{
		?>
		<input class="form-control form-control-sm" id="<?= $id;?>" name="<?= $name;?>" type="text" placeholder="<?= $placeholder;?>"  minlength="<?= $minlength;?>" maxlength="<?= $maxlength;?>" aria-label="deafult input example" readonly>
		<?php
	}

	public function inputTextlgRedonly($id=null,$name=null,$placeholder=null,$minlength=null,$maxlength=null)
	{
		?>
		<input class="form-control form-control-lg" id="<?= $id;?>" name="<?= $name;?>" type="text" placeholder="<?= $placeholder;?>"  minlength="<?= $minlength;?>" maxlength="<?= $maxlength;?>" aria-label="deafult input example" readonly>
		<?php
	}

	public function inputPassword($id=null,$name=null,$placeholder=null)
	{
		?>
		<input class="form-control" id="<?= $id;?>" name="<?= $name;?>" type="password" placeholder="<?= $placeholder;?>"  aria-label="deafult input example">
		<?php
	}

	public function inputPasswordSm($id=null,$name=null,$placeholder=null)
	{
		?>
		<input class="form-control form-control-sm" id="<?= $id;?>" name="<?= $name;?>" type="password" placeholder="<?= $placeholder;?>"  aria-label="deafult input example">
		<?php
	}

	public function inputPasswordLg($id=null,$name=null,$placeholder=null)
	{
		?>
		<input class="form-control form-control-lg" id="<?= $id;?>" name="<?= $name;?>" type="password" placeholder="<?= $placeholder;?>"  aria-label="deafult input example">
		<?php
	}


	public function selectFormDefault()
	{
		?>
			<select class="form-select" aria-label="Default select example">
		<?php
	}

	public function selectFormLg($value=null)
	{
		?>
			<select class="form-select form-select-lg <?= $value ;?>" aria-label="Default select example">
		<?php
	}

	public function selectFormsm($value=null)
	{
		?>
			<select class="form-select form-select-sm <?= $value ;?>" aria-label="Default select example">
		<?php
	}

	public function selectOption($value, $name)
	{
		?>
		<option value="<?= $value ;?>"><?= $name ;?></option>
		<?php
	}

	public function endSelectForm()
	{
		?>
		</select>
		<?php
	}

	public function selectFormDataListDefault($list, $id, $placeholder)
	{
		?>
			<input class="form-control" list="<?= $list ;?>" id="<?= $id ;?>" placeholder="<?= $placeholder ;?>">
		<?php
	}

	public function selectFormDataListSm($list, $id, $placeholder)
	{
		?>
			<input class="form-control form-select-sm" list="<?= $list ;?>" id="<?= $id ;?>" placeholder="<?= $placeholder ;?>">
		<?php
	}


	public function StartSelectFormDataListLg($list, $id, $placeholder)
	{
		?>
			<input class="form-control form-select-lg" list="<?= $list ;?>" id="<?= $id ;?>" placeholder="<?= $placeholder ;?>">
		<?php
	}

	public function selectFormDatalistName($value)
	{
		?>
		<datalist id="<?= $value ;?>">
		<?php
	}

	public function selectFormDatalistoption($value)
	{
		?>
		<option value="<?= $value ;?>">
		<?php
	}

	public function endSelectDataList()
	{
		?>
		</datalist>
		<?php
	}

}