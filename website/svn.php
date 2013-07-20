<? include("lib/header.inc.php"); ?>

<p>
Cette page pr�sente bri�vement les syst�mes de gestion de version et explique comment installer l'un d'entre eux (svn) pour travailler � plusieurs.
</p>

<h1>Introduction</h1>

<p>
La plupart des syst�mes de gestion de versions fonctionnent en mode <i>client-serveur</i> :
<ul>
<li>un serveur informatique centralise les fichiers <b>de r�f�rence</b> et les met � disposition gr�ce � un programme qui tourne <i>en t�che de fond</i></li>
<li>les postes clients disposent de <b>copies locales</b> des fichiers et viennent se synchroniser sur le serveur de r�f�rence</li>
</ul>
</p>

<p>
L'extension <i>freeplane-collaborative-tools</i> s'appuie sur cet �cosyst�me pour permettre le travail collaboratif.
</p>

<p>
Dans la suite nous verrons donc comment :
<ul>
<li><a href="#install-client">installer un client SVN</a></li>
<li><a href="#install-server">installer un serveur SVN</a> si votre organisation n'en dispose pas d�j�</li>
<li><a href="#create-project">cr�er sont premier r�f�rentiel partag�</li>
</ul>

<h1 id="install-client">Installer un client SVN</h1>

<p>
Cette op�ration est � r�aliser chez chaque utilisateur qui souhaitera utiliser "freeplane-collaborative-tools".
</p>

<p>
Vous pouvez t�l�charger le client svn : <a href="http://tortoisesvn.net/downloads.html">TortoiseSVN</a>.
</p>

<p>
Durant l'installation, il faut bien s�lectionner : <i>command line tools</i>.<br />
<img src="/doc/screenshots/tortoisesvn-install.png" alt="tortoise svn install"/>
</p>

<p>
C'est aussi simple que �a.
</p>

<h1 id="install-server">Installer un serveur SVN</h1>

<p>
Cette op�ration n'est � r�aliser qu'une fois pour toute sur un serveur centralis� (windows, linux ou autre).
</p>

<p>
Si vous n'avez pas de serveur centralis�, l'installation peut tr�s bien �tre r�alis�e sur un poste de travail windows. Il faut cependant que celui-ci soit allum� quand les contributeurs souhaitent partager leurs cartes.
</p>


<p>
Vous pouvez t�l�charger le serveur svn ici : <a href="https://sourceforge.net/projects/win32svn/">Win32SVN</a>. (Il n'y a aucune action sp�cifique durant l'installation.)
</p>


<p>
La configuration du serveur se d�roule en deux temps :
<ol>
<li>cr�er un r�pertoire qui contiendra les fichiers de r�f�rence</li>
<li>d�marrer le serveur svn</li>
</ol>
</p>

<h2>Cr�ation du r�f�rentiel</h2>

<ol>
<li>Cr�er un r�f�rentiel <b><i>C:\svn-ref</i></b> gr�ce � la commande <b><i>svnadmin create "c:\svn-ref"</i></b> dans une fen�tre de commande (programme "cmd.exe" auquel on peut acc�der avec le raccourcis "touche windows + r")<br />
<img src="/doc/screenshots/svn-mkref.png" "tortoise svn mkdir" />
</li>
<li>Dans le r�pertoire cr��, ouvrir le fichier <i>c:\svn-ref\conf\svnserve.conf</i> et d�commenter les lignes suivantes (en retirant les "# ") :
<pre>
anon-access = read
auth-access = write
password-db = passwd
</pre>
De cette mani�re, vous autorisez les utilisateurs list�s dans le fichier <i>c:\svn-ref\conf\passwd</i> � se connecter au r�f�rentiel.
</li>
<li>
Ajouter des utilisateurs autoris�s dans le fichier <i>c:\svn-ref\conf\passwd</i>. Le fichier contient des exemples. Commen dans le cas pr�c�dent il faut retirer "# " pour que ce soit pris en compte :
<pre>
[users]
bob = motDePasseDeBob
</pre>
</li>
</ol>


<h2>D�marrage du serveur</h2>

<p>
Il faut maintenant s'assurer que le serveur SVN d�marrera automatiquement avec windows. Encore une fois �a se passe en ligne de commande. Attention, il faut bien respecter la syntaxe en laissant un espace apr�s le signe "=".
</p>
<p>
La commande est la suivante :
<pre>
sc create svn
	binpath= "\"C:Program Files (x86)\Subversion\bin\svnserve.exe\" --service -r C:\svn-ref\"
	displayname= "SVN Server"
	depend= Tcpip
	start= auto
</pre>
Il faut l'ex�cuter en ligne de commande en tant qu'administrateur. Pour cela, lancer <i>cmd.exe</i> en tant qu'administrateur : <br />
<img src="/doc/screenshots/cmd.png" "command line as administrator" /> <br />
Ce qui ressemble � �a : <br />
<img src="/doc/screenshots/svn-addservice.png" "svn service" /><br />
Pour le d�marrer la premi�re fois, il faut juste saisir la commande suivante :
<pre>
net start svn
</pre>
</p>

<h1 id="create-project">Cr�er son premier espace partag�</h1>

<p>
Pour cela nous allons utiliser le client svn <i>Tortoise svn</i>.
</p>
<p>
L'op�ration ne prend que quelques �tapes (cette premi�re �tape n'est � r�aliser qu'une fois) :
<ol>
<li>
aller dans le r�pertoire contenant votre carte, faire un click droit et choisir d'importer un projet<br />
<img src="/doc/screenshots/tortoisesvn-import.png" />
</li>
<li>
pr�ciser l'adresse du r�f�rentiel (en local 127.0.0.1, et � distance il faudra r�cup�rer l'adresse IP)<br />
<img src="/doc/screenshots/tortoisesvn-import2.png" />
</li>
<li>
saisir les informations d'authentification<br />
<img src="/doc/screenshots/tortoisesvn-auth.png" />
</li>
</ol>
Les fichiers sont maintenant dans le r�f�rentiel.
</p>

<p>
Maintenant il n'y a plus qu'� les extraire du r�f�rentiel pour travailler dessus (cette phase sera � r�aliser sur chaque poste client) :
<ol>
<li>
aller l� o� vous souhaitez extraire les cartes et fait un click droit<br />
<img src="/doc/screenshots/tortoisesvn-checkout.png" />
</li>
<li>
pr�ciser l'adresse du r�f�rentiel
<br />
<img src="/doc/screenshots/tortoisesvn-checkout2.png" />
</li>
</ol>
</p>

<p>
Maintenant que toute l'initialisation est termin�e, la suite se passera sous freeplane :)
</p>
<p>
Ouvrez la carte normalement, travaillez dessus et publiez l� avec "F12".
</p>
<p>
Si d'autres contributeurs travaillent dessus en parall�le, mettez l� � jour avec "F11".
</p>

<? include("lib/footer.inc.php"); ?>