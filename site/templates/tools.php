<?php snippet('header') ?>

<main id="content" role="main">
	<div class="fr-container fr-container--fluid fr-my-8w">

		<h1><?= $page->title() ?></h1>

		<div class="fr-table">
			<table>
				<caption>Outils d'auto-diagnostic</caption>
				<thead>
					<tr>
						<th scope="col">Nom</th>
						<th scope="col">Type</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($page->tools()->toStructure() as $tool): ?>
						<tr>
							<td><a class="fr-link" href=""><?= $tool->title() ?></a></td>
							<td><p class="fr-badge fr-badge--pink-tuile">Tutorial</p></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</main>

<?php snippet('footer') ?>