<!DOCTYPE html>
  <head>
    <title>home.blade</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>

  <body>
      <div id="app">
         <v-app>
                  <app-home></app-home>

         </v-app>
      </div>


<script src="{{asset('js/app.js')}}"></script>
  </body>
</html>