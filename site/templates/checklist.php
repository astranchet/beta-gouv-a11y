<?php snippet('header') ?>

<main id="content" role="main">
	<div class="fr-container fr-container--fluid fr-my-8w">
		<div class="fr-px-2w">

		<h1><?= $page->title() ?></h1>
		<p class="fr-text--lead"><?= $page->desc() ?></p>

		<?= $page->intro()->kt() ?>
	
		<div class="fr-accordions-group">
			<?php foreach ($page->items()->toStructure() as $key => $item): ?>
			<section class="fr-accordion">
				<h3 class="fr-accordion__title">
					<button class="fr-accordion__btn" aria-expanded="false" aria-controls="accordion-<?= $key ?>"><?= $item->id() ?></button>
				</h3>
				<div class="fr-collapse" id="accordion-<?= $key ?>">

					<h4 class="fr-h5">Pourquoi ?</h4>
					<?= $item->desc()->kt() ?>

					<h4 class="fr-h5 fr-mt-4w">Pour qui ?</h4>
					<?= $item->who()->kt() ?>

					<h4 class="fr-h5 fr-mt-4w">Test <?= $item->test() ?></h4>
					<h5 class="fr-h6">Ce qu'il faut faire</h5>
					<ol>
					<?php foreach ($item->steps()->yaml() as $step): ?>
							<li><?= $step ?></li>
					<?php endforeach ?>
					</ol>

					<h5 class="fr-h6">Ce qu'il faut vérifier</h5>
					<div class="fr-form-group">
					    <fieldset class="fr-fieldset">
				        <div class="fr-fieldset__content">
					        <?php foreach ($item->checks()->yaml() as $check): ?>
				        	<div class="fr-checkbox-group">
				        		<input type="checkbox" id="checkboxes-1" name="checkboxes-1">
            				<label class="fr-label" for="checkboxes-1"><?= $check ?>
            				</label>
        					</div>
									<?php endforeach ?>
				        </div>
					    </fieldset>
					</div>
				</div>
			</section>
			<?php endforeach ?>
		</div>

		<?= $page->conclusion()->kt() ?>

	</div>
	</div>
</main>

<?php snippet('footer') ?>
