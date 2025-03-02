<!doctype html>
<html>

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  </head>

  <body>
    <x-site-layout-header/>

    <div class="max-w-7xl m-auto">
        {{$slot}}
    </div>

    <x-site-layout-footer/>
  </body>
</html>