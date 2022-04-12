<?php if ($item->who()->isNotEmpty()): ?>
<h4 class="fr-h5 fr-mt-4w">Pour qui ?</h4>
<?= $item->who()->kt() ?>
<?php endif ?>

<?php if ($item->steps()->isNotEmpty()): ?>
<h4 class="fr-h6">Ce qu'il faut vérifier</h4>
<?php foreach ($item->steps()->yaml() as $step): ?>
	<p><?= $step ?></p>
<?php endforeach ?>
<?php endif ?>

<?php if ($item->checks()->isNotEmpty()): ?>
<div class="fr-form-group">
	<fieldset class="fr-fieldset">
		<div class="fr-fieldset__content">
			<?php foreach ($item->checks()->yaml() as $id => $check): ?>
			<div class="fr-checkbox-group">
				<input type="checkbox" id="checkboxes-<?= $id ?>" name="checkboxes-<?= $id ?>">
				<label class="fr-label" for="checkboxes-<?= $id ?>"><?= $check ?>
			</label>
			</div>
			<?php endforeach ?>
		</div>
	</fieldset>
</div>
<?php endif ?>

<?php if ($item->criteres()->isNotEmpty()): ?>
<h4 class="fr-h6">Critères RGAA</h4>
<ol>
<?php foreach ($item->criteres()->yaml() as $criteria): ?>
	<p><a class="fr-link" href="<?= $site->urlRgaa(); ?><?= $criteria ?>">Critère <?= $criteria ?></a></p>
<?php endforeach ?>
</ol>
<?php endif ?>

