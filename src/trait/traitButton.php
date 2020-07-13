<?php

namespace Bootstrap;

/**
 * @version v1.0
 * @author Alexcaussades (alexcaussades@gmail.com)
 * @copyright Alexcaussades
 * @version 0.1
 * @version bootstrap 5.0.0 Alpha
 */

trait bootstrapButtonTrait
{
	public function buttonSubmit($type, $text)
	{
		?>
		<button type="submit" class="btn btn-<?=$type;?>"><?= $text; ?></button>
		<?php
	}

	public function buttonSubmitLarge($type, $text)
	{
		?>
		<button type="submit" class="btn btn-<?=$type;?> btn-lg"><?= $text; ?></button>
		<?php
	}

	public function buttonSubmitSmall($type, $text)
	{
		?>
		<button type="submit" class="btn btn-<?=$type;?> btn-sm"><?= $text; ?></button>
		<?php
	}

	public function buttonSubmitBlock($type, $text)
	{
		?>
		<button type="submit" class="btn btn-<?=$type;?> btn-lg btn-block"><?= $text; ?></button>
		<?php
	}

	public function button($type, $text)
	{
		?>
		<button type="button" class="btn btn-<?=$type;?>"><?= $text; ?></button>
		<?php
	}

	public function buttonLarge($type, $text)
	{
		?>
		<button type="button" class="btn btn-<?=$type;?> btn-lg"><?= $text; ?></button>
		<?php
	}

	public function buttonSmall($type, $text)
	{
		?>
		<button type="button" class="btn btn-<?=$type;?> btn-sm"><?= $text; ?></button>
		<?php
	}

	public function buttonBlock($type, $text)
	{
		?>
		<button type="button" class="btn btn-<?=$type;?> btn-lg btn-block"><?= $text; ?></button>
		<?php
	}

	public function buttonDisabled($type, $text)
	{
		?>
		<button type="button" class="btn btn-<?=$type;?>" disabled><?= $text; ?></button>
		<?php
	}

	public function buttonLargeDisabled($type, $text)
	{
		?>
		<button type="button" class="btn btn-<?=$type;?> btn-lg" disabled><?= $text; ?></button>
		<?php
	}

	public function buttonSmallDisabled($type, $text)
	{
		?>
		<button type="button" class="btn btn-<?=$type;?> btn-sm" disabled><?= $text; ?></button>
		<?php
	}

	public function buttonBlockDisabled($type, $text)
	{
		?>
		<button type="button" class="btn btn-<?=$type;?> btn-lg btn-block" disabled><?= $text; ?></button>
		<?php
	}

	public function buttonhref($link, $text, $type)
	{
		?>
		<a class="btn btn-<?= $type; ?>" href="<?= $link; ?>" role="button"><?= $text; ?></a>
		<?php
	}

	public function buttonhrefLarge($link, $text, $type)
	{
		?>
		<a class="btn btn-<?= $type; ?> btn-lg" href="<?= $link; ?>" role="button"><?= $text; ?></a>
		<?php
	}

	public function buttonhrefSmall($link, $text, $type)
	{
		?>
		<a class="btn btn-<?= $type; ?> btn-lg" href="<?= $link; ?>" role="button"><?= $text; ?></a>
		<?php
	}

	public function buttonhrefBlock($link, $text, $type)
	{
		?>
		<a class="btn btn-<?= $type; ?> btn-lg btn-block" href="<?= $link; ?>" role="button"><?= $text; ?></a>
		<?php
	}

	public function buttonhrefdisabled($link, $text, $type)
	{
		?>
		<a class="btn btn-<?= $type; ?>" href="<?= $link; ?>" role="button" disabled><?= $text; ?></a>
		<?php
	}

	public function buttonhrefLargedisabled($link, $text, $type)
	{
		?>
		<a class="btn btn-<?= $type; ?> btn-lg" href="<?= $link; ?>" role="button"disabled><?= $text; ?></a>
		<?php
	}

	public function buttonhrefSmalldisabled($link, $text, $type)
	{
		?>
		<a class="btn btn-<?= $type; ?> btn-lg" href="<?= $link; ?>" role="button"disabled><?= $text; ?></a>
		<?php
	}

	public function buttonhrefBlockdisabled($link, $text, $type)
	{
		?>
		<a class="btn btn-<?= $type; ?> btn-lg btn-block" href="<?= $link; ?>" role="button"disabled><?= $text; ?></a>
		<?php
	}
}

