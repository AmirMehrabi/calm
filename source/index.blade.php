---
title: صفحه نخست
---
@extends('_layouts.master')

@section('body')

<div class="container w-full mx-auto pt-20">
    <div class="flex w-full sm:w-4/5 md:w-3/4 mx-auto">

        <div class=" text-gray-700 w-full sm:w-2/3 md:w-3/4 px-4 py-2 m-2 text-right">
            <h1 class="text-xl sm:text-3xl lg:text-4xl font-black">لازم نیست زیاده‌ازحد کار کنی</h1>
            <h3 class="text-lg lg:text-2xl font-bold my-3">کتابی از دیوید هاینمیر هانسن و جیسون فرید</h3>
            <p class="lg:text-lg">

                هرج و مرج نباید به وضعیتی عادی در محل کار تبدیل شود. اضطراب داشتن شرط لازم برای پیشرفت کردن نیست. برای موفق شدن لازم نیست تمام روز میان این جلسه و آن جلسه در رفت و آمد باشید. این‌ها همه انحرافات کار هستند و عوارض جانبی به کارگیری الگوهای به درد نخور و
                ناکارآمد. به نظر می‌رسد خیلی از شرکت‌های مدرن در انجام یک کار عالی عمل می‌کنند: اتلاف منابع. اتلاف زمان، پول، توجه و انرژی.

                <br> اگر به طور مداوم سر کار در حال جان کندن هستید، دو کلمه برای شما داریم: گور باباش. و دو کلمهٔ دیگر: دیگه کافیه.

            </p>

            <!--Divider-->
            <hr class="border-b-2 border-gray-400 my-8 mx-4">


            <div class="promote">
                <h4 class="text-gray-900 text-lg mb-3 font-bold font-sm md:font-md lg:font-normal"><a href="https://www.amazon.com/Doesnt-Have-Be-Crazy-Work/dp/0062874780/" target="_blank" class="hover:text-black hover:underline">پرفروش‌ترین کتاب آمازون</a> در سه دسته بندی</h4>

                <h4 class="text-gray-900 text-lg mb-3 font-bold font-sm md:font-md lg:font-normal">اکونومیست: <a href="https://www.economist.com/business/2018/10/04/how-to-run-a-calm-workplace" target="_blank" class="hover:text-black hover:underline">«این کتاب بامزه و نمادینه. با قلم خوبی نوشته شده و با اختلاف بهترین کتابیه که امسال در مورد مدیریت به چاپ رسیده.»</a></h4>
                <h4 class="text-gray-900 text-lg mb-3 font-bold font-sm md:font-md lg:font-normal">800ceoread: <a href="https://inthebooks.800ceoread.com/editors-choice/articles/it-doesn-t-have-to-be-crazy-at-work" target="_blank" class="hover:text-black hover:underline">«ژرف و کاربردی»</a></h4>

            </div>

        </div> 
        <div class="hidden sm:flex w-1/3 md:w-1/4 text-gray-700 text-center px-4 py-2 m-2">
            <img src="assets/images/calm.gif" class="w-full mx-auto object-contain h-auto" alt="Poster Image">
        </div>
    </div>
</div>
<div class="container w-full md:max-w-3xl mx-auto pt-20">
    <div class="w-full md:px-6 text-lg md:text-xl lg:text-2xl font-extrabold text-gray-800 leading-normal text-center my-10 px-2">لیست کامل فصل‌های موجود در کتاب</div>

    <div class="flex flex-col">
        <div class="flex flex-row">
            <div class="w-1/2 text-gray-900 px-4 py-2 m-2 text-lg lg:text-xl font-bold text-left">نخست</div>
            <div class="w-1/2 text-gray-900 px-4 py-2 m-2 text-right border-r">
                <div class="flex flex-col">
                    <a href="chapters/01" class="mb-2 hover:underline text-sm lg:text-normal">دارم به فنا می‌رم</a>
                    <a href="chapters/02" class="mb-2 hover:underline text-sm lg:text-normal">مختصری دربارهٔ ما</a>
                    <a href="chapters/03" class="mb-2 hover:underline text-sm lg:text-normal">شرکت شما یک محصول است</a>
                </div>

            </div>
        </div>


        <div class="flex flex-row">
            <div class="w-1/2 text-gray-900 px-4 py-2 m-2 text-lg lg:text-xl font-bold text-left">جاه‌طلبی خود را مهار کن</div>
            <div class="w-1/2 text-gray-900 px-4 py-2 m-2 text-right border-r">
                <div class="flex flex-col">
                    <a href="chapters/04" class="mb-2 hover:underline text-sm lg:text-normal">دندان طمع را بکن</a>
                    <a href="chapters/05" class="mb-2 hover:underline text-sm lg:text-normal">اقیانوس خوشحالی</a>
                    <a href="chapters/06" class="mb-2 hover:underline text-sm lg:text-normal">هدف ما: بی‌هدفی</a>
                    <a href="chapters/07" class="mb-2 hover:underline text-sm lg:text-normal">لازم نیست دنیا را تغییر بدهی</a>
                    <a href="chapters/08" class="mb-2 hover:underline text-sm lg:text-normal">در لحظه تصمیم بگیرید</a>
                    <a href="chapters/09" class="mb-2 hover:underline text-sm lg:text-normal">راحت باش</a>

                </div>

            </div>
        </div>



        <div class="flex flex-row">
            <div class="w-1/2 text-gray-900 px-4 py-2 m-2 text-lg lg:text-xl font-bold text-left ">از وقت خود دفاع کن</div>
            <div class="w-1/2 text-gray-900 px-4 py-2 m-2 text-right border-r">
                <div class="flex flex-col">
                    <a href="chapters/10" class="mb-2 hover:underline text-sm lg:text-normal">۸ ساعت کافی، ۴۰ ساعت زیاد است</a>
                    <a href="chapters/11" class="mb-2 hover:underline text-sm lg:text-normal">حفظ‌گرایی</a>
                    <a href="chapters/12" class="mb-2 hover:underline text-sm lg:text-normal">زمان باکیفیت</a>
                    <a href="chapters/13" class="mb-2 hover:underline text-sm lg:text-normal">اثربخشی > بهره‌وری</a>
                    <a href="chapters/14" class="mb-2 hover:underline text-sm lg:text-normal">توهم بیشتر از دیگران کار کردن</a>

                </div>

            </div>
        </div>


        <div class="flex flex-row">
            <div class="w-1/2 text-gray-900 px-4 py-2 m-2 text-lg lg:text-xl font-bold text-left ">بخش چهارم</div>
            <div class="w-1/2 text-gray-900 px-4 py-2 m-2 text-right border-r">
                <div class="flex flex-col">
                    <p class="line-through">منتشر نشده</p>
                </div>

            </div>
        </div>


        <div class="flex flex-row">
            <div class="w-1/2 text-gray-900 px-4 py-2 m-2 text-lg lg:text-xl font-bold text-left ">بخش پنجم</div>
            <div class="w-1/2 text-gray-900 px-4 py-2 m-2 text-right border-r">
                <div class="flex flex-col">
                    <p class="line-through">منتشر نشده</p>
                </div>

            </div>
        </div>


        <div class="flex flex-row">
            <div class="w-1/2 text-gray-900 px-4 py-2 m-2 text-lg lg:text-xl font-bold text-left ">بخش ششم</div>
            <div class="w-1/2 text-gray-900 px-4 py-2 m-2 text-right border-r">
                <div class="flex flex-col">
                    <p class="line-through">منتشر نشده</p>
                </div>

            </div>
        </div>


        <div class="flex flex-row">
            <div class="w-1/2 text-gray-900 px-4 py-2 m-2 text-lg lg:text-xl font-bold text-left ">بخش هفتم</div>
            <div class="w-1/2 text-gray-900 px-4 py-2 m-2 text-right border-r">
                <div class="flex flex-col">
                    <p class="line-through">منتشر نشده</p>
                </div>

            </div>
        </div>


    </div>



</div>

@endsection
