<!DOCTYPE html>
<html>
    <head>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <style>
            * {
                box-sizing: border-box;
                margin: 0;
            }
            body {
                margin: 0;
            }
            html {
                background-color: rgba(0,0,0,0.2);
            }
        </style>
    </head>
    <body>
        <div id="app">
            <!-- このようにheader-itemの階層を下げたらいけた -->
            <div id="globalHeader">
                <header-item />
            </div>
            <router-view />
        </div>
    </body>
</html>

