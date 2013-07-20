<? include("lib/header.inc.php"); ?>

<h1>Construire une carte � plusieurs avec freeplane</h1>

<p>
Si vous utilisez freeplane sur de <b>grosses cartes</b> (d'organisation, de documentation, de d�veloppement...) vous vous �tes certainement d�j� retrouv� dans la situation de vouloir <b>travailler � plusieurs</b> sur le document.
</p>

<p>
Deux grandes approches sont disponibles sur le march� aujourd'hui : l'<b>�dition collaborative temps r�el, et le partage de fichier</b>. Les deux ont leurs avantages et leurs inconv�nients : dans un cas on devra �tre connect� pour interagir, dans l'autre on risque de bloquer le travail simultan�.
</p>

<p>
Une <b>autre possibilit�</b> existe d�sormais : <b>le versionning de cartes</b> sous freeplane gr�ce � l'addon <a href="http://freeplanecollab.sourceforge.net/index.php?l=fr">freeplane-collaborative-tools</a>.
</p>


<h2>Comment l'utiliser ?</h2>

<p>
Le principe est simple
<ul>
<li>vous ouvrez votre carte sur votre poste de travail</li>
<li>vous <b>r�cup�rez les modifications</b> des autres contributeurs (raccourcis clavier : "F11")</li>
<li>vous <b>�ditez</b> la carte</li>
<li>vous la <b>publiez</b> (raccourcis clavier "F12") pour que les autres y acc�dent</li>
</ul>

Les avantages de ce fonctionnement :
<ul>
<li>chacun peut travailler sur sa partie de la carte (m�me en �tant offline)</li>
<li>tout le monde a la <b>vue d'ensemble</b></li>
</ul>

<h2>Comment �a marche ?</h2>

<p>
Le pr�requis est de disposer d'un syst�me de gestion de version. Aujourd'hui CVS, SVN et GIT sont support�s. 
</p>
<p>
Si vous ne disposez pas de syst�me de gestion de version deux possibilit�s s'offre � vous :
<ul>
<li>en installer un : todo lien vers un tuto</li>
<li>utiliser un service public : todo : lien vers ?</li>
</ul>
</p>

<p>
Le fonctionnement du addon est ensuite tr�s simple : il met � disposition les op�rations les plus courantes (mise � jour, publication) � l'int�rieur de freeplane (via les menus et les raccourcis).
</p>

<p>
Point de vigilance : le syst�me de gestion de version n'est pas magicien, si vous travaillez � plusieurs sur le m�me noeud il pourra y avoir des conflits. Dans ce cas il faudra les r�soudre en ouvrant la mindmap avec un �diteur de texte.
</p>

<h2>Quelles sont les �volutions pr�vues ?</h2>

<p>
Il s'agit d'un projet opensource (GPL) disponible sous <a href="https://github.com/seb4stien/freeplane-collaborative-addon/">github</a> auquel chacun peut contribuer et donc d�terminer les �volutions :).
</p>

<p>
Toutes les �volutions pr�vues sont list�es <a href="https://github.com/seb4stien/freeplane-collaborative-addon/issues">ici</a>.
</p>

<? include("footer.php"); ?>