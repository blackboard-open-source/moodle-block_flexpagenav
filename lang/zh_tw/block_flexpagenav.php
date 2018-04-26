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

$string['pluginname'] = 'Flexpage 功能表';
$string['flexpagenav:view'] = '檢視 Flexpage 功能表';
$string['flexpagenav:manage'] = '管理 Flexpage 功能表';
$string['flexpagenav:addinstance'] = '新增 Flexpage 功能表區塊';
$string['addexistingmenuaction'] = '新增現有功能表';
$string['managemenusaction'] = '管理所有功能表';
$string['managemenus'] = '管理功能表';
$string['name'] = '名稱';
$string['manage'] = '管理';
$string['usedastabs'] = '用為頁籤';
$string['addmenudotdotdot'] = '新增功能表...';
$string['editmenu'] = '編輯功能表';
$string['useastab'] = '用為頁籤';
$string['displayname'] = '顯示名稱';
$string['render'] = '將功能表顯示為';
$string['tree'] = '樹狀';
$string['dropdown'] = '下拉式清單';
$string['navhorizontal'] = '水平瀏覽';
$string['navvertical'] = '垂直瀏覽';
$string['ajaxexception'] = '應用程式錯誤：{$a}';
$string['editmenuaction'] = '編輯功能表';
$string['deletemenuaction'] = '刪除';
$string['managelinksaction'] = '管理連結';
$string['managelinks'] = '管理連結';
$string['editlink'] = '編輯';
$string['movelink'] = '移動連結';
$string['deletelink'] = '刪除';
$string['type'] = '類型';
$string['preview'] = '預覽/資訊';
$string['urllink'] = 'URL';
$string['addlinkdotdotdot'] = '新增連結...';
$string['editingx'] = '正在編輯 {$a}';
$string['label'] = '標籤';
$string['url'] = 'URL';
$string['labelurlrequired'] = '標籤和 URL 欄位為必填。';
$string['editlinkaction'] = '編輯';
$string['movelinkaction'] = '移動';
$string['deletelinkaction'] = '刪除';
$string['movelinkx'] = '移動連結 {$a}';
$string['movebefore'] = '之前';
$string['moveafter'] = '之後';
$string['areyousuredeletelink'] = '<p>您確定要刪除此連結？</p><p>{$a}</p>';
$string['areyousuredeletemenu'] = '您確定要刪除 <strong>{$a}</strong> 功能表？';
$string['deletemenu'] = '刪除功能表';
$string['displaymenu'] = '顯示功能表';
$string['flexpage'] = 'Flexpage';
$string['flexpagelink'] = 'Flexpage';
$string['includechildren'] = '加入下層';
$string['excludechildren'] = '要加入的下層';
$string['nochildpages'] = '沒有下層 Flexpage';
$string['flexpagewithchildren'] = '含下層的 {$a}';
$string['flexpagewithoutchildren'] = '不含下層的 {$a}';
$string['flexpageerror'] = '錯誤：Flexpage 可能已經不存在';
$string['flexpagenav'] = 'Flexpage 功能表';
$string['flexpagenavlink'] = 'Flexpage 功能表';
$string['flexpagenavx'] = '{$a} 功能表';
$string['flexpagenaverror'] = '錯誤：Flexpage 功能表可能已經不存在';
$string['nomenustoadd'] = '沒有您可新增至此功能表的其他 Flexpage 功能表。';
$string['coursemodule'] = '課程活動';
$string['modlink'] = '活動';
$string['ticketlink'] = '問題回報';
$string['subject'] = '主旨';
$string['labelrequired'] = '標籤欄位為必填。';
$string['menus'] = '功能表';
$string['addexistingmenu'] = '新增現有功能表';
$string['addexistingmenu_help'] = '請選取「<strong>新增現有功能表</strong>」視窗最上方的任一按鈕，選擇您想在 Flexpage 中放置區塊的位置。接著按一下您想新增至課程的功能表名稱。';
$string['migrationtoptabs'] = '課程頂端頁籤';
$string['moderror'] = '錯誤：活動可能已經不存在';
$string['noexistingmenustoadd'] = '此課程尚未建立任何功能表。請使用<strong>「管理」>「管理所有功能表」</strong>來建立新功能表。';
$string['urlfailedcleaning'] = '輸入的 URL 驗證和清理流程失敗。請確認輸入的 URL 有效。';
$string['urlmuststartwith'] = '輸入的 URL 必須以 http:// 或 https:// 開頭';
$string['managinglinksforx'] = '管理功能表 <em>{$a}</em> 的連結';
$string['formnamerequired'] = '功能表名稱為必填。';
$string['invalidurl'] = '輸入的 URL 無效而無法使用，請驗證輸入的 URL。';
$string['menudisplayerror'] = '無法顯示關聯的 Flexpage 功能表。Flexpage 功能表已毀損或不存在。請刪除此區塊或加以編輯，以顯示不同的 Flexpage 功能表。';
$string['dockable'] = '允許固定此區塊';
$string['dockable_help'] = '決定使用者是否可以固定此區塊。請注意：在以下例外中可以停用固定：
<ul>
    <li>主題設定可禁止區塊固定。</li>
    <li>只有顯示為「樹狀」的 Flexpage 功能表可以固定。</li>
    <li>沒有標題的區塊不能固定。</li>
</ul>';
$string['managemenus_help'] = '<p>功能表可提供使用者所需的瀏覽，以便在課程的 Flexpage 之間移動。功能表可以區塊形式放在任何的 Flexpage 區域。功能表可內含課程內的 Flexpage、外部 URL 和其他功能表的連結。</p>

<p>課程的其中一個功能表還可標記為使用「頁籤」。該功能表會在課程中顯示為「頂端頁籤」。如果您想讓每個標籤提供多種選項，請為每個標籤建立「頂端頁籤」功能表和其他 Flexpage 功能表的連結。</p>';
