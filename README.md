²Gestionnaire administratifs

Le système doit fournir les fonctionnalités suivantes :
- Gestionnaire les différents documents administratifs pour un dv aussi
- Sauvegarde les documents dans un dossier (les types et tailles autorisés sont prédéfinit)  
- Sauvegarde par différents droits accès :
Pour les docs publics : dossier publique
Pour les docs privés : dossier sous le nom utilisateur
- Respecter les règles de l’accessibilité (compatibilité avec synth.voc./inverse vidéo/zoom able etc)
- Consultation/Création/modification des documents 
- Catégoriser les documents
- Recherche par date, par catégorie(s), par tag
- Gérer la validité des documents
- Accès a la distance les documents


Documents :
La définition d’un document : un container virtuel, ou l’utilisateur peut stocker un ou plusieurs fichiers existants, le libeller et catégoriser.  Les utilisateurs peuvent ajouter des notes a des documents. Il est possible à enregistrer les notes vocales aussi.
Donc un document dans le système peut contenir plusieurs différents fichiers.
-	Les données nécessaires pour ajouter un document :
o	Label
o	Chemin d’accès (original)  du fichier
o	Signaler, si le document est privé
o	Catégorie (0, un ou plusieurs possible)
o	Date de la validité (n’est pas obligatoire)
o	Date de l’alarme (n’est pas obligatoire)
o	Note écrit (n’est pas obligatoire)
o	 Chemin d’accès (original)  du fichier de la note vocale (n’est pas obligatoire)

Le system enregistre encore automatiquement :
-	le propriétaire du document
-	Date d’enregistrement (automatique)
-	Extension des fichiers
-	Taille des fichiers
-	Chemin d’accès (destination) de la fichiers
Si l’utilisateur veut ajouter un fichier non autorisé (par exemple : .exe) ou il dépasse la limite de la taille autorisée, le système affiche un message. (L’utilisateur peut réessayer avec autre fichier )

Visibilité et droit d’accès les documents :
L’utilisateur peut choisir entre le traitement publique et privée.
	-publique : tous les utilisateurs peuvent accéder
	Privée : l’utilisateur peux accéder 

Catégories (multi tags):
Tous les utilisateurs peuvent catégoriser ses documents. Dans son niveau il peut utiliser les différentes catégories prédéfinit ou créer nouveau catégorie aussi. Il est possible à utiliser plusieurs catégories pour une doc. ((nom/propr./type/priorité/subject-domain/date/validité/note etc)
	-il peut chercher par ces catégories
Notes :
Tous les utilisateurs peuvent ajouter des notes a des docs. Il est possible à enregistrer les notes vocales aussi.

Alarme/archivage auto :
Les utilisateurs peuvent ajouter a ses doc un date de validation et il peut créer une alarme ou passer un archivage automatique. L’archivage est une label « archiv ».

Utilisateurs :
Les compte utilisateurs sont gérer par administrateur. Que l’administrateur peut créer une compte utilisateur, mais tous les utilisateurs peuvent consulter et modifier ses propre  données personnelles sur son page profil.  Un utilisateur ne gère pas les autres utilisateurs mais il peut consulter les documents des autres utilisateurs, s’ils sont publics.

Les droits d’accès et les traitement possibles:
	-administrateur : -  create/read/update/delete ses docs
			- create/read/update/delete tout les docs publiques	
			- delete les doc privées
			- crud fichiers
			- crud categories
			- recherche par catégories
			-crud client
	- configuration (chemin d’accès destinations, types fichiers autorisées etc.)
	-utilisateur : 	-  create/read/update/delete ses documents
			- accès direct ses fichiers (download/read)
			- create/read/update tout les doc publique
			- create/read categories

Categories:
Une catégorie (tag) est un label pour simplifier la recherche entre les documents. Tous les utilisateurs peuvent consulter les tags, et – si elle n’existe pas encore – l’ajouter aussi. L’utilisation des tags n’est pas obligatoire par contre un document peut contenir plusieurs tags aussi.
L’administrateur peut ajouter, supprimer ou modifier un tag.

Le system doit être capable à intégrer les modules suivants dans avenir dans une version suivant : 
 - quickview 
- partager le document pour un utilisateur externe (par lien direct sécurisé)
- ajouter les fichiers directement par scanner/app photo
- OCR intégration (ou accéder directement une service externe)
    	 - imprimer direct (peut être avec une counter)
    	 - envoyé par e-mail
   - recherche vocale
     -journalisation (logging)
     - compatibilité app. mobile
