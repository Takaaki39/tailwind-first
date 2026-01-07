<!-- src/resources/views/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset("css/output.css") }}" />
    </head>
    <body class="bg-gray-100 min-h-screen">
        <header class="bg-gray-800">
            <nav class="bg-gray-800 p-4">
                <div
                    class="container mx-auto flex justify-between items-center"
                >
                    <!-- ロゴ -->
                    <div class="text-white font-bold text-xl">MySite</div>

                    <!-- PC用メニュー (md以上で表示) -->
                    <div class="hidden md:flex space-x-4" id="menu">
                        <a href="#" class="text-gray-300 hover:text-white">
                            Home
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white">
                            About
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white">
                            Contact
                        </a>
                    </div>

                    <!-- ハンバーガーアイコン (md未満で表示) -->
                    <div class="md:hidden">
                        <button class="text-white" id="hamburger">
                            <svg
                                class="w-6 h-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 6h16M4 12h16m-7 6h7"
                                ></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <div class="flex items-center justify-center">
                <h1 class="text-3xl font-bold underline text-blue-500">
                    Hello World
                </h1>
                <!-- 画面中心にボタンを配置 -->
                <button
                    class="bg-blue-500 hover:bg-blue-600 active:bg-blue-700 text-white px-4 py-2 rounded-md font-semibold shadow-md"
                >
                    Click me
                </button>
                <button
                    class="bg-red-500 text-black px-4 py-2 rounded-md font-semibold shadow-md"
                >
                    Click me
                </button>
            </div>
        </main>
        <script>
            // ハンバーガーアイコンを押したらメニューを表示/非表示を切り替え
            const hamburger = document.getElementById('hamburger');
            const menu = document.getElementById('menu');

            if (hamburger && menu) {
                hamburger.addEventListener('click', () => {
                    menu.classList.toggle('hidden');
                });
            }
        </script>
    </body>
</html>
