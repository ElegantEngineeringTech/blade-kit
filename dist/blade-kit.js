import { defineComponent as u, computed as d, createElementBlock as c, openBlock as l, normalizeClass as h, toDisplayString as x, mergeProps as m, createBlock as r, renderSlot as n, createCommentVNode as b, useSlots as v, resolveDynamicComponent as C, withCtx as g, createElementVNode as p, ref as y, useTemplateRef as q, onMounted as w, toHandlers as S } from "vue";
const T = ["data-color"], R = /* @__PURE__ */ u({
  __name: "Badge",
  props: {
    count: { default: 0 },
    max: { default: 99 },
    color: { default: "rose" }
  },
  setup(e) {
    const t = e, a = d(() => t.count > 1 ? Math.min(t.count, t.max) : null);
    return (s, i) => (l(), c("span", {
      class: h({
        "el-badge el-text el-bg el-outline": !0,
        "size-5": e.count > 1,
        "size-3": e.count <= 1
      }),
      "data-color": e.color
    }, x(a.value), 11, T));
  }
}), A = ["type", "disabled", "checked", "required"], V = /* @__PURE__ */ u({
  inheritAttrs: !1,
  __name: "Checkbox",
  props: {
    disabled: { type: Boolean, default: !1 },
    checked: { type: Boolean, default: !1 },
    required: { type: Boolean, default: !1 },
    type: { default: "checkbox" }
  },
  setup(e) {
    return (t, a) => (l(), c("input", m(t.$attrs, {
      class: "el-checkbox",
      type: e.type,
      disabled: e.disabled,
      checked: e.checked,
      required: e.required
    }), null, 16, A));
  }
}), B = /* @__PURE__ */ u({
  __name: "ButtonBadge",
  props: {
    count: { default: 0 }
  },
  setup(e) {
    return (t, a) => (l(), r(R, {
      class: "absolute -right-1 -top-1",
      count: e.count
    }, null, 8, ["count"]));
  }
}), k = /* @__PURE__ */ u({
  __name: "ButtonIcon",
  props: {
    offset: { type: Boolean, default: !1 },
    badge: {}
  },
  setup(e) {
    return (t, a) => (l(), c("span", {
      class: h(["el-button-icon", { "-mx-1": e.offset }])
    }, [
      n(t.$slots, "default"),
      e.badge ? (l(), r(B, {
        key: 0,
        count: e.badge
      }, null, 8, ["count"])) : b("", !0)
    ], 2));
  }
}), H = { class: "el-loader" }, P = /* @__PURE__ */ u({
  __name: "Button",
  props: {
    tag: {},
    type: {},
    size: { default: "base" },
    color: {},
    colorChecked: {},
    disabled: { type: Boolean, default: !1 },
    loading: { type: Boolean, default: !1 },
    download: { type: [Boolean, String] },
    tooltip: {},
    offset: { type: Boolean, default: !0 },
    badge: {}
  },
  setup(e) {
    const t = e, a = v(), s = d(() => t.tag ? t.tag : a.input ? "label" : "button"), i = d(() => t.type ? t.type : t.tag === "button" ? "button" : null);
    return (o, f) => (l(), r(C(s.value), {
      class: "el-button el-spacing el-text el-bg el-ring el-outline el-border",
      "data-size": e.size,
      "data-color": e.color,
      "data-color-checked": e.colorChecked,
      disabled: e.disabled || null,
      type: i.value,
      download: e.download || null,
      "data-loading": e.loading || null
    }, {
      default: g(() => [
        n(o.$slots, "before"),
        n(o.$slots, "input"),
        a.icon ? (l(), r(k, {
          key: 0,
          offset: e.offset,
          badge: e.badge
        }, {
          default: g(() => [
            n(o.$slots, "icon")
          ]),
          _: 3
        }, 8, ["offset", "badge"])) : b("", !0),
        a.default ? (l(), c("span", {
          key: 1,
          class: h(["relative inline-flex min-w-0", {
            "ml-2": a.icon && e.offset,
            "mr-2": a["icon-right"] && e.offset
          }])
        }, [
          n(o.$slots, "default"),
          !a.icon && e.badge ? (l(), r(B, {
            key: 0,
            count: e.badge
          }, null, 8, ["count"])) : b("", !0)
        ], 2)) : b("", !0),
        a["icon-right"] ? (l(), r(k, {
          key: 2,
          offset: e.offset
        }, {
          default: g(() => [
            n(o.$slots, "icon-right")
          ]),
          _: 3
        }, 8, ["offset"])) : b("", !0),
        p("span", H, [
          f[0] || (f[0] = p("span", { class: "animate-spin-loader size-4 rounded-full border-2 border-current border-r-transparent border-t-transparent" }, null, -1)),
          n(o.$slots, "loader")
        ]),
        n(o.$slots, "after")
      ]),
      _: 3
    }, 8, ["data-size", "data-color", "data-color-checked", "disabled", "type", "download", "data-loading"]));
  }
}), N = ["type", "disabled", "checked", "required"], j = /* @__PURE__ */ u({
  inheritAttrs: !1,
  __name: "Radio",
  props: {
    disabled: { type: Boolean, default: !1 },
    checked: { type: Boolean, default: !1 },
    required: { type: Boolean, default: !1 },
    type: { default: "radio" }
  },
  setup(e) {
    return (t, a) => (l(), c("input", m(t.$attrs, {
      class: "el-radio",
      type: e.type,
      disabled: e.disabled,
      checked: e.checked,
      required: e.required
    }), null, 16, N));
  }
}), D = ["data-size", "data-color", "autosized", "spellcheck"], F = /* @__PURE__ */ u({
  __name: "Textarea",
  props: {
    rows: { default: 1 },
    size: { default: "base" },
    color: {},
    autocomplete: { default: "off" },
    spellcheck: { type: Boolean, default: !0 },
    autosized: { type: Boolean, default: !1 }
  },
  setup(e) {
    const t = e, a = d(() => t.autocomplete === "off" ? {
      autocomplete: "off",
      "data-1p-ignore": !0,
      "data-bwignore": !0,
      "data-lpignore": "true",
      "data-form-type": "other"
    } : {
      autocomplete: t.autocomplete
    }), s = y(!1), i = y(0), o = q("textarea");
    function f() {
      o.value && (o.value.style.height = `${i}px`, o.value.style.height = `${o.value.scrollHeight}px`);
    }
    const $ = d(() => a.value), z = d(() => t.autosized && !s.value ? { input: f } : {});
    return w(() => {
      s.value = CSS.supports("field-sizing: content"), t.autosized && !s.value && (i.value = o.value?.getBoundingClientRect().height ?? 0, f());
    }), (E, I) => (l(), c("textarea", m({
      ref_key: "textarea",
      ref: o,
      class: "el-textarea el-text el-spacing el-bg el-outline",
      "data-size": e.size,
      "data-color": e.color,
      autosized: e.autosized,
      spellcheck: e.spellcheck
    }, $.value, S(z.value, !0)), null, 16, D));
  }
});
export {
  R as Badge,
  P as Button,
  B as ButtonBadge,
  k as ButtonIcon,
  V as Checkbox,
  j as Radio,
  F as Textarea
};
