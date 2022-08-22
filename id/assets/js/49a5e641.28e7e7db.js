"use strict";(self.webpackChunkdoc=self.webpackChunkdoc||[]).push([[2852],{3905:function(e,t,n){n.d(t,{Zo:function(){return u},kt:function(){return m}});var a=n(7294);function r(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}function o(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(e);t&&(a=a.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,a)}return n}function i(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?o(Object(n),!0).forEach((function(t){r(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):o(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}function l(e,t){if(null==e)return{};var n,a,r=function(e,t){if(null==e)return{};var n,a,r={},o=Object.keys(e);for(a=0;a<o.length;a++)n=o[a],t.indexOf(n)>=0||(r[n]=e[n]);return r}(e,t);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(e);for(a=0;a<o.length;a++)n=o[a],t.indexOf(n)>=0||Object.prototype.propertyIsEnumerable.call(e,n)&&(r[n]=e[n])}return r}var p=a.createContext({}),s=function(e){var t=a.useContext(p),n=t;return e&&(n="function"==typeof e?e(t):i(i({},t),e)),n},u=function(e){var t=s(e.components);return a.createElement(p.Provider,{value:t},e.children)},d={inlineCode:"code",wrapper:function(e){var t=e.children;return a.createElement(a.Fragment,{},t)}},c=a.forwardRef((function(e,t){var n=e.components,r=e.mdxType,o=e.originalType,p=e.parentName,u=l(e,["components","mdxType","originalType","parentName"]),c=s(n),m=r,k=c["".concat(p,".").concat(m)]||c[m]||d[m]||o;return n?a.createElement(k,i(i({ref:t},u),{},{components:n})):a.createElement(k,i({ref:t},u))}));function m(e,t){var n=arguments,r=t&&t.mdxType;if("string"==typeof e||r){var o=n.length,i=new Array(o);i[0]=c;var l={};for(var p in t)hasOwnProperty.call(t,p)&&(l[p]=t[p]);l.originalType=e,l.mdxType="string"==typeof e?e:r,i[1]=l;for(var s=2;s<o;s++)i[s]=n[s];return a.createElement.apply(null,i)}return a.createElement.apply(null,n)}c.displayName="MDXCreateElement"},4534:function(e,t,n){n.r(t),n.d(t,{frontMatter:function(){return l},contentTitle:function(){return p},metadata:function(){return s},toc:function(){return u},default:function(){return c}});var a=n(7462),r=n(3366),o=(n(7294),n(3905)),i=["components"],l={sidebar_position:1},p="Installation",s={unversionedId:"getting-started/installation",id:"getting-started/installation",title:"Installation",description:"1. Anda bisa menginstal tema landy dengan mengikuti perintah berikut.",source:"@site/i18n/id/docusaurus-plugin-content-docs/current/getting-started/installation.md",sourceDirName:"getting-started",slug:"/getting-started/installation",permalink:"/id/getting-started/installation",editUrl:"https://github.com/uasoft-indonesia/badaso-landy-theme/edit/main/website/docs/getting-started/installation.md",tags:[],version:"current",sidebarPosition:1,frontMatter:{sidebar_position:1},sidebar:"tutorialSidebar",previous:{title:"Introduction",permalink:"/id/"},next:{title:"Google Analytics Setup",permalink:"/id/getting-started/google-analytics-setup"}},u=[],d={toc:u};function c(e){var t=e.components,n=(0,r.Z)(e,i);return(0,o.kt)("wrapper",(0,a.Z)({},d,n,{components:t,mdxType:"MDXLayout"}),(0,o.kt)("h1",{id:"installation"},"Installation"),(0,o.kt)("ol",null,(0,o.kt)("li",{parentName:"ol"},"Anda bisa menginstal tema landy dengan mengikuti perintah berikut.")),(0,o.kt)("pre",null,(0,o.kt)("code",{parentName:"pre"},"composer require badaso/landy-theme\n")),(0,o.kt)("ol",{start:2},(0,o.kt)("li",{parentName:"ol"},"(Pilihan) Jalankan perintah berikut untuk mengatur badaso-core. Jika Anda tidak pernah menjalankannya sebelumnya.")),(0,o.kt)("pre",null,(0,o.kt)("code",{parentName:"pre"},"php artisan badaso:setup\n")),(0,o.kt)("ol",{start:3},(0,o.kt)("li",{parentName:"ol"},"(Pilihan) Jalankan perintah berikut untuk mengatur badaso-content. Jika Anda tidak pernah menjalankannya sebelumnya.")),(0,o.kt)("pre",null,(0,o.kt)("code",{parentName:"pre"},"php artisan badaso-content:setup\n")),(0,o.kt)("ol",{start:4},(0,o.kt)("li",{parentName:"ol"},"(Optional) Jalankan perintah berikut untuk mengatur badaso-post. Jika Anda tidak pernah menjalankannya sebelumnya.")),(0,o.kt)("pre",null,(0,o.kt)("code",{parentName:"pre"},"php artisan badaso-post:setup\n")),(0,o.kt)("ol",{start:5},(0,o.kt)("li",{parentName:"ol"},"Jalankan perintah berikut untuk mengatur tema")),(0,o.kt)("pre",null,(0,o.kt)("code",{parentName:"pre"},"php artisan badaso-landy-theme:setup\n")),(0,o.kt)("ol",{start:6},(0,o.kt)("li",{parentName:"ol"},"Jalankan perintah berikut untuk migrate database.")),(0,o.kt)("pre",null,(0,o.kt)("code",{parentName:"pre"},"php artisan migrate\n")),(0,o.kt)("ol",{start:7},(0,o.kt)("li",{parentName:"ol"},"(Pilihan) Jalankan perintah berikut untuk generate seeder dari badaso core, content module dan post module. Jika Anda tidak pernah menjalankannya sebelumnya.")),(0,o.kt)("pre",null,(0,o.kt)("code",{parentName:"pre"},'php artisan db:seed --class="Database\\Seeders\\Badaso\\BadasoSeeder"\n\nphp artisan db:seed --class="Database\\Seeders\\Badaso\\Post\\BadasoPostModuleSeeder"\n\nphp artisan db:seed --class="Database\\Seeders\\Badaso\\Content\\BadasoContentModuleSeeder"\n')),(0,o.kt)("ol",{start:8},(0,o.kt)("li",{parentName:"ol"},"Jalankan perintah berikut untuk generate seeder dari Landy theme.")),(0,o.kt)("pre",null,(0,o.kt)("code",{parentName:"pre"},"php artisan db:seed --class='Database\\Seeders\\Badaso\\LandyTheme\\BadasoLandyThemeSeeder'\n")),(0,o.kt)("ol",{start:9},(0,o.kt)("li",{parentName:"ol"},"Tambahkan plugins pada MIX_POST_URL_PREFIX untuk .env.")),(0,o.kt)("pre",null,(0,o.kt)("code",{parentName:"pre"},"MIX_BADASO_PLUGINS=content-module,post-module,landy-theme\n")),(0,o.kt)("ol",{start:10},(0,o.kt)("li",{parentName:"ol"},"Tambahkan menu plugins  ke MIX_BADASO_MENU anda pada .env.Jika anda memiliki menu lain, tambahkan mereka setelah koma (,).")),(0,o.kt)("pre",null,(0,o.kt)("code",{parentName:"pre"},"MIX_BADASO_MENU=${MIX_DEFAULT_MENU},content-module,post-module,landy-theme\n")),(0,o.kt)("ol",{start:11},(0,o.kt)("li",{parentName:"ol"},"Install JS depedency")),(0,o.kt)("pre",null,(0,o.kt)("code",{parentName:"pre"},"   npm install\n")),(0,o.kt)("ol",{start:12},(0,o.kt)("li",{parentName:"ol"},"Bangun JS dependency.")),(0,o.kt)("pre",null,(0,o.kt)("code",{parentName:"pre"}," npm run watch\n")),(0,o.kt)("ol",{start:13},(0,o.kt)("li",{parentName:"ol"},"Selesai. Anda bisa mengakses tema landy")),(0,o.kt)("pre",null,(0,o.kt)("code",{parentName:"pre"},"http://localhost:8000/landy\n")))}c.isMDXComponent=!0}}]);