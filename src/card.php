<?php

namespace Bootstrap;


class card extends Bootstrap 
{
	public $img;
	public $title;
	public $text;
	public $link;
	public $textLink;
	public $option;

	public function cardBuilder($option)
	{
		
		$this->option = $option;
		if(array_key_exists('colortext', $this->option)){ $this->colortext = $this->option['colortext'];}
		if(array_key_exists('colorcard', $this->option)){ $this->colorCard = $this->option['colorcard'];}
		if(array_key_exists('header', $this->option)){ $this->header = $this->option['header'];}
		if(array_key_exists('image', $this->option)){ $this->img = $this->option['img'];}
		if(array_key_exists('title', $this->option)){ $this->title = $this->option['title'];}
		if(array_key_exists('text', $this->option)){ $this->text = $this->option['text'];}
		if(array_key_exists('link', $this->option)){ $this->link = $this->option['link'];}
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

	

	public function cardCreatColor()
	{
				
		?>
			<div class="card text-<?= $this->colortext; ?> bg-<?= $this->colorCard; ?> mb-3" style="max-width: 18rem;">
			<?php if($this->header != null): ?>	
			<div class="card-header"><?= $this->header; ?></div>
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