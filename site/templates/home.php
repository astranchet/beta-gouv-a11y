<?php snippet('dsfr/header') ?>

<main id="content" role="main">

	<div class="hero">
		<div class="fr-container fr-container--fluid fr-py-8w">
			<div class="fr-col-12">
				<h1>Concevoir des services publics accessibles à tous.</h1>
				<p class="fr-text--lead">Pour des services numériques <b>compréhensibles et utilisables par les personnes en situation de handicap</b>.</p>
			</div>
		</div>
	</div>

	<div class="fr-container fr-container--fluid fr-my-8w">
		<h2>Kit Accessibilité</h2>

		<p class="fr-text--lead">beta.gouv.fr accompagne les Startups d’État dans leur démarche d'accessibilité, tout au long de la vie du produit.</p>

		<p>L’accessibilité est une démarche sur le long terme : elle se pense dès l'investigation du service, elle est est régulièrement évaluée pendant la construction puis tout au long de la durée d’exploitation du service.</p>

		<div class="fr-grid-row fr-grid-row--gutters">
			<?php foreach ($page->cards()->toStructure() as $card): ?>			
    			<div class="fr-col-12 fr-col-md-3">
					<?php snippet('dsfr/card', ['card' => $card]) ?>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</main>

<?php snippet('dsfr/footer') ?>
