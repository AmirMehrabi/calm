<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> لازم نیست زیاده‌ازحد کار کنی - {{ $page->title }}</title>

    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="author" content="Jason Fried,David Heinemeier Hansson,امیرمسعود مهرابیان">
    <meta name="description" content="{{ $page->description }}">
    <link rel="stylesheet"  type="text/css" href="{{ mix('css/main.css', 'assets/build') }}">

</head>

<body class="bg-white font-sans leading-normal tracking-normal">

    <nav id="header" class="fixed w-full z-10 top-0">

        <div id="progress" class="h-1 z-20 top-0" style="background:linear-gradient(to left, #553c9a var(--scroll), transparent 0);"></div>
        
        <div class="w-full md:max-w-4xl mx-auto flex flex-wrap items-center justify-between mt-0 py-3">
            
            <div class="pl-4">
                <a class="text-gray-900 text-base no-underline hover:no-underline font-extrabold text-xl" href="/"> 
					لازم نیست زیاده‌ازحد کار کنی
				</a>
            </div>

            <div class="block lg:hidden pr-4">
                <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-teal-500 appearance-none focus:outline-none">
					<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
				</button>
            </div>

            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-gray-100 md:bg-transparent z-20" id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-gray-900 hover:text-black hover:underline font-bold " href="/about">درباره کتاب</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Container-->

    <div>
        @yield('body')
    </div>

    <!--/container-->

    <footer class="bg-white border-t border-gray-400 shadow">
        <div class="container max-w-4xl mx-auto flex py-8">

            <div class="w-full mx-auto flex flex-wrap">
                <div class="flex w-full md:w-2/3 ">
                    <div class="px-8">
                        <h3 class="font-bold text-gray-900">درباره</h3>
                        <p class="py-4 text-gray-600 text-sm">
                            ترجمهٔ این کتاب کاریست از امیرمسعود مهرابیان که به صورت آزاد و رایگان روی <a href="https://github.com/AmirMehrabi/calm" class="text-purple-700 hover:text-purple-900 hover:underline">گیت‌هاب</a> منتشر می‌شود
                        </p>
                        نسخه ۰.۳.۰ - <a href="/changelog" class="text-purple-700 hover:text-purple-900 hover:underline">تاریخچه تغییرات</a>
                    </div>
                </div>
            </div>



        </div>
    </footer>

    <script>
        /* Progress bar */
        //Source: https://alligator.io/js/progress-bar-javascript-css-variables/
        var h = document.documentElement,
            b = document.body,
            st = 'scrollTop',
            sh = 'scrollHeight',
            progress = document.querySelector('#progress'),
            scroll;
        var scrollpos = window.scrollY;
        var header = document.getElementById("header");
        var navcontent = document.getElementById("nav-content");

        document.addEventListener('scroll', function() {

            /*Refresh scroll % width*/
            scroll = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;
            progress.style.setProperty('--scroll', scroll + '%');

            /*Apply classes for slide in bar*/
            scrollpos = window.scrollY;

            if (scrollpos > 10) {
                header.classList.add("bg-white");
                header.classList.add("shadow");
                navcontent.classList.remove("bg-gray-100");
                navcontent.classList.add("bg-white");
            } else {
                header.classList.remove("bg-white");
                header.classList.remove("shadow");
                navcontent.classList.remove("bg-white");
                navcontent.classList.add("bg-gray-100");

            }

        });


        //Javascript to toggle the menu
        document.getElementById('nav-toggle').onclick = function() {
            document.getElementById("nav-content").classList.toggle("hidden");
        }
    </script>

</body>

</html>