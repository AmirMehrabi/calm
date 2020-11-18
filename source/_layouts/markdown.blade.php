<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> لازم نیست زیاده‌ازحد کار کنی - {{ $page->title }}</title>
    <meta name="author" content="Jason Fried,David Heinemeier Hansson,امیرمسعود مهرابیان">
    <meta name="description" content="چقدر پیش آمده بشنوید یک نفر بگوید «سر کار دارم به فنا می‌رم»؟ حتی شاید خودتان هم این جمله را گفته باشید. برای خیلی‌ها، «دارم سر کار به فنا می‌رم» تبدیل به یک روتین شده. ولی دلیل این‌همه اضطراب چیست؟">
    <!-- <meta name="keywords" content="keywords,here"> -->
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-markdown-css/4.0.0/github-markdown.min.css">

</head>

<body class="bg-white font-sans leading-normal tracking-normal">
    <nav id="header" class="fixed w-full z-10 top-0">

        <div id="progress" class="h-1 z-20 top-0" style="background:linear-gradient(to left, #553c9a var(--scroll), transparent 0);"></div>


    </nav>
    <!--Container-->
    <div class="container w-full mx-auto pt-20">
        <div class="flex flex-col sm:flex-row ">
            <div class="w-full sm:w-1/3 md:w-1/4 text-gray-700 text-center px-4 py-2 m-2">
                <div class="mb-5 text-center sm:text-left">
                    <a href="/" class="p-2 bg-purple-800 rounded-full text-white text-lg font-bold">لازم نیست زیاده‌ازحد کار کنی</a>
                </div>

                <div class="text-gray-700 text-center sm:text-left font-light">فصل {{ $page->number }}:</div>

                <div class="text-purple-800 text-2xl sm:text-3xl md:text-4xl font-bold text-center sm:text-left">{{ $page->title }}</div>

                <div class="text-purple-700 text-center sm:text-left hover:underline">
                    <!-- <a href="13.html">بعدی: توهم بیشتر از دیگران کار کردن</a> -->
                </div>

            </div>
            <div class="markdown-body w-full sm:w-2/3 md:w-3/4 text-black font-light text-lg text-right px-4 py-2 m-2 leading-relaxed">
                <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-3">{{ $page->title }}</h1>
                @yield('content')

            </div>
        </div>
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


        });


        //Javascript to toggle the menu
        // document.getElementById('nav-toggle').onclick = function() {
        //     document.getElementById("nav-content").classList.toggle("hidden");
        // }
    </script>

</body>

</html>