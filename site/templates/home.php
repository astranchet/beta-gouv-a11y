<?php snippet('dsfr/header') ?>

<main id="content" role="main">

	<div class="hero">
		<div class="fr-container fr-container--fluid fr-py-8w">
			<div class="fr-col-12">
				<h1>Concevoir des services publics accessibles à tous.</h1>
				<p class="fr-text--lead"><b>beta.gouv.fr</b> accompagne les Startups d’État dans leur démarche d'accessibilité, <b>tout au long de la vie du produit</b>.</p>
			</div>
		</div>
	</div>

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
