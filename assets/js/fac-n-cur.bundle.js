! function (t) {
    var n = {};

    function e(i) {
        if (n[i]) return n[i].exports;
        var a = n[i] = {
            i: i,
            l: !1,
            exports: {}
        };
        return t[i].call(a.exports, a, a.exports, e), a.l = !0, a.exports
    }
    e.m = t, e.c = n, e.d = function (t, n, i) {
        e.o(t, n) || Object.defineProperty(t, n, {
            enumerable: !0,
            get: i
        })
    }, e.r = function (t) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(t, "__esModule", {
            value: !0
        })
    }, e.t = function (t, n) {
        if (1 & n && (t = e(t)), 8 & n) return t;
        if (4 & n && "object" == typeof t && t && t.__esModule) return t;
        var i = Object.create(null);
        if (e.r(i), Object.defineProperty(i, "default", {
                enumerable: !0,
                value: t
            }), 2 & n && "string" != typeof t)
            for (var a in t) e.d(i, a, function (n) {
                return t[n]
            }.bind(null, a));
        return i
    }, e.n = function (t) {
        var n = t && t.__esModule ? function () {
            return t.default
        } : function () {
            return t
        };
        return e.d(n, "a", n), n
    }, e.o = function (t, n) {
        return Object.prototype.hasOwnProperty.call(t, n)
    }, e.p = "", e(e.s = 1)
}([function (t, n, e) {
    "use strict";
    e.r(n), e.d(n, "CountUp", (function () {
        return a
    }));
    var i = function () {
            return (i = Object.assign || function (t) {
                for (var n, e = 1, i = arguments.length; e < i; e++)
                    for (var a in n = arguments[e]) Object.prototype.hasOwnProperty.call(n, a) && (t[a] = n[a]);
                return t
            }).apply(this, arguments)
        },
        a = function () {
            function t(t, n, e) {
                var a = this;
                this.target = t, this.endVal = n, this.options = e, this.version = "2.0.4", this.defaults = {
                    startVal: 0,
                    decimalPlaces: 0,
                    duration: 2,
                    useEasing: !0,
                    useGrouping: !0,
                    smartEasingThreshold: 999,
                    smartEasingAmount: 333,
                    separator: ",",
                    decimal: ".",
                    prefix: "",
                    suffix: ""
                }, this.finalEndVal = null, this.useEasing = !0, this.countDown = !1, this.error = "", this.startVal = 0, this.paused = !0, this.count = function (t) {
                    a.startTime || (a.startTime = t);
                    var n = t - a.startTime;
                    a.remaining = a.duration - n, a.useEasing ? a.countDown ? a.frameVal = a.startVal - a.easingFn(n, 0, a.startVal - a.endVal, a.duration) : a.frameVal = a.easingFn(n, a.startVal, a.endVal - a.startVal, a.duration) : a.countDown ? a.frameVal = a.startVal - (a.startVal - a.endVal) * (n / a.duration) : a.frameVal = a.startVal + (a.endVal - a.startVal) * (n / a.duration), a.countDown ? a.frameVal = a.frameVal < a.endVal ? a.endVal : a.frameVal : a.frameVal = a.frameVal > a.endVal ? a.endVal : a.frameVal, a.frameVal = Math.round(a.frameVal * a.decimalMult) / a.decimalMult, a.printValue(a.frameVal), n < a.duration ? a.rAF = requestAnimationFrame(a.count) : null !== a.finalEndVal ? a.update(a.finalEndVal) : a.callback && a.callback()
                }, this.formatNumber = function (t) {
                    var n, e, i, r, s, o = t < 0 ? "-" : "";
                    if (n = Math.abs(t).toFixed(a.options.decimalPlaces), i = (e = (n += "").split("."))[0], r = e.length > 1 ? a.options.decimal + e[1] : "", a.options.useGrouping) {
                        s = "";
                        for (var u = 0, l = i.length; u < l; ++u) 0 !== u && u % 3 == 0 && (s = a.options.separator + s), s = i[l - u - 1] + s;
                        i = s
                    }
                    return a.options.numerals && a.options.numerals.length && (i = i.replace(/[0-9]/g, (function (t) {
                        return a.options.numerals[+t]
                    })), r = r.replace(/[0-9]/g, (function (t) {
                        return a.options.numerals[+t]
                    }))), o + a.options.prefix + i + r + a.options.suffix
                }, this.easeOutExpo = function (t, n, e, i) {
                    return e * (1 - Math.pow(2, -10 * t / i)) * 1024 / 1023 + n
                }, this.options = i({}, this.defaults, e), this.formattingFn = this.options.formattingFn ? this.options.formattingFn : this.formatNumber, this.easingFn = this.options.easingFn ? this.options.easingFn : this.easeOutExpo, this.startVal = this.validateValue(this.options.startVal), this.frameVal = this.startVal, this.endVal = this.validateValue(n), this.options.decimalPlaces = Math.max(this.options.decimalPlaces), this.decimalMult = Math.pow(10, this.options.decimalPlaces), this.resetDuration(), this.options.separator = String(this.options.separator), this.useEasing = this.options.useEasing, "" === this.options.separator && (this.options.useGrouping = !1), this.el = "string" == typeof t ? document.getElementById(t) : t, this.el ? this.printValue(this.startVal) : this.error = "[CountUp] target is null or undefined"
            }
            return t.prototype.determineDirectionAndSmartEasing = function () {
                var t = this.finalEndVal ? this.finalEndVal : this.endVal;
                this.countDown = this.startVal > t;
                var n = t - this.startVal;
                if (Math.abs(n) > this.options.smartEasingThreshold) {
                    this.finalEndVal = t;
                    var e = this.countDown ? 1 : -1;
                    this.endVal = t + e * this.options.smartEasingAmount, this.duration = this.duration / 2
                } else this.endVal = t, this.finalEndVal = null;
                this.finalEndVal ? this.useEasing = !1 : this.useEasing = this.options.useEasing
            }, t.prototype.start = function (t) {
                this.error || (this.callback = t, this.duration > 0 ? (this.determineDirectionAndSmartEasing(), this.paused = !1, this.rAF = requestAnimationFrame(this.count)) : this.printValue(this.endVal))
            }, t.prototype.pauseResume = function () {
                this.paused ? (this.startTime = null, this.duration = this.remaining, this.startVal = this.frameVal, this.determineDirectionAndSmartEasing(), this.rAF = requestAnimationFrame(this.count)) : cancelAnimationFrame(this.rAF), this.paused = !this.paused
            }, t.prototype.reset = function () {
                cancelAnimationFrame(this.rAF), this.paused = !0, this.resetDuration(), this.startVal = this.validateValue(this.options.startVal), this.frameVal = this.startVal, this.printValue(this.startVal)
            }, t.prototype.update = function (t) {
                cancelAnimationFrame(this.rAF), this.startTime = null, this.endVal = this.validateValue(t), this.endVal !== this.frameVal && (this.startVal = this.frameVal, this.finalEndVal || this.resetDuration(), this.determineDirectionAndSmartEasing(), this.rAF = requestAnimationFrame(this.count))
            }, t.prototype.printValue = function (t) {
                var n = this.formattingFn(t);
                "INPUT" === this.el.tagName ? this.el.value = n : "text" === this.el.tagName || "tspan" === this.el.tagName ? this.el.textContent = n : this.el.innerHTML = n
            }, t.prototype.ensureNumber = function (t) {
                return "number" == typeof t && !isNaN(t)
            }, t.prototype.validateValue = function (t) {
                var n = Number(t);
                return this.ensureNumber(n) ? n : (this.error = "[CountUp] invalid start or end value: " + t, null)
            }, t.prototype.resetDuration = function () {
                this.startTime = null, this.duration = 1e3 * Number(this.options.duration), this.remaining = this.duration
            }, t
        }()
}, function (t, n, e) {
    "use strict";
    Object.defineProperty(n, "__esModule", {
        value: !0
    });
    var i = e(0);
    ! function () {
        if (window.NodeList && !NodeList.prototype.forEach && (NodeList.prototype.forEach = Array.prototype.forEach), IntersectionObserver) {
            var t = document.getElementById("fac-n-cur-count-one"),
                n = t ? parseInt(t.innerText.replace(/[^0-9]/g, "")) : 0,
                e = document.getElementById("fac-n-cur-count-two"),
                a = t ? parseInt(e.innerText.replace(/[^0-9]/g, "")) : 0,
                r = document.getElementById("fac-n-cur-count-three"),
                s = t ? parseInt(r.innerText.replace(/[^0-9]/g, "")) : 0,
                four = document.getElementById("fac-n-cur-count-four"),
                fourInt = t ? parseInt(four.innerText.replace(/[^0-9]/g, "")) : 0,
                sc = document.getElementById("fac-n-cur-count-sc"),
                scInt = t ? parseInt(sc.innerText.replace(/[^0-9]/g, "")) : 0,
                cs = document.getElementById("fac-n-cur-count-cs"),
                csInt = t ? parseInt(cs.innerText.replace(/[^0-9]/g, "")) : 0,
                chinese = document.getElementById("fac-n-cur-count-chinese"),
                chineseInt = t ? parseInt(chinese.innerText.replace(/[^0-9]/g, "")) : 0,
                japan = document.getElementById("fac-n-cur-count-japan"),
                japanInt = t ? parseInt(japan.innerText.replace(/[^0-9]/g, "")) : 0,
                korea = document.getElementById("fac-n-cur-count-korea"),
                koreaInt = t ? parseInt(korea.innerText.replace(/[^0-9]/g, "")) : 0,
                vietnamese = document.getElementById("fac-n-cur-count-vietnamese"),
                vietnameseInt = t ? parseInt(vietnamese.innerText.replace(/[^0-9]/g, "")) : 0,
                thaiSocial = document.getElementById("fac-n-cur-count-thaiSocial"),
                thaiSocialInt = t ? parseInt(thaiSocial.innerText.replace(/[^0-9]/g, "")) : 0,
                o = [{
                    countUpObj: new i.CountUp(t, n),
                    isCount: !1
                }, {
                    countUpObj: new i.CountUp(e, a),
                    isCount: !1
                }, {
                    countUpObj: new i.CountUp(r, s),
                    isCount: !1
                }, {
                    countUpObj: new i.CountUp(four, fourInt),
                    isCount: !1
                }, {
                    countUpObj: new i.CountUp(sc, scInt),
                    isCount: !1
                }
                ,{
                    countUpObj: new i.CountUp(cs, csInt),
                    isCount: !1
                }
                ,{
                    countUpObj: new i.CountUp(chinese, chineseInt),
                    isCount: !1
                }, {
                    countUpObj: new i.CountUp(japan, japanInt),
                    isCount: !1
                }, 
                {
                    countUpObj: new i.CountUp(korea, koreaInt),
                    isCount: !1
                }, {
                    countUpObj: new i.CountUp(vietnamese, vietnameseInt),
                    isCount: !1
                }, {
                    countUpObj: new i.CountUp(thaiSocial, thaiSocialInt),
                    isCount: !1
                }

                ],
                u = document.querySelector(".fac-n-cur article");
            if (u) {
                new IntersectionObserver((function (t) {
                    t.forEach((function (t) {
                        t.isIntersecting && o.forEach((function (t) {
                            t.isCount || (t.countUpObj.error ? console.error(t.countUpObj.error) : (t.countUpObj.start(), t.isCount = !0))
                        }))
                    }))
                }), {
                    rootMargin: "-5% 10% -10% 0px",
                    threshold: .8
                }).observe(u)
            } else console.error("No containBox")
        }
    }()
}]);