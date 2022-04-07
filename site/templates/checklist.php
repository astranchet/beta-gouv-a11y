<?php snippet('dsfr/header') ?>

<main id="content" role="main">
	<div class="fr-container fr-container--fluid fr-my-8w">
		<div class="fr-px-2w">

		<h1><?= $page->title() ?></h1>
		<p class="fr-text--lead"><?= $page->desc() ?></p>

			<div class="fr-container">
			<div class="fr-grid-row fr-grid-row--gutters">
				<div class="fr-col-12 fr-col-md-4">
					<?php snippet('dsfr/sidemenu', [
						'items' => $page->items()->toStructure(),
						'title' => 'Auto-diagnostic',
						'button' => "Voir les étapes de l'auto-diagnostic"
					]) ?>
				</div>
				<div class="fr-col-12 fr-col-md-8">
				<?= $page->intro()->kt() ?>
				<?php foreach ($page->items()->toStructure() as $key => $item): ?>
					<section id="<?= $key ?>" class="fr-mb-8w">
						<h3><?= $item->id() ?></h3>
						<?php snippet('auto-diag', ['item' => $item]) ?>					
					</section>
					<?php endforeach ?>
				</div>
			</div>
		</div>

		<?= $page->conclusion()->kt() ?>
	</div>
	</div>
</main>

<?php snippet('dsfr/footer') ?>
