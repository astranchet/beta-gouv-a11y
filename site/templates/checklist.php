<?php snippet('header') ?>

<main id="content" role="main">
	<div class="fr-container fr-container--fluid fr-my-8w">

		<h1><?= $page->title() ?></h1>

		<p class="fr-text--lead"><?= $page->intro() ?></p>

		<div class="fr-accordions-group">
			<?php foreach ($page->items()->toStructure() as $key => $item): ?>
			<section class="fr-accordion">
				<h3 class="fr-accordion__title">
					<button class="fr-accordion__btn" aria-expanded="false" aria-controls="accordion-<?= $key ?>"><?= $item->title() ?></button>
				</h3>
				<div class="fr-collapse" id="accordion-<?= $key ?>">
					<p class="fr-text--lead"><?= $item->desc() ?></p>

					<div class="fr-callout--green-emeraude fr-highlight">
						<p class="fr-text--sm"><strong>Pour qui ?</strong> <?= $item->who() ?></p>
					</div>

					<h4>Méthodologie</h4>
					<?= $item->methodo()->kt() ?>

					<h4>Vérifications</h4>
					<?= $item->verification()->kt() ?>
				</div>
			</section>
			<?php endforeach ?>
		</div>

	</div>
</main>

<?php snippet('footer') ?>
