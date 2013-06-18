
<style>
html body div.modal-backdrop {
	background-color: white;
	opacity: 0 !important;
	z-index: 2000;
}

table.services {
	border: thin solid #000;
	border-collapse: collapse;
}

table.services th,table.services td {
	padding: 0.5em;
	border: thin solid #000;
}

table.services td {
	text-align: center;
}
</style>
<div class="span9">
	<div class="span9  hero-unit">
		<h2>Comprendre l'architecture d'ApiScol</h2>
		<p>
		
		
		<pre>
			<cite><strong>[Service Oriented Architecture] enables different organizations
to independently implement services that meet their immediate needs, 
yet can also be combined into higher-level business processes and enterprise solution.
This requires that services: 
		1. Have similar size, shape, form, function, and other characteristics Conform 
			to enterprise standards
		2. Communicate at a technical level
		3. Communicate at a semantic level
		4. Don’t have gaps and overlaps in responsibilities
		
		Rosen, Mike, Boris Lublinsky , Kevin T. Smith , Marc J. Balcer.
			2008. <em>Applied SOA: Service-Oriented Architecture and Design
			Strategies.</em> Wiley Publishing.</strong>
			</cite>
		</pre>
		</p>


	</div>
	<div id="overviewLightBox" class="lightbox hide fade" tabindex="-1"
		role="dialog" aria-hidden="true">
		<div class='lightbox-header'>
			<button type="button" class="close" data-dismiss="lightbox"
				aria-hidden="true">&times;</button>
		</div>
		<div class='lightbox-content' style="z-index: 2000;">
			<img alt="Vue d'ensemble architecture ApiScol"
				src="img/general-components.svg"
				style="background-color: white; opacity: 100%;" />
			<div class="lightbox-caption">
				<p>ApiScol : architecture générale</p>
			</div>
		</div>
	</div>
	<div id="dependenciesLightBox" class="lightbox hide fade" tabindex="-1"
		role="dialog" aria-hidden="true">
		<div class='lightbox-header'>
			<button type="button" class="close" data-dismiss="lightbox"
				aria-hidden="true">&times;</button>
		</div>
		<div class='lightbox-content' style="z-index: 2000;">
			<img alt="Vue d'ensemble architecture ApiScol"
				src="img/dependencies.svg"
				style="background-color: white; opacity: 100%;" />
			<div class="lightbox-caption">
				<p>ApiScol : graphe des dépendances entre services</p>
			</div>
		</div>
	</div>
	<div class="span9">
		<h2>Vue d'ensemble</h2>



		<div class="span12">
			ApiScol est consitué d'un ensemble de services Web organisés en
			couches : <a data-toggle="lightbox" href="#overviewLightBox"
				onclick="return false;">voir le schéma</a>. Un <a
				data-toggle="lightbox" href="#dependenciesLightBox"
				onclick="return false;">graphe simplifié</a> présente les
			dépendences entre les services.
			<ul>
				<li>La couche applicative
					<ul>
						<li>ApiScol Meta et ApiScol Previews ne dépendent de rien et
							peuvent être déployés isolément.</li>
						<li>ApiScol Content dépend seulement de ApiScol Previews.</li>
						<li>ApiScol Pack dépend de Apiscol Content et ApiScol Meta.</li>
						<li>ApiScol Pack dépend de Apiscol Content et ApiScol Meta.</li>
						<li>Les autres services sont des compositions</li>
					</ul>
				</li>
				<li>La couche des services
					<ul>
						<li>ApiScol Edit dépend d'ApiScol Pack, Content, Thumbs et Meta.</li>
						<li>ApiScol Edit dépend d'ApiScol Pack, Content, Thumbs et Meta.</li>
					</ul>
				</li>
			</ul>
			ApiScol Display est un ensemble de composant d'affichage entièrement
			implémentés côté client. Ils dialoguent en ajax avec Apiscol Meta,
			Apiscol Pack et Apiscol Seek.
		</div>
	</div>
	<div class="span9">
		<h2>La sécurité</h2>
		<h3>Modèle de sécurité interne</h3>
		<h4>Des services liés en écriture par des secrets partagés</h4>
		<p>
			Le modèle de sécurité d'ApiScol est basé sur les principes suivants :
			les requêtes "non-sûres" (POST, PUT et DELETE) vers tous les services
			à part ApiScol Edit doivent être accompagnées d'un jeton
			d'autorisation. Ce jeton d'autorisation (HTTP header
			<code>authorization</code>
			) est un hash de deux chaînes :
		
		
		<ul>
			<li>un secret partagé qui est déclaré dans un fichier de properties</li>
			<li>l'etag utilisé pour la concurrence optimiste (HTTP header <code>Etag</code>).
			</li>
		</ul>
		En d'autres termes, lorsqu'un client souhaite effectuer une requête en
		écriture vers Meta, Content, Pack, Thumb ou Previews, il doit
		<ol>
			<li>envoyer un Etag qui sert à contrôler la fraîcheur des données
				dont il dispose :
				<p>
					<code>If-match :2013-03-10T08:46:55.000+01:00</code>
					,
				</p>
			</li>
			<li>et il doit aussi joindre un jeton d'authorisation qui est le hash
				MD5 de cet Etag avec le <em>shared secret</em>.
				<p>
					<code>Authorization :xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</code>
					,
				</p>
			</li>
		</ol>
		</p>
		<p>En pratique, cela signifie que les services Meta, Content, Pack,
			Thumbs et Previews sont fermés en écriture sauf pour un client qui
			dispose de leurs shared secrets. En pratique, à l'heure actuelle,
			seul ApiScol Edit dispose du shared secret pour les autres services.
			ApiScol Content connaît le shared secret de ApiScol Previews afin de
			demander la création des prévisualisations.</p>
		<h4>Configuration de la sécurité interne : en pratique</h4>
		<p>Lors du déploiement, il faut s'assurer de la cohérence des shared
			secrets contenus dans les fichiers service.properties de chaque
			composant. Ainsi, si le service.properties de ApiScol Edit contient :</p>
		<p>
			<code> meta_ws_shared_secret=670b9f32-ebc8-4f16-b712-b4db4234f6e0 </code>
		</p>
		<p>le service.properties de ApiScol Meta devra contenir :</p>
		<p>
			<code> shared_secret=670b9f32-ebc8-4f16-b712-b4db4234f6e0 </code>
		</p>
		<p>Le déploiement automatisé avec ant crée et harmonise les shared
			secret. Dans le cas d'un déploiement manuel, ceci doit être vérifié à
			la main.</p>
		<h4>Pour aller plus loin</h4>
		<p>Certains services ne sont jamais accédés de l'extérieur, même en
			lecture. Dans ce cas, il est possible de verrouiller réserver accès
			sur une URL à une ou plusieur IP en insérant dans le context.xml un
			élément Valve :</p>
		<p>
			<code> &lt;Valve
				className="org.apache.catalina.valves.RemoteAddrValve"
				allow="ip-du-ou-des-services-qui-accèdent" /&gt; </code>
		</p>
		<p>Le cas échéant, l'ip indiquée peut être 127.0.01. si les services
			accédant et accédés sont sur la même machine virtuelle ou physique.</p>
		<p>Par défaut, cette protection est mise en place pour Solr dans les
			scripts de déploiement automatisé. En effet, sans cela, des tiers
			pourraient accéder à l'interface d'administration de Solr.</p>
		<h3>Sécurité vis à vis des tiers</h3>
		<p>L'avantage du mécanisme de sécurité interne décrit ci dessous est
			que l'administrateur doit se préoccuper uniquement de la sécurisation
			du Service ApiScol Edit. ApiScol Edit doit être déployé sur un accès
			sécurisé (SSL).</p>

		<p>
			Lors de la première requête vers ApiScol Edit, le client doit envoyer
			un header HTTP
			<code>Authorization</code>
			contenant la concaténation de ses identifiants. Il obtient ainsi un <em>nonce</em>
			dans l'entête de réponse
			<code>'Authentification-Info'</code>
			sous la forme <br />
			<code>Authentification-Info:
				nextnonce="e47d0b19-b19b-47fd-8cae-ec6347ffacab"</code>
			. <br /> Ce <em>nonce</em> doit être renvoyé lors de chaque requête
			non-sûre (PUT, POST, DELETE) et il est renouvellé lors de chaque
			requête non sûre. Il est important qu'ApiScol Edit soit déployé
			derrière une URL en https car la ciculation en clair de ces <em>nonce</em>
			réduirait la fiabilité de ce mécanisme.
		</p>
		<h4>Mise en place du SSL pour ApiScol Edit</h4>
		<p>Le web.xml d'ApiScol Edit associe ce service à une connexion
			sécurisée. Pour la mettre en place sur le serveur de déploiement
			d'ApiScol Edit : générer le fichier de clés :</p>
		<p>
			<code> /repertoire-jre/bin/keytool -genkey -alias unalias -keyalg RSA
				-keystore /un/repertoire/.keystore </code>
		</p>
		<p>Puis dans server.xml :</p>
		<p>
		
		
		<pre>
			<code>&lt;Connector port="8443" protocol="HTTP/1.1" SSLEnabled="true"
	maxThreads="150" scheme="https" secure="true" clientAuth="false"
	sslProtocol="TLS" keystoreFile="/un/repertoire/.keystore"
	keystorePass="lemotdepassechoisi" /&gt;</code>
		</pre>
		</p>


	</div>
	<div class="span9 hero-unit">
		<h2>Déployer ApiScol</h2>
		<p>Le déploiement d'ApiScol peut s'envisager de de façon façons :</p>
		<ul>
			<li><strong>Automatisée : </strong>des scripts Ant paramétrés sont
				disponibles. Ils peuvent notamment être exécutés via Jenkins pour un
				pilotage plus aisé.</li>
			<li><strong>Manuelle : </strong>créez les fichiez de configuration à
				la main, recompilez les fichier .war et déployez les dans Tomcat.</li>
		</ul>
		<p>Dans les deux cas, ceci suppose la configuration préalable des
			serveurs.</p>
	</div>
	<div class="span9">
		<h2>Configurations des serveurs</h2>
		<h3>Recommandations</h3>
		<p>Le déploiement distribué d'ApiScol n'est pas une obligation. En cas
			de déploiement distribué :</p>
		<ol>
			<li>Regroupez ApiScol Edit et EpiScol Content. En effet, ApiScol Edit
				transfère des fichiers vers ApiScol Content.</li>
			<li>Donnez une machine à Solr. La recherche plein texte effectuée par
				le coeur "Solr resources" risque d'être le goulet d'étranglement du
				système.</li>
			<li>Isolez ApiScol Previews qui effectue des tâches très coûteuses en
				ressources (conversion vidéo, etc.).</li>
		</ol>
		<h3>Applicatifs à installer</h3>
		<p>Toutes les indications ci-dessous on été testées sur wheezy 7.0,
			ubuntu 12.04, ubuntu 12.10.</p>
		<table class="services">
			<thead>
				<th>Service</th>
				<th>Java+Tomcat7</th>
				<th>MongoDB</th>
				<th>autres</th>
				<th>particularités</th>
			</thead>
			<tbody>
				<tr>
					<th>ApiScol Meta</th>
					<td>X</td>
					<td>X</td>
					<td></td>
					<td>Le répertoire de stockage est /home/meta. Peut être modifié
						dans service.properties.</td>
				</tr>
				<tr>
					<th>ApiScol Content</th>
					<td>X</td>
					<td>X</td>
					<td></td>
					<td>Le répertoire de stockage est /home/resources. Peut être
						modifié dans service.properties.</td>
				</tr>
				<tr>
					<th>ApiScol Pack</th>
					<td>X</td>
					<td>X</td>
					<td></td>
					<td>Le répertoire de stockage est /home/manifests. Peut être
						modifié dans service.properties.</td>
				</tr>
				<tr>
					<th>ApiScol Thumbs</th>
					<td>X</td>
					<td></td>
					<td></td>
					<td>Le répertoire de stockage est /home/thumbs. Peut être modifié
						dans service.properties.</td>
				</tr>
				<tr>
					<th>ApiScol Edit</th>
					<td>X</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<th>ApiScol Seek</th>
					<td>X</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<th>ApiScol Previews</th>
					<td>X</td>
					<td></td>
					<td>libreoffice,<br />imagemagick,<br />avconv<br />(apt-get
						install libav-tools)
					</td>
					<td>Nécessite un répertoire /home/tomcat7 dont l'user tomcat7 soit
						propriétaire. En effet, par défaut Open Office y crée des fichiers
						temporaires. Les répertoire de stockage sont /home/input et
						/home/ouput. Peut être modifié dans service.properties.</td>
					</td>
				</tr>
				<tr>
					<th>Solr</th>
					<td>X</td>
					<td></td>
					<td></td>
					<td>Par défaut, solr est déployé dans /home/solr. La variable
						d'environnement solr/home communiquée à Tomcat7 lors du
						déploiement vaut donc <strong>/home/solr/solr</strong>
					</td>

				</tr>
			</tbody>
		</table>
		<h4>Réglage de la mémoire allouée à la JVM</h4>
		<p>Il s'affectue dans {catalina.home}/bin/catalina.sh (typiquement :
			/usr/share/tomcat7/bin/catalina.sh). Exemple pour 3Go :</p>
		<p>
		
		
		<pre><code>#   CATALINA_OPTS   (Optional) Java runtime options used when the "start",
#                   "run" or "debug" command is executed.
#                   Include here and not in JAVA_OPTS all options, that should
#                   only be used by Tomcat itself, not by the stop process,
#                   the version command etc.
#                   Examples are heap size, GC logging, JMX ports etc.
CATALINA_OPTS="-Xms3000m -Xmx3000m"
</code>
		</pre>
		</p>
		<h4>Remarques pour le déploiement automatisé</h4>
		<p>Si le déploiement authomatisé est utilisé, rsync est également
			nécessaire sur toutes les machines.</p>
		<p>Le déploiement automatisé suppose que tous les services sont
			accédés sur le port 80. En effet, les services utilisent leur propre
			URI de base pour construire les identifiants REST des ressources et
			il est inélégant de faire apparaître des numéros de ports dans ces
			identifiants.</p>
		<p>Pour utiliser tomcat sur le port 80 (ou sur tout port <1024),
			ajouter dans /etc/default/tomcat7 :</p>
		<p>
			<code>authbind=yes</code>
		</p>
		<p>Si apache est installé, désactiver le démarrage automatique :</p>
		<p>
			<code>update-rc.d -f apache2 disable </code>
		</p>
	</div>
	<div class="span9">
		<h2>Déploiement avec Jenkins, Ant et Subversion</h2>
		<p></p>
	</div>
	<div class="span9">
		<h2>Déploiement manuel</h2>
		<p></p>
	</div>
</div>

