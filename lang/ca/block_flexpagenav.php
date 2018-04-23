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

$string['pluginname'] = 'Menú de flexpage';
$string['flexpagenav:view'] = 'Mostra els menús de flexpage';
$string['flexpagenav:manage'] = 'Gestiona els menús de flexpage';
$string['flexpagenav:addinstance'] = 'Afegeix un nou bloc de menú de flexpage';
$string['addexistingmenuaction'] = 'Afegeix un menú existent';
$string['managemenusaction'] = 'Gestiona tots els menús';
$string['managemenus'] = 'Gestiona els menús';
$string['name'] = 'Nom';
$string['manage'] = 'Gestiona';
$string['usedastabs'] = 'Utilitzats com a etiquetes';
$string['addmenudotdotdot'] = 'Afegeix un menú nou...';
$string['editmenu'] = 'Edita el menú';
$string['useastab'] = 'Utilitza com a etiquetes';
$string['displayname'] = 'Visualitza el nom';
$string['render'] = 'Mostra el menú com a';
$string['tree'] = 'Arbre';
$string['dropdown'] = 'Desplegable';
$string['navhorizontal'] = 'Navegació horitzontal';
$string['navvertical'] = 'Navegació vertical';
$string['ajaxexception'] = 'Error de l’aplicació: {$a}';
$string['editmenuaction'] = 'Edita el menú';
$string['deletemenuaction'] = 'Eliminar';
$string['managelinksaction'] = 'Gestiona els enllaços';
$string['managelinks'] = 'Gestiona els enllaços';
$string['editlink'] = 'Editar';
$string['movelink'] = 'Desplaça l’enllaç';
$string['deletelink'] = 'Eliminar';
$string['type'] = 'Tipus';
$string['preview'] = 'Visualització prèvia/Informació';
$string['urllink'] = 'URL';
$string['addlinkdotdotdot'] = 'Afegeix un enllaç nou...';
$string['editingx'] = 'S\'està editant {$a}';
$string['label'] = 'Etiqueta';
$string['url'] = 'URL';
$string['labelurlrequired'] = 'Són necessaris els camps URL i l\'etiqueta.';
$string['editlinkaction'] = 'Editar';
$string['movelinkaction'] = 'Mou';
$string['deletelinkaction'] = 'Eliminar';
$string['movelinkx'] = 'Desplaça l’enllaç {$a}';
$string['movebefore'] = 'abans';
$string['moveafter'] = 'després';
$string['areyousuredeletelink'] = '<p>Segur que voleu suprimir aquest enllaç?</p><p>{$a}</p>';
$string['areyousuredeletemenu'] = 'Segur que voleu suprimir el menú <strong>{$a}</strong>?';
$string['deletemenu'] = 'Suprimeix el menú';
$string['displaymenu'] = 'Mostra el menú';
$string['flexpage'] = 'Flexpage';
$string['flexpagelink'] = 'Flexpage';
$string['includechildren'] = 'Inclou elements secundaris';
$string['excludechildren'] = 'Elements secundaris inclosos';
$string['nochildpages'] = 'Cap flexpage secundària';
$string['flexpagewithchildren'] = '{$a} amb elements secundaris';
$string['flexpagewithoutchildren'] = '{$a} sense elements secundaris';
$string['flexpageerror'] = 'Error: és probable que la flexpage ja no existeixi';
$string['flexpagenav'] = 'Menú de flexpage';
$string['flexpagenavlink'] = 'Menú de flexpage';
$string['flexpagenavx'] = '{$a} menú';
$string['flexpagenaverror'] = 'Error: és probable que el menú de flexpage ja no existeixi';
$string['nomenustoadd'] = 'No hi ha cap menú de flexpage que pugueu afegir a aquest menú.';
$string['coursemodule'] = 'Activitat del curs';
$string['modlink'] = 'Activitat';
$string['ticketlink'] = 'Tiquet de notificació de problemes';
$string['subject'] = 'Assumpte';
$string['labelrequired'] = 'El camp d\'etiqueta és necessari.';
$string['menus'] = 'Menús';
$string['addexistingmenu'] = 'Afegeix un menú existent';
$string['addexistingmenu_help'] = 'Seleccioneu un dels botons de la part superior de la finestra <strong>Afegeix un menú existent</strong> per triar on voleu col·locar el bloc a la flexpage. A continuació, feu clic al nom del menú que voleu afegir al curs.';
$string['migrationtoptabs'] = 'Etiquetes principals del curs';
$string['moderror'] = 'Error: és probable que l\'activitat ja no existeixi';
$string['noexistingmenustoadd'] = 'No s\'ha creat cap menú en aquest curs. Per crear menús nous, aneu a <strong>Gestiona > Gestiona tots els menús</strong>.';
$string['urlfailedcleaning'] = 'L\'URL no ha passat el procés de validació i neteja. Assegureu-vos que l\'URL sigui vàlida.';
$string['urlmuststartwith'] = 'L\'URL ha de començar amb «http://» o «https://».';
$string['managinglinksforx'] = 'S\'estan gestionant els enllaços del menú <em>{$a}</em>';
$string['formnamerequired'] = 'El nom del menú és necessari.';
$string['invalidurl'] = 'L\'URL que heu introduït no és vàlid i no es pot fer servir. Comproveu-lo.';
$string['menudisplayerror'] = 'No s\'ha pogut mostrar el menú de flexpage associat. El menú de flexpage està trencat o ja no existeix. Suprimiu el bloc o editeu-lo perquè mostri un menú de flexpage diferent.';
$string['dockable'] = 'Permet l\'acoblament del bloc';
$string['dockable_help'] = 'Determina si l\'usuari pot acoblar el bloc o no. Tingueu en compte que les excepcions següents desactiven l\'acoblament:
<ul>
<li>El paràmetre Tema pot evitar l\'acoblament de blocs.</li>
<li>Només es poden acoblar els menús de flexpage que es mostren com a arbre.</li>
<li>Els blocs sense títol no es poden acoblar.</li>
</ul>';
$string['managemenus_help'] = '<p>Els menús permeten que els usuaris naveguin per les flexpages d\'un curs. Els menús es poden col·locar com a blocs a qualsevol àrea de la flexpage. Els menús poden incloure enllaços a flexpages del curs, URL externs i enllaços a altres menús.</p>

<p>També podeu marcar un dels menús del curs perquè es mostri com a "Pestanyes". Aquest menú apareixerà en forma de pestanyes principals del curs. Si voleu que les pestanyes presentin diverses opcions, podeu crear un menú de pestanyes principals i enllaçar cadascuna de les pestanyes a un menú de flexpage diferent.</p>';
