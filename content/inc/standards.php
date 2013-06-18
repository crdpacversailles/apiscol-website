
<div class="span9">

	<div class="row-fluid">

		<div class="span12 hero-unit">
			<h2>Une solution basée sur les standards</h2>
			<p>Bâtir un jeu de composants partagés et réutilisables implique la
				neutralité des formats de ressources pédagogiques et
				des protocoles de communications. ApiScol se base sur les standards les plus courants, ce qui garantit en outre
				un couplage lâche des composants :
			
			
			<ul class="unstyled">
				<li><span class="badge-warning">&nbsp;1 </span>&nbsp;Sco-LOM-fr pour
					les métadonnées,</li>
				<li><span class="badge-info">&nbsp;2 </span>&nbsp;IMS-CP et plus
					particulièrement IMS-Learning Design pour les séquences,</li>
				<li><span class="badge-success">&nbsp;3 </span>&nbsp;REST et ATOM
					pour les services web.</li>

			</ul>



			</p>

		</div>
		<div class="span4">
			<h3>
				<span class="badge-warning">&nbsp;1 </span>&nbsp;Les métadonnées
			</h3>
			<img class="pull-left" alt="Logo scolomfr"
				src="img/logo_scolomfr.gif" class="img-polaroid">
			<p>ApiScol repose sur le standard de métadonnées Sco-LOM-fr. Sco-LOM-fr
				est la déclinaison scolaire de la norme AFNOR (NF Z76-040), profil
				français d'application du LOM (LOMFR) - Métadonnées pour
				l'enseignement</p>
			<p>
				Pour en savoir plus, <a href="http://www.lom-fr.fr/scolomfr/">ScoLOMfr,
					schéma de description des ressources numériques de l'enseignement
					scolaire</a>.
			</p>
			<p class="alert alert-success">Dans ApiScol, l'adoption de Sco-LOM-fr
				n'est pas qu'une conformité de façade : on a cherché à exploiter
				pleinement l'expressivité pédagogique du standard, pour représenter
				par exemple les relations entre ressources, localiser les
				miniatures, etc.</p>
		</div>
		<div class="span4">
			<h3>
				<span class="badge-info">&nbsp;2 </span>&nbsp;Les séquences
			</h3>
			<img class="pull-left" alt="logo IMS" src="img/ims.jpg"
				class="img-polaroid" />
			<p>Un des objectifs qui ont guidé la conception d'ApiScol est de
				mettre les informations de scénarisation pédagogique à disposition
				sous des formes compatibles avec un traitement automatisé.</p>
			<p>Il s'agit là d'une rupture avec la pratique des &laquo;fiches
				pédagogiques&raquo; rédigées en langage naturel. Ces fiches ne valorisent
				pas suffisamment l'effort de scénarisation. Notre but est de rendre
				le scénario pédagogique navigable voire exécutable, d'optimiser son
				affichage pour les différents médias, du TNI à l'ordiphone.</p>
			<p>
				Le principal standard retenu est EML (<em><a
					href="http://edutechwiki.unige.ch/en/Educational_modeling_language">Educational
						Modeling Language</a> </em>), un formalisme mis au point par Rob
				Koper de l'Open University of the Nederland, et standardisé par
				l'IMS sous le nom de <em><a
					href="http://www.imsglobal.org/learningdesign/">Learning Design</a></em>.
				EML s'inscrit dans le même modèle de <em>packaging</em> que Scorm
				tout en offrant une grande expressivité pédagogique.
			</p>


		</div>
		<div class="span3">
			<h3>
				<span class="badge-success">&nbsp;3 </span>&nbsp;Les services web
			</h3>
			<img class="pull-left" alt="logo atom" src="img/atom.png"
				class="img-polaroid">
			<p>Les services web qui composent ApiScol utilisent le protocole REST
				et produisent des représentations ATOM.</p>
			<p>Le protocole REST nous a permis d'associer à chaque objet géré
				dans ApiScol (ressource, séquence, description, miniature...) une
				URI qui constitue véritablement son &laquo;nom&raquo; dans le contexte
				d'internet. Les verbes HTTP GET, POST, PUT et DELETE, associés à
				cette URI, forment l'API (Application Programming Interface)
				d'ApiScol.</p>
			<p>
				L'intérêt du format ATOM est notamment de permettre d'inclure dans
				chaque représentation des liens vers d'autres représentations, selon
				<a href="http://www.w3.org/DesignIssues/LinkedData.html">les
					principes du web de données</a>. </a>
			</p>
		</div>
		<div class="span12 hero-unit">
			<h2>Un standard de métadonnées dédié à l'enseignement scolaire :
				Sco-LOM-fr</h2>
			<p>ApiScol propose une implémentation de Sco-LOM-fr élaborée avec deux
				préoccupations :</p>
			<ul>
				<li>Utiliser au maximum l'expressivité du standard</li>
				<li>Alléger la tâche d'indexation en renseignant automatiquement les
					champs qui peuvent l'être, notamment les champs techniques.</li>
			</ul>

		</div>

		<div class="span12">
			<h3>Indexation par le moteur</h3>
			<p>Les métadonnées Sco-LOM-fr sont préparées par ApiScol Meta en vue de
				leur indexation par Solr. Cette indexation prend trois formes :</p>
			<div class="span4">
				<ul>
					<li>Indexation texte libre. Elle concerne les champs :
						<ul>
							<li>general.title</li>
							<li>general.description</li>
							<li>general.keyword</li>
							<li>general.coverage</li>
							<li>technical.installationremarks</li>
							<li>technical.otherplatformrequirements</li>
							<li>educational.description</li>
							<li>rights.description</li>
							<li>relation.resource.description</li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="span4">
				<ul>
					<li>Facettes &laquo;statiques&raquo; :
						<ul>
							<li>general.generalresourcetype</li>
							<li>lifecycle.status</li>
							<li>lifecycle.contributor.author</li>
							<li>technical.format</li>
							<li>educational.learningresourcetype</li>
							<li>educational.intendedenduserrole</li>
							<li>educational.context</li>
							<li>educational.language</li>
							<li>educational.activity</li>
							<li>educational.place</li>
							<li>educational.place</li>
							<li>educational.educationalmethod</li>
							<li>educational.tool</li>
							<li>rights.costs</li>
							<li>rights.copyrightandotherrestrictions</li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="span3">

				<ul>
					<li>Facettes &laquo;dynamiques&raquo; : elles concernent tous les éléments du
						champ 9 (<a
						href="http://www.lom-fr.fr/scolomfr/la-norme/manuel-technique.html?tx_scolomfr_pi1[detailElt]=82">classification</a>)
					</li>
				</ul>
			</div>
		</div>
		<div class="span12">
			<h3>Exploitation du standard</h3>
			<h4>Enregistrement des URI</h4>

			<p>
				Apiscol utilise l'élément LOM <a
					href="http://www.lom-fr.fr/scolomfr/la-norme/manuel-technique.html?tx_scolomfr_pi1[ouvrirElt]=2&tx_scolomfr_pi1[detailElt]=2">general.identifier</a>
				pour enregistrer l'URI REST du contenu, séquence ou ressource,
				décrit par cette métadonnée. Le &laquo;Catalog&raquo; indiqué est le nom de
				l'instance d'Apiscol : ex. &laquo;Apiscol SVT CRDP AC. Versailles&raquo;.
			</p>
			<p>
			
			
			<pre>&nbsp;<code>&lt;identifier&gt;
	&lt;catalog&gt;Apiscol SVT CRDP ac-versailles&lt;/catalog&gt;
	&lt;entry&gt;http://178.32.219.182/content/resource/83d7f824-4d31-4718-8796-cdf86ff1efff&lt;/entry&gt;
&lt;/identifier&gt;</code>&nbsp;</pre>
			</p>
			<p>
				Apiscol utilise l'élément LOM <a
					href="http://www.lom-fr.fr/scolomfr/la-norme/manuel-technique.html?tx_scolomfr_pi1[detailElt]=24">technical.location</a>
				pour désigner l'URL de téléchargement (pour un fichier) ou de
				consultation (pour une page web) de la ressource.
			</p>
			<p>
			
			
			<pre>&nbsp;<code>&lt;technical&gt;
	&lt;location&gt;http://178.32.219.182/content/resources/8/3/d/7f824-4d31-4718-8796-cdf86ff1efff/objectifs.pdf&lt;/location&gt;
&lt;/technical&gt;</code>&nbsp;</pre>
			</p>
			<p>
				Apiscol utilise l'élément LOM <a
					href="http://www.lom-fr.fr/scolomfr/la-norme/manuel-technique.html?tx_scolomfr_pi1[detailElt]=34">metaMetadata.identifier</a>
				pour enregistrer l'URI REST de cette métadonnée. Le &laquo;Catalog&raquo; indiqué est le nom de
				l'instance d'Apiscol : ex. &laquo;Apiscol SVT CRDP AC. Versailles&raquo;.
			</p>
			<p>
			
			
			<pre>&nbsp;<code>&lt;metaMetadata&gt;
	&lt;identifier&gt;
		&lt;catalog&gt;Apiscol : demonstrateur&lt;/catalog&gt;
		&lt;entry&gt;http://178.32.219.182/meta/805bbe3d-086f-4010-85b4-f834d9db10ed&lt;/entry&gt;
	&lt;/identifier&gt;
&lt;/metaMetadata&gt;</code>&nbsp;</pre>
			</p>
			<p>
				Apiscol utilise l'élément LOM <a
					href="http://www.lom-fr.fr/scolomfr/la-norme/manuel-technique.html?tx_scolomfr_pi1[detailElt]=75">relation</a>
				pour enregistrer les informations relatives aux vignettes (kind="a
				pour vignette"), aux prévisualisations (kind="a pour aperçu"), et
				les relations entre ressources et séquences (kind="contient","est
				une partie de") .
			</p>
			<p>
			
			
			<pre>&nbsp;<code>&lt;relation&gt;
	&lt;kind&gt;
		&lt;source&gt;SCOLOMFRv1.0&lt;/source&gt;
		&lt;value&gt;a pour aperçu&lt;/value&gt;
	&lt;/kind&gt;
	&lt;resource&gt;
		&lt;identifier&gt;URI&lt;/identifier&gt;
		&lt;entry&gt;http://178.32.219.182/content/previews/c/f/5/918aa-17ab-4f19-ac6b-d5fce659f88c/index.html&lt;/entry&gt;
	&lt;/resource&gt;
&lt;/relation&gt;
&lt;relation&gt;
	&lt;kind&gt;
		&lt;source&gt;LOMv1.0&lt;/source&gt;
		&lt;value&gt;est une partie de&lt;/value&gt;
	&lt;/kind&gt;
	&lt;resource&gt;
		&lt;identifier&gt;URI&lt;/identifier&gt;
		&lt;entry&gt;http://178.32.219.182/meta/bbf201a5-95d8-4be9-b4ba-d679db09d197&lt;/entry&gt;
	&lt;/resource&gt;
&lt;/relation&gt;</code>&nbsp;</pre>
			</p>
			<p>L'ensemble de ces champs est donc renseigné automatiquement et n'a
				pas besoin de l'être par les clients</p>
			<h4>Champs techniques</h4>

			<p>
				Lorsque ApiScol Meta est associé à une instance de ApiScol Content,
				les champs <a
					href="http://www.lom-fr.fr/scolomfr/la-norme/manuel-technique.html?tx_scolomfr_pi1[detailElt]=22">technical.format</a>,
				<a
					href="http://www.lom-fr.fr/scolomfr/la-norme/manuel-technique.html?tx_scolomfr_pi1[detailElt]=23">technical.size</a>,
				<a
					href="http://www.lom-fr.fr/scolomfr/la-norme/manuel-technique.html?tx_scolomfr_pi1[detailElt]=24">technical.location</a>
				sont renseignés automatiquement.
			</p>
			<h4>Niveau d'agrégation</h4>

			<p>
				L'élément <a
					href="http://www.lom-fr.fr/scolomfr/la-norme/manuel-technique.html?tx_scolomfr_pi1[detailElt]=48">general.aggregationLevel</a>
				est renseigné automatiquement avec la valeur 1 pour une ressource
				(un objet géré par ApiScol Content), 2 pour une séquence (un objet
				géré par ApiScol Pack).
			</p>
			<h4>Perpectives</h4>

			<p>&Agrave; court terme sont envisagés :</p>
			<ul>
				<li>Le renseignement automatique des champs language (détection
					automatique de la langue des ressources et des métadonnées), <a
					href="http://www.lom-fr.fr/scolomfr/la-norme/manuel-technique.html?tx_scolomfr_pi1[detailElt]=33">technical
						duration</a>,
				</li>
				<li>le renseignement automatique des champs
					educational.intendedEndUserRole à partir des informations contenues
					dans les descripteurs de séquences IMS LD.</li>
				<li>la rétrocompatibilité LOM par application d'un jeu
					d'équivalences.</li>
			</ul>

		</div>
		<div class="span12 hero-unit">
			<h2>Un langage de modélisation pédagogique : IMS-LD</h2>
			<p>ApiScol exprime les données de scénarisation pédagogique à l'aide
				d'un formalisme : IMS-Learning Design.</p>
		</div>

		<div class="span12">
			<div class="alert">
				<strong>Pourquoi pas Scorm ?</strong> Le format SCORM est le format
				le plus répandu dans le monde du e-learning. Néanmoins, IMS-LD est
				mieux adapté à une perspective "hybride" où le scénario est vu comme
				<em>décrit</em> en vue d'une exploitation en <em>présentiel</em>,
				tantôt comme <em>exécuté</em> pour un usage en <em>autonomie</em>.
				Notons toutefois qu'il n'existe pas, à ce jour, d'implémentation
				réellement probante d'un environnement d'exécution IMS-LD pour le
				e-learning.
			</div>
			<h3>IMS-LD : aperçu rapide</h3>
			<p>...</p>
			<h3>Délivrer des données pédagogiques structurées</h3>
			<p>...</p>
		</div>
	</div>