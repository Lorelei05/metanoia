<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Test</title>
    </head>
<style>
    *,:before,:after {
    box-sizing: border-box;
    border-width: 0;
    border-style: solid;
    border-color: #e5e7eb
}
:before,:after {
    --tw-content: ""
}
html {
    line-height: 1.5;
    -webkit-text-size-adjust: 100%;
    -moz-tab-size: 4;
    -o-tab-size: 4;
    tab-size: 4;
    font-family: Inter var,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji";
    font-feature-settings: "cv02","cv03","cv04","cv11";
    font-variation-settings: normal
}
body {
    margin: 0;
    line-height: inherit
}
hr {
    height: 0;
    color: inherit;
    border-top-width: 1px
}
abbr:where([title]) {
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted
}
h1,h2,h3,h4,h5,h6 {
    font-size: inherit;
    font-weight: inherit
}
a {
    color: inherit;
    text-decoration: inherit
}

b,strong {
    font-weight: bolder
}

code,kbd,samp,pre {
    font-family: ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;
    font-size: 1em
}

small {
    font-size: 80%
}

sub,sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline
}

sub {
    bottom: -.25em
}

sup {
    top: -.5em
}

table {
    text-indent: 0;
    border-color: inherit;
    border-collapse: collapse
}

button,input,optgroup,select,textarea {
    font-family: inherit;
    font-size: 100%;
    font-weight: inherit;
    line-height: inherit;
    color: inherit;
    margin: 0;
    padding: 0
}

button,select {
    text-transform: none
}

button,[type=button],[type=reset],[type=submit] {
    -webkit-appearance: button;
    background-color: transparent;
    background-image: none
}

:-moz-focusring {
    outline: auto
}

:-moz-ui-invalid {
    box-shadow: none
}

progress {
    vertical-align: baseline
}

::-webkit-inner-spin-button,::-webkit-outer-spin-button {
    height: auto
}

[type=search] {
    -webkit-appearance: textfield;
    outline-offset: -2px
}

::-webkit-search-decoration {
    -webkit-appearance: none
}

::-webkit-file-upload-button {
    -webkit-appearance: button;
    font: inherit
}

summary {
    display: list-item
}

blockquote,dl,dd,h1,h2,h3,h4,h5,h6,hr,figure,p,pre {
    margin: 0
}

fieldset {
    margin: 0;
    padding: 0
}

legend {
    padding: 0
}

ol,ul,menu {
    list-style: none;
    margin: 0;
    padding: 0
}

textarea {
    resize: vertical
}

input::-moz-placeholder,textarea::-moz-placeholder {
    opacity: 1;
    color: #9ca3af
}

input::placeholder,textarea::placeholder {
    opacity: 1;
    color: #9ca3af
}

button,[role=button] {
    cursor: pointer
}

:disabled {
    cursor: default
}

img,svg,video,canvas,audio,iframe,embed,object {
    display: block;
    vertical-align: middle
}

img,video {
    max-width: 100%;
    height: auto
}

[hidden] {
    display: none
}

@font-face {
    font-family: Inter var;
    font-style: normal;
    font-weight: 100 900;
    font-display: swap;
    src: url(/build/assets/Inter-roman.var-d2d2d112.woff2?v=3.18) format("woff2");
    font-named-instance:Regular}

@font-face {
    font-family: Inter var;
    font-style: italic;
    font-weight: 100 900;
    font-display: swap;
    src: url(/build/assets/Inter-italic.var-072515d8.woff2?v=3.18) format("woff2");
    font-named-instance:Italic}

*,:before,:after {
    --tw-border-spacing-x: 0;
    --tw-border-spacing-y: 0;
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    --tw-pan-x: ;
    --tw-pan-y: ;
    --tw-pinch-zoom: ;
    --tw-scroll-snap-strictness: proximity;
    --tw-ordinal: ;
    --tw-slashed-zero: ;
    --tw-numeric-figure: ;
    --tw-numeric-spacing: ;
    --tw-numeric-fraction: ;
    --tw-ring-inset: ;
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgb(59 130 246 / .5);
    --tw-ring-offset-shadow: 0 0 #0000;
    --tw-ring-shadow: 0 0 #0000;
    --tw-shadow: 0 0 #0000;
    --tw-shadow-colored: 0 0 #0000;
    --tw-blur: ;
    --tw-brightness: ;
    --tw-contrast: ;
    --tw-grayscale: ;
    --tw-hue-rotate: ;
    --tw-invert: ;
    --tw-saturate: ;
    --tw-sepia: ;
    --tw-drop-shadow: ;
    --tw-backdrop-blur: ;
    --tw-backdrop-brightness: ;
    --tw-backdrop-contrast: ;
    --tw-backdrop-grayscale: ;
    --tw-backdrop-hue-rotate: ;
    --tw-backdrop-invert: ;
    --tw-backdrop-opacity: ;
    --tw-backdrop-saturate: ;
    --tw-backdrop-sepia:
}

::backdrop {
    --tw-border-spacing-x: 0;
    --tw-border-spacing-y: 0;
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    --tw-pan-x: ;
    --tw-pan-y: ;
    --tw-pinch-zoom: ;
    --tw-scroll-snap-strictness: proximity;
    --tw-ordinal: ;
    --tw-slashed-zero: ;
    --tw-numeric-figure: ;
    --tw-numeric-spacing: ;
    --tw-numeric-fraction: ;
    --tw-ring-inset: ;
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgb(59 130 246 / .5);
    --tw-ring-offset-shadow: 0 0 #0000;
    --tw-ring-shadow: 0 0 #0000;
    --tw-shadow: 0 0 #0000;
    --tw-shadow-colored: 0 0 #0000;
    --tw-blur: ;
    --tw-brightness: ;
    --tw-contrast: ;
    --tw-grayscale: ;
    --tw-hue-rotate: ;
    --tw-invert: ;
    --tw-saturate: ;
    --tw-sepia: ;
    --tw-drop-shadow: ;
    --tw-backdrop-blur: ;
    --tw-backdrop-brightness: ;
    --tw-backdrop-contrast: ;
    --tw-backdrop-grayscale: ;
    --tw-backdrop-hue-rotate: ;
    --tw-backdrop-invert: ;
    --tw-backdrop-opacity: ;
    --tw-backdrop-saturate: ;
    --tw-backdrop-sepia:
}

.container {
    width: 100%
}

@media (min-width: 640px) {
    .container {
        max-width:640px
    }
}

@media (min-width: 768px) {
    .container {
        max-width:768px
    }
}

@media (min-width: 1024px) {
    .container {
        max-width:1024px
    }
}

@media (min-width: 1280px) {
    .container {
        max-width:1280px
    }
}

@media (min-width: 1536px) {
    .container {
        max-width:1536px
    }
}

.prose {
    color: #4b5563;
    max-width: 65ch
}

.prose :where(p):not(:where([class~="not-prose"] *)) {
    margin-top: 1.25em;
    margin-bottom: 1.25em
}

.prose :where([class~="lead"]):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-lead);
    font-size: 1.25em;
    line-height: 1.6;
    margin-top: 1.2em;
    margin-bottom: 1.2em
}

.prose :where(a):not(:where([class~="not-prose"] *)) {
    color: #0891b2;
    text-decoration: none;
    font-weight: 500
}

.prose :where(strong):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-bold);
    font-weight: 600
}

.prose :where(a strong):not(:where([class~="not-prose"] *)) {
    color: inherit
}

.prose :where(blockquote strong):not(:where([class~="not-prose"] *)) {
    color: inherit
}

.prose :where(thead th strong):not(:where([class~="not-prose"] *)) {
    color: inherit
}

.prose :where(ol):not(:where([class~="not-prose"] *)) {
    list-style-type: decimal;
    margin-top: 1.25em;
    margin-bottom: 1.25em;
    padding-left: 1.625em
}

.prose :where(ol[type="A"]):not(:where([class~="not-prose"] *)) {
    list-style-type: upper-alpha
}

.prose :where(ol[type="a"]):not(:where([class~="not-prose"] *)) {
    list-style-type: lower-alpha
}

.prose :where(ol[type="A" s]):not(:where([class~="not-prose"] *)) {
    list-style-type: upper-alpha
}

.prose :where(ol[type="a" s]):not(:where([class~="not-prose"] *)) {
    list-style-type: lower-alpha
}

.prose :where(ol[type="I"]):not(:where([class~="not-prose"] *)) {
    list-style-type: upper-roman
}

.prose :where(ol[type="i"]):not(:where([class~="not-prose"] *)) {
    list-style-type: lower-roman
}

.prose :where(ol[type="I" s]):not(:where([class~="not-prose"] *)) {
    list-style-type: upper-roman
}

.prose :where(ol[type="i" s]):not(:where([class~="not-prose"] *)) {
    list-style-type: lower-roman
}

.prose :where(ol[type="1"]):not(:where([class~="not-prose"] *)) {
    list-style-type: decimal
}

.prose :where(ul):not(:where([class~="not-prose"] *)) {
    list-style-type: disc;
    margin-top: 1.25em;
    margin-bottom: 1.25em;
    padding-left: 1.625em
}

.prose :where(ol > li):not(:where([class~="not-prose"] *))::marker {
    font-weight: 400;
    color: var(--tw-prose-counters)
}

.prose :where(ul > li):not(:where([class~="not-prose"] *))::marker {
    color: var(--tw-prose-bullets)
}

.prose :where(hr):not(:where([class~="not-prose"] *)) {
    border-color: var(--tw-prose-hr);
    border-top-width: 1px;
    margin-top: 3em;
    margin-bottom: 3em
}

.prose :where(blockquote):not(:where([class~="not-prose"] *)) {
    font-weight: 500;
    font-style: italic;
    color: var(--tw-prose-quotes);
    border-left-width: .25rem;
    border-left-color: var(--tw-prose-quote-borders);
    quotes: "\201c""\201d""\2018""\2019";
    margin-top: 1.6em;
    margin-bottom: 1.6em;
    padding-left: 1em
}

.prose :where(blockquote p:first-of-type):not(:where([class~="not-prose"] *)):before {
    content:
}

.prose :where(blockquote p:last-of-type):not(:where([class~="not-prose"] *)):after {
    content:
}

.prose :where(h1):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-headings);
    font-weight: 800;
    font-size: 2.25em;
    margin-top: 0;
    margin-bottom: .8888889em;
    line-height: 1.1111111
}

.prose :where(h1 strong):not(:where([class~="not-prose"] *)) {
    font-weight: 900;
    color: inherit
}

.prose :where(h2):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-headings);
    font-weight: 700;
    font-size: 1.5em;
    margin-top: 2em;
    margin-bottom: 1em;
    line-height: 1.3333333
}

.prose :where(h2 strong):not(:where([class~="not-prose"] *)) {
    font-weight: 800;
    color: inherit
}

.prose :where(h3):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-headings);
    font-weight: 600;
    font-size: 1.25em;
    margin-top: 1.6em;
    margin-bottom: .6em;
    line-height: 1.6
}

.prose :where(h3 strong):not(:where([class~="not-prose"] *)) {
    font-weight: 700;
    color: inherit
}

.prose :where(h4):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-headings);
    font-weight: 600;
    margin-top: 1.5em;
    margin-bottom: .5em;
    line-height: 1.5
}

.prose :where(h4 strong):not(:where([class~="not-prose"] *)) {
    font-weight: 700;
    color: inherit
}

.prose :where(img):not(:where([class~="not-prose"] *)) {
    margin-top: 2em;
    margin-bottom: 2em
}

.prose :where(figure > *):not(:where([class~="not-prose"] *)) {
    margin-top: 0;
    margin-bottom: 0
}

.prose :where(figcaption):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-captions);
    font-size: .875em;
    line-height: 1.4285714;
    margin-top: .8571429em
}

.prose :where(code):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-code);
    font-weight: 600;
    font-size: .875em
}

.prose :where(code):not(:where([class~="not-prose"] *)):before {
    content: none
}

.prose :where(code):not(:where([class~="not-prose"] *)):after {
    content: none
}

.prose :where(a code):not(:where([class~="not-prose"] *)) {
    color: inherit
}

.prose :where(h1 code):not(:where([class~="not-prose"] *)) {
    color: inherit
}

.prose :where(h2 code):not(:where([class~="not-prose"] *)) {
    color: inherit;
    font-size: .875em
}

.prose :where(h3 code):not(:where([class~="not-prose"] *)) {
    color: inherit;
    font-size: .9em
}

.prose :where(h4 code):not(:where([class~="not-prose"] *)) {
    color: inherit
}

.prose :where(blockquote code):not(:where([class~="not-prose"] *)) {
    color: inherit
}

.prose :where(thead th code):not(:where([class~="not-prose"] *)) {
    color: inherit
}

.prose :where(pre):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-pre-code);
    background-color: var(--tw-prose-pre-bg);
    overflow-x: auto;
    font-weight: 400;
    font-size: .875em;
    line-height: 1.7142857;
    margin-top: 1.7142857em;
    margin-bottom: 1.7142857em;
    border-radius: .375rem;
    padding: .8571429em 1.1428571em
}

.prose :where(pre code):not(:where([class~="not-prose"] *)) {
    background-color: transparent;
    border-width: 0;
    border-radius: 0;
    padding: 0;
    font-weight: inherit;
    color: inherit;
    font-size: inherit;
    font-family: inherit;
    line-height: inherit
}

.prose :where(pre code):not(:where([class~="not-prose"] *)):before {
    content: none
}

.prose :where(pre code):not(:where([class~="not-prose"] *)):after {
    content: none
}

.prose :where(table):not(:where([class~="not-prose"] *)) {
    width: 100%;
    table-layout: auto;
    text-align: left;
    margin-top: 2em;
    margin-bottom: 2em;
    font-size: .875em;
    line-height: 1.7142857
}

.prose :where(thead):not(:where([class~="not-prose"] *)) {
    border-bottom-width: 1px;
    border-bottom-color: var(--tw-prose-th-borders)
}

.prose :where(thead th):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-headings);
    font-weight: 600;
    vertical-align: bottom;
    padding-right: .5714286em;
    padding-bottom: .5714286em;
    padding-left: .5714286em
}

.prose :where(tbody tr):not(:where([class~="not-prose"] *)) {
    border-bottom-width: 1px;
    border-bottom-color: var(--tw-prose-td-borders)
}

.prose :where(tbody tr:last-child):not(:where([class~="not-prose"] *)) {
    border-bottom-width: 0
}

.prose :where(tbody td):not(:where([class~="not-prose"] *)) {
    vertical-align: baseline
}

.prose :where(tfoot):not(:where([class~="not-prose"] *)) {
    border-top-width: 1px;
    border-top-color: var(--tw-prose-th-borders)
}

.prose :where(tfoot td):not(:where([class~="not-prose"] *)) {
    vertical-align: top
}

.prose {
    --tw-prose-body: #374151;
    --tw-prose-headings: #111827;
    --tw-prose-lead: #4b5563;
    --tw-prose-links: #111827;
    --tw-prose-bold: #111827;
    --tw-prose-counters: #6b7280;
    --tw-prose-bullets: #d1d5db;
    --tw-prose-hr: #e5e7eb;
    --tw-prose-quotes: #111827;
    --tw-prose-quote-borders: #e5e7eb;
    --tw-prose-captions: #6b7280;
    --tw-prose-code: #111827;
    --tw-prose-pre-code: #e5e7eb;
    --tw-prose-pre-bg: #1f2937;
    --tw-prose-th-borders: #d1d5db;
    --tw-prose-td-borders: #e5e7eb;
    --tw-prose-invert-body: #d1d5db;
    --tw-prose-invert-headings: #fff;
    --tw-prose-invert-lead: #9ca3af;
    --tw-prose-invert-links: #fff;
    --tw-prose-invert-bold: #fff;
    --tw-prose-invert-counters: #9ca3af;
    --tw-prose-invert-bullets: #4b5563;
    --tw-prose-invert-hr: #374151;
    --tw-prose-invert-quotes: #f3f4f6;
    --tw-prose-invert-quote-borders: #374151;
    --tw-prose-invert-captions: #9ca3af;
    --tw-prose-invert-code: #fff;
    --tw-prose-invert-pre-code: #d1d5db;
    --tw-prose-invert-pre-bg: rgb(0 0 0 / 50%);
    --tw-prose-invert-th-borders: #4b5563;
    --tw-prose-invert-td-borders: #374151;
    font-size: 1rem;
    line-height: 1.75
}

.prose :where(video):not(:where([class~="not-prose"] *)) {
    margin-top: 2em;
    margin-bottom: 2em
}

.prose :where(figure):not(:where([class~="not-prose"] *)) {
    margin-top: 2em;
    margin-bottom: 2em
}

.prose :where(li):not(:where([class~="not-prose"] *)) {
    margin-top: .5em;
    margin-bottom: .5em
}

.prose :where(ol > li):not(:where([class~="not-prose"] *)) {
    padding-left: .375em
}

.prose :where(ul > li):not(:where([class~="not-prose"] *)) {
    padding-left: .375em
}

.prose :where(.prose > ul > li p):not(:where([class~="not-prose"] *)) {
    margin-top: .75em;
    margin-bottom: .75em
}

.prose :where(.prose > ul > li > *:first-child):not(:where([class~="not-prose"] *)) {
    margin-top: 1.25em
}

.prose :where(.prose > ul > li > *:last-child):not(:where([class~="not-prose"] *)) {
    margin-bottom: 1.25em
}

.prose :where(.prose > ol > li > *:first-child):not(:where([class~="not-prose"] *)) {
    margin-top: 1.25em
}

.prose :where(.prose > ol > li > *:last-child):not(:where([class~="not-prose"] *)) {
    margin-bottom: 1.25em
}

.prose :where(ul ul,ul ol,ol ul,ol ol):not(:where([class~="not-prose"] *)) {
    margin-top: .75em;
    margin-bottom: .75em
}

.prose :where(hr + *):not(:where([class~="not-prose"] *)) {
    margin-top: 0
}

.prose :where(h2 + *):not(:where([class~="not-prose"] *)) {
    margin-top: 0
}

.prose :where(h3 + *):not(:where([class~="not-prose"] *)) {
    margin-top: 0
}

.prose :where(h4 + *):not(:where([class~="not-prose"] *)) {
    margin-top: 0
}

.prose :where(thead th:first-child):not(:where([class~="not-prose"] *)) {
    padding-left: 0
}

.prose :where(thead th:last-child):not(:where([class~="not-prose"] *)) {
    padding-right: 0
}

.prose :where(tbody td,tfoot td):not(:where([class~="not-prose"] *)) {
    padding: .5714286em
}

.prose :where(tbody td:first-child,tfoot td:first-child):not(:where([class~="not-prose"] *)) {
    padding-left: 0
}

.prose :where(tbody td:last-child,tfoot td:last-child):not(:where([class~="not-prose"] *)) {
    padding-right: 0
}

.prose :where(.prose > :first-child):not(:where([class~="not-prose"] *)) {
    margin-top: 0
}

.prose :where(.prose > :last-child):not(:where([class~="not-prose"] *)) {
    margin-bottom: 0
}

.prose :where(a:hover):not(:where([class~="not-prose"] *)) {
    color: #155e75
}

.prose :where(mark):not(:where([class~="not-prose"] *)) {
    color: #111827;
    background-color: #cffafe
}

.prose-sm {
    font-size: .875rem;
    line-height: 1.7142857
}

.prose-sm :where(p):not(:where([class~="not-prose"] *)) {
    margin-top: 1.1428571em;
    margin-bottom: 1.1428571em
}

.prose-sm :where([class~="lead"]):not(:where([class~="not-prose"] *)) {
    font-size: 1.2857143em;
    line-height: 1.5555556;
    margin-top: .8888889em;
    margin-bottom: .8888889em
}

.prose-sm :where(blockquote):not(:where([class~="not-prose"] *)) {
    margin-top: 1.3333333em;
    margin-bottom: 1.3333333em;
    padding-left: 1.1111111em
}

.prose-sm :where(h1):not(:where([class~="not-prose"] *)) {
    font-size: 2.1428571em;
    margin-top: 0;
    margin-bottom: .8em;
    line-height: 1.2
}

.prose-sm :where(h2):not(:where([class~="not-prose"] *)) {
    font-size: 1.4285714em;
    margin-top: 1.6em;
    margin-bottom: .8em;
    line-height: 1.4;
    scroll-margin-top: 1.6em
}

.prose-sm :where(h3):not(:where([class~="not-prose"] *)) {
    font-size: 1.2857143em;
    margin-top: 1.5555556em;
    margin-bottom: .4444444em;
    line-height: 1.5555556;
    scroll-margin-top: 1.5555556em
}

.prose-sm :where(h4):not(:where([class~="not-prose"] *)) {
    margin-top: 1.4285714em;
    margin-bottom: .5714286em;
    line-height: 1.4285714
}

.prose-sm :where(img):not(:where([class~="not-prose"] *)) {
    margin-top: 1.7142857em;
    margin-bottom: 1.7142857em
}

.prose-sm :where(video):not(:where([class~="not-prose"] *)) {
    margin-top: 1.7142857em;
    margin-bottom: 1.7142857em
}

.prose-sm :where(figure):not(:where([class~="not-prose"] *)) {
    margin-top: 1.7142857em;
    margin-bottom: 1.7142857em
}

.prose-sm :where(figure > *):not(:where([class~="not-prose"] *)) {
    margin-top: 0;
    margin-bottom: 0
}

.prose-sm :where(figcaption):not(:where([class~="not-prose"] *)) {
    font-size: .8571429em;
    line-height: 1.3333333;
    margin-top: .6666667em
}

.prose-sm :where(code):not(:where([class~="not-prose"] *)) {
    font-size: .8571429em
}

.prose-sm :where(h2 code):not(:where([class~="not-prose"] *)) {
    font-size: .9em
}

.prose-sm :where(h3 code):not(:where([class~="not-prose"] *)) {
    font-size: .8888889em
}

.prose-sm :where(pre):not(:where([class~="not-prose"] *)) {
    font-size: .8571429em;
    line-height: 1.692;
    margin-top: 1.6666667em;
    margin-bottom: 1.6666667em;
    border-radius: .5rem;
    padding: .6666667em 1em;
    padding: .875rem 1rem
}

.prose-sm :where(ol):not(:where([class~="not-prose"] *)) {
    margin-top: 1.1428571em;
    margin-bottom: 1.1428571em;
    padding-left: 1.5714286em
}

.prose-sm :where(ul):not(:where([class~="not-prose"] *)) {
    margin-top: 1.1428571em;
    margin-bottom: 1.1428571em;
    padding-left: 1.5714286em
}

.prose-sm :where(li):not(:where([class~="not-prose"] *)) {
    margin-top: .2857143em;
    margin-bottom: .2857143em
}

.prose-sm :where(ol > li):not(:where([class~="not-prose"] *)) {
    padding-left: .4285714em
}

.prose-sm :where(ul > li):not(:where([class~="not-prose"] *)) {
    padding-left: .4285714em
}

.prose-sm :where(.prose-sm > ul > li p):not(:where([class~="not-prose"] *)) {
    margin-top: .5714286em;
    margin-bottom: .5714286em
}

.prose-sm :where(.prose-sm > ul > li > *:first-child):not(:where([class~="not-prose"] *)) {
    margin-top: 1.1428571em
}

.prose-sm :where(.prose-sm > ul > li > *:last-child):not(:where([class~="not-prose"] *)) {
    margin-bottom: 1.1428571em
}

.prose-sm :where(.prose-sm > ol > li > *:first-child):not(:where([class~="not-prose"] *)) {
    margin-top: 1.1428571em
}

.prose-sm :where(.prose-sm > ol > li > *:last-child):not(:where([class~="not-prose"] *)) {
    margin-bottom: 1.1428571em
}

.prose-sm :where(ul ul,ul ol,ol ul,ol ol):not(:where([class~="not-prose"] *)) {
    margin-top: .5714286em;
    margin-bottom: .5714286em
}

.prose-sm :where(hr):not(:where([class~="not-prose"] *)) {
    margin-top: 2.8571429em;
    margin-bottom: 2.8571429em
}

.prose-sm :where(hr + *):not(:where([class~="not-prose"] *)) {
    margin-top: 0
}

.prose-sm :where(h2 + *):not(:where([class~="not-prose"] *)) {
    margin-top: 0
}

.prose-sm :where(h3 + *):not(:where([class~="not-prose"] *)) {
    margin-top: 0
}

.prose-sm :where(h4 + *):not(:where([class~="not-prose"] *)) {
    margin-top: 0
}

.prose-sm :where(table):not(:where([class~="not-prose"] *)) {
    font-size: .8571429em;
    line-height: 1.5
}

.prose-sm :where(thead th):not(:where([class~="not-prose"] *)) {
    padding-right: 1em;
    padding-bottom: .6666667em;
    padding-left: 1em
}

.prose-sm :where(thead th:first-child):not(:where([class~="not-prose"] *)) {
    padding-left: 0
}

.prose-sm :where(thead th:last-child):not(:where([class~="not-prose"] *)) {
    padding-right: 0
}

.prose-sm :where(tbody td,tfoot td):not(:where([class~="not-prose"] *)) {
    padding: .6666667em 1em
}

.prose-sm :where(tbody td:first-child,tfoot td:first-child):not(:where([class~="not-prose"] *)) {
    padding-left: 0
}

.prose-sm :where(tbody td:last-child,tfoot td:last-child):not(:where([class~="not-prose"] *)) {
    padding-right: 0
}

.prose-sm :where(.prose-sm > :first-child):not(:where([class~="not-prose"] *)) {
    margin-top: 0
}

.prose-sm :where(.prose-sm > :last-child):not(:where([class~="not-prose"] *)) {
    margin-bottom: 0
}

.prose-sm :where(pre code):not(:where([class~="not-prose"] *)) {
    font-size: .8125rem
}

.prose-slate {
    --tw-prose-body: #334155;
    --tw-prose-headings: #0f172a;
    --tw-prose-lead: #475569;
    --tw-prose-links: #0f172a;
    --tw-prose-bold: #0f172a;
    --tw-prose-counters: #64748b;
    --tw-prose-bullets: #cbd5e1;
    --tw-prose-hr: #e2e8f0;
    --tw-prose-quotes: #0f172a;
    --tw-prose-quote-borders: #e2e8f0;
    --tw-prose-captions: #64748b;
    --tw-prose-code: #0f172a;
    --tw-prose-pre-code: #e2e8f0;
    --tw-prose-pre-bg: #1e293b;
    --tw-prose-th-borders: #cbd5e1;
    --tw-prose-td-borders: #e2e8f0;
    --tw-prose-invert-body: #cbd5e1;
    --tw-prose-invert-headings: #fff;
    --tw-prose-invert-lead: #94a3b8;
    --tw-prose-invert-links: #fff;
    --tw-prose-invert-bold: #fff;
    --tw-prose-invert-counters: #94a3b8;
    --tw-prose-invert-bullets: #475569;
    --tw-prose-invert-hr: #334155;
    --tw-prose-invert-quotes: #f1f5f9;
    --tw-prose-invert-quote-borders: #334155;
    --tw-prose-invert-captions: #94a3b8;
    --tw-prose-invert-code: #fff;
    --tw-prose-invert-pre-code: #cbd5e1;
    --tw-prose-invert-pre-bg: rgb(0 0 0 / 50%);
    --tw-prose-invert-th-borders: #475569;
    --tw-prose-invert-td-borders: #334155
}

.prose-indigo {
    --tw-prose-links: #4f46e5;
    --tw-prose-invert-links: #6366f1
}

.form-input,.form-textarea,.form-select,.form-multiselect {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-color: #fff;
    border-color: #6b7280;
    border-width: 1px;
    border-radius: 0;
    padding: .5rem .75rem;
    font-size: 1rem;
    line-height: 1.5rem;
    --tw-shadow: 0 0 #0000
}

.form-input:focus,.form-textarea:focus,.form-select:focus,.form-multiselect:focus {
    outline: 2px solid transparent;
    outline-offset: 2px;
    --tw-ring-inset: var(--tw-empty, );
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: #2563eb;
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow);
    border-color: #2563eb
}

.form-input::-moz-placeholder,.form-textarea::-moz-placeholder {
    color: #6b7280;
    opacity: 1
}

.form-input::placeholder,.form-textarea::placeholder {
    color: #6b7280;
    opacity: 1
}

.form-input::-webkit-datetime-edit-fields-wrapper {
    padding: 0
}

.form-input::-webkit-date-and-time-value {
    min-height: 1.5em
}

.form-input::-webkit-datetime-edit,.form-input::-webkit-datetime-edit-year-field,.form-input::-webkit-datetime-edit-month-field,.form-input::-webkit-datetime-edit-day-field,.form-input::-webkit-datetime-edit-hour-field,.form-input::-webkit-datetime-edit-minute-field,.form-input::-webkit-datetime-edit-second-field,.form-input::-webkit-datetime-edit-millisecond-field,.form-input::-webkit-datetime-edit-meridiem-field {
    padding-top: 0;
    padding-bottom: 0
}

.form-select {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
    background-position: right .5rem center;
    background-repeat: no-repeat;
    background-size: 1.5em 1.5em;
    padding-right: 2.5rem;
    -webkit-print-color-adjust: exact;
    print-color-adjust: exact
}

.form-checkbox,.form-radio {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    padding: 0;
    -webkit-print-color-adjust: exact;
    print-color-adjust: exact;
    display: inline-block;
    vertical-align: middle;
    background-origin: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    flex-shrink: 0;
    height: 1rem;
    width: 1rem;
    color: #2563eb;
    background-color: #fff;
    border-color: #6b7280;
    border-width: 1px;
    --tw-shadow: 0 0 #0000
}

.form-checkbox {
    border-radius: 0
}

.form-checkbox:focus,.form-radio:focus {
    outline: 2px solid transparent;
    outline-offset: 2px;
    --tw-ring-inset: var(--tw-empty, );
    --tw-ring-offset-width: 2px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: #2563eb;
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)
}

.form-checkbox:checked,.form-radio:checked {
    border-color: transparent;
    background-color: currentColor;
    background-size: 100% 100%;
    background-position: center;
    background-repeat: no-repeat
}

.form-checkbox:checked {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e")
}

.form-checkbox:checked:hover,.form-checkbox:checked:focus,.form-radio:checked:hover,.form-radio:checked:focus {
    border-color: transparent;
    background-color: currentColor
}

.form-checkbox:indeterminate {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 16'%3e%3cpath stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8h8'/%3e%3c/svg%3e");
    border-color: transparent;
    background-color: currentColor;
    background-size: 100% 100%;
    background-position: center;
    background-repeat: no-repeat
}

.form-checkbox:indeterminate:hover,.form-checkbox:indeterminate:focus {
    border-color: transparent;
    background-color: currentColor
}

code[class*=language-],pre[class*=language-] {
    background-color: #1e293b
}

.token.number,.token.boolean,.token.deleted {
    --tw-text-opacity: 1;
    color: rgb(248 113 113 / var(--tw-text-opacity))
}

.token.tag,.token.class-name,.token.selector,.token.selector .class,.token.selector.class,.token.function {
    color: #f472b6
}

.token.attr-name,.token.keyword,.token.rule,.token.pseudo-class,.token.important {
    color: #cbd5e1
}

.token.attr-value,.token.class,.token.string,.token.property {
    color: #7dd3fc
}

.token.punctuation,.token.attr-equals {
    color: #64748b
}

.token.unit,.language-css .token.function {
    color: #a5f3fc
}

.token.comment,.token.module,.token.operator,.token.combinator {
    color: #94a3b8
}

.token.comment {
    font-style: italic
}

.language-diff {
    color: #9ca3af!important
}

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0,0,0,0);
    white-space: nowrap;
    border-width: 0
}

.pointer-events-none {
    pointer-events: none
}

.pointer-events-auto {
    pointer-events: auto
}

.visible {
    visibility: visible
}

.static {
    position: static
}

.fixed {
    position: fixed
}

.absolute {
    position: absolute
}

.relative {
    position: relative
}

.sticky {
    position: sticky
}

.-inset-2 {
    inset: -.5rem
}

.-inset-2\.5 {
    inset: -.625rem
}

.-inset-px {
    inset: -1px
}

.inset-0 {
    inset: 0px
}

.-inset-x-2 {
    left: -.5rem;
    right: -.5rem
}

.-inset-x-2\.5 {
    left: -.625rem;
    right: -.625rem
}

.-inset-x-8 {
    left: -2rem;
    right: -2rem
}

.-inset-y-8 {
    top: -2rem;
    bottom: -2rem
}

.inset-x-0 {
    left: 0px;
    right: 0px
}

.inset-y-0 {
    top: 0px;
    bottom: 0px
}

.-bottom-12 {
    bottom: -3rem
}

.-bottom-16 {
    bottom: -4rem
}

.-bottom-2 {
    bottom: -.5rem
}

.-bottom-2\.5 {
    bottom: -.625rem
}

.-bottom-8 {
    bottom: -2rem
}

.-bottom-px {
    bottom: -1px
}

.-left-1 {
    left: -.25rem
}

.-left-12 {
    left: -3rem
}

.-left-2 {
    left: -.5rem
}

.-left-4 {
    left: -1rem
}

.-left-48 {
    left: -12rem
}

.-left-8 {
    left: -2rem
}

.-left-\[calc\(1rem\+55vw\)\] {
    left: calc((1rem + 55vw)*-1)
}

.-left-px {
    left: -1px
}

.-right-1 {
    right: -.25rem
}

.-right-12 {
    right: -3rem
}

.-right-2 {
    right: -.5rem
}

.-right-2\/3 {
    right: -66.666667%
}

.-right-4 {
    right: -1rem
}

.-right-8 {
    right: -2rem
}

.-right-\[95\%\] {
    right: -95%
}

.-right-px {
    right: -1px
}

.-top-0 {
    top: -0px
}

.-top-0\.5 {
    top: -.125rem
}

.-top-12 {
    top: -3rem
}

.-top-2 {
    top: -.5rem
}

.-top-20 {
    top: -5rem
}

.-top-3 {
    top: -.75rem
}

.-top-4 {
    top: -1rem
}

.-top-6 {
    top: -1.5rem
}

.-top-72 {
    top: -18rem
}

.-top-8 {
    top: -2rem
}

.-top-\[1\.0625rem\] {
    top: -1.0625rem
}

.-top-\[1rem\] {
    top: -1rem
}

.-top-\[7rem\] {
    top: -7rem
}

.-top-full {
    top: -100%
}

.-top-px {
    top: -1px
}

.bottom-0 {
    bottom: 0px
}

.bottom-14 {
    bottom: 3.5rem
}

.bottom-2\/3 {
    bottom: 66.666667%
}

.bottom-\[40\%\] {
    bottom: 40%
}

.bottom-full {
    bottom: 100%
}

.left-0 {
    left: 0px
}

.left-1\/2 {
    left: 50%
}

.left-11 {
    left: 2.75rem
}

.left-12 {
    left: 3rem
}

.left-16 {
    left: 4rem
}

.left-3 {
    left: .75rem
}

.left-40 {
    left: 10rem
}

.left-\[21\.875rem\] {
    left: 21.875rem
}

.left-full {
    left: 100%
}

.right-0 {
    right: 0px
}

.right-10 {
    right: 2.5rem
}

.right-16 {
    right: 4rem
}

.right-3 {
    right: .75rem
}

.right-3\.5 {
    right: .875rem
}

.right-4 {
    right: 1rem
}

.right-6 {
    right: 1.5rem
}

.top-0 {
    top: 0px
}

.top-2 {
    top: .5rem
}

.top-2\.5 {
    top: .625rem
}

.top-3 {
    top: .75rem
}

.top-4 {
    top: 1rem
}

.top-5 {
    top: 1.25rem
}

.top-8 {
    top: 2rem
}

.top-\[calc\(100\%-1px\)\] {
    top: calc(100% - 1px)
}

.top-full {
    top: 100%
}

.top-px {
    top: 1px
}

.z-0 {
    z-index: 0
}

.z-10 {
    z-index: 10
}

.z-20 {
    z-index: 20
}

.z-30 {
    z-index: 30
}

.z-40 {
    z-index: 40
}

.z-50 {
    z-index: 50
}

.order-1 {
    order: 1
}

.order-first {
    order: -9999
}

.order-last {
    order: 9999
}

.col-span-10 {
    grid-column: span 10 / span 10
}

.col-span-2 {
    grid-column: span 2 / span 2
}

.col-span-3 {
    grid-column: span 3 / span 3
}

.col-start-1 {
    grid-column-start: 1
}

.row-start-1 {
    grid-row-start: 1
}

.row-start-2 {
    grid-row-start: 2
}

.row-start-3 {
    grid-row-start: 3
}

.row-start-4 {
    grid-row-start: 4
}

.row-start-5 {
    grid-row-start: 5
}

.-m-\[13px\] {
    margin: -13px
}

.-mx-1 {
    margin-left: -.25rem;
    margin-right: -.25rem
}

.-mx-4 {
    margin-left: -1rem;
    margin-right: -1rem
}

.-mx-5 {
    margin-left: -1.25rem;
    margin-right: -1.25rem
}

.-my-1 {
    margin-top: -.25rem;
    margin-bottom: -.25rem
}

.-my-2 {
    margin-top: -.5rem;
    margin-bottom: -.5rem
}

.-my-2\.5 {
    margin-top: -.625rem;
    margin-bottom: -.625rem
}

.-my-\[0\.3125rem\] {
    margin-top: -.3125rem;
    margin-bottom: -.3125rem
}

.mx-1 {
    margin-left: .25rem;
    margin-right: .25rem
}

.mx-3 {
    margin-left: .75rem;
    margin-right: .75rem
}

.mx-6 {
    margin-left: 1.5rem;
    margin-right: 1.5rem
}

.mx-auto {
    margin-left: auto;
    margin-right: auto
}

.my-12 {
    margin-top: 3rem;
    margin-bottom: 3rem
}

.my-20 {
    margin-top: 5rem;
    margin-bottom: 5rem
}

.my-4 {
    margin-top: 1rem;
    margin-bottom: 1rem
}

.-mb-32 {
    margin-bottom: -8rem
}

.-mb-36 {
    margin-bottom: -9rem
}

.-mb-4 {
    margin-bottom: -1rem
}

.-mb-6 {
    margin-bottom: -1.5rem
}

.-mb-8 {
    margin-bottom: -2rem
}

.-mb-px {
    margin-bottom: -1px
}

.-ml-1 {
    margin-left: -.25rem
}

.-ml-2 {
    margin-left: -.5rem
}

.-ml-48 {
    margin-left: -12rem
}

.-ml-\[100\%\] {
    margin-left: -100%
}

.-ml-\[16rem\] {
    margin-left: -16rem
}

.-ml-\[32rem\] {
    margin-left: -32rem
}

.-ml-\[39rem\] {
    margin-left: -39rem
}

.-ml-\[40rem\] {
    margin-left: -40rem
}

.-ml-\[47\.5rem\] {
    margin-left: -47.5rem
}

.-ml-\[48rem\] {
    margin-left: -48rem
}

.-ml-\[55vw\] {
    margin-left: -55vw
}

.-mr-0 {
    margin-right: -0px
}

.-mr-0\.5 {
    margin-right: -.125rem
}

.-mr-1 {
    margin-right: -.25rem
}

.-mr-\[4\.625rem\] {
    margin-right: -4.625rem
}

.-mt-2 {
    margin-top: -.5rem
}

.-mt-3 {
    margin-top: -.75rem
}

.-mt-5 {
    margin-top: -1.25rem
}

.-mt-6 {
    margin-top: -1.5rem
}

.-mt-\[5\.75rem\] {
    margin-top: -5.75rem
}

.-mt-px {
    margin-top: -1px
}

.mb-1 {
    margin-bottom: .25rem
}

.mb-1\.5 {
    margin-bottom: .375rem
}

.mb-10 {
    margin-bottom: 2.5rem
}

.mb-12 {
    margin-bottom: 3rem
}

.mb-16 {
    margin-bottom: 4rem
}

.mb-2 {
    margin-bottom: .5rem
}

.mb-2\.5 {
    margin-bottom: .625rem
}

.mb-4 {
    margin-bottom: 1rem
}

.mb-6 {
    margin-bottom: 1.5rem
}

.ml-0 {
    margin-left: 0
}

.ml-0\.5 {
    margin-left: .125rem
}

.ml-1 {
    margin-left: .25rem
}

.ml-1\.5 {
    margin-left: .375rem
}

.ml-2 {
    margin-left: .5rem
}

.ml-2\.5 {
    margin-left: .625rem
}

.ml-3 {
    margin-left: .75rem
}

.ml-4 {
    margin-left: 1rem
}

.ml-5 {
    margin-left: 1.25rem
}

.ml-6 {
    margin-left: 1.5rem
}

.ml-8 {
    margin-left: 2rem
}

.ml-auto {
    margin-left: auto
}

.mr-1 {
    margin-right: .25rem
}

.mr-2 {
    margin-right: .5rem
}

.mr-2\.5 {
    margin-right: .625rem
}

.mr-3 {
    margin-right: .75rem
}

.mr-4 {
    margin-right: 1rem
}

.mr-auto {
    margin-right: auto
}

.mt-0 {
    margin-top: 0
}

.mt-0\.5 {
    margin-top: .125rem
}

.mt-1 {
    margin-top: .25rem
}

.mt-1\.5 {
    margin-top: .375rem
}

.mt-10 {
    margin-top: 2.5rem
}

.mt-12 {
    margin-top: 3rem
}

.mt-14 {
    margin-top: 3.5rem
}

.mt-16 {
    margin-top: 4rem
}

.mt-2 {
    margin-top: .5rem
}

.mt-2\.5 {
    margin-top: .625rem
}

.mt-20 {
    margin-top: 5rem
}

.mt-3 {
    margin-top: .75rem
}

.mt-32 {
    margin-top: 8rem
}

.mt-4 {
    margin-top: 1rem
}

.mt-5 {
    margin-top: 1.25rem
}

.mt-52 {
    margin-top: 13rem
}

.mt-6 {
    margin-top: 1.5rem
}

.mt-8 {
    margin-top: 2rem
}

.mt-9 {
    margin-top: 2.25rem
}

.mt-px {
    margin-top: 1px
}

.block {
    display: block
}

.inline-block {
    display: inline-block
}

.inline {
    display: inline
}

.flex {
    display: flex
}

.inline-flex {
    display: inline-flex
}

.table {
    display: table
}

.grid {
    display: grid
}

.contents {
    display: contents
}

.hidden {
    display: none
}

.aspect-\[1216\/640\] {
    aspect-ratio: 1216/640
}

.aspect-\[2\/1\] {
    aspect-ratio: 2/1
}

.aspect-\[280\/190\] {
    aspect-ratio: 280/190
}

.aspect-\[384\/246\] {
    aspect-ratio: 384/246
}

.aspect-\[853\/682\] {
    aspect-ratio: 853/682
}

.h-1 {
    height: .25rem
}

.h-10 {
    height: 2.5rem
}

.h-11 {
    height: 2.75rem
}

.h-12 {
    height: 3rem
}

.h-14 {
    height: 3.5rem
}

.h-2 {
    height: .5rem
}

.h-24 {
    height: 6rem
}

.h-3 {
    height: .75rem
}

.h-3\.5 {
    height: .875rem
}

.h-4 {
    height: 1rem
}

.h-5 {
    height: 1.25rem
}

.h-6 {
    height: 1.5rem
}

.h-7 {
    height: 1.75rem
}

.h-8 {
    height: 2rem
}

.h-9 {
    height: 2.25rem
}

.h-96 {
    height: 24rem
}

.h-\[0\.5625rem\] {
    height: .5625rem
}

.h-\[1\.125rem\] {
    height: 1.125rem
}

.h-\[12rem\] {
    height: 12rem
}

.h-\[16\.6\%\] {
    height: 16.6%
}

.h-\[2px\] {
    height: 2px
}

.h-\[404px\] {
    height: 404px
}

.h-\[46\.375rem\] {
    height: 46.375rem
}

.h-auto {
    height: auto
}

.h-full {
    height: 100%
}

.h-px {
    height: 1px
}

.max-h-\[18\.375rem\] {
    max-height: 18.375rem
}

.min-h-full {
    min-height: 100%
}

.w-0 {
    width: 0px
}

.w-1 {
    width: .25rem
}

.w-1\.5 {
    width: .375rem
}

.w-1\/3 {
    width: 33.333333%
}

.w-10 {
    width: 2.5rem
}

.w-11 {
    width: 2.75rem
}

.w-12 {
    width: 3rem
}

.w-14 {
    width: 3.5rem
}

.w-2\/5 {
    width: 40%
}

.w-3 {
    width: .75rem
}

.w-3\.5 {
    width: .875rem
}

.w-36 {
    width: 9rem
}

.w-4 {
    width: 1rem
}

.w-44 {
    width: 11rem
}

.w-5 {
    width: 1.25rem
}

.w-56 {
    width: 14rem
}

.w-6 {
    width: 1.5rem
}

.w-60 {
    width: 15rem
}

.w-64 {
    width: 16rem
}

.w-8 {
    width: 2rem
}

.w-80 {
    width: 20rem
}

.w-9 {
    width: 2.25rem
}

.w-96 {
    width: 24rem
}

.w-\[0\.5625rem\] {
    width: .5625rem
}

.w-\[110vw\] {
    width: 110vw
}

.w-\[113\.125rem\] {
    width: 113.125rem
}

.w-\[122\.5rem\] {
    width: 122.5rem
}

.w-\[124\.125rem\] {
    width: 124.125rem
}

.w-\[163\.125rem\] {
    width: 163.125rem
}

.w-\[19\.875rem\] {
    width: 19.875rem
}

.w-\[21rem\] {
    width: 21rem
}

.w-\[23\.5625rem\] {
    width: 23.5625rem
}

.w-\[24\.125rem\] {
    width: 24.125rem
}

.w-\[24\.5rem\] {
    width: 24.5rem
}

.w-\[25\.625rem\] {
    width: 25.625rem
}

.w-\[28\.125rem\] {
    width: 28.125rem
}

.w-\[30\.25rem\] {
    width: 30.25rem
}

.w-\[336px\] {
    width: 336px
}

.w-\[41rem\] {
    width: 41rem
}

.w-\[60\.4375rem\] {
    width: 60.4375rem
}

.w-\[90\.4375rem\] {
    width: 90.4375rem
}

.w-\[min\(20rem\,calc\(100vw-theme\(spacing\.10\)\)\)\] {
    width: min(20rem,calc(100vw - 2.5rem))
}

.w-auto {
    width: auto
}

.w-full {
    width: 100%
}

.w-max {
    width: -moz-max-content;
    width: max-content
}

.w-min {
    width: -moz-min-content;
    width: min-content
}

.w-px {
    width: 1px
}

.min-w-0 {
    min-width: 0rem
}

.min-w-\[1360px\] {
    min-width: 1360px
}

.min-w-\[1rem\] {
    min-width: 1rem
}

.min-w-full {
    min-width: 100%
}

.min-w-max {
    min-width: -moz-max-content;
    min-width: max-content
}

.min-w-min {
    min-width: -moz-min-content;
    min-width: min-content
}

.max-w-0 {
    max-width: 0rem
}

.max-w-2xl {
    max-width: 42rem
}

.max-w-3xl {
    max-width: 48rem
}

.max-w-4xl {
    max-width: 56rem
}

.max-w-5xl {
    max-width: 64rem
}

.max-w-7xl {
    max-width: 80rem
}

.max-w-\[28\.75rem\] {
    max-width: 28.75rem
}

.max-w-\[36rem\] {
    max-width: 36rem
}

.max-w-\[37\.5rem\] {
    max-width: 37.5rem
}

.max-w-\[40rem\] {
    max-width: 40rem
}

.max-w-\[45rem\] {
    max-width: 45rem
}

.max-w-\[54rem\] {
    max-width: 54rem
}

.max-w-\[853px\] {
    max-width: 853px
}

.max-w-container {
    max-width: 85rem
}

.max-w-lg {
    max-width: 32rem
}

.max-w-max {
    max-width: -moz-max-content;
    max-width: max-content
}

.max-w-md {
    max-width: 28rem
}

.max-w-min {
    max-width: -moz-min-content;
    max-width: min-content
}

.max-w-none {
    max-width: none
}

.max-w-screen-xl {
    max-width: 1280px
}

.max-w-sm {
    max-width: 24rem
}

.max-w-xl {
    max-width: 36rem
}

.flex-1 {
    flex: 1 1 0%
}

.flex-auto {
    flex: 1 1 auto
}

.flex-none {
    flex: none
}

.flex-shrink-0 {
    flex-shrink: 0
}

.shrink {
    flex-shrink: 1
}

.shrink-0 {
    flex-shrink: 0
}

.grow {
    flex-grow: 1
}

.origin-bottom {
    transform-origin: bottom
}

.origin-top {
    transform-origin: top
}

.origin-top-right {
    transform-origin: top right
}

.-translate-y-2 {
    --tw-translate-y: -.5rem;
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.translate-x-0 {
    --tw-translate-x: 0px;
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.translate-x-4 {
    --tw-translate-x: 1rem;
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.translate-x-5 {
    --tw-translate-x: 1.25rem;
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.translate-x-\[min\(20rem\,calc\(100vw-theme\(spacing\.10\)\)\)\] {
    --tw-translate-x: min(20rem,calc(100vw - 2.5rem));
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.translate-y-0 {
    --tw-translate-y: 0px;
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.translate-y-0\.5 {
    --tw-translate-y: .125rem;
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.translate-y-\[7\.5rem\] {
    --tw-translate-y: 7.5rem;
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.rotate-180 {
    --tw-rotate: 180deg;
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.rotate-90 {
    --tw-rotate: 90deg;
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.rotate-\[-8deg\] {
    --tw-rotate: -8deg;
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.scale-100 {
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.scale-95 {
    --tw-scale-x: .95;
    --tw-scale-y: .95;
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.scale-\[calc\(204\/299\)\] {
    --tw-scale-x: calc(204 / 299);
    --tw-scale-y: calc(204 / 299);
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.-scale-x-100 {
    --tw-scale-x: -1;
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.transform,.transform-cpu {
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

@keyframes spin {
    to {
        transform: rotate(360deg)
    }
}

.animate-spin {
    animation: spin 1s linear infinite
}

.cursor-ew-resize {
    cursor: ew-resize
}

.cursor-pointer {
    cursor: pointer
}

.select-none {
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none
}

.select-all {
    -webkit-user-select: all;
    -moz-user-select: all;
    user-select: all
}

.resize {
    resize: both
}

.scroll-m-20 {
    scroll-margin: 5rem
}

.scroll-mt-12 {
    scroll-margin-top: 3rem
}

.scroll-mt-28 {
    scroll-margin-top: 7rem
}

.appearance-none {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none
}

.grid-cols-1 {
    grid-template-columns: repeat(1,minmax(0,1fr))
}

.grid-cols-10 {
    grid-template-columns: repeat(10,minmax(0,1fr))
}

.grid-cols-2 {
    grid-template-columns: repeat(2,minmax(0,1fr))
}

.grid-cols-5 {
    grid-template-columns: repeat(5,minmax(0,1fr))
}

.grid-cols-\[1fr\,auto\] {
    grid-template-columns: 1fr auto
}

.grid-cols-\[repeat\(auto-fill\,minmax\(12rem\,1fr\)\)\] {
    grid-template-columns: repeat(auto-fill,minmax(12rem,1fr))
}

.flex-col {
    flex-direction: column
}

.flex-wrap {
    flex-wrap: wrap
}

.place-items-center {
    place-items: center
}

.items-start {
    align-items: flex-start
}

.items-end {
    align-items: flex-end
}

.items-center {
    align-items: center
}

.items-baseline {
    align-items: baseline
}

.justify-end {
    justify-content: flex-end
}

.justify-center {
    justify-content: center
}

.justify-between {
    justify-content: space-between
}

.gap-2 {
    gap: .5rem
}

.gap-3 {
    gap: .75rem
}

.gap-4 {
    gap: 1rem
}

.gap-5 {
    gap: 1.25rem
}

.gap-8 {
    gap: 2rem
}

.gap-x-14 {
    -moz-column-gap: 3.5rem;
    column-gap: 3.5rem
}

.gap-x-4 {
    -moz-column-gap: 1rem;
    column-gap: 1rem
}

.gap-x-6 {
    -moz-column-gap: 1.5rem;
    column-gap: 1.5rem
}

.gap-x-8 {
    -moz-column-gap: 2rem;
    column-gap: 2rem
}

.gap-y-10 {
    row-gap: 2.5rem
}

.gap-y-14 {
    row-gap: 3.5rem
}

.gap-y-16 {
    row-gap: 4rem
}

.gap-y-6 {
    row-gap: 1.5rem
}

.space-x-1>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(.25rem * var(--tw-space-x-reverse));
    margin-left: calc(.25rem * calc(1 - var(--tw-space-x-reverse)))
}

.space-x-10>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(2.5rem * var(--tw-space-x-reverse));
    margin-left: calc(2.5rem * calc(1 - var(--tw-space-x-reverse)))
}

.space-x-2>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(.5rem * var(--tw-space-x-reverse));
    margin-left: calc(.5rem * calc(1 - var(--tw-space-x-reverse)))
}

.space-x-2\.5>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(.625rem * var(--tw-space-x-reverse));
    margin-left: calc(.625rem * calc(1 - var(--tw-space-x-reverse)))
}

.space-x-3>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(.75rem * var(--tw-space-x-reverse));
    margin-left: calc(.75rem * calc(1 - var(--tw-space-x-reverse)))
}

.space-x-4>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(1rem * var(--tw-space-x-reverse));
    margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)))
}

.space-x-6>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(1.5rem * var(--tw-space-x-reverse));
    margin-left: calc(1.5rem * calc(1 - var(--tw-space-x-reverse)))
}

.space-x-8>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(2rem * var(--tw-space-x-reverse));
    margin-left: calc(2rem * calc(1 - var(--tw-space-x-reverse)))
}

.space-y-1>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(.25rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(.25rem * var(--tw-space-y-reverse))
}

.space-y-10>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(2.5rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(2.5rem * var(--tw-space-y-reverse))
}

.space-y-12>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(3rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(3rem * var(--tw-space-y-reverse))
}

.space-y-16>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(4rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(4rem * var(--tw-space-y-reverse))
}

.space-y-2>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(.5rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(.5rem * var(--tw-space-y-reverse))
}

.space-y-20>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(5rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(5rem * var(--tw-space-y-reverse))
}

.space-y-24>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(6rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(6rem * var(--tw-space-y-reverse))
}

.space-y-3>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(.75rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(.75rem * var(--tw-space-y-reverse))
}

.space-y-4>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(1rem * var(--tw-space-y-reverse))
}

.space-y-6>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(1.5rem * var(--tw-space-y-reverse))
}

.space-y-8>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(2rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(2rem * var(--tw-space-y-reverse))
}

.divide-x>:not([hidden])~:not([hidden]) {
    --tw-divide-x-reverse: 0;
    border-right-width: calc(1px * var(--tw-divide-x-reverse));
    border-left-width: calc(1px * calc(1 - var(--tw-divide-x-reverse)))
}

.divide-y>:not([hidden])~:not([hidden]) {
    --tw-divide-y-reverse: 0;
    border-top-width: calc(1px * calc(1 - var(--tw-divide-y-reverse)));
    border-bottom-width: calc(1px * var(--tw-divide-y-reverse))
}

.divide-gray-100>:not([hidden])~:not([hidden]) {
    --tw-divide-opacity: 1;
    border-color: rgb(243 244 246 / var(--tw-divide-opacity))
}

.divide-gray-200>:not([hidden])~:not([hidden]) {
    --tw-divide-opacity: 1;
    border-color: rgb(229 231 235 / var(--tw-divide-opacity))
}

.divide-slate-100>:not([hidden])~:not([hidden]) {
    --tw-divide-opacity: 1;
    border-color: rgb(241 245 249 / var(--tw-divide-opacity))
}

.divide-slate-200>:not([hidden])~:not([hidden]) {
    --tw-divide-opacity: 1;
    border-color: rgb(226 232 240 / var(--tw-divide-opacity))
}

.divide-slate-400\/20>:not([hidden])~:not([hidden]) {
    border-color: #94a3b833
}

.divide-slate-700\/10>:not([hidden])~:not([hidden]) {
    border-color: #3341551a
}

.divide-slate-900\/10>:not([hidden])~:not([hidden]) {
    border-color: #0f172a1a
}

.divide-slate-900\/5>:not([hidden])~:not([hidden]) {
    border-color: #0f172a0d
}

.overflow-auto {
    overflow: auto
}

.overflow-hidden {
    overflow: hidden
}

.overflow-visible {
    overflow: visible
}

.overflow-x-auto {
    overflow-x: auto
}

.overflow-y-auto {
    overflow-y: auto
}

.truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap
}

.whitespace-nowrap {
    white-space: nowrap
}

.rounded {
    border-radius: .25rem
}

.rounded-2xl {
    border-radius: 1rem
}

.rounded-3xl {
    border-radius: 1.5rem
}

.rounded-\[10px\] {
    border-radius: 10px
}

.rounded-full {
    border-radius: 9999px
}

.rounded-lg {
    border-radius: .5rem
}

.rounded-md {
    border-radius: .375rem
}

.rounded-xl {
    border-radius: .75rem
}

.rounded-b-lg {
    border-bottom-right-radius: .5rem;
    border-bottom-left-radius: .5rem
}

.rounded-l-full {
    border-top-left-radius: 9999px;
    border-bottom-left-radius: 9999px
}

.rounded-r-\[1px\] {
    border-top-right-radius: 1px;
    border-bottom-right-radius: 1px
}

.rounded-t-lg {
    border-top-left-radius: .5rem;
    border-top-right-radius: .5rem
}

.border {
    border-width: 1px
}

.border-0 {
    border-width: 0px
}

.border-2 {
    border-width: 2px
}

.border-b {
    border-bottom-width: 1px
}

.border-l {
    border-left-width: 1px
}

.border-t {
    border-top-width: 1px
}

.border-blue-500 {
    --tw-border-opacity: 1;
    border-color: rgb(59 130 246 / var(--tw-border-opacity))
}

.border-gray-300 {
    --tw-border-opacity: 1;
    border-color: rgb(209 213 219 / var(--tw-border-opacity))
}

.border-gray-900 {
    --tw-border-opacity: 1;
    border-color: rgb(17 24 39 / var(--tw-border-opacity))
}

.border-indigo-500 {
    --tw-border-opacity: 1;
    border-color: rgb(99 102 241 / var(--tw-border-opacity))
}

.border-pink-500 {
    --tw-border-opacity: 1;
    border-color: rgb(236 72 153 / var(--tw-border-opacity))
}

.border-sky-400 {
    --tw-border-opacity: 1;
    border-color: rgb(56 189 248 / var(--tw-border-opacity))
}

.border-sky-500 {
    --tw-border-opacity: 1;
    border-color: rgb(14 165 233 / var(--tw-border-opacity))
}

.border-slate-100 {
    --tw-border-opacity: 1;
    border-color: rgb(241 245 249 / var(--tw-border-opacity))
}

.border-slate-200 {
    --tw-border-opacity: 1;
    border-color: rgb(226 232 240 / var(--tw-border-opacity))
}

.border-slate-200\/60 {
    border-color: #e2e8f099
}

.border-slate-300 {
    --tw-border-opacity: 1;
    border-color: rgb(203 213 225 / var(--tw-border-opacity))
}

.border-slate-400 {
    --tw-border-opacity: 1;
    border-color: rgb(148 163 184 / var(--tw-border-opacity))
}

.border-slate-400\/20 {
    border-color: #94a3b833
}

.border-slate-600\/10 {
    border-color: #4755691a
}

.border-slate-700 {
    --tw-border-opacity: 1;
    border-color: rgb(51 65 85 / var(--tw-border-opacity))
}

.border-slate-700\/10 {
    border-color: #3341551a
}

.border-slate-800 {
    --tw-border-opacity: 1;
    border-color: rgb(30 41 59 / var(--tw-border-opacity))
}

.border-slate-900\/10 {
    border-color: #0f172a1a
}

.border-slate-900\/5 {
    border-color: #0f172a0d
}

.border-transparent {
    border-color: transparent
}

.border-v1-red-300 {
    --tw-border-opacity: 1;
    border-color: rgb(248 180 180 / var(--tw-border-opacity))
}

.border-white {
    --tw-border-opacity: 1;
    border-color: rgb(255 255 255 / var(--tw-border-opacity))
}

.border-opacity-10 {
    --tw-border-opacity: .1
}

.border-opacity-5 {
    --tw-border-opacity: .05
}

.bg-\[\#205BDE\] {
    --tw-bg-opacity: 1;
    background-color: rgb(32 91 222 / var(--tw-bg-opacity))
}

.bg-\[color\:var\(--html-bg-color\,theme\(colors\.white\)\)\] {
    background-color: var(--html-bg-color,#fff)
}

.bg-amber-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(254 243 199 / var(--tw-bg-opacity))
}

.bg-gray-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(243 244 246 / var(--tw-bg-opacity))
}

.bg-gray-200 {
    --tw-bg-opacity: 1;
    background-color: rgb(229 231 235 / var(--tw-bg-opacity))
}

.bg-gray-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(249 250 251 / var(--tw-bg-opacity))
}

.bg-gray-700 {
    --tw-bg-opacity: 1;
    background-color: rgb(55 65 81 / var(--tw-bg-opacity))
}

.bg-gray-900 {
    --tw-bg-opacity: 1;
    background-color: rgb(17 24 39 / var(--tw-bg-opacity))
}

.bg-indigo-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(79 70 229 / var(--tw-bg-opacity))
}

.bg-red-200 {
    --tw-bg-opacity: 1;
    background-color: rgb(254 202 202 / var(--tw-bg-opacity))
}

.bg-red-400 {
    --tw-bg-opacity: 1;
    background-color: rgb(248 113 113 / var(--tw-bg-opacity))
}

.bg-red-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(254 242 242 / var(--tw-bg-opacity))
}

.bg-red-500 {
    --tw-bg-opacity: 1;
    background-color: rgb(239 68 68 / var(--tw-bg-opacity))
}

.bg-sky-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(240 249 255 / var(--tw-bg-opacity))
}

.bg-sky-500 {
    --tw-bg-opacity: 1;
    background-color: rgb(14 165 233 / var(--tw-bg-opacity))
}

.bg-slate-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(241 245 249 / var(--tw-bg-opacity))
}

.bg-slate-200 {
    --tw-bg-opacity: 1;
    background-color: rgb(226 232 240 / var(--tw-bg-opacity))
}

.bg-slate-200\/50 {
    background-color: #e2e8f080
}

.bg-slate-300 {
    --tw-bg-opacity: 1;
    background-color: rgb(203 213 225 / var(--tw-bg-opacity))
}

.bg-slate-300\/25 {
    background-color: #cbd5e140
}

.bg-slate-400 {
    --tw-bg-opacity: 1;
    background-color: rgb(148 163 184 / var(--tw-bg-opacity))
}

.bg-slate-400\/20 {
    background-color: #94a3b833
}

.bg-slate-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(248 250 252 / var(--tw-bg-opacity))
}

.bg-slate-500\/20 {
    background-color: #64748b33
}

.bg-slate-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(71 85 105 / var(--tw-bg-opacity))
}

.bg-slate-700\/25 {
    background-color: #33415540
}

.bg-slate-800 {
    --tw-bg-opacity: 1;
    background-color: rgb(30 41 59 / var(--tw-bg-opacity))
}

.bg-slate-900 {
    --tw-bg-opacity: 1;
    background-color: rgb(15 23 42 / var(--tw-bg-opacity))
}

.bg-slate-900\/10 {
    background-color: #0f172a1a
}

.bg-slate-900\/15 {
    background-color: #0f172a26
}

.bg-slate-900\/25 {
    background-color: #0f172a40
}

.bg-slate-900\/5 {
    background-color: #0f172a0d
}

.bg-slate-900\/\[0\.03\] {
    background-color: #0f172a08
}

.bg-slate-900\/\[0\.1\] {
    background-color: #0f172a1a
}

.bg-slate-900\/\[0\.2\] {
    background-color: #0f172a33
}

.bg-transparent {
    background-color: transparent
}

.bg-v1-blue-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(225 239 254 / var(--tw-bg-opacity))
}

.bg-v1-blue-200 {
    --tw-bg-opacity: 1;
    background-color: rgb(195 221 253 / var(--tw-bg-opacity))
}

.bg-v1-blue-300 {
    --tw-bg-opacity: 1;
    background-color: rgb(164 202 254 / var(--tw-bg-opacity))
}

.bg-v1-blue-400 {
    --tw-bg-opacity: 1;
    background-color: rgb(118 169 250 / var(--tw-bg-opacity))
}

.bg-v1-blue-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(235 245 255 / var(--tw-bg-opacity))
}

.bg-v1-blue-500 {
    --tw-bg-opacity: 1;
    background-color: rgb(63 131 248 / var(--tw-bg-opacity))
}

.bg-v1-blue-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(28 100 242 / var(--tw-bg-opacity))
}

.bg-v1-blue-700 {
    --tw-bg-opacity: 1;
    background-color: rgb(26 86 219 / var(--tw-bg-opacity))
}

.bg-v1-blue-800 {
    --tw-bg-opacity: 1;
    background-color: rgb(30 66 159 / var(--tw-bg-opacity))
}

.bg-v1-blue-900 {
    --tw-bg-opacity: 1;
    background-color: rgb(35 56 118 / var(--tw-bg-opacity))
}

.bg-v1-cool-gray-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(241 245 249 / var(--tw-bg-opacity))
}

.bg-v1-cool-gray-200 {
    --tw-bg-opacity: 1;
    background-color: rgb(226 232 240 / var(--tw-bg-opacity))
}

.bg-v1-cool-gray-300 {
    --tw-bg-opacity: 1;
    background-color: rgb(207 216 227 / var(--tw-bg-opacity))
}

.bg-v1-cool-gray-400 {
    --tw-bg-opacity: 1;
    background-color: rgb(151 166 186 / var(--tw-bg-opacity))
}

.bg-v1-cool-gray-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(248 250 252 / var(--tw-bg-opacity))
}

.bg-v1-cool-gray-500 {
    --tw-bg-opacity: 1;
    background-color: rgb(100 116 139 / var(--tw-bg-opacity))
}

.bg-v1-cool-gray-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(71 85 105 / var(--tw-bg-opacity))
}

.bg-v1-cool-gray-700 {
    --tw-bg-opacity: 1;
    background-color: rgb(54 65 82 / var(--tw-bg-opacity))
}

.bg-v1-cool-gray-800 {
    --tw-bg-opacity: 1;
    background-color: rgb(39 48 63 / var(--tw-bg-opacity))
}

.bg-v1-cool-gray-900 {
    --tw-bg-opacity: 1;
    background-color: rgb(26 32 46 / var(--tw-bg-opacity))
}

.bg-v1-gray-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(244 245 247 / var(--tw-bg-opacity))
}

.bg-v1-gray-200 {
    --tw-bg-opacity: 1;
    background-color: rgb(229 231 235 / var(--tw-bg-opacity))
}

.bg-v1-gray-300 {
    --tw-bg-opacity: 1;
    background-color: rgb(210 214 220 / var(--tw-bg-opacity))
}

.bg-v1-gray-400 {
    --tw-bg-opacity: 1;
    background-color: rgb(159 166 178 / var(--tw-bg-opacity))
}

.bg-v1-gray-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(249 250 251 / var(--tw-bg-opacity))
}

.bg-v1-gray-500 {
    --tw-bg-opacity: 1;
    background-color: rgb(107 114 128 / var(--tw-bg-opacity))
}

.bg-v1-gray-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(75 85 99 / var(--tw-bg-opacity))
}

.bg-v1-gray-700 {
    --tw-bg-opacity: 1;
    background-color: rgb(55 65 81 / var(--tw-bg-opacity))
}

.bg-v1-gray-800 {
    --tw-bg-opacity: 1;
    background-color: rgb(37 47 63 / var(--tw-bg-opacity))
}

.bg-v1-gray-900 {
    --tw-bg-opacity: 1;
    background-color: rgb(22 30 46 / var(--tw-bg-opacity))
}

.bg-v1-green-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(222 247 236 / var(--tw-bg-opacity))
}

.bg-v1-green-200 {
    --tw-bg-opacity: 1;
    background-color: rgb(188 240 218 / var(--tw-bg-opacity))
}

.bg-v1-green-300 {
    --tw-bg-opacity: 1;
    background-color: rgb(132 225 188 / var(--tw-bg-opacity))
}

.bg-v1-green-400 {
    --tw-bg-opacity: 1;
    background-color: rgb(49 196 141 / var(--tw-bg-opacity))
}

.bg-v1-green-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(243 250 247 / var(--tw-bg-opacity))
}

.bg-v1-green-500 {
    --tw-bg-opacity: 1;
    background-color: rgb(14 159 110 / var(--tw-bg-opacity))
}

.bg-v1-green-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(5 122 85 / var(--tw-bg-opacity))
}

.bg-v1-green-700 {
    --tw-bg-opacity: 1;
    background-color: rgb(4 108 78 / var(--tw-bg-opacity))
}

.bg-v1-green-800 {
    --tw-bg-opacity: 1;
    background-color: rgb(3 84 63 / var(--tw-bg-opacity))
}

.bg-v1-green-900 {
    --tw-bg-opacity: 1;
    background-color: rgb(1 71 55 / var(--tw-bg-opacity))
}

.bg-v1-indigo-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(229 237 255 / var(--tw-bg-opacity))
}

.bg-v1-indigo-200 {
    --tw-bg-opacity: 1;
    background-color: rgb(205 219 254 / var(--tw-bg-opacity))
}

.bg-v1-indigo-300 {
    --tw-bg-opacity: 1;
    background-color: rgb(180 198 252 / var(--tw-bg-opacity))
}

.bg-v1-indigo-400 {
    --tw-bg-opacity: 1;
    background-color: rgb(141 162 251 / var(--tw-bg-opacity))
}

.bg-v1-indigo-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(240 245 255 / var(--tw-bg-opacity))
}

.bg-v1-indigo-500 {
    --tw-bg-opacity: 1;
    background-color: rgb(104 117 245 / var(--tw-bg-opacity))
}

.bg-v1-indigo-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(88 80 236 / var(--tw-bg-opacity))
}

.bg-v1-indigo-700 {
    --tw-bg-opacity: 1;
    background-color: rgb(81 69 205 / var(--tw-bg-opacity))
}

.bg-v1-indigo-800 {
    --tw-bg-opacity: 1;
    background-color: rgb(66 56 157 / var(--tw-bg-opacity))
}

.bg-v1-indigo-900 {
    --tw-bg-opacity: 1;
    background-color: rgb(54 47 120 / var(--tw-bg-opacity))
}

.bg-v1-orange-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(254 236 220 / var(--tw-bg-opacity))
}

.bg-v1-orange-200 {
    --tw-bg-opacity: 1;
    background-color: rgb(252 217 189 / var(--tw-bg-opacity))
}

.bg-v1-orange-300 {
    --tw-bg-opacity: 1;
    background-color: rgb(253 186 140 / var(--tw-bg-opacity))
}

.bg-v1-orange-400 {
    --tw-bg-opacity: 1;
    background-color: rgb(255 138 76 / var(--tw-bg-opacity))
}

.bg-v1-orange-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(255 248 241 / var(--tw-bg-opacity))
}

.bg-v1-orange-500 {
    --tw-bg-opacity: 1;
    background-color: rgb(255 90 31 / var(--tw-bg-opacity))
}

.bg-v1-orange-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(208 56 1 / var(--tw-bg-opacity))
}

.bg-v1-orange-700 {
    --tw-bg-opacity: 1;
    background-color: rgb(180 52 3 / var(--tw-bg-opacity))
}

.bg-v1-orange-800 {
    --tw-bg-opacity: 1;
    background-color: rgb(138 44 13 / var(--tw-bg-opacity))
}

.bg-v1-orange-900 {
    --tw-bg-opacity: 1;
    background-color: rgb(115 35 13 / var(--tw-bg-opacity))
}

.bg-v1-pink-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(252 232 243 / var(--tw-bg-opacity))
}

.bg-v1-pink-200 {
    --tw-bg-opacity: 1;
    background-color: rgb(250 209 232 / var(--tw-bg-opacity))
}

.bg-v1-pink-300 {
    --tw-bg-opacity: 1;
    background-color: rgb(248 180 217 / var(--tw-bg-opacity))
}

.bg-v1-pink-400 {
    --tw-bg-opacity: 1;
    background-color: rgb(241 126 184 / var(--tw-bg-opacity))
}

.bg-v1-pink-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(253 242 248 / var(--tw-bg-opacity))
}

.bg-v1-pink-500 {
    --tw-bg-opacity: 1;
    background-color: rgb(231 70 148 / var(--tw-bg-opacity))
}

.bg-v1-pink-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(214 31 105 / var(--tw-bg-opacity))
}

.bg-v1-pink-700 {
    --tw-bg-opacity: 1;
    background-color: rgb(191 18 93 / var(--tw-bg-opacity))
}

.bg-v1-pink-800 {
    --tw-bg-opacity: 1;
    background-color: rgb(153 21 75 / var(--tw-bg-opacity))
}

.bg-v1-pink-900 {
    --tw-bg-opacity: 1;
    background-color: rgb(117 26 61 / var(--tw-bg-opacity))
}

.bg-v1-purple-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(237 235 254 / var(--tw-bg-opacity))
}

.bg-v1-purple-200 {
    --tw-bg-opacity: 1;
    background-color: rgb(220 215 254 / var(--tw-bg-opacity))
}

.bg-v1-purple-300 {
    --tw-bg-opacity: 1;
    background-color: rgb(202 191 253 / var(--tw-bg-opacity))
}

.bg-v1-purple-400 {
    --tw-bg-opacity: 1;
    background-color: rgb(172 148 250 / var(--tw-bg-opacity))
}

.bg-v1-purple-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(246 245 255 / var(--tw-bg-opacity))
}

.bg-v1-purple-500 {
    --tw-bg-opacity: 1;
    background-color: rgb(144 97 249 / var(--tw-bg-opacity))
}

.bg-v1-purple-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(126 58 242 / var(--tw-bg-opacity))
}

.bg-v1-purple-700 {
    --tw-bg-opacity: 1;
    background-color: rgb(108 43 217 / var(--tw-bg-opacity))
}

.bg-v1-purple-800 {
    --tw-bg-opacity: 1;
    background-color: rgb(85 33 181 / var(--tw-bg-opacity))
}

.bg-v1-purple-900 {
    --tw-bg-opacity: 1;
    background-color: rgb(74 29 150 / var(--tw-bg-opacity))
}

.bg-v1-red-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(253 232 232 / var(--tw-bg-opacity))
}

.bg-v1-red-200 {
    --tw-bg-opacity: 1;
    background-color: rgb(251 213 213 / var(--tw-bg-opacity))
}

.bg-v1-red-300 {
    --tw-bg-opacity: 1;
    background-color: rgb(248 180 180 / var(--tw-bg-opacity))
}

.bg-v1-red-400 {
    --tw-bg-opacity: 1;
    background-color: rgb(249 128 128 / var(--tw-bg-opacity))
}

.bg-v1-red-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(253 242 242 / var(--tw-bg-opacity))
}

.bg-v1-red-500 {
    --tw-bg-opacity: 1;
    background-color: rgb(240 82 82 / var(--tw-bg-opacity))
}

.bg-v1-red-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(224 36 36 / var(--tw-bg-opacity))
}

.bg-v1-red-700 {
    --tw-bg-opacity: 1;
    background-color: rgb(200 30 30 / var(--tw-bg-opacity))
}

.bg-v1-red-800 {
    --tw-bg-opacity: 1;
    background-color: rgb(155 28 28 / var(--tw-bg-opacity))
}

.bg-v1-red-900 {
    --tw-bg-opacity: 1;
    background-color: rgb(119 29 29 / var(--tw-bg-opacity))
}

.bg-v1-teal-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(213 245 246 / var(--tw-bg-opacity))
}

.bg-v1-teal-200 {
    --tw-bg-opacity: 1;
    background-color: rgb(175 236 239 / var(--tw-bg-opacity))
}

.bg-v1-teal-300 {
    --tw-bg-opacity: 1;
    background-color: rgb(126 220 226 / var(--tw-bg-opacity))
}

.bg-v1-teal-400 {
    --tw-bg-opacity: 1;
    background-color: rgb(22 189 202 / var(--tw-bg-opacity))
}

.bg-v1-teal-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(237 250 250 / var(--tw-bg-opacity))
}

.bg-v1-teal-500 {
    --tw-bg-opacity: 1;
    background-color: rgb(6 148 162 / var(--tw-bg-opacity))
}

.bg-v1-teal-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(4 116 129 / var(--tw-bg-opacity))
}

.bg-v1-teal-700 {
    --tw-bg-opacity: 1;
    background-color: rgb(3 102 114 / var(--tw-bg-opacity))
}

.bg-v1-teal-800 {
    --tw-bg-opacity: 1;
    background-color: rgb(5 80 92 / var(--tw-bg-opacity))
}

.bg-v1-teal-900 {
    --tw-bg-opacity: 1;
    background-color: rgb(1 68 81 / var(--tw-bg-opacity))
}

.bg-v1-yellow-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(253 246 178 / var(--tw-bg-opacity))
}

.bg-v1-yellow-200 {
    --tw-bg-opacity: 1;
    background-color: rgb(252 233 106 / var(--tw-bg-opacity))
}

.bg-v1-yellow-300 {
    --tw-bg-opacity: 1;
    background-color: rgb(250 202 21 / var(--tw-bg-opacity))
}

.bg-v1-yellow-400 {
    --tw-bg-opacity: 1;
    background-color: rgb(227 160 8 / var(--tw-bg-opacity))
}

.bg-v1-yellow-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(253 253 234 / var(--tw-bg-opacity))
}

.bg-v1-yellow-500 {
    --tw-bg-opacity: 1;
    background-color: rgb(194 120 3 / var(--tw-bg-opacity))
}

.bg-v1-yellow-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(159 88 10 / var(--tw-bg-opacity))
}

.bg-v1-yellow-700 {
    --tw-bg-opacity: 1;
    background-color: rgb(142 75 16 / var(--tw-bg-opacity))
}

.bg-v1-yellow-800 {
    --tw-bg-opacity: 1;
    background-color: rgb(114 59 19 / var(--tw-bg-opacity))
}

.bg-v1-yellow-900 {
    --tw-bg-opacity: 1;
    background-color: rgb(99 49 18 / var(--tw-bg-opacity))
}

.bg-white {
    --tw-bg-opacity: 1;
    background-color: rgb(255 255 255 / var(--tw-bg-opacity))
}

.bg-white\/0 {
    background-color: #fff0
}

.bg-white\/60 {
    background-color: #fff9
}

.bg-opacity-30 {
    --tw-bg-opacity: .3
}

.bg-opacity-90 {
    --tw-bg-opacity: .9
}

.bg-\[radial-gradient\(164\.75\%_100\%_at_50\%_0\%\,\#334155_0\%\,\#0F172A_48\.73\%\)\] {
    background-image: radial-gradient(164.75% 100% at 50% 0%,#334155 0%,#0F172A 48.73%)
}

.bg-\[url\(\'\/public\/img\/beams-components\.png\'\)\]{background-image:url(/build/assets/beams-components-24fbfee2.png)}.bg-\[url\(\'\/public\/img\/beams-templates-header\.png\'\)\]{background-image:url(/build/assets/beams-templates-header-445473e5.png)}.bg-gradient-to-b{background-image:linear-gradient(to bottom,var(--tw-gradient-stops))}.bg-gradient-to-br{background-image:linear-gradient(to bottom right,var(--tw-gradient-stops))}.bg-gradient-to-l{background-image:linear-gradient(to left,var(--tw-gradient-stops))}.bg-gradient-to-r{background-image:linear-gradient(to right,var(--tw-gradient-stops))}.bg-gradient-to-t{background-image:linear-gradient(to top,var(--tw-gradient-stops))}.bg-none{background-image:none}.from-gray-300{--tw-gradient-from: #d1d5db var(--tw-gradient-from-position);--tw-gradient-from-position: ;--tw-gradient-to: rgb(209 213 219 / 0) var(--tw-gradient-from-position);--tw-gradient-to-position: ;--tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)}.from-white{--tw-gradient-from: #fff var(--tw-gradient-from-position);--tw-gradient-from-position: ;--tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-from-position);--tw-gradient-to-position: ;--tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)}.from-white\/0{--tw-gradient-from: rgb(255 255 255 / 0) var(--tw-gradient-from-position);--tw-gradient-from-position: ;--tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-from-position);--tw-gradient-to-position: ;--tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)}.from-white\/100{--tw-gradient-from: rgb(255 255 255 / 1) var(--tw-gradient-from-position);--tw-gradient-from-position: ;--tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-from-position);--tw-gradient-to-position: ;--tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)}.via-white\/25{--tw-gradient-via-position: ;--tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);--tw-gradient-to-position: ;--tw-gradient-stops: var(--tw-gradient-from), rgb(255 255 255 / .25) var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white\/0{--tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);--tw-gradient-to-position: }.to-white\/25{--tw-gradient-to: rgb(255 255 255 / .25) var(--tw-gradient-to-position);--tw-gradient-to-position: }.bg-\[length\:1000px_700px\]{background-size:1000px 700px}.bg-\[length\:2000px_100\%\]{background-size:2000px 100%}.bg-clip-padding{background-clip:padding-box}.bg-\[position\:calc\(50\%_\+_190px\)_-50px\]{background-position:calc(50% + 190px) -50px}.bg-\[position\:calc\(50\%_\+_220px\)_-50px\]{background-position:calc(50% + 220px) -50px}.bg-center{background-position:center}.bg-no-repeat{background-repeat:no-repeat}.fill-gray-400{fill:#9ca3af}.fill-gray-600{fill:#4b5563}.fill-gray-900{fill:#111827}.fill-indigo-50{fill:#eef2ff}.fill-sky-400{fill:#38bdf8}.fill-sky-50{fill:#f0f9ff}.fill-slate-400{fill:#94a3b8}.fill-white{fill:#fff}.stroke-\[\#06B6D4\]{stroke:#06b6d4}.stroke-current{stroke:currentColor}.stroke-gray-600{stroke:#4b5563}.stroke-indigo-500{stroke:#6366f1}.stroke-indigo-500\/50{stroke:#6366f180}.stroke-sky-500{stroke:#0ea5e9}.stroke-sky-500\/40{stroke:#0ea5e966}.stroke-slate-400{stroke:#94a3b8}.stroke-slate-500{stroke:#64748b}.stroke-slate-500\/40{stroke:#64748b66}.stroke-slate-600{stroke:#475569}.stroke-slate-700{stroke:#334155}.stroke-slate-900{stroke:#0f172a}.stroke-slate-900\/10{stroke:#0f172a1a}.stroke-white{stroke:#fff}.p-0{padding:0}.p-0\.5{padding:.125rem}.p-1{padding:.25rem}.p-1\.5{padding:.375rem}.p-3{padding:.75rem}.p-4{padding:1rem}.p-5{padding:1.25rem}.p-6{padding:1.5rem}.px-1{padding-left:.25rem;padding-right:.25rem}.px-1\.5{padding-left:.375rem;padding-right:.375rem}.px-16{padding-left:4rem;padding-right:4rem}.px-2{padding-left:.5rem;padding-right:.5rem}.px-2\.5{padding-left:.625rem;padding-right:.625rem}.px-3{padding-left:.75rem;padding-right:.75rem}.px-3\.5{padding-left:.875rem;padding-right:.875rem}.px-4{padding-left:1rem;padding-right:1rem}.px-5{padding-left:1.25rem;padding-right:1.25rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.px-8{padding-left:2rem;padding-right:2rem}.py-0{padding-top:0;padding-bottom:0}.py-0\.5{padding-top:.125rem;padding-bottom:.125rem}.py-1{padding-top:.25rem;padding-bottom:.25rem}.py-1\.5{padding-top:.375rem;padding-bottom:.375rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.py-2{padding-top:.5rem;padding-bottom:.5rem}.py-2\.5{padding-top:.625rem;padding-bottom:.625rem}.py-20{padding-top:5rem;padding-bottom:5rem}.py-3{padding-top:.75rem;padding-bottom:.75rem}.py-4{padding-top:1rem;padding-bottom:1rem}.py-6{padding-top:1.5rem;padding-bottom:1.5rem}.py-8{padding-top:2rem;padding-bottom:2rem}.py-\[0\.3125rem\]{padding-top:.3125rem;padding-bottom:.3125rem}.py-\[0\.4375rem\]{padding-top:.4375rem;padding-bottom:.4375rem}.py-\[2\.125rem\]{padding-top:2.125rem;padding-bottom:2.125rem}.pb-0{padding-bottom:0}.pb-16{padding-bottom:4rem}.pb-20{padding-bottom:5rem}.pb-24{padding-bottom:6rem}.pb-28{padding-bottom:7rem}.pb-32{padding-bottom:8rem}.pb-4{padding-bottom:1rem}.pb-6{padding-bottom:1.5rem}.pb-8{padding-bottom:2rem}.pb-full{padding-bottom:100%}.pb-px{padding-bottom:1px}.pl-12{padding-left:3rem}.pl-2{padding-left:.5rem}.pl-3{padding-left:.75rem}.pl-3\.5{padding-left:.875rem}.pl-4{padding-left:1rem}.pl-6{padding-left:1.5rem}.pl-7{padding-left:1.75rem}.pl-\[50\%\]{padding-left:50%}.pr-10{padding-right:2.5rem}.pr-12{padding-right:3rem}.pr-2{padding-right:.5rem}.pr-3{padding-right:.75rem}.pr-4{padding-right:1rem}.pr-\[1\.875rem\]{padding-right:1.875rem}.pt-0{padding-top:0}.pt-10{padding-top:2.5rem}.pt-12{padding-top:3rem}.pt-14{padding-top:3.5rem}.pt-16{padding-top:4rem}.pt-2{padding-top:.5rem}.pt-20{padding-top:5rem}.pt-24{padding-top:6rem}.pt-3{padding-top:.75rem}.pt-4{padding-top:1rem}.pt-6{padding-top:1.5rem}.pt-8{padding-top:2rem}.pt-\[5\.75rem\]{padding-top:5.75rem}.text-left{text-align:left}.text-center{text-align:center}.text-right{text-align:right}.align-top{vertical-align:top}.align-middle{vertical-align:middle}.font-sans{font-family:Inter var,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji";font-feature-settings:"cv02","cv03","cv04","cv11"}.text-2xl{font-size:1.5rem;line-height:2rem}.text-3xl{font-size:1.875rem;line-height:2.25rem}.text-4xl{font-size:2.25rem;line-height:2.5rem}.text-5xl{font-size:3rem;line-height:1}.text-\[0\.625rem\]{font-size:.625rem}.text-\[0\.6875rem\]{font-size:.6875rem}.text-\[0\.8125rem\]{font-size:.8125rem}.text-\[2\.5rem\]{font-size:2.5rem}.text-base{font-size:1rem;line-height:1.5rem}.text-lg{font-size:1.125rem;line-height:1.75rem}.text-sm{font-size:.875rem;line-height:1.25rem}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-xs{font-size:.75rem;line-height:1rem}.font-bold{font-weight:700}.font-extrabold{font-weight:800}.font-medium{font-weight:500}.font-normal{font-weight:400}.font-semibold{font-weight:600}.uppercase{text-transform:uppercase}.capitalize{text-transform:capitalize}.tabular-nums{--tw-numeric-spacing: tabular-nums;font-variant-numeric:var(--tw-ordinal) var(--tw-slashed-zero) var(--tw-numeric-figure) var(--tw-numeric-spacing) var(--tw-numeric-fraction)}.leading-4{line-height:1rem}.leading-5{line-height:1.25rem}.leading-6{line-height:1.5rem}.leading-7{line-height:1.75rem}.leading-8{line-height:2rem}.leading-9{line-height:2.25rem}.leading-\[1\.5714285714\]{line-height:1.5714285714}.leading-\[3\.5rem\]{line-height:3.5rem}.leading-none{line-height:1}.tracking-\[-0\.04em\]{letter-spacing:-.04em}.tracking-tight{letter-spacing:-.025em}.tracking-wide{letter-spacing:.025em}.text-amber-800{--tw-text-opacity: 1;color:rgb(146 64 14 / var(--tw-text-opacity))}.text-black{--tw-text-opacity: 1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-black\/25{color:#00000040}.text-blue-300{--tw-text-opacity: 1;color:rgb(147 197 253 / var(--tw-text-opacity))}.text-blue-600{--tw-text-opacity: 1;color:rgb(37 99 235 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-indigo-500{--tw-text-opacity: 1;color:rgb(99 102 241 / var(--tw-text-opacity))}.text-indigo-600{--tw-text-opacity: 1;color:rgb(79 70 229 / var(--tw-text-opacity))}.text-pink-600{--tw-text-opacity: 1;color:rgb(219 39 119 / var(--tw-text-opacity))}.text-red-500{--tw-text-opacity: 1;color:rgb(239 68 68 / var(--tw-text-opacity))}.text-red-600{--tw-text-opacity: 1;color:rgb(220 38 38 / var(--tw-text-opacity))}.text-red-700{--tw-text-opacity: 1;color:rgb(185 28 28 / var(--tw-text-opacity))}.text-sky-400{--tw-text-opacity: 1;color:rgb(56 189 248 / var(--tw-text-opacity))}.text-sky-500{--tw-text-opacity: 1;color:rgb(14 165 233 / var(--tw-text-opacity))}.text-sky-600{--tw-text-opacity: 1;color:rgb(2 132 199 / var(--tw-text-opacity))}.text-sky-700{--tw-text-opacity: 1;color:rgb(3 105 161 / var(--tw-text-opacity))}.text-slate-100{--tw-text-opacity: 1;color:rgb(241 245 249 / var(--tw-text-opacity))}.text-slate-300{--tw-text-opacity: 1;color:rgb(203 213 225 / var(--tw-text-opacity))}.text-slate-400{--tw-text-opacity: 1;color:rgb(148 163 184 / var(--tw-text-opacity))}.text-slate-500{--tw-text-opacity: 1;color:rgb(100 116 139 / var(--tw-text-opacity))}.text-slate-600{--tw-text-opacity: 1;color:rgb(71 85 105 / var(--tw-text-opacity))}.text-slate-600\/10{color:#4755691a}.text-slate-700{--tw-text-opacity: 1;color:rgb(51 65 85 / var(--tw-text-opacity))}.text-slate-900{--tw-text-opacity: 1;color:rgb(15 23 42 / var(--tw-text-opacity))}.text-slate-900\/\[0\.045\]{color:#0f172a0b}.text-slate-900\/\[0\.07\]{color:#0f172a12}.text-v1-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-v1-red-500{--tw-text-opacity: 1;color:rgb(240 82 82 / var(--tw-text-opacity))}.text-v1-red-900{--tw-text-opacity: 1;color:rgb(119 29 29 / var(--tw-text-opacity))}.text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{text-decoration-line:underline}.line-through{text-decoration-line:line-through}.no-underline{text-decoration-line:none}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.placeholder-v1-red-300::-moz-placeholder{--tw-placeholder-opacity: 1;color:rgb(248 180 180 / var(--tw-placeholder-opacity))}.placeholder-v1-red-300::placeholder{--tw-placeholder-opacity: 1;color:rgb(248 180 180 / var(--tw-placeholder-opacity))}.opacity-0{opacity:0}.opacity-100{opacity:1}.opacity-25{opacity:.25}.opacity-40{opacity:.4}.opacity-75{opacity:.75}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.shadow-2xl{--tw-shadow: 0 25px 50px -12px rgb(0 0 0 / .25);--tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.shadow-\[0_0_25px_rgba\(0\,0\,0\,0\.1\)\,0_0_10px_rgba\(0\,0\,0\,0\.04\)\]{--tw-shadow: 0 0 25px rgba(0,0,0,.1),0 0 10px rgba(0,0,0,.04);--tw-shadow-colored: 0 0 25px var(--tw-shadow-color), 0 0 10px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.shadow-\[0_8px_15px_rgba\(24\,24\,27\,0\.1\)\,0_3px_6px_rgba\(24\,24\,27\,0\.05\)\]{--tw-shadow: 0 8px 15px rgba(24,24,27,.1),0 3px 6px rgba(24,24,27,.05);--tw-shadow-colored: 0 8px 15px var(--tw-shadow-color), 0 3px 6px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.shadow-\[inset_0_-1px_1px_rgba\(0\,0\,0\,0\.06\)\]{--tw-shadow: inset 0 -1px 1px rgba(0,0,0,.06);--tw-shadow-colored: inset 0 -1px 1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.shadow-inner{--tw-shadow: inset 0 2px 4px 0 rgb(0 0 0 / .05);--tw-shadow-colored: inset 0 2px 4px 0 var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.shadow-lg{--tw-shadow: 0 10px 15px -3px rgb(0 0 0 / .1), 0 4px 6px -4px rgb(0 0 0 / .1);--tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.shadow-md{--tw-shadow: 0 4px 6px -1px rgb(0 0 0 / .1), 0 2px 4px -2px rgb(0 0 0 / .1);--tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.shadow-outline{--tw-shadow: 0 0 0 3px rgba(147, 197, 253, .5);--tw-shadow-colored: 0 0 0 3px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.shadow-outline-red{--tw-shadow: 0 0 0 3px rgba(254, 202, 202, .5);--tw-shadow-colored: 0 0 0 3px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.shadow-sm{--tw-shadow: 0 1px 2px 0 rgb(0 0 0 / .05);--tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.shadow-solid{--tw-shadow: 0 0 0 2px currentColor;--tw-shadow-colored: 0 0 0 2px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.shadow-xl{--tw-shadow: 0 20px 25px -5px rgb(0 0 0 / .1), 0 8px 10px -6px rgb(0 0 0 / .1);--tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.shadow-black\/5{--tw-shadow-color: rgb(0 0 0 / .05);--tw-shadow: var(--tw-shadow-colored)}.shadow-indigo-500\/\[\.12\]{--tw-shadow-color: rgb(99 102 241 / .12);--tw-shadow: var(--tw-shadow-colored)}.shadow-sky-500\/\[\.12\]{--tw-shadow-color: rgb(14 165 233 / .12);--tw-shadow: var(--tw-shadow-colored)}.shadow-slate-900\/10{--tw-shadow-color: rgb(15 23 42 / .1);--tw-shadow: var(--tw-shadow-colored)}.shadow-slate-900\/5{--tw-shadow-color: rgb(15 23 42 / .05);--tw-shadow: var(--tw-shadow-colored)}.outline{outline-style:solid}.ring{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.ring-1{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.ring-2{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.ring-inset{--tw-ring-inset: inset}.ring-black\/10{--tw-ring-color: rgb(0 0 0 / .1)}.ring-black\/20{--tw-ring-color: rgb(0 0 0 / .2)}.ring-black\/5{--tw-ring-color: rgb(0 0 0 / .05)}.ring-gray-900\/10{--tw-ring-color: rgb(17 24 39 / .1)}.ring-gray-900\/5{--tw-ring-color: rgb(17 24 39 / .05)}.ring-indigo-600{--tw-ring-opacity: 1;--tw-ring-color: rgb(79 70 229 / var(--tw-ring-opacity))}.ring-rose-400{--tw-ring-opacity: 1;--tw-ring-color: rgb(251 113 133 / var(--tw-ring-opacity))}.ring-slate-200{--tw-ring-opacity: 1;--tw-ring-color: rgb(226 232 240 / var(--tw-ring-opacity))}.ring-slate-700\/10{--tw-ring-color: rgb(51 65 85 / .1)}.ring-slate-700\/50{--tw-ring-color: rgb(51 65 85 / .5)}.ring-slate-900\/10{--tw-ring-color: rgb(15 23 42 / .1)}.ring-slate-900\/5{--tw-ring-color: rgb(15 23 42 / .05)}.ring-white{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity))}.ring-white\/10{--tw-ring-color: rgb(255 255 255 / .1)}.blur{--tw-blur: blur(8px);filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.blur-\[1px\]{--tw-blur: blur(1px);filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.blur-sm{--tw-blur: blur(4px);filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-md{--tw-drop-shadow: drop-shadow(0 4px 3px rgb(0 0 0 / .07)) drop-shadow(0 2px 2px rgb(0 0 0 / .06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.filter{filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.backdrop-blur{--tw-backdrop-blur: blur(8px);-webkit-backdrop-filter:var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);backdrop-filter:var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia)}.backdrop-blur-sm{--tw-backdrop-blur: blur(4px);-webkit-backdrop-filter:var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);backdrop-filter:var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia)}.transition{transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.transition-colors{transition-property:color,background-color,border-color,text-decoration-color,fill,stroke;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.transition-opacity{transition-property:opacity;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.transition-transform{transition-property:transform;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.duration-100{transition-duration:.1s}.duration-150{transition-duration:.15s}.duration-200{transition-duration:.2s}.duration-300{transition-duration:.3s}.duration-500{transition-duration:.5s}.duration-75{transition-duration:75ms}.ease-in{transition-timing-function:cubic-bezier(.4,0,1,1)}.ease-in-out{transition-timing-function:cubic-bezier(.4,0,.2,1)}.ease-out{transition-timing-function:cubic-bezier(0,0,.2,1)}.\[background-image\:linear-gradient\(90deg\,rgba\(56\,189\,248\,0\)_0\%\,\#0EA5E9_32\.29\%\,rgba\(236\,72\,153\,0\.3\)_67\.19\%\,rgba\(236\,72\,153\,0\)_100\%\)\]{background-image:linear-gradient(90deg,rgba(56,189,248,0) 0%,#0EA5E9 32.29%,rgba(236,72,153,.3) 67.19%,rgba(236,72,153,0) 100%)}.\[mask-image\:linear-gradient\(to_bottom\,transparent\,white\)\]{-webkit-mask-image:linear-gradient(to bottom,transparent,white);mask-image:linear-gradient(to bottom,transparent,white)}.\[mask-image\:linear-gradient\(to_bottom\,white\,transparent\)\]{-webkit-mask-image:linear-gradient(to bottom,white,transparent);mask-image:linear-gradient(to bottom,white,transparent)}.\[mask-image\:linear-gradient\(to_bottom_left\,white\,transparent\,transparent\)\]{-webkit-mask-image:linear-gradient(to bottom left,white,transparent,transparent);mask-image:linear-gradient(to bottom left,white,transparent,transparent)}.\[mask-image\:linear-gradient\(to_left\,transparent\,white_4rem\,white_calc\(100\%-4rem\)\,transparent\)\]{-webkit-mask-image:linear-gradient(to left,transparent,white 4rem,white calc(100% - 4rem),transparent);mask-image:linear-gradient(to left,transparent,white 4rem,white calc(100% - 4rem),transparent)}.\[mask-image\:linear-gradient\(to_right\,transparent\,white_4rem\,white_calc\(100\%-4rem\)\,transparent\)\]{-webkit-mask-image:linear-gradient(to right,transparent,white 4rem,white calc(100% - 4rem),transparent);mask-image:linear-gradient(to right,transparent,white 4rem,white calc(100% - 4rem),transparent)}.\[mask-image\:linear-gradient\(to_top\,transparent\,white\)\]{-webkit-mask-image:linear-gradient(to top,transparent,white);mask-image:linear-gradient(to top,transparent,white)}.\[mask-image\:linear-gradient\(to_top\,transparent\,white_4rem\,white_calc\(100\%-4rem\)\,transparent\)\]{-webkit-mask-image:linear-gradient(to top,transparent,white 4rem,white calc(100% - 4rem),transparent);mask-image:linear-gradient(to top,transparent,white 4rem,white calc(100% - 4rem),transparent)}.\[mask-image\:linear-gradient\(to_top\,white\,transparent\)\]{-webkit-mask-image:linear-gradient(to top,white,transparent);mask-image:linear-gradient(to top,white,transparent)}.\[mask-image\:linear-gradient\(to_top\,white_4rem\,white_calc\(100\%-4rem\)\,transparent\)\]{-webkit-mask-image:linear-gradient(to top,white 4rem,white calc(100% - 4rem),transparent);mask-image:linear-gradient(to top,white 4rem,white calc(100% - 4rem),transparent)}.\[overflow-anchor\:none\]{overflow-anchor:none}[x-cloak]{display:none!important}.resizing,.resizing *{cursor:ew-resize!important;-webkit-user-select:none!important;-moz-user-select:none!important;user-select:none!important}.placeholder-html,.placeholder-react,.placeholder-vue{display:none}.snippet-html .placeholder-html,.snippet-react .placeholder-react,.snippet-vue .placeholder-vue{display:inline}input[type=search]::-webkit-search-decoration,input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-results-button,input[type=search]::-webkit-search-results-decoration{-webkit-appearance:none}#app{display:flex;flex:1 1 0%;flex-direction:column;overflow:hidden}.marker\:content-\[\'\'\] *::marker{--tw-content: "";content:var(--tw-content)}.marker\:content-\[\'\'\]::marker{--tw-content: "";content:var(--tw-content)}.placeholder\:text-slate-400::-moz-placeholder{--tw-text-opacity: 1;color:rgb(148 163 184 / var(--tw-text-opacity))}.placeholder\:text-slate-400::placeholder{--tw-text-opacity: 1;color:rgb(148 163 184 / var(--tw-text-opacity))}.placeholder\:text-slate-600::-moz-placeholder{--tw-text-opacity: 1;color:rgb(71 85 105 / var(--tw-text-opacity))}.placeholder\:text-slate-600::placeholder{--tw-text-opacity: 1;color:rgb(71 85 105 / var(--tw-text-opacity))}.before\:absolute:before{content:var(--tw-content);position:absolute}.before\:-inset-2:before{content:var(--tw-content);inset:-.5rem}.before\:-inset-2\.5:before{content:var(--tw-content);inset:-.625rem}.before\:left-0:before{content:var(--tw-content);left:0px}.before\:top-3:before{content:var(--tw-content);top:.75rem}.before\:-mt-\[0\.0625rem\]:before{content:var(--tw-content);margin-top:-.0625rem}.before\:h-0:before{content:var(--tw-content);height:0px}.before\:h-0\.5:before{content:var(--tw-content);height:.125rem}.before\:w-2:before{content:var(--tw-content);width:.5rem}.before\:rounded-\[20px\]:before{content:var(--tw-content);border-radius:20px}.before\:rounded-full:before{content:var(--tw-content);border-radius:9999px}.before\:bg-gray-50:before{content:var(--tw-content);--tw-bg-opacity: 1;background-color:rgb(249 250 251 / var(--tw-bg-opacity))}.before\:bg-slate-300:before{content:var(--tw-content);--tw-bg-opacity: 1;background-color:rgb(203 213 225 / var(--tw-bg-opacity))}.before\:opacity-0:before{content:var(--tw-content);opacity:0}.before\:content-\[\'\201c\'\]:before{--tw-content: "\201c";content:var(--tw-content)}.after\:content-\[\'\201d\'\]:after{--tw-content: "\201d";content:var(--tw-content)}.first\:border-0:first-child{border-width:0px}.hover\:border-slate-400:hover{--tw-border-opacity: 1;border-color:rgb(148 163 184 / var(--tw-border-opacity))}.hover\:border-opacity-25:hover{--tw-border-opacity: .25}.hover\:bg-gray-600:hover{--tw-bg-opacity: 1;background-color:rgb(75 85 99 / var(--tw-bg-opacity))}.hover\:bg-indigo-500:hover{--tw-bg-opacity: 1;background-color:rgb(99 102 241 / var(--tw-bg-opacity))}.hover\:bg-red-100:hover{--tw-bg-opacity: 1;background-color:rgb(254 226 226 / var(--tw-bg-opacity))}.hover\:bg-slate-100:hover{--tw-bg-opacity: 1;background-color:rgb(241 245 249 / var(--tw-bg-opacity))}.hover\:bg-slate-50:hover{--tw-bg-opacity: 1;background-color:rgb(248 250 252 / var(--tw-bg-opacity))}.hover\:bg-slate-500:hover{--tw-bg-opacity: 1;background-color:rgb(100 116 139 / var(--tw-bg-opacity))}.hover\:bg-slate-700:hover{--tw-bg-opacity: 1;background-color:rgb(51 65 85 / var(--tw-bg-opacity))}.hover\:bg-v1-blue-500:hover{--tw-bg-opacity: 1;background-color:rgb(63 131 248 / var(--tw-bg-opacity))}.hover\:bg-v1-indigo-500:hover{--tw-bg-opacity: 1;background-color:rgb(104 117 245 / var(--tw-bg-opacity))}.hover\:bg-white\/25:hover{background-color:#ffffff40}.hover\:fill-gray-900:hover{fill:#111827}.hover\:text-gray-900:hover{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-indigo-500:hover{--tw-text-opacity: 1;color:rgb(99 102 241 / var(--tw-text-opacity))}.hover\:text-indigo-700:hover{--tw-text-opacity: 1;color:rgb(67 56 202 / var(--tw-text-opacity))}.hover\:text-sky-600:hover{--tw-text-opacity: 1;color:rgb(2 132 199 / var(--tw-text-opacity))}.hover\:text-sky-700:hover{--tw-text-opacity: 1;color:rgb(3 105 161 / var(--tw-text-opacity))}.hover\:text-slate-300:hover{--tw-text-opacity: 1;color:rgb(203 213 225 / var(--tw-text-opacity))}.hover\:text-slate-600:hover{--tw-text-opacity: 1;color:rgb(71 85 105 / var(--tw-text-opacity))}.hover\:text-slate-700:hover{--tw-text-opacity: 1;color:rgb(51 65 85 / var(--tw-text-opacity))}.hover\:text-slate-900:hover{--tw-text-opacity: 1;color:rgb(15 23 42 / var(--tw-text-opacity))}.hover\:underline:hover{text-decoration-line:underline}.hover\:ring-slate-900\/15:hover{--tw-ring-color: rgb(15 23 42 / .15)}.hover\:ring-slate-900\/20:hover{--tw-ring-color: rgb(15 23 42 / .2)}.hover\:before\:opacity-100:hover:before{content:var(--tw-content);opacity:1}.focus\:border-blue-300:focus{--tw-border-opacity: 1;border-color:rgb(147 197 253 / var(--tw-border-opacity))}.focus\:border-blue-700:focus{--tw-border-opacity: 1;border-color:rgb(29 78 216 / var(--tw-border-opacity))}.focus\:border-indigo-500:focus{--tw-border-opacity: 1;border-color:rgb(99 102 241 / var(--tw-border-opacity))}.focus\:border-indigo-700:focus{--tw-border-opacity: 1;border-color:rgb(67 56 202 / var(--tw-border-opacity))}.focus\:border-v1-red-300:focus{--tw-border-opacity: 1;border-color:rgb(248 180 180 / var(--tw-border-opacity))}.focus\:shadow-none:focus{--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.focus\:shadow-outline:focus{--tw-shadow: 0 0 0 3px rgba(147, 197, 253, .5);--tw-shadow-colored: 0 0 0 3px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.focus\:shadow-outline-blue:focus{--tw-shadow: 0 0 0 3px rgba(191, 219, 254, .5);--tw-shadow-colored: 0 0 0 3px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.focus\:shadow-outline-indigo:focus{--tw-shadow: 0 0 0 3px rgba(199, 210, 254, .5);--tw-shadow-colored: 0 0 0 3px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.focus\:shadow-outline-red:focus{--tw-shadow: 0 0 0 3px rgba(254, 202, 202, .5);--tw-shadow-colored: 0 0 0 3px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus\:ring:focus{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.focus\:ring-2:focus{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.focus\:ring-blue-200:focus{--tw-ring-opacity: 1;--tw-ring-color: rgb(191 219 254 / var(--tw-ring-opacity))}.focus\:ring-indigo-500:focus{--tw-ring-opacity: 1;--tw-ring-color: rgb(99 102 241 / var(--tw-ring-opacity))}.focus\:ring-sky-500:focus{--tw-ring-opacity: 1;--tw-ring-color: rgb(14 165 233 / var(--tw-ring-opacity))}.focus\:ring-opacity-50:focus{--tw-ring-opacity: .5}.focus-visible\:border-sky-400[data-focus-visible-added]{--tw-border-opacity: 1;border-color:rgb(56 189 248 / var(--tw-border-opacity))}.focus-visible\:border-sky-400:focus-visible{--tw-border-opacity: 1;border-color:rgb(56 189 248 / var(--tw-border-opacity))}.focus-visible\:ring-2[data-focus-visible-added]{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-2:focus-visible{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-gray-700[data-focus-visible-added]{--tw-ring-opacity: 1;--tw-ring-color: rgb(55 65 81 / var(--tw-ring-opacity))}.focus-visible\:ring-gray-700:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(55 65 81 / var(--tw-ring-opacity))}.focus-visible\:ring-sky-500[data-focus-visible-added]{--tw-ring-opacity: 1;--tw-ring-color: rgb(14 165 233 / var(--tw-ring-opacity))}.focus-visible\:ring-sky-500:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(14 165 233 / var(--tw-ring-opacity))}.focus-visible\:ring-offset-2[data-focus-visible-added]{--tw-ring-offset-width: 2px}.focus-visible\:ring-offset-2:focus-visible{--tw-ring-offset-width: 2px}.focus-visible\:ring-offset-gray-50[data-focus-visible-added]{--tw-ring-offset-color: #f9fafb}.focus-visible\:ring-offset-gray-50:focus-visible{--tw-ring-offset-color: #f9fafb}.active\:bg-indigo-700:active{--tw-bg-opacity: 1;background-color:rgb(67 56 202 / var(--tw-bg-opacity))}.active\:bg-v1-blue-700:active{--tw-bg-opacity: 1;background-color:rgb(26 86 219 / var(--tw-bg-opacity))}.active\:bg-v1-indigo-700:active{--tw-bg-opacity: 1;background-color:rgb(81 69 205 / var(--tw-bg-opacity))}.group[open] .group-open\:hidden{display:none}.group[open] .group-open\:stroke-indigo-500{stroke:#6366f1}.group[open] .group-open\:text-indigo-600{--tw-text-opacity: 1;color:rgb(79 70 229 / var(--tw-text-opacity))}.group:hover .group-hover\:rotate-\[-4deg\]{--tw-rotate: -4deg;transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.group:hover .group-hover\:bg-slate-200{--tw-bg-opacity: 1;background-color:rgb(226 232 240 / var(--tw-bg-opacity))}.group:hover .group-hover\:stroke-slate-600{stroke:#475569}.group:hover .group-hover\:text-indigo-600{--tw-text-opacity: 1;color:rgb(79 70 229 / var(--tw-text-opacity))}.group:hover .group-hover\:text-sky-600{--tw-text-opacity: 1;color:rgb(2 132 199 / var(--tw-text-opacity))}.prose-h3\:mb-4 :is(:where(h3):not(:where([class~="not-prose"] *))){margin-bottom:1rem}.prose-h3\:text-base :is(:where(h3):not(:where([class~="not-prose"] *))){font-size:1rem;line-height:1.5rem}.prose-h3\:leading-6 :is(:where(h3):not(:where([class~="not-prose"] *))){line-height:1.5rem}.prose-a\:relative :is(:where(a):not(:where([class~="not-prose"] *))){position:relative}.prose-a\:z-10 :is(:where(a):not(:where([class~="not-prose"] *))){z-index:10}.prose-a\:font-semibold :is(:where(a):not(:where([class~="not-prose"] *))){font-weight:600}.prose-a\:text-indigo-600 :is(:where(a):not(:where([class~="not-prose"] *))){--tw-text-opacity: 1;color:rgb(79 70 229 / var(--tw-text-opacity))}.prose-a\:text-sky-500 :is(:where(a):not(:where([class~="not-prose"] *))){--tw-text-opacity: 1;color:rgb(14 165 233 / var(--tw-text-opacity))}.hover\:prose-a\:text-indigo-500 :is(:where(a):not(:where([class~="not-prose"] *))):hover{--tw-text-opacity: 1;color:rgb(99 102 241 / var(--tw-text-opacity))}.hover\:prose-a\:text-sky-600 :is(:where(a):not(:where([class~="not-prose"] *))):hover{--tw-text-opacity: 1;color:rgb(2 132 199 / var(--tw-text-opacity))}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}}@media (min-width: 640px){.sm\:left-0{left:0px}.sm\:right-0{right:0px}.sm\:z-auto{z-index:auto}.sm\:-mx-6{margin-left:-1.5rem;margin-right:-1.5rem}.sm\:mx-0{margin-left:0;margin-right:0}.sm\:my-0{margin-top:0;margin-bottom:0}.sm\:-mb-16{margin-bottom:-4rem}.sm\:-ml-\[10rem\]{margin-left:-10rem}.sm\:-ml-\[24rem\]{margin-left:-24rem}.sm\:-ml-\[67\.5rem\]{margin-left:-67.5rem}.sm\:-mr-3{margin-right:-.75rem}.sm\:-mr-3\.5{margin-right:-.875rem}.sm\:-mt-20{margin-top:-5rem}.sm\:mt-0{margin-top:0}.sm\:mt-20{margin-top:5rem}.sm\:mt-24{margin-top:6rem}.sm\:mt-36{margin-top:9rem}.sm\:block{display:block}.sm\:inline{display:inline}.sm\:flex{display:flex}.sm\:table-cell{display:table-cell}.sm\:hidden{display:none}.sm\:h-\[33\.3\%\]{height:33.3%}.sm\:h-auto{height:auto}.sm\:w-2\/3{width:66.666667%}.sm\:max-w-lg{max-width:32rem}.sm\:max-w-xs{max-width:20rem}.sm\:transform-none{transform:none}.sm\:scroll-m-24{scroll-margin:6rem}.sm\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.sm\:flex-row{flex-direction:row}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:gap-y-10{row-gap:2.5rem}.sm\:space-x-10>:not([hidden])~:not([hidden]){--tw-space-x-reverse: 0;margin-right:calc(2.5rem * var(--tw-space-x-reverse));margin-left:calc(2.5rem * calc(1 - var(--tw-space-x-reverse)))}.sm\:space-x-2>:not([hidden])~:not([hidden]){--tw-space-x-reverse: 0;margin-right:calc(.5rem * var(--tw-space-x-reverse));margin-left:calc(.5rem * calc(1 - var(--tw-space-x-reverse)))}.sm\:space-x-4>:not([hidden])~:not([hidden]){--tw-space-x-reverse: 0;margin-right:calc(1rem * var(--tw-space-x-reverse));margin-left:calc(1rem * calc(1 - var(--tw-space-x-reverse)))}.sm\:space-y-0>:not([hidden])~:not([hidden]){--tw-space-y-reverse: 0;margin-top:calc(0px * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(0px * var(--tw-space-y-reverse))}.sm\:space-y-10>:not([hidden])~:not([hidden]){--tw-space-y-reverse: 0;margin-top:calc(2.5rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(2.5rem * var(--tw-space-y-reverse))}.sm\:space-y-24>:not([hidden])~:not([hidden]){--tw-space-y-reverse: 0;margin-top:calc(6rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(6rem * var(--tw-space-y-reverse))}.sm\:space-x-reverse>:not([hidden])~:not([hidden]){--tw-space-x-reverse: 1}.sm\:rounded-2xl{border-radius:1rem}.sm\:rounded-3xl{border-radius:1.5rem}.sm\:rounded-t-lg{border-top-left-radius:.5rem;border-top-right-radius:.5rem}.sm\:px-0{padding-left:0;padding-right:0}.sm\:px-10{padding-left:2.5rem;padding-right:2.5rem}.sm\:px-4{padding-left:1rem;padding-right:1rem}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:px-8{padding-left:2rem;padding-right:2rem}.sm\:pb-24{padding-bottom:6rem}.sm\:pl-6{padding-left:1.5rem}.sm\:pr-6{padding-right:1.5rem}.sm\:pt-16{padding-top:4rem}.sm\:pt-2{padding-top:.5rem}.sm\:pt-20{padding-top:5rem}.sm\:pt-24{padding-top:6rem}.sm\:text-left{text-align:left}.sm\:text-4xl{font-size:2.25rem;line-height:2.5rem}.sm\:text-5xl{font-size:3rem;line-height:1}.sm\:text-7xl{font-size:4.5rem;line-height:1}.sm\:text-base{font-size:1rem;line-height:1.5rem}.sm\:text-sm{font-size:.875rem;line-height:1.25rem}.sm\:leading-5{line-height:1.25rem}.sm\:leading-6{line-height:1.5rem}.sm\:leading-\[3\.5rem\]{line-height:3.5rem}}@media (min-width: 768px){.md\:top-0{top:0px}.md\:top-2{top:.5rem}.md\:top-2\.5{top:.625rem}.md\:top-\[0\.4375rem\]{top:.4375rem}.md\:order-first{order:-9999}.md\:row-span-3{grid-row:span 3 / span 3}.md\:row-start-3{grid-row-start:3}.md\:-ml-64,.md\:-ml-\[16rem\]{margin-left:-16rem}.md\:mt-0{margin-top:0}.md\:mt-10{margin-top:2.5rem}.md\:mt-4{margin-top:1rem}.md\:block{display:block}.md\:flex{display:flex}.md\:grid{display:grid}.md\:hidden{display:none}.md\:w-1\/4{width:25%}.md\:w-3\/4{width:75%}.md\:w-\[35vw\]{width:35vw}.md\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.md\:gap-x-8{-moz-column-gap:2rem;column-gap:2rem}.md\:space-x-0>:not([hidden])~:not([hidden]){--tw-space-x-reverse: 0;margin-right:calc(0px * var(--tw-space-x-reverse));margin-left:calc(0px * calc(1 - var(--tw-space-x-reverse)))}.md\:space-x-6>:not([hidden])~:not([hidden]){--tw-space-x-reverse: 0;margin-right:calc(1.5rem * var(--tw-space-x-reverse));margin-left:calc(1.5rem * calc(1 - var(--tw-space-x-reverse)))}.md\:rounded-full{border-radius:9999px}.md\:bg-blue-500{--tw-bg-opacity: 1;background-color:rgb(59 130 246 / var(--tw-bg-opacity))}.md\:bg-pink-500{--tw-bg-opacity: 1;background-color:rgb(236 72 153 / var(--tw-bg-opacity))}.md\:bg-sky-500{--tw-bg-opacity: 1;background-color:rgb(14 165 233 / var(--tw-bg-opacity))}.md\:bg-slate-100{--tw-bg-opacity: 1;background-color:rgb(241 245 249 / var(--tw-bg-opacity))}.md\:px-2{padding-left:.5rem;padding-right:.5rem}.md\:pb-10{padding-bottom:2.5rem}.md\:pb-16{padding-bottom:4rem}.md\:pl-0{padding-left:0}.md\:pl-12{padding-left:3rem}.md\:pr-12{padding-right:3rem}.md\:pr-6{padding-right:1.5rem}.md\:pt-0{padding-top:0}.md\:pt-8{padding-top:2rem}.md\:pt-\[5\.75rem\]{padding-top:5.75rem}.md\:text-right{text-align:right}.md\:text-xs{font-size:.75rem;line-height:1rem}.md\:font-semibold{font-weight:600}.md\:leading-7{line-height:1.75rem}.md\:text-slate-500{--tw-text-opacity: 1;color:rgb(100 116 139 / var(--tw-text-opacity))}.md\:text-slate-900{--tw-text-opacity: 1;color:rgb(15 23 42 / var(--tw-text-opacity))}.md\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .md\:group-hover\:bg-slate-200{--tw-bg-opacity: 1;background-color:rgb(226 232 240 / var(--tw-bg-opacity))}}@media (min-width: 1024px){.lg\:not-sr-only{position:static;width:auto;height:auto;padding:0;margin:0;overflow:visible;clip:auto;white-space:normal}.lg\:absolute{position:absolute}.lg\:relative{position:relative}.lg\:sticky{position:sticky}.lg\:inset-y-0{top:0px;bottom:0px}.lg\:-left-8{left:-2rem}.lg\:-top-\[10rem\]{top:-10rem}.lg\:left-8{left:2rem}.lg\:left-\[32rem\]{left:32rem}.lg\:right-8{right:2rem}.lg\:top-0{top:0px}.lg\:z-10{z-index:10}.lg\:order-2{order:2}.lg\:col-span-2{grid-column:span 2 / span 2}.lg\:col-span-4{grid-column:span 4 / span 4}.lg\:col-span-8{grid-column:span 8 / span 8}.lg\:row-span-4{grid-row:span 4 / span 4}.lg\:row-start-2{grid-row-start:2}.lg\:mx-0{margin-left:0;margin-right:0}.lg\:-mb-6{margin-bottom:-1.5rem}.lg\:-mb-8{margin-bottom:-2rem}.lg\:-ml-16{margin-left:-4rem}.lg\:-ml-\[22rem\]{margin-left:-22rem}.lg\:-ml-\[32rem\]{margin-left:-32rem}.lg\:-mt-16{margin-top:-4rem}.lg\:-mt-8{margin-top:-2rem}.lg\:-mt-\[15\.9375rem\]{margin-top:-15.9375rem}.lg\:ml-16{margin-left:4rem}.lg\:ml-2{margin-left:.5rem}.lg\:ml-8{margin-left:2rem}.lg\:ml-auto{margin-left:auto}.lg\:mr-0{margin-right:0}.lg\:mr-auto{margin-right:auto}.lg\:mt-0{margin-top:0}.lg\:mt-12{margin-top:3rem}.lg\:mt-24{margin-top:6rem}.lg\:mt-28{margin-top:7rem}.lg\:mt-40{margin-top:10rem}.lg\:block{display:block}.lg\:flex{display:flex}.lg\:grid{display:grid}.lg\:hidden{display:none}.lg\:h-screen{height:100vh}.lg\:w-1\/2{width:50%}.lg\:w-72{width:18rem}.lg\:w-\[19\.1666666rem\]{width:19.1666666rem}.lg\:w-\[19\.5rem\]{width:19.5rem}.lg\:w-\[40rem\]{width:40rem}.lg\:w-auto{width:auto}.lg\:min-w-0{min-width:0rem}.lg\:max-w-3xl{max-width:48rem}.lg\:max-w-5xl{max-width:64rem}.lg\:max-w-\[50rem\]{max-width:50rem}.lg\:max-w-\[63rem\]{max-width:63rem}.lg\:max-w-lg{max-width:32rem}.lg\:max-w-none{max-width:none}.lg\:max-w-sm{max-width:24rem}.lg\:flex-1{flex:1 1 0%}.lg\:flex-auto{flex:1 1 auto}.lg\:flex-none{flex:none}.lg\:grow-0{flex-grow:0}.lg\:grid-cols-12{grid-template-columns:repeat(12,minmax(0,1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.lg\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.lg\:grid-cols-4{grid-template-columns:repeat(4,minmax(0,1fr))}.lg\:flex-row{flex-direction:row}.lg\:flex-row-reverse{flex-direction:row-reverse}.lg\:items-start{align-items:flex-start}.lg\:items-center{align-items:center}.lg\:justify-between{justify-content:space-between}.lg\:gap-0{gap:0px}.lg\:gap-x-8{-moz-column-gap:2rem;column-gap:2rem}.lg\:space-x-0>:not([hidden])~:not([hidden]){--tw-space-x-reverse: 0;margin-right:calc(0px * var(--tw-space-x-reverse));margin-left:calc(0px * calc(1 - var(--tw-space-x-reverse)))}.lg\:space-y-24>:not([hidden])~:not([hidden]){--tw-space-y-reverse: 0;margin-top:calc(6rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(6rem * var(--tw-space-y-reverse))}.lg\:space-y-32>:not([hidden])~:not([hidden]){--tw-space-y-reverse: 0;margin-top:calc(8rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(8rem * var(--tw-space-y-reverse))}.lg\:divide-y-0>:not([hidden])~:not([hidden]){--tw-divide-y-reverse: 0;border-top-width:calc(0px * calc(1 - var(--tw-divide-y-reverse)));border-bottom-width:calc(0px * var(--tw-divide-y-reverse))}.lg\:overflow-x-auto{overflow-x:auto}.lg\:overflow-y-auto{overflow-y:auto}.lg\:border-l{border-left-width:1px}.lg\:border-slate-900\/15{border-color:#0f172a26}.lg\:px-0{padding-left:0;padding-right:0}.lg\:px-16{padding-left:4rem;padding-right:4rem}.lg\:px-8{padding-left:2rem;padding-right:2rem}.lg\:py-12{padding-top:3rem;padding-bottom:3rem}.lg\:py-16{padding-top:4rem;padding-bottom:4rem}.lg\:pb-24{padding-bottom:6rem}.lg\:pb-32{padding-bottom:8rem}.lg\:pb-6{padding-bottom:1.5rem}.lg\:pl-0{padding-left:0}.lg\:pl-8{padding-left:2rem}.lg\:pr-0{padding-right:0}.lg\:pr-3{padding-right:.75rem}.lg\:pr-4{padding-right:1rem}.lg\:pr-8{padding-right:2rem}.lg\:pt-0{padding-top:0}.lg\:pt-20{padding-top:5rem}.lg\:pt-24{padding-top:6rem}.lg\:pt-32{padding-top:8rem}.lg\:shadow-2xl{--tw-shadow: 0 25px 50px -12px rgb(0 0 0 / .25);--tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.lg\:\[mask-image\:linear-gradient\(to_bottom\,transparent\,white_4rem\,white\)\]{-webkit-mask-image:linear-gradient(to bottom,transparent,white 4rem,white);mask-image:linear-gradient(to bottom,transparent,white 4rem,white)}}@media (min-width: 1280px){.xl\:left-\[34rem\]{left:34rem}.xl\:col-span-3{grid-column:span 3 / span 3}.xl\:col-span-7{grid-column:span 7 / span 7}.xl\:col-start-6{grid-column-start:6}.xl\:row-span-5{grid-row:span 5 / span 5}.xl\:row-start-1{grid-row-start:1}.xl\:-mb-16{margin-bottom:-4rem}.xl\:-mr-4{margin-right:-1rem}.xl\:ml-0{margin-left:0}.xl\:mt-32{margin-top:8rem}.xl\:mt-36{margin-top:9rem}.xl\:block{display:block}.xl\:inline{display:inline}.xl\:hidden{display:none}.xl\:max-w-\[43\.5rem\]{max-width:43.5rem}.xl\:max-w-container{max-width:85rem}.xl\:max-w-none{max-width:none}.xl\:scroll-m-32{scroll-margin:8rem}.xl\:grid-cols-12{grid-template-columns:repeat(12,minmax(0,1fr))}.xl\:grid-cols-4{grid-template-columns:repeat(4,minmax(0,1fr))}.xl\:justify-end{justify-content:flex-end}.xl\:gap-x-8{-moz-column-gap:2rem;column-gap:2rem}.xl\:px-0{padding-left:0;padding-right:0}.xl\:px-20{padding-left:5rem;padding-right:5rem}.xl\:pb-32{padding-bottom:8rem}.xl\:text-5xl{font-size:3rem;line-height:1}.xl\:leading-\[3\.5rem\]{line-height:3.5rem}}.\[\&\:\:-webkit-details-marker\]\:hidden::-webkit-details-marker{display:none}.\[\&\:focus\:not\(\:focus-visible\)\]\:outline-none:focus:not([data-focus-visible-added]){outline:2px solid transparent;outline-offset:2px}.\[\&\:focus\:not\(\:focus-visible\)\]\:outline-none:focus:not(:focus-visible){outline:2px solid transparent;outline-offset:2px}.\[\&\:not\(\:focus-visible\)\]\:focus\:outline-none:focus:not([data-focus-visible-added]){outline:2px solid transparent;outline-offset:2px}.\[\&\:not\(\:focus-visible\)\]\:focus\:outline-none:focus:not(:focus-visible){outline:2px solid transparent;outline-offset:2px}.\[\&\>\:first-child\]\:mt-0>:first-child{margin-top:0}.\[\&\>\:last-child\]\:mb-0>:last-child{margin-bottom:0}
</style>
<div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
  <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
    <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="mx-auto max-w-2xl text-center">
    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Test Metanoia</h2>
    <p class="mt-2 text-lg leading-8 text-gray-600">Te ayudamos a conocer tus niveles de ansiedad y estres.</p>
  </div>
  <form action="#" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
      <div>
        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">1er pregunta</label>
        <div class="mt-2.5">
          <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div>
        <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">2da</label>
        <div class="mt-2.5">
          <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="company" class="block text-sm font-semibold leading-6 text-gray-900">3ra preguntashion</label>
        <div class="mt-2.5">
          <input type="text" name="company" id="company" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">4</label>
        <div class="mt-2.5">
          <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="phone-number" class="block text-sm font-semibold leading-6 text-gray-900">5</label>
        <div class="relative mt-2.5">
          <div class="absolute inset-y-0 left-0 flex items-center">
            <label for="country" class="sr-only">Country</label>
            <select id="country" name="country" class="h-full rounded-md border-0 bg-transparent bg-none py-0 pl-4 pr-9 text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
              <option>US</option>
              <option>CA</option>
              <option>EU</option>
            </select>
            <svg class="pointer-events-none absolute right-3 top-0 h-full w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </div>
          <input type="tel" name="phone-number" id="phone-number" autocomplete="tel" class="block w-full rounded-md border-0 px-3.5 py-2 pl-20 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">6ta</label>
        <div class="mt-2.5">
          <textarea name="message" id="message" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
        </div>
      </div>
      <div class="flex gap-x-4 sm:col-span-2">
        <div class="flex h-6 items-center">
          <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
          <button type="button" class="bg-gray-200 flex w-8 flex-none cursor-pointer rounded-full p-px ring-1 ring-inset ring-gray-900/5 transition-colors duration-200 ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" role="switch" aria-checked="false" aria-labelledby="switch-1-label">
            <span class="sr-only">Acepta las politicas de privacidad</span>
            <!-- Enabled: "translate-x-3.5", Not Enabled: "translate-x-0" -->
            <span aria-hidden="true" class="translate-x-0 h-4 w-4 transform rounded-full bg-white shadow-sm ring-1 ring-gray-900/5 transition duration-200 ease-in-out"></span>
          </button>
        </div>
        <label class="text-sm leading-6 text-gray-600" id="switch-1-label">
          Acepta las
          <a href="#" class="font-semibold text-indigo-600">politicas&nbsp;privacidad</a>.
        </label>
      </div>
    </div>
    <div class="mt-10">
      <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Terminar</button>
    </div>
  </form>
</div>
