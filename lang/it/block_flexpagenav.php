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
$string['flexpagenav:view'] = 'Visualizza menu Flexpage';
$string['flexpagenav:manage'] = 'Gestisci menu Flexpage';
$string['flexpagenav:addinstance'] = 'Aggiungi un nuovo block menu Flexpage';
$string['addexistingmenuaction'] = 'Aggiungi menu esistente';
$string['managemenusaction'] = 'Gestisci tutti i menu';
$string['managemenus'] = 'Gestisci menu';
$string['name'] = 'Nome';
$string['manage'] = 'Gestisci';
$string['usedastabs'] = 'Utilizzato come schede';
$string['addmenudotdotdot'] = 'Aggiungi nuovo menu...';
$string['editmenu'] = 'Modifica menu';
$string['useastab'] = 'Utilizza come schede';
$string['displayname'] = 'Visualizza nome';
$string['render'] = 'Visualizza menu come';
$string['tree'] = 'Albero';
$string['dropdown'] = 'A discesa';
$string['navhorizontal'] = 'Navigazione orizzontale';
$string['navvertical'] = 'Navigazione verticale';
$string['ajaxexception'] = 'Errore applicazione: {$a}';
$string['editmenuaction'] = 'Modifica menu';
$string['deletemenuaction'] = 'Elimina';
$string['managelinksaction'] = 'Gestisci link';
$string['managelinks'] = 'Gestisci link';
$string['editlink'] = 'Modifica';
$string['movelink'] = 'Sposta link';
$string['deletelink'] = 'Elimina';
$string['type'] = 'Digita';
$string['preview'] = 'Anteprima/Informazioni';
$string['urllink'] = 'URL';
$string['addlinkdotdotdot'] = 'Aggiungi nuovo link...';
$string['editingx'] = 'Modifica di {$a}';
$string['label'] = 'Etichetta';
$string['url'] = 'URL';
$string['labelurlrequired'] = 'I campi etichetta e URL sono obbligatori.';
$string['editlinkaction'] = 'Modifica';
$string['movelinkaction'] = 'Sposta';
$string['deletelinkaction'] = 'Elimina';
$string['movelinkx'] = 'Sposta link {$a}';
$string['movebefore'] = 'prima';
$string['moveafter'] = 'dopo';
$string['areyousuredeletelink'] = '<p>Eliminare questo link?</p><p>{$a}</p>';
$string['areyousuredeletemenu'] = 'Eliminare il menu <strong>{$a}</strong>?';
$string['deletemenu'] = 'Elimina menu';
$string['displaymenu'] = 'Visualizza menu';
$string['flexpage'] = 'Flexpage';
$string['flexpagelink'] = 'Flexpage';
$string['includechildren'] = 'Includi elemento secondario';
$string['excludechildren'] = 'Elemento secondario da includere';
$string['nochildpages'] = 'Nessuna flexpage secondaria';
$string['flexpagewithchildren'] = '{$a} con elementi secondari';
$string['flexpagewithoutchildren'] = '{$a} senza elementi secondari';
$string['flexpageerror'] = 'Errore: è probabile che Flexpage non esista più';
$string['flexpagenav'] = 'Menu Flexpage';
$string['flexpagenavlink'] = 'Menu Flexpage';
$string['flexpagenavx'] = 'menu {$a}';
$string['flexpagenaverror'] = 'Errore: è probabile che il menu Flexpage non esista più';
$string['nomenustoadd'] = 'Non esistono altri menu Flexpage che è possibile aggiungere a questo menu.';
$string['coursemodule'] = 'Attività del corso';
$string['modlink'] = 'Attività';
$string['ticketlink'] = 'Trouble Ticket';
$string['subject'] = 'Materia';
$string['labelrequired'] = 'Il campo etichetta è obbligatorio.';
$string['menus'] = 'Menu';
$string['addexistingmenu'] = 'Aggiungi menu esistente';
$string['addexistingmenu_help'] = 'Scegliere il punto in cui posizionare il block sulla flexpage, selezionando uno dei pulsanti in cima alla finestra <strong>Aggiungi menu esistente</strong>. Successivamente, fare clic sul nome del menu che si desidera aggiungere al corso.';
$string['migrationtoptabs'] = 'Schede principali del corso';
$string['moderror'] = 'Errore: è probabile che l\'Attività non esista più';
$string['noexistingmenustoadd'] = 'Non sono stati creati menu per questo corso.  Utilizza <strong>Gestisci > Gestisci tutti i menu</strong> per creare nuovi menu.';
$string['urlfailedcleaning'] = 'L\'URL inserito non ha superato il processo di pulizia e convalida. Assicurarsi che l\'URL immesso sia valido.';
$string['urlmuststartwith'] = 'L\'URL inserito deve iniziare con http:// or https://';
$string['managinglinksforx'] = 'Gestione dei link per il menu <em>{$a}</em>';
$string['formnamerequired'] = 'Il nome del menu è obbligatorio.';
$string['invalidurl'] = 'L\'URL inserito non è valido e non può essere utilizzato. Verificare l\'URL immesso.';
$string['menudisplayerror'] = 'Impossibile visualizzare il menu Flexpage associato.  Il menu Flexpage è interrotto o non esiste più.  Eliminare questo block o modificarlo per mostrare un menu Flexpage diverso.';
$string['dockable'] = 'Consenti ancoraggio del block';
$string['dockable_help'] = 'Stabilire se questo block può essere o meno ancorato dall\'utente.  Tenere presente che, nonostante l\'ancoraggio, il block può essere disabilitato dalle seguenti eccezioni:
<ul>
    <li>L\'impostazione del tema può impedire l\'ancoraggio dei block.</li>
    <li>È possibile ancorare i menu Flexpage visualizzati come alberi.</li>
    <li>Non è possibile ancorare i block senza titolo.</li>
</ul>';
$string['managemenus_help'] = '<p>I menu forniscono agli utenti le opzioni di navigazione necessarie per spostarsi tra le flexpage di un corso. I menu possono essere collocati in qualsiasi area o block della flexpage e possono contenere i link alle flexpage all\'interno del corso, URL esterni e link ad altri menu.</p>

<p>Uno dei menu nel corso può essere contrassegnato durante l\'uso di "Schede". Questo menu apparirà nel corso come Schede principali. Se si desidera che ogni scheda offra più opzioni, creare un menu Scheda principale e collegarla a un diverso menu Flexpage per ciascuna scheda.</p>';
