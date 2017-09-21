<script>
            var $id = function(e) {
                return document.getElementById(e)
            },
            $addEvent = function() {
                return document.addEventListener ?
                function(e, t, n) {
                    if (e.length) for (var o = 0; o < e.length; o++) $addEvent(e[o], t, n);
                    else e.addEventListener(t, n, !1)
                }: function(e, t, n) {
                    if (e.length) for (var o = 0; o < e.length; o++) $addEvent(e[o], t, n);
                    else e.attachEvent("on" + t,
                    function() {
                        return n.call(e, window.event)
                    })
                }
            } (),
            meizuFooter = {
                init: function() {
                    if (document.getElementById("meizu-footer")) {
                        var e = document.getElementById("ii-wxa"),
                        t = document.getElementById("ii-wxa-img");
                        e.onmouseover = function() {
                            t.style.display = "block"
                        },
                        e.onmouseout = function() {
                            t.style.display = "none"
                        }
                    }
                }
            };
            meizuFooter.init();
            var lang_choose = function() {
                var e, t, n, o, i, a, l = function() {
                    t.onclick = function() {
                        var t = Math.max(document.body.scrollTop, document.documentElement.scrollTop);
                        if (e.style.display = "block", window.navigator.userAgent.indexOf("MSIE 7.0") < 0 ? document.body.style.overflow = "hidden": i.style.overflow = "hidden", e.style.top = t + "px", e.parentNode.attributes[0].nodeValue.indexOf("swiper-slide") > -1) {
                            var n = $(".swiper-slide").height();
                            e.children[0].style.top = 9 * n + "px"
                        }
                    },
                    n.onclick = function() {
                        e.style.display = "none",
                        window.navigator.userAgent.indexOf("MSIE 7.0") < 0 ? document.body.style.overflow = "visible": i.style.overflow = "auto"
                    },
                    $addEvent(o, "click",
                    function(e) {
                        var t, n, o = e.target || e.srcElement,
                        i = o.nodeName.toLowerCase();
                        if ("span" == i || "i" == i) t = o.parentNode;
                        else {
                            if ("a" != i) return ! 1;
                            t = o
                        }
                        n = t.getAttribute("data-countryhref").replace(/\s+/g, "");
                        var a = n.split("/"),
                        l = "/" + a[a.length - 2];
                        window.Cookie && window.Cookie.set("urlprefix", l, 720),
                        setTimeout(function() {
                            window.location.href = n.replace("index.html/", "index.html")
                        },
                        50)
                    })
                };
                return {
                    init: function(r) {
                        a = r,
                        e = $id(a.layerContainer),
                        t = $id(a.langContainer),
                        n = $id(a.langClose),
                        o = $id(a.langModal),
                        i = document.getElementsByTagName(a.oHtml)[0],
                        l()
                    }
                }
            } ();
            lang_choose.init({
                layerContainer: "widget-lang-choose",
                langContainer: "meizu-footer-language",
                langClose: "modal-lang-close",
                langModal: "modal-lang-body",
                oHtml: "html"
            }),
            function() {
                var e = !0;
                if (!e) {
                    var t, n = window.location.host,
                    o = document.getElementById("meizu-header-container"),
                    i = document.getElementById("meizu-footer");
                    n.indexOf("www.meizu.com") > -1 ? t = document.getElementsByTagName("a") : (t = [], o && (t = t.concat([].slice.call(o.getElementsByTagName("a")))), i && (t = t.concat([].slice.call(i.getElementsByTagName("a")))));
                    for (var a, l, r = t.length - 1; r >= 0; r--) l = t[r],
                    a = l.getAttribute("href"),
                    a && a.indexOf("www.meizu.com") > -1 && l.setAttribute("href", a.replace("https", "http")),
                    a = l.getAttribute("data-countryhref"),
                    a && a.indexOf("www.meizu.com") > -1 && l.setAttribute("data-countryhref", a.replace("https", "http"))
                }
            } ();
        </script>