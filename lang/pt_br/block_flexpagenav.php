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
$string['flexpagenav:view'] = 'Visualizar menus de Flexpage';
$string['flexpagenav:manage'] = 'Gerenciar Menus de Flexpage';
$string['flexpagenav:addinstance'] = 'Adicionar um novo bloco de Menu de flexpage';
$string['addexistingmenuaction'] = 'Adicionar menu existente';
$string['managemenusaction'] = 'Gerenciar todos os menus';
$string['managemenus'] = 'Gerenciar menus';
$string['name'] = 'Nome';
$string['manage'] = 'Gerenciar';
$string['usedastabs'] = 'Usado como guias';
$string['addmenudotdotdot'] = 'Adicionar novo menu...';
$string['editmenu'] = 'Editar menu';
$string['useastab'] = 'Usar como guias';
$string['displayname'] = 'Exibir nome';
$string['render'] = 'Exibir menu como';
$string['tree'] = 'Árvore';
$string['dropdown'] = 'Suspenso';
$string['navhorizontal'] = 'Navegação horizontal';
$string['navvertical'] = 'Navegação vertical';
$string['ajaxexception'] = 'Erro no aplicativo: {$a}';
$string['editmenuaction'] = 'Editar menu';
$string['deletemenuaction'] = 'Excluir';
$string['managelinksaction'] = 'Gerenciar links';
$string['managelinks'] = 'Gerenciar links';
$string['editlink'] = 'Editar';
$string['movelink'] = 'Mover link';
$string['deletelink'] = 'Excluir';
$string['type'] = 'Tipo';
$string['preview'] = 'Pré-visualizar/Informações';
$string['urllink'] = 'URL';
$string['addlinkdotdotdot'] = 'Adicionar novo link...';
$string['editingx'] = 'Editando {$a}';
$string['label'] = 'Rótulo';
$string['url'] = 'URL';
$string['labelurlrequired'] = 'Os campos de rótulo e URL são obrigatórios.';
$string['editlinkaction'] = 'Editar';
$string['movelinkaction'] = 'Mover';
$string['deletelinkaction'] = 'Excluir';
$string['movelinkx'] = 'Mover link {$a}';
$string['movebefore'] = 'antes';
$string['moveafter'] = 'após';
$string['areyousuredeletelink'] = '<p>Tem certeza que deseja excluir este link?</p><p>{$a}</p>';
$string['areyousuredeletemenu'] = 'Tem certeza que deseja excluir o menu <strong>{$a}</strong>?';
$string['deletemenu'] = 'Excluir menu';
$string['displaymenu'] = 'Exibir menu';
$string['flexpage'] = 'Flexpage';
$string['flexpagelink'] = 'Flexpage';
$string['includechildren'] = 'Incluir filhos';
$string['excludechildren'] = 'Filhos a incluir';
$string['nochildpages'] = 'Nenhuma flexpage filha';
$string['flexpagewithchildren'] = '{$a} com filhos';
$string['flexpagewithoutchildren'] = '{$a} sem filhos';
$string['flexpageerror'] = 'Erro: flexpage não existe mais';
$string['flexpagenav'] = 'Menu de flexpage';
$string['flexpagenavlink'] = 'Menu de flexpage';
$string['flexpagenavx'] = 'Menu {$a}';
$string['flexpagenaverror'] = 'Erro: menu de flexpage não existe mais';
$string['nomenustoadd'] = 'Não existem outros Menus de flexpage para adicionar a este menu.';
$string['coursemodule'] = 'Atividade do curso';
$string['modlink'] = 'Atividade';
$string['ticketlink'] = 'Tíquete de ocorrência';
$string['subject'] = 'Assunto';
$string['labelrequired'] = 'O campo de rótulo é obrigatório.';
$string['menus'] = 'Menus';
$string['addexistingmenu'] = 'Adicionar menu existente';
$string['addexistingmenu_help'] = 'Escolha onde deseja colocar o bloco na flexpage selecionando um dos botões no topo da janela <strong>Adicionar menu existente</strong>. Em seguida, clique no nome do menu que deseja adicionar ao curso.';
$string['migrationtoptabs'] = 'Guias superiores do curso';
$string['moderror'] = 'Erro: atividade não existe mais';
$string['noexistingmenustoadd'] = 'Não foram criados menus para este curso. Use <strong>Gerenciar > Gerenciar todos os menus</strong> para criar novos menus.';
$string['urlfailedcleaning'] = 'Ocorreu uma falha na validação e processo de limpeza do URL inserido. Certifique-se de que o URL inserido é válido.';
$string['urlmuststartwith'] = 'O URL inserido deve começar com http:// ou https://';
$string['managinglinksforx'] = 'Gerenciamento de links para o menu <em>{$a}</em>';
$string['formnamerequired'] = 'O nome do menu é obrigatório.';
$string['invalidurl'] = 'O URL inserido é inválido e não pode ser usado. Verifique o URL inserido.';
$string['menudisplayerror'] = 'Não foi possível exibir o Menu associado da Flexpage. O Menu está corrompido ou não existe mais. Exclua este bloco ou edite-o para mostrar um Menu de Flexpage diferente.';
$string['dockable'] = 'Permitir que este bloco seja ancorado';
$string['dockable_help'] = 'Determine se este bloco pode ser ou não ancorado pelo usuário.  Porém, observe que a ancoragem pode ser desabilitada pelas seguintes exceções:
<ul>
    <li>A configuração do tema pode evitar a ancoragem dos blocos.</li>
    <li>Somente os Menus de Flexpage exibidos como Árvores podem ser ancorados.</li>
    <li>Os blocos sem títulos não podem ser ancorados.</li>
</ul>';
$string['managemenus_help'] = '<p>Os menus oferecem a navegação necessária para que usuários se movimentem entre as flexpages de um curso. Eles podem ser colocados em qualquer uma das regiões das flexpages como blocos. Os menus podem conter links para flexpages dento do curso, de URLs externas e de links para outros menus</p>

<p>Um dos menus em um curso também pode ser marcado com o uso de "Guias". Esse menu aparecerá como a Guia superior no curso. Se você quiser que cada uma das guias ofereçam múltiplas opções, crie um menu de Guia superior e vincule a um menu diferente de Flexpage para cada guia.</p>';
