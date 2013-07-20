<? include("lib/header.inc.php"); ?>

<table border="0">

<tr>
<td>
<? if ($l == "fr"){ ?>
<p><i>freeplane outils collaboratifs</i> est une extension � <a href="http://freeplane.sourceforge.net">freeplane</a> qui permet de faire du mind mapping participatif.</p>
<p>Le principe est simple
<ul>
<li>Chaque utilisateur dispose d'une copie de la mindmap sur laquelle il va pouvoir d�tailler certaines branches.</li>
<li>Au fur et � mesure de son travail, il va pouvoir publier ses modifications sur un serveur central et y r�cup�rer les modifications des autres utilisateurs.</li>
<li>Chacun peut ainsi travailler de son c�t� (y compris offline) et ensuite synchroniser sa carte pour r�cup�rer le travail des autres.</li>
</ul>
</p>

<? } else { ?>
<p>freeplane-collaborative-tools is a <a href="http://freeplane.sourceforge.net">freeplane</a> extension.</p>
<p>This addon brings versionning control to freeplane enabling:
<ul>
<li>versionning of mindmaps</li>
<li>team working on a single mindmap</li>
</ul>
</p>

<p>It currently supports diff/update/commit operations on a map via cvs, svn or git.</p>
<? } ?>
</td>
<td>
<? if ($l == "fr"){ ?>
<iframe width="420" height="315" src="//www.youtube.com/embed/p_4qVWyurIw?rel=0" frameborder="0" allowfullscreen></iframe>
<? } else { ?>
<iframe width="420" height="315" src="//www.youtube.com/embed/PeoxhbGOk_Y?rel=0" frameborder="0" allowfullscreen></iframe>
<? } ?>
</td>
</tr>
</table>

<? if ($l == "fr"){ ?>

<p>Pour r�aliser cela, l'extension s'appuie sur un outil tiers : un syst�me de gestion de version. Ce type d'outil est largement utilis� dans le monde du d�veloppement.</p>
<p>Actuellement, deux syst�mes de gestion de version sont support�s : CVS, SVN et GIT.</p>

<br />
<p>
<strong>Exemples d'utilisation</strong>
<ul>
	<li>vous avez une mindmap qui repr�sente un projet complexe sur laquelle plusieurs intervenants doivent r�aliser des mises � jour</li>
	<li>vous utilisez une mindmap dans le cadre d'un projet de d�veloppement, et vous souhaitez facilement utiliser le syst�me de gestion de version pour historiser vos changements</li>
	<li>votre mindmap est importante, et vous aimeriez garder l'historique des �volutions</li>
</ul>
</p>

<? } ?>


<h1 id="download">
<? if ($l == "fr"){ ?>
sources et t�l�chargement
<? } else { ?>
sources and download
<? } ?>
</h1>

<ul>
<?
if ($l == "fr") {
?>
<li>Derni�res version en t�l�chargement sur <a href="https://sourceforge.net/projects/freeplanecollab/files/stable/">sourceforge</a></li>
<li>Sources disponibles sur <a href="https://github.com/seb4stien/freeplane-collaborative-addon">github</a></li>
<?
} else {
?>
<li>Latest release can be found on <a href="https://sourceforge.net/projects/freeplanecollab/files/stable/">sourceforge</a></li>
<li>Sources can be found on <a href="https://github.com/seb4stien/freeplane-collaborative-addon">github</a></li>
<?
}
?>
</ul>


<? include("lib/footer.inc.php"); ?>