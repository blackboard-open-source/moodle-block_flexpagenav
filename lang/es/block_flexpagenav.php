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

$string['pluginname'] = 'Menú Flexpage';
$string['flexpagenav:view'] = 'Ver menús Flexpage';
$string['flexpagenav:manage'] = 'Gestionar menús Flexpage';
$string['flexpagenav:addinstance'] = 'Agregar un nuevo bloque de menú de Flexpage';
$string['addexistingmenuaction'] = 'Agregar menú existente';
$string['managemenusaction'] = 'Gestionar todos los menús';
$string['managemenus'] = 'Gestionar menús';
$string['name'] = 'Nombre';
$string['manage'] = 'Gestionar';
$string['usedastabs'] = 'Usado como pestañas';
$string['addmenudotdotdot'] = 'Agregar menú nuevo...';
$string['editmenu'] = 'Editar menú';
$string['useastab'] = 'Usar como pestañas';
$string['displayname'] = 'Mostrar nombre';
$string['render'] = 'Visualizar menú como';
$string['tree'] = 'Árbol';
$string['dropdown'] = 'Desplegable';
$string['navhorizontal'] = 'Navegación horizontal';
$string['navvertical'] = 'Navegación vertical';
$string['ajaxexception'] = 'Error de la aplicación: {$a}';
$string['editmenuaction'] = 'Editar menú';
$string['deletemenuaction'] = 'Eliminar';
$string['managelinksaction'] = 'Gestionar enlaces';
$string['managelinks'] = 'Gestionar enlaces';
$string['editlink'] = 'Editar';
$string['movelink'] = 'Mover enlace';
$string['deletelink'] = 'Eliminar';
$string['type'] = 'Tipo';
$string['preview'] = 'Vista previa/Información';
$string['urllink'] = 'URL';
$string['addlinkdotdotdot'] = 'Agregar nuevo enlace...';
$string['editingx'] = 'Editando {$a}';
$string['label'] = 'Etiqueta';
$string['url'] = 'URL';
$string['labelurlrequired'] = 'Los campos de URL y etiqueta son obligatorios.';
$string['editlinkaction'] = 'Editar';
$string['movelinkaction'] = 'Mover';
$string['deletelinkaction'] = 'Eliminar';
$string['movelinkx'] = 'Mover enlace {$a}';
$string['movebefore'] = 'antes';
$string['moveafter'] = 'después';
$string['areyousuredeletelink'] = '<p>¿Está seguro de que desea eliminar este enlace?</p><p>{$a}</p>';
$string['areyousuredeletemenu'] = '¿Está seguro de que desea eliminar el menú <strong>{$a}</strong>?';
$string['deletemenu'] = 'Eliminar menú';
$string['displaymenu'] = 'Menú de visualización';
$string['flexpage'] = 'Página Flexpage';
$string['flexpagelink'] = 'Página Flexpage';
$string['includechildren'] = 'Incluir elementos secundarios';
$string['excludechildren'] = 'Elementos secundarios para incluir';
$string['nochildpages'] = 'No existen páginas Flexpage secundarias';
$string['flexpagewithchildren'] = '{$a} con elementos secundarios';
$string['flexpagewithoutchildren'] = '{$a} sin elementos secundarios';
$string['flexpageerror'] = 'Error: La página Flexpage probablemente ya no existe';
$string['flexpagenav'] = 'Menú Flexpage';
$string['flexpagenavlink'] = 'Menú Flexpage';
$string['flexpagenavx'] = '{$a} menú';
$string['flexpagenaverror'] = 'Error: El menú Flexpage probablemente ya no existe';
$string['nomenustoadd'] = 'No existen otros menús Flexpage que pueda agregar a este menú.';
$string['coursemodule'] = 'Actividad del curso';
$string['modlink'] = 'Actividad';
$string['ticketlink'] = 'Boleto de problemas';
$string['subject'] = 'Asunto';
$string['labelrequired'] = 'El campo de etiqueta es obligatorio.';
$string['menus'] = 'Menús';
$string['addexistingmenu'] = 'Agregar menú existente';
$string['addexistingmenu_help'] = 'Elija dónde desea colocar el bloque en la página Flexpage seleccionando uno de los botones ubicados en la parte superior de la ventana <strong>Agregar menú existente</strong>. A continuación, haga clic en el nombre del menú que desea agregar al curso.';
$string['migrationtoptabs'] = 'Pestañas principales del curso';
$string['moderror'] = 'Error: La actividad probablemente ya no existe';
$string['noexistingmenustoadd'] = 'No se crearon menús para este curso. Use <strong>Gestionar > Gestionar todos los menús</strong> para crear menús nuevos.';
$string['urlfailedcleaning'] = 'El proceso de validación y limpieza falló con la URL ingresada. Asegúrese de que la URL ingresada sea válida.';
$string['urlmuststartwith'] = 'La URL ingresada debe comenzar con http:// o https://';
$string['managinglinksforx'] = 'Gestionando enlaces para el menú <em>{$a}</em>';
$string['formnamerequired'] = 'El nombre del menú es obligatorio.';
$string['invalidurl'] = 'La URL ingresada no es válida y no puede ser usada. Verifique la URL ingresada.';
$string['menudisplayerror'] = 'No se pudo visualizar el menú Flexpage asociado. Es probable que el menú Flexpage esté roto o ya no exista. Elimine o edite este bloque para mostrar un menú Flexpage diferente.';
$string['dockable'] = 'Permitir que este bloque se acople';
$string['dockable_help'] = 'Determine si este bloque puede ser acoplado por el usuario o no. Sin embargo, tenga en cuenta que el acoplamiento puede ser deshabilitado por las siguientes excepciones:
<ul>
    <li>Establecer un tema puede impedir el acoplamiento de bloques.</li>
    <li>Solo se pueden acoplar los menús Flexpage que se visualizan como Árboles.</li>
    <li>Los bloques sin títulos no se pueden acoplar.</li>
</ul>';
$string['managemenus_help'] = '<p>Los menús proporcionan la navegación necesaria para que los usuarios se muevan a través de las páginas Flexpage de un curso. Los menús se pueden colocar como bloques en cualquiera de las regiones de una página Flexpage. Los menús pueden contener enlaces a páginas Flexpage dentro del curso, URL externas y enlaces a otros menús.</p>

<p>Uno de los menús de un curso también se puede marcar como con uso de "Pestañas". Este menú aparecerá como Pestañas principales en el curso. Si desea que cada una de las pestañas ofrezca múltiples opciones, cree un menú de Pestañas principales y un enlace a un menú Flexpage diferente para cada pestaña.</p>';
