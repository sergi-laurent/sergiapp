<!doctype html>
<html>

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  </head>

  <body>
    <div class="bg-purple-700 text-purple-50 mb-6">
        <div class="max-w-7xl m-auto flex justify-between items-center h-10">
            <div class="font-bold text-lg">TucTuc</div>
            <ul class="flex gap-x-4">
                <li><a href="/articles">Articles</a></li>
                <li><a href="">Authors</a></li>
                <li><a href="">Keywords</a></li>
                <li><a href="">Contact Us</a></li>
            </ul>
            <div>Login Comes Here</div>
        </div>
    </div>

    <div class="max-w-7xl m-auto">
        {{$slot}}
    </div>

    <div class="bg-purple-700 text-purple-50 mt-16">
        <div class="max-w-7xl m-auto">
            <div>Footer</div>
        </div>
    </div>

  </body>
</html>