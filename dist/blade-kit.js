import { defineComponent as d, computed as c, createElementBlock as i, openBlock as a, normalizeClass as f, toDisplayString as p, createBlock as u, renderSlot as n, createCommentVNode as s, useSlots as k, resolveDynamicComponent as $, withCtx as r, createElementVNode as y } from "vue";
const z = ["data-color"], C = /* @__PURE__ */ d({
  __name: "Badge",
  props: {
    count: { default: 0 },
    max: { default: 99 },
    color: { default: "rose" }
  },
  setup(e) {
    const t = e, o = c(() => t.count > 1 ? Math.min(t.count, t.max) : null);
    return (g, b) => (a(), i("span", {
      class: f({
        "el-badge el-text el-bg el-outline": !0,
        "size-5": e.count > 1,
        "size-3": e.count <= 1
      }),
      "data-color": e.color
    }, p(o.value), 11, z));
  }
}), h = /* @__PURE__ */ d({
  __name: "ButtonBadge",
  props: {
    count: { default: 0 }
  },
  setup(e) {
    return (t, o) => (a(), u(C, {
      class: "absolute -right-1 -top-1",
      count: e.count
    }, null, 8, ["count"]));
  }
}), B = /* @__PURE__ */ d({
  __name: "ButtonIcon",
  props: {
    offset: { type: Boolean, default: !1 },
    badge: {}
  },
  setup(e) {
    return (t, o) => (a(), i("span", {
      class: f(["el-button-icon", { "-mx-1": e.offset }])
    }, [
      n(t.$slots, "default"),
      e.badge ? (a(), u(h, {
        key: 0,
        count: e.badge
      }, null, 8, ["count"])) : s("", !0)
    ], 2));
  }
}), w = { class: "el-loader" }, x = /* @__PURE__ */ d({
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
    const t = e, o = k(), g = c(() => t.tag ? t.tag : o.input ? "label" : "button"), b = c(() => t.type ? t.type : t.tag === "button" ? "button" : null);
    return (l, m) => (a(), u($(g.value), {
      class: "el-button el-spacing el-text el-bg el-ring el-outline el-border",
      "data-size": e.size,
      "data-color": e.color,
      "data-color-checked": e.colorChecked,
      disabled: e.disabled || null,
      type: b.value,
      download: e.download || null,
      "data-loading": e.loading || null
    }, {
      default: r(() => [
        n(l.$slots, "before"),
        n(l.$slots, "input"),
        o.icon ? (a(), u(B, {
          key: 0,
          offset: e.offset,
          badge: e.badge
        }, {
          default: r(() => [
            n(l.$slots, "icon")
          ]),
          _: 3
        }, 8, ["offset", "badge"])) : s("", !0),
        o.default ? (a(), i("span", {
          key: 1,
          class: f(["relative inline-flex min-w-0", {
            "ml-2": o.icon && e.offset,
            "mr-2": o["icon-right"] && e.offset
          }])
        }, [
          n(l.$slots, "default"),
          !o.icon && e.badge ? (a(), u(h, {
            key: 0,
            count: e.badge
          }, null, 8, ["count"])) : s("", !0)
        ], 2)) : s("", !0),
        o["icon-right"] ? (a(), u(B, {
          key: 2,
          offset: e.offset
        }, {
          default: r(() => [
            n(l.$slots, "icon-right")
          ]),
          _: 3
        }, 8, ["offset"])) : s("", !0),
        y("span", w, [
          m[0] || (m[0] = y("span", { class: "animate-spin-loader size-4 rounded-full border-2 border-current border-r-transparent border-t-transparent" }, null, -1)),
          n(l.$slots, "loader")
        ]),
        n(l.$slots, "after")
      ]),
      _: 3
    }, 8, ["data-size", "data-color", "data-color-checked", "disabled", "type", "download", "data-loading"]));
  }
});
export {
  C as Badge,
  x as Button,
  h as ButtonBadge,
  B as ButtonIcon
};
