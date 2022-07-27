import Pages from "./../pages/index.vue";

let prefix = process.env.MIX_ADMIN_PANEL_ROUTE_PREFIX
  ? "/" + process.env.MIX_ADMIN_PANEL_ROUTE_PREFIX
  : "/badaso-dashboard";

export default [
  {
    path: prefix + "/jaya-theme-configuration",
    name: "JayaThemeConfigurationBrowse",
    component: Pages,
    meta: {
      title: "Browse Jaya Theme Configuration",
      useComponent: "AdminContainer"
    },
  },
];
