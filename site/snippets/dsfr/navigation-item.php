<?php 
	if (!isset($url)) {
		$url = page($page)->url();
		// var_dump($page, $url); die;
	}
	if (!isset($title)) {
		$title = page($page)->title();
	}
?>

<li class="fr-nav__item">
	<a class="fr-nav__link" href="<?= $url ?>" target="_self" <?php e($site->page($page)->isActive(), ' aria-current="true"') ?>><?= $title ?></a>
</li>