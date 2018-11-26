<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        html            { background: #131313; color: #0bd255; }
        body            { margin: 0 auto; padding: 0; }
        pre             { line-height: 1.4em; padding: 1em 1em 2.2em; margin: 0 0 1rem; font-size: .95em; color: #e92762; }
        pre::first-line { font-weight: 700; color: #fff; }
        a               { color: #ccc; text-decoration: none; }
        a:hover         { color: #eee; }
        ul              { margin: 0; padding: 0; }
        ul li           { display: inline-block; padding-left: 1em; font-family: monospace; }

        .color-red   { color: #d2002a; }
        .clearfix    { clear: both; }
        .section-nav { margin-top: 1em; }
        .row         { margin-bottom: 1rem; }
        .row:after   { content: ""; display: table; clear: both; }
        .col         { float: left; overflow-x: auto; }
        .col-12      { width: 100%; }
        .col-6       { width: 50%; }
        .col-4       { width: 33%; }
        .col-body    {
            border-radius: 3px;
            margin: 1em;
            height: 600px;
            overflow-y: auto;
            box-shadow: 0px 6px 13px -7px #000;
            background: #0c0c0c;
            border-bottom: 2px solid #630824;
            -webkit-transition: background-color 100ms linear;
                -ms-transition: background-color 100ms linear;
                    transition: background-color 100ms linear;
        }
        .col:nth-child(2n) .col-body {
            background: #0d0d0d;
            border-bottom: 2px solid #e92762;
        }
        .col-body:hover,
        .col:nth-child(2n) .col-body:hover {
            background: #171717;
        }
        .content           { padding: .5rem 1.5rem; font-family: "Gill Sans", sans-serif; font-size: .85rem; }
        .content span.note { color: #aaa; line-height: 1.25rem; background: #000; display: block; padding: .75rem; font-size: .9rem; }
    </style>
</head>
