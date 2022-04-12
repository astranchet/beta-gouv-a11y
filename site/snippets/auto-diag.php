<h4 class="fr-h5">Pourquoi ?</h4>
<?= $item->desc()->kt() ?>

<h4 class="fr-h5 fr-mt-4w">Pour qui ?</h4>
<?= $item->who()->kt() ?>

<h4 class="fr-h5 fr-mt-4w">Test <?= $item->test() ?></h4>


<h5 class="fr-h6">Ce qu'il faut vérifier</h5>

<?php foreach ($item->steps()->yaml() as $step): ?>
	<p><?= $step ?></p>
<?php endforeach ?>

<div class="fr-form-group">
	<fieldset class="fr-fieldset">
		<div class="fr-fieldset__content">
			<?php foreach ($item->checks()->yaml() as $id => $check): ?>
			<div class="fr-checkbox-group">
				<input type="checkbox" id="checkboxes-<?= $item->test()->slug().$id ?>" name="checkboxes-<?= $item->test()->slug().$id ?>">
				<label class="fr-label" for="checkboxes-<?= $item->test()->slug().$id ?>"><?= $check ?>
			</label>
			</div>
			<?php endforeach ?>
		</div>
	</fieldset>
</div>