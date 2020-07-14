<?php

namespace Bootstrap;


trait bootstrapLinkTrait

{
	public function link($url, $color, $text)
	{
		?>
			<a href="<?= $url ?>" class="link-<?= $color ?>"><?= $text ?></a>
		<?php
	}
}