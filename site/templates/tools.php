<?php snippet('dsfr/header') ?>

<main id="content" role="main">
	<div class="fr-container fr-container--fluid fr-my-8w">

		<h1><?= $page->title() ?></h1>

		<div class="fr-table">
			<table>
				<caption>Outils d'auto-diagnostic</caption>
				<thead>
					<tr>
						<th scope="col">Type</th>
						<th scope="col">Nom</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($page->tools()->toStructure() as $tool): ?>
					<?php 
						$colors = [
							'Plugin' => 'green-menthe',
							'Bookmarklet' => 'green-tilleul-verveine',
							'Outil en ligne' => 'green-bourgeon',
							'Tutorial' => 'pink-tuile'
						]
					?>
					<tr>
						<td>
							<?php foreach ($tool->type()->split() as $type): ?>
								<?php snippet('dsfr/badge', [
									'color' => $colors[$type],
									'value' => $type,
								]) ?>
							<?php endforeach ?>
						</td>
						<td><a class="fr-link fr-fi-arrow-right-line fr-link--icon-right" href="<?= $tool->url() ?>"><?= $tool->title() ?></a></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</main>

<?php snippet('dsfr/footer') ?>
