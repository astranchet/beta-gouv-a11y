<!doctype html>
<html lang="fr" data-fr-theme>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $page->isHomePage() ? $site->title() : $page->title() . ' - ' . $site->title(); ?></title>
	<meta name="theme-color" content="#000091">
	<link rel="apple-touch-icon" href="/assets/favicon/apple-touch-icon.png"><!-- 180×180 -->
	<link rel="icon" href="/assets/favicon/favicon.svg" type="image/svg+xml">
	<link rel="manifest" href="/assets/favicon/manifest.webmanifest" crossorigin="use-credentials">

	<?= css(['assets/dsfr/dsfr.min.css', 'main']) ?>
	<?= css(['assets/custom.css', 'main']) ?>

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
								<a href="/" title="Accueil - <?= $site->title() ?>">
									<p class="fr-header__service-title"><?= $site->title() ?></p>
								</a>
								<p class="fr-header__service-tagline"><?= $site->header_tagline() ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="fr-header__menu fr-modal" id="modal-451" aria-labelledby="button-452">
				<div class="fr-container">
					<button class="fr-btn--close fr-btn" aria-controls="modal-451" title="Fermer">Fermer</button>
					<div class="fr-header__menu-links">
					</div>
					<nav class="fr-nav" id="header-navigation" role="navigation" aria-label="Menu principal">
						<ul class="fr-nav__list">
							<?php snippet('dsfr/navigation-item', [
								'title' => 'Accueil',
								'page' => 'home',
								'url' => $site->url(),
							]) ?>
							<?php snippet('dsfr/navigation-item', [
								'page' => 'kit-accessibilite',
							]) ?>
							<?php snippet('dsfr/navigation-item', [
								'page' => 'diagnostic',
							]) ?>
							<?php snippet('dsfr/navigation-item', [
								'page' => 'outils',
							]) ?>
							<?php snippet('dsfr/navigation-item', [
								'page' => 'reglementation',
							]) ?>
							<?php snippet('dsfr/navigation-item', [
								'page' => 'formations',
							]) ?>
						</ul>
					</nav>
				</div>
			</div>
		</header>