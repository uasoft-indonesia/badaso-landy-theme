import Pages from "./../pages/index.vue";

let prefix = process.env.MIX_ADMIN_PANEL_ROUTE_PREFIX
  ? "/" + process.env.MIX_ADMIN_PANEL_ROUTE_PREFIX
  : "/badaso-dashboard";

export default [
  {
    path: prefix + "/landy-theme-configuration",
    name: "LandyThemeConfigurationBrowse",
    component: Pages,
    meta: {
      title: "Landy Theme Configuration",
      useComponent: "AdminContainer"
    },
  },
];
