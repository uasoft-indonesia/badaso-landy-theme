"use strict";(self.webpackChunkdoc=self.webpackChunkdoc||[]).push([[152],{3905:function(e,t,n){n.d(t,{Zo:function(){return c},kt:function(){return m}});var r=n(7294);function a(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}function o(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function l(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?o(Object(n),!0).forEach((function(t){a(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):o(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}function i(e,t){if(null==e)return{};var n,r,a=function(e,t){if(null==e)return{};var n,r,a={},o=Object.keys(e);for(r=0;r<o.length;r++)n=o[r],t.indexOf(n)>=0||(a[n]=e[n]);return a}(e,t);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(e);for(r=0;r<o.length;r++)n=o[r],t.indexOf(n)>=0||Object.prototype.propertyIsEnumerable.call(e,n)&&(a[n]=e[n])}return a}var p=r.createContext({}),s=function(e){var t=r.useContext(p),n=t;return e&&(n="function"==typeof e?e(t):l(l({},t),e)),n},c=function(e){var t=s(e.components);return r.createElement(p.Provider,{value:t},e.children)},u={inlineCode:"code",wrapper:function(e){var t=e.children;return r.createElement(r.Fragment,{},t)}},d=r.forwardRef((function(e,t){var n=e.components,a=e.mdxType,o=e.originalType,p=e.parentName,c=i(e,["components","mdxType","originalType","parentName"]),d=s(n),m=a,f=d["".concat(p,".").concat(m)]||d[m]||u[m]||o;return n?r.createElement(f,l(l({ref:t},c),{},{components:n})):r.createElement(f,l({ref:t},c))}));function m(e,t){var n=arguments,a=t&&t.mdxType;if("string"==typeof e||a){var o=n.length,l=new Array(o);l[0]=d;var i={};for(var p in t)hasOwnProperty.call(t,p)&&(i[p]=t[p]);i.originalType=e,i.mdxType="string"==typeof e?e:a,l[1]=i;for(var s=2;s<o;s++)l[s]=n[s];return r.createElement.apply(null,l)}return r.createElement.apply(null,n)}d.displayName="MDXCreateElement"},681:function(e,t,n){n.r(t),n.d(t,{frontMatter:function(){return i},contentTitle:function(){return p},metadata:function(){return s},toc:function(){return c},default:function(){return d}});var r=n(7462),a=n(3366),o=(n(7294),n(3905)),l=["components"],i={sidebar_position:1},p="Installation",s={unversionedId:"getting-started/installation",id:"getting-started/installation",title:"Installation",description:"1. You can install the landy theme with the following command.",source:"@site/docs/getting-started/installation.md",sourceDirName:"getting-started",slug:"/getting-started/installation",permalink:"/getting-started/installation",editUrl:"https://github.com/uasoft-indonesia/badaso-landy-theme/edit/main/website/docs/getting-started/installation.md",tags:[],version:"current",sidebarPosition:1,frontMatter:{sidebar_position:1},sidebar:"tutorialSidebar",previous:{title:"Introduction",permalink:"/"},next:{title:"Google Analytics Setup",permalink:"/getting-started/google-analytics-setup"}},c=[],u={toc:c};function d(e){var t=e.components,n=(0,a.Z)(e,l);return(0,o.kt)("wrapper",(0,r.Z)({},u,n,{components:t,mdxType:"MDXLayout"}),(0,o.kt)("h1",{id:"installation"},"Installation"),(0,o.kt)("ol",null,(0,o.kt)("li",{parentName:"ol"},"You can install the landy theme with the following command.")),(0,o.kt)("pre",null,(0,o.kt)("code",{parentName:"pre"},"composer require badaso/landy-theme\n")),(0,o.kt)("ol",{start:2},(0,o.kt)("li",{parentName:"ol"},"(",(0,o.kt)("b",null,"Optional"),") Run the following command to setup the badaso-core. If you never run it before.")),(0,o.kt)("pre",null,(0,o.kt)("code",{parentName:"pre"},"php artisan badaso:setup\n")),(0,o.kt)("ol",{start:3},(0,o.kt)("li",{parentName:"ol"},"(",(0,o.kt)("b",null,"Optional"),") Run the following command to setup the badaso-content. If you never run it before.")),(0,o.kt)("pre",null,(0,o.kt)("code",{parentName:"pre"},"php artisan badaso-content:setup\n")),(0,o.kt)("ol",{start:4},(0,o.kt)("li",{parentName:"ol"},"Run the following command to setup the theme")),(0,o.kt)("pre",null,(0,o.kt)("code",{parentName:"pre"},"php artisan badaso-landy-theme:setup\n")),(0,o.kt)("ol",{start:5},(0,o.kt)("li",{parentName:"ol"},"Run the following command to migrate database.")),(0,o.kt)("pre",null,(0,o.kt)("code",{parentName:"pre"},"php artisan migrate\n")),(0,o.kt)("ol",{start:6},(0,o.kt)("li",{parentName:"ol"},"(Optional) Run the following command to generate seeder of badaso core, and content module. If you never run it before.")),(0,o.kt)("pre",null,(0,o.kt)("code",{parentName:"pre"},'php artisan db:seed --class="Database\\Seeders\\Badaso\\BadasoSeeder"\n\nphp artisan db:seed --class="Database\\Seeders\\Badaso\\Content\\BadasoContentModuleSeeder"\n')),(0,o.kt)("ol",{start:7},(0,o.kt)("li",{parentName:"ol"},"Run the command to generate seeder of Landy theme.")),(0,o.kt)("pre",null,(0,o.kt)("code",{parentName:"pre"},"php artisan db:seed --class='Database\\Seeders\\Badaso\\LandyTheme\\BadasoLandyThemeSeeder'\n")),(0,o.kt)("ol",{start:8},(0,o.kt)("li",{parentName:"ol"},"Add the plugins to your MIX_BADASO_PLUGINS to .env.")),(0,o.kt)("pre",null,(0,o.kt)("code",{parentName:"pre"},"MIX_BADASO_PLUGINS=content-module,landy-theme\n")),(0,o.kt)("ol",{start:9},(0,o.kt)("li",{parentName:"ol"},"Add the plugins menu to your MIX_BADASO_MENU to .env. If you have another menu, include them using delimiter comma (,).")),(0,o.kt)("pre",null,(0,o.kt)("code",{parentName:"pre"},"MIX_BADASO_MENU=${MIX_DEFAULT_MENU},content-module,landy-theme\n")),(0,o.kt)("ol",{start:10},(0,o.kt)("li",{parentName:"ol"},"Install JS depedency")),(0,o.kt)("pre",null,(0,o.kt)("code",{parentName:"pre"},"   npm install\n")),(0,o.kt)("ol",{start:11},(0,o.kt)("li",{parentName:"ol"},"Build JS dependency.")),(0,o.kt)("pre",null,(0,o.kt)("code",{parentName:"pre"}," npm run watch\n")),(0,o.kt)("ol",{start:12},(0,o.kt)("li",{parentName:"ol"},"Finished. You can access the landy theme")),(0,o.kt)("pre",null,(0,o.kt)("code",{parentName:"pre"},"http://localhost:8000/landy\n")))}d.isMDXComponent=!0}}]);