<?php snippet('header') ?>

<main id="content" role="main">
	<div class="fr-container fr-container--fluid fr-my-8w">

		<h1><?= $page->title() ?></h1>
		<p class="fr-text--lead"><?= $page->desc() ?></p>

		<?= $page->intro()->kt() ?>
	
		<div class="fr-accordions-group">
			<?php foreach ($page->items()->toStructure() as $key => $item): ?>
			<section class="fr-accordion">
				<h3 class="fr-accordion__title">
					<button class="fr-accordion__btn" aria-expanded="false" aria-controls="accordion-<?= $key ?>"><?= $item->title() ?></button>
				</h3>
				<div class="fr-collapse" id="accordion-<?= $key ?>">
					<p class="fr-text--regular fr-text--alt"><?= $item->desc() ?></p>

					<div class="fr-highlight">
						<p class="fr-text--sm"><strong>Pour qui ?</strong> <?= $item->who() ?></p>
					</div>

					<h4>Méthodologie</h4>
					TODO : faire une checklist de trucs à cocher
					<div class="fr-form-group">
					    <fieldset class="fr-fieldset">
					        <legend class="fr-fieldset__legend fr-text--regular" id='checkboxes-legend'>
					            Légende pour l’ensemble de champs
					        </legend>
					        <div class="fr-fieldset__content">
					            <div class="fr-checkbox-group">
					                <input type="checkbox" id="checkboxes-1" name="checkboxes-1">
					                <label class="fr-label" for="checkboxes-1">
					                    Label checkbox
					                </label>
					            </div>
					            <div class="fr-checkbox-group">
					                <input checked type="checkbox" id="checkboxes-2" name="checkboxes-2">
					                <label class="fr-label" for="checkboxes-2">
					                    Label checkbox
					                </label>
					            </div>
					            <div class="fr-checkbox-group">
					                <input type="checkbox" id="checkboxes-3" name="checkboxes-3">
					                <label class="fr-label" for="checkboxes-3">
					                    Label checkbox
					                </label>
					            </div>
					        </div>
					    </fieldset>
					</div>
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
