<?php snippet('header') ?>

<main id="content" role="main">
	<div class="fr-container fr-container--fluid fr-my-8w">

		<h1><?= $page->title() ?></h1>

		<div class="fr-grid-row fr-grid-row--gutters">
			<?php foreach ($page->cards()->toStructure() as $card): ?>			
    			<div class="fr-col-12 fr-col-md-3">
					<?php snippet('dsfr/card', ['card' => $card]) ?>
				</div>
			<?php endforeach ?>
		</div>	
	</div>
</main>

<?php snippet('footer') ?>
