<div class="fr-card fr-enlarge-link">
    <div class="fr-card__body">
        <h4 class="fr-card__title">
            <a href="<?= $card->link() ?>" class="fr-card__link"><?= $card->title() ?></a>
        </h4>
        <p class="fr-card__desc"><?= $card->desc() ?></p>
        <p class="fr-card__detail"><?= $card->detail() ?></p>
    </div>
    <?php if ($card->img()->exists()): ?>
    <div class="fr-card__img">
        <img class="fr-responsive-img" src="<?= $card->img() ?>" alt="" />
        <!-- L’alternative de l’image (attribut alt) doit rester vide car l’image est illustrative et ne doit pas être restituée aux technologies d’assistance -->
    </div>
    <?php endif ?>
</div>
