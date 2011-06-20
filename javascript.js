/**
 * @namespace M.format_flexpage
 */
M.format_flexpage = M.format_flexpage || {};

/**
 * Called when flexpage actionbar has been rendered to the user
 *
 * @param Y
 */
M.format_flexpage.init_flexpagenav_actionbar = function(Y) {};

/**
 * Init manage menus modal (this opens other modals)
 *
 * @param Y
 * @param url
 */
M.format_flexpage.init_managemenus = function(Y, url) {
    // Ensure our flag starts with true
    M.format_flexpage.require_page_reload = true;

    var panel = M.format_flexpage.init_default_panel(Y, "managemenuspanel");

    // When the user finally hides the panel, we reload the page
    panel.hideEvent.subscribe(function(e) {
        if (M.format_flexpage.require_page_reload) {
            window.location.reload();
        }
    });

    M.format_flexpage.populate_panel(Y, panel, url, function(args) {
        // View port height minus overlay's view port padding minus fudge factor
        var height = YAHOO.util.Dom.getViewportHeight() - (YAHOO.widget.Overlay.VIEWPORT_OFFSET * 2) - 60;

        Y.one('#managemenuspanel .bd').setStyle('maxHeight', height + 'px')
                                      .setStyle('overflow', 'auto');

        var addButton = new YAHOO.widget.Button('addmenu');
        addButton.on("click", function (e) {
            var editMenuPanel = M.format_flexpage.init_editmenu(Y, args.addurl);
            M.format_flexpage.connect_dialogs(Y, panel, editMenuPanel, function() {
                M.format_flexpage.init_managemenus(Y, url);
            });
        });

        Y.all('select.block_flexpagenav_actions_select').each(function(node) {
            M.format_flexpage.init_action_menu(Y, node, panel, function() {
                M.format_flexpage.init_managemenus(Y, url);
            });
        });
    });

    return panel;
};

/**
 * Init edit menu modal
 *
 * @param Y
 * @param url
 */
M.format_flexpage.init_editmenu = function(Y, url) {
    var dialog = M.format_flexpage.init_default_dialog(Y, "editmenupanel");

    // Customize buttons
    dialog.cfg.queueProperty("buttons", [
        { text: M.str.moodle.savechanges, handler: dialog.submit, isDefault: true }
    ]);

    M.format_flexpage.populate_panel(Y, dialog, url);

    return dialog;
};