<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @copyright  Copyright (c) 2018 Blackboard Inc. (http://www.blackboard.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Menu Flexpage';
$string['flexpagenav:view'] = 'Voir les menus Flexpage';
$string['flexpagenav:manage'] = 'Gérer les menus Flexpage';
$string['flexpagenav:addinstance'] = 'Ajouter un nouveau bloc de menu Flexpage';
$string['addexistingmenuaction'] = 'Ajouter un menu existant';
$string['managemenusaction'] = 'Gérer tous les menus';
$string['managemenus'] = 'Gérer les menus';
$string['name'] = 'Nom';
$string['manage'] = 'Gérer';
$string['usedastabs'] = 'Utilisés comme onglets';
$string['addmenudotdotdot'] = 'Ajouter un nouveau menu...';
$string['editmenu'] = 'Modifier le menu';
$string['useastab'] = 'Utiliser comme onglets';
$string['displayname'] = 'Afficher le nom';
$string['render'] = 'Afficher le menu comme';
$string['tree'] = 'Arborescence';
$string['dropdown'] = 'Liste déroulante';
$string['navhorizontal'] = 'Navigation horizontale';
$string['navvertical'] = 'Navigation verticale';
$string['ajaxexception'] = 'Erreur d\'application : {$a}';
$string['editmenuaction'] = 'Modifier le menu';
$string['deletemenuaction'] = 'Supprimer';
$string['managelinksaction'] = 'Gérer les liens';
$string['managelinks'] = 'Gérer les liens';
$string['editlink'] = 'Modifier';
$string['movelink'] = 'Déplacer le lien';
$string['deletelink'] = 'Supprimer';
$string['type'] = 'Type';
$string['preview'] = 'Aperçu/Info';
$string['urllink'] = 'URL';
$string['addlinkdotdotdot'] = 'Ajouter un nouveau lien...';
$string['editingx'] = 'Modification de {$a}';
$string['label'] = 'Étiquette';
$string['url'] = 'URL';
$string['labelurlrequired'] = 'Les champs URL et Étiquette sont obligatoires.';
$string['editlinkaction'] = 'Modifier';
$string['movelinkaction'] = 'Déplacer';
$string['deletelinkaction'] = 'Supprimer';
$string['movelinkx'] = 'Déplacer le lien {$a}';
$string['movebefore'] = 'avant';
$string['moveafter'] = 'après';
$string['areyousuredeletelink'] = '<p>Voulez-vous vraiment supprimer ce lien ?</p><p>{$a}</p>';
$string['areyousuredeletemenu'] = 'Voulez-vous vraiment supprimer le menu <strong>{$a}</strong> ?';
$string['deletemenu'] = 'Supprimer le menu';
$string['displaymenu'] = 'Afficher le menu';
$string['flexpage'] = 'Flexpage';
$string['flexpagelink'] = 'Flexpage';
$string['includechildren'] = 'Inclure les enfants';
$string['excludechildren'] = 'Enfants à inclure';
$string['nochildpages'] = 'Pas d\'éléments Flexpage enfants';
$string['flexpagewithchildren'] = '{$a} avec des enfants';
$string['flexpagewithoutchildren'] = '{$a} sans enfant';
$string['flexpageerror'] = 'Erreur : il est possible que l\'élément Flexpage n\'existe plus';
$string['flexpagenav'] = 'Menu Flexpage';
$string['flexpagenavlink'] = 'Menu Flexpage';
$string['flexpagenavx'] = 'Menu {$a}';
$string['flexpagenaverror'] = 'Erreur : il est possible que le menu Flexpage n\'existe plus';
$string['nomenustoadd'] = 'Il n\'y a plus d\'autres menus Flexpage à ajouter à ce menu.';
$string['coursemodule'] = 'Activité du cours';
$string['modlink'] = 'Activité';
$string['ticketlink'] = 'Ticket d\'incident';
$string['subject'] = 'Sujet';
$string['labelrequired'] = 'Le champ Étiquette est obligatoire.';
$string['menus'] = 'Menus';
$string['addexistingmenu'] = 'Ajouter un menu existant';
$string['addexistingmenu_help'] = 'Choisissez l\'emplacement où vous souhaitez placer le bloc sur l\'élément Flexpage en sélectionnant l\'un des boutons en haut de la fenêtre <strong>Ajouter un menu existant</strong>. Ensuite, cliquez sur le nom du menu que vous voulez ajouter au cours.';
$string['migrationtoptabs'] = 'Onglets supérieurs du cours';
$string['moderror'] = 'Erreur : il est possible que l\'activité n\'existe plus';
$string['noexistingmenustoadd'] = 'Aucun menu n\'a été créé pour ce cours. Utilisez <strong>Gérer > Gérer tous les menus</strong> pour créer de nouveaux menus.';
$string['urlfailedcleaning'] = 'L\'URL saisie a échoué au processus de validation et nettoyage. Vérifiez qu\'il s\'agit d\'une URL valide.';
$string['urlmuststartwith'] = 'L\'URL doit commencer par http:// ou https://';
$string['managinglinksforx'] = 'Gestion des liens pour le menu <em>{$a}</em>';
$string['formnamerequired'] = 'Le nom de menu est obligatoire.';
$string['invalidurl'] = 'L\'URL saisie n\'est pas valide et ne peut pas être utilisée. Vérifiez votre saisie.';
$string['menudisplayerror'] = 'Impossible d\'afficher le menu Flexpage associé. Il n\'existe plus ou il a été brisé. Supprimez ce bloc ou modifiez-le afin d\'afficher un menu Flexpage différent.';
$string['dockable'] = 'Autoriser ce bloc dans la barre latérale';
$string['dockable_help'] = 'Détermine si l\'utilisateur peut épingler le bloc dans sa barre latérale. En revanche, l\'épinglage peut être désactivé par les exceptions suivantes :
<ul>
    <li>La configuration du thème peut empêcher l\'épinglage des blocs.</li>
    <li>Seuls les menus Flexpage qui affichent une arborescence peuvent être épinglés.</li>
    <li>Les blocs sans titre ne peuvent pas être épinglés.</li>
</ul>';
$string['managemenus_help'] = '<p>Les menus permettent aux utilisateurs de naviguer entre les éléments Flexpage d\'un cours. Ils peuvent être placés dans n\'importe quelle zone Flexpage en tant que bloc. Ils peuvent également contenir des liens vers des éléments Flexpage dans un cours, des URL externes et des liens vers d\'autres menus.</p>

<p>Il est aussi possible de marquer un des menus de cours comme Onglet. Il apparaît alors dans les onglets en haut du cours. Si vous voulez que les onglets comportent plusieurs options, créez un menu Onglet supérieur et créez un lien vers un menu Flexpage différent pour chaque onglet.</p>';
