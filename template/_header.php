<head>
    <title></title>
    <style type="text/css">
        /*f8f8f8*/
        /*c3248b*/
        /*222838*/
        /*203a6d*/
        /*1389b2*/
        /*9fccd5*/
        html             { background: #f8f8f8; color: #222838; }
        body             { margin: 0 auto; padding: 0; }
        a                { color: #222838; text-decoration: none; }

        a:hover          { color: #1389b2; }
        ul               { margin: 0; padding: 0; }
        ul li            { display: inline-block; padding-left: 1em; font-family: monospace; }

        .active a        { font-weight: 700; color: #203a6d;  }
        .active a:before { content: '> '; font-size: .25em;  }
        .active a:after  { content: ' <'; font-size: .25em;  }
        .active a:hover  { color: #1389b2; }
        .color-red       { color: #d2002a; }
        .clearfix        { clear: both; }
        .section-nav     { padding-top: 1em; }
        .row             { margin-bottom: 1rem; }
        .row:after       { content: ""; display: table; clear: both; }
        .col             { float: left; overflow-x: auto; }
        .col-12          { width: 100%; }
        .col-6           { width: 50%; }
        .col-4           { width: 33%; }
        .col-body        {
            border-radius: 3px;
            margin: 1em;
            height: 600px;
            overflow-y: auto;
            box-shadow: 0px 6px 13px -7px #000;
            /*background: #0c0c0c;*/
            background: #203a6d;
            /*border: 1px solid #1389b2;*/

            border-bottom: 2px solid #222838;
            -webkit-transition: background-color 100ms linear;
                -ms-transition: background-color 100ms linear;
                    transition: background-color 100ms linear;
        }
        .col:nth-child(2n) .col-body { background: #203a6d; }
        .content                 { padding: .5rem 1.5rem; font-family: "Gill Sans", sans-serif; font-size: .85rem; }
        .content h3              { color: #9fccd5; text-shadow: 1px 1px #222838; }
        .content h4              { color: #f8f8f8; font-weight: 400; }
        .content span.note       { line-height: 1.5rem; display: block; padding: 1.75em .75rem 1.75em 1.25rem; margin: 1rem 0; font-size: .9rem; background: #222838; color: #b6bec5; border-radius: 2px; box-shadow: 0px 8px 12px -9px #000; border-left: 20px solid #111; }
        .result-section          { margin-top: 2rem; }

        /**
         * Code Highlights
         */
        pre.code             { display: block; padding: .75rem .75rem .75rem .5rem; margin: 1rem 0; font-size: .95rem; line-height: 1.75em; background: #222838; color: #b6bec5; border-radius: 2px; box-shadow: 0px 8px 12px -9px #000; counter-reset: line; }
        pre.code code        { counter-increment: line; }
        pre.code code:before { content: counter(line) ':'; padding: .5em 1em .5em .5em; -webkit-user-select: none; font-size: .6rem; color: #425363; }

        .code-comment   { color: #425363; font-style: italic; }
        .code-class     { color: #ff4747; font-weight: 700; }
        .code-fnc       { color: #c5a624; font-weight: 700; }
        .code-fnc-prths { color: #f5c60a; font-weight: 700; }
        .code-string    { color: #f8f8f8; }
        .code-int       { color: #77bbff; }

        pre.code-result             { line-height: 1.4em; padding: 1em 1em 2.2em; margin: 0 0 1rem; overflow: auto; font-size: 1em; background: #111; color: #f8f8f8; border-radius: 2px; box-shadow: 0 8px 14px -5px #000; }
        pre.code-result::first-line { font-weight: 700; color: #ff4747; }

        /**
         * Theme: dark;
         * <html class="theme-dark">...</html>
         */
        html.theme-dark                { background: #131313; color: #0bd255; }
        .theme-dark pre                { background: none; color: #e92762; }
        .theme-dark a                  { color: #ccc; }

        .theme-dark .content span.note { background: #000; color: #aaa; }

        .theme-dark .col:nth-child(2n) .col-body:hover { background: #111; }
    </style>
</head>
