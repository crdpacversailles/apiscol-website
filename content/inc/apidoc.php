
<div class="span9">

	<div class="row-fluid">

		<div class="span4">
			<div class="well bloc-doc clearfix">
				<h2>ApiScol Meta</h2>
				<p>ApiScol Meta gère les métadonnées ScoLOMfr. Il est adossé à un
					c&oelig;ur de Solr (Solr-metadata) configuré pour l'indexation et
					la recherche dans les métadonnées. Solr-metadata prend notamment en
					charge la recherche à facettes dans les programmes scolaires. Il
					délivre les notices pour l'affichage des ressources.</p>
				<ul>
					<li>Indexation des métadonnées</li>
					<li>Recherche plein texte, recherche à facettes dans les
						métadonnées</li>
					<li>Rétrocompatibilité LOMfr, LOM</li>
				</ul>
				<p>
					<a class="btn btn-primary btn-large pull-right" href="api/meta">
						Documentation API Apiscol-Meta</a>
				</p>
			</div>
		</div>

		<div class="span4">
			<div class="well bloc-doc clearfix">
				<h2>ApiScol Content</h2>
				<p>ApiScol Content est spécialisé dans les contenus pédagogiques,
					qu'ils soient locaux (fichiers) ou distants (liens). Il est adossé
					à un c&oelig;ur de Solr, Solr-resources, basé sur une version de
					Tika étendue aux fichiers spécifiques des logiciels pédagogiques.</p>
				<ul>
					<li>Indexation des métadonnées</li>
					<li>Recherche plein texte, extraits surlignés</li>
					<li>Analyse technique des ressources, extraction de vignettes,
						prévisualisations</li>
				</ul>
				<p>
					<a class="btn btn-primary btn-large pull-right btn-success"
						href="api/content"> Documentation API Apiscol-Content</a>
				</p>
			</div>
		</div>

		<div class="span3">
			<div class="well bloc-doc clearfix">
				<h2>ApiScol Pack</h2>
				<p>
					ApiScol Pack est en charge du <em>packaging</em> des ressources. Il
					gère les manifestes IMS (Scorm, IMS-LD) et les délivre pour
					l'affichage des séquences, notamment sous des formes adaptées au <em>cross-domain</em>.
				</p>
				<ul>
					<li>Validation</li>
					<li>Affichage</li>
					<li>Construction de packages standard</li>
				</ul>
				<p>
					<a class="btn btn-primary btn-large pull-right btn-warning"
						href="api/pack"> Documentation API Apiscol-Pack </a>
				</p>
			</div>
		</div>
	</div>
	<div class="row-fluid">

		<div class="span4">
			<div class="well bloc-doc clearfix">
				<h2>ApiScol Edit</h2>
				<p>
					ApiScol Edit est est un <em>proxy</em> pour les opérations
					d'écriture.
				</p>

				<p>
				
				
				<p>La mise en place de ce point d'entrée unique obéit à deux motivations :</p>
				<ol>
					<li>Coordonner les modifications de contenu : par exemple, mettre à
						jour les métadonnées avec des informations venues des autres
						services.</li>
					<li>Simplifier les questions d'authentification et d'autorisation.</li>
				</ol>
				<p>
					<a class="btn btn-primary btn-large pull-right btn-danger"
						href="api/edit"> Documentation API Apiscol-Edit </a>
				</p>
			</div>
		</div>
		<div class="span4">
			<div class="well bloc-doc clearfix">
				<h2>ApiScol Seek</h2>
				<p>ApiScol Seek coordonne les recherches dans les séquences, les
					contenus et les métadonnées. Il relaye les requêtes de recherche
					vers les services de la couche inférieure et fusionne les flux de
					résultats.</p>
				<ul>
					<li>Validation</li>
					<li>Affichage</li>
					<li>Construction de packages standard</li>
				</ul>
				<p>
					<a class="btn btn-primary btn-large pull-right btn-info"
						href="api/seek"> Documentation API Apiscol-Seek </a>
				</p>
			</div>
		</div>
		<div class="span3">
			<div class="well bloc-doc clearfix">
				<h2>ApiScol Thumbs</h2>
				<p>ApiScol Thumbs collecte les miniatures (vignettes) auprès des
					autres services, les soumet à l'utilisateur final pour sélection et
					mémorise son choix. Chaque vignette est associée à une entrée de
					métadonnées.</p>
				<p>
					<a class="btn btn-primary btn-large pull-right btn-inverse"
						href="api/thumbs"> Documentation API Apiscol-Thumbs </a>
				</p>
			</div>
		</div>
	</div>
	<div class="row-fluid">

		<div class="span4">
			<div class="well bloc-doc clearfix">
				<h2>ApiScol Previews</h2>
				<p>ApiScol Previews prend en charge la conversion de format des
					documents vidéo, audio, bureautiques et autres afin de proposer des
					visuels compatibles avec les capacités d'affichage des navigateurs.</p>
				<p>
					<a class="btn btn-primary btn-large pull-right "
						href="api/previews"> Documentation API Apiscol-Previews </a>
				</p>
			</div>
		</div>
	</div>
</div>
