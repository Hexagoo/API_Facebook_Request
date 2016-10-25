<h1>Accès à l'API Facebook en PHP</h1>

<strong>En quelques mots</strong>

Facebook met à disposition de n'importe qui une API qui permet de récupérer des informations tels que : le nombre de "J'aime" sur un post Facebook, la photo de votre groupe de musique préféré ou encore (et c'est l'exemple que j'ai choisi ici) le nombre de participants à un évènement Facebook.
Pour voir la définition d'une API.

Voici ce que nous cherchons à afficher : <a href="http://www.nicolasfevre.com/doc/github/api_facebook_request.php" target="_blank">Requête Facebook.</a>

<h2>1) Créer un compte Facebook Developpers</h2>

Afin d'utiliser l'API de Facebook il faut posséder un compte Facebook (cela va de sois). Mais il faut aussi relier votre compte avec le Facebook Developpers. 
Pour cela rendez-vous <a href="https://developers.facebook.com/" target="_blank">ici.</a>

<h2>2) Créer votre application</h2>

Le but est ici de récupérer <strong>2 clés</strong>. Le premier <em>"app_id" et le second "app_secret"</em>, ces deux clés vont vous permettre de vous authentifier auprès de Facebook afin qu'il vous laisse utiliser son API.

Cliquez sur "Ajoutez une app", une fois créée récupérer ces deux clés. Ces deux clés seront à disposer au bon emplacement dans le fichier <em>appel.php</em>

<h2>3) Choisissez les élèments à afficher</h2>

Grâce à l'API Facebook vous avez accès à un esemble de méthodes. Visitez la <a href="https://developers.facebook.com/docs/graph-api/reference" target="_blank"> documentation Facebook pour plus d'informations.</a>

Une question ? Une remarque ? Un suggestion ? Contactez-moi à fevre.nico@hotmail.fr 
