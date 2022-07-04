<div class="hero">
	<div class="fr-container fr-container--fluid fr-py-8w">
		<div class="fr-col-12">
			<h1><?= $title ?></h1>
			<?php if ($lead->exists()): ?>
				<!-- TODO affichez que si besoin -->
			<p class="fr-text--lead"><?= $lead->kt() ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>