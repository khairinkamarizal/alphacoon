! function(p) {
    "use strict";
    window.app = {
        name: "pulse",
        setting: {
            folded: !1,
            container: !1,
            color: "primary",
            bg: "black"
        }
    };
    var t, s = "jqStorage-" + app.name + "-Setting",
        n = p.localStorage;
    n.isEmpty(s) ? n.set(s, app.setting) : app.setting = n.get(s);
    for (var e = window.location.search.substring(1).split("&"), a = 0; a < e.length; a++) {
        var i = e[a].split("=");
        app.setting[i[0]] = "true" == i[1] || "false" == i[1] ? "true" == i[1] : i[1], n.set(s, app.setting)
    }

    function r() {
        p("body").removeClass(p("body").attr("data-ui-class")).addClass(app.setting.bg).attr("data-ui-class", app.setting.bg), app.setting.folded ? p("#aside").addClass("folded") : p("#aside").removeClass("folded"), 0 == p("#aside").length && (app.setting.container ? p(".app-header .navbar, .app-content").addClass("container") : p(".app-header .navbar, .app-content").removeClass("container")), p('.switcher input[value="' + app.setting.color + '"]').prop("checked", !0), p('.switcher input[value="' + app.setting.bg + '"]').prop("checked", !0), p('[data-target="folded"] input').prop("checked", app.setting.folded), p('[data-target="container"] input').prop("checked", app.setting.container), t != app.setting.color && (uiLoad.remove("css/theme/" + t + ".css"), uiLoad.load("css/theme/" + app.setting.color + ".css"), t = app.setting.color)
    }
    r(), p(document).on("click.setting", ".switcher input", function(t) {
        var e = p(this),
            a = (e.parent().attr("data-target") ? e : e.parent()).parent().attr("data-target");
        app.setting[a] = e.is(":checkbox") ? e.prop("checked") : p(this).val(), n.set(s, app.setting), r(app.setting)
    })
}(jQuery);
$.extend($.scrollTo.defaults, {
    axis: 'y',
    duration: 800
});