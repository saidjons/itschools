<style>
 @tailwind base;
@tailwind components;
@tailwind utilities;
/*! CSS Used from: Embedded */
*,*::before,*::after{box-sizing:border-box;}
section{display:block;}
p{margin-top:0;margin-bottom:1rem;}
a{color:unset;text-decoration:none;background-color:transparent;}
a:hover{color:#ff8a65;text-decoration:none;}
img{vertical-align:middle;border-style:none;}
.container-fluid{width:100%;padding-right:12px;padding-left:12px;margin-right:auto;margin-left:auto;}
.row{display:flex;flex-wrap:wrap;margin-right:-12px;margin-left:-12px;}
.col-md-6{position:relative;width:100%;padding-right:12px;padding-left:12px;}
@media (min-width:768px){
.col-md-6{flex:0 0 50%;max-width:50%;}
}
.btn{display:inline-block;font-weight:700;color:#878993;text-align:center;vertical-align:middle;user-select:none;background-color:transparent;border:1px solid transparent;padding:.75rem 2rem;font-size:1.125rem;line-height:1.5;border-radius:.1875rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
@media (prefers-reduced-motion:reduce){
.btn{transition:none;}
}
.btn:hover{color:#878993;text-decoration:none;}
.btn:focus{outline:0;box-shadow:0 .25rem 1rem rgba(0,0,0,.06);}
.btn:disabled{opacity:.65;}
@media print{
*,*::before,*::after{text-shadow:none!important;box-shadow:none!important;}
img{page-break-inside:avoid;}
p{orphans:3;widows:3;}
}
.container-fluid{max-width:1272px;padding-left:24px;padding-right:24px;}
.container-fluid .row{margin-left:-12px;margin-right:-12px;}
a:focus,a:active{color:#232639;}
.btn{font-size:.9375rem;text-transform:uppercase;box-shadow:0 .25rem 1.5rem rgba(0,0,0,.075);}
.btn:hover,.btn:focus,.btn:active{outline:none;outline-style:none;}
.btn-orange{background-color:#ff8a65;color:#fff;border-color:#ff8a65;}
.btn-orange:hover{background-color:#ffb198;color:#fff;border-color:#ffb198;}
.btn-orange:focus{color:#fff;background-color:#cb6549;border-color:#cb6549;}
.btn-orange:disabled{color:#212529;background-color:#ff8a65;border-color:#ff8a65;}
*,*::before,*::after{box-sizing:border-box;}
section{display:block;}
h2{margin-top:0;margin-bottom:.5rem;}
p{margin-top:0;margin-bottom:1rem;}
ul{margin-top:0;margin-bottom:1rem;}
small{font-size:80%;}
a{color:unset;text-decoration:none;background-color:transparent;}
a:hover{color:#ff8a65;text-decoration:none;}
img{vertical-align:middle;border-style:none;}
label{display:inline-block;margin-bottom:.5rem;}
input{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
input{overflow:visible;}
[type=submit]{-webkit-appearance:button;}
[type=submit]::-moz-focus-inner{padding:0;border-style:none;}
input[type=checkbox]{box-sizing:border-box;padding:0;}
h2{margin-bottom:.5rem;font-weight:700;line-height:1.2;color:#2196f3;}
h2{font-size:2rem;}
small{font-size:.8125rem;font-weight:400;}
.img-fluid{max-width:100%;height:auto;}
.container-fluid{width:100%;padding-right:12px;padding-left:12px;margin-right:auto;margin-left:auto;}
.row{display:flex;flex-wrap:wrap;margin-right:-12px;margin-left:-12px;}
.col-md-6,.col-md-5{position:relative;width:100%;padding-right:12px;padding-left:12px;}
@media (min-width:768px){
.col-md-5{flex:0 0 41.6666666667%;max-width:41.6666666667%;}
.col-md-6{flex:0 0 50%;max-width:50%;}
}
.form-control{display:block;width:100%;height:calc(1.5em + 2rem + 2px);padding:1rem;font-size:1.125rem;font-weight:400;line-height:1.5;color:#232639;background-color:#f9f9f9;background-clip:padding-box;border:1px solid #dadbde;border-radius:.1875rem;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
@media (prefers-reduced-motion:reduce){
.form-control{transition:none;}
}
.form-control::-ms-expand{background-color:transparent;border:0;}
.form-control:focus{color:#232639;background-color:#f9f9f9;border-color:#dadbde;border-bottom-color:#ff8a65;border-bottom-width:2px;padding-bottom:calc(1rem - 1px);outline:0;box-shadow:none;}
.form-control::placeholder{color:#6c757d;opacity:1;}
.form-control:disabled{background-color:#e9ecef;opacity:1;}
.form-group{margin-bottom:1rem;}
.btn{display:inline-block;font-weight:700;color:#878993;text-align:center;vertical-align:middle;user-select:none;background-color:transparent;border:1px solid transparent;padding:.75rem 2rem;font-size:1.125rem;line-height:1.5;border-radius:.1875rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
@media (prefers-reduced-motion:reduce){
.btn{transition:none;}
}
.btn:hover{color:#878993;text-decoration:none;}
.btn:focus{outline:0;box-shadow:0 .25rem 1rem rgba(0,0,0,.06);}
.btn:disabled{opacity:.65;}
.dropdown{position:relative;}
.dropdown-toggle{white-space:nowrap;}
.dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid;border-right:.3em solid transparent;border-bottom:0;border-left:.3em solid transparent;}
.dropdown-toggle:empty::after{margin-left:0;}
.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:10rem;padding:.5rem 0;margin:.125rem 0 0;font-size:1.125rem;color:#878993;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid;border-radius:0;}
.dropdown-item{display:block;width:100%;padding:.25rem 1.5rem;clear:both;font-weight:400;color:#878993;text-align:inherit;white-space:nowrap;background-color:transparent;border:0;}
.dropdown-item:hover,.dropdown-item:focus{color:#ff8a65;text-decoration:none;background-color:inherit;}
.dropdown-item:active{color:#ff8a65;text-decoration:none;background-color:inherit;}
.dropdown-item:disabled{color:#6c757d;pointer-events:none;background-color:transparent;}
.input-group{position:relative;display:flex;flex-wrap:wrap;align-items:stretch;width:100%;}
.input-group>.form-control{position:relative;flex:1 1 auto;width:1%;margin-bottom:0;}
.input-group>.form-control:focus{z-index:3;}
.input-group>.form-control:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0;}
.input-group-prepend{display:flex;}
.input-group-prepend{margin-right:-1px;}
.input-group-text{display:flex;align-items:center;padding:1rem;margin-bottom:0;font-size:1.125rem;font-weight:400;line-height:1.5;color:#232639;text-align:center;white-space:nowrap;background-color:#e9ecef;border:1px solid #dadbde;border-radius:.1875rem;}
.input-group>.input-group-prepend>.input-group-text{border-top-right-radius:0;border-bottom-right-radius:0;}
.custom-control{position:relative;display:block;min-height:1.6875rem;padding-left:4rem;}
.custom-control-input{position:absolute;z-index:-1;opacity:0;}
.custom-control-input:checked~.custom-control-label::before{color:#fff;border-color:#ff8a65;background-color:#ff8a65;}
.custom-control-input:focus~.custom-control-label::before{box-shadow:none;}
.custom-control-input:disabled~.custom-control-label{color:#6c757d;}
.custom-control-input:disabled~.custom-control-label::before{background-color:#e9ecef;}
.custom-control-label{position:relative;margin-bottom:0;vertical-align:top;}
.custom-control-label::before{position:absolute;top:.09375rem;left:-4rem;display:block;width:1.5rem;height:1.5rem;pointer-events:none;content:"";background-color:transparent;border:#adb5bd solid 1px;}
.custom-control-label::after{position:absolute;top:.09375rem;left:-4rem;display:block;width:1.5rem;height:1.5rem;content:"";background:no-repeat 50%/50% 50%;}
.custom-checkbox .custom-control-label::before{border-radius:.1875rem;}
.custom-checkbox .custom-control-input:checked~.custom-control-label::after{background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHZpZXdCb3g9JzAgMCA4IDgnPjxwYXRoIGZpbGw9JyNmZmYnIGQ9J002LjU2NC43NWwtMy41OSAzLjYxMi0xLjUzOC0xLjU1TDAgNC4yNiAyLjk3NCA3LjI1IDggMi4xOTN6Jy8+PC9zdmc+);}
.custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before{background-color:rgba(33,150,243,.5);}
.custom-control-label::before{transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
@media (prefers-reduced-motion:reduce){
.custom-control-label::before{transition:none;}
}
.d-none{display:none!important;}
@media (min-width:768px){
.d-md-inline-block{display:inline-block!important;}
}
.float-left{float:left!important;}
.float-none{float:none!important;}
.ml-auto{margin-left:auto!important;}
.font-weight-bold{font-weight:700!important;}
.text-white{color:#fff!important;}
@media print{
*,*::before,*::after{text-shadow:none!important;box-shadow:none!important;}
a:not(.btn){text-decoration:underline;}
img{page-break-inside:avoid;}
p,h2{orphans:3;widows:3;}
h2{page-break-after:avoid;}
}
.flag{display:inline-block;width:21px;height:15px;background-image:url(https://www.cloudtalk.io/dist/images/flags_new.png);box-shadow:0 2px 4px 0 rgba(35,38,57,.12);background-position:28px 20px;}
@media (-webkit-min-device-pixel-ratio:2),(min-resolution:192dpi){
.flag{background-image:url(https://www.cloudtalk.io/dist/images/flags_new@2x.png);background-size:294px 285px;}
}
.flag-DJ{background-position:-147px 0;}
.flag-DK{background-position:-147px -15px;}
.flag-UZ{background-position:-273px -195px;}
.flag-ZM{background-position:-210px -270px;}
.flag-ZW{background-position:-231px -270px;}
.container-fluid{max-width:1272px;padding-left:24px;padding-right:24px;}
.container-fluid .row{margin-left:-12px;margin-right:-12px;}
a:focus,a:active{color:#232639;}
.sep-bottom{margin-bottom:4rem;}
@media (min-width:970px){
.sep-bottom{margin-bottom:6rem;}
}
.sep-md-top{margin-top:3rem;}
@media (min-width:970px){
.sep-md-top{margin-top:4rem;}
}
.pad{padding-top:4rem;padding-bottom:4rem;}
@media (min-width:970px){
.pad{padding-top:6rem;padding-bottom:6rem;}
}
.section-label{color:#ff8a65;text-transform:uppercase;font-size:.8125rem;font-weight:700;}
h2{letter-spacing:-.3px;}
h2{margin-top:2rem;margin-bottom:2rem;}
.h2-description{margin-top:2rem;}
@media (max-width:969.98px){
h2{font-size:1.4375rem;margin-top:1rem;margin-bottom:1rem;}
.h2-description{margin-top:1rem;}
}
@media (max-width:767.98px){
.h2-description{margin-top:unset;}
}
.text-normal{font-size:.9375rem;}
.btn{font-size:.9375rem;text-transform:uppercase;box-shadow:0 .25rem 1.5rem rgba(0,0,0,.075);}
.btn:hover,.btn:focus,.btn:active{outline:none;outline-style:none;}
.btn-orange{background-color:#ff8a65;color:#fff;border-color:#ff8a65;}
.btn-orange:hover{background-color:#ffb198;color:#fff;border-color:#ffb198;}
.btn-orange:focus{color:#fff;background-color:#cb6549;border-color:#cb6549;}
.btn-orange:disabled{color:#212529;background-color:#ff8a65;border-color:#ff8a65;}
.dropdown-menu{background-color:#fff;box-shadow:0 .25rem 1rem 0 rgba(39,40,41,.09);border-radius:.1875rem;border-left:none;padding-top:.5rem;padding-bottom:.5rem;font-size:.9375rem;}
.dropdown-toggle:hover,.dropdown-toggle:focus{text-decoration:none;}
.dropdown-toggle::after{content:"";font-family:cloudtalk-icons;border:none;margin-left:.25rem;margin-right:.5rem;vertical-align:unset;line-height:.5rem;}
.custom-control-label::before{border:2px solid #dee2e6;}
form label{font-weight:700;color:#232639;}
form .custom-control-label{font-weight:400;color:unset;}
form .required-small{display:block;opacity:.54;margin-top:0;margin-bottom:2rem;}
@media (min-width:970px){
form .required-small{display:inline-block;float:right;margin-top:1rem;margin-bottom:1rem;}
}
form .required-small.float-none{float:none;margin-left:1rem;}
form .form-control{font-size:.9375rem;}
.form-light{color:#fff;}
.form-light .form-control{border-color:#fff default;background-color:#fff;}
.form-light label{color:unset;}
.form-light .custom-control .custom-control-label::before{border-color:#fff;}
.scrollable-dropdown{height:auto;max-height:200px;overflow-x:hidden;}
#callingCodeDropdown{display:-webkit-box;cursor:pointer;}
#callingCodeDropdown>i{vertical-align:middle;}
#registration-form-wrapper .form-group .input-group .form-control{height:auto;}
#registration-form-wrapper .form-group .custom-control-label{color:rgba(35,38,57,.54);}
#registration-form-wrapper .form-group .custom-control-label:before,#registration-form-wrapper .form-group .custom-control-label:after{left:-2.5rem;}
#registration-form-wrapper .form-group .custom-control{padding-left:2.5rem;}
#try-for-free::before{z-index:-1;content:"";position:absolute;top:0;left:0;width:100%;height:calc(100% - 20rem);


}
@media (min-width:970px){
}
#try-for-free a{color:inherit;font-weight:700;}
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
img{page-break-inside:avoid;}
h2,p{orphans:3;widows:3;}
h2{page-break-after:avoid;}
}
*,::after,::before{box-sizing:border-box;}
section{display:block;}
h2{margin-top:0;margin-bottom:.5rem;}
p{margin-top:0;margin-bottom:1rem;}
a{color:#007bff;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects;}
a:hover{color:#0056b3;text-decoration:underline;}
img{vertical-align:middle;border-style:none;}
a{-ms-touch-action:manipulation;touch-action:manipulation;}
h2{margin-bottom:.5rem;font-family:inherit;font-weight:500;line-height:1.2;color:inherit;}
h2{font-size:2rem;}
.container-fluid{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
.col-md-6{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width:768px){
.col-md-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
}
.btn{display:inline-block;font-weight:400;text-align:center;white-space:nowrap;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
.btn:focus,.btn:hover{text-decoration:none;}
.btn:focus{outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25);}
.btn:disabled{opacity:.65;}
.btn:not([disabled]):not(.disabled):active{background-image:none;}
*{margin:0;padding:0;-webkit-max-width:100%!important;max-width:100%!important;}
*{max-width:100%!important;}
h2{font-family:'Montserrat', sans-serif;font-weight:400;color:#343c55;line-height:1.4;letter-spacing:0.03rem;}
img{max-width:100%;max-height:100%;}
a{color:#b053ed;}
a,a:hover,a:focus,a:active{text-decoration:none;-webkit-transition-duration:500ms;-o-transition-duration:500ms;transition-duration:500ms;cursor:pointer!important;}
p{color:#726a84;font-size:18px;font-weight:300;letter-spacing:0.2px;margin-top:0;}
.row{margin:0px;}
.container-fluid{width:90%!important;}
.btn{cursor:pointer;}
@media all{
*,*::before,*::after{box-sizing:border-box;}
section{display:block;}
h2{margin-top:0;margin-bottom:0.5rem;}
p{margin-top:0;margin-bottom:1rem;}
h2{margin-bottom:0.5rem;font-weight:400;line-height:1.2;}
h2{font-size:1.8rem;}
@media (max-width:1200px){
h2{font-size:calc(1.305rem + 0.66vw);}
}
@media print{
*,*::before,*::after{text-shadow:none!important;box-shadow:none!important;}
p,h2{orphans:3;widows:3;}
h2{page-break-after:avoid;}
}
}
@media all{
*,*::before,*::after{box-sizing:border-box;}
section{display:block;}
h2{margin-top:0;margin-bottom:0.5rem;}
p{margin-top:0;margin-bottom:1rem;}
small{font-size:80%;}
a{color:#0071BD;text-decoration:none;background-color:transparent;}
a:hover{color:#004371;text-decoration:none;}
h2{margin-bottom:0.5rem;font-weight:400;line-height:1.2;}
h2{font-size:1.8rem;}
@media (max-width:1200px){
h2{font-size:calc(1.305rem + 0.66vw);}
}
small{font-size:80%;font-weight:300;}
.row{display:flex;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
@media print{
*,*::before,*::after{text-shadow:none!important;box-shadow:none!important;}
a:not(.btn){text-decoration:underline;}
p,h2{orphans:3;widows:3;}
h2{page-break-after:avoid;}
}
}
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
img{page-break-inside:avoid;}
h2,p{orphans:3;widows:3;}
h2{page-break-after:avoid;}
}
*,::after,::before{box-sizing:border-box;}
section{display:block;}
h2{margin-top:0;margin-bottom:.5rem;}
p{margin-top:0;margin-bottom:1rem;}
a{color:#007bff;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects;}
a:hover{color:#0056b3;text-decoration:underline;}
img{vertical-align:middle;border-style:none;}
a{-ms-touch-action:manipulation;touch-action:manipulation;}
h2{margin-bottom:.5rem;font-family:inherit;font-weight:500;line-height:1.2;color:inherit;}
h2{font-size:2rem;}
.container-fluid{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
.col-md-6{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width:768px){
.col-md-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
}
.btn{display:inline-block;font-weight:400;text-align:center;white-space:nowrap;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
.btn:focus,.btn:hover{text-decoration:none;}
.btn:focus{outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25);}
.btn:disabled{opacity:.65;}
.btn:not([disabled]):not(.disabled):active{background-image:none;}
*{margin:0;padding:0;-webkit-max-width:100%!important;max-width:100%!important;}
*{max-width:100%!important;}
h2{font-family:'Montserrat', sans-serif;font-weight:400;color:#343c55;line-height:1.4;letter-spacing:0.03rem;}
img{max-width:100%;max-height:100%;}
a{color:#b053ed;}
a,a:hover,a:focus,a:active{text-decoration:none;-webkit-transition-duration:500ms;-o-transition-duration:500ms;transition-duration:500ms;cursor:pointer!important;}
p{color:#726a84;font-size:18px;font-weight:300;letter-spacing:0.2px;margin-top:0;}
.row{margin:0px;}
.container-fluid{width:90%!important;}
.btn{cursor:pointer;}
 
</style>