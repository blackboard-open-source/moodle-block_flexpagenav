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

    var panel = M.format_flexpage.init_default_panel(Y, "managemenuspanel");

    // When the user finally hides the panel, we reload the page
    panel.hideEvent.subscribe(function(e) {
        if (M.format_flexpage.panel_stack.length == 0) {
            window.location.reload();
        }
    });

    M.format_flexpage.populate_panel(Y, panel, url, function(args) {
        M.format_flexpage.constrain_panel_to_viewport(Y, panel);

        var addButton = new YAHOO.widget.Button('addmenu');
        addButton.on("click", function (e) {
            var editMenuPanel = M.format_flexpage.init_editmenu(Y, args.addurl);
            M.format_flexpage.connect_dialogs(Y, panel, editMenuPanel, function() {
                return M.format_flexpage.init_managemenus(Y, url);
            });
        });

        Y.all('select.block_flexpagenav_actions_select').each(function(node) {
            M.format_flexpage.init_action_menu(Y, node, panel, function() {
                return M.format_flexpage.init_managemenus(Y, url);
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
    M.format_flexpage.populate_panel(Y, dialog, url);

    return dialog;
};

/**
 * Init delete menu modal
 *
 * @param Y
 * @param url
 */
M.format_flexpage.init_deletemenu = function(Y, url) {
    var dialog = M.format_flexpage.init_default_dialog(Y, "deletemenupanel");

    // Customize buttons
    dialog.cfg.queueProperty("buttons", [
        { text: M.str.moodle.cancel, handler: dialog.cancel },
        { text: M.str.block_flexpagenav.deletemenu, handler: dialog.submit, isDefault: true }
    ]);

    M.format_flexpage.populate_panel(Y, dialog, url);

    return dialog;
};

/**
 * Init manage links modal (this opens other modals)
 *
 * @param Y
 * @param url
 */
M.format_flexpage.init_managelinks = function(Y, url) {

    var panel = M.format_flexpage.init_default_dialog(Y, "managelinkspanel");

    // Customize buttons
    panel.cfg.queueProperty("buttons", []);

    M.format_flexpage.populate_panel(Y, panel, url, function() {
        M.format_flexpage.constrain_panel_to_viewport(Y, panel);

        var button = M.format_flexpage.init_action_menu(Y, Y.one('select.block_flexpagenav_addlink_select'), panel, function() {
            return M.format_flexpage.init_managelinks(Y, url);
        });
        button.set('label', M.str.block_flexpagenav.addlinkdotdotdot);

        Y.all('select.block_flexpagenav_actions_select').each(function(node) {
            M.format_flexpage.init_action_menu(Y, node, panel, function() {
                return M.format_flexpage.init_managelinks(Y, url);
            });
        });
    });

    return panel;
};

/**
 * Init edit link modal
 *
 * @param Y
 * @param url
 */
M.format_flexpage.init_editlink = function(Y, url) {
    var dialog = M.format_flexpage.init_default_dialog(Y, "editlinkpanel");

    M.format_flexpage.populate_panel(Y, dialog, url, function(type) {
        switch (type) {
            case 'url':
                // Have required fields
                dialog.validate = function() {
                    var data   = this.getData();
                    var failed = false;
                    if (data.label == "" || data.label == undefined) {
                        Y.one('.format_flexpage_form input[name="label"]').addClass('format_flexpage_error_bg');
                        failed = true;
                    }
                    if (data.url == "" || data.url == undefined) {
                        Y.one('.format_flexpage_form input[name="url"]').addClass('format_flexpage_error_bg');
                        failed = true;
                    }
                    if (failed) {
                        M.format_flexpage.init_error_dialog(Y, M.str.block_flexpagenav.labelurlrequired);
                        return false;
                    }
                    return true;
                };

                // Clears any validation error coloring
                Y.all('.format_flexpage_form input[type="text"]').on('focus', function(e) {
                    e.target.removeClass('format_flexpage_error_bg');
                });
                break;
        }
    });

    return dialog;
};

/**
 * Init move link modal
 *
 * @param Y
 * @param url
 */
M.format_flexpage.init_movelink = function(Y, url) {
    var dialog = M.format_flexpage.init_default_dialog(Y, "movelinkpanel");

    // Customize buttons
    dialog.cfg.queueProperty("buttons", [
        { text: M.str.block_flexpagenav.movelink, handler: dialog.submit, isDefault: true }
    ]);

    M.format_flexpage.populate_panel(Y, dialog, url);

    return dialog;
};

/**
 * Init delete link modal
 *
 * @param Y
 * @param url
 */
M.format_flexpage.init_deletelink = function(Y, url) {
    var dialog = M.format_flexpage.init_default_dialog(Y, "deletelinkpanel");

    // Customize buttons
    dialog.cfg.queueProperty("buttons", [
        { text: M.str.moodle.cancel, handler: dialog.cancel },
        { text: M.str.block_flexpagenav.deletelink, handler: dialog.submit, isDefault: true }
    ]);

    M.format_flexpage.populate_panel(Y, dialog, url);

    return dialog;
};