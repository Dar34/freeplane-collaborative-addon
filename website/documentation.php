<?
$page="documentation";
include("lib/header.inc.php");
?>

<!-- TOC -->
<br />
<? if ($l == "fr") { ?>
<b>Table des mati�res</b>
<ul>
<li>
	freeplane-collaborative-tools
	<ul>
		<li><a href="#videos">vid�os</a></li>
		<li><a href="#install">installation</a></li>
		<li><a href="#configure">configuration</a></li>
		<li><a href="#use">utilisation</a></li>
		<li><a href="#uninstall">d�sinstallation</a></li>
	</ul>
</li>
<li>
	svn
	<ul>
		<li><a href="/<?= $l ?>/svn.html">installer et utiliser svn</a></li>
	</ul>
</li>
<? } else { ?>
<b>Table of content</b>
<ul>
<li>
	freeplane-collaborative-tools
	<ul>
		<li><a href="#videos">videos</a></li>
		<li><a href="#install">install</a></li>
		<li><a href="#configure">configuration</a></li>
		<li><a href="#use">use</a></li>
		<li><a href="#uninstall">uninstall</a></li>
	</ul>
<li>
	svn
	<ul>
		<li><a href="/<?= $l ?>/svn.html">how to install and use svn</a></li>
	</ul>
</li>
</ul>
<? } ?>

<!-- Install -->
<? if ($l == "fr") { ?>
<h1 id="install">vid�os</h1>
<? } else { ?>
<h1 id="install">videos</h1>
<? } ?>

<iframe src="http://www.youtube.com/embed/videoseries?list=PLM-LYMrurBhIrsE4wVTq1xZr-oU8dLFVB&showinfo=1" 
width="100%" height="500" frameborder="0"></iframe>

<!-- Install -->
<? if ($l == "fr") { ?>
<h1 id="install">installation</h1>

<div class="warning">
Important : ce addon n�cessite d'avoir un syst�me de gestion de version d'install� sur son ordinateur. Aujourd'hui seul CVS et GIT sont support�s. De la documentation viendra pr�senter comment installer un tel outil.
</div>

<ol>
<li>T�l�charger la derni�re version ici : <a href="https://sourceforge.net/projects/freeplanecollab/files/">https://sourceforge.net/projects/freeplanecollab/files/</a></li>
<li>Ouvrir le fichier avec freeplane <br/> <img src="/doc/screenshots/addon-download.png" alt="addon download" /></li>
<li>Choisir d'installer le addon <br /> <img src="/doc/screenshots/addon-install.png" alt="addon installation" /></li>
<li>Confirmer l'installation <br /> <img src="/doc/screenshots/addon-install-2.png" width="600" alt="addon installation confirmation" /></li>
<li>Accepter la licence <br /> <img src="/doc/screenshots/addon-install-3.png" alt="accepter la license" /></li>
<li>Red�marrer freeplane une fois l'installation termin�e <br /> <img src="/doc/screenshots/addon-install-4.png" alt="red�marrer freeplane" /></li>
</ol>


<?
} else {
?>
<h1 id="install">installation</h1>


<div class="warning">
Important : this addon requires a working versionning control system. Currently only CVS and GIT are supported. More doc will come to explain how to install one of these.
</div>

<ol>
<li>Donwload the latest version : <a href="https://sourceforge.net/projects/freeplanecollab/files/">https://sourceforge.net/projects/freeplanecollab/files/</a></li>
<li>Open it with freeplane <br/> <img src="/doc/screenshots/addon-download.png" alt="addon download" /></li>
<li>Choose to install it <br /> <img src="/doc/screenshots/addon-install.png" alt="addon installation" /></li>
<li>Confirm installation <br /> <img src="/doc/screenshots/addon-install-2.png" width="600" alt="addon installation confirmation" /></li>
<li>Accept the license <br /> <img src="/doc/screenshots/addon-install-3.png" alt="accepter la license" /></li>
<li>Restart freeplane <br /> <img src="/doc/screenshots/addon-install-4.png" alt="red�marrer freeplane" /></li>
</ol>

<?
}
?>

<?
if ($l == "fr"){
?>
<h1 id="configure">configuration</h1>
<ol>
<li>Param�trer l'addon en allant dans <i>Outils > Pr�f�rences</i>, puis dans <i>Plugins</i> <br />
	<img src="/doc/screenshots/addon-configure.png" alt="configurer" /> <br />
</li>
<li>Configurer l'add-on
	<img src="/doc/screenshots/addon-configure-2.png" alt="configurer" width="600" />
	<ul>
	<li><b>Chemin vers l'ex�cutable XXX</b> : seul celui du syst�me de gestion de version que vous utilisez est obligatoire.</li>
	<li><b>Mode verbeux</b> : principalement pour d�bugger l'add-on.</li>
	<li><b>Mode silencieux</b> : pour limiter le nombre de popups affich�s lorsque vous �tes familiaris� avec l'add-on (les statuts "ok" sont affich�s dans la barre d'�tat, les erreurs continuent � s'afficher sous forme de popup)</li>
	</ul>
</li>	
</ol>

<?
} else {
?>
<h1 id="configure">configuration</h1>
<ol>
<li>Configure the addon under <i>Tools > Preferences</i>, then <i>Plugins</i> <br />
	<img src="/doc/screenshots/addon-configure.png" alt="configure" />
</li>
<li>
	<img src="/doc/screenshots/addon-configure-2.png" alt="configure" width="600" /> <br />
	<ul>
	<li><b>Path to XXX</b> : only the one to the versionning system you use is mandatory.</li>
	<li><b>Verbose mode</b> : mainly for debugging.</li>
	<li><b>Quiet mode</b> : to limit the number of confirmation popups when you're used to the add-on ("ok" are shown in the status bar, errors are still displayed as popups.</li>
	</ul>
</li>	
</ol>
<?
}
?>


<?
if ($l == "fr"){
?>
<h1 id="use">utilisation</h1>
<p>
Demo:<br />
<iframe width="420" height="315" src="//www.youtube.com/embed/HIGS78lgeUk" frameborder="0" allowfullscreen></iframe>
</p>

<p>
Une fois l'addon install� les commandes peuvent �tre utilis�e via les menus :<br />
<img src="/doc/screenshots/addon-installed-menu.png" alt="menus install�s" />
</p>

<p>
Ou bien via les raccourcis :<br />
<img src="/doc/screenshots/addon-installed-shortcuts.png" alt="raccourcis" />
</p>

<? } else { ?>

<h1 id="use">usage</h1>

<p>
Demo:<br />
<iframe width="420" height="315" src="//www.youtube.com/embed/HIGS78lgeUk" frameborder="0" allowfullscreen></iframe>
</p>

<p>
Once installed, the script are available under the "tools" menu :<br />
<img src="/doc/screenshots/addon-installed-menu.png" alt="menus install�s" />
</p>

<p>
Or directrly through the hot keys :<br />
<img src="/doc/screenshots/addon-installed-shortcuts.png" alt="raccourcis" />
</p>


<? } ?>


<?
if ($l == "fr"){
?>
<h1 id="uninstall">d�sinstallation</h1>

Le addon peut �tre d�install� via le menu "Outils > Addons" : <br />
<img src="/doc/screenshots/addon-install-5.png" width="600" alt="v�rifier l'installation" />


<? } else { ?>
<h1 id="uninstall">uninstall</h1>

The addon can be uninstalled under "Tools > addons" : <br />
<img src="/doc/screenshots/addon-install-5.png" width="600" alt="v�rifier l'installation" />

<? } ?>


<? include("lib/footer.inc.php"); ?>