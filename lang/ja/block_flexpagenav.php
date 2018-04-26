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

$string['pluginname'] = 'Flexpageメニュー';
$string['flexpagenav:view'] = 'Flexpageメニューを表示する';
$string['flexpagenav:manage'] = 'Flexpageメニューを管理する';
$string['flexpagenav:addinstance'] = '新しいFlexpageメニューブロックを追加する';
$string['addexistingmenuaction'] = '既存メニューを追加する';
$string['managemenusaction'] = 'すべてのメニューを管理する';
$string['managemenus'] = 'メニューを管理する';
$string['name'] = '名称';
$string['manage'] = '管理';
$string['usedastabs'] = 'タブとして使用済み';
$string['addmenudotdotdot'] = '新しいメニューを追加する...';
$string['editmenu'] = 'メニューを編集する';
$string['useastab'] = 'タブとして使用する';
$string['displayname'] = '名称を表示する';
$string['render'] = 'メニューを次で表示 :';
$string['tree'] = 'ツリー';
$string['dropdown'] = 'ドロップダウン';
$string['navhorizontal'] = '水平ナビゲーション';
$string['navvertical'] = '垂直ナビゲーション';
$string['ajaxexception'] = 'アプリケーションエラー : {$a}';
$string['editmenuaction'] = 'メニューを編集する';
$string['deletemenuaction'] = '削除';
$string['managelinksaction'] = 'リンクを管理する';
$string['managelinks'] = 'リンクを管理する';
$string['editlink'] = '編集';
$string['movelink'] = 'リンクを移動する';
$string['deletelink'] = '削除';
$string['type'] = 'タイプ';
$string['preview'] = 'プレビュー/情報';
$string['urllink'] = 'URL';
$string['addlinkdotdotdot'] = '新しいリンクを追加する...';
$string['editingx'] = '{$a} の編集';
$string['label'] = 'ラベル';
$string['url'] = 'URL';
$string['labelurlrequired'] = 'ラベルおよびURLのフィールドは必須フィールドです。';
$string['editlinkaction'] = '編集';
$string['movelinkaction'] = '移動';
$string['deletelinkaction'] = '削除';
$string['movelinkx'] = 'リンク {$a} を移動する';
$string['movebefore'] = '移動元';
$string['moveafter'] = '移動先';
$string['areyousuredeletelink'] = '<p>このリンクを削除しますか？</p><p>{$a}</p>';
$string['areyousuredeletemenu'] = '<strong>{$a}</strong> のメニューを削除しますか？';
$string['deletemenu'] = 'メニューを削除する';
$string['displaymenu'] = 'メニューを表示する';
$string['flexpage'] = 'Flexpage';
$string['flexpagelink'] = 'Flexpage';
$string['includechildren'] = '子を含める';
$string['excludechildren'] = '含める子';
$string['nochildpages'] = '子のFlexpageがありません';
$string['flexpagewithchildren'] = '{$a} (子を含める)';
$string['flexpagewithoutchildren'] = '{$a} (子を含めない)';
$string['flexpageerror'] = 'エラー : Flexpageが存在しない可能性があります';
$string['flexpagenav'] = 'Flexpageメニュー';
$string['flexpagenavlink'] = 'Flexpageメニュー';
$string['flexpagenavx'] = '{$a} メニュー';
$string['flexpagenaverror'] = 'エラー : Flexpageのメニューが存在しない可能性があります';
$string['nomenustoadd'] = 'このメニューに追加できるその他のFlexpageメニューはありません。';
$string['coursemodule'] = 'コース活動';
$string['modlink'] = '活動';
$string['ticketlink'] = 'トラブルチケット';
$string['subject'] = '件名';
$string['labelrequired'] = 'ラベルフィールドは必須フィールドです。';
$string['menus'] = 'メニュー';
$string['addexistingmenu'] = '既存メニューを追加する';
$string['addexistingmenu_help'] = '[<strong>既存メニューを追加する</strong>]ウィンドウの上部にあるいずれかのボタンを選択して、Flexpageにブロックを配置する位置を選択します。次に、コースに追加するメニューの名前をクリックします。';
$string['migrationtoptabs'] = 'コーストップタブ';
$string['moderror'] = 'エラー : 活動が存在しない可能性があります';
$string['noexistingmenustoadd'] = 'このコースにはメニューが作成されていません。<strong>[管理] &gt; [すべてのメニューを管理する]</strong>を使用して、新しいメニューを作成してください。';
$string['urlfailedcleaning'] = '入力したURLの妥当性確認および削除処理に失敗しました。有効なURLが入力されているか確認してください。';
$string['urlmuststartwith'] = 'URLの入力は、http://またはhttps://で開始する必要があります';
$string['managinglinksforx'] = 'メニュー <em>{$a}</em> のリンクの管理';
$string['formnamerequired'] = 'メニュー名は必須指定項目です。';
$string['invalidurl'] = '入力したURLは、無効であるため使用できません。入力したURLを確認してください。';
$string['menudisplayerror'] = '関連付けられたFlexpageメニューを表示できません。Flexpageメニューが、壊れているか、存在しません。このブロックを削除するか、別のFlexpageメニューが表示されるように編集してください。';
$string['dockable'] = 'このブロックのドッキングを許可する';
$string['dockable_help'] = 'ユーザによるこのブロックのドッキングを許可するかどうかを指定します。以下の例外に該当する場合、ドッキングが無効になることがある点に注意してください。
<ul>
    <li>テーマ設定により、ブロックをドッキングできない場合があります。</li>
    <li>ツリー表示のFlexpageメニューのみドッキングできます</li>
    <li>タイトルのないブロックはドッキングできません。</li>
</ul>';
$string['managemenus_help'] = '<p>メニューには、ユーザがコースのFlexpageを移動するのに必要なナビゲーション機能があります。メニューは、ブロックとしてFlexpage領域の任意の位置に配置できます。メニューには、コース内のFlexpageへのリンク、外部URL、その他のメニューへのリンクを含めることができます。</p>

<p>コース内のメニューは、"タブ"を使用してマークすることもできます。このメニューには、コースのトップタブが表示されます。各タブに複数のオプションを設定する場合は、トップタブメニューを作成して、各タブに他のFlexpageメニューへのリンクを設定してください。</p>';
