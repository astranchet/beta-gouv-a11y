<?php snippet('dsfr/header') ?>

<main id="content" role="main">

	<?php snippet('hero', ['title' => $page->hero(), 'lead' => $page->lead()]) ?>

	<div class="fr-container fr-container--fluid fr-my-8w">
		<h2>Suivez le guide</h2>

		<p class="fr-text--lead">Le <a href="<?= page('kit-accessibilite') ?>" class="fr-link fr-text--lead">Kit d’Accessibilité</a> guide les Startups d’État dans une démarche sur le long terme, de l’investigation du service jusqu’à sa consolidation.</p>

		<div class="fr-grid-row fr-grid-row--gutters">
			<?php foreach ($page->kit()->toStructure() as $card): ?>			
    			<div class="fr-col">
					<?php snippet('dsfr/card', ['card' => $card]) ?>
				</div>
			<?php endforeach ?>
		</div>
	</div>

	<div class="fr-container fr-container--fluid fr-my-8w">
		<h2>Diagnostiquez votre service numérique</h2>

		<!-- <p class="fr-text--lead">Le <a href="<?= page('kit-accessibilite') ?>" class="fr-link fr-text--lead">Kit d’Accessibilité</a> guide les Startups d’État dans une démarche sur le long terme, de l’investigation du service jusqu’à sa consolidation.</p> -->

		<div class="fr-grid-row fr-grid-row--gutters">
			<?php foreach ($page->diagnostics()->toStructure() as $tile): ?>
    			<div class="fr-col">
					<?php snippet('dsfr/tile', ['tile' => $tile]) ?>
				</div>
			<?php endforeach ?>
		</div>
	</div>

</main>

<?php snippet('dsfr/footer') ?>
