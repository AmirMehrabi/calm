<?php

return [
    'build' => [ 'destination' => '../calm', ],
    'production' => true,
    'baseUrl' => 'http://localhost/calm',
    'title' => 'لازه نیست زیاده‌ازحد کار کنی',
    'description' => 'چقدر پیش آمده بشنوید یک نفر بگوید «سر کار دارم به فنا می‌رم»؟ حتی شاید خودتان هم این جمله را گفته باشید. برای خیلی‌ها، «دارم سر کار به فنا می‌رم» تبدیل به یک روتین شده. ولی دلیل این‌همه اضطراب چیست؟',
    'collections' => [
        'chapters' => [
            'path' => 'chapters/{filename}'
        ],
    ],
];
