<nav class="fr-sidemenu fr-sidemenu--sticky" role="navigation" aria-label="Menu latéral">
	<div class="fr-sidemenu__inner">
		<button class="fr-sidemenu__btn" aria-controls="sidemenu" aria-expanded="false"><?= $button ?></button>
		<div class="fr-collapse" id="sidemenu">
			<div class="fr-sidemenu__title"><?= $title ?></div>
			<ul class="fr-sidemenu__list">
				<?php foreach ($items as $key => $value): ?>
					<li class="fr-sidemenu__item">
						<a class="fr-sidemenu__link" href="#<?= $key ?>" target="_self"><?= $value ?></a>
					</li>
					<?php endforeach ?>
			</ul>
		</div>
	</div>
</nav>