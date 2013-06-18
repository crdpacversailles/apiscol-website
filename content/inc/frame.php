<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>ApiScol</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Le styles -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<style type="text/css">
body {
	padding-top: 60px;
	padding-bottom: 40px;
}

.sidebar-nav {
	padding: 9px 0;
}

@media ( max-width : 980px) { /* Enable use of floated navbar text */
	.navbar-text.pull-right {
		float: none;
		padding-left: 5px;
		padding-right: 5px;
	}
}

div.page-header h1 {
	backgroung-image: url('img/logo-api.png')
}

span.label {
	font-size: 22px;
	line-height: 22px;
}

span.label+ul {
	margin-top: 1em;
}

h2 img {
	vertical-align: bottom;
}

div.container-fluid div.page-header h1 img.pull-right {
	margin-top: -0.7em;
}

div.span4 p span.text-warning {
	font-weight: bold;
}

div.hero-unit {
	padding: 10px 50px;
}

div.container-fluid div.page-header h1 img.pull-right {
	height: 80px;
}

div.container-fluid div.page-header h1 img.logo {
	height: 50px;
}

.icon-js {
	background-image: url("img/js.png");
	background-position: 0 0;
}

.nav-list>.active>a>.icon-js {
	background-image: url("img/js-white.png");
}

.icon-idea {
	background-image: url("img/idea.png");
	background-position: 0 0;
}

.nav-list>.active>a>.icon-idea {
	background-image: url("img/idea-white.png");
}

.icon-standard {
	background-image: url("img/standard.png");
	background-position: 0 0;
}

.nav-list>.active>a>.icon-standard {
	background-image: url("img/standard-white.png");
}

div.container-fluid div.row-fluid div.span9 div.span4 span.label img {
	width: 36px;
	margin-right: 0.3em;
}

div.container-fluid div.row-fluid div.span9 div.span4 span.label {
	padding: 0.3em;
}

div.container-fluid div.row-fluid div.span9 div.span12 span.label {
	padding: 0.3em;
	width: 90%;
}

div.container-fluid div.row-fluid div.span9 div.row-fluid div img.pull-left
	{
	padding-right: 1em;
}

div.container-fluid div.row-fluid div.span3 div.well ul.nav li.logo {
	margin-top: 0.5em;
	margin-right: 0.5em;
	margin-bottom: 0.5em;
	text-align: left;	
}
</style>
<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="bootstrap/js/html5shiv.js"></script>
    <![endif]-->

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144"
	href="bootstrap/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114"
	href="bootstrap/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72"
	href="bootstrap/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed"
	href="bootstrap/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" href="favicon.ico">
</head>

<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<button type="button" class="btn btn-navbar" data-toggle="collapse"
					data-target=".nav-collapse">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="brand" href="accueil">ApiScol </a>
				<div class="nav-collapse collapse">

					<ul class="nav">
						<li class="active"><a href="accueil">Accueil</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
					<span class="pull-right label label-inverse"
						style="margin-top: 6px; margin-left: 6px;">SITE EN TRAVAUX</span>

				</div>
				<!--/.nav-collapse -->
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="page-header">
			<h1>
				<img alt="logo apiscol" src="img/logo-api.png" class="logo" />
				ApiScol <small>Réussir ensemble l&rsquo;internet des ressources
					pédagogiques</small>
			</h1>
		</div>

		<div class="row-fluid">

			<div class="span3">
				<div class="well sidebar-nav">
					<ul class="nav nav-list">
						<li><a href="accueil"><i class=" icon-home"></i>Accueil</a></li>
						<li class="nav-header">Présentation</li>
						<li><a href="concepts"><i class=" icon-idea"></i>Les concepts</a>
						</li>

						<li><a href="standards"><i class="icon-standard"></i>Les standards</a>
						</li>
						<li><a class="muted"><i class="icon-th-large"></i>Cas d'usage</a>
						</li>

						<li class="nav-header">Ressources</li>
						<li><a href="apidoc"><i class="icon-book"></i>Documentation des
								API</a></li>

						<li><a href="systeme"><i class="icon-wrench"></i>Documentation
								système</a></li>
						<li><a class="muted"><i class=" icon-js"></i>Le CDN ApiScol</a></li>
						<li><a class="muted"><i class="icon-download"></i>Sources,
								téléchargement</a></li>
						<li class="nav-header">Outils</li>
						<li><a href="scenarisation"><i class=" icon-film"></i>Scenarisation
								EML</a></li>
						<li class="nav-header">Démonstration</li>
						<li><a class="muted"><i class=" icon-eye-open"></i>L'affichage des
								ressources</a></li>
						<li><a href="sequences"><i class="icon-th-list"></i>L'affichage
								des séquences </a></li>
						<li><a class="muted"><i class="icon-search"></i>Le moteur de
								recherche</a></li>
						<li><a class="muted"><i class="icon-signal"></i>Les flux</a></li>
						<li class="nav-header">Le projet</li>
						<li><a class="muted"><i class="icon-road"></i>Feuille de route</a>
						</li>
						<li><a class="muted"><i class="icon-thumbs-up"></i>S'associer au
								projet</a></li>
						<li class="logo"><img alt="CRDP de l'Académie de Versailles"
							src="img/logo_crdp_noir.png" />
						</li>
					</ul>
				</div>
				<!--/.well -->
			</div>
			<!--/span-->
			[CONTENU]
		</div>
		<!--/row-->
	</div>
	<!--/span-->
	</div>
	<!--/row-->

	<hr>

	<footer>
		<p>&copy; CRDP de l'académie de Versailles 2013</p>
	</footer>

	</div>
	<!--/.fluid-container-->

	<!-- Le javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script
		src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js"></script>
	<script src="bootstrap/js/bootstrap-transition.js"></script>
	<script src="bootstrap/js/bootstrap-alert.js"></script>
	<script src="bootstrap/js/bootstrap-modal.js"></script>
	<script src="bootstrap/js/bootstrap-dropdown.js"></script>
	<script src="bootstrap/js/bootstrap-scrollspy.js"></script>
	<script src="bootstrap/js/bootstrap-tab.js"></script>
	<script src="bootstrap/js/bootstrap-tooltip.js"></script>
	<script src="bootstrap/js/bootstrap-popover.js"></script>
	<script src="bootstrap/js/bootstrap-button.js"></script>
	<script src="bootstrap/js/bootstrap-collapse.js"></script>
	<script src="bootstrap/js/bootstrap-carousel.js"></script>
	<script src="bootstrap/js/bootstrap-typeahead.js"></script>
	<script src="bootstrap/js/bootstrap-lightbox.js"></script>
</body>
</html>


