@import 'https://fonts.googleapis.com/css?family=Kanit:200|Nunito+Sans:300';

html {
    font-family: Nunito Sans;
    font-size: 17px;
    font-weight: normal;
    line-height: 1.58;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    background: #fff;
    color: #333;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-rendering: optimizeLegibility
}

body {
    margin: 0
}

.clear {
    clear: both
}

a {
    background-color: transparent;
    -webkit-text-decoration-skip: objects
}

a:active, a:hover {
    outline: 0
}

a, .uk-link {
    color: <?php echo $templatevars['dark']; ?>;
    text-decoration: none;
    cursor: pointer
}

#tm-main .uk-page a {
    color: <?php echo $templatevars['light']; ?>;
    text-decoration: none;
    cursor: pointer
}

a:hover, .uk-link:hover {
    color: <?php echo $templatevars['light']; ?>;
    text-decoration: none
}

abbr[title] {
    border-bottom: 0;
    text-decoration: underline;
    text-decoration: underline dotted
}

b, strong {
    font-weight: inherit
}

b, strong {
    font-weight: bolder
}

:not(pre) > code,
:not(pre) > kbd,
:not(pre) > samp {
    font-size: 13px;
    font-family: Consolas, monaco, monospace;
    color: <?php echo $templatevars['light']; ?>;
    white-space: nowrap;
    padding: 1px 4px;
    border: 1px solid #eee;
    border-radius: 2px
}

em {
    color: <?php echo $templatevars['light']; ?>;
}

ins {
    background: #ffd;
    color: #222;
    text-decoration: none
}

mark {
    background: #ffd;
    color: #222;
}

q {
    font-style: italic
}

small {
    font-size: 80%
}

sub, sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline
}

sup {
    top: -0.5em
}

sub {
    bottom: -0.25em
}

audio, canvas, iframe, img, svg, video {
    vertical-align: middle
}

audio, canvas, img, video {
    max-width: 100%;
    height: auto;
    box-sizing: border-box
}

img {
    border-style: none
}

svg:not(:root) {
    overflow: hidden
}

p, ul, ol, dl, pre, address, fieldset, figure {
    margin: 0 0 30px 0
}

* + p, * + ul, * + ol, * + dl, * + pre, * + address, * + fieldset, * + figure {
    margin-top: 30px
}

h1, .uk-h1, h2, .uk-h2, h3, .uk-h3, h4, .uk-h4, h5, .uk-h5, h6, .uk-h6 {
    margin: 0 0 30px 0;
    font-family: inherit;
    font-weight: 300;
    color: #333;
    text-transform: inherit
}

* + h1, * + .uk-h1, * + h2, * + .uk-h2, * + h3, * + .uk-h3, * + h4, * + .uk-h4, * + h5, * + .uk-h5, * + h6, * + .uk-h6 {
    margin-top: 40px
}

h1, .uk-h1 {
    font-size: 46px;
    line-height: 1.2;
    font-weight: 300
}

h2, .uk-h2 {
    font-size: 38px;
    line-height: 1.3;
    font-weight: 300
}

h3, .uk-h3 {
    font-size: 32px;
    line-height: 1.4;
    font-weight: 300
}

h4, .uk-h4 {
    font-size: 26px;
    line-height: 1.4;
    font-weight: 300
}

h5, .uk-h5 {
    font-size: 20px;
    line-height: 1.4;
    font-weight: 300
}

h6, .uk-h6 {
    font-size: 17px;
    line-height: 1.4;
    font-weight: 300
}

ul, ol {
    padding-left: 30px
}

ul > li > ul, ul > li > ol, ol > li > ol, ol > li > ul {
    margin: 0
}

dt {
    font-weight: bold
}

dd {
    margin-left: 0
}

hr, .uk-hr {
    box-sizing: content-box;
    height: 0;
    overflow: visible;
    margin: 0 0 30px 0;
    border: 0;
    border-top: 1px solid #eee
}

* + hr, * + .uk-hr {
    margin-top: 30px
}

address {
    font-style: normal
}

blockquote {
    margin: 0 0 30px 0;
    font-size: 20px;
    line-height: 1.5;
    font-style: italic;
    font-weight: 300
}

* + blockquote {
    margin-top: 30px
}

blockquote p:last-of-type {
    margin-bottom: 0
}

blockquote footer {
    margin-top: 40px;
    font-size: 17px;
    line-height: 1.5;
    font-weight: 300
}

pre {
    font: 14px / 1.5 Consolas, monaco, monospace;
    color: #444;
    -moz-tab-size: 4;
    tab-size: 4;
    overflow: auto;
    padding: 10px;
    background: #fafafa
}

pre code {
    font-family: Consolas, monaco, monospace
}

::-moz-selection {
    background: <?php echo $templatevars['light']; ?>;
    color: #fff;
    text-shadow: none
}

::selection {
    background: <?php echo $templatevars['light']; ?>;
    color: #fff;
    text-shadow: none
}

article, aside, details, figcaption, figure, footer, header, main, nav, section, summary {
    display: block
}

progress {
    vertical-align: baseline
}

template, [hidden] {
    display: none
}

iframe {
    border: 0
}

a, area, button, input, label, select, summary, textarea {
    touch-action: manipulation
}

.var-media-s:before {
    content: '640px'
}

.var-media-m:before {
    content: '960px'
}

.var-media-l:before {
    content: '1200px'
}

.var-media-xl:before {
    content: '1600px'
}

a.uk-link-muted, .uk-link-muted a {
    color: #98a6ad
}

a.uk-link-muted:hover, .uk-link-muted a:hover {
    color: #424242
}

a.uk-link-text:not(:hover), .uk-link-text a:not(:hover) {
    color: inherit !important
}

a.uk-link-text:hover, .uk-link-text a:hover {
    color: #98a6ad
}

a.uk-link-reset, a.uk-link-reset:hover, .uk-link-reset a, .uk-link-reset a:hover {
    color: inherit !important;
    text-decoration: none !important
}

.uk-heading-primary {
    font-size: 46px;
    line-height: 1.2;
    color: #222;
    font-weight: 300
}

@media (min-width: 960px) {
    .uk-heading-primary {
        font-size: 52px;
        line-height: 1.1
    }
}

.uk-heading-hero {
    font-size: 46px;
    line-height: 1.1;
    color: #111;
    font-family: Kanit;
    font-weight: 200;
    text-transform: uppercase
}

@media (min-width: 640px) {
    .uk-heading-hero {
        font-size: 52px;
        line-height: 1
    }
}

@media (min-width: 960px) {
    .uk-heading-hero {
        font-size: 72px;
        line-height: 1
    }
}

.uk-heading-divider {
    padding-bottom: 10px;
    border-bottom: 2px solid #eee
}

.uk-heading-bullet {
    position: relative
}

.uk-heading-bullet::before {
    content: "";
    display: inline-block;
    position: relative;
    top: calc(-0.1 * 1em);
    vertical-align: middle;
    height: .9em;
    margin-right: 10px;
    border-left: 5px solid #eee
}

.uk-heading-line {
    overflow: hidden
}

.uk-heading-line > * {
    display: inline-block;
    position: relative
}

.uk-heading-line > :before, .uk-heading-line > :after {
    content: "";
    position: absolute;
    top: calc(50% - (2px / 2));
    width: 2000px;
    border-bottom: 2px solid #eee
}

.uk-heading-line > :before {
    right: 100%;
    margin-right: .6em
}

.uk-heading-line > :after {
    left: 100%;
    margin-left: .6em
}

[class*='uk-divider'] {
    border: 0;
    margin-bottom: 30px
}

* + [class*='uk-divider'] {
    margin-top: 30px
}

.uk-divider-icon {
    position: relative;
    height: 20px;
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2220%22%20height%3D%2220%22%20viewBox%3D%220%200%2020%2020%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Ccircle%20fill%3D%22none%22%20stroke%3D%22%23eee%22%20stroke-width%3D%222%22%20cx%3D%2210%22%20cy%3D%2210%22%20r%3D%227%22%3E%3C%2Fcircle%3E%0A%3C%2Fsvg%3E%0A");
    background-repeat: no-repeat;
    background-position: 50% 50%
}

.uk-divider-icon::before, .uk-divider-icon::after {
    content: "";
    position: absolute;
    top: 50%;
    max-width: calc(50% - (50px / 2));
    border-bottom: 1px solid #eee
}

.uk-divider-icon::before {
    right: calc(50% + (50px / 2));
    width: 100%
}

.uk-divider-icon::after {
    left: calc(50% + (50px / 2));
    width: 100%
}

.uk-divider-small {
    line-height: 0
}

.uk-divider-small::after {
    content: "";
    display: inline-block;
    width: 100px;
    max-width: 100%;
    border-top: 2px solid #eee;
    vertical-align: top
}

.uk-list,
.tm-child-list > ul {
    padding: 0;
    list-style: none
}

.uk-list > li::before,
.uk-list > li::after,
.tm-child-list > ul > li::before,
.tm-child-list > ul > li::after {
    content: "";
    display: table
}

.uk-list > li::after,
.tm-child-list > ul > li::after {
    clear: both
}

.uk-list > li > :last-child,
.tm-child-list > ul > li > :last-child {
    margin-bottom: 0
}

.uk-list ul, .woocommerce-page .widget_product_categories ul ul, .woocommerce .widget_product_categories ul ul, .tm-child-list > ul ul {
    margin: 0;
    padding-left: 25px;
    list-style: none
}

.uk-list > li:nth-child(n+2), .uk-list > li > ul, .woocommerce-page .widget_product_categories ul > li:nth-child(n+2), .woocommerce-page .widget_product_categories ul > li > ul, .woocommerce .widget_product_categories ul > li:nth-child(n+2), .woocommerce .widget_product_categories ul > li > ul, .tm-child-list > ul > li:nth-child(n+2), .tm-child-list > ul > li > ul {
    margin-top: 10px
}

.uk-list-divider > li:nth-child(n+2), .tm-child-list-divider > ul > li:nth-child(n+2) {
    margin-top: 10px;
    padding-top: 10px;
    border-top: 1px solid #eee
}

.uk-list-striped > li {
    padding: 10px 10px
}

.uk-list-striped > li:nth-of-type(odd) {
    background: #fafafa
}

.uk-list-striped > li:nth-child(n+2) {
    margin-top: 0
}

.uk-list-bullet > li {
    position: relative;
    padding-left: calc(1.58em + 10px)
}

.uk-list-bullet > li::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 1.58em;
    height: 1.58em;
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%226%22%20height%3D%226%22%20viewBox%3D%220%200%206%206%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Ccircle%20fill%3D%22%236caddc%22%20cx%3D%223%22%20cy%3D%223%22%20r%3D%223%22%3E%3C%2Fcircle%3E%0A%3C%2Fsvg%3E");
    background-repeat: no-repeat;
    background-position: 50% 50%;
    float: left
}

.uk-list-large > li:nth-child(n+2), .uk-list-large > li > ul {
    margin-top: 30px
}

.uk-list-large.uk-list-divider > li:nth-child(n+2), .uk-list-large.tm-child-list-divider > ul > li:nth-child(n+2) {
    margin-top: 30px;
    padding-top: 30px
}

.uk-list-large.uk-list-striped > li {
    padding: 30px 10px
}

.uk-list-large.uk-list-striped > li:nth-child(n+2) {
    margin-top: 0
}

.uk-description-list > dt {
    color: #222;
    font-size: 17px;
    font-weight: 300
}

.uk-description-list > dt:nth-child(n+2) {
    margin-top: 30px
}

.uk-description-list > dd {
    font-size: 17px
}

.uk-description-list-divider > dt:nth-child(n+2) {
    margin-top: 30px;
    padding-top: 30px;
    border-top: 1px solid #eee
}

.uk-table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    margin-bottom: 30px
}

* + .uk-table {
    margin-top: 30px
}

.uk-table th {
    padding: 16px 12px;
    text-align: left;
    vertical-align: bottom;
    font-size: 14px;
    font-weight: normal;
    color: #98a6ad;
    text-transform: uppercase
}

.uk-table td {
    padding: 16px 12px;
    vertical-align: top
}

.uk-table td > :last-child {
    margin-bottom: 0
}

.uk-table tfoot {
    font-size: 14px
}

.uk-table caption {
    font-size: 14px;
    text-align: left;
    color: #98a6ad
}

.uk-table > tr.uk-active, .uk-table tbody tr.uk-active {
    background: #ffd
}

.uk-table-middle, .uk-table-middle td {
    vertical-align: middle !important
}

.uk-table-divider > tr:not(:first-child),
.uk-table-divider > :not(:first-child) > tr,
.uk-table-divider > :first-child > tr:not(:first-child) {
    border-top: 1px solid #eee
}

.uk-table-striped > tr:nth-of-type(odd),
.uk-table-striped tbody tr:nth-of-type(odd) {
    background: #fafafa
}

.uk-table-hover > tr:hover,
.uk-table-hover tbody tr:hover {
    background: #ffd
}

.uk-table-small th, .uk-table-small td {
    padding: 10px 12px
}

.uk-table-justify th:first-child,
.uk-table-justify td:first-child {
    padding-left: 0
}

.uk-table-justify th:last-child,
.uk-table-justify td:last-child {
    padding-right: 0
}

.uk-table-shrink {
    width: 1px
}

.uk-table-expand {
    min-width: 300px
}

.uk-table-link {
    padding: 0 !important
}

.uk-table-link > a {
    display: block;
    padding: 16px 12px
}

.uk-table-small .uk-table-link > a {
    padding: 10px 12px
}

@media (max-width: 959px) {
    .uk-table-responsive, .uk-table-responsive tbody, .uk-table-responsive th, .uk-table-responsive td, .uk-table-responsive tr {
        display: block
    }

    .uk-table-responsive thead {
        display: none
    }

    .uk-table-responsive th, .uk-table-responsive td {
        width: auto !important;
        max-width: none !important;
        min-width: 0 !important;
        overflow: visible !important;
        white-space: normal !important
    }

    .uk-table-responsive th:not(:first-child):not(.uk-table-link), .uk-table-responsive td:not(:first-child):not(.uk-table-link), .uk-table-responsive .uk-table-link:not(:first-child) > a {
        padding-top: 5px !important
    }

    .uk-table-responsive th:not(:last-child):not(.uk-table-link), .uk-table-responsive td:not(:last-child):not(.uk-table-link), .uk-table-responsive .uk-table-link:not(:last-child) > a {
        padding-bottom: 5px !important
    }

    .uk-table-justify.uk-table-responsive th, .uk-table-justify.uk-table-responsive td {
        padding-left: 0;
        padding-right: 0
    }
}

.uk-table tbody tr {
    -webkit-transition: background-color .1s linear;
    transition: background-color .1s linear
}

.uk-icon {
    margin: 0;
    border: 0;
    overflow: visible;
    font: inherit;
    color: inherit;
    text-transform: none;
    padding: 0;
    background-color: transparent;
    cursor: pointer;
    display: inline-block;
    fill: currentcolor;
    line-height: 0
}

.uk-icon::-moz-focus-inner {
    border: 0;
    padding: 0
}

.uk-icon [fill*='#']:not(.uk-preserve) {
    fill: currentcolor
}

.uk-icon [stroke*='#']:not(.uk-preserve) {
    stroke: currentcolor
}

.uk-icon > * {
    transform: translate(0, 0)
}

.uk-icon-image {
    width: 20px;
    height: 20px;
    background-position: 50% 50%;
    background-repeat: no-repeat;
    background-size: contain;
    vertical-align: middle
}

.uk-icon-link {
    color: #98a6ad
}

.uk-icon-link:hover, .uk-icon-link:focus {
    color: <?php echo $templatevars['color']; ?>;
    outline: 0
}

.uk-icon-link:active, .uk-active > .uk-icon-link {
    color: <?php echo $templatevars['light']; ?>;
}

.uk-icon-button {
    box-sizing: border-box;
    width: 36px;
    height: 36px;
    border-radius: 500px;
    background: #f3f3f3;
    color: #98a6ad;
    vertical-align: middle;
    display: -ms-inline-flexbox;
    display: -webkit-inline-flex;
    display: inline-flex;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
    -webkit-transition: .1s ease-in-out;
    transition: .1s ease-in-out;
    -webkit-transition-property: color, background-color, border-color, box-shadow;
    transition-property: color, background-color, border-color, box-shadow
}

.uk-icon-button:hover, .uk-icon-button:focus {
    background-color: <?php echo $templatevars['color']; ?>;
    color: #fff;
    outline: 0
}

.uk-icon-button:active, .uk-active > .uk-icon-button {
    background-color: <?php echo $templatevars['light']; ?>;
    color: #fff;
}

.uk-range {
    box-sizing: border-box;
    margin: 0;
    vertical-align: middle;
    max-width: 100%;
    width: 100%;
    -webkit-appearance: none;
    background: transparent;
    padding: 0
}

.uk-range:focus {
    outline: 0
}

.uk-range::-moz-focus-outer {
    border: 0
}

.uk-range::-ms-track {
    height: 15px;
    background: transparent;
    border-color: transparent;
    color: transparent
}

.uk-range:not(:disabled)::-webkit-slider-thumb {
    cursor: pointer
}

.uk-range:not(:disabled)::-moz-range-thumb {
    cursor: pointer
}

.uk-range:not(:disabled)::-ms-thumb {
    cursor: pointer
}

.uk-range::-webkit-slider-thumb {
    -webkit-appearance: none;
    margin-top: -7px;
    height: 15px;
    width: 15px;
    border-radius: 500px;
    background: <?php echo $templatevars['dark']; ?>;
}

.uk-range::-moz-range-thumb {
    border: 0;
    height: 15px;
    width: 15px;
    border-radius: 500px;
    background: <?php echo $templatevars['dark']; ?>;
}

.uk-range::-ms-thumb {
    margin-top: 0
}

.uk-range::-ms-thumb {
    border: 0;
    height: 15px;
    width: 15px;
    border-radius: 500px;
    background: <?php echo $templatevars['dark']; ?>;
}

.uk-range::-ms-tooltip {
    display: none
}

.uk-range::-webkit-slider-runnable-track {
    height: 3px;
    background: #ededed
}

.uk-range:focus::-webkit-slider-runnable-track, .uk-range:active::-webkit-slider-runnable-track {
    background: #d4d4d4
}

.uk-range::-moz-range-track {
    height: 3px;
    background: #ededed
}

.uk-range:focus::-moz-range-track {
    background: #d4d4d4
}

.uk-range::-ms-fill-lower, .uk-range::-ms-fill-upper {
    height: 3px;
    background: #ededed
}

.uk-range:focus::-ms-fill-lower, .uk-range:focus::-ms-fill-upper {
    background: #d4d4d4
}

.uk-input, .uk-select, .uk-textarea, .uk-radio, .uk-checkbox, .woocommerce-page input.input-text, .woocommerce input.input-text, .woocommerce-page select, .woocommerce select, .woocommerce-page .woocommerce-ordering select, .woocommerce .woocommerce-ordering select, .woocommerce-page #review_form #respond input[type='text'], .woocommerce #review_form #respond input[type='text'], .woocommerce-page #review_form #respond input[type='email'], .woocommerce #review_form #respond input[type='email'], .woocommerce-page #review_form #respond textarea, .woocommerce #review_form #respond textarea, .woocommerce-page form .form-row select, .woocommerce form .form-row select, .woocommerce-page form .form-row textarea, .woocommerce form .form-row textarea {
    box-sizing: border-box;
    margin: 0;
    border-radius: 0;
    font: inherit
}

.uk-input, .woocommerce-page input.input-text, .woocommerce input.input-text, .woocommerce-page #review_form #respond input[type='text'], .woocommerce #review_form #respond input[type='text'], .woocommerce-page #review_form #respond input[type='email'], .woocommerce #review_form #respond input[type='email'] {
    overflow: visible
}

.uk-select, .woocommerce-page select, .woocommerce select, .woocommerce-page .woocommerce-ordering select, .woocommerce .woocommerce-ordering select, .woocommerce-page form .form-row select, .woocommerce form .form-row select {
    text-transform: none
}

.uk-select optgroup, .woocommerce-page select optgroup, .woocommerce select optgroup, .woocommerce-page form .form-row select optgroup, .woocommerce form .form-row select optgroup {
    font: inherit;
    font-weight: bold
}

.uk-textarea, .woocommerce-page #review_form #respond textarea, .woocommerce #review_form #respond textarea, .woocommerce-page form .form-row textarea, .woocommerce form .form-row textarea {
    overflow: auto
}

.uk-input[type="search"]::-webkit-search-cancel-button, .uk-input[type="search"]::-webkit-search-decoration, .woocommerce-page input.input-text[type="search"]::-webkit-search-cancel-button, .woocommerce-page input.input-text[type="search"]::-webkit-search-decoration, .woocommerce input.input-text[type="search"]::-webkit-search-cancel-button, .woocommerce input.input-text[type="search"]::-webkit-search-decoration, .woocommerce-page #review_form #respond input[type='text'][type="search"]::-webkit-search-cancel-button, .woocommerce-page #review_form #respond input[type='text'][type="search"]::-webkit-search-decoration, .woocommerce #review_form #respond input[type='text'][type="search"]::-webkit-search-cancel-button, .woocommerce #review_form #respond input[type='text'][type="search"]::-webkit-search-decoration, .woocommerce-page #review_form #respond input[type='email'][type="search"]::-webkit-search-cancel-button, .woocommerce-page #review_form #respond input[type='email'][type="search"]::-webkit-search-decoration, .woocommerce #review_form #respond input[type='email'][type="search"]::-webkit-search-cancel-button, .woocommerce #review_form #respond input[type='email'][type="search"]::-webkit-search-decoration {
    -webkit-appearance: none
}

.uk-input[type="number"]::-webkit-inner-spin-button, .uk-input[type="number"]::-webkit-outer-spin-button, .woocommerce-page input.input-text[type="number"]::-webkit-inner-spin-button, .woocommerce-page input.input-text[type="number"]::-webkit-outer-spin-button, .woocommerce input.input-text[type="number"]::-webkit-inner-spin-button, .woocommerce input.input-text[type="number"]::-webkit-outer-spin-button, .woocommerce-page #review_form #respond input[type='text'][type="number"]::-webkit-inner-spin-button, .woocommerce-page #review_form #respond input[type='text'][type="number"]::-webkit-outer-spin-button, .woocommerce #review_form #respond input[type='text'][type="number"]::-webkit-inner-spin-button, .woocommerce #review_form #respond input[type='text'][type="number"]::-webkit-outer-spin-button, .woocommerce-page #review_form #respond input[type='email'][type="number"]::-webkit-inner-spin-button, .woocommerce-page #review_form #respond input[type='email'][type="number"]::-webkit-outer-spin-button, .woocommerce #review_form #respond input[type='email'][type="number"]::-webkit-inner-spin-button, .woocommerce #review_form #respond input[type='email'][type="number"]::-webkit-outer-spin-button {
    height: auto
}

.uk-input::-moz-placeholder, .uk-textarea::-moz-placeholder, .woocommerce-page input.input-text::-moz-placeholder, .woocommerce input.input-text::-moz-placeholder, .woocommerce-page #review_form #respond input[type='text']::-moz-placeholder, .woocommerce #review_form #respond input[type='text']::-moz-placeholder, .woocommerce-page #review_form #respond input[type='email']::-moz-placeholder, .woocommerce #review_form #respond input[type='email']::-moz-placeholder, .woocommerce-page #review_form #respond textarea::-moz-placeholder, .woocommerce #review_form #respond textarea::-moz-placeholder, .woocommerce-page form .form-row textarea::-moz-placeholder, .woocommerce form .form-row textarea::-moz-placeholder {
    opacity: 1
}

.uk-radio, .uk-checkbox {
    padding: 0
}

.uk-radio:not(:disabled), .uk-checkbox:not(:disabled) {
    cursor: pointer
}

.uk-fieldset {
    border: 0;
    margin: 0;
    padding: 0
}

.uk-input, .uk-textarea, .woocommerce-page input.input-text, .woocommerce input.input-text, .woocommerce-page #review_form #respond input[type='text'], .woocommerce #review_form #respond input[type='text'], .woocommerce-page #review_form #respond input[type='email'], .woocommerce #review_form #respond input[type='email'], .woocommerce-page #review_form #respond textarea, .woocommerce #review_form #respond textarea, .woocommerce-page form .form-row textarea, .woocommerce form .form-row textarea {
    -webkit-appearance: none
}

.uk-input, .uk-select, .uk-textarea, .woocommerce-page input.input-text, .woocommerce input.input-text, .woocommerce-page select, .woocommerce select, .woocommerce-page .woocommerce-ordering select, .woocommerce .woocommerce-ordering select, .woocommerce-page #review_form #respond input[type='text'], .woocommerce #review_form #respond input[type='text'], .woocommerce-page #review_form #respond input[type='email'], .woocommerce #review_form #respond input[type='email'], .woocommerce-page #review_form #respond textarea, .woocommerce #review_form #respond textarea, .woocommerce-page form .form-row select, .woocommerce form .form-row select, .woocommerce-page form .form-row textarea, .woocommerce form .form-row textarea {
    max-width: 100%;
    width: 100%;
    border: 0 none;
    padding: 0 10px;
    background: #fff;
    color: #222;
    -webkit-transition: .2s ease-in-out;
    transition: .2s ease-in-out;
    -webkit-transition-property: color, background-color, border-color, box-shadow;
    transition-property: color, background-color, border-color, box-shadow
}

.uk-input, .uk-select:not([multiple]):not([size]), .woocommerce-page input.input-text, .woocommerce input.input-text, .woocommerce-page select:not([multiple]):not([size]), .woocommerce select:not([multiple]):not([size]), .woocommerce-page #review_form #respond input[type='text'], .woocommerce #review_form #respond input[type='text'], .woocommerce-page #review_form #respond input[type='email'], .woocommerce #review_form #respond input[type='email'], .woocommerce-page form .form-row select:not([multiple]):not([size]), .woocommerce form .form-row select:not([multiple]):not([size]) {
    height: 45px;
    vertical-align: middle;
    display: inline-block;
    border: 2px solid #f5f5f5
}

.uk-input:not(input), .uk-select:not(select), .woocommerce-page input.input-text:not(input), .woocommerce input.input-text:not(input), .woocommerce-page select:not(select), .woocommerce select:not(select), .woocommerce-page #review_form #respond input[type='text']:not(input), .woocommerce #review_form #respond input[type='text']:not(input), .woocommerce-page #review_form #respond input[type='email']:not(input), .woocommerce #review_form #respond input[type='email']:not(input), .woocommerce-page form .form-row select:not(select), .woocommerce form .form-row select:not(select) {
    line-height: 41px
}

.uk-select[multiple], .uk-select[size], .uk-textarea, .woocommerce-page select[multiple], .woocommerce-page select[size], .woocommerce select[multiple], .woocommerce select[size], .woocommerce-page #review_form #respond textarea, .woocommerce #review_form #respond textarea, .woocommerce-page form .form-row select[multiple], .woocommerce-page form .form-row select[size], .woocommerce form .form-row select[multiple], .woocommerce form .form-row select[size], .woocommerce-page form .form-row textarea, .woocommerce form .form-row textarea {
    padding-top: 4px;
    padding-bottom: 4px;
    vertical-align: top;
    border: 2px solid #f5f5f5
}

.uk-input:focus, .uk-select:focus, .uk-textarea:focus, .woocommerce-page input.input-text:focus, .woocommerce input.input-text:focus, .woocommerce-page select:focus, .woocommerce select:focus, .woocommerce-page #review_form #respond input[type='text']:focus, .woocommerce #review_form #respond input[type='text']:focus, .woocommerce-page #review_form #respond input[type='email']:focus, .woocommerce #review_form #respond input[type='email']:focus, .woocommerce-page #review_form #respond textarea:focus, .woocommerce #review_form #respond textarea:focus, .woocommerce-page form .form-row select:focus, .woocommerce form .form-row select:focus, .woocommerce-page form .form-row textarea:focus, .woocommerce form .form-row textarea:focus {
    outline: 0;
    background-color: #fff;
    color: #222;
    border-color: #e8e8e8 !important
}

.uk-input:disabled, .uk-select:disabled, .uk-textarea:disabled, .woocommerce-page input.input-text:disabled, .woocommerce input.input-text:disabled, .woocommerce-page select:disabled, .woocommerce select:disabled, .woocommerce-page #review_form #respond input[type='text']:disabled, .woocommerce #review_form #respond input[type='text']:disabled, .woocommerce-page #review_form #respond input[type='email']:disabled, .woocommerce #review_form #respond input[type='email']:disabled, .woocommerce-page #review_form #respond textarea:disabled, .woocommerce #review_form #respond textarea:disabled, .woocommerce-page form .form-row select:disabled, .woocommerce form .form-row select:disabled, .woocommerce-page form .form-row textarea:disabled, .woocommerce form .form-row textarea:disabled {
    background-color: #fafafa;
    color: #98a6ad;
    border-color: transparent !important;
    box-shadow: none
}

.uk-input:-ms-input-placeholder, .woocommerce-page input.input-text:-ms-input-placeholder, .woocommerce input.input-text:-ms-input-placeholder, .woocommerce-page #review_form #respond input[type='text']:-ms-input-placeholder, .woocommerce #review_form #respond input[type='text']:-ms-input-placeholder, .woocommerce-page #review_form #respond input[type='email']:-ms-input-placeholder, .woocommerce #review_form #respond input[type='email']:-ms-input-placeholder {
    color: #98a6ad !important
}

.uk-input::-moz-placeholder, .woocommerce-page input.input-text::-moz-placeholder, .woocommerce input.input-text::-moz-placeholder, .woocommerce-page #review_form #respond input[type='text']::-moz-placeholder, .woocommerce #review_form #respond input[type='text']::-moz-placeholder, .woocommerce-page #review_form #respond input[type='email']::-moz-placeholder, .woocommerce #review_form #respond input[type='email']::-moz-placeholder {
    color: #98a6ad
}

.uk-input::-webkit-input-placeholder, .woocommerce-page input.input-text::-webkit-input-placeholder, .woocommerce input.input-text::-webkit-input-placeholder, .woocommerce-page #review_form #respond input[type='text']::-webkit-input-placeholder, .woocommerce #review_form #respond input[type='text']::-webkit-input-placeholder, .woocommerce-page #review_form #respond input[type='email']::-webkit-input-placeholder, .woocommerce #review_form #respond input[type='email']::-webkit-input-placeholder {
    color: #98a6ad
}

.uk-textarea:-ms-input-placeholder, .woocommerce-page #review_form #respond textarea:-ms-input-placeholder, .woocommerce #review_form #respond textarea:-ms-input-placeholder, .woocommerce-page form .form-row textarea:-ms-input-placeholder, .woocommerce form .form-row textarea:-ms-input-placeholder {
    color: #98a6ad !important
}

.uk-textarea::-moz-placeholder, .woocommerce-page #review_form #respond textarea::-moz-placeholder, .woocommerce #review_form #respond textarea::-moz-placeholder, .woocommerce-page form .form-row textarea::-moz-placeholder, .woocommerce form .form-row textarea::-moz-placeholder {
    color: #98a6ad
}

.uk-textarea::-webkit-input-placeholder, .woocommerce-page #review_form #respond textarea::-webkit-input-placeholder, .woocommerce #review_form #respond textarea::-webkit-input-placeholder, .woocommerce-page form .form-row textarea::-webkit-input-placeholder, .woocommerce form .form-row textarea::-webkit-input-placeholder {
    color: #98a6ad
}

.uk-form-small {
    font-size: 14px
}

.uk-form-small:not(textarea):not([multiple]):not([size]) {
    height: 30px;
    padding-left: 8px;
    padding-right: 8px
}

.uk-form-small:not(select):not(input):not(textarea) {
    line-height: 26px
}

.uk-form-large {
    font-size: 17px
}

.uk-form-large:not(textarea):not([multiple]):not([size]) {
    height: 60px;
    padding-left: 12px;
    padding-right: 12px
}

.uk-form-large:not(select):not(input):not(textarea) {
    line-height: 56px
}

.uk-form-danger,
.uk-form-danger:focus {
    color: #e78b8b;
    border-color: #ffecec !important
}

.uk-form-success,
.uk-form-success:focus {
    color: #7ac597;
    border-color: #bde7da !important
}

.uk-form-blank {
    background: 0;
    border-color: transparent
}

.uk-form-blank:focus {
    border-color: #f5f5f5;
    border-style: dashed
}

input.uk-form-width-xsmall {
    width: 50px
}

select.uk-form-width-xsmall {
    width: 75px
}

.uk-form-width-small {
    width: 130px
}

.uk-form-width-medium {
    width: 200px
}

.uk-form-width-large {
    width: 500px
}

.uk-select:not([multiple]):not([size]), .woocommerce-page select:not([multiple]):not([size]), .woocommerce select:not([multiple]):not([size]), .woocommerce-page form .form-row select:not([multiple]):not([size]), .woocommerce form .form-row select:not([multiple]):not([size]) {
    -webkit-appearance: none;
    -moz-appearance: none;
    padding-right: 20px;
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2224%22%20height%3D%2216%22%20viewBox%3D%220%200%2024%2016%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Cpolygon%20fill%3D%22%23274c5e%22%20points%3D%2212%201%209%206%2015%206%22%3E%3C%2Fpolygon%3E%0A%20%20%20%20%3Cpolygon%20fill%3D%22%23274c5e%22%20points%3D%2212%2013%209%208%2015%208%22%3E%3C%2Fpolygon%3E%0A%3C%2Fsvg%3E%0A");
    background-repeat: no-repeat;
    background-position: 100% 50%
}

.uk-select:not([multiple]):not([size])::-ms-expand, .woocommerce-page select:not([multiple]):not([size])::-ms-expand, .woocommerce select:not([multiple]):not([size])::-ms-expand, .woocommerce-page form .form-row select:not([multiple]):not([size])::-ms-expand, .woocommerce form .form-row select:not([multiple]):not([size])::-ms-expand {
    display: none
}

.uk-select:not([multiple]):not([size]):disabled, .woocommerce-page select:not([multiple]):not([size]):disabled, .woocommerce select:not([multiple]):not([size]):disabled, .woocommerce-page form .form-row select:not([multiple]):not([size]):disabled, .woocommerce form .form-row select:not([multiple]):not([size]):disabled {
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2224%22%20height%3D%2216%22%20viewBox%3D%220%200%2024%2016%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Cpolygon%20fill%3D%22%2398a6ad%22%20points%3D%2212%201%209%206%2015%206%22%3E%3C%2Fpolygon%3E%0A%20%20%20%20%3Cpolygon%20fill%3D%22%2398a6ad%22%20points%3D%2212%2013%209%208%2015%208%22%3E%3C%2Fpolygon%3E%0A%3C%2Fsvg%3E%0A")
}

.uk-radio, .uk-checkbox {
    display: inline-block;
    height: 16px;
    width: 16px;
    overflow: hidden;
    margin-top: -4px;
    vertical-align: middle;
    -webkit-appearance: none;
    background-color: #ededed;
    background-repeat: no-repeat;
    background-position: 50% 50%;
    -webkit-transition: .2s ease-in-out;
    transition: .2s ease-in-out;
    -webkit-transition-property: background-color, border-color, box-shadow;
    transition-property: background-color, border-color, box-shadow
}

.uk-radio {
    border-radius: 50%
}

.uk-radio:focus, .uk-checkbox:focus {
    outline: 0
}

.uk-radio:checked, .uk-checkbox:checked, .uk-checkbox:indeterminate {
    background-color: <?php echo $templatevars['light']; ?>;
}

.uk-radio:checked:focus, .uk-checkbox:checked:focus, .uk-checkbox:indeterminate:focus {
    background-color: <?php echo $templatevars['light']; ?>;
}

.uk-radio:checked {
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Ccircle%20fill%3D%22%23fff%22%20cx%3D%228%22%20cy%3D%228%22%20r%3D%222%22%3E%3C%2Fcircle%3E%0A%3C%2Fsvg%3E")
}

.uk-checkbox:checked {
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2214%22%20height%3D%2211%22%20viewBox%3D%220%200%2014%2011%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Cpolygon%20fill%3D%22%23fff%22%20points%3D%2212%201%205%207.5%202%205%201%205.5%205%2010%2013%201.5%22%2F%3E%0A%3C%2Fsvg%3E")
}

.uk-checkbox:indeterminate {
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Crect%20fill%3D%22%23fff%22%20x%3D%223%22%20y%3D%228%22%20width%3D%2210%22%20height%3D%221%22%3E%3C%2Frect%3E%0A%3C%2Fsvg%3E")
}

.uk-radio:disabled, .uk-checkbox:disabled {
    background-color: #fafafa
}

.uk-radio:disabled:checked {
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Ccircle%20fill%3D%22%2398a6ad%22%20cx%3D%228%22%20cy%3D%228%22%20r%3D%222%22%3E%3C%2Fcircle%3E%0A%3C%2Fsvg%3E")
}

.uk-checkbox:disabled:checked {
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2214%22%20height%3D%2211%22%20viewBox%3D%220%200%2014%2011%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Cpolygon%20fill%3D%22%2398a6ad%22%20points%3D%2212%201%205%207.5%202%205%201%205.5%205%2010%2013%201.5%22%2F%3E%0A%3C%2Fsvg%3E")
}

.uk-checkbox:disabled:indeterminate {
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Crect%20fill%3D%22%2398a6ad%22%20x%3D%223%22%20y%3D%228%22%20width%3D%2210%22%20height%3D%221%22%3E%3C%2Frect%3E%0A%3C%2Fsvg%3E")
}

.uk-legend {
    width: 100%;
    color: inherit;
    padding: 0;
    font-size: 32px;
    line-height: 1.4
}

.uk-form-custom {
    display: inline-block;
    position: relative;
    max-width: 100%;
    vertical-align: middle
}

.uk-form-custom select, .uk-form-custom input[type="file"] {
    position: absolute;
    top: 0;
    z-index: 1;
    width: 100%;
    height: 100%;
    left: 0;
    -webkit-appearance: none;
    opacity: 0;
    cursor: pointer
}

.uk-form-custom input[type="file"] {
    font-size: 500px;
    overflow: hidden
}

.uk-form-label {
    font-size: 17px;
    color: #333;
    font-weight: 300
}

.uk-form-stacked .uk-form-label {
    display: block;
    margin-bottom: 10px
}

@media (max-width: 959px) {
    .uk-form-horizontal .uk-form-label {
        display: block;
        margin-bottom: 10px
    }
}

@media (min-width: 960px) {
    .uk-form-horizontal .uk-form-label {
        width: 200px;
        margin-top: 7px;
        float: left
    }

    .uk-form-horizontal .uk-form-controls {
        margin-left: 215px
    }

    .uk-form-horizontal .uk-form-controls-text {
        padding-top: 7px
    }
}

.uk-form-icon {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 45px;
    display: -ms-inline-flexbox;
    display: -webkit-inline-flex;
    display: inline-flex;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
    color: #98a6ad
}

.uk-form-icon:hover {
    color: <?php echo $templatevars['dark']; ?>;
}

.uk-form-icon:not(a):not(button):not(input) {
    pointer-events: none
}

.uk-form-icon:not(.uk-form-icon-flip) + .uk-input, .uk-form-icon:not(.uk-form-icon-flip) + .woocommerce-page input.input-text, .uk-form-icon:not(.uk-form-icon-flip) + .woocommerce input.input-text, .uk-form-icon:not(.uk-form-icon-flip) + .woocommerce-page #review_form #respond input[type='text'], .uk-form-icon:not(.uk-form-icon-flip) + .woocommerce #review_form #respond input[type='text'], .uk-form-icon:not(.uk-form-icon-flip) + .woocommerce-page #review_form #respond input[type='email'], .uk-form-icon:not(.uk-form-icon-flip) + .woocommerce #review_form #respond input[type='email'] {
    padding-left: 45px
}

.uk-form-icon-flip {
    right: 0;
    left: auto
}

.uk-form-icon-flip + .uk-input, .uk-form-icon-flip + .woocommerce-page input.input-text, .uk-form-icon-flip + .woocommerce input.input-text, .uk-form-icon-flip + .woocommerce-page #review_form #respond input[type='text'], .uk-form-icon-flip + .woocommerce #review_form #respond input[type='text'], .uk-form-icon-flip + .woocommerce-page #review_form #respond input[type='email'], .uk-form-icon-flip + .woocommerce #review_form #respond input[type='email'] {
    padding-right: 45px
}

.uk-button, .woocommerce-page .widget_product_search input[type="submit"], .woocommerce .widget_product_search input[type="submit"], .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, .woocommerce-checkout .wc-proceed-to-checkout a.checkout-button, #add_payment_method .wc-proceed-to-checkout a.checkout-button {
    margin: 0;
    border: 0;
    overflow: visible;
    font: inherit;
    color: inherit;
    text-transform: none;
    display: inline-block;
    box-sizing: border-box;
    padding: 0 25px;
    vertical-align: middle;
    font-size: 17px;
    line-height: 41px;
    text-align: center;
    text-decoration: none;
    -webkit-transition: .17s ease-in-out;
    transition: .17s ease-in-out;
    -webkit-transition-property: color, background-color, background-position, border-color, box-shadow;
    transition-property: color, background-color, background-position, border-color, box-shadow;
    background-size: 200%;
    background-position-x: 100%;
    font-weight: 300;
    background-origin: border-box
}

.uk-button:not(:disabled) {
    cursor: pointer
}

.uk-button::-moz-focus-inner {
    border: 0;
    padding: 0
}

.uk-button:hover {
    text-decoration: none;
    background-position-x: 0
}

.uk-button:focus {
    outline: 0;
    background-position-x: 0
}

.uk-button-default, .woocommerce-page .widget_product_search input[type="submit"], .woocommerce .widget_product_search input[type="submit"] {
    background-color: transparent;
    color: #222;
    border: 2px solid #222;
    background-image: linear-gradient(90deg, <?php echo $templatevars['color']; ?> 50%, transparent 50%)
}

.uk-button-default:hover, .uk-button-default:focus {
    background-color: transparent;
    color: #fff;
    border-color: <?php echo $templatevars['color']; ?>;
    background-image: linear-gradient(90deg, <?php echo $templatevars['color']; ?> 50%, transparent 50%)
}

.uk-button-default:active, .uk-button-default.uk-active {
    background-color: <?php echo $templatevars['color']; ?>;
    color: #fff;
    border-color: transparent;
    background-image: none
}

.uk-button-primary, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, .woocommerce-checkout .wc-proceed-to-checkout a.checkout-button, #add_payment_method .wc-proceed-to-checkout a.checkout-button {
    background-color: transparent;
    color: #000;
    border: 2px solid #e6e3d6;
    background-image: linear-gradient(90deg, transparent 50%, #e6e3d6 50%)
}

.uk-button-primary:hover, .uk-button-primary:focus {
    background-color: transparent;
    color: <?php echo $templatevars['color']; ?>;
    border-color: <?php echo $templatevars['color']; ?>;
    background-image: linear-gradient(90deg, transparent 50%, #a5cae5 50%)
}

.uk-button-primary:active, .uk-button-primary.uk-active {
    background-color: transparent;
    color: <?php echo $templatevars['color']; ?>;
    border-color: <?php echo $templatevars['color']; ?>;
    background-image: none
}

.uk-button-secondary {
    background-color: transparent;
    color: #fff;
    border: 2px solid <?php echo $templatevars['light']; ?>;
    background-image: linear-gradient(90deg, transparent 50%, <?php echo $templatevars['light']; ?> 50%)
}

.uk-button-secondary:hover, .uk-button-secondary:focus {
    background-color: transparent;
    color: <?php echo $templatevars['light']; ?>;
    border-color: <?php echo $templatevars['light']; ?>;
    background-image: linear-gradient(90deg, transparent 50%, <?php echo $templatevars['light']; ?> 50%)
}

.uk-button-secondary:active, .uk-button-secondary.uk-active {
    background-color: transparent;
    color: <?php echo $templatevars['dark']; ?>;
    border-color: <?php echo $templatevars['dark']; ?>;
    background-image: none
}

.uk-button-danger {
    background-color: transparent;
    color: #fff;
    border: 2px solid #e78b8b;
    background-image: linear-gradient(90deg, transparent 50%, #e78b8b 50%)
}

.uk-button-danger:hover,
.uk-button-danger:focus {
    background-color: transparent;
    color: #e78b8b;
    border-color: #e78b8b;
    background-image: linear-gradient(90deg, transparent 50%, #e78b8b 50%)
}

.uk-button-danger:active,
.uk-button-danger.uk-active {
    background-color: transparent;
    color: #da4c4c;
    border-color: #da4c4c;
    background-image: none
}

.uk-button-default:disabled,
.uk-button-primary:disabled,
.uk-button-secondary:disabled,
.uk-button-danger:disabled {
    background-color: #fafafa;
    color: #98a6ad;
    border: 2px solid transparent;
    background-image: none;
    box-shadow: none
}

.uk-button-small {
    padding: 0 15px;
    line-height: 26px;
    font-size: 14px
}

.uk-button-large,
#add_payment_method .wc-proceed-to-checkout a.checkout-button {
    padding: 0 40px;
    line-height: 56px;
    font-size: 17px
}

.uk-button-text {
    padding: 0;
    line-height: 1.58;
    background: 0;
    color: #333;
    position: relative;
    padding-right: 27px
}

.uk-button-text::before {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    width: 22px;
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2223%22%20height%3D%2211%22%20viewBox%3D%220%200%2023%2011%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Cpolyline%20fill%3D%22none%22%20stroke%3D%22%23274c5e%22%20points%3D%2217%201%2022%205.5%2017%2010%20%22%3E%3C%2Fpolyline%3E%0A%20%20%20%20%3Cline%20fill%3D%22none%22%20stroke%3D%22%23274c5e%22%20x1%3D%220%22%20y1%3D%225.5%22%20x2%3D%2222.4%22%20y2%3D%225.5%22%3E%3C%2Fline%3E%0A%3C%2Fsvg%3E");
    background-repeat: no-repeat;
    background-position: calc(100% - 5px) 50%;
    -webkit-transition: background-position .2s ease-out;
    transition: background-position .2s ease-out
}

.uk-button-text:hover,
.uk-button-text:focus {
    color: <?php echo $templatevars['color']; ?>;
}

.uk-button-text:hover::before,
.uk-button-text:focus::before {
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2223%22%20height%3D%2211%22%20viewBox%3D%220%200%2023%2011%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Cpolyline%20fill%3D%22none%22%20stroke%3D%22%236caddc%22%20points%3D%2217%201%2022%205.5%2017%2010%20%22%3E%3C%2Fpolyline%3E%0A%20%20%20%20%3Cline%20fill%3D%22none%22%20stroke%3D%22%236caddc%22%20x1%3D%220%22%20y1%3D%225.5%22%20x2%3D%2222.4%22%20y2%3D%225.5%22%3E%3C%2Fline%3E%0A%3C%2Fsvg%3E");
    background-position: 100% 50%
}

.uk-button-text:disabled {
    color: #98a6ad
}

.uk-button-link {
    padding: 0;
    line-height: 1.58;
    background: 0;
    color: <?php echo $templatevars['color']; ?>;
}

.uk-button-link:hover, .uk-button-link:focus {
    color: <?php echo $templatevars['light']; ?>;
    text-decoration: none
}

.uk-button-link:disabled {
    color: #98a6ad;
    text-decoration: none
}

.uk-button-group {
    display: -ms-inline-flexbox;
    display: -webkit-inline-flex;
    display: inline-flex;
    vertical-align: middle;
    position: relative
}

.uk-button-group > .uk-button:nth-child(n+2),
.uk-button-group > div:nth-child(n+2) .uk-button {
    margin-left: -2px
}

.uk-button-group .uk-button:hover,
.uk-button-group .uk-button:focus,
.uk-button-group .uk-button:active,
.uk-button-group .uk-button.uk-active {
    position: relative;
    z-index: 1
}

.uk-section {
    box-sizing: border-box;
    padding-top: 40px;
    padding-bottom: 40px
}

@media (min-width: 960px) {
    .uk-section {
        padding-top: 65px;
        padding-bottom: 65px
    }
}

.uk-section::before, .uk-section::after {
    content: "";
    display: table
}

.uk-section::after {
    clear: both
}

.uk-section > :last-child {
    margin-bottom: 0
}

.uk-section-xsmall {
    padding-top: 30px;
    padding-bottom: 30px
}

.uk-section-small {
    padding-top: 40px;
    padding-bottom: 40px
}

.uk-section-large {
    padding-top: 65px;
    padding-bottom: 65px
}

@media (min-width: 960px) {
    .uk-section-large {
        padding-top: 130px;
        padding-bottom: 130px
    }
}

.uk-section-xlarge {
    padding-top: 130px;
    padding-bottom: 130px
}

@media (min-width: 960px) {
    .uk-section-xlarge {
        padding-top: 195px;
        padding-bottom: 195px
    }
}

.uk-section-default {
    background: #fff
}

.uk-section-muted {
    background: #fafafa
}

.uk-section-primary {
    background: <?php echo $templatevars['light']; ?>;
}

.uk-section-secondary {
    background: <?php echo $templatevars['color']; ?>;
}

.uk-container {
    box-sizing: content-box;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
    padding-left: 15px;
    padding-right: 15px
}

@media (min-width: 640px) {
    .uk-container {
        padding-left: 25px;
        padding-right: 25px
    }
}

@media (min-width: 960px) {
    .uk-container {
        padding-left: 40px;
        padding-right: 40px
    }
}

.uk-container::before, .uk-container::after {
    content: "";
    display: table
}

.uk-container::after {
    clear: both
}

.uk-container > :last-child {
    margin-bottom: 0
}

.uk-container .uk-container {
    padding-left: 0;
    padding-right: 0
}

.uk-container-small {
    max-width: 900px
}

.uk-container-large {
    max-width: 1600px
}

.uk-container-expand {
    max-width: none
}

.uk-grid {
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -ms-flex-wrap: wrap;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    margin: 0;
    padding: 0;
    list-style: none
}

.uk-grid > * {
    margin: 0
}

.uk-grid > * > :last-child {
    margin-bottom: 0
}

.uk-grid {
    margin-left: -25px
}

.uk-grid > * {
    padding-left: 25px
}

.uk-grid + .uk-grid, .uk-grid > .uk-grid-margin, * + .uk-grid-margin {
    margin-top: 25px
}

@media (min-width: 1200px) {
    .uk-grid {
        margin-left: -40px
    }

    .uk-grid > * {
        padding-left: 40px
    }

    .uk-grid + .uk-grid, .uk-grid > .uk-grid-margin, * + .uk-grid-margin {
        margin-top: 40px
    }
}

.uk-grid-small {
    margin-left: -15px
}

.uk-grid-small > * {
    padding-left: 15px
}

.uk-grid + .uk-grid-small, .uk-grid-small > .uk-grid-margin, * + .uk-grid-margin-small {
    margin-top: 15px
}

.uk-grid-medium {
    margin-left: -25px
}

.uk-grid-medium > * {
    padding-left: 25px
}

.uk-grid + .uk-grid-medium, .uk-grid-medium > .uk-grid-margin, * + .uk-grid-margin-medium {
    margin-top: 25px
}

.uk-grid-large {
    margin-left: -40px
}

.uk-grid-large > * {
    padding-left: 40px
}

.uk-grid + .uk-grid-large, .uk-grid-large > .uk-grid-margin, * + .uk-grid-margin-large {
    margin-top: 40px
}

@media (min-width: 1200px) {
    .uk-grid-large {
        margin-left: -65px
    }

    .uk-grid-large > * {
        padding-left: 65px
    }

    .uk-grid + .uk-grid-large, .uk-grid-large > .uk-grid-margin, * + .uk-grid-margin-large {
        margin-top: 65px
    }
}

.uk-grid-collapse {
    margin-left: 0
}

.uk-grid-collapse > * {
    padding-left: 0
}

.uk-grid + .uk-grid-collapse, .uk-grid-collapse > .uk-grid-margin {
    margin-top: 0
}

.uk-grid-divider > * {
    position: relative
}

.uk-grid-divider > :not(.uk-first-column)::before {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    border-left: 2px solid #eee
}

.uk-grid-divider.uk-grid-stack > .uk-grid-margin::before {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    border-top: 2px solid #eee
}

.uk-grid-divider {
    margin-left: -50px
}

.uk-grid-divider > * {
    padding-left: 50px
}

.uk-grid-divider > :not(.uk-first-column)::before {
    left: 25px
}

.uk-grid-divider.uk-grid-stack > .uk-grid-margin {
    margin-top: 50px
}

.uk-grid-divider.uk-grid-stack > .uk-grid-margin::before {
    top: -25px;
    left: 50px
}

@media (min-width: 1200px) {
    .uk-grid-divider {
        margin-left: -80px
    }

    .uk-grid-divider > * {
        padding-left: 80px
    }

    .uk-grid-divider > :not(.uk-first-column)::before {
        left: 40px
    }

    .uk-grid-divider.uk-grid-stack > .uk-grid-margin {
        margin-top: 80px
    }

    .uk-grid-divider.uk-grid-stack > .uk-grid-margin::before {
        top: -40px;
        left: 80px
    }
}

.uk-grid-divider.uk-grid-small {
    margin-left: -30px
}

.uk-grid-divider.uk-grid-small > * {
    padding-left: 30px
}

.uk-grid-divider.uk-grid-small > :not(.uk-first-column)::before {
    left: 15px
}

.uk-grid-divider.uk-grid-small.uk-grid-stack > .uk-grid-margin {
    margin-top: 30px
}

.uk-grid-divider.uk-grid-small.uk-grid-stack > .uk-grid-margin::before {
    top: -15px;
    left: 30px
}

.uk-grid-divider.uk-grid-medium {
    margin-left: -50px
}

.uk-grid-divider.uk-grid-medium > * {
    padding-left: 50px
}

.uk-grid-divider.uk-grid-medium > :not(.uk-first-column)::before {
    left: 25px
}

.uk-grid-divider.uk-grid-medium.uk-grid-stack > .uk-grid-margin {
    margin-top: 50px
}

.uk-grid-divider.uk-grid-medium.uk-grid-stack > .uk-grid-margin::before {
    top: -25px;
    left: 50px
}

.uk-grid-divider.uk-grid-large {
    margin-left: -80px
}

.uk-grid-divider.uk-grid-large > * {
    padding-left: 80px
}

.uk-grid-divider.uk-grid-large > :not(.uk-first-column)::before {
    left: 40px
}

.uk-grid-divider.uk-grid-large.uk-grid-stack > .uk-grid-margin {
    margin-top: 80px
}

.uk-grid-divider.uk-grid-large.uk-grid-stack > .uk-grid-margin::before {
    top: -40px;
    left: 80px
}

@media (min-width: 1200px) {
    .uk-grid-divider.uk-grid-large {
        margin-left: -130px
    }

    .uk-grid-divider.uk-grid-large > * {
        padding-left: 130px
    }

    .uk-grid-divider.uk-grid-large > :not(.uk-first-column)::before {
        left: 65px
    }

    .uk-grid-divider.uk-grid-large.uk-grid-stack > .uk-grid-margin {
        margin-top: 130px
    }

    .uk-grid-divider.uk-grid-large.uk-grid-stack > .uk-grid-margin::before {
        top: -65px;
        left: 130px
    }
}

.uk-grid-match > *, .uk-grid-item-match {
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -ms-flex-wrap: wrap;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap
}

.uk-grid-match > * > :not([class*='uk-width']), .uk-grid-item-match > :not([class*='uk-width']) {
    box-sizing: border-box;
    width: 100%;
    -ms-flex: auto;
    -webkit-flex: auto;
    flex: auto
}

.uk-tile {
    position: relative;
    box-sizing: border-box;
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 40px;
    padding-bottom: 40px
}

@media (min-width: 640px) {
    .uk-tile {
        padding-left: 25px;
        padding-right: 25px
    }
}

@media (min-width: 960px) {
    .uk-tile {
        padding-left: 40px;
        padding-right: 40px;
        padding-top: 65px;
        padding-bottom: 65px
    }
}

.uk-tile::before, .uk-tile::after {
    content: "";
    display: table
}

.uk-tile::after {
    clear: both
}

.uk-tile > :last-child {
    margin-bottom: 0
}

.uk-tile-xsmall {
    padding-top: 30px;
    padding-bottom: 30px
}

.uk-tile-small {
    padding-top: 40px;
    padding-bottom: 40px
}

.uk-tile-large {
    padding-top: 65px;
    padding-bottom: 65px
}

@media (min-width: 960px) {
    .uk-tile-large {
        padding-top: 130px;
        padding-bottom: 130px
    }
}

.uk-tile-xlarge {
    padding-top: 130px;
    padding-bottom: 130px
}

@media (min-width: 960px) {
    .uk-tile-xlarge {
        padding-top: 195px;
        padding-bottom: 195px
    }
}

.uk-tile-default {
    background: #fff
}

.uk-tile-muted {
    background: #fafafa
}

.uk-tile-primary {
    background: #dbe9f4
}

.uk-tile-secondary {
    background: #e6e3d6;
}

.uk-card {
    position: relative;
    box-sizing: border-box;
    -webkit-transition: .1s ease-in-out;
    transition: .1s ease-in-out;
    -webkit-transition-property: color, background-color, border-color, box-shadow, top;
    transition-property: color, background-color, border-color, box-shadow, top
}

.uk-card-body {
    padding: 25px 25px
}

.uk-card-header {
    padding: 13px 25px
}

.uk-card-footer {
    padding: 12.5px 25px
}

@media (min-width: 1200px) {
    .uk-card-body {
        padding: 40px 40px
    }

    .uk-card-header {
        padding: 20px 40px
    }

    .uk-card-footer {
        padding: 20px 40px
    }
}

.uk-card-body::before, .uk-card-body::after, .uk-card-header::before, .uk-card-header::after, .uk-card-footer::before, .uk-card-footer::after {
    content: "";
    display: table
}

.uk-card-body::after, .uk-card-header::after, .uk-card-footer::after {
    clear: both
}

.uk-card-body > :last-child, .uk-card-header > :last-child, .uk-card-footer > :last-child {
    margin-bottom: 0
}

.uk-card-title {
    font-size: 32px;
    line-height: 1.4;
    font-weight: 300
}

.uk-card-badge {
    position: absolute;
    top: 25px;
    right: 25px;
    z-index: 1;
    color: #333;
    font-size: 17px;
    font-weight: 300
}

.uk-card-badge:first-child + * {
    margin-top: 0
}

.uk-card-hover:not(.uk-card-default):not(.uk-card-primary):not(.uk-card-secondary):hover {
    background: #fafafa
}

.uk-card-default {
    background: #fafafa;
    color: #333
}

.uk-card-default .uk-card-title {
    color: #333
}

.uk-card-default.uk-card-hover:hover {
    background-color: #f5f5f5
}

.uk-card-default .uk-card-header {
    border-bottom: 2px solid #eee
}

.uk-card-default .uk-card-footer {
    border-top: 2px solid #eee
}

.uk-card-primary {
    background: #dbe9f4;
    color: #333
}

.uk-card-primary .uk-card-title {
    color: #333
}

.uk-card-primary.uk-card-hover:hover {
    background-color: <?php echo $templatevars['light']; ?>;
}

.uk-card-secondary {
    background: <?php echo $templatevars['color']; ?>;
    color: #333
}

.uk-card-secondary .uk-card-title {
    color: #333
}

.uk-card-secondary.uk-card-hover:hover {
    background-color: <?php echo $templatevars['color']; ?>;
}

.uk-card-small.uk-card-body, .uk-card-small .uk-card-body {
    padding: 30px 30px
}

.uk-card-small .uk-card-header {
    padding: 20px 30px
}

.uk-card-small .uk-card-footer {
    padding: 20px 30px
}

@media (min-width: 1200px) {
    .uk-card-large.uk-card-body, .uk-card-large .uk-card-body {
        padding: 65px 65px
    }

    .uk-card-large .uk-card-header {
        padding: 33px 65px
    }

    .uk-card-large .uk-card-footer {
        padding: 33px 65px
    }
}

.uk-card-body .uk-nav-default, .uk-card-body .woocommerce-account nav.woocommerce-MyAccount-navigation ul {
    margin: -10px -25px
}

.uk-card-title + .uk-nav-default, .uk-card-title + .woocommerce-account nav.woocommerce-MyAccount-navigation ul {
    margin-top: 0
}

.uk-card-body .uk-nav-default > li > a, .uk-card-body .uk-nav-default .uk-nav-header, .uk-card-body .uk-nav-default .uk-nav-divider, .uk-card-body .woocommerce-account nav.woocommerce-MyAccount-navigation ul > li > a, .uk-card-body .woocommerce-account nav.woocommerce-MyAccount-navigation ul .uk-nav-header, .uk-card-body .woocommerce-account nav.woocommerce-MyAccount-navigation ul .uk-nav-divider {
    padding-left: 25px;
    padding-right: 25px
}

.uk-card-body .uk-nav-default .uk-nav-sub, .uk-card-body .woocommerce-account nav.woocommerce-MyAccount-navigation ul .uk-nav-sub {
    padding-left: 40px
}

@media (min-width: 1200px) {
    .uk-card-body .uk-nav-default, .uk-card-body .woocommerce-account nav.woocommerce-MyAccount-navigation ul {
        margin: -25px -40px
    }

    .uk-card-title + .uk-nav-default, .uk-card-title + .woocommerce-account nav.woocommerce-MyAccount-navigation ul {
        margin-top: 0
    }

    .uk-card-body .uk-nav-default > li > a, .uk-card-body .uk-nav-default .uk-nav-header, .uk-card-body .uk-nav-default .uk-nav-divider, .uk-card-body .woocommerce-account nav.woocommerce-MyAccount-navigation ul > li > a, .uk-card-body .woocommerce-account nav.woocommerce-MyAccount-navigation ul .uk-nav-header, .uk-card-body .woocommerce-account nav.woocommerce-MyAccount-navigation ul .uk-nav-divider {
        padding-left: 40px;
        padding-right: 40px
    }

    .uk-card-body .uk-nav-default .uk-nav-sub, .uk-card-body .woocommerce-account nav.woocommerce-MyAccount-navigation ul .uk-nav-sub {
        padding-left: 55px
    }
}

.uk-card-small .uk-nav-default, .uk-card-small .woocommerce-account nav.woocommerce-MyAccount-navigation ul {
    margin: -15px -30px
}

.uk-card-small .uk-card-title + .uk-nav-default, .uk-card-small .uk-card-title + .woocommerce-account nav.woocommerce-MyAccount-navigation ul {
    margin-top: 0
}

.uk-card-small .uk-nav-default > li > a, .uk-card-small .uk-nav-default .uk-nav-header, .uk-card-small .uk-nav-default .uk-nav-divider, .uk-card-small .woocommerce-account nav.woocommerce-MyAccount-navigation ul > li > a, .uk-card-small .woocommerce-account nav.woocommerce-MyAccount-navigation ul .uk-nav-header, .uk-card-small .woocommerce-account nav.woocommerce-MyAccount-navigation ul .uk-nav-divider {
    padding-left: 30px;
    padding-right: 30px
}

.uk-card-small .uk-nav-default .uk-nav-sub, .uk-card-small .woocommerce-account nav.woocommerce-MyAccount-navigation ul .uk-nav-sub {
    padding-left: 45px
}

@media (min-width: 1200px) {
    .uk-card-large .uk-nav-default, .uk-card-large .woocommerce-account nav.woocommerce-MyAccount-navigation ul {
        margin: -50px -65px
    }

    .uk-card-large .uk-card-title + .uk-nav-default, .uk-card-large .uk-card-title + .woocommerce-account nav.woocommerce-MyAccount-navigation ul {
        margin-top: 0
    }
}

.uk-close {
    color: <?php echo $templatevars['light']; ?>;
    -webkit-transition: .1s ease-in-out;
    transition: .1s ease-in-out;
    -webkit-transition-property: color, opacity;
    transition-property: color, opacity
}

.uk-close:hover, .uk-close:focus {
    color: <?php echo $templatevars['color']; ?>;
    outline: 0
}

.uk-spinner > * {
    -webkit-animation: uk-spinner-rotate 1.4s linear infinite;
    animation: uk-spinner-rotate 1.4s linear infinite
}

@-webkit-keyframes uk-spinner-rotate {
    0% {
        -webkit-transform: rotate(0deg)
    }
    100% {
        -webkit-transform: rotate(270deg)
    }
}

@keyframes uk-spinner-rotate {
    0% {
        transform: rotate(0deg)
    }
    100% {
        transform: rotate(270deg)
    }
}

.uk-spinner > * > * {
    stroke-dasharray: 88px;
    stroke-dashoffset: 0;
    transform-origin: center;
    -webkit-animation: uk-spinner-dash 1.4s ease-in-out infinite;
    animation: uk-spinner-dash 1.4s ease-in-out infinite;
    stroke-width: 1;
    stroke-linecap: round
}

@-webkit-keyframes uk-spinner-dash {
    0% {
        stroke-dashoffset: 88px
    }
    50% {
        stroke-dashoffset: 22px;
        -webkit-transform: rotate(135deg)
    }
    100% {
        stroke-dashoffset: 88px;
        -webkit-transform: rotate(450deg)
    }
}

@keyframes uk-spinner-dash {
    0% {
        stroke-dashoffset: 88px
    }
    50% {
        stroke-dashoffset: 22px;
        transform: rotate(135deg)
    }
    100% {
        stroke-dashoffset: 88px;
        transform: rotate(450deg)
    }
}

.uk-totop {
    padding: 5px;
    color: <?php echo $templatevars['color']; ?>;
    background: transparent;
    -webkit-transition: .1s ease-in-out;
    transition: .1s ease-in-out;
    -webkit-transition-property: color, background-color, border-color, box-shadow;
    transition-property: color, background-color, border-color, box-shadow
}

.uk-totop:hover, .uk-totop:focus {
    color: <?php echo $templatevars['light']; ?>;
    outline: 0;
    background-color: transparent
}

.uk-totop:active {
    color: #333;
    background-color: transparent
}

.uk-marker {
    padding: 5px;
    background: <?php echo $templatevars['color']; ?>;
    color: #fff;
    -webkit-transition: .1s ease-in-out;
    transition: .1s ease-in-out;
    -webkit-transition-property: color, background-color;
    transition-property: color, background-color;
    border-radius: 500px
}

.uk-marker:hover, .uk-marker:focus {
    color: #fff;
    outline: 0
}

.uk-alert {
    position: relative;
    margin-bottom: 30px;
    padding: 15px 29px 15px 15px;
    background: #fafafa;
    color: #333
}

* + .uk-alert {
    margin-top: 30px
}

.uk-alert > :last-child {
    margin-bottom: 0
}

.uk-alert-close {
    position: absolute;
    top: 20px;
    right: 15px;
    color: inherit;
    opacity: .4
}

.uk-alert-close:first-child + * {
    margin-top: 0
}

.uk-alert-close:hover, .uk-alert-close:focus {
    color: inherit;
    opacity: .8
}

.uk-alert-primary {
    background: <?php echo $templatevars['light']; ?>;
    color: <?php echo $templatevars['color']; ?>;
}

.uk-alert-success {
    background: #d3e9e2;
    color: #7ac597
}

.uk-alert-warning {
    background: #fff5ee;
    color: #f58933
}

.uk-alert-danger {
    background: #ffecec;
    color: #e51f1f
}

.uk-alert h1, .uk-alert h2, .uk-alert h3, .uk-alert h4, .uk-alert h5, .uk-alert h6 {
    color: inherit
}

.uk-alert a:not([class]) {
    color: inherit;
    text-decoration: underline
}

.uk-alert a:not([class]):hover {
    color: inherit;
    text-decoration: underline
}

.uk-badge {
    box-sizing: border-box;
    min-width: 22px;
    height: 22px;
    line-height: 22px;
    padding: 0 5px;
    border-radius: 500px;
    vertical-align: middle;
    color: #fff;
    font-size: 14px;
    display: -ms-inline-flexbox;
    display: -webkit-inline-flex;
    display: inline-flex;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
    font-weight: normal;
    background: <?php echo $templatevars['light']; ?>;
}

.uk-badge:hover, .uk-badge:focus {
    color: #fff;
    text-decoration: none;
    outline: 0
}

.uk-label {
    display: inline-block;
    padding: 0 10px;
    background: transparent;
    line-height: 1.58;
    font-size: 14px;
    color: <?php echo $templatevars['dark']; ?>;
    vertical-align: middle;
    white-space: nowrap;
    font-weight: 300;
    border: 2px solid <?php echo $templatevars['light']; ?>;
}

.uk-label-success {
    background-color: transparent;
    color: #6bb284;
    border-color: #9dccae
}

.uk-label-warning {
    background-color: transparent;
    color: #f49a53;
    border-color: #f7b683
}

.uk-label-danger {
    background-color: transparent;
    color: #da4c4c;
    border-color: #e78b8b
}

.uk-overlay {
    padding: 25px 25px
}

.uk-overlay > :last-child {
    margin-bottom: 0
}

.uk-overlay-default {
    background: rgba(255, 255, 255, 0.8)
}

.uk-overlay-primary {
    background: <?php echo $templatevars['color']; ?>;
}

.uk-article::before, .uk-article::after {
    content: "";
    display: table
}

.uk-article::after {
    clear: both
}

.uk-article > :last-child {
    margin-bottom: 0
}

.uk-article + .uk-article {
    margin-top: 65px
}

.uk-article-title {
    font-size: 46px;
    line-height: 1.2;
    color: #333;
    font-weight: 300
}

.uk-article-meta {
    font-size: 17px;
    line-height: 1.4;
    color: #98a6ad;
    font-weight: 300
}

.uk-article-meta a {
    color: <?php echo $templatevars['dark']; ?>;
}

.uk-article-meta a:hover {
    color: <?php echo $templatevars['color']; ?>;;
    text-decoration: none
}

.uk-comment-header {
    margin-bottom: 30px
}

.uk-comment-body::before, .uk-comment-body::after, .uk-comment-header::before, .uk-comment-header::after {
    content: "";
    display: table
}

.uk-comment-body::after, .uk-comment-header::after {
    clear: both
}

.uk-comment-body > :last-child, .uk-comment-header > :last-child {
    margin-bottom: 0
}

.uk-comment-title {
    font-size: 26px;
    line-height: 1.4
}

.uk-comment-meta {
    font-size: 14px;
    line-height: 1.4;
    color: #98a6ad;
    font-weight: 300
}

.uk-comment-list {
    padding: 0;
    list-style: none
}

.uk-comment-list > :nth-child(n+2) {
    margin-top: 65px
}

.uk-comment-list .uk-comment ~ ul {
    margin: 65px 0 0 0;
    padding-left: 30px;
    list-style: none
}

@media (min-width: 960px) {
    .uk-comment-list .uk-comment ~ ul {
        padding-left: 100px
    }
}

.uk-comment-list .uk-comment ~ ul > :nth-child(n+2) {
    margin-top: 65px
}

.uk-comment-primary {
    padding: 25px;
    background-color: #fafafa
}

.uk-search {
    display: inline-block;
    position: relative;
    max-width: 100%;
    margin: 0
}

.uk-search-input::-webkit-search-cancel-button, .uk-search-input::-webkit-search-decoration, .woocommerce-page .widget_product_search input[type="search"]::-webkit-search-cancel-button, .woocommerce-page .widget_product_search input[type="search"]::-webkit-search-decoration, .woocommerce .widget_product_search input[type="search"]::-webkit-search-cancel-button, .woocommerce .widget_product_search input[type="search"]::-webkit-search-decoration, .woocommerce-page .widget_product_search .search-field::-webkit-search-cancel-button, .woocommerce-page .widget_product_search .search-field::-webkit-search-decoration, .woocommerce .widget_product_search .search-field::-webkit-search-cancel-button, .woocommerce .widget_product_search .search-field::-webkit-search-decoration {
    -webkit-appearance: none
}

.uk-search-input::-moz-placeholder, .woocommerce-page .widget_product_search input[type="search"]::-moz-placeholder, .woocommerce .widget_product_search input[type="search"]::-moz-placeholder, .woocommerce-page .widget_product_search .search-field::-moz-placeholder, .woocommerce .widget_product_search .search-field::-moz-placeholder {
    opacity: 1
}

.uk-search-input, .woocommerce-page .widget_product_search input[type="search"], .woocommerce .widget_product_search input[type="search"], .woocommerce-page .widget_product_search .search-field, .woocommerce .widget_product_search .search-field {
    box-sizing: border-box;
    margin: 0;
    border-radius: 0;
    font: inherit;
    overflow: visible;
    -webkit-appearance: none;
    vertical-align: middle;
    width: 100%;
    border: 0;
    color: #333;
    -webkit-transition: .2s ease-in-out;
    transition: .2s ease-in-out;
    -webkit-transition-property: color, background-color, border-color, box-shadow;
    transition-property: color, background-color, border-color, box-shadow
}

.uk-search-input:focus, .woocommerce-page .widget_product_search input[type="search"]:focus, .woocommerce .widget_product_search input[type="search"]:focus, .woocommerce-page .widget_product_search .search-field:focus, .woocommerce .widget_product_search .search-field:focus {
    outline: 0
}

.uk-search-input:-ms-input-placeholder, .woocommerce-page .widget_product_search input[type="search"]:-ms-input-placeholder, .woocommerce .widget_product_search input[type="search"]:-ms-input-placeholder, .woocommerce-page .widget_product_search .search-field:-ms-input-placeholder, .woocommerce .widget_product_search .search-field:-ms-input-placeholder {
    color: #98a6ad !important
}

.uk-search-input::-moz-placeholder, .woocommerce-page .widget_product_search input[type="search"]::-moz-placeholder, .woocommerce .widget_product_search input[type="search"]::-moz-placeholder, .woocommerce-page .widget_product_search .search-field::-moz-placeholder, .woocommerce .widget_product_search .search-field::-moz-placeholder {
    color: #98a6ad
}

.uk-search-input::-webkit-input-placeholder, .woocommerce-page .widget_product_search input[type="search"]::-webkit-input-placeholder, .woocommerce .widget_product_search input[type="search"]::-webkit-input-placeholder, .woocommerce-page .widget_product_search .search-field::-webkit-input-placeholder, .woocommerce .widget_product_search .search-field::-webkit-input-placeholder {
    color: #98a6ad
}

.uk-search-icon {
    margin: 0;
    border: 0;
    overflow: visible;
    font: inherit;
    color: inherit;
    text-transform: none;
    padding: 0;
    background-color: transparent;
    cursor: pointer
}

.uk-search-icon::-moz-focus-inner {
    border: 0;
    padding: 0
}

.uk-search-icon:focus {
    outline: 0
}

.uk-search .uk-search-icon {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    display: -ms-inline-flexbox;
    display: -webkit-inline-flex;
    display: inline-flex;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
    color: #98a6ad
}

.uk-search .uk-search-icon:hover {
    color: #98a6ad
}

.uk-search .uk-search-icon:not(a):not(button):not(input) {
    pointer-events: none
}

.uk-search .uk-search-icon-flip {
    right: 0;
    left: auto
}

.uk-search-default {
    width: 180px
}

.uk-search-default .uk-search-input, .uk-search-default .woocommerce-page .widget_product_search input[type="search"], .uk-search-default .woocommerce .widget_product_search input[type="search"], .uk-search-default .woocommerce-page .widget_product_search .search-field, .uk-search-default .woocommerce .widget_product_search .search-field {
    height: 45px;
    padding-left: 6px;
    padding-right: 6px;
    background: #fafafa;
    border: 2px solid transparent
}

.uk-search-default .uk-search-input:focus, .uk-search-default .woocommerce-page .widget_product_search input[type="search"]:focus, .uk-search-default .woocommerce .widget_product_search input[type="search"]:focus, .uk-search-default .woocommerce-page .widget_product_search .search-field:focus, .uk-search-default .woocommerce .widget_product_search .search-field:focus {
    background-color: transparent;
    border-color: #f5f5f5
}

.uk-search-default .uk-search-icon {
    width: 45px
}

.uk-search-default .uk-search-icon:not(.uk-search-icon-flip) + .uk-search-input, .uk-search-default .uk-search-icon:not(.uk-search-icon-flip) + .woocommerce-page .widget_product_search input[type="search"], .uk-search-default .uk-search-icon:not(.uk-search-icon-flip) + .woocommerce .widget_product_search input[type="search"], .uk-search-default .uk-search-icon:not(.uk-search-icon-flip) + .woocommerce-page .widget_product_search .search-field, .uk-search-default .uk-search-icon:not(.uk-search-icon-flip) + .woocommerce .widget_product_search .search-field {
    padding-left: 45px
}

.uk-search-default .uk-search-icon-flip + .uk-search-input, .uk-search-default .uk-search-icon-flip + .woocommerce-page .widget_product_search input[type="search"], .uk-search-default .uk-search-icon-flip + .woocommerce .widget_product_search input[type="search"], .uk-search-default .uk-search-icon-flip + .woocommerce-page .widget_product_search .search-field, .uk-search-default .uk-search-icon-flip + .woocommerce .widget_product_search .search-field {
    padding-right: 45px
}

.uk-search-navbar {
    width: 400px
}

.uk-search-navbar .uk-search-input, .uk-search-navbar .woocommerce-page .widget_product_search input[type="search"], .uk-search-navbar .woocommerce .widget_product_search input[type="search"], .uk-search-navbar .woocommerce-page .widget_product_search .search-field, .uk-search-navbar .woocommerce .widget_product_search .search-field {
    height: 40px;
    background: transparent;
    font-size: 32px
}

.uk-search-navbar .uk-search-icon {
    width: 40px
}

.uk-search-navbar .uk-search-icon:not(.uk-search-icon-flip) + .uk-search-input, .uk-search-navbar .uk-search-icon:not(.uk-search-icon-flip) + .woocommerce-page .widget_product_search input[type="search"], .uk-search-navbar .uk-search-icon:not(.uk-search-icon-flip) + .woocommerce .widget_product_search input[type="search"], .uk-search-navbar .uk-search-icon:not(.uk-search-icon-flip) + .woocommerce-page .widget_product_search .search-field, .uk-search-navbar .uk-search-icon:not(.uk-search-icon-flip) + .woocommerce .widget_product_search .search-field {
    padding-left: 40px
}

.uk-search-navbar .uk-search-icon-flip + .uk-search-input, .uk-search-navbar .uk-search-icon-flip + .woocommerce-page .widget_product_search input[type="search"], .uk-search-navbar .uk-search-icon-flip + .woocommerce .widget_product_search input[type="search"], .uk-search-navbar .uk-search-icon-flip + .woocommerce-page .widget_product_search .search-field, .uk-search-navbar .uk-search-icon-flip + .woocommerce .widget_product_search .search-field {
    padding-right: 40px
}

.uk-search-large {
    width: 500px
}

.uk-search-large .uk-search-input, .uk-search-large .woocommerce-page .widget_product_search input[type="search"], .uk-search-large .woocommerce .widget_product_search input[type="search"], .uk-search-large .woocommerce-page .widget_product_search .search-field, .uk-search-large .woocommerce .widget_product_search .search-field {
    height: 80px;
    background: transparent;
    font-size: 46px
}

.uk-search-large .uk-search-icon {
    width: 80px
}

.uk-search-large .uk-search-icon:not(.uk-search-icon-flip) + .uk-search-input, .uk-search-large .uk-search-icon:not(.uk-search-icon-flip) + .woocommerce-page .widget_product_search input[type="search"], .uk-search-large .uk-search-icon:not(.uk-search-icon-flip) + .woocommerce .widget_product_search input[type="search"], .uk-search-large .uk-search-icon:not(.uk-search-icon-flip) + .woocommerce-page .widget_product_search .search-field, .uk-search-large .uk-search-icon:not(.uk-search-icon-flip) + .woocommerce .widget_product_search .search-field {
    padding-left: 80px
}

.uk-search-large .uk-search-icon-flip + .uk-search-input, .uk-search-large .uk-search-icon-flip + .woocommerce-page .widget_product_search input[type="search"], .uk-search-large .uk-search-icon-flip + .woocommerce .widget_product_search input[type="search"], .uk-search-large .uk-search-icon-flip + .woocommerce-page .widget_product_search .search-field, .uk-search-large .uk-search-icon-flip + .woocommerce .widget_product_search .search-field {
    padding-right: 80px
}

.uk-search-toggle {
    color: #98a6ad
}

.uk-search-toggle:hover, .uk-search-toggle:focus {
    color: #333
}

.uk-nav, .uk-nav ul, .woocommerce-account nav.woocommerce-MyAccount-navigation ul {
    margin: 0;
    padding: 0;
    list-style: none
}

.uk-nav li > a {
    display: block;
    text-decoration: none
}

.uk-nav li > a:focus {
    outline: 0
}

.uk-nav > li > a {
    padding: 5px 0
}

ul.uk-nav-sub {
    padding: 5px 0 5px 15px
}

.uk-nav-sub ul {
    padding-left: 15px
}

.uk-nav-sub a {
    padding: 2px 0
}

.uk-nav-parent-icon > .uk-parent > a::after {
    content: "";
    width: 1.58em;
    height: 1.58em;
    float: right;
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2214%22%20height%3D%2214%22%20viewBox%3D%220%200%2014%2014%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Cpolyline%20fill%3D%22none%22%20stroke%3D%22%23274c5e%22%20stroke-width%3D%221.1%22%20points%3D%2210%201%204%207%2010%2013%22%3E%3C%2Fpolyline%3E%0A%3C%2Fsvg%3E");
    background-repeat: no-repeat;
    background-position: 50% 50%;
    margin-right: 0
}

.uk-nav-parent-icon > .uk-parent.uk-open > a::after {
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2214%22%20height%3D%2214%22%20viewBox%3D%220%200%2014%2014%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Cpolyline%20fill%3D%22none%22%20stroke%3D%22%23274c5e%22%20stroke-width%3D%221.1%22%20points%3D%221%204%207%2010%2013%204%22%3E%3C%2Fpolyline%3E%0A%3C%2Fsvg%3E")
}

.uk-nav-header {
    padding: 5px 0;
    text-transform: uppercase;
    font-size: 14px
}

.uk-nav-header:not(:first-child) {
    margin-top: 30px
}

.uk-nav-divider {
    margin: 15px 0
}

.uk-nav-default, .woocommerce-account nav.woocommerce-MyAccount-navigation ul {
    font-size: 17px;
    font-weight: 300
}

.uk-nav-default > li > a, .woocommerce-account nav.woocommerce-MyAccount-navigation ul > li > a {
    color: #333;
    -webkit-transition: .1s ease-in-out;
    transition: .1s ease-in-out;
    -webkit-transition-property: color, background-color, border-color, box-shadow;
    transition-property: color, background-color, border-color, box-shadow
}

.uk-nav-default > li > a:hover, .uk-nav-default > li > a:focus, .woocommerce-account nav.woocommerce-MyAccount-navigation ul > li > a:hover, .woocommerce-account nav.woocommerce-MyAccount-navigation ul > li > a:focus {
    color: #98a6ad;
    background-color: transparent
}

.uk-nav-default > li.uk-active > a, .woocommerce-account nav.woocommerce-MyAccount-navigation ul > li.uk-active > a {
    color: #333;
    background-color: transparent
}

.uk-nav-default .uk-nav-header, .woocommerce-account nav.woocommerce-MyAccount-navigation ul .uk-nav-header {
    color: #333
}

.uk-nav-default .uk-nav-divider, .woocommerce-account nav.woocommerce-MyAccount-navigation ul .uk-nav-divider {
    border-top: 2px solid #eee
}

.uk-nav-default .uk-nav-sub a, .woocommerce-account nav.woocommerce-MyAccount-navigation ul .uk-nav-sub a {
    color: #98a6ad
}

.uk-nav-default .uk-nav-sub a:hover, .uk-nav-default .uk-nav-sub a:focus, .woocommerce-account nav.woocommerce-MyAccount-navigation ul .uk-nav-sub a:hover, .woocommerce-account nav.woocommerce-MyAccount-navigation ul .uk-nav-sub a:focus {
    color: #333
}

.uk-nav-primary {
    font-weight: 300
}

.uk-nav-primary > li > a {
    font-size: 32px;
    line-height: 1.58;
    color: #333;
    -webkit-transition: .1s ease-in-out;
    transition: .1s ease-in-out;
    -webkit-transition-property: color, background-color, border-color, box-shadow;
    transition-property: color, background-color, border-color, box-shadow;
    padding: 5px 0
}

.uk-nav-primary > li > a:hover, .uk-nav-primary > li > a:focus {
    color: #98a6ad
}

.uk-nav-primary > li.uk-active > a {
    color: #333
}

.uk-nav-primary .uk-nav-header {
    color: #333;
    padding: 5px 0
}

.uk-nav-primary .uk-nav-divider {
    border-top: 2px solid #eee
}

.uk-nav-primary .uk-nav-sub a {
    color: #98a6ad
}

.uk-nav-primary .uk-nav-sub a:hover, .uk-nav-primary .uk-nav-sub a:focus {
    color: #333
}

.uk-nav-center {
    text-align: center
}

.uk-nav-center .uk-nav-sub, .uk-nav-center .uk-nav-sub ul {
    padding-left: 0
}

.uk-nav-center.uk-nav-parent-icon > .uk-parent > a::after {
    position: absolute
}

.uk-navbar {
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    position: relative
}

.uk-navbar-container:not(.uk-navbar-transparent) {
    background: #fff
}

.uk-navbar-container > ::before, .uk-navbar-container > ::after {
    display: none !important
}

.uk-navbar-left, .uk-navbar-right, .uk-navbar-center, .uk-navbar-center-left > *, .uk-navbar-center-right > * {
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center
}

.uk-navbar-right {
    margin-left: auto
}

.uk-navbar-center:only-child {
    margin-left: auto;
    margin-right: auto;
    position: relative
}

.uk-navbar-center:not(:only-child) {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    z-index: 990
}

.uk-navbar-center:not(:only-child) .uk-navbar-nav > li > a, .uk-navbar-center:not(:only-child) .uk-navbar-item, .uk-navbar-center:not(:only-child) .uk-navbar-toggle {
    white-space: nowrap
}

.uk-navbar-center-left, .uk-navbar-center-right {
    position: absolute;
    top: 0
}

.uk-navbar-center-left {
    right: 100%
}

.uk-navbar-center-right {
    left: 100%
}

[class*='uk-navbar-center-'] .uk-navbar-nav > li > a, [class*='uk-navbar-center-'] .uk-navbar-item, [class*='uk-navbar-center-'] .uk-navbar-toggle {
    white-space: nowrap
}

.uk-navbar-nav {
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    margin: 0;
    padding: 0;
    list-style: none
}

.uk-navbar-left, .uk-navbar-right, .uk-navbar-center:only-child {
    -ms-flex-wrap: wrap;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap
}

.uk-navbar-nav > li > a, .uk-navbar-item, .uk-navbar-toggle {
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
    box-sizing: border-box;
    height: 100px;
    padding: 0 15px;
    font-size: 17px;
    font-family: inherit;
    text-decoration: none
}

.uk-navbar-nav > li > a {
    color: #222;
    -webkit-transition: .1s ease-in-out;
    transition: .1s ease-in-out;
    -webkit-transition-property: color, background-color, border-color, box-shadow;
    transition-property: color, background-color, border-color, box-shadow;
    position: relative;
    font-weight: 300
}

.uk-navbar-nav > li > a::before {
    content: '';
    display: block;
    position: absolute;
    bottom: 30px;
    height: 1px;
    background-color: transparent;
    -webkit-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
    -webkit-transition-property: background-color, border-color, box-shadow, height, right;
    transition-property: background-color, border-color, box-shadow, height, right;
    left: 15px;
    right: calc(102% - 15px)
}

.uk-navbar-nav > li:hover > a,
.uk-navbar-nav > li > a:focus,
.uk-navbar-nav > li > a.uk-open {
    color: <?php echo $templatevars['dark']; ?>;
    outline: 0
}

.uk-navbar-nav > li > a:active {
    color: <?php echo $templatevars['light']; ?>;
}

.uk-navbar-nav > li.uk-active > a {
    color: <?php echo $templatevars['light']; ?>;
}

.uk-navbar-item {
    color: #333
}

.uk-navbar-toggle {
    color: #333;
    font-weight: 300
}

.uk-navbar-toggle:hover, .uk-navbar-toggle:focus, .uk-navbar-toggle.uk-open {
    color: <?php echo $templatevars['color']; ?>;
    outline: 0;
    text-decoration: none
}

.uk-navbar-subtitle {
    font-size: 12px
}

.uk-navbar-dropdown {
    display: none;
    position: absolute;
    z-index: 1020;
    box-sizing: border-box;
    width: 200px;
    padding: 25px;
    background: #fafafa;
    color: #333
}

.uk-navbar-dropdown.uk-open {
    display: block
}

[class*='uk-navbar-dropdown-top'] {
    margin-top: 0
}

[class*='uk-navbar-dropdown-bottom'] {
    margin-top: 0
}

[class*='uk-navbar-dropdown-left'] {
    margin-left: 0
}

[class*='uk-navbar-dropdown-right'] {
    margin-left: 0
}

.uk-navbar-dropdown-grid {
    margin-left: -50px
}

.uk-navbar-dropdown-grid > * {
    padding-left: 50px
}

.uk-navbar-dropdown-grid > .uk-grid-margin {
    margin-top: 50px
}

.uk-navbar-dropdown-stack .uk-navbar-dropdown-grid > * {
    width: 100% !important
}

.uk-navbar-dropdown-width-2:not(.uk-navbar-dropdown-stack) {
    width: 400px
}

.uk-navbar-dropdown-width-3:not(.uk-navbar-dropdown-stack) {
    width: 600px
}

.uk-navbar-dropdown-width-4:not(.uk-navbar-dropdown-stack) {
    width: 800px
}

.uk-navbar-dropdown-width-5:not(.uk-navbar-dropdown-stack) {
    width: 1000px
}

.uk-navbar-dropdown-dropbar {
    margin-bottom: 30px
}

.uk-navbar-dropdown-nav {
    margin-left: 0;
    margin-right: 0;
    font-size: 17px;
    font-weight: 300
}

.uk-navbar-dropdown-nav > li > a {
    color: #333;
    padding: 5px 0
}

.uk-navbar-dropdown-nav > li > a:hover, .uk-navbar-dropdown-nav > li > a:focus {
    color: #98a6ad;
    background-color: transparent
}

.uk-navbar-dropdown-nav > li.uk-active > a {
    color: #333
}

.uk-navbar-dropdown-nav .uk-nav-header {
    color: #333;
    padding: 5px 0
}

.uk-navbar-dropdown-nav .uk-nav-divider {
    border-top: 2px solid #eee;
    margin-top: 15px;
    margin-bottom: 15px
}

.uk-navbar-dropdown-nav .uk-nav-sub a {
    color: #98a6ad
}

.uk-navbar-dropdown-nav .uk-nav-sub a:hover, .uk-navbar-dropdown-nav .uk-nav-sub a:focus {
    color: #333
}

.uk-navbar-dropbar {
    position: relative;
    background: #fafafa;
    overflow: hidden
}

.uk-navbar-dropbar-slide {
    position: absolute;
    z-index: 1020;
    left: 0;
    right: 0
}

.uk-navbar-container > .uk-container .uk-navbar-left {
    margin-left: -15px;
    margin-right: -15px
}

.uk-navbar-container > .uk-container .uk-navbar-right {
    margin-right: -15px
}

.uk-navbar-dropdown-nav .uk-nav-sub {
    padding-left: 15px
}

.uk-navbar-dropdown-grid > * {
    position: relative
}

.uk-navbar-dropdown-grid > :not(.uk-first-column)::before {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 25px;
    border-left: 2px solid #eee
}

.uk-navbar-dropdown-grid.uk-grid-stack > .uk-grid-margin::before {
    content: "";
    position: absolute;
    top: -25px;
    left: 50px;
    right: 0;
    border-top: 2px solid #eee
}

.uk-subnav {
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -ms-flex-wrap: wrap;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-left: -20px;
    padding: 0;
    list-style: none
}

.uk-subnav > * {
    -ms-flex: none;
    -webkit-flex: none;
    flex: none;
    padding-left: 20px;
    position: relative
}

.uk-subnav > * > :first-child {
    display: block;
    color: #98a6ad;
    -webkit-transition: .1s ease-in-out;
    transition: .1s ease-in-out;
    -webkit-transition-property: color, background-color, border-color, box-shadow;
    transition-property: color, background-color, border-color, box-shadow;
    font-size: 17px;
    font-weight: 300
}

.uk-subnav > * > a:hover, .uk-subnav > * > a:focus {
    color: #333;
    text-decoration: none;
    outline: 0
}

.uk-subnav > .uk-active > a {
    color: #333
}

.uk-subnav-divider > * {
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center
}

.uk-subnav-divider > :nth-child(n+2):not(.uk-first-column)::before {
    content: "";
    height: 1.5em;
    margin-left: 0;
    margin-right: 20px;
    border-left: 1px solid #eee
}

.uk-subnav-pill > * > :first-child {
    padding: 5px 10px;
    background: transparent;
    color: #98a6ad
}

.uk-subnav-pill > * > a:hover, .uk-subnav-pill > * > a:focus {
    background-color: #fafafa;
    color: #333
}

.uk-subnav-pill > * > a:active {
    background-color: #fafafa;
    color: #333
}

.uk-subnav-pill > .uk-active > a {
    background-color: <?php echo $templatevars['color']; ?>;
    color: #fff
}

.uk-subnav > .uk-disabled > a {
    color: #98a6ad
}

.uk-breadcrumb {
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -ms-flex-wrap: wrap;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    padding: 0;
    list-style: none
}

.uk-breadcrumb > * {
    -ms-flex: none;
    -webkit-flex: none;
    flex: none
}

.uk-breadcrumb > * > * {
    display: inline-block;
    font-size: 14px;
    color: #333;
    font-weight: 300
}

.uk-breadcrumb > * > :hover, .uk-breadcrumb > * > :focus {
    color: <?php echo $templatevars['color']; ?>;
    text-decoration: none
}

.uk-breadcrumb > .uk-disabled > * {
    color: #98a6ad
}

.uk-breadcrumb > :last-child > * {
    color: #333
}

.uk-breadcrumb > :nth-child(n+2):not(.uk-first-column)::before {
    content: "â€“";
    display: inline-block;
    margin: 0 10px;
    color: #98a6ad
}

.uk-pagination {
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -ms-flex-wrap: wrap;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-left: -20px;
    padding: 0;
    list-style: none
}

.uk-pagination > * {
    -ms-flex: none;
    -webkit-flex: none;
    flex: none;
    padding-left: 20px;
    position: relative
}

.uk-pagination > * > * {
    display: block;
    color: #98a6ad;
    box-sizing: border-box;
    min-width: 0;
    padding: 0;
    background: transparent;
    line-height: 1.58;
    text-align: center;
    -webkit-transition: .1s ease-in-out;
    transition: .1s ease-in-out;
    -webkit-transition-property: color, background-color, border-color, box-shadow;
    transition-property: color, background-color, border-color, box-shadow;
    font-size: 17px;
    font-weight: 300;
    border-bottom: 2px solid transparent
}

.uk-pagination > * > :hover, .uk-pagination > * > :focus {
    color: #333;
    text-decoration: none;
    background-color: transparent;
    border-bottom-color: <?php echo $templatevars['color']; ?>;
}

.uk-pagination > .uk-active > * {
    color: #333;
    background-color: transparent;
    border-bottom-color: transparent
}

.uk-pagination > .uk-disabled > * {
    color: #98a6ad;
    background-color: transparent;
    border-bottom-color: transparent
}

.uk-tab, .woocommerce-page div.product .woocommerce-tabs ul.tabs, .woocommerce div.product .woocommerce-tabs ul.tabs {
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -ms-flex-wrap: wrap;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-left: -20px;
    padding: 0;
    list-style: none
}

.uk-tab > *, .woocommerce-page div.product .woocommerce-tabs ul.tabs li, .woocommerce div.product .woocommerce-tabs ul.tabs li {
    -ms-flex: none;
    -webkit-flex: none;
    flex: none;
    padding-left: 20px;
    position: relative
}

.uk-tab > * > a, .woocommerce-page div.product .woocommerce-tabs ul.tabs li a, .woocommerce div.product .woocommerce-tabs ul.tabs li a {
    display: block;
    text-align: center;
    padding: 5px 10px;
    color: #98a6ad;
    -webkit-transition: .1s ease-in-out;
    transition: .1s ease-in-out;
    -webkit-transition-property: color, background-color, border-color, box-shadow;
    transition-property: color, background-color, border-color, box-shadow;
    font-size: 17px;
    line-height: 1.58;
    font-weight: 300;
    border-bottom: 2px solid transparent
}

.uk-tab > * > a:hover, .uk-tab > * > a:focus, .woocommerce-page div.product .woocommerce-tabs ul.tabs li a:hover, .woocommerce-page div.product .woocommerce-tabs ul.tabs li a:focus, .woocommerce div.product .woocommerce-tabs ul.tabs li a:hover, .woocommerce div.product .woocommerce-tabs ul.tabs li a:focus {
    color: #333;
    text-decoration: none;
    border-color: #eee
}

.uk-tab > .uk-active > a, .woocommerce-page div.product .woocommerce-tabs ul.tabs li.active a, .woocommerce div.product .woocommerce-tabs ul.tabs li.active a {
    color: #333;
    border-color: <?php echo $templatevars['color']; ?>;
}

.uk-tab > .uk-disabled > a {
    color: #98a6ad
}

.uk-tab-bottom > * > a {
    border-top: 2px solid transparent;
    border-bottom: 0 none
}

.uk-tab-left, .uk-tab-right {
    -ms-flex-direction: column;
    -webkit-flex-direction: column;
    flex-direction: column;
    margin-left: 0
}

.uk-tab-left > *, .uk-tab-right > * {
    padding-left: 0
}

.uk-tab-left > * > a {
    text-align: right;
    padding: 5px 10px;
    border-right: 2px solid transparent;
    border-bottom: 0 none
}

.uk-tab-right > * > a {
    text-align: left;
    padding: 5px 10px;
    border-left: 2px solid transparent;
    border-bottom: 0 none
}

.uk-tab .uk-dropdown {
    margin-left: 30px
}

.uk-slidenav {
    padding: 5px;
    color: rgba(39, 76, 94, 0.6);
    background: transparent;
    -webkit-transition: .1s ease-in-out;
    transition: .1s ease-in-out;
    -webkit-transition-property: color, background-color, border-color, box-shadow;
    transition-property: color, background-color, border-color, box-shadow
}

.uk-slidenav:hover, .uk-slidenav:focus {
    color: rgba(39, 76, 94, 0.8);
    outline: 0;
    background-color: transparent
}

.uk-slidenav:active {
    color: rgba(39, 76, 94, 0.9);
    background-color: transparent
}

.uk-slidenav-container {
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex
}

.uk-dotnav {
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -ms-flex-wrap: wrap;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    margin: 0;
    padding: 0;
    list-style: none;
    margin-left: -15px
}

.uk-dotnav > * {
    -ms-flex: none;
    -webkit-flex: none;
    flex: none;
    padding-left: 15px
}

.uk-dotnav > * > * {
    display: block;
    box-sizing: content-box;
    width: 16px;
    height: 16px;
    border-radius: 50%;
    background: rgba(39, 76, 94, 0.1);
    text-indent: 100%;
    overflow: hidden;
    white-space: nowrap;
    -webkit-transition: .2s ease-in-out;
    transition: .2s ease-in-out;
    -webkit-transition-property: color, background-color, border-color, box-shadow;
    transition-property: color, background-color, border-color, box-shadow
}

.uk-dotnav > * > :hover, .uk-dotnav > * > :focus {
    background-color: <?php echo $templatevars['color']; ?>;
    outline: 0
}

.uk-dotnav > * > :active {
    background-color: <?php echo $templatevars['dark']; ?>;
}

.uk-dotnav > .uk-active > * {
    background-color: <?php echo $templatevars['color']; ?>;
}

.uk-dotnav-vertical {
    -ms-flex-direction: column;
    -webkit-flex-direction: column;
    flex-direction: column;
    margin-left: 0;
    margin-top: -15px
}

.uk-dotnav-vertical > * {
    padding-left: 0;
    padding-top: 15px
}

.uk-accordion {
    padding: 0;
    list-style: none
}

.uk-accordion > :nth-child(n+2) {
    margin-top: 30px;
    padding-top: 30px;
    border-top: 2px solid #eee
}

.uk-accordion-title {
    margin: 0;
    font-size: 20px;
    line-height: 1.4;
    cursor: pointer;
    padding: 0;
    background: transparent;
    overflow: hidden
}

.uk-accordion-title::after {
    content: "";
    width: 1.4em;
    height: 1.4em;
    float: right;
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2213%22%20height%3D%2213%22%20viewBox%3D%220%200%2013%2013%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Crect%20fill%3D%22%23274c5e%22%20width%3D%2213%22%20height%3D%221%22%20x%3D%220%22%20y%3D%226%22%3E%3C%2Frect%3E%0A%20%20%20%20%3Crect%20fill%3D%22%23274c5e%22%20width%3D%221%22%20height%3D%2213%22%20x%3D%226%22%20y%3D%220%22%3E%3C%2Frect%3E%0A%3C%2Fsvg%3E");
    background-repeat: no-repeat;
    background-position: 50% 50%
}

.uk-open > .uk-accordion-title::after {
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2213%22%20height%3D%2213%22%20viewBox%3D%220%200%2013%2013%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Crect%20fill%3D%22%23274c5e%22%20width%3D%2213%22%20height%3D%221%22%20x%3D%220%22%20y%3D%226%22%3E%3C%2Frect%3E%0A%3C%2Fsvg%3E")
}

.uk-accordion-content {
    margin-top: 30px
}

.uk-accordion-content:before, .uk-accordion-content:after {
    content: "";
    display: table
}

.uk-accordion-content:after {
    clear: both
}

.uk-accordion-content > :last-child {
    margin-bottom: 0
}

.uk-drop {
    display: none;
    position: absolute;
    z-index: 1020;
    box-sizing: border-box;
    width: 300px
}

.uk-drop.uk-open {
    display: block
}

[class*='uk-drop-top'] {
    margin-top: -30px
}

[class*='uk-drop-bottom'] {
    margin-top: 30px
}

[class*='uk-drop-left'] {
    margin-left: -30px
}

[class*='uk-drop-right'] {
    margin-left: 30px
}

.uk-drop-stack .uk-drop-grid > * {
    width: 100% !important
}

.uk-dropdown {
    display: none;
    position: absolute;
    z-index: 1020;
    box-sizing: border-box;
    min-width: 200px;
    padding: 25px;
    background: #fafafa;
    color: #333
}

.uk-dropdown.uk-open {
    display: block
}

.uk-dropdown-nav {
    white-space: nowrap;
    margin-left: 0;
    margin-right: 0;
    font-size: 17px;
    font-weight: 300
}

.uk-dropdown-nav > li > a {
    color: #333;
    padding: 5px 0
}

.uk-dropdown-nav > li > a:hover, .uk-dropdown-nav > li > a:focus, .uk-dropdown-nav > li.uk-active > a {
    color: #98a6ad;
    background-color: transparent
}

.uk-dropdown-nav .uk-nav-header {
    color: #333;
    padding: 5px 0
}

.uk-dropdown-nav .uk-nav-divider {
    border-top: 2px solid #eee;
    margin-left: 0;
    margin-right: 0
}

.uk-dropdown-nav .uk-nav-sub a {
    color: #98a6ad
}

.uk-dropdown-nav .uk-nav-sub a:hover, .uk-dropdown-nav .uk-nav-sub a:focus {
    color: #333
}

[class*='uk-dropdown-top'] {
    margin-top: -10px
}

[class*='uk-dropdown-bottom'] {
    margin-top: 10px
}

[class*='uk-dropdown-left'] {
    margin-left: -10px
}

[class*='uk-dropdown-right'] {
    margin-left: 10px
}

.uk-dropdown-stack .uk-dropdown-grid > * {
    width: 100% !important
}

.uk-dropdown-nav .uk-nav-sub {
    padding-left: 15px
}

.uk-modal {
    display: none;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1010;
    overflow-y: auto;
    -webkit-overflow-scrolling: touch;
    padding: 15px 15px;
    background: rgba(0, 0, 0, 0.6);
    opacity: 0;
    -webkit-transition: opacity .15s linear;
    transition: opacity .15s linear
}

@media (min-width: 640px) {
    .uk-modal {
        padding: 50px 25px
    }
}

@media (min-width: 960px) {
    .uk-modal {
        padding-left: 40px;
        padding-right: 40px
    }
}

.uk-modal.uk-open {
    opacity: 1
}

.uk-modal-page {
    overflow: hidden
}

.uk-modal-dialog {
    position: relative;
    box-sizing: border-box;
    margin: 0 auto;
    width: 600px;
    max-width: 100%;
    background: #fff;
    opacity: 0;
    -webkit-transform: translateY(-100px);
    transform: translateY(-100px);
    -webkit-transition: .3s linear;
    transition: .3s linear;
    -webkit-transition-property: opacity, transform;
    transition-property: opacity, transform
}

.uk-open > .uk-modal-dialog {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0)
}

.uk-modal-container .uk-modal-dialog {
    width: 1200px
}

.uk-modal-full {
    padding: 0;
    background: 0
}

.uk-modal-full .uk-modal-dialog {
    margin: 0;
    width: 100%;
    max-width: 100%;
    -webkit-transform: translateY(0);
    transform: translateY(0)
}

.uk-modal-body {
    padding: 25px 25px
}

.uk-modal-header {
    padding: 12.5px 25px;
    background: #fff;
    border-bottom: 1px solid #eee
}

.uk-modal-footer {
    padding: 12.5px 25px;
    background: #fff;
    border-top: 1px solid #eee
}

.uk-modal-body::before, .uk-modal-body::after, .uk-modal-header::before, .uk-modal-header::after, .uk-modal-footer::before, .uk-modal-footer::after {
    content: "";
    display: table
}

.uk-modal-body::after, .uk-modal-header::after, .uk-modal-footer::after {
    clear: both
}

.uk-modal-body > :last-child, .uk-modal-header > :last-child, .uk-modal-footer > :last-child {
    margin-bottom: 0
}

.uk-modal-title {
    font-size: 38px;
    line-height: 1.3;
    font-weight: 300
}

[class*='uk-modal-close-'] {
    position: absolute;
    z-index: 1010;
    top: 10px;
    right: 10px;
    padding: 5px
}

[class*='uk-modal-close-']:first-child + * {
    margin-top: 0
}

.uk-modal-close-outside {
    top: 0;
    right: 0;
    -webkit-transform: translate(100%, -100%);
    transform: translate(100%, -100%);
    color: #fff
}

.uk-modal-close-outside:hover {
    color: #fff
}

.uk-modal-close-full {
    top: 0;
    right: 0;
    padding: 30px;
    background: #fff
}

.uk-lightbox {
    display: none;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1010;
    background: #000;
    opacity: 0;
    -webkit-transition: opacity .15s linear;
    transition: opacity .15s linear
}

.uk-lightbox.uk-open {
    display: block;
    opacity: 1
}

.uk-lightbox-page {
    overflow: hidden
}

.uk-lightbox-item {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    display: none;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
    color: rgba(255, 255, 255, 0.7)
}

.uk-lightbox-item > * {
    max-width: 100vw;
    max-height: 100vh
}

.uk-lightbox-item > :not(iframe) {
    width: auto;
    height: auto
}

.uk-lightbox-item.uk-active {
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex
}

.uk-lightbox-toolbar {
    padding: 10px 10px;
    background: rgba(0, 0, 0, 0.3);
    color: rgba(255, 255, 255, 0.7)
}

.uk-lightbox-toolbar-icon {
    padding: 5px;
    color: rgba(255, 255, 255, 0.7)
}

.uk-lightbox-toolbar-icon:hover {
    color: #fff
}

.uk-lightbox-button {
    box-sizing: border-box;
    width: 50px;
    height: 50px;
    background: rgba(0, 0, 0, 0.3);
    color: rgba(255, 255, 255, 0.7);
    display: -ms-inline-flexbox;
    display: -webkit-inline-flex;
    display: inline-flex;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center
}

.uk-lightbox-button:hover {
    color: #fff
}

.uk-lightbox-iframe {
    width: 80%;
    height: 80%
}

.uk-sticky-fixed {
    z-index: 980;
    box-sizing: border-box;
    margin: 0 !important;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden
}

.uk-sticky[class*='uk-animation-'] {
    -webkit-animation-duration: .2s;
    animation-duration: .2s
}

.uk-sticky.uk-animation-reverse {
    -webkit-animation-duration: .2s;
    animation-duration: .2s
}

.uk-offcanvas {
    display: none;
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    z-index: 1000
}

.uk-offcanvas-flip .uk-offcanvas {
    right: 0;
    left: auto
}

.uk-offcanvas-bar {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    box-sizing: border-box;
    width: 270px;
    padding: 30px 30px;
    background: #fafafa;
    overflow-y: auto;
    -webkit-overflow-scrolling: touch;
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%)
}

@media (min-width: 960px) {
    .uk-offcanvas-bar {
        width: 350px;
        padding: 40px 40px
    }
}

.uk-offcanvas-flip .uk-offcanvas-bar {
    left: auto;
    right: 0;
    -webkit-transform: translateX(100%);
    transform: translateX(100%)
}

.uk-open > .uk-offcanvas-bar {
    -webkit-transform: translateX(0);
    transform: translateX(0)
}

.uk-offcanvas-bar-animation {
    -webkit-transition: -webkit-transform .3s ease-out;
    transition: transform .3s ease-out
}

.uk-offcanvas-reveal {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 0;
    overflow: hidden;
    -webkit-transition: width .3s ease-out;
    transition: width .3s ease-out
}

.uk-offcanvas-reveal .uk-offcanvas-bar {
    -webkit-transform: translateX(0);
    transform: translateX(0)
}

.uk-open > .uk-offcanvas-reveal {
    width: 270px
}

@media (min-width: 960px) {
    .uk-open > .uk-offcanvas-reveal {
        width: 350px
    }
}

.uk-offcanvas-flip .uk-offcanvas-reveal {
    right: 0;
    left: auto
}

.uk-offcanvas-close {
    position: absolute;
    z-index: 1000;
    top: 20px;
    right: 20px;
    padding: 5px
}

.uk-offcanvas-overlay {
    width: 100vw;
    touch-action: none
}

.uk-offcanvas-overlay::before {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(59, 28, 39, 0.1);
    opacity: 0;
    -webkit-transition: opacity .15s linear;
    transition: opacity .15s linear
}

.uk-offcanvas-overlay.uk-open::before {
    opacity: 1
}

.uk-offcanvas-page, .uk-offcanvas-container {
    overflow-x: hidden
}

.uk-offcanvas-container-overlay {
    overflow: hidden
}

.uk-offcanvas-container .uk-offcanvas-content {
    position: relative;
    left: 0;
    -webkit-transition: left .3s ease-out;
    transition: left .3s ease-out;
    -webkit-overflow-scrolling: touch
}

.uk-offcanvas-overlay .uk-offcanvas-content {
    overflow-y: hidden
}

:not(.uk-offcanvas-flip) > .uk-offcanvas-content-animation {
    left: 270px
}

.uk-offcanvas-flip > .uk-offcanvas-content-animation {
    left: -270px
}

@media (min-width: 960px) {
    :not(.uk-offcanvas-flip) > .uk-offcanvas-content-animation {
        left: 350px
    }

    .uk-offcanvas-flip > .uk-offcanvas-content-animation {
        left: -350px
    }
}

.uk-switcher {
    margin: 0;
    padding: 0;
    list-style: none
}

.uk-switcher > :not(.uk-active) {
    display: none
}

.uk-switcher > * > :last-child {
    margin-bottom: 0
}

.uk-iconnav {
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -ms-flex-wrap: wrap;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    margin: 0;
    padding: 0;
    list-style: none;
    margin-left: -10px
}

.uk-iconnav > * {
    -ms-flex: none;
    -webkit-flex: none;
    flex: none;
    padding-left: 10px
}

.uk-iconnav > * > * {
    display: block;
    color: #98a6ad
}

.uk-iconnav > * > :hover, .uk-iconnav > * > :focus {
    color: #333;
    outline: 0
}

.uk-iconnav > .uk-active > * {
    color: #333
}

.uk-iconnav-vertical {
    -ms-flex-direction: column;
    -webkit-flex-direction: column;
    flex-direction: column;
    margin-left: 0;
    margin-top: -10px
}

.uk-iconnav-vertical > * {
    padding-left: 0;
    padding-top: 10px
}

.uk-notification {
    position: fixed;
    top: 10px;
    left: 10px;
    z-index: 1040;
    box-sizing: border-box;
    width: 350px
}

.uk-notification-top-right, .uk-notification-bottom-right {
    left: auto;
    right: 10px
}

.uk-notification-top-center, .uk-notification-bottom-center {
    left: 50%;
    margin-left: -175px
}

.uk-notification-bottom-left, .uk-notification-bottom-right, .uk-notification-bottom-center {
    top: auto;
    bottom: 10px
}

@media (max-width: 639px) {
    .uk-notification {
        left: 10px;
        right: 10px;
        width: auto;
        margin: 0
    }
}

.uk-notification-message {
    position: relative;
    margin-bottom: 10px;
    padding: 15px;
    background: #fafafa;
    color: #333;
    font-size: 26px;
    line-height: 1.4;
    cursor: pointer
}

.uk-notification-close {
    display: none;
    position: absolute;
    top: 20px;
    right: 15px
}

.uk-notification-message:hover .uk-notification-close {
    display: block
}

.uk-notification-message-primary {
    color: <?php echo $templatevars['color']; ?>;
}

.uk-notification-message-success {
    color: <?php echo $templatevars['light']; ?>;
}

.uk-notification-message-warning {
    color: <?php echo $templatevars['dark']; ?>;
}

.uk-notification-message-danger {
    color: #e78b8b
}

.uk-tooltip {
    display: none;
    position: absolute;
    z-index: 1030;
    box-sizing: border-box;
    max-width: 200px;
    padding: 3px 6px;
    background: #333;
    border-radius: 2px;
    color: #fff;
    font-size: 12px
}

.uk-tooltip.uk-active {
    display: block
}

[class*='uk-tooltip-top'] {
    margin-top: -10px
}

[class*='uk-tooltip-bottom'] {
    margin-top: 10px
}

[class*='uk-tooltip-left'] {
    margin-left: -10px
}

[class*='uk-tooltip-right'] {
    margin-left: 10px
}

.uk-placeholder {
    margin-bottom: 30px;
    padding: 25px 25px;
    background: transparent;
    border: 2px dashed #eee
}

* + .uk-placeholder {
    margin-top: 30px
}

.uk-placeholder > :last-child {
    margin-bottom: 0
}

.uk-progress {
    -webkit-appearance: none;
    -moz-appearance: none;
    display: block;
    width: 100%;
    border: 0;
    background-color: #fafafa;
    margin-bottom: 30px;
    height: 15px;
    border-radius: 500px;
    overflow: hidden
}

* + .uk-progress {
    margin-top: 30px
}

.uk-progress:indeterminate {
    color: transparent
}

.uk-progress::-webkit-progress-bar {
    background-color: #fafafa;
    border-radius: 500px;
    overflow: hidden
}

.uk-progress:indeterminate::-moz-progress-bar {
    width: 0
}

.uk-progress::-webkit-progress-value {
    background-color: <?php echo $templatevars['color']; ?>;
    transition: width .6s ease
}

.uk-progress::-moz-progress-bar {
    background-color: <?php echo $templatevars['color']; ?>;
}

.uk-progress::-ms-fill {
    background-color: <?php echo $templatevars['color']; ?>;
    transition: width .6s ease;
    border: 0
}

.uk-sortable {
    position: relative
}

.uk-sortable > * {
    touch-action: none
}

.uk-sortable svg {
    pointer-events: none
}

.uk-sortable > :last-child {
    margin-bottom: 0
}

.uk-sortable-drag {
    position: absolute !important;
    z-index: 1050 !important;
    pointer-events: none
}

.uk-sortable-placeholder {
    opacity: 0
}

.uk-sortable-empty {
    min-height: 50px
}

.uk-sortable-handle:hover {
    cursor: move
}

.uk-countdown-number, .uk-countdown-separator {
    line-height: 70px;
    color: #333
}

.uk-countdown-number {
    font-size: 2rem
}

@media (min-width: 640px) {
    .uk-countdown-number {
        font-size: 4rem
    }
}

@media (min-width: 960px) {
    .uk-countdown-number {
        font-size: 6rem
    }
}

.uk-countdown-separator {
    font-size: 1rem
}

@media (min-width: 640px) {
    .uk-countdown-separator {
        font-size: 2rem
    }
}

@media (min-width: 960px) {
    .uk-countdown-separator {
        font-size: 3rem
    }
}

.uk-countdown-label {
    color: #98a6ad;
    font-size: 17px
}

[class*='uk-animation-'] {
    -webkit-animation-duration: .5s;
    animation-duration: .5s;
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both
}

.uk-animation-reverse {
    -webkit-animation-direction: reverse;
    animation-direction: reverse;
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in
}

.uk-animation-fade {
    -webkit-animation-name: uk-fade;
    animation-name: uk-fade;
    -webkit-animation-duration: .8s;
    animation-duration: .8s;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear
}

.uk-animation-scale-up {
    -webkit-animation-name: uk-fade-scale-02;
    animation-name: uk-fade-scale-02
}

.uk-animation-scale-down {
    -webkit-animation-name: uk-fade-scale-18;
    animation-name: uk-fade-scale-18
}

.uk-animation-slide-top {
    -webkit-animation-name: uk-fade-top;
    animation-name: uk-fade-top
}

.uk-animation-slide-bottom {
    -webkit-animation-name: uk-fade-bottom;
    animation-name: uk-fade-bottom
}

.uk-animation-slide-left {
    -webkit-animation-name: uk-fade-left;
    animation-name: uk-fade-left
}

.uk-animation-slide-right {
    -webkit-animation-name: uk-fade-right;
    animation-name: uk-fade-right
}

.uk-animation-slide-top-small {
    -webkit-animation-name: uk-fade-top-small;
    animation-name: uk-fade-top-small
}

.uk-animation-slide-bottom-small {
    -webkit-animation-name: uk-fade-bottom-small;
    animation-name: uk-fade-bottom-small
}

.uk-animation-slide-left-small {
    -webkit-animation-name: uk-fade-left-small;
    animation-name: uk-fade-left-small
}

.uk-animation-slide-right-small {
    -webkit-animation-name: uk-fade-right-small;
    animation-name: uk-fade-right-small
}

.uk-animation-slide-top-medium {
    -webkit-animation-name: uk-fade-top-medium;
    animation-name: uk-fade-top-medium
}

.uk-animation-slide-bottom-medium {
    -webkit-animation-name: uk-fade-bottom-medium;
    animation-name: uk-fade-bottom-medium
}

.uk-animation-slide-left-medium {
    -webkit-animation-name: uk-fade-left-medium;
    animation-name: uk-fade-left-medium
}

.uk-animation-slide-right-medium {
    -webkit-animation-name: uk-fade-right-medium;
    animation-name: uk-fade-right-medium
}

.uk-animation-kenburns {
    -webkit-animation-name: uk-scale-kenburns;
    animation-name: uk-scale-kenburns;
    -webkit-animation-duration: 15s;
    animation-duration: 15s
}

.uk-animation-shake {
    -webkit-animation-name: uk-shake;
    animation-name: uk-shake
}

.uk-animation-fast {
    -webkit-animation-duration: .1s;
    animation-duration: .1s
}

.uk-animation-toggle:not(:hover):not(.uk-hover) [class*='uk-animation-'] {
    -webkit-animation-name: none;
    animation-name: none
}

@-webkit-keyframes uk-fade {
    0% {
        opacity: 0
    }
    100% {
        opacity: 1
    }
}

@keyframes uk-fade {
    0% {
        opacity: 0
    }
    100% {
        opacity: 1
    }
}

@-webkit-keyframes uk-fade-top {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-100%)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0)
    }
}

@keyframes uk-fade-top {
    0% {
        opacity: 0;
        transform: translateY(-100%)
    }
    100% {
        opacity: 1;
        transform: translateY(0)
    }
}

@-webkit-keyframes uk-fade-bottom {
    0% {
        opacity: 0;
        -webkit-transform: translateY(100%)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0)
    }
}

@keyframes uk-fade-bottom {
    0% {
        opacity: 0;
        transform: translateY(100%)
    }
    100% {
        opacity: 1;
        transform: translateY(0)
    }
}

@-webkit-keyframes uk-fade-left {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-100%)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0)
    }
}

@keyframes uk-fade-left {
    0% {
        opacity: 0;
        transform: translateX(-100%)
    }
    100% {
        opacity: 1;
        transform: translateX(0)
    }
}

@-webkit-keyframes uk-fade-right {
    0% {
        opacity: 0;
        -webkit-transform: translateX(100%)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0)
    }
}

@keyframes uk-fade-right {
    0% {
        opacity: 0;
        transform: translateX(100%)
    }
    100% {
        opacity: 1;
        transform: translateX(0)
    }
}

@-webkit-keyframes uk-fade-top-small {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-10px)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0)
    }
}

@keyframes uk-fade-top-small {
    0% {
        opacity: 0;
        transform: translateY(-10px)
    }
    100% {
        opacity: 1;
        transform: translateY(0)
    }
}

@-webkit-keyframes uk-fade-bottom-small {
    0% {
        opacity: 0;
        -webkit-transform: translateY(10px)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0)
    }
}

@keyframes uk-fade-bottom-small {
    0% {
        opacity: 0;
        transform: translateY(10px)
    }
    100% {
        opacity: 1;
        transform: translateY(0)
    }
}

@-webkit-keyframes uk-fade-left-small {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-10px)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0)
    }
}

@keyframes uk-fade-left-small {
    0% {
        opacity: 0;
        transform: translateX(-10px)
    }
    100% {
        opacity: 1;
        transform: translateX(0)
    }
}

@-webkit-keyframes uk-fade-right-small {
    0% {
        opacity: 0;
        -webkit-transform: translateX(10px)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0)
    }
}

@keyframes uk-fade-right-small {
    0% {
        opacity: 0;
        transform: translateX(10px)
    }
    100% {
        opacity: 1;
        transform: translateX(0)
    }
}

@-webkit-keyframes uk-fade-top-medium {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-50px)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0)
    }
}

@keyframes uk-fade-top-medium {
    0% {
        opacity: 0;
        transform: translateY(-50px)
    }
    100% {
        opacity: 1;
        transform: translateY(0)
    }
}

@-webkit-keyframes uk-fade-bottom-medium {
    0% {
        opacity: 0;
        -webkit-transform: translateY(50px)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0)
    }
}

@keyframes uk-fade-bottom-medium {
    0% {
        opacity: 0;
        transform: translateY(50px)
    }
    100% {
        opacity: 1;
        transform: translateY(0)
    }
}

@-webkit-keyframes uk-fade-left-medium {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-50px)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0)
    }
}

@keyframes uk-fade-left-medium {
    0% {
        opacity: 0;
        transform: translateX(-50px)
    }
    100% {
        opacity: 1;
        transform: translateX(0)
    }
}

@-webkit-keyframes uk-fade-right-medium {
    0% {
        opacity: 0;
        -webkit-transform: translateX(50px)
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0)
    }
}

@keyframes uk-fade-right-medium {
    0% {
        opacity: 0;
        transform: translateX(50px)
    }
    100% {
        opacity: 1;
        transform: translateX(0)
    }
}

@-webkit-keyframes uk-fade-scale-02 {
    0% {
        opacity: 0;
        -webkit-transform: scale(0.2)
    }
    100% {
        opacity: 1;
        -webkit-transform: scale(1)
    }
}

@keyframes uk-fade-scale-02 {
    0% {
        opacity: 0;
        transform: scale(0.2)
    }
    100% {
        opacity: 1;
        transform: scale(1)
    }
}

@-webkit-keyframes uk-fade-scale-18 {
    0% {
        opacity: 0;
        -webkit-transform: scale(1.8)
    }
    100% {
        opacity: 1;
        -webkit-transform: scale(1)
    }
}

@keyframes uk-fade-scale-18 {
    0% {
        opacity: 0;
        transform: scale(1.8)
    }
    100% {
        opacity: 1;
        transform: scale(1)
    }
}

@-webkit-keyframes uk-scale-kenburns {
    0% {
        -webkit-transform: scale(1)
    }
    100% {
        -webkit-transform: scale(1.2)
    }
}

@keyframes uk-scale-kenburns {
    0% {
        transform: scale(1)
    }
    100% {
        transform: scale(1.2)
    }
}

@-webkit-keyframes uk-shake {
    0%, 100% {
        -webkit-transform: translateX(0)
    }
    10% {
        -webkit-transform: translateX(-9px)
    }
    20% {
        -webkit-transform: translateX(8px)
    }
    30% {
        -webkit-transform: translateX(-7px)
    }
    40% {
        -webkit-transform: translateX(6px)
    }
    50% {
        -webkit-transform: translateX(-5px)
    }
    60% {
        -webkit-transform: translateX(4px)
    }
    70% {
        -webkit-transform: translateX(-3px)
    }
    80% {
        -webkit-transform: translateX(2px)
    }
    90% {
        -webkit-transform: translateX(-1px)
    }
}

@keyframes uk-shake {
    0%, 100% {
        transform: translateX(0)
    }
    10% {
        transform: translateX(-9px)
    }
    20% {
        transform: translateX(8px)
    }
    30% {
        transform: translateX(-7px)
    }
    40% {
        transform: translateX(6px)
    }
    50% {
        transform: translateX(-5px)
    }
    60% {
        transform: translateX(4px)
    }
    70% {
        transform: translateX(-3px)
    }
    80% {
        transform: translateX(2px)
    }
    90% {
        transform: translateX(-1px)
    }
}

[class*='uk-child-width'] > * {
    box-sizing: border-box;
    width: 100%
}

.uk-child-width-1-2 > * {
    width: 50%
}

.uk-child-width-1-3 > * {
    width: calc(100% * 1 / 3.001)
}

.uk-child-width-1-4 > * {
    width: 25%
}

.uk-child-width-1-5 > * {
    width: 20%
}

.uk-child-width-1-6 > * {
    width: calc(100% * 1 / 6.001)
}

.uk-child-width-auto > * {
    width: auto
}

.uk-child-width-expand > * {
    width: 1px
}

.uk-child-width-expand > :not([class*='uk-width']) {
    -ms-flex: 1;
    -webkit-flex: 1;
    flex: 1;
    min-width: 0;
    flex-basis: 1px
}

@media (min-width: 640px) {
    .uk-child-width-1-1\@s > * {
        width: 100%
    }

    .uk-child-width-1-2\@s > * {
        width: 50%
    }

    .uk-child-width-1-3\@s > * {
        width: calc(100% * 1 / 3.001)
    }

    .uk-child-width-1-4\@s > * {
        width: 25%
    }

    .uk-child-width-1-5\@s > * {
        width: 20%
    }

    .uk-child-width-1-6\@s > * {
        width: calc(100% * 1 / 6.001)
    }

    .uk-child-width-auto\@s > * {
        width: auto
    }

    .uk-child-width-expand\@s > * {
        width: 1px
    }

    .uk-child-width-expand\@s > :not([class*='uk-width']) {
        -ms-flex: 1;
        -webkit-flex: 1;
        flex: 1;
        min-width: 0;
        flex-basis: 1px
    }
}

@media (min-width: 960px) {
    .uk-child-width-1-1\@m > * {
        width: 100%
    }

    .uk-child-width-1-2\@m > * {
        width: 50%
    }

    .uk-child-width-1-3\@m > * {
        width: calc(100% * 1 / 3.001)
    }

    .uk-child-width-1-4\@m > * {
        width: 25%
    }

    .uk-child-width-1-5\@m > * {
        width: 20%
    }

    .uk-child-width-1-6\@m > * {
        width: calc(100% * 1 / 6.001)
    }

    .uk-child-width-auto\@m > * {
        width: auto
    }

    .uk-child-width-expand\@m > * {
        width: 1px
    }

    .uk-child-width-expand\@m > :not([class*='uk-width']) {
        -ms-flex: 1;
        -webkit-flex: 1;
        flex: 1;
        min-width: 0;
        flex-basis: 1px
    }
}

@media (min-width: 1200px) {
    .uk-child-width-1-1\@l > * {
        width: 100%
    }

    .uk-child-width-1-2\@l > * {
        width: 50%
    }

    .uk-child-width-1-3\@l > * {
        width: calc(100% * 1 / 3.001)
    }

    .uk-child-width-1-4\@l > * {
        width: 25%
    }

    .uk-child-width-1-5\@l > * {
        width: 20%
    }

    .uk-child-width-1-6\@l > * {
        width: calc(100% * 1 / 6.001)
    }

    .uk-child-width-auto\@l > * {
        width: auto
    }

    .uk-child-width-expand\@l > * {
        width: 1px
    }

    .uk-child-width-expand\@l > :not([class*='uk-width']) {
        -ms-flex: 1;
        -webkit-flex: 1;
        flex: 1;
        min-width: 0;
        flex-basis: 1px
    }
}

@media (min-width: 1600px) {
    .uk-child-width-1-1\@xl > * {
        width: 100%
    }

    .uk-child-width-1-2\@xl > * {
        width: 50%
    }

    .uk-child-width-1-3\@xl > * {
        width: calc(100% * 1 / 3.001)
    }

    .uk-child-width-1-4\@xl > * {
        width: 25%
    }

    .uk-child-width-1-5\@xl > * {
        width: 20%
    }

    .uk-child-width-1-6\@xl > * {
        width: calc(100% * 1 / 6.001)
    }

    .uk-child-width-auto\@xl > * {
        width: auto
    }

    .uk-child-width-expand\@xl > * {
        width: 1px
    }

    .uk-child-width-expand\@xl > :not([class*='uk-width']) {
        -ms-flex: 1;
        -webkit-flex: 1;
        flex: 1;
        min-width: 0;
        flex-basis: 1px
    }
}

[class*='uk-width'] {
    box-sizing: border-box;
    width: 100%;
    max-width: 100%
}

.uk-width-1-2 {
    width: 50%
}

.uk-width-1-3 {
    width: calc(100% * 1 / 3.001)
}

.uk-width-2-3 {
    width: calc(100% * 2 / 3.001)
}

.uk-width-1-4 {
    width: 25%
}

.uk-width-3-4 {
    width: 75%
}

.uk-width-1-5 {
    width: 20%
}

.uk-width-2-5 {
    width: 40%
}

.uk-width-3-5 {
    width: 60%
}

.uk-width-4-5 {
    width: 80%
}

.uk-width-1-6 {
    width: calc(100% * 1 / 6.001)
}

.uk-width-5-6 {
    width: calc(100% * 5 / 6.001)
}

.uk-width-small {
    width: 150px
}

.uk-width-medium {
    width: 300px
}

.uk-width-large {
    width: 450px
}

.uk-width-xlarge {
    width: 600px
}

.uk-width-xxlarge {
    width: 750px
}

.uk-width-auto {
    width: auto
}

.uk-width-expand {
    width: 1px;
    -ms-flex: 1;
    -webkit-flex: 1;
    flex: 1;
    min-width: 0;
    flex-basis: 1px
}

@media (min-width: 640px) {
    .uk-width-1-1\@s {
        width: 100%
    }

    .uk-width-1-2\@s {
        width: 50%
    }

    .uk-width-1-3\@s {
        width: calc(100% * 1 / 3.001)
    }

    .uk-width-2-3\@s {
        width: calc(100% * 2 / 3.001)
    }

    .uk-width-1-4\@s {
        width: 25%
    }

    .uk-width-3-4\@s {
        width: 75%
    }

    .uk-width-1-5\@s {
        width: 20%
    }

    .uk-width-2-5\@s {
        width: 40%
    }

    .uk-width-3-5\@s {
        width: 60%
    }

    .uk-width-4-5\@s {
        width: 80%
    }

    .uk-width-1-6\@s {
        width: calc(100% * 1 / 6.001)
    }

    .uk-width-5-6\@s {
        width: calc(100% * 5 / 6.001)
    }

    .uk-width-small\@s {
        width: 150px
    }

    .uk-width-medium\@s {
        width: 300px
    }

    .uk-width-large\@s {
        width: 450px
    }

    .uk-width-xlarge\@s {
        width: 600px
    }

    .uk-width-xxlarge\@s {
        width: 750px
    }

    .uk-width-auto\@s {
        width: auto
    }

    .uk-width-expand\@s {
        width: 1px;
        -ms-flex: 1;
        -webkit-flex: 1;
        flex: 1;
        min-width: 0;
        flex-basis: 1px
    }
}

@media (min-width: 960px) {
    .uk-width-1-1\@m {
        width: 100%
    }

    .uk-width-1-2\@m {
        width: 50%
    }

    .uk-width-1-3\@m {
        width: calc(100% * 1 / 3.001)
    }

    .uk-width-2-3\@m {
        width: calc(100% * 2 / 3.001)
    }

    .uk-width-1-4\@m {
        width: 25%
    }

    .uk-width-3-4\@m {
        width: 75%
    }

    .uk-width-1-5\@m {
        width: 20%
    }

    .uk-width-2-5\@m {
        width: 40%
    }

    .uk-width-3-5\@m {
        width: 60%
    }

    .uk-width-4-5\@m {
        width: 80%
    }

    .uk-width-1-6\@m {
        width: calc(100% * 1 / 6.001)
    }

    .uk-width-5-6\@m {
        width: calc(100% * 5 / 6.001)
    }

    .uk-width-small\@m {
        width: 150px
    }

    .uk-width-medium\@m {
        width: 300px
    }

    .uk-width-large\@m {
        width: 450px
    }

    .uk-width-xlarge\@m {
        width: 600px
    }

    .uk-width-xxlarge\@m {
        width: 750px
    }

    .uk-width-auto\@m {
        width: auto
    }

    .uk-width-expand\@m {
        width: 1px;
        -ms-flex: 1;
        -webkit-flex: 1;
        flex: 1;
        min-width: 0;
        flex-basis: 1px
    }
}

@media (min-width: 1200px) {
    .uk-width-1-1\@l {
        width: 100%
    }

    .uk-width-1-2\@l {
        width: 50%
    }

    .uk-width-1-3\@l {
        width: calc(100% * 1 / 3.001)
    }

    .uk-width-2-3\@l {
        width: calc(100% * 2 / 3.001)
    }

    .uk-width-1-4\@l {
        width: 25%
    }

    .uk-width-3-4\@l {
        width: 75%
    }

    .uk-width-1-5\@l {
        width: 20%
    }

    .uk-width-2-5\@l {
        width: 40%
    }

    .uk-width-3-5\@l {
        width: 60%
    }

    .uk-width-4-5\@l {
        width: 80%
    }

    .uk-width-1-6\@l {
        width: calc(100% * 1 / 6.001)
    }

    .uk-width-5-6\@l {
        width: calc(100% * 5 / 6.001)
    }

    .uk-width-small\@l {
        width: 150px
    }

    .uk-width-medium\@l {
        width: 300px
    }

    .uk-width-large\@l {
        width: 450px
    }

    .uk-width-xlarge\@l {
        width: 600px
    }

    .uk-width-xxlarge\@l {
        width: 750px
    }

    .uk-width-auto\@l {
        width: auto
    }

    .uk-width-expand\@l {
        width: 1px;
        -ms-flex: 1;
        -webkit-flex: 1;
        flex: 1;
        min-width: 0;
        flex-basis: 1px
    }
}

@media (min-width: 1600px) {
    .uk-width-1-1\@xl {
        width: 100%
    }

    .uk-width-1-2\@xl {
        width: 50%
    }

    .uk-width-1-3\@xl {
        width: calc(100% * 1 / 3.001)
    }

    .uk-width-2-3\@xl {
        width: calc(100% * 2 / 3.001)
    }

    .uk-width-1-4\@xl {
        width: 25%
    }

    .uk-width-3-4\@xl {
        width: 75%
    }

    .uk-width-1-5\@xl {
        width: 20%
    }

    .uk-width-2-5\@xl {
        width: 40%
    }

    .uk-width-3-5\@xl {
        width: 60%
    }

    .uk-width-4-5\@xl {
        width: 80%
    }

    .uk-width-1-6\@xl {
        width: calc(100% * 1 / 6.001)
    }

    .uk-width-5-6\@xl {
        width: calc(100% * 5 / 6.001)
    }

    .uk-width-small\@xl {
        width: 150px
    }

    .uk-width-medium\@xl {
        width: 300px
    }

    .uk-width-large\@xl {
        width: 450px
    }

    .uk-width-xlarge\@xl {
        width: 600px
    }

    .uk-width-xxlarge\@xl {
        width: 750px
    }

    .uk-width-auto\@xl {
        width: auto
    }

    .uk-width-expand\@xl {
        width: 1px;
        -ms-flex: 1;
        -webkit-flex: 1;
        flex: 1;
        min-width: 0;
        flex-basis: 1px
    }
}

.uk-text-lead {
    font-size: 20px;
    line-height: 1.4;
    color: #333;
    font-weight: 300
}

.uk-text-meta {
    font-size: 14px;
    line-height: 1.2;
    color: #98a6ad;
    font-weight: 300
}

.uk-text-meta a {
    color: #98a6ad
}

.uk-text-meta a:hover {
    color: #333;
    text-decoration: none
}

.uk-text-small {
    font-size: 14px;
    line-height: 1.5
}

.uk-text-large {
    font-size: 20px;
    line-height: 1.4
}

.uk-text-bold {
    font-weight: bolder
}

.uk-text-uppercase {
    text-transform: uppercase !important
}

.uk-text-capitalize {
    text-transform: capitalize !important
}

.uk-text-lowercase {
    text-transform: lowercase !important
}

.uk-text-muted {
    color: #98a6ad !important
}

.uk-text-primary {
    color: <?php echo $templatevars['light']; ?> !important
}

.uk-text-secondary {
    color: <?php echo $templatevars['dark']; ?> !important
}

.uk-text-success {
    color: <?php echo $templatevars['color']; ?> !important
}

.uk-text-warning {
    color: <?php echo $templatevars['dark']; ?> !important
}

.uk-text-danger {
    color: #e78b8b !important
}

.uk-text-background {
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
    color: <?php echo $templatevars['color']; ?> !important
}

@supports (-webkit-background-clip:text) {
    .uk-text-background {
        background-color: <?php echo $templatevars['color']; ?>;
    }
}

.uk-text-left {
    text-align: left !important
}

.uk-text-right {
    text-align: right !important
}

.uk-text-center {
    text-align: center !important
}

.uk-text-justify {
    text-align: justify !important
}

@media (min-width: 640px) {
    .uk-text-left\@s {
        text-align: left !important
    }

    .uk-text-right\@s {
        text-align: right !important
    }

    .uk-text-center\@s {
        text-align: center !important
    }
}

@media (min-width: 960px) {
    .uk-text-left\@m {
        text-align: left !important
    }

    .uk-text-right\@m {
        text-align: right !important
    }

    .uk-text-center\@m {
        text-align: center !important
    }
}

@media (min-width: 1200px) {
    .uk-text-left\@l {
        text-align: left !important
    }

    .uk-text-right\@l {
        text-align: right !important
    }

    .uk-text-center\@l {
        text-align: center !important
    }
}

@media (min-width: 1600px) {
    .uk-text-left\@xl {
        text-align: left !important
    }

    .uk-text-right\@xl {
        text-align: right !important
    }

    .uk-text-center\@xl {
        text-align: center !important
    }
}

.uk-text-top {
    vertical-align: top !important
}

.uk-text-middle {
    vertical-align: middle !important
}

.uk-text-bottom {
    vertical-align: bottom !important
}

.uk-text-baseline {
    vertical-align: baseline !important
}

.uk-text-nowrap {
    white-space: nowrap
}

.uk-text-truncate {
    max-width: 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap
}

th.uk-text-truncate, td.uk-text-truncate {
    max-width: 0
}

.uk-text-break {
    overflow-wrap: break-word;
    word-wrap: break-word;
    -webkit-hyphens: auto;
    -ms-hyphens: auto;
    -moz-hyphens: auto;
    hyphens: auto
}

th.uk-text-break, td.uk-text-break {
    word-break: break-all
}

[class*='uk-column-'] {
    -webkit-column-gap: 25px;
    -moz-column-gap: 25px;
    column-gap: 25px
}

@media (min-width: 1200px) {
    [class*='uk-column-'] {
        -webkit-column-gap: 40px;
        -moz-column-gap: 40px;
        column-gap: 40px
    }
}

[class*='uk-column-'] img {
    transform: translate3d(0, 0, 0)
}

.uk-column-divider {
    -webkit-column-rule: 1px solid #eee;
    -moz-column-rule: 1px solid #eee;
    column-rule: 1px solid #eee;
    -webkit-column-gap: 50px;
    -moz-column-gap: 50px;
    column-gap: 50px
}

@media (min-width: 1200px) {
    .uk-column-divider {
        -webkit-column-gap: 80px;
        -moz-column-gap: 80px;
        column-gap: 80px
    }
}

.uk-column-1-2 {
    -webkit-column-count: 2;
    -moz-column-count: 2;
    column-count: 2
}

.uk-column-1-3 {
    -webkit-column-count: 3;
    -moz-column-count: 3;
    column-count: 3
}

.uk-column-1-4 {
    -webkit-column-count: 4;
    -moz-column-count: 4;
    column-count: 4
}

.uk-column-1-5 {
    -webkit-column-count: 5;
    -moz-column-count: 5;
    column-count: 5
}

.uk-column-1-6 {
    -webkit-column-count: 6;
    -moz-column-count: 6;
    column-count: 6
}

@media (min-width: 640px) {
    .uk-column-1-2\@s {
        -webkit-column-count: 2;
        -moz-column-count: 2;
        column-count: 2
    }

    .uk-column-1-3\@s {
        -webkit-column-count: 3;
        -moz-column-count: 3;
        column-count: 3
    }

    .uk-column-1-4\@s {
        -webkit-column-count: 4;
        -moz-column-count: 4;
        column-count: 4
    }

    .uk-column-1-5\@s {
        -webkit-column-count: 5;
        -moz-column-count: 5;
        column-count: 5
    }

    .uk-column-1-6\@s {
        -webkit-column-count: 6;
        -moz-column-count: 6;
        column-count: 6
    }
}

@media (min-width: 960px) {
    .uk-column-1-2\@m {
        -webkit-column-count: 2;
        -moz-column-count: 2;
        column-count: 2
    }

    .uk-column-1-3\@m {
        -webkit-column-count: 3;
        -moz-column-count: 3;
        column-count: 3
    }

    .uk-column-1-4\@m {
        -webkit-column-count: 4;
        -moz-column-count: 4;
        column-count: 4
    }

    .uk-column-1-5\@m {
        -webkit-column-count: 5;
        -moz-column-count: 5;
        column-count: 5
    }

    .uk-column-1-6\@m {
        -webkit-column-count: 6;
        -moz-column-count: 6;
        column-count: 6
    }
}

@media (min-width: 1200px) {
    .uk-column-1-2\@l {
        -webkit-column-count: 2;
        -moz-column-count: 2;
        column-count: 2
    }

    .uk-column-1-3\@l {
        -webkit-column-count: 3;
        -moz-column-count: 3;
        column-count: 3
    }

    .uk-column-1-4\@l {
        -webkit-column-count: 4;
        -moz-column-count: 4;
        column-count: 4
    }

    .uk-column-1-5\@l {
        -webkit-column-count: 5;
        -moz-column-count: 5;
        column-count: 5
    }

    .uk-column-1-6\@l {
        -webkit-column-count: 6;
        -moz-column-count: 6;
        column-count: 6
    }
}

@media (min-width: 1600px) {
    .uk-column-1-2\@xl {
        -webkit-column-count: 2;
        -moz-column-count: 2;
        column-count: 2
    }

    .uk-column-1-3\@xl {
        -webkit-column-count: 3;
        -moz-column-count: 3;
        column-count: 3
    }

    .uk-column-1-4\@xl {
        -webkit-column-count: 4;
        -moz-column-count: 4;
        column-count: 4
    }

    .uk-column-1-5\@xl {
        -webkit-column-count: 5;
        -moz-column-count: 5;
        column-count: 5
    }

    .uk-column-1-6\@xl {
        -webkit-column-count: 6;
        -moz-column-count: 6;
        column-count: 6
    }
}

.uk-column-span {
    -webkit-column-span: all;
    -moz-column-span: all;
    column-span: all
}

.uk-cover {
    max-width: none;
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%)
}

.uk-cover-container {
    overflow: hidden;
    position: relative
}

.uk-background-default {
    background-color: #fff
}

.uk-background-muted {
    background-color: #fafafa
}

.uk-background-primary {
    background-color: #e6e3d6;
}

.uk-background-secondary {
    background-color: <?php echo $templatevars['light']; ?>;
}

.uk-background-cover, .uk-background-contain {
    background-position: 50% 50%;
    background-repeat: no-repeat
}

.uk-background-cover {
    background-size: cover
}

.uk-background-contain {
    background-size: contain
}

.uk-background-top-left {
    background-position: 0 0
}

.uk-background-top-center {
    background-position: 50% 0
}

.uk-background-top-right {
    background-position: 100% 0
}

.uk-background-center-left {
    background-position: 0 50%
}

.uk-background-center-center {
    background-position: 50% 50%
}

.uk-background-center-right {
    background-position: 100% 50%
}

.uk-background-bottom-left {
    background-position: 0 100%
}

.uk-background-bottom-center {
    background-position: 50% 100%
}

.uk-background-bottom-right {
    background-position: 100% 100%
}

.uk-background-norepeat {
    background-repeat: no-repeat
}

.uk-background-fixed {
    background-attachment: fixed
}

@media (pointer: coarse) {
    .uk-background-fixed {
        background-attachment: scroll
    }
}

@media (max-width: 639px) {
    .uk-background-image\@s {
        background-image: none !important
    }
}

@media (max-width: 959px) {
    .uk-background-image\@m {
        background-image: none !important
    }
}

@media (max-width: 1199px) {
    .uk-background-image\@l {
        background-image: none !important
    }
}

@media (max-width: 1599px) {
    .uk-background-image\@xl {
        background-image: none !important
    }
}

.uk-background-blend-multiply {
    background-blend-mode: multiply
}

.uk-background-blend-screen {
    background-blend-mode: screen
}

.uk-background-blend-overlay {
    background-blend-mode: overlay
}

.uk-background-blend-darken {
    background-blend-mode: darken
}

.uk-background-blend-lighten {
    background-blend-mode: lighten
}

.uk-background-blend-color-dodge {
    background-blend-mode: color-dodge
}

.uk-background-blend-color-burn {
    background-blend-mode: color-burn
}

.uk-background-blend-hard-light {
    background-blend-mode: hard-light
}

.uk-background-blend-soft-light {
    background-blend-mode: soft-light
}

.uk-background-blend-difference {
    background-blend-mode: difference
}

.uk-background-blend-exclusion {
    background-blend-mode: exclusion
}

.uk-background-blend-hue {
    background-blend-mode: hue
}

.uk-background-blend-saturation {
    background-blend-mode: saturation
}

.uk-background-blend-color {
    background-blend-mode: color
}

.uk-background-blend-luminosity {
    background-blend-mode: luminosity
}

[class*='uk-align'] {
    display: block;
    margin-bottom: 25px
}

* + [class*='uk-align'] {
    margin-top: 25px
}

.uk-align-center, .aligncenter {
    margin-left: auto;
    margin-right: auto
}

.uk-align-left, .alignleft {
    margin-top: 0;
    margin-right: 25px;
    float: left
}

.uk-align-right, .alignright {
    margin-top: 0;
    margin-left: 25px;
    float: right
}

@media (min-width: 640px) {
    .uk-align-left\@s {
        margin-top: 0;
        margin-right: 25px;
        float: left
    }

    .uk-align-right\@s {
        margin-top: 0;
        margin-left: 25px;
        float: right
    }
}

@media (min-width: 960px) {
    .uk-align-left\@m {
        margin-top: 0;
        margin-right: 25px;
        float: left
    }

    .uk-align-right\@m {
        margin-top: 0;
        margin-left: 25px;
        float: right
    }
}

@media (min-width: 1200px) {
    .uk-align-left\@l {
        margin-top: 0;
        float: left
    }

    .uk-align-right\@l {
        margin-top: 0;
        float: right
    }

    .uk-align-left, .uk-align-left\@s, .uk-align-left\@m, .uk-align-left\@l, .alignleft {
        margin-right: 40px
    }

    .uk-align-right, .uk-align-right\@s, .uk-align-right\@m, .uk-align-right\@l, .alignright {
        margin-left: 40px
    }
}

@media (min-width: 1600px) {
    .uk-align-left\@xl {
        margin-top: 0;
        margin-right: 40px;
        float: left
    }

    .uk-align-right\@xl {
        margin-top: 0;
        margin-left: 40px;
        float: right
    }
}

.uk-panel {
    position: relative;
    box-sizing: border-box
}

.uk-panel::before, .uk-panel::after {
    content: "";
    display: table
}

.uk-panel::after {
    clear: both
}

.uk-panel > :last-child {
    margin-bottom: 0
}

.uk-panel-scrollable {
    height: 170px;
    padding: 10px;
    border: 2px solid #eee;
    overflow: auto;
    -webkit-overflow-scrolling: touch;
    resize: both
}

.uk-clearfix::before {
    content: "";
    display: table-cell
}

.uk-clearfix::after {
    content: "";
    display: table;
    clear: both
}

.uk-float-left {
    float: left
}

.uk-float-right {
    float: right
}

[class*='uk-float-'] {
    max-width: 100%
}

.uk-overflow-hidden {
    overflow: hidden
}

.uk-overflow-auto {
    overflow: auto;
    -webkit-overflow-scrolling: touch
}

.uk-overflow-auto > :last-child {
    margin-bottom: 0
}

.uk-resize {
    resize: both
}

.uk-resize-vertical {
    resize: vertical
}

.uk-display-block {
    display: block !important
}

.uk-display-inline {
    display: inline !important
}

.uk-display-inline-block {
    display: inline-block !important
}

[class*='uk-inline'] {
    display: inline-block;
    position: relative;
    max-width: 100%;
    vertical-align: middle
}

.uk-inline-clip {
    overflow: hidden
}

[class*='uk-height'] {
    box-sizing: border-box
}

.uk-height-1-1 {
    height: 100%
}

.uk-height-viewport {
    min-height: 100vh
}

.uk-height-small {
    height: 150px
}

.uk-height-medium {
    height: 300px
}

.uk-height-large {
    height: 450px
}

.uk-height-max-small {
    max-height: 150px
}

.uk-height-max-medium {
    max-height: 300px
}

.uk-height-max-large {
    max-height: 450px
}

.uk-preserve-width, .uk-preserve-width audio, .uk-preserve-width canvas, .uk-preserve-width img, .uk-preserve-width svg, .uk-preserve-width video {
    max-width: none
}

.uk-responsive-width, .uk-responsive-height {
    box-sizing: border-box
}

.uk-responsive-width {
    max-width: 100% !important;
    height: auto
}

.uk-responsive-height {
    max-height: 100%;
    width: auto;
    max-width: none
}

.uk-border-circle {
    border-radius: 50%
}

.uk-border-rounded {
    border-radius: 5px
}

.uk-inline-clip[class*='uk-border-'] {
    -webkit-transform: translateZ(0)
}

.uk-box-shadow-small {
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08)
}

.uk-box-shadow-medium {
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08)
}

.uk-box-shadow-large {
    box-shadow: 0 14px 25px rgba(0, 0, 0, 0.16)
}

.uk-box-shadow-xlarge {
    box-shadow: 0 28px 50px rgba(0, 0, 0, 0.16)
}

[class*='uk-box-shadow-hover'] {
    -webkit-transition: box-shadow .1s ease-in-out;
    transition: box-shadow .1s ease-in-out
}

.uk-box-shadow-hover-small:hover {
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08)
}

.uk-box-shadow-hover-medium:hover {
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08)
}

.uk-box-shadow-hover-large:hover {
    box-shadow: 0 14px 25px rgba(0, 0, 0, 0.16)
}

.uk-box-shadow-hover-xlarge:hover {
    box-shadow: 0 28px 50px rgba(0, 0, 0, 0.16)
}

@supports (filter:blur(0)) or(-webkit-filter:blur(0)

) {
    .uk-box-shadow-bottom {
        display: inline-block;
        position: relative;
        max-width: 100%;
        vertical-align: middle
    }

    .uk-box-shadow-bottom::before {
        content: '';
        position: absolute;
        bottom: -30px;
        left: 0;
        right: 0;
        height: 30px;
        border-radius: 100%;
        background: #716d87;
        -webkit-filter: blur(20px);
        filter: blur(20px)
    }

    .uk-box-shadow-bottom > * {
        position: relative
    }
}

.uk-dropcap::first-letter, .uk-dropcap > p:first-of-type::first-letter {
    display: block;
    margin-right: 10px;
    float: left;
    font-size: 4.74em;
    line-height: 1;
    color: inherit;
    margin-bottom: -2px
}

.uk-leader {
    overflow: hidden
}

.uk-leader-fill::after {
    display: inline-block;
    margin-left: 15px;
    width: 0;
    content: attr(data-fill);
    white-space: nowrap;
    color: #ddd
}

.uk-leader-fill.uk-leader-hide::after {
    display: none
}

.var-leader-fill:before {
    content: '.'
}

.uk-logo {
    font-size: 32px;
    font-family: Nunito Sans;
    color: #333;
    text-decoration: none
}

.uk-logo:hover, .uk-logo:focus {
    color: #333;
    outline: 0;
    text-decoration: none
}

.uk-logo-inverse {
    display: none
}

.uk-svg, .uk-svg:not(.uk-preserve) [fill*='#']:not(.uk-preserve) {
    fill: currentcolor
}

.uk-svg:not(.uk-preserve) [stroke*='#']:not(.uk-preserve) {
    stroke: currentcolor
}

.uk-svg {
    transform: translate(0, 0)
}

.uk-disabled {
    pointer-events: none
}

.uk-drag, .uk-drag * {
    cursor: move
}

.uk-drag iframe {
    pointer-events: none
}

.uk-dragover {
    box-shadow: 0 0 20px rgba(100, 100, 100, 0.3)
}

.uk-blend-multiply {
    mix-blend-mode: multiply
}

.uk-blend-screen {
    mix-blend-mode: screen
}

.uk-blend-overlay {
    mix-blend-mode: overlay
}

.uk-blend-darken {
    mix-blend-mode: darken
}

.uk-blend-lighten {
    mix-blend-mode: lighten
}

.uk-blend-color-dodge {
    mix-blend-mode: color-dodge
}

.uk-blend-color-burn {
    mix-blend-mode: color-burn
}

.uk-blend-hard-light {
    mix-blend-mode: hard-light
}

.uk-blend-soft-light {
    mix-blend-mode: soft-light
}

.uk-blend-difference {
    mix-blend-mode: difference
}

.uk-blend-exclusion {
    mix-blend-mode: exclusion
}

.uk-blend-hue {
    mix-blend-mode: hue
}

.uk-blend-saturation {
    mix-blend-mode: saturation
}

.uk-blend-color {
    mix-blend-mode: color
}

.uk-blend-luminosity {
    mix-blend-mode: luminosity
}

.uk-transform-center {
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%)
}

.uk-transform-origin-top-left {
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0
}

.uk-transform-origin-top-center {
    -webkit-transform-origin: 50% 0;
    transform-origin: 50% 0
}

.uk-transform-origin-top-right {
    -webkit-transform-origin: 100% 0;
    transform-origin: 100% 0
}

.uk-transform-origin-center-left {
    -webkit-transform-origin: 0 50%;
    transform-origin: 0 50%
}

.uk-transform-origin-center-right {
    -webkit-transform-origin: 100% 50%;
    transform-origin: 100% 50%
}

.uk-transform-origin-bottom-left {
    -webkit-transform-origin: 0 100%;
    transform-origin: 0 100%
}

.uk-transform-origin-bottom-center {
    -webkit-transform-origin: 50% 100%;
    transform-origin: 50% 100%
}

.uk-transform-origin-bottom-right {
    -webkit-transform-origin: 100% 100%;
    transform-origin: 100% 100%
}

.uk-flex {
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex
}

.uk-flex-inline {
    display: -ms-inline-flexbox;
    display: -webkit-inline-flex;
    display: inline-flex
}

.uk-flex::before, .uk-flex::after, .uk-flex-inline::before, .uk-flex-inline::after {
    display: none
}

.uk-flex-left {
    -ms-flex-pack: start;
    -webkit-justify-content: flex-start;
    justify-content: flex-start
}

.uk-flex-center {
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center
}

.uk-flex-right {
    -ms-flex-pack: end;
    -webkit-justify-content: flex-end;
    justify-content: flex-end
}

.uk-flex-between {
    -ms-flex-pack: justify;
    -webkit-justify-content: space-between;
    justify-content: space-between
}

.uk-flex-around {
    -ms-flex-pack: distribute;
    -webkit-justify-content: space-around;
    justify-content: space-around
}

@media (min-width: 640px) {
    .uk-flex-left\@s {
        -ms-flex-pack: start;
        -webkit-justify-content: flex-start;
        justify-content: flex-start
    }

    .uk-flex-center\@s {
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center
    }

    .uk-flex-right\@s {
        -ms-flex-pack: end;
        -webkit-justify-content: flex-end;
        justify-content: flex-end
    }

    .uk-flex-between\@s {
        -ms-flex-pack: justify;
        -webkit-justify-content: space-between;
        justify-content: space-between
    }

    .uk-flex-around\@s {
        -ms-flex-pack: distribute;
        -webkit-justify-content: space-around;
        justify-content: space-around
    }
}

@media (min-width: 960px) {
    .uk-flex-left\@m {
        -ms-flex-pack: start;
        -webkit-justify-content: flex-start;
        justify-content: flex-start
    }

    .uk-flex-center\@m {
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center
    }

    .uk-flex-right\@m {
        -ms-flex-pack: end;
        -webkit-justify-content: flex-end;
        justify-content: flex-end
    }

    .uk-flex-between\@m {
        -ms-flex-pack: justify;
        -webkit-justify-content: space-between;
        justify-content: space-between
    }

    .uk-flex-around\@m {
        -ms-flex-pack: distribute;
        -webkit-justify-content: space-around;
        justify-content: space-around
    }
}

@media (min-width: 1200px) {
    .uk-flex-left\@l {
        -ms-flex-pack: start;
        -webkit-justify-content: flex-start;
        justify-content: flex-start
    }

    .uk-flex-center\@l {
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center
    }

    .uk-flex-right\@l {
        -ms-flex-pack: end;
        -webkit-justify-content: flex-end;
        justify-content: flex-end
    }

    .uk-flex-between\@l {
        -ms-flex-pack: justify;
        -webkit-justify-content: space-between;
        justify-content: space-between
    }

    .uk-flex-around\@l {
        -ms-flex-pack: distribute;
        -webkit-justify-content: space-around;
        justify-content: space-around
    }
}

@media (min-width: 1600px) {
    .uk-flex-left\@xl {
        -ms-flex-pack: start;
        -webkit-justify-content: flex-start;
        justify-content: flex-start
    }

    .uk-flex-center\@xl {
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center
    }

    .uk-flex-right\@xl {
        -ms-flex-pack: end;
        -webkit-justify-content: flex-end;
        justify-content: flex-end
    }

    .uk-flex-between\@xl {
        -ms-flex-pack: justify;
        -webkit-justify-content: space-between;
        justify-content: space-between
    }

    .uk-flex-around\@xl {
        -ms-flex-pack: distribute;
        -webkit-justify-content: space-around;
        justify-content: space-around
    }
}

.uk-flex-stretch {
    -ms-flex-align: stretch;
    -webkit-align-items: stretch;
    align-items: stretch
}

.uk-flex-top {
    -ms-flex-align: start;
    -webkit-align-items: flex-start;
    align-items: flex-start
}

.uk-flex-middle {
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center
}

.uk-flex-bottom {
    -ms-flex-align: end;
    -webkit-align-items: flex-end;
    align-items: flex-end
}

.uk-flex-row {
    -ms-flex-direction: row;
    -webkit-flex-direction: row;
    flex-direction: row
}

.uk-flex-row-reverse {
    -ms-flex-direction: row-reverse;
    -webkit-flex-direction: row-reverse;
    flex-direction: row-reverse
}

.uk-flex-column {
    -ms-flex-direction: column;
    -webkit-flex-direction: column;
    flex-direction: column
}

.uk-flex-column-reverse {
    -ms-flex-direction: column-reverse;
    -webkit-flex-direction: column-reverse;
    flex-direction: column-reverse
}

.uk-flex-nowrap {
    -ms-flex-wrap: nowrap;
    -webkit-flex-wrap: nowrap;
    flex-wrap: nowrap
}

.uk-flex-wrap {
    -ms-flex-wrap: wrap;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap
}

.uk-flex-wrap-reverse {
    -ms-flex-wrap: wrap-reverse;
    -webkit-flex-wrap: wrap-reverse;
    flex-wrap: wrap-reverse
}

.uk-flex-wrap-stretch {
    -ms-flex-line-pack: stretch;
    -webkit-align-content: stretch;
    align-content: stretch
}

.uk-flex-wrap-top {
    -ms-flex-line-pack: start;
    -webkit-align-content: flex-start;
    align-content: flex-start
}

.uk-flex-wrap-middle {
    -ms-flex-line-pack: center;
    -webkit-align-content: center;
    align-content: center
}

.uk-flex-wrap-bottom {
    -ms-flex-line-pack: end;
    -webkit-align-content: flex-end;
    align-content: flex-end
}

.uk-flex-wrap-between {
    -ms-flex-line-pack: justify;
    -webkit-align-content: space-between;
    align-content: space-between
}

.uk-flex-wrap-around {
    -ms-flex-line-pack: distribute;
    -webkit-align-content: space-around;
    align-content: space-around
}

.uk-flex-first {
    -ms-flex-order: -1;
    -webkit-order: -1;
    order: -1
}

.uk-flex-last {
    -ms-flex-order: 99;
    -webkit-order: 99;
    order: 99
}

@media (min-width: 640px) {
    .uk-flex-first\@s {
        -ms-flex-order: -1;
        -webkit-order: -1;
        order: -1
    }

    .uk-flex-last\@s {
        -ms-flex-order: 99;
        -webkit-order: 99;
        order: 99
    }
}

@media (min-width: 960px) {
    .uk-flex-first\@m {
        -ms-flex-order: -1;
        -webkit-order: -1;
        order: -1
    }

    .uk-flex-last\@m {
        -ms-flex-order: 99;
        -webkit-order: 99;
        order: 99
    }
}

@media (min-width: 1200px) {
    .uk-flex-first\@l {
        -ms-flex-order: -1;
        -webkit-order: -1;
        order: -1
    }

    .uk-flex-last\@l {
        -ms-flex-order: 99;
        -webkit-order: 99;
        order: 99
    }
}

@media (min-width: 1600px) {
    .uk-flex-first\@xl {
        -ms-flex-order: -1;
        -webkit-order: -1;
        order: -1
    }

    .uk-flex-last\@xl {
        -ms-flex-order: 99;
        -webkit-order: 99;
        order: 99
    }
}

.uk-flex-none {
    -ms-flex: none;
    -webkit-flex: none;
    flex: none
}

.uk-flex-auto {
    -ms-flex: auto;
    -webkit-flex: auto;
    flex: auto
}

.uk-flex-1 {
    -ms-flex: 1;
    -webkit-flex: 1;
    flex: 1
}

.uk-margin {
    margin-bottom: 30px
}

* + .uk-margin {
    margin-top: 30px !important
}

.uk-margin-top {
    margin-top: 30px !important
}

.uk-margin-bottom {
    margin-bottom: 30px !important
}

.uk-margin-left {
    margin-left: 30px !important
}

.uk-margin-right {
    margin-right: 30px !important
}

.uk-margin-small {
    margin-bottom: 10px
}

* + .uk-margin-small {
    margin-top: 10px !important
}

.uk-margin-small-top {
    margin-top: 10px !important
}

.uk-margin-small-bottom {
    margin-bottom: 10px !important
}

.uk-margin-small-left {
    margin-left: 10px !important
}

.uk-margin-small-right {
    margin-right: 10px !important
}

.uk-margin-medium {
    margin-bottom: 40px
}

* + .uk-margin-medium {
    margin-top: 40px !important
}

.uk-margin-medium-top {
    margin-top: 40px !important
}

.uk-margin-medium-bottom {
    margin-bottom: 40px !important
}

.uk-margin-medium-left {
    margin-left: 40px !important
}

.uk-margin-medium-right {
    margin-right: 40px !important
}

.uk-margin-large {
    margin-bottom: 40px
}

* + .uk-margin-large {
    margin-top: 40px !important
}

.uk-margin-large-top {
    margin-top: 40px !important
}

.uk-margin-large-bottom {
    margin-bottom: 40px !important
}

.uk-margin-large-left {
    margin-left: 40px !important
}

.uk-margin-large-right {
    margin-right: 40px !important
}

@media (min-width: 1200px) {
    .uk-margin-large {
        margin-bottom: 65px
    }

    * + .uk-margin-large {
        margin-top: 65px !important
    }

    .uk-margin-large-top {
        margin-top: 65px !important
    }

    .uk-margin-large-bottom {
        margin-bottom: 65px !important
    }

    .uk-margin-large-left {
        margin-left: 65px !important
    }

    .uk-margin-large-right {
        margin-right: 65px !important
    }
}

.uk-margin-xlarge {
    margin-bottom: 65px
}

* + .uk-margin-xlarge {
    margin-top: 65px !important
}

.uk-margin-xlarge-top {
    margin-top: 65px !important
}

.uk-margin-xlarge-bottom {
    margin-bottom: 65px !important
}

.uk-margin-xlarge-left {
    margin-left: 65px !important
}

.uk-margin-xlarge-right {
    margin-right: 65px !important
}

@media (min-width: 1200px) {
    .uk-margin-xlarge {
        margin-bottom: 130px
    }

    * + .uk-margin-xlarge {
        margin-top: 130px !important
    }

    .uk-margin-xlarge-top {
        margin-top: 130px !important
    }

    .uk-margin-xlarge-bottom {
        margin-bottom: 130px !important
    }

    .uk-margin-xlarge-left {
        margin-left: 130px !important
    }

    .uk-margin-xlarge-right {
        margin-right: 130px !important
    }
}

.uk-margin-remove {
    margin: 0 !important
}

.uk-margin-remove-top {
    margin-top: 0 !important
}

.uk-margin-remove-bottom {
    margin-bottom: 0 !important
}

.uk-margin-remove-left {
    margin-left: 0 !important
}

.uk-margin-remove-right {
    margin-right: 0 !important
}

.uk-margin-remove-vertical {
    margin-top: 0 !important;
    margin-bottom: 0 !important
}

.uk-margin-remove-adjacent + * {
    margin-top: 0 !important
}

.uk-margin-auto {
    margin-left: auto !important;
    margin-right: auto !important
}

.uk-margin-auto-top {
    margin-top: auto !important
}

.uk-margin-auto-bottom {
    margin-bottom: auto !important
}

.uk-margin-auto-left {
    margin-left: auto !important
}

.uk-margin-auto-right {
    margin-right: auto !important
}

.uk-margin-auto-vertical {
    margin-top: auto !important;
    margin-bottom: auto !important
}

.uk-padding {
    padding: 25px
}

@media (min-width: 1200px) {
    .uk-padding {
        padding: 40px
    }
}

.uk-padding-small {
    padding: 15px
}

.uk-padding-large {
    padding: 25px
}

@media (min-width: 1200px) {
    .uk-padding-large {
        padding: 65px
    }
}

.uk-padding-remove {
    padding: 0 !important
}

.uk-padding-remove-top {
    padding-top: 0 !important
}

.uk-padding-remove-bottom {
    padding-bottom: 0 !important
}

.uk-padding-remove-left {
    padding-left: 0 !important
}

.uk-padding-remove-right {
    padding-right: 0 !important
}

.uk-padding-remove-vertical {
    padding-top: 0 !important;
    padding-bottom: 0 !important
}

.uk-padding-remove-horizontal {
    padding-left: 0 !important;
    padding-right: 0 !important
}

[class*='uk-position-top'], [class*='uk-position-bottom'], [class*='uk-position-left'], [class*='uk-position-right'], [class*='uk-position-center'] {
    position: absolute !important
}

.uk-position-top {
    top: 0;
    left: 0;
    right: 0
}

.uk-position-bottom {
    bottom: 0;
    left: 0;
    right: 0
}

.uk-position-left {
    top: 0;
    bottom: 0;
    left: 0
}

.uk-position-right {
    top: 0;
    bottom: 0;
    right: 0
}

.uk-position-top-left {
    top: 0;
    left: 0
}

.uk-position-top-right {
    top: 0;
    right: 0
}

.uk-position-bottom-left {
    bottom: 0;
    left: 0
}

.uk-position-bottom-right {
    bottom: 0;
    right: 0
}

.uk-position-center {
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    display: table;
    width: -moz-max-content;
    max-width: 100%
}

.uk-position-center-left, .uk-position-center-right {
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%)
}

.uk-position-center-left {
    left: 0
}

.uk-position-center-right {
    right: 0
}

.uk-position-top-center, .uk-position-bottom-center {
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    display: table
}

.uk-position-top-center {
    top: 0
}

.uk-position-bottom-center {
    bottom: 0
}

.uk-position-cover {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0
}

.uk-position-relative {
    position: relative !important
}

.uk-position-absolute {
    position: absolute !important
}

.uk-position-fixed {
    position: fixed !important
}

.uk-position-z-index {
    z-index: 1
}

.uk-position-small {
    margin: 15px
}

.uk-position-small.uk-position-center {
    -webkit-transform: translate(calc(-50% - 15px), calc(-50% - 15px));
    transform: translate(calc(-50% - 15px), calc(-50% - 15px))
}

.uk-position-small.uk-position-center-left, .uk-position-small.uk-position-center-right {
    -webkit-transform: translateY(calc(-50% - 15px));
    transform: translateY(calc(-50% - 15px))
}

.uk-position-small.uk-position-top-center, .uk-position-small.uk-position-bottom-center {
    -webkit-transform: translateX(calc(-50% - 15px));
    transform: translateX(calc(-50% - 15px))
}

.uk-position-medium {
    margin: 25px
}

.uk-position-medium.uk-position-center {
    -webkit-transform: translate(calc(-50% - 25px), calc(-50% - 25px));
    transform: translate(calc(-50% - 25px), calc(-50% - 25px))
}

.uk-position-medium.uk-position-center-left, .uk-position-medium.uk-position-center-right {
    -webkit-transform: translateY(calc(-50% - 25px));
    transform: translateY(calc(-50% - 25px))
}

.uk-position-medium.uk-position-top-center, .uk-position-medium.uk-position-bottom-center {
    -webkit-transform: translateX(calc(-50% - 25px));
    transform: translateX(calc(-50% - 25px))
}

.uk-transition-fade, [class*='uk-transition-scale'], [class*='uk-transition-slide'] {
    -webkit-transition: .3s ease-out;
    transition: .3s ease-out;
    -webkit-transition-property: opacity, transform, filter;
    transition-property: opacity, transform, filter
}

.uk-transition-fade {
    opacity: 0
}

.uk-transition-toggle:hover [class*='uk-transition-fade'], .uk-transition-toggle.uk-hover [class*='uk-transition-fade'] {
    opacity: 1
}

[class*='uk-transition-scale'] {
    opacity: 0
}

.uk-transition-scale-up {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
}

.uk-transition-toggle:hover .uk-transition-scale-up, .uk-transition-toggle.uk-hover .uk-transition-scale-up {
    opacity: 1;
    -webkit-transform: scale3d(1.1, 1.1, 1);
    transform: scale3d(1.1, 1.1, 1)
}

.uk-transition-scale-down {
    -webkit-transform: scale3d(1.1, 1.1, 1);
    transform: scale3d(1.1, 1.1, 1)
}

.uk-transition-toggle:hover .uk-transition-scale-down, .uk-transition-toggle.uk-hover .uk-transition-scale-down {
    opacity: 1;
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
}

[class*='uk-transition-slide'] {
    opacity: 0
}

.uk-transition-slide-top {
    -webkit-transform: translateY(-100%);
    transform: translateY(-100%)
}

.uk-transition-slide-bottom {
    -webkit-transform: translateY(100%);
    transform: translateY(100%)
}

.uk-transition-slide-left {
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%)
}

.uk-transition-slide-right {
    -webkit-transform: translateX(100%);
    transform: translateX(100%)
}

.uk-transition-slide-top-small {
    -webkit-transform: translateY(-10px);
    transform: translateY(-10px)
}

.uk-transition-slide-bottom-small {
    -webkit-transform: translateY(10px);
    transform: translateY(10px)
}

.uk-transition-slide-left-small {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px)
}

.uk-transition-slide-right-small {
    -webkit-transform: translateX(10px);
    transform: translateX(10px)
}

.uk-transition-slide-top-medium {
    -webkit-transform: translateY(-50px);
    transform: translateY(-50px)
}

.uk-transition-slide-bottom-medium {
    -webkit-transform: translateY(50px);
    transform: translateY(50px)
}

.uk-transition-slide-left-medium {
    -webkit-transform: translateX(-50px);
    transform: translateX(-50px)
}

.uk-transition-slide-right-medium {
    -webkit-transform: translateX(50px);
    transform: translateX(50px)
}

.uk-transition-toggle:hover [class*='uk-transition-slide'], .uk-transition-toggle.uk-hover [class*='uk-transition-slide'] {
    opacity: 1;
    -webkit-transform: translateX(0) translateY(0);
    transform: translateX(0) translateY(0)
}

.uk-transition-opaque {
    opacity: 1
}

.uk-transition-slow {
    transition-duration: .7s
}

[hidden], .uk-hidden {
    display: none !important
}

@media (min-width: 640px) {
    .uk-hidden\@s {
        display: none !important
    }
}

@media (min-width: 960px) {
    .uk-hidden\@m {
        display: none !important
    }
}

@media (min-width: 1200px) {
    .uk-hidden\@l {
        display: none !important
    }
}

@media (min-width: 1600px) {
    .uk-hidden\@xl {
        display: none !important
    }
}

@media (max-width: 639px) {
    .uk-visible\@s {
        display: none !important
    }
}

@media (max-width: 959px) {
    .uk-visible\@m {
        display: none !important
    }
}

@media (max-width: 1199px) {
    .uk-visible\@l {
        display: none !important
    }
}

@media (max-width: 1599px) {
    .uk-visible\@xl {
        display: none !important
    }
}

.uk-invisible {
    visibility: hidden !important
}

.uk-visible-toggle:not(:hover):not(.uk-hover) .uk-hidden-hover {
    display: none !important
}

.uk-visible-toggle:not(:hover):not(.uk-hover) .uk-invisible-hover {
    visibility: hidden !important
}

@media (pointer: coarse) {
    .uk-hidden-touch {
        display: none !important
    }
}

.uk-hidden-notouch {
    display: none !important
}

@media (pointer: coarse) {
    .uk-hidden-notouch {
        display: block !important
    }
}

.uk-light, .uk-overlay-primary {
    color: rgba(255, 255, 255, 0.7)
}

.uk-light a, .uk-light .uk-link, .uk-overlay-primary a, .uk-overlay-primary .uk-link {
    color: #fff
}

.uk-light a:hover, .uk-light .uk-link:hover, .uk-overlay-primary a:hover, .uk-overlay-primary .uk-link:hover {
    color: #fff
}

.uk-light :not(pre) > code, .uk-light :not(pre) > kbd, .uk-light :not(pre) > samp, .uk-overlay-primary :not(pre) > code, .uk-overlay-primary :not(pre) > kbd, .uk-overlay-primary :not(pre) > samp {
    color: rgba(255, 255, 255, 0.7);
    border-color: transparent
}

.uk-light em, .uk-overlay-primary em {
    color: #fff
}

.uk-light h1, .uk-light .uk-h1, .uk-light h2, .uk-light .uk-h2, .uk-light h3, .uk-light .uk-h3, .uk-light h4, .uk-light .uk-h4, .uk-light h5, .uk-light .uk-h5, .uk-light h6, .uk-light .uk-h6, .uk-overlay-primary h1, .uk-overlay-primary .uk-h1, .uk-overlay-primary h2, .uk-overlay-primary .uk-h2, .uk-overlay-primary h3, .uk-overlay-primary .uk-h3, .uk-overlay-primary h4, .uk-overlay-primary .uk-h4, .uk-overlay-primary h5, .uk-overlay-primary .uk-h5, .uk-overlay-primary h6, .uk-overlay-primary .uk-h6 {
    color: #fff
}

.uk-light hr, .uk-overlay-primary hr {
    border-top-color: rgba(255, 255, 255, 0.2)
}

.uk-light a.uk-link-muted, .uk-light .uk-link-muted a, .uk-overlay-primary a.uk-link-muted, .uk-overlay-primary .uk-link-muted a {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light a.uk-link-muted:hover, .uk-light .uk-link-muted a:hover, .uk-overlay-primary a.uk-link-muted:hover, .uk-overlay-primary .uk-link-muted a:hover {
    color: rgba(255, 255, 255, 0.7)
}

.uk-light a.uk-link-text:hover, .uk-light .uk-link-text a:hover, .uk-overlay-primary a.uk-link-text:hover, .uk-overlay-primary .uk-link-text a:hover {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-heading-primary, .uk-overlay-primary .uk-heading-primary {
    color: #fff
}

.uk-light .uk-heading-hero, .uk-overlay-primary .uk-heading-hero {
    color: #fff
}

.uk-light .uk-heading-divider, .uk-overlay-primary .uk-heading-divider {
    border-bottom-color: rgba(255, 255, 255, 0.2)
}

.uk-light .uk-heading-bullet::before, .uk-overlay-primary .uk-heading-bullet::before {
    border-left-color: rgba(255, 255, 255, 0.2)
}

.uk-light .uk-heading-line > :before, .uk-light .uk-heading-line > :after, .uk-overlay-primary .uk-heading-line > :before, .uk-overlay-primary .uk-heading-line > :after {
    border-bottom-color: rgba(255, 255, 255, 0.2)
}

.uk-light .uk-divider-icon, .uk-overlay-primary .uk-divider-icon {
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2220%22%20height%3D%2220%22%20viewBox%3D%220%200%2020%2020%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Ccircle%20fill%3D%22none%22%20stroke%3D%22rgba%28255,%20255,%20255,%200.2%29%22%20stroke-width%3D%222%22%20cx%3D%2210%22%20cy%3D%2210%22%20r%3D%227%22%3E%3C%2Fcircle%3E%0A%3C%2Fsvg%3E%0A")
}

.uk-light .uk-divider-icon::before, .uk-light .uk-divider-icon::after, .uk-overlay-primary .uk-divider-icon::before, .uk-overlay-primary .uk-divider-icon::after {
    border-bottom-color: rgba(255, 255, 255, 0.2)
}

.uk-light .uk-divider-small::after, .uk-overlay-primary .uk-divider-small::after {
    border-top-color: rgba(255, 255, 255, 0.2)
}

.uk-light .uk-list-divider > li:nth-child(n+2), .uk-overlay-primary .uk-list-divider > li:nth-child(n+2), .uk-light .tm-child-list-divider > ul > li:nth-child(n+2) {
    border-top-color: rgba(255, 255, 255, 0.2)
}

.uk-light .uk-list-striped > li:nth-of-type(odd), .uk-overlay-primary .uk-list-striped > li:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, 0.1)
}

.uk-light .uk-list-bullet > li::before, .uk-overlay-primary .uk-list-bullet > li::before {
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%226%22%20height%3D%226%22%20viewBox%3D%220%200%206%206%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Ccircle%20fill%3D%22rgba%28255,%20255,%20255,%200.7%29%22%20cx%3D%223%22%20cy%3D%223%22%20r%3D%223%22%3E%3C%2Fcircle%3E%0A%3C%2Fsvg%3E")
}

.uk-light .uk-table th, .uk-overlay-primary .uk-table th {
    color: rgba(255, 255, 255, 0.7)
}

.uk-light .uk-table caption, .uk-overlay-primary .uk-table caption {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-table > tr.uk-active, .uk-light .uk-table tbody tr.uk-active, .uk-overlay-primary .uk-table > tr.uk-active, .uk-overlay-primary .uk-table tbody tr.uk-active {
    background: rgba(255, 255, 255, 0.08)
}

.uk-light .uk-table-divider > tr:not(:first-child), .uk-light .uk-table-divider > :not(:first-child) > tr, .uk-light .uk-table-divider > :first-child > tr:not(:first-child), .uk-overlay-primary .uk-table-divider > tr:not(:first-child), .uk-overlay-primary .uk-table-divider > :not(:first-child) > tr, .uk-overlay-primary .uk-table-divider > :first-child > tr:not(:first-child) {
    border-top-color: rgba(255, 255, 255, 0.2)
}

.uk-light .uk-table-striped > tr:nth-of-type(odd), .uk-light .uk-table-striped tbody tr:nth-of-type(odd), .uk-overlay-primary .uk-table-striped > tr:nth-of-type(odd), .uk-overlay-primary .uk-table-striped tbody tr:nth-of-type(odd) {
    background: rgba(255, 255, 255, 0.1)
}

.uk-light .uk-table-hover > tr:hover, .uk-light .uk-table-hover tbody tr:hover, .uk-overlay-primary .uk-table-hover > tr:hover, .uk-overlay-primary .uk-table-hover tbody tr:hover {
    background: rgba(255, 255, 255, 0.08)
}

.uk-light .uk-icon-link, .uk-overlay-primary .uk-icon-link {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-icon-link:hover, .uk-light .uk-icon-link:focus, .uk-overlay-primary .uk-icon-link:hover, .uk-overlay-primary .uk-icon-link:focus {
    color: rgba(255, 255, 255, 0.7)
}

.uk-light .uk-icon-link:active, .uk-light .uk-active > .uk-icon-link, .uk-overlay-primary .uk-icon-link:active, .uk-overlay-primary .uk-active > .uk-icon-link {
    color: rgba(255, 255, 255, 0.7)
}

.uk-light .uk-icon-button, .uk-overlay-primary .uk-icon-button {
    background-color: rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.5);
    background-image: none
}

.uk-light .uk-icon-button:hover, .uk-light .uk-icon-button:focus, .uk-overlay-primary .uk-icon-button:hover, .uk-overlay-primary .uk-icon-button:focus {
    background-color: rgba(242, 242, 242, 0.1);
    color: rgba(255, 255, 255, 0.7)
}

.uk-light .uk-icon-button:active, .uk-overlay-primary .uk-icon-button:active {
    background-color: rgba(230, 230, 230, 0.1);
    color: rgba(255, 255, 255, 0.7)
}

.uk-light .uk-input, .uk-light .uk-select, .uk-light .uk-textarea, .uk-light .woocommerce-page input.input-text, .uk-light .woocommerce input.input-text, .uk-light .woocommerce-page select, .uk-light .woocommerce select, .uk-light .woocommerce-page #review_form #respond input[type='text'], .uk-light .woocommerce #review_form #respond input[type='text'], .uk-light .woocommerce-page #review_form #respond input[type='email'], .uk-light .woocommerce #review_form #respond input[type='email'], .uk-light .woocommerce-page #review_form #respond textarea, .uk-light .woocommerce #review_form #respond textarea, .uk-light .woocommerce-page form .form-row select, .uk-light .woocommerce form .form-row select, .uk-light .woocommerce-page form .form-row textarea, .uk-light .woocommerce form .form-row textarea, .uk-overlay-primary .uk-input, .uk-overlay-primary .uk-select, .uk-overlay-primary .uk-textarea {
    background-color: rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.7);
    background-clip: padding-box;
    border-color: transparent !important
}

.uk-light .uk-input:focus, .uk-light .uk-select:focus, .uk-light .uk-textarea:focus, .uk-light .woocommerce-page input.input-text:focus, .uk-light .woocommerce input.input-text:focus, .uk-light .woocommerce-page select:focus, .uk-light .woocommerce select:focus, .uk-light .woocommerce-page #review_form #respond input[type='text']:focus, .uk-light .woocommerce #review_form #respond input[type='text']:focus, .uk-light .woocommerce-page #review_form #respond input[type='email']:focus, .uk-light .woocommerce #review_form #respond input[type='email']:focus, .uk-light .woocommerce-page #review_form #respond textarea:focus, .uk-light .woocommerce #review_form #respond textarea:focus, .uk-light .woocommerce-page form .form-row select:focus, .uk-light .woocommerce form .form-row select:focus, .uk-light .woocommerce-page form .form-row textarea:focus, .uk-light .woocommerce form .form-row textarea:focus, .uk-overlay-primary .uk-input:focus, .uk-overlay-primary .uk-select:focus, .uk-overlay-primary .uk-textarea:focus {
    background-color: rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.7);
    border-color: transparent !important
}

.uk-light .uk-input:-ms-input-placeholder, .uk-light .woocommerce-page input.input-text:-ms-input-placeholder, .uk-light .woocommerce input.input-text:-ms-input-placeholder, .uk-light .woocommerce-page #review_form #respond input[type='text']:-ms-input-placeholder, .uk-light .woocommerce #review_form #respond input[type='text']:-ms-input-placeholder, .uk-light .woocommerce-page #review_form #respond input[type='email']:-ms-input-placeholder, .uk-light .woocommerce #review_form #respond input[type='email']:-ms-input-placeholder, .uk-overlay-primary .uk-input:-ms-input-placeholder {
    color: rgba(255, 255, 255, 0.5) !important
}

.uk-light .uk-input::-moz-placeholder, .uk-light .woocommerce-page input.input-text::-moz-placeholder, .uk-light .woocommerce input.input-text::-moz-placeholder, .uk-light .woocommerce-page #review_form #respond input[type='text']::-moz-placeholder, .uk-light .woocommerce #review_form #respond input[type='text']::-moz-placeholder, .uk-light .woocommerce-page #review_form #respond input[type='email']::-moz-placeholder, .uk-light .woocommerce #review_form #respond input[type='email']::-moz-placeholder, .uk-overlay-primary .uk-input::-moz-placeholder {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-input::-webkit-input-placeholder, .uk-light .woocommerce-page input.input-text::-webkit-input-placeholder, .uk-light .woocommerce input.input-text::-webkit-input-placeholder, .uk-light .woocommerce-page #review_form #respond input[type='text']::-webkit-input-placeholder, .uk-light .woocommerce #review_form #respond input[type='text']::-webkit-input-placeholder, .uk-light .woocommerce-page #review_form #respond input[type='email']::-webkit-input-placeholder, .uk-light .woocommerce #review_form #respond input[type='email']::-webkit-input-placeholder, .uk-overlay-primary .uk-input::-webkit-input-placeholder {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-textarea:-ms-input-placeholder, .uk-light .woocommerce-page #review_form #respond textarea:-ms-input-placeholder, .uk-light .woocommerce #review_form #respond textarea:-ms-input-placeholder, .uk-light .woocommerce-page form .form-row textarea:-ms-input-placeholder, .uk-light .woocommerce form .form-row textarea:-ms-input-placeholder, .uk-overlay-primary .uk-textarea:-ms-input-placeholder {
    color: rgba(255, 255, 255, 0.5) !important
}

.uk-light .uk-textarea::-moz-placeholder, .uk-light .woocommerce-page #review_form #respond textarea::-moz-placeholder, .uk-light .woocommerce #review_form #respond textarea::-moz-placeholder, .uk-light .woocommerce-page form .form-row textarea::-moz-placeholder, .uk-light .woocommerce form .form-row textarea::-moz-placeholder, .uk-overlay-primary .uk-textarea::-moz-placeholder {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-textarea::-webkit-input-placeholder, .uk-light .woocommerce-page #review_form #respond textarea::-webkit-input-placeholder, .uk-light .woocommerce #review_form #respond textarea::-webkit-input-placeholder, .uk-light .woocommerce-page form .form-row textarea::-webkit-input-placeholder, .uk-light .woocommerce form .form-row textarea::-webkit-input-placeholder, .uk-overlay-primary .uk-textarea::-webkit-input-placeholder {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-select:not([multiple]):not([size]), .uk-light .woocommerce-page select:not([multiple]):not([size]), .uk-light .woocommerce select:not([multiple]):not([size]), .uk-light .woocommerce-page form .form-row select:not([multiple]):not([size]), .uk-light .woocommerce form .form-row select:not([multiple]):not([size]), .uk-overlay-primary .uk-select:not([multiple]):not([size]) {
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2224%22%20height%3D%2216%22%20viewBox%3D%220%200%2024%2016%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Cpolygon%20fill%3D%22rgba%28255,%20255,%20255,%200.7%29%22%20points%3D%2212%201%209%206%2015%206%22%3E%3C%2Fpolygon%3E%0A%20%20%20%20%3Cpolygon%20fill%3D%22rgba%28255,%20255,%20255,%200.7%29%22%20points%3D%2212%2013%209%208%2015%208%22%3E%3C%2Fpolygon%3E%0A%3C%2Fsvg%3E%0A")
}

.uk-light .uk-radio, .uk-light .uk-checkbox, .uk-overlay-primary .uk-radio, .uk-overlay-primary .uk-checkbox {
    background-color: rgba(242, 242, 242, 0.1);
    border-color: transparent
}

.uk-light .uk-radio:focus, .uk-light .uk-checkbox:focus, .uk-overlay-primary .uk-radio:focus, .uk-overlay-primary .uk-checkbox:focus {
    border-color: transparent
}

.uk-light .uk-radio:checked, .uk-light .uk-checkbox:checked, .uk-light .uk-checkbox:indeterminate, .uk-overlay-primary .uk-radio:checked, .uk-overlay-primary .uk-checkbox:checked, .uk-overlay-primary .uk-checkbox:indeterminate {
    background-color: #fff;
    border-color: transparent
}

.uk-light .uk-radio:checked:focus, .uk-light .uk-checkbox:checked:focus, .uk-light .uk-checkbox:indeterminate:focus, .uk-overlay-primary .uk-radio:checked:focus, .uk-overlay-primary .uk-checkbox:checked:focus, .uk-overlay-primary .uk-checkbox:indeterminate:focus {
    background-color: #e6e6e6
}

.uk-light .uk-radio:checked, .uk-overlay-primary .uk-radio:checked {
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Ccircle%20fill%3D%22%23274c5e%22%20cx%3D%228%22%20cy%3D%228%22%20r%3D%222%22%3E%3C%2Fcircle%3E%0A%3C%2Fsvg%3E")
}

.uk-light .uk-checkbox:checked, .uk-overlay-primary .uk-checkbox:checked {
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2214%22%20height%3D%2211%22%20viewBox%3D%220%200%2014%2011%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Cpolygon%20fill%3D%22%23274c5e%22%20points%3D%2212%201%205%207.5%202%205%201%205.5%205%2010%2013%201.5%22%2F%3E%0A%3C%2Fsvg%3E")
}

.uk-light .uk-checkbox:indeterminate, .uk-overlay-primary .uk-checkbox:indeterminate {
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Crect%20fill%3D%22%23274c5e%22%20x%3D%223%22%20y%3D%228%22%20width%3D%2210%22%20height%3D%221%22%3E%3C%2Frect%3E%0A%3C%2Fsvg%3E")
}

.uk-light .uk-form-label, .uk-overlay-primary .uk-form-label {
    color: #fff
}

.uk-light .uk-button-default, .uk-overlay-primary .uk-button-default {
    background-color: transparent;
    color: #fff;
    border-color: #fff;
    background-image: none
}

.uk-light .uk-button-default:hover, .uk-light .uk-button-default:focus, .uk-overlay-primary .uk-button-default:hover, .uk-overlay-primary .uk-button-default:focus {
    background-color: #fff;
    color: #091216;
    border-color: transparent
}

.uk-light .uk-button-default:active, .uk-light .uk-button-default.uk-active, .uk-overlay-primary .uk-button-default:active, .uk-overlay-primary .uk-button-default.uk-active {
    background-color: rgba(255, 255, 255, 0.7);
    color: #000;
    border-color: transparent
}

.uk-light .uk-button-primary, .uk-overlay-primary .uk-button-primary {
    background-color: #fff;
    color: #333;
    border-color: transparent;
    background-image: none
}

.uk-light .uk-button-primary:hover, .uk-light .uk-button-primary:focus, .uk-overlay-primary .uk-button-primary:hover, .uk-overlay-primary .uk-button-primary:focus {
    background-color: transparent;
    color: #fff;
    border-color: #fff
}

.uk-light .uk-button-primary:active, .uk-light .uk-button-primary.uk-active, .uk-overlay-primary .uk-button-primary:active, .uk-overlay-primary .uk-button-primary.uk-active {
    background-color: transparent;
    color: rgba(255, 255, 255, 0.7);
    border-color: rgba(255, 255, 255, 0.7)
}

.uk-light .uk-button-secondary, .uk-overlay-primary .uk-button-secondary {
    background-color: #fff;
    color: #333;
    border-color: transparent;
    background-image: none
}

.uk-light .uk-button-secondary:hover, .uk-light .uk-button-secondary:focus, .uk-overlay-primary .uk-button-secondary:hover, .uk-overlay-primary .uk-button-secondary:focus {
    background-color: transparent;
    color: #fff;
    border-color: #fff
}

.uk-light .uk-button-secondary:active, .uk-light .uk-button-secondary.uk-active, .uk-overlay-primary .uk-button-secondary:active, .uk-overlay-primary .uk-button-secondary.uk-active {
    background-color: transparent;
    color: rgba(255, 255, 255, 0.7);
    border-color: rgba(255, 255, 255, 0.7)
}

.uk-light .uk-button-text, .uk-overlay-primary .uk-button-text {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-button-text::before, .uk-overlay-primary .uk-button-text::before {
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2223%22%20height%3D%2211%22%20viewBox%3D%220%200%2023%2011%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Cpolyline%20fill%3D%22none%22%20stroke%3D%22rgba%28255,%20255,%20255,%200.5%29%22%20points%3D%2217%201%2022%205.5%2017%2010%20%22%3E%3C%2Fpolyline%3E%0A%20%20%20%20%3Cline%20fill%3D%22none%22%20stroke%3D%22rgba%28255,%20255,%20255,%200.5%29%22%20x1%3D%220%22%20y1%3D%225.5%22%20x2%3D%2222.4%22%20y2%3D%225.5%22%3E%3C%2Fline%3E%0A%3C%2Fsvg%3E")
}

.uk-light .uk-button-text:hover, .uk-light .uk-button-text:focus, .uk-overlay-primary .uk-button-text:hover, .uk-overlay-primary .uk-button-text:focus {
    color: rgba(255, 255, 255, 0.7)
}

.uk-light .uk-button-text:hover::before, .uk-light .uk-button-text:focus::before, .uk-overlay-primary .uk-button-text:hover::before, .uk-overlay-primary .uk-button-text:focus::before {
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2223%22%20height%3D%2211%22%20viewBox%3D%220%200%2023%2011%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Cpolyline%20fill%3D%22none%22%20stroke%3D%22rgba%28255,%20255,%20255,%200.7%29%22%20points%3D%2217%201%2022%205.5%2017%2010%20%22%3E%3C%2Fpolyline%3E%0A%20%20%20%20%3Cline%20fill%3D%22none%22%20stroke%3D%22rgba%28255,%20255,%20255,%200.7%29%22%20x1%3D%220%22%20y1%3D%225.5%22%20x2%3D%2222.4%22%20y2%3D%225.5%22%3E%3C%2Fline%3E%0A%3C%2Fsvg%3E")
}

.uk-light .uk-button-text:disabled, .uk-overlay-primary .uk-button-text:disabled {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-grid-divider > :not(.uk-first-column)::before, .uk-overlay-primary .uk-grid-divider > :not(.uk-first-column)::before {
    border-left-color: rgba(255, 255, 255, 0.2)
}

.uk-light .uk-grid-divider.uk-grid-stack > .uk-grid-margin::before, .uk-overlay-primary .uk-grid-divider.uk-grid-stack > .uk-grid-margin::before {
    border-top-color: rgba(255, 255, 255, 0.2)
}

.uk-light .uk-close, .uk-overlay-primary .uk-close {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-close:hover, .uk-light .uk-close:focus, .uk-overlay-primary .uk-close:hover, .uk-overlay-primary .uk-close:focus {
    color: rgba(255, 255, 255, 0.7)
}

.uk-light .uk-totop, .uk-overlay-primary .uk-totop {
    color: rgba(255, 255, 255, 0.5);
    background-color: transparent
}

.uk-light .uk-totop:hover, .uk-light .uk-totop:focus, .uk-overlay-primary .uk-totop:hover, .uk-overlay-primary .uk-totop:focus {
    color: rgba(255, 255, 255, 0.7);
    background-color: transparent
}

.uk-light .uk-totop:active, .uk-overlay-primary .uk-totop:active {
    color: #fff;
    background-color: transparent
}

.uk-light .uk-marker, .uk-overlay-primary .uk-marker {
    background: #fafafa;
    color: #333
}

.uk-light .uk-marker:hover, .uk-light .uk-marker:focus, .uk-overlay-primary .uk-marker:hover, .uk-overlay-primary .uk-marker:focus {
    color: #333
}

.uk-light .uk-badge, .uk-overlay-primary .uk-badge {
    background-color: #fff;
    color: #333
}

.uk-light .uk-badge:hover, .uk-light .uk-badge:focus, .uk-overlay-primary .uk-badge:hover, .uk-overlay-primary .uk-badge:focus {
    color: #333
}

.uk-light .uk-label, .uk-overlay-primary .uk-label {
    background-color: #fff;
    color: #333;
    border-color: transparent
}

.uk-light .uk-article-title, .uk-overlay-primary .uk-article-title {
    color: #fff
}

.uk-light .uk-article-meta, .uk-overlay-primary .uk-article-meta {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-search-input, .uk-light .woocommerce-page .widget_product_search input[type="search"], .uk-light .woocommerce .widget_product_search input[type="search"], .uk-light .woocommerce-page .widget_product_search .search-field, .uk-light .woocommerce .widget_product_search .search-field, .uk-overlay-primary .uk-search-input {
    color: rgba(255, 255, 255, 0.7)
}

.uk-light .uk-search-input:-ms-input-placeholder, .uk-light .woocommerce-page .widget_product_search input[type="search"]:-ms-input-placeholder, .uk-light .woocommerce .widget_product_search input[type="search"]:-ms-input-placeholder, .uk-light .woocommerce-page .widget_product_search .search-field:-ms-input-placeholder, .uk-light .woocommerce .widget_product_search .search-field:-ms-input-placeholder, .uk-overlay-primary .uk-search-input:-ms-input-placeholder {
    color: rgba(255, 255, 255, 0.5) !important
}

.uk-light .uk-search-input::-moz-placeholder, .uk-light .woocommerce-page .widget_product_search input[type="search"]::-moz-placeholder, .uk-light .woocommerce .widget_product_search input[type="search"]::-moz-placeholder, .uk-light .woocommerce-page .widget_product_search .search-field::-moz-placeholder, .uk-light .woocommerce .widget_product_search .search-field::-moz-placeholder, .uk-overlay-primary .uk-search-input::-moz-placeholder {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-search-input::-webkit-input-placeholder, .uk-light .woocommerce-page .widget_product_search input[type="search"]::-webkit-input-placeholder, .uk-light .woocommerce .widget_product_search input[type="search"]::-webkit-input-placeholder, .uk-light .woocommerce-page .widget_product_search .search-field::-webkit-input-placeholder, .uk-light .woocommerce .widget_product_search .search-field::-webkit-input-placeholder, .uk-overlay-primary .uk-search-input::-webkit-input-placeholder {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-search .uk-search-icon, .uk-overlay-primary .uk-search .uk-search-icon {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-search .uk-search-icon:hover, .uk-overlay-primary .uk-search .uk-search-icon:hover {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-search-default .uk-search-input, .uk-light .uk-search-default .woocommerce-page .widget_product_search input[type="search"], .uk-light .uk-search-default .woocommerce .widget_product_search input[type="search"], .uk-light .uk-search-default .woocommerce-page .widget_product_search .search-field, .uk-light .uk-search-default .woocommerce .widget_product_search .search-field, .uk-overlay-primary .uk-search-default .uk-search-input {
    background-color: rgba(255, 255, 255, 0.1);
    border-color: transparent
}

.uk-light .uk-search-default .uk-search-input:focus, .uk-light .uk-search-default .woocommerce-page .widget_product_search input[type="search"]:focus, .uk-light .uk-search-default .woocommerce .widget_product_search input[type="search"]:focus, .uk-light .uk-search-default .woocommerce-page .widget_product_search .search-field:focus, .uk-light .uk-search-default .woocommerce .widget_product_search .search-field:focus, .uk-overlay-primary .uk-search-default .uk-search-input:focus {
    background-color: rgba(255, 255, 255, 0.1);
    border-color: transparent
}

.uk-light .uk-search-navbar .uk-search-input, .uk-light .uk-search-navbar .woocommerce-page .widget_product_search input[type="search"], .uk-light .uk-search-navbar .woocommerce .widget_product_search input[type="search"], .uk-light .uk-search-navbar .woocommerce-page .widget_product_search .search-field, .uk-light .uk-search-navbar .woocommerce .widget_product_search .search-field, .uk-overlay-primary .uk-search-navbar .uk-search-input {
    background-color: transparent
}

.uk-light .uk-search-large .uk-search-input, .uk-light .uk-search-large .woocommerce-page .widget_product_search input[type="search"], .uk-light .uk-search-large .woocommerce .widget_product_search input[type="search"], .uk-light .uk-search-large .woocommerce-page .widget_product_search .search-field, .uk-light .uk-search-large .woocommerce .widget_product_search .search-field, .uk-overlay-primary .uk-search-large .uk-search-input {
    background-color: transparent
}

.uk-light .uk-search-toggle, .uk-overlay-primary .uk-search-toggle {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-search-toggle:hover, .uk-light .uk-search-toggle:focus, .uk-overlay-primary .uk-search-toggle:hover, .uk-overlay-primary .uk-search-toggle:focus {
    color: rgba(255, 255, 255, 0.7)
}

.uk-light .uk-nav-parent-icon > .uk-parent > a::after, .uk-overlay-primary .uk-nav-parent-icon > .uk-parent > a::after {
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2214%22%20height%3D%2214%22%20viewBox%3D%220%200%2014%2014%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Cpolyline%20fill%3D%22none%22%20stroke%3D%22rgba%28255,%20255,%20255,%200.7%29%22%20stroke-width%3D%221.1%22%20points%3D%2210%201%204%207%2010%2013%22%3E%3C%2Fpolyline%3E%0A%3C%2Fsvg%3E")
}

.uk-light .uk-nav-parent-icon > .uk-parent.uk-open > a::after, .uk-overlay-primary .uk-nav-parent-icon > .uk-parent.uk-open > a::after {
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2214%22%20height%3D%2214%22%20viewBox%3D%220%200%2014%2014%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Cpolyline%20fill%3D%22none%22%20stroke%3D%22rgba%28255,%20255,%20255,%200.7%29%22%20stroke-width%3D%221.1%22%20points%3D%221%204%207%2010%2013%204%22%3E%3C%2Fpolyline%3E%0A%3C%2Fsvg%3E")
}

.uk-light .uk-nav-default > li > a, .uk-light .woocommerce-account nav.woocommerce-MyAccount-navigation ul > li > a, .uk-overlay-primary .uk-nav-default > li > a {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-nav-default > li > a:hover, .uk-light .uk-nav-default > li > a:focus, .uk-light .woocommerce-account nav.woocommerce-MyAccount-navigation ul > li > a:hover, .uk-light .woocommerce-account nav.woocommerce-MyAccount-navigation ul > li > a:focus, .uk-overlay-primary .uk-nav-default > li > a:hover, .uk-overlay-primary .uk-nav-default > li > a:focus {
    color: rgba(255, 255, 255, 0.7);
    background-color: transparent
}

.uk-light .uk-nav-default > li.uk-active > a, .uk-light .woocommerce-account nav.woocommerce-MyAccount-navigation ul > li.uk-active > a, .uk-overlay-primary .uk-nav-default > li.uk-active > a {
    color: #fff;
    background-color: transparent
}

.uk-light .uk-nav-default .uk-nav-header, .uk-light .woocommerce-account nav.woocommerce-MyAccount-navigation ul .uk-nav-header, .uk-overlay-primary .uk-nav-default .uk-nav-header {
    color: #fff
}

.uk-light .uk-nav-default .uk-nav-divider, .uk-light .woocommerce-account nav.woocommerce-MyAccount-navigation ul .uk-nav-divider, .uk-overlay-primary .uk-nav-default .uk-nav-divider {
    border-top-color: rgba(255, 255, 255, 0.2)
}

.uk-light .uk-nav-default .uk-nav-sub a, .uk-light .woocommerce-account nav.woocommerce-MyAccount-navigation ul .uk-nav-sub a, .uk-overlay-primary .uk-nav-default .uk-nav-sub a {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-nav-default .uk-nav-sub a:hover, .uk-light .uk-nav-default .uk-nav-sub a:focus, .uk-light .woocommerce-account nav.woocommerce-MyAccount-navigation ul .uk-nav-sub a:hover, .uk-light .woocommerce-account nav.woocommerce-MyAccount-navigation ul .uk-nav-sub a:focus, .uk-overlay-primary .uk-nav-default .uk-nav-sub a:hover, .uk-overlay-primary .uk-nav-default .uk-nav-sub a:focus {
    color: rgba(255, 255, 255, 0.7)
}

.uk-light .uk-nav-primary > li > a, .uk-overlay-primary .uk-nav-primary > li > a {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-nav-primary > li > a:hover, .uk-light .uk-nav-primary > li > a:focus, .uk-overlay-primary .uk-nav-primary > li > a:hover, .uk-overlay-primary .uk-nav-primary > li > a:focus {
    color: rgba(255, 255, 255, 0.7)
}

.uk-light .uk-nav-primary > li.uk-active > a, .uk-overlay-primary .uk-nav-primary > li.uk-active > a {
    color: #fff
}

.uk-light .uk-nav-primary .uk-nav-header, .uk-overlay-primary .uk-nav-primary .uk-nav-header {
    color: #fff
}

.uk-light .uk-nav-primary .uk-nav-divider, .uk-overlay-primary .uk-nav-primary .uk-nav-divider {
    border-top-color: rgba(255, 255, 255, 0.2)
}

.uk-light .uk-nav-primary .uk-nav-sub a, .uk-overlay-primary .uk-nav-primary .uk-nav-sub a {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-nav-primary .uk-nav-sub a:hover, .uk-light .uk-nav-primary .uk-nav-sub a:focus, .uk-overlay-primary .uk-nav-primary .uk-nav-sub a:hover, .uk-overlay-primary .uk-nav-primary .uk-nav-sub a:focus {
    color: rgba(255, 255, 255, 0.7)
}

.uk-light .uk-navbar-nav > li > a, .uk-overlay-primary .uk-navbar-nav > li > a {
    color: rgba(255, 255, 255, 0.7)
}

.uk-light .uk-navbar-nav > li > a::before, .uk-overlay-primary .uk-navbar-nav > li > a::before {
    background-color: transparent
}

.uk-light .uk-navbar-nav > li:hover > a, .uk-light .uk-navbar-nav > li > a:focus, .uk-light .uk-navbar-nav > li > a.uk-open, .uk-overlay-primary .uk-navbar-nav > li:hover > a, .uk-overlay-primary .uk-navbar-nav > li > a:focus, .uk-overlay-primary .uk-navbar-nav > li > a.uk-open {
    color: #fff
}

.uk-light .uk-navbar-nav > li:hover > a::before, .uk-light .uk-navbar-nav > li > a:focus::before, .uk-light .uk-navbar-nav > li > a.uk-open::before, .uk-overlay-primary .uk-navbar-nav > li:hover > a::before, .uk-overlay-primary .uk-navbar-nav > li > a:focus::before, .uk-overlay-primary .uk-navbar-nav > li > a.uk-open::before {
    background-color: #fff
}

.uk-light .uk-navbar-nav > li > a:active, .uk-overlay-primary .uk-navbar-nav > li > a:active {
    color: #fff
}

.uk-light .uk-navbar-nav > li > a:active::before, .uk-overlay-primary .uk-navbar-nav > li > a:active::before {
    background-color: #fff
}

.uk-light .uk-navbar-nav > li.uk-active > a, .uk-overlay-primary .uk-navbar-nav > li.uk-active > a {
    color: #fff
}

.uk-light .uk-navbar-item, .uk-overlay-primary .uk-navbar-item {
    color: rgba(255, 255, 255, 0.7)
}

.uk-light .uk-navbar-toggle, .uk-overlay-primary .uk-navbar-toggle {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-navbar-toggle:hover, .uk-light .uk-navbar-toggle:focus, .uk-light .uk-navbar-toggle.uk-open, .uk-overlay-primary .uk-navbar-toggle:hover, .uk-overlay-primary .uk-navbar-toggle:focus, .uk-overlay-primary .uk-navbar-toggle.uk-open {
    color: rgba(255, 255, 255, 0.7)
}

.uk-light .uk-subnav > * > :first-child, .uk-overlay-primary .uk-subnav > * > :first-child {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-subnav > * > a:hover, .uk-light .uk-subnav > * > a:focus, .uk-overlay-primary .uk-subnav > * > a:hover, .uk-overlay-primary .uk-subnav > * > a:focus {
    color: rgba(255, 255, 255, 0.7)
}

.uk-light .uk-subnav > .uk-active > a, .uk-overlay-primary .uk-subnav > .uk-active > a {
    color: #fff
}

.uk-light .uk-subnav-divider > :nth-child(n+2):not(.uk-first-column)::before, .uk-overlay-primary .uk-subnav-divider > :nth-child(n+2):not(.uk-first-column)::before {
    border-left-color: rgba(255, 255, 255, 0.2)
}

.uk-light .uk-subnav-pill > * > :first-child, .uk-overlay-primary .uk-subnav-pill > * > :first-child {
    background-color: transparent;
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-subnav-pill > * > a:hover, .uk-light .uk-subnav-pill > * > a:focus, .uk-overlay-primary .uk-subnav-pill > * > a:hover, .uk-overlay-primary .uk-subnav-pill > * > a:focus {
    background-color: rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.7)
}

.uk-light .uk-subnav-pill > * > a:active, .uk-overlay-primary .uk-subnav-pill > * > a:active {
    background-color: rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.7)
}

.uk-light .uk-subnav-pill > .uk-active > a, .uk-overlay-primary .uk-subnav-pill > .uk-active > a {
    background-color: #fff;
    color: #333
}

.uk-light .uk-subnav > .uk-disabled > a, .uk-overlay-primary .uk-subnav > .uk-disabled > a {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-breadcrumb > * > *, .uk-overlay-primary .uk-breadcrumb > * > * {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-breadcrumb > * > :hover, .uk-light .uk-breadcrumb > * > :focus, .uk-overlay-primary .uk-breadcrumb > * > :hover, .uk-overlay-primary .uk-breadcrumb > * > :focus {
    color: <?php echo $templatevars['color']; ?>;
}

.uk-light .uk-breadcrumb > .uk-disabled > *, .uk-overlay-primary .uk-breadcrumb > .uk-disabled > * {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-breadcrumb > :last-child > *, .uk-overlay-primary .uk-breadcrumb > :last-child > * {
    color: #fff
}

.uk-light .uk-breadcrumb > :nth-child(n+2):not(.uk-first-column)::before, .uk-overlay-primary .uk-breadcrumb > :nth-child(n+2):not(.uk-first-column)::before {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-pagination > * > *, .uk-overlay-primary .uk-pagination > * > * {
    color: rgba(255, 255, 255, 0.5);
    background-color: transparent;
    border-bottom-color: transparent
}

.uk-light .uk-pagination > * > :hover, .uk-light .uk-pagination > * > :focus, .uk-overlay-primary .uk-pagination > * > :hover, .uk-overlay-primary .uk-pagination > * > :focus {
    color: rgba(255, 255, 255, 0.7);
    background-color: transparent;
    border-bottom-color: #fff
}

.uk-light .uk-pagination > .uk-active > *, .uk-overlay-primary .uk-pagination > .uk-active > * {
    color: #fff;
    background-color: transparent;
    border-bottom-color: transparent
}

.uk-light .uk-pagination > .uk-disabled > *, .uk-overlay-primary .uk-pagination > .uk-disabled > * {
    color: rgba(255, 255, 255, 0.5);
    background-color: transparent;
    border-bottom-color: transparent
}

.uk-light .uk-tab > * > a, .uk-light .woocommerce-page div.product .woocommerce-tabs ul.tabs li a, .uk-light .woocommerce div.product .woocommerce-tabs ul.tabs li a, .uk-overlay-primary .uk-tab > * > a {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-tab > * > a:hover, .uk-light .uk-tab > * > a:focus, .uk-light .woocommerce-page div.product .woocommerce-tabs ul.tabs li a:hover, .uk-light .woocommerce-page div.product .woocommerce-tabs ul.tabs li a:focus, .uk-light .woocommerce div.product .woocommerce-tabs ul.tabs li a:hover, .uk-light .woocommerce div.product .woocommerce-tabs ul.tabs li a:focus, .uk-overlay-primary .uk-tab > * > a:hover, .uk-overlay-primary .uk-tab > * > a:focus {
    color: rgba(255, 255, 255, 0.7);
    border-color: rgba(255, 255, 255, 0.1)
}

.uk-light .uk-tab > .uk-active > a, .uk-light .woocommerce-page div.product .woocommerce-tabs ul.tabs li.active a, .uk-light .woocommerce div.product .woocommerce-tabs ul.tabs li.active a, .uk-overlay-primary .uk-tab > .uk-active > a {
    color: #fff;
    border-color: #fff
}

.uk-light .uk-tab > .uk-disabled > a, .uk-overlay-primary .uk-tab > .uk-disabled > a {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-slidenav, .uk-overlay-primary .uk-slidenav {
    color: rgba(255, 255, 255, 0.3);
    background-color: transparent
}

.uk-light .uk-slidenav:hover, .uk-light .uk-slidenav:focus, .uk-overlay-primary .uk-slidenav:hover, .uk-overlay-primary .uk-slidenav:focus {
    color: rgba(255, 255, 255, 0.5);
    background-color: transparent
}

.uk-light .uk-slidenav:active, .uk-overlay-primary .uk-slidenav:active {
    color: rgba(255, 255, 255, 0.6);
    background-color: transparent
}

.uk-light .uk-dotnav > * > *, .uk-overlay-primary .uk-dotnav > * > * {
    background-color: rgba(255, 255, 255, 0.1)
}

.uk-light .uk-dotnav > * > :hover, .uk-light .uk-dotnav > * > :focus, .uk-overlay-primary .uk-dotnav > * > :hover, .uk-overlay-primary .uk-dotnav > * > :focus {
    background-color: rgba(255, 255, 255, 0.4)
}

.uk-light .uk-dotnav > * > :active, .uk-overlay-primary .uk-dotnav > * > :active {
    background-color: rgba(255, 255, 255, 0.6)
}

.uk-light .uk-dotnav > .uk-active > *, .uk-overlay-primary .uk-dotnav > .uk-active > * {
    background-color: rgba(255, 255, 255, 0.6)
}

.uk-light .uk-accordion > :nth-child(n+2), .uk-overlay-primary .uk-accordion > :nth-child(n+2) {
    border-top-color: rgba(255, 255, 255, 0.2)
}

.uk-light .uk-accordion-title, .uk-overlay-primary .uk-accordion-title {
    background-color: transparent
}

.uk-light .uk-iconnav > * > *, .uk-overlay-primary .uk-iconnav > * > * {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-iconnav > * > :hover, .uk-light .uk-iconnav > * > :focus, .uk-overlay-primary .uk-iconnav > * > :hover, .uk-overlay-primary .uk-iconnav > * > :focus {
    color: rgba(255, 255, 255, 0.7)
}

.uk-light .uk-iconnav > .uk-active > *, .uk-overlay-primary .uk-iconnav > .uk-active > * {
    color: rgba(255, 255, 255, 0.7)
}

.uk-light .uk-countdown-number, .uk-light .uk-countdown-separator, .uk-overlay-primary .uk-countdown-number, .uk-overlay-primary .uk-countdown-separator {
    color: #fff
}

.uk-light .uk-countdown-label, .uk-overlay-primary .uk-countdown-label {
    color: #fff
}

.uk-light .uk-text-lead, .uk-overlay-primary .uk-text-lead {
    color: rgba(255, 255, 255, 0.7)
}

.uk-light .uk-text-meta, .uk-overlay-primary .uk-text-meta {
    color: rgba(255, 255, 255, 0.5)
}

.uk-light .uk-text-muted, .uk-overlay-primary .uk-text-muted {
    color: rgba(255, 255, 255, 0.5) !important
}

.uk-light .uk-text-primary, .uk-overlay-primary .uk-text-primary {
    color: rgba(255, 255, 255, 0.7) !important
}

.uk-light .uk-column-divider, .uk-overlay-primary .uk-column-divider {
    -webkit-column-rule-color: rgba(255, 255, 255, 0.2);
    -moz-column-rule-color: rgba(255, 255, 255, 0.2);
    column-rule-color: rgba(255, 255, 255, 0.2)
}

.uk-light .uk-dropcap::first-letter, .uk-light .uk-dropcap p:first-of-type::first-letter, .uk-overlay-primary .uk-dropcap::first-letter, .uk-overlay-primary .uk-dropcap p:first-of-type::first-letter {
    color: rgba(255, 255, 255, 0.7)
}

.uk-light .uk-leader-fill, .uk-overlay-primary .uk-leader-fill {
    color: rgba(255, 255, 255, 0.7)
}

.uk-light .uk-logo, .uk-overlay-primary .uk-logo {
    color: rgba(255, 255, 255, 0.7)
}

.uk-light .uk-logo:hover, .uk-light .uk-logo:focus, .uk-overlay-primary .uk-logo:hover, .uk-overlay-primary .uk-logo:focus {
    color: rgba(255, 255, 255, 0.7)
}

.uk-light .uk-logo > :not(.uk-logo-inverse):not(:only-of-type), .uk-overlay-primary .uk-logo > :not(.uk-logo-inverse):not(:only-of-type) {
    display: none
}

.uk-light .uk-logo-inverse, .uk-overlay-primary .uk-logo-inverse {
    display: inline
}

.uk-light .uk-card-badge, .uk-overlay-primary .uk-card-badge {
    color: rgba(255, 255, 255, 0.7)
}

.uk-light .uk-accordion-title::after, .uk-overlay-primary .uk-accordion-title::after {
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2213%22%20height%3D%2213%22%20viewBox%3D%220%200%2013%2013%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Crect%20fill%3D%22rgba%28255,%20255,%20255,%200.7%29%22%20width%3D%2213%22%20height%3D%221%22%20x%3D%220%22%20y%3D%226%22%3E%3C%2Frect%3E%0A%20%20%20%20%3Crect%20fill%3D%22rgba%28255,%20255,%20255,%200.7%29%22%20width%3D%221%22%20height%3D%2213%22%20x%3D%226%22%20y%3D%220%22%3E%3C%2Frect%3E%0A%3C%2Fsvg%3E")
}

.uk-light .uk-open > .uk-accordion-title::after, .uk-overlay-primary .uk-open > .uk-accordion-title::after {
    background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2213%22%20height%3D%2213%22%20viewBox%3D%220%200%2013%2013%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Crect%20fill%3D%22rgba%28255,%20255,%20255,%200.7%29%22%20width%3D%2213%22%20height%3D%221%22%20x%3D%220%22%20y%3D%226%22%3E%3C%2Frect%3E%0A%3C%2Fsvg%3E")
}

@media print {
    *, *::before, *::after {
        background: transparent !important;
        color: black !important;
        box-shadow: none !important;
        text-shadow: none !important
    }

    a, a:visited {
        text-decoration: underline
    }

    pre, blockquote {
        border: 1px solid #999;
        page-break-inside: avoid
    }

    thead {
        display: table-header-group
    }

    tr, img {
        page-break-inside: avoid
    }

    img {
        max-width: 100% !important
    }

    @page {
        margin: .5cm
    }

    p, h2, h3 {
        orphans: 3;
        widows: 3
    }

    h2, h3 {
        page-break-after: avoid
    }
}

html {
    overflow-y: scroll
}

body {
    overflow-x: hidden
}

@media (min-width: 1200px) {
    .tm-page {
        background: #f2f2f2 50% 50% / cover no-repeat fixed
    }

    .tm-page > * {
        position: relative;
        max-width: 1200px;
        background: #fff
    }

    .tm-page-padding {
        padding-top: 65px;
        padding-bottom: 65px
    }
}

.tm-toolbar {
    padding-top: 10px;
    padding-bottom: 10px;
    background: #fafafa;
    font-size: 14px
}

.tm-headerbar-top {
    padding-top: 40px;
    padding-bottom: 40px;
    background: #fff
}

.tm-headerbar-bottom {
    padding-top: 40px;
    padding-bottom: 40px;
    background: #fff
}

.tm-headerbar-stacked {
    margin-top: 40px
}

.tm-header-transparent {
    position: absolute;
    z-index: 980;
    width: 100%
}

.tm-header-transparent .tm-headerbar-top, .tm-header-transparent .tm-headerbar-bottom {
    background: transparent
}

.tm-header-transparent .tm-headerbar-top {
    border-bottom-color: transparent
}

@media (min-width: 640px) {
    .tm-sidebar {
        min-width: 200px
    }
}

.uk-dropdown-navbar.uk-dropdown-stack {
    min-width: 0 !important;
    max-width: none !important
}

.tm-leading-article .uk-article:last-child {
    padding-bottom: 30px
}

.tm-error-icon {
    font-size: 250px
}

.tm-error-headline {
    font-size: 100px
}

.tm-offline {
    width: 300px
}

.hljs {
    padding: 0;
    background: transparent;
    overflow: visible
}