<!-- src/resources/views/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/output.css') }}">
</head>
<body>
    <h1 class="text-3xl font-bold underline text-blue-500">Hello World</h1>
    <!-- 画面中心にボタンを配置 -->
    <button class="bg-blue-500 hover:bg-blue-600 active:bg-blue-700 text-white px-4 py-2 rounded-md font-semibold shadow-md">
  Click me
</button>
    <button class="bg-red-500 text-black px-4 py-2 rounded-md font-semibold shadow-md">
        Click me
    </button>
</body>
</html>