<!doctype html>
<html lang="fr" data-fr-theme>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Ressources d'accessibilité</title>
	<meta name="theme-color" content="#000091">
	<link rel="apple-touch-icon" href="/assets/favicon/apple-touch-icon.png"><!-- 180×180 -->
	<link rel="icon" href="/assets/favicon/favicon.svg" type="image/svg+xml">
	<link rel="manifest" href="/assets/favicon/manifest.webmanifest" crossorigin="use-credentials">

	<?= css(['assets/dsfr/dsfr.min.css', 'main']) ?>
    <?= css('assets/dsfr/dsfr.legacy.min.css', 'legacy') ?>

	<script>
		window['dsfr'] = {
			verbose: false,
				//mode: 'manual'
			}

	</script>
</head>

<body id="top" class="fr-mb-12w">

	<div class="fr-skiplinks">
		<nav role="navigation" aria-label="Accès rapide" class="fr-container">
			<ul class="fr-skiplinks__list">
				<li>
					<a class="fr-link" href="#content">Contenu</a>
				</li>
				<li>
					<a class="fr-link" href="#header-navigation">Menu</a>
				</li>
				<li>
					<a class="fr-link" href="#footer">Pied de page</a>
				</li>
			</ul>
		</nav>
	</div>
	
	<!-- entête -->
	<header role="banner" class="fr-header">
		<div class="fr-header__body">
			<div class="fr-container">
				<div class="fr-header__body-row">
					<div class="fr-header__brand fr-enlarge-link">
						<div class="fr-header__brand-top">
							<div class="fr-header__logo">
								<p class="fr-logo">
									République
									<br>française
								</p>
							</div>
						</div>
						<div class="fr-header__service">
							<a href="/" title="Accueil - [À MODIFIER - Nom du site / service] - [À MODIFIER - nom de l’entité (ministère, secrétariat d‘état, gouvernement)]">
								<p class="fr-header__service-title">Ressource d'accessibilité</p>
							</a>
							<!-- <p class="fr-header__service-tagline">baseline - précisions sur l‘organisation</p> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="fr-header__menu fr-modal" id="modal-451" aria-labelledby="button-452">
			<div class="fr-container">
				<button class="fr-btn--close fr-btn" aria-controls="modal-451" title="Fermer">
					Fermer
				</button>
				<div class="fr-header__menu-links">
				</div>
				<nav class="fr-nav" id="header-navigation" role="navigation" aria-label="Menu principal">
					<ul class="fr-nav__list">
						<li class="fr-nav__item">
							<a class="fr-nav__link" href="<?= $site->url() ?>" target="_self">Accueil</a>
						</li>

						<?php foreach ($site->page('a11y')->children() as $item) { ?>
                  			<li class="fr-nav__item"><a class="fr-nav__link" target="_self" href="<?= $item->url() ?>" <?php e($item->isActive(), 'aria-current="page"') ?>>
                    			<?= $item->title() ?>
                  			</a></li>
                		<?php } ?>
					</ul>
				</nav>
			</div>
		</div>
	</header>