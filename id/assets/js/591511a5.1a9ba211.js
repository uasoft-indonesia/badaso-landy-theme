"use strict";(self.webpackChunkdoc=self.webpackChunkdoc||[]).push([[8257],{3905:function(e,n,t){t.d(n,{Zo:function(){return p},kt:function(){return m}});var r=t(7294);function o(e,n,t){return n in e?Object.defineProperty(e,n,{value:t,enumerable:!0,configurable:!0,writable:!0}):e[n]=t,e}function a(e,n){var t=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);n&&(r=r.filter((function(n){return Object.getOwnPropertyDescriptor(e,n).enumerable}))),t.push.apply(t,r)}return t}function i(e){for(var n=1;n<arguments.length;n++){var t=null!=arguments[n]?arguments[n]:{};n%2?a(Object(t),!0).forEach((function(n){o(e,n,t[n])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(t)):a(Object(t)).forEach((function(n){Object.defineProperty(e,n,Object.getOwnPropertyDescriptor(t,n))}))}return e}function l(e,n){if(null==e)return{};var t,r,o=function(e,n){if(null==e)return{};var t,r,o={},a=Object.keys(e);for(r=0;r<a.length;r++)t=a[r],n.indexOf(t)>=0||(o[t]=e[t]);return o}(e,n);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(e);for(r=0;r<a.length;r++)t=a[r],n.indexOf(t)>=0||Object.prototype.propertyIsEnumerable.call(e,t)&&(o[t]=e[t])}return o}var u=r.createContext({}),c=function(e){var n=r.useContext(u),t=n;return e&&(t="function"==typeof e?e(n):i(i({},n),e)),t},p=function(e){var n=c(e.components);return r.createElement(u.Provider,{value:n},e.children)},d={inlineCode:"code",wrapper:function(e){var n=e.children;return r.createElement(r.Fragment,{},n)}},s=r.forwardRef((function(e,n){var t=e.components,o=e.mdxType,a=e.originalType,u=e.parentName,p=l(e,["components","mdxType","originalType","parentName"]),s=c(t),m=o,g=s["".concat(u,".").concat(m)]||s[m]||d[m]||a;return t?r.createElement(g,i(i({ref:n},p),{},{components:t})):r.createElement(g,i({ref:n},p))}));function m(e,n){var t=arguments,o=n&&n.mdxType;if("string"==typeof e||o){var a=t.length,i=new Array(a);i[0]=s;var l={};for(var u in n)hasOwnProperty.call(n,u)&&(l[u]=n[u]);l.originalType=e,l.mdxType="string"==typeof e?e:o,i[1]=l;for(var c=2;c<a;c++)i[c]=t[c];return r.createElement.apply(null,i)}return r.createElement.apply(null,t)}s.displayName="MDXCreateElement"},6375:function(e,n,t){t.r(n),t.d(n,{frontMatter:function(){return l},contentTitle:function(){return u},metadata:function(){return c},toc:function(){return p},default:function(){return s}});var r=t(7462),o=t(3366),a=(t(7294),t(3905)),i=["components"],l={sidebar_position:1},u="Override Controller",c={unversionedId:"customization/override-controller",id:"customization/override-controller",title:"Override Controller",description:"Untuk mengganti controller, Anda dapat mengikuti langkah-langkah berikut:",source:"@site/i18n/id/docusaurus-plugin-content-docs/current/customization/override-controller.md",sourceDirName:"customization",slug:"/customization/override-controller",permalink:"/id/customization/override-controller",editUrl:"https://github.com/uasoft-indonesia/badaso-landy-theme/edit/main/website/docs/customization/override-controller.md",tags:[],version:"current",sidebarPosition:1,frontMatter:{sidebar_position:1},sidebar:"tutorialSidebar",previous:{title:"Google Analytics Setup",permalink:"/id/getting-started/google-analytics-setup"},next:{title:"Override View",permalink:"/id/customization/override-view"}},p=[],d={toc:p};function s(e){var n=e.components,t=(0,o.Z)(e,i);return(0,a.kt)("wrapper",(0,r.Z)({},d,t,{components:n,mdxType:"MDXLayout"}),(0,a.kt)("h1",{id:"override-controller"},"Override Controller"),(0,a.kt)("p",null,"Untuk mengganti controller, Anda dapat mengikuti langkah-langkah berikut:"),(0,a.kt)("ul",null,(0,a.kt)("li",{parentName:"ul"},"Buat pengontrol baru dengan menggunakan perintah di bawah ini.")),(0,a.kt)("p",null,(0,a.kt)("inlineCode",{parentName:"p"},"php artisan make:controller ExampleController")),(0,a.kt)("ul",null,(0,a.kt)("li",{parentName:"ul"},"Setelah pengontrol baru dibuat, Anda dapat mengganti pengontrol dengan mendaftarkan pengontrol di file ",(0,a.kt)("inlineCode",{parentName:"li"},"config/badaso-landy-theme.php")," di bagian ",(0,a.kt)("inlineCode",{parentName:"li"},"controllers"),". Sebagai contoh:")),(0,a.kt)("pre",null,(0,a.kt)("code",{parentName:"pre",className:"language-php"},"kembali [\n     ...,\n\n     'pengontrol' => [\n         'ExampleController' => 'App\\Http\\Controllers\\ExampleController',\n     ],\n];\n")),(0,a.kt)("ul",null,(0,a.kt)("li",{parentName:"ul"},"Anda dapat melihat kunci penggantian yang tersedia di file ",(0,a.kt)("inlineCode",{parentName:"li"},"vendor/badaso/landy-theme/src/Routes/api.php"),".")),(0,a.kt)("p",null,"Catatan: Semua pengontrol di Tema Landy adalah pengontrol yang dipanggil."))}s.isMDXComponent=!0}}]);