'use strict';(function(e,l,I,Z,aa,J,K){var A=e.location.pathname;let E=e.location.href,ba=e.location.host,R=l.referrer,F=(new RegExp("[?&]"+encodeURIComponent("mid")+"=([^&]*)")).exec(l.currentScript.src)[1],ca=l.querySelector('script[src*="id='+I+'"]'),f={},g=[],G=!1,L=!1,S=!1,B=-1!=A.indexOf("popup/popup_index.html")?!0:!1;if(!F)return!1;let x="undefined"!==typeof CAFE24.SDE_SHOP_NUM?CAFE24.SDE_SHOP_NUM:null;var M=!0;try{localStorage.setItem("WACK_test","yes"),localStorage.removeItem("WACK_test")}catch(a){M=
!1}let T=function(a,b,c,d){let h;c&&(h=new Date,h.setTime(h.getTime()+1E3*c));l.cookie="WACK_"+a+"="+encodeURIComponent(b)+(c?";expires="+h.toUTCString():"")+";path="+(d||"/;")},U=function(a,b){return(a=l.cookie.match("(^|;) ?"+(b?"":"WACK_")+a+"=([^;]*)(;|$)"))?decodeURIComponent(a[2]):""},N=function(a,b,c,d){return M?localStorage.setItem("WACK_"+a,encodeURIComponent(b)):T(a,b,c,d)},O=function(a,b){return M?decodeURIComponent(localStorage.getItem((b?"":"WACK_")+a)||""):U(a,b)},H=function(a,b,c,d){try{sessionStorage.setItem("WACK_"+
a,encodeURIComponent(b))}catch(h){T(a,b,c,d)}},da=function(a,b){try{return decodeURIComponent(sessionStorage.getItem((b?"":"WACK_")+a)||"")}catch(c){return U(a,b)}},C=function(a){try{return l.querySelector(a).getAttribute("content")}catch(b){return""}},D=function(a,b){var c="";a.replace(/[?&]+([^=&]+)=([^&]*)/gi,function(d,h,p){h==b&&(c=p)});return c.split("#")[0]},P=function(){return C('[name="path_role"]')},ea=function(a,b,c){let d=l.createElement("script");d.type="text/javascript";d.async=!0;d.src=
"https://www.googletagmanager.com/gtag/js?id="+I;d.onload=function(){e.dataLayer=e.dataLayer||[];e.withapps_gtag=function(){dataLayer.push(arguments)};withapps_gtag("js",new Date);withapps_gtag("config",I);a&&b&&!J&&!B&&withapps_gtag(a,b,c);K&&b&&console.log(b,c)};l.body.appendChild(d)},k=function(a,b,c){if(!F||!x||"1"==x&&CAFE24API.MALL_ID!=F||"1"!=x&&F!=CAFE24API.MALL_ID+"_"+x)return!1;ca&&"function"===typeof gtag?(a&&b&&!J&&!B&&gtag(a,b,c),K&&b&&console.log(b,c)):"function"===typeof withapps_gtag?
(a&&b&&!J&&!B&&withapps_gtag(a,b,c),K&&b&&console.log(b,c)):B?B=!1:ea(a,b,c)},w=function(a){var b={};let c=[];if(a)b=a.items[0];else{let r=a=b="",q="",n="";var d="";let u="";b||("undefined"!==typeof WA_GA_CUSTOM_DATA&&WA_GA_CUSTOM_DATA.sku?b=WA_GA_CUSTOM_DATA.sku:"undefined"!==typeof iProductNo&&(b=iProductNo));a||(a="undefined"!==typeof product_name?product_name:C('[property="og:title"]'));!r&&"undefined"!==typeof WA_GA_CUSTOM_DATA&&WA_GA_CUSTOM_DATA.brand&&(r=WA_GA_CUSTOM_DATA.brand);q||"undefined"!==
typeof iCategoryNo&&(q=iCategoryNo);n||("undefined"!==typeof iProductPrice?n=iProductPrice:"undefined"!==typeof productPrice?n=productPrice:(n=C('[property="product:price:amount"]'),d=C('[property="product:sale_price:amount"]'),n&&d&&n>d&&(n=d)));d=da("list_name");"object"===typeof SHOP&&"function"===typeof SHOP.getCurrency&&(u=SHOP.getCurrency());u||(u=C('[property="product:price:currency"]'));if(x&&void 0!==window.sessionStorage&&!(b&&a&&q)){var h=window.sessionStorage.getItem("localRecentProduct"+
x);null!==h&&(h=JSON.parse(h),!b&&h[0].iProductNo&&(b=h[0].iProductNo),!a&&h[0].sProductName&&(a=h[0].sProductName),!q&&h[0].sParam&&(q=D(h[0].sParam,"cate_no")))}b={id:b,name:a,list_name:d,brand:r,category:q,price:n,currency:u,quantity:1}}let p=JSON.stringify(b);a=l.querySelectorAll(atob("W25hbWU9InF1YW50aXR5X29wdFtdIl0="));let m=l.querySelectorAll(atob("Lm9wdGlvbl9ib3hfcHJpY2U=")),v=l.querySelectorAll(atob("W25hbWU9ImJhc2tldF9hZGRfcHJvZHVjdFtdIl0=")),t=l.querySelectorAll(atob("LmFkZF9wcm9kdWN0X29wdGlvbl9ib3hfcHJpY2U=")),
y=0;a.length!=m.length&&v&&0<v.length&&(y=m.length);a.forEach(function(r,q){let n=JSON.parse(p);if(y&&y<=q){let u=v[q-y].value.split("||");n.id=u[1];n.name=u[5];n.price=t&&t[q-y]?1*t[q-y].value/(1*r.value):1*u[6]}else m.length>q&&(n.price=1*m[q].value/(1*r.value));n.quantity=1*r.value;c.push(n)});if(0<a.length){if("undefined"!==typeof option_stock_data&&option_stock_data){let r=JSON.parse(option_stock_data);l.querySelectorAll(atob("W25hbWU9Iml0ZW1fY29kZVtdIl0=")).forEach(function(q,n){c[n].price=
1*r[q.value].option_price})}}else 0==c.length&&c.push(b);return{items:c}},V=function(){if(0==g.length)return 0;let a=0;g.items.forEach(function(b){a+=b.price*b.quantity});return a},W=function(){if("undefined"!==typeof WA_GA_CUSTOM_DATA&&WA_GA_CUSTOM_DATA.no){var a=O("savedItem");if(a){a=JSON.parse(a);let b=!1;for(let c=0;c<a.length;c++)if(WA_GA_CUSTOM_DATA.no==a[c].no){b=!0;break}b||(a.push(WA_GA_CUSTOM_DATA),N("savedItem",JSON.stringify(a)))}else N("savedItem",JSON.stringify([WA_GA_CUSTOM_DATA]))}},
z=function(a,b){var c=O("savedItem");if(c){c=JSON.parse(c);for(let d=0;d<c.length;d++)if(c[d].no==a&&c[d][b])return c[d][b]}return""},Q=function(){g=w(g);k("event","view_item",g);L=G=!1},fa=function(a,b){(a=l.querySelector(a))&&(new MutationObserver(b)).observe(a,{attributes:!0,childList:!0,characterData:!0})},X=function(){if(!S){var a=l.querySelector(atob("W2lkXj0iTlBBWV9CVVlfTElOS18iXQ=="));if(a)S=!0,a.addEventListener("click",function(b){f.NPAY_BUY()});else{if("function"===typeof e.nv_add_basket_1_product){let b=
e.nv_add_basket_1_product;e.nv_add_basket_1_product=function(){f.NPAY_BUY();return b.apply(b,arguments)}}if("function"===typeof e.nv_add_basket_1_m_product){let b=e.nv_add_basket_1_m_product;e.nv_add_basket_1_m_product=function(){f.NPAY_BUY();return b.apply(b,arguments)}}}if(a=l.querySelector(atob("W2lkXj0iTlBBWV9XSVNIX0xJTktfIl0=")))a.addEventListener("click",function(b){f.NPAY_WISH()});else{if("function"===typeof e.nv_add_basket_2_product){let b=e.nv_add_basket_2_product;e.nv_add_basket_2_product=
function(){f.NPAY_WISH();return b.apply(b,arguments)}}if("function"===typeof e.nv_add_basket_2_m_product){let b=e.nv_add_basket_2_m_product;e.nv_add_basket_2_m_product=function(){f.NPAY_WISH();return b.apply(b,arguments)}}}}},Y=function(){if("function"===typeof e.createKakaoOrderSheet){let a=e.createKakaoOrderSheet;e.createKakaoOrderSheet=function(){f.KPAY_BUY();return a.apply(a,arguments)}}};f.PRODUCT_DETAIL=function(){if("function"===typeof e.basket_result_action){let a=e.basket_result_action;e.basket_result_action=
function(){f.ADD_TO_CART();return a.apply(a,arguments)}}if("function"===typeof e.add_wishlist_result){let a=e.add_wishlist_result;e.add_wishlist_result=function(){f.ADD_TO_WISHLIST();return a.apply(a,arguments)}}if("object"===typeof e.oSingleSelection&&"undefined"!==e.oSingleSelection.getTotalPriceSelector){let a=oSingleSelection.getTotalPriceSelector();fa(a,Q)}else if("function"===typeof e.setTotalPriceRef){let a=e.setTotalPriceRef;e.setTotalPriceRef=function(){Q();return a.apply(a,arguments)};if("object"===
typeof e.ProductAdd&&"undefined"!==e.ProductAdd.setTotalPriceRef){let b=e.ProductAdd.setTotalPriceRef;e.ProductAdd.setTotalPriceRef=function(){Q();return b.apply(b,arguments)}}}X();Y();0==g.length&&(g=w());-1==E.indexOf("layer_option.html")&&k("event","view_item",g)};f.ADD_TO_CART=function(){0==g.length&&(g=w());"undefined"!==typeof iEventQuantity&&g.items&&(g.items[0].quantity=iEventQuantity);W();G||k("event","add_to_cart",g)};f.ADD_TO_WISHLIST=function(){0==g.length&&(g=w());W();k("event","add_to_wishlist",
g)};f.ORDER_BASKET=function(){if("undefined"!==typeof aBasketProductData&&0<aBasketProductData.length){var a=[],b=0,c=0;for(var d=0;d<aBasketProductData.length;d++){let h=z(aBasketProductData[d].product_no,"sku")||aBasketProductData[d].product_no,p=aBasketProductData[d].product_name,m=z(aBasketProductData[d].product_no,"brand")||"",v=1*aBasketProductData[d].product_sum_price,t=1*aBasketProductData[d].quantity;b+=t;c+=v*t;a.push({id:h,name:p,brand:m,price:v,quantity:t})}g={items:a};e.iEventQuantity=
b;e.iEventTotalPrice=c}k("event","view_cart",g);X();Y();if(a=O("savedItem")){a=JSON.parse(a);b=[];if("undefined"!==typeof aBasketProductData&&0<aBasketProductData.length&&a.length>aBasketProductData.length)for(c=0;c<aBasketProductData.length;c++)for(d=0;d<a.length;d++)if(a[d].no==aBasketProductData[c].product_no){b.push(a[d]);break}0<b.length&&N("savedItem",JSON.stringify(b))}};f.ORDER_ORDERFORM=function(){let a=l.querySelector("#total_price").value,b=0,c=[],d="object"===typeof SHOP&&"function"===
typeof SHOP.getCurrency?SHOP.getCurrency():"KRW";a||"object"!==typeof EC_ORDER_FORM_ASSIGN_DATA||"undefined"===typeof EC_ORDER_FORM_ASSIGN_DATA.r_total_price||(a=EC_ORDER_FORM_ASSIGN_DATA.r_total_price);"object"===typeof EC_ORDER_FORM_ASSIGN_DATA&&"undefined"!==typeof EC_ORDER_FORM_ASSIGN_DATA.ship_fee&&(b=EC_ORDER_FORM_ASSIGN_DATA.ship_fee);if("undefined"!==typeof aBasketProductOrderData&&0<aBasketProductOrderData.length)for(let h=0;h<aBasketProductOrderData.length;h++){let p=z(aBasketProductOrderData[h].product_no,
"sku")||aBasketProductOrderData[h].product_no,m=z(aBasketProductOrderData[h].product_no,"brand")||"";c.push({id:p,price:aBasketProductOrderData[h].product_price,brand:m,quantity:aBasketProductOrderData[h].quantity})}k("event","begin_checkout",{value:a,currency:d,shipping:b,items:c})};f.ORDER_ORDERRESULT=function(){let a=0,b="",c=0,d=[],h="object"===typeof SHOP&&"function"===typeof SHOP.getCurrency?SHOP.getCurrency():"KRW";if("object"===typeof CAFE24.FRONT_EXTERNAL_SCRIPT_VARIABLE_DATA&&(a=CAFE24.FRONT_EXTERNAL_SCRIPT_VARIABLE_DATA.payed_amount,
c=CAFE24.FRONT_EXTERNAL_SCRIPT_VARIABLE_DATA.total_basic_ship_fee,b=CAFE24.FRONT_EXTERNAL_SCRIPT_VARIABLE_DATA.order_id,0<CAFE24.FRONT_EXTERNAL_SCRIPT_VARIABLE_DATA.order_product.length)){let p=CAFE24.FRONT_EXTERNAL_SCRIPT_VARIABLE_DATA.order_product;for(let m=0;m<p.length;m++){let v=z(p[m].product_no,"sku")||p[m].product_no,t=z(p[m].product_no,"brand")||"";d.push({id:v,name:p[m].product_name,brand:t,category:p[m].category_no_1,price:p[m].product_price,quantity:p[m].quantity})}}b||(b=D(E,"order_id"));
k("event","purchase",{value:a,currency:h,transaction_id:b,shipping:c,items:d})};f.MYSHOP_ORDER_LIST=function(){if(-1!=E.indexOf("wack_refund_id")){let a=D(E,"wack_refund_id");k("event","refund",{transaction_id:a})}else{if("object"===typeof e.OrderHistory&&"function"===typeof e.OrderHistory._goUrl){let a=e.OrderHistory._goUrl;e.OrderHistory._goUrl=function(){if(arguments[0]&&-1!=arguments[0].indexOf("OrderCancel")){let b=D(arguments[0],"order_id");k("event","refund",{transaction_id:b})}return a.apply(a,
arguments)}}k("event","\uc8fc\ubb38\ub0b4\uc5ed\uc870\ud68c")}};f.MYSHOP_ORDER_DETAIL=function(){if("object"===typeof e.OrderHistory&&"function"===typeof e.OrderHistory._goUrl){let a=e.OrderHistory._goUrl;e.OrderHistory._goUrl=function(){if(arguments[0]&&-1!=arguments[0].indexOf("OrderCancel")){let c=D(arguments[0],"order_id");k("event","refund",{transaction_id:c})}return a.apply(a,arguments)};let b=l.querySelector("#order_id");if(b&&b.value){let c=l.querySelector("#detailForm");c&&(c.action="javascript://",
c.onsubmit=function(d){d.preventDefault();d.stopPropagation();OrderHistory.orderCancel(b.value);return!1})}}k("event","\uc8fc\ubb38\ub0b4\uc5ed\uc0c1\uc138\uc870\ud68c")};f.MYSHOP_ORDER_CANCEL=function(){let a=l.querySelector("#redirect_url");if(a&&a.value){let b=l.querySelector("#order_id").value;if(b){let c=a.value;c+=-1==c.indexOf("?")?"?":"&";a.value=c+"wack_refund_id="+b}}k("event","\uc8fc\ubb38\ucde8\uc18c\uc2e0\uccad")};f.NPAY_BUY=function(){if(!G){0==g.length&&(g=w());G=!0;var a="object"===
typeof SHOP&&"function"===typeof SHOP.getCurrency?SHOP.getCurrency():"KRW",b="ORDER_BASKET"==P()&&"undefined"!==typeof iEventTotalPrice?iEventTotalPrice:V();Z?k("event","purchase",{value:b,currency:a,transaction_id:"NPAY \uad6c\ub9e4 \ucd94\uc815",shipping:0,items:g.items}):k("event","NPAY \uad6c\ub9e4\ubc84\ud2bc",{value:b,currency:a,items:g.items})}};f.NPAY_WISH=function(){0==g.length&&(g=w());k("event","NPAY \ucc1c\ubc84\ud2bc",g)};f.KPAY_BUY=function(){if(!L){0==g.length&&(g=w());L=!0;var a="object"===
typeof SHOP&&"function"===typeof SHOP.getCurrency?SHOP.getCurrency():"KRW",b="ORDER_BASKET"==P()&&"undefined"!==typeof iEventTotalPrice?iEventTotalPrice:V();aa?k("event","purchase",{value:b,currency:a,transaction_id:"\uce74\uce74\uc624\ud398\uc774 \uad6c\ub9e4 \ucd94\uc815",shipping:0,items:g.items}):k("event","\uce74\uce74\uc624\ud398\uc774 \uad6c\ub9e4\ubc84\ud2bc",{value:b,currency:a,items:g.items})}};f.MEMBER_LOGIN=function(){k("event","\ud68c\uc6d0\ub85c\uadf8\uc778")};f.MEMBER_JOIN=function(){k("event",
"\ud68c\uc6d0\uac00\uc785")};f.MEMBER_JOINRESULT=function(){k("event","\ud68c\uc6d0\uac00\uc785\uc644\ub8cc")};f.PRODUCT_LIST=function(){H("list_name","\uc0c1\ud488\ubd84\ub958");k("event","\uc0c1\ud488\ubd84\ub958")};f.PRODUCT_SEARCH=function(){H("list_name","\uc0c1\ud488\uac80\uc0c9");k("event","\uc0c1\ud488\uac80\uc0c9")};f.PRODUCT_RECENT=function(){H("list_name","\ucd5c\uadfc\ubcf8\uc0c1\ud488");k("event","\ucd5c\uadfc\ubcf8\uc0c1\ud488")};f.MAIN=function(){H("list_name","\uba54\uc778\ud654\uba74");
k("event","\uba54\uc778\ud654\uba74")};l.addEventListener("click",function(a){if(a&&a.target){let b=a.target.getAttribute("watag");a.target.getAttribute("id");b&&k("event",b)}});A=P();if("function"===typeof f[A]&&("PRODUCT_DETAIL"==A||R&&-1!=R.indexOf(ba)))f[A]();else k();console.log("withapps GAScript v3.1")})(window,document,"UA-142115301-1",true,true,false,true);