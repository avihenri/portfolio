(function () {
    "use strict";
    var atag = document.getElementsByClassName("gh-contributions");
    atag[0].style.display = "none";
    var username = atag[0].dataset.ghUsername;
    var iframe = document.createElement("iframe");
    iframe.scrolling = "no";
    iframe.frameBorder = 0;
    iframe.marginWidth = 0;
    iframe.marginHeight = 0;
    iframe.width = "100%";
    iframe.height = "200px";
    iframe.id = "gh-contributions-widget";
    atag[0].parentNode.insertBefore(iframe, atag[0]);
    var widget = '<div class="cbox">';
    widget += '<div class="ctitle">';
    widget += '<a href="https://github.com/' + username + '" target="_blank"><img src="https://avatars.githubusercontent.com/' + username + '?s=40"/></a>' + username + "'s Contributions";
    widget += "</div>";
    widget += '<div class="cbody">';
    widget += '<img src="https://ghchart.rshah.org/' + username + '" alt="' + username + "'s Github chart\" />";
    widget += '<span class="powered-by">Powered by <a href="https://ikuwow.github.io/yourcontributions/" target="_blank">Yourcontributions</a></span>';
    widget += '<a href="https://github.com/' + username + '" target="_blank" class="see-on-github">See on GitHub</a>';
    widget += "</div>";
    widget += "</div>";
    widget += (function () {
        /* <style> * { font: 13px / 1.4 Helvetica, arial, nimbussansl, liberationsans, freesans, clean, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"; } .cbox { max-width: 728px; border: 1px solid #d8d8d8; border-radius: 3px; background: #fff; overflow: hidden; } .ctitle { background-color: #f5f5f5; border-bottom: 1px solid #d8d8d8; padding: 6px 10px 8px; font-size: 14px; line-height: 17px; font-weight: bold; } .ctitle img { height: 20px; width: 20px; margin-top 2px; margin-right: 4px; } .cbody { padding: 4px; overflow: hidden; } .cbody img { float: right; margin-right: 4px; } .see-on-github { color: #4078c0; text-decoration: none; font-size: 11px; float: right; padding: 4px 10px 4px; } .powered-by { padding: 4px 10px 4px; font-size: 11px; text-decoration: none; float: left; } .powered-by a{ color: #4078c0; font-size: 11px; text-decoration: none; } </style> */ }).toString().replace(/(\n)/g, '').split('/*')[1].split('*/')[0];
    var doc = iframe.contentWindow.document;
    doc.open();
    doc.write(widget);
    doc.close()
})();
