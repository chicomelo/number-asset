import{u as v,t as h}from"./links.cMjoa9mX.js";import{B as S}from"./Img.C6u5nam7.js";import{b as y}from"./Caret.iRBf3wcH.js";import{S as b}from"./Profile.vTi7bzTi.js";import{x as n,o as c,c as l,a as e,C as r,t as s,H as k,d as I,q as x,D as C,L as B,M as N}from"./vue.esm-bundler.CWQFYt9y.js";import{_ as V}from"./_plugin-vue_export-helper.BN1snXvA.js";const D={setup(){return{rootStore:v()}},components:{BaseImg:S,CoreLoader:y,SvgDannieProfile:b},props:{description:{type:String,required:!0},image:String,loading:{type:Boolean,default:!1},title:{type:String,required:!0}},data(){return{images:{}}},computed:{appName(){return"All in One SEO"},date(){const o=new Date;return o.toLocaleString("default",{month:"long"})+" "+o.getDate()},isVerticalImage(){const o=this.images[this.image];return o?o.vertical:!1}},methods:{truncate:h}},d=o=>(B("data-v-d177735a"),o=o(),N(),o),L={class:"aioseo-facebook-preview"},w={class:"facebook-post"},A={class:"facebook-header"},q={class:"profile-photo"},P={class:"poster"},E={class:"poster-name"},O={class:"poster-date"},R=d(()=>e("div",{class:"ellipsis"},[e("div"),e("div"),e("div")],-1)),z={key:0,class:"loader"},F={class:"facebook-site-description"},H={class:"site-domain"},M={class:"site-title"},T={class:"site-description"},U=d(()=>e("div",{class:"facebook-footer"},null,-1));function j(o,i,a,_,u,t){const p=n("svg-dannie-profile"),m=n("base-img"),f=n("core-loader");return c(),l("div",L,[e("div",w,[e("div",A,[e("div",q,[r(p)]),e("div",P,[e("div",E,s(t.appName),1),e("div",O,s(t.date),1)]),R]),e("div",{class:k(["facebook-content",{vertical:t.isVerticalImage}])},[r(m,{debounce:!1,src:a.image,onImages:i[0]||(i[0]=g=>u.images=g),class:"facebook-content__image"},null,8,["src"]),a.loading?(c(),l("div",z,[r(f)])):I("",!0),e("div",F,[e("div",H,[x(o.$slots,"site-url",{},()=>[C(s(_.rootStore.aioseo.urls.domain),1)],!0)]),e("div",M,s(t.truncate(a.title,60)),1),e("div",T,s(t.truncate(a.description,110)),1)])],2),U])])}const Y=V(D,[["render",j],["__scopeId","data-v-d177735a"]]);export{Y as C};
