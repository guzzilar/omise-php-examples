<head>
    <title></title>
    <style type="text/css">
        /*f6f6f6*/ /*f8f8f8*/ /*c3248b*/ /*222838*/ /*203a6d*/ /*1389b2*/ /*9fccd5*/
        html             { background: #f6f6f6; color: #222838; }
        body             { margin: 0 auto; padding: 0; }
        a                { color: #222838; text-decoration: none; }
        a:hover          { color: #1389b2; }
        ul               { margin: 0; padding: 0; }
        ul li            { display: inline-block; padding-left: 1em; font-family: monospace; }
        h3               { color: #222838; }
        h4               { color: #203a6d; font-weight: 400; }
        code.highlight   { background: #9fccd5; padding: 2px 6px; color: #203a6d; }

        .clearfix        { clear: both; }
        .active a        { font-weight: 700; color: #203a6d;  }
        .active a:before { content: '> '; font-size: .25em;  }
        .active a:after  { content: ' <'; font-size: .25em;  }
        .active a:hover  { color: #1389b2; }
        .color-red       { color: #d2002a; }
        .section-nav     { padding-top: 1em; }
        .section-subnav li                   { padding-left: .5em; }
        .section-subnav li:after             { padding-left: .75em; content: '/'; color: #b6bec5; }
        .section-subnav li:first-child       { padding-left: 1em; }
        .section-subnav li:first-child:after { content: ''; padding-left: 0; }
        .section-subnav li:last-child:after  { content: ''; padding-left: 0; }

        .page            { margin-top: 1.5em; margin-bottom: 3em; }

        /*.row             { margin-bottom: 1rem; }*/
        .row:after       { content: ""; display: table; clear: both; }
        .col             { float: left; overflow-x: auto; }
        .col-12          { width: 100%; }
        .col-8           { width: 66%; }
        .col-6           { width: 50%; }
        .col-4           { width: 33%; }
        .col-body        {
            overflow-y: auto;
            background: #f8f8f8;
            -webkit-transition: background-color 100ms linear;
                -ms-transition: background-color 100ms linear;
                    transition: background-color 100ms linear;
        }

        .content-section .col-body { box-shadow: 0 -8px 10px -11px #203a6d; border-radius: 15px 15px 0 0; margin: 1em 2em; padding-bottom: 2em; }
        .result-section .col-body  { max-height: 600px; background: #222838; border-radius: 0; margin-top: 1em; padding-bottom: 2em; box-shadow: inset 10px -12px 12px -14px #000; border-left: 2px solid #f4f4f4;  border-bottom: 2px solid #f4f4f4; border-radius: 15px 0 0 15px; }
        .result-section h4         { color: #f8f8f8; }

        .content                   { padding: .5rem 1.5rem; font-family: "Gill Sans", sans-serif; font-size: .85rem; }
        .content p                 { margin-top: 2em; font-size: 1rem; line-height: 1.65rem; }
        .content p a               { color: #1389b2; }
        .content p a:hover         { color: #9fccd5; }
        .note                      { line-height: 1.35rem; display: block; padding: 1.35em .75rem 1.35em 1.25rem; margin: 2em 0; font-size: .9rem; background: #F4F4F4; color: #5e657b; border-radius: 2px; box-shadow: 6px 8px 4px -9px #203a6d; border-left: 20px solid #232839; }
        

        /**
         * Code Highlights
         */
        pre.code             { overflow: auto; display: block; padding: .75rem .75rem .75rem .5rem; margin: 1rem 0; font-size: .95rem; line-height: 1.75em; background: #222838; color: #b6bec5; border-radius: 2px; box-shadow: 0px 8px 12px -9px #000; counter-reset: line; }
        pre.code code        { counter-increment: line; }
        pre.code code:before { content: counter(line) ':'; padding: .5em 1em .5em .5em; -webkit-user-select: none; font-size: .6rem; color: #425363; }

        .code-comment               { color: #425363; font-style: italic; }
        .code-class                 { color: #ff4747; font-weight: 700; }
        .code-fnc                   { color: #c5a624; font-weight: 700; }
        .code-fnc-prths             { color: #f5c60a; font-weight: 700; }
        .code-bool                  { color: #b977d2; }
        .code-string                { color: #f8f8f8; }
        .code-int                   { color: #77bbff; }
        .code-phpkey                { color: #717a84; }

        pre.code-result             { line-height: 1.4em; overflow: auto; font-size: 1em; color: #f8f8f8; }
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
