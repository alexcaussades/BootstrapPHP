<?php

namespace Bootstrap;


class card extends Bootstrap 
{
	public $img;
	public $title;
	public $text;
	public $link;
	public $textLink;

	public function cardBuilder($img = null, $title = null, $text = null, $link = null, $textLink = null)
	{
		$this->img = $img;
		$this->title = $title;
		$this->text = $text;
		$this->link = $link;
		$this->textLink = $textLink;
	}

	public function cardCreat()
	{
		?>
			<div class="card" style="width: 18rem;">
				<?php if($this->img): ?>
				<img src="<?= $this->img; ?>" class="card-img-top" alt="...">
				<?php endif ?>
				<div class="card-body">
					<h5 class="card-title"><?= $this->title; ?></h5>
					<p class="card-text"><?= $this->text; ?></p>
					<?php if($this->link): ?>
					<a href="<?= $this->link; ?>" class="btn btn-primary"><?= $this->textLink; ?></a>
					<?php endif ?>
				</div>
			</div>
		<?php
	}
}