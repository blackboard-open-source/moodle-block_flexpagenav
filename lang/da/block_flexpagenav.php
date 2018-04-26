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

$string['pluginname'] = 'Flexpage-menu';
$string['flexpagenav:view'] = 'Vis Flexpage-menuer';
$string['flexpagenav:manage'] = 'Administrer Flexpage-menuer';
$string['flexpagenav:addinstance'] = 'Tilføj en ny blok til Flexpage-menuer';
$string['addexistingmenuaction'] = 'Tilføj eksisterende menu';
$string['managemenusaction'] = 'Administrer alle menuer';
$string['managemenus'] = 'Administrer menuer';
$string['name'] = 'Navn';
$string['manage'] = 'Administrer';
$string['usedastabs'] = 'Bruges som faner';
$string['addmenudotdotdot'] = 'Tilføj ny menu...';
$string['editmenu'] = 'Rediger menu';
$string['useastab'] = 'Brug som faner';
$string['displayname'] = 'Visningsnavn';
$string['render'] = 'Vis menu som';
$string['tree'] = 'Træ';
$string['dropdown'] = 'Rullemenu';
$string['navhorizontal'] = 'Vandret navigation';
$string['navvertical'] = 'Lodret navigation';
$string['ajaxexception'] = 'Programfejl: {$a}';
$string['editmenuaction'] = 'Rediger menu';
$string['deletemenuaction'] = 'Slet';
$string['managelinksaction'] = 'Administrer links';
$string['managelinks'] = 'Administrer links';
$string['editlink'] = 'Rediger';
$string['movelink'] = 'Flyt link';
$string['deletelink'] = 'Slet';
$string['type'] = 'Type';
$string['preview'] = 'Eksempel/info';
$string['urllink'] = 'URL-adresse';
$string['addlinkdotdotdot'] = 'Tilføj nyt link...';
$string['editingx'] = 'Redigerer {$a}';
$string['label'] = 'Etiket';
$string['url'] = 'URL-adresse';
$string['labelurlrequired'] = 'Etiket- og URL-felterne er obligatoriske.';
$string['editlinkaction'] = 'Rediger';
$string['movelinkaction'] = 'Flyt';
$string['deletelinkaction'] = 'Slet';
$string['movelinkx'] = 'Flyt link {$a}';
$string['movebefore'] = 'før';
$string['moveafter'] = 'efter';
$string['areyousuredeletelink'] = '<p>Er du sikker på, at du vil slette dette link?</p><p>{$a}</p>';
$string['areyousuredeletemenu'] = 'Er du sikker på, at du vil slette <strong>{$a}</strong>-menu?';
$string['deletemenu'] = 'Slet menu';
$string['displaymenu'] = 'Vis menu';
$string['flexpage'] = 'Flexpage';
$string['flexpagelink'] = 'Flexpage';
$string['includechildren'] = 'Medtag underordnede';
$string['excludechildren'] = 'Underordnede, der skal medtages';
$string['nochildpages'] = 'Ingen underordnede Flexpage';
$string['flexpagewithchildren'] = '{$a} med underordnede';
$string['flexpagewithoutchildren'] = '{$a} uden underordnede';
$string['flexpageerror'] = 'Fejl: Flexpage findes sandsynligvis ikke længere';
$string['flexpagenav'] = 'Flexpage-menu';
$string['flexpagenavlink'] = 'Flexpage-menu';
$string['flexpagenavx'] = '{$a}-menu';
$string['flexpagenaverror'] = 'Fejl: Flexpage-menu findes sandsynligvis ikke længere';
$string['nomenustoadd'] = 'Der er ingen andre Flexpage-menuer, du kan føje til denne menu.';
$string['coursemodule'] = 'Kursusaktivitet';
$string['modlink'] = 'Aktivitet';
$string['ticketlink'] = 'Problembillet';
$string['subject'] = 'Emne';
$string['labelrequired'] = 'Etiketfeltet er obligatorisk.';
$string['menus'] = 'Menuer';
$string['addexistingmenu'] = 'Tilføj eksisterende menu';
$string['addexistingmenu_help'] = 'Vælg, hvor du vil placere blokken på flexsiden ved at vælge en af knapperne øverst i vinduet <strong>Tilføj eksisterende menu</strong>. Klik derefter på navnet på den menu, du vil føje til kurset.';
$string['migrationtoptabs'] = 'Topfaner for kursus';
$string['moderror'] = 'Fejl: Aktivitet findes sandsynligvis ikke længere';
$string['noexistingmenustoadd'] = 'Der er ikke oprettet nogen menuer til dette kursus.  Brug <strong>Administrer > Administrer alle menuer</strong> til at oprette nye menuer.';
$string['urlfailedcleaning'] = 'Validerings- og oprydningsprocessen mislykkedes for den angivne URL.  Sørg for, at den angivne URL er gyldig.';
$string['urlmuststartwith'] = 'Den angivne URL skal starte med enten http:// eller https://';
$string['managinglinksforx'] = 'Administrerer links for menuen <em>{$a}</em>';
$string['formnamerequired'] = 'Menunavnet er obligatorisk.';
$string['invalidurl'] = 'Den angivne URL er ugyldig og kan ikke bruges.  Bekræft den angivne URL.';
$string['menudisplayerror'] = 'Kunne ikke vise den tilknyttede Flexpage-menu.  Flexpage-menuen er enten ødelagt eller findes ikke længere.  Slet denne blok, eller rediger den for at vise en anden Flexpage-menu.';
$string['dockable'] = 'Tillad forankring af denne blok';
$string['dockable_help'] = 'Bestemmer, om denne blok kan forankres af brugere eller ej.  Vær dog opmærksom på, at forankring kan deaktiveres af følgende undtagelser:
<ul>
<li>Temaindstilling kan forhindre forankring af blokke.</li>
<li>Kun Flexpage-menuer, der vises som træer, kan forankres.</li>
<li>Blokke uden titler kan ikke forankres.</li>
</ul>';
$string['managemenus_help'] = '<p>Menuer indeholder den navigation, der er nødvendig for brugere til at bevæge sig gennem flexsiderne i et kursus. Menuer kan placeres i vilkårlige flexsideområder som blokke. Menuer kan indeholde links til flexsider i kurset, eksterne URL\'er og links til andre menuer.</p>

<p>En af menuerne i et kursus kan også markeres til at bruge "Faner". Denne menu vises som topfaner i kurset. Hvis hver enkelt fane skal indeholde flere indstillinger, skal du oprette en topfanemenu og linke til en anden Flexpage-menu for hver enkelt fane.</p>';
