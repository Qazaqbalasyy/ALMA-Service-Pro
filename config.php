<?php
// config.php - Configuration and data
$company_name = "ALMA Service Pro";
$phone = "+7 (778) 349-02-06";
$address = "Алматы, ул. Розыбакиева 289/1";
$location_details = "1 этаж, вход со стороны пр. Аль-Фараби";
$work_hours = [
    "Пн-Пт" => "09:00–20:00",
    "Сб" => "10:00–18:00"
];

$langs = ['ru', 'kk', 'en'];
$lang = isset($_GET['lang']) && in_array($_GET['lang'], $langs) ? $_GET['lang'] : 'ru';

// Dynamic SEO Keywords (DKI)
$brands = [
    'Samsung',
    'LG',
    'Bosch',
    'Indesit',
    'Ariston',
    'Beko',
    'Midea',
    'Haier',
    'Whirlpool',
    'Candy',
    'Electrolux',
    'Zanussi',
    'Gorenje',
    'Atlant',
    'AEG',
    'Ardo',
    'Hansa',
    'Siemens',
    'Vestel',
    'Vestfrost',
    'Sharp',
    'Toshiba',
    'Panasonic',
    'Miele',
    'Neff',
    'Philco',
    'Sanyo',
    'DEXP',
    'Xiaomi',
    'Huawei',
    'Apple',
    'HP',
    'Dell',
    'Asus',
    'Acer',
    'Lenovo',
    'TCL',
    'Sony',
    'IKEA'
];
$devices = [
    'ru' => ['washer' => 'стиральных машин', 'dish' => 'посудомоечных машин', 'dry' => 'сушильных машин', 'fridge' => 'холодильников', 'freeze' => 'морозильников'],
    'kk' => ['washer' => 'кір жуғыш машина', 'dish' => 'ыдыс жуғыш машина', 'dry' => 'кептіргіш машина', 'fridge' => 'тоңазытқыш', 'freeze' => 'мұздатқыш'],
    'en' => ['washer' => 'washing machines', 'dish' => 'dishwashers', 'dry' => 'dryers', 'fridge' => 'refrigerators', 'freeze' => 'freezers']
];

// Context-aware names for WhatsApp messages (Natural Russian)
$whatsapp_devices = [
    'ru' => ['washer' => 'стиральной машины', 'dish' => 'посудомоечной машины', 'dry' => 'сушильной машины', 'fridge' => 'холодильника', 'freeze' => 'морозильника'],
    'kk' => ['washer' => 'кір жуғыш машина', 'dish' => 'ыдыс жуғыш машина', 'dry' => 'кептіргіш машина', 'fridge' => 'тоңазытқыш', 'freeze' => 'мұздатқыш'],
    'en' => ['washer' => 'washing machine', 'dish' => 'dishwasher', 'dry' => 'dryer', 'fridge' => 'refrigerator', 'freeze' => 'freezer']
];

$district_slugs = [
    'alatau' => ['ru' => 'Алатауском районе', 'kk' => 'Алатау ауданында', 'en' => 'Alatau district'],
    'almaly' => ['ru' => 'Алмалинском районе', 'kk' => 'Алмалы ауданында', 'en' => 'Almaly district'],
    'auezov' => ['ru' => 'Ауэзовском районе', 'kk' => 'Әуезов ауданында', 'en' => 'Auezov district'],
    'bostandyk' => ['ru' => 'Бостандыкском районе', 'kk' => 'Бостандық ауданында', 'en' => 'Bostandyk district'],
    'zhetysu' => ['ru' => 'Жетысуском районе', 'kk' => 'Жетісу ауданында', 'en' => 'Zhetysu district'],
    'medeu' => ['ru' => 'Медеуском районе', 'kk' => 'Медеу ауданында', 'en' => 'Medeu district'],
    'nauryzbay' => ['ru' => 'Наурызбайском районе', 'kk' => 'Наурызбай ауданында', 'en' => 'Nauryzbay district'],
    'turksib' => ['ru' => 'Турксибском районе', 'kk' => 'Түрксіб ауданында', 'en' => 'Turksib district']
];

$current_brand = isset($_GET['brand']) && in_array(ucfirst($_GET['brand']), $brands) ? ucfirst($_GET['brand']) : '';
$device_slug = isset($_GET['device']) && array_key_exists($_GET['device'], $devices[$lang]) ? $_GET['device'] : 'washer';
$district_slug = isset($_GET['district']) && array_key_exists($_GET['district'], $district_slugs) ? $_GET['district'] : '';

$current_device = $devices[$lang][$device_slug];
$wa_device = $whatsapp_devices[$lang][$device_slug];
$current_district = $district_slug ? $district_slugs[$district_slug][$lang] : '';

// SEO Overrides
$seo_title = $company_name . " | Срочный ремонт стиральных машин в Алматы - Выезд 30 минут!";
$seo_desc = "Ближайший ремонт стиральных машин в Алматы недорого. Мастер Даурен приедет на дом за 30-60 минут. Оригинальные запчасти. Гарантия до 1 года. Ремонтируем технику всех марок.";

if ($current_brand || $device_slug != 'washer' || $current_district) {
    if ($lang == 'ru') {
        $seo_title = "Ремонт " . $current_device . ($current_brand ? " " . $current_brand : "") . ($current_district ? " в " . $current_district : " в Алматы") . " - " . $company_name;
        $seo_desc = "Срочный ремонт " . $current_device . ($current_brand ? " " . $current_brand : "") . ($current_district ? " в " . $current_district : " в Алматы") . " на дому. Выезд мастера за 30 минут. Гарантия 1 год.";
    } elseif ($lang == 'kk') {
        $seo_title = ($current_district ? $current_district . " " : "Алматыда ") . ($current_brand ? $current_brand . ' ' : '') . $current_device . " жөндеу - " . $company_name;
        $seo_desc = ($current_district ? $current_district . " " : "Алматыда ") . ($current_brand ? $current_brand . ' ' : '') . $current_device . " жедел жөндеу. Шебер Даурен 30 минутта келеді.";
    } else {
        $seo_title = ($current_brand ? $current_brand . " " : "") . $current_device . " Repair" . ($current_district ? " in " . $current_district : " in Almaty") . " - " . $company_name;
        $seo_desc = "Professional " . ($current_brand ? $current_brand . " " : "") . $current_device . " repair" . ($current_district ? " in " . $current_district : " in Almaty") . ". Fast home visit in 30 minutes.";
    }
}

$t = [
    'ru' => [
        'nav_about' => 'О нас',
        'nav_services' => 'Услуги',
        'nav_reviews' => 'Отзывы',
        'nav_shop' => 'Магазин',
        'nav_contacts' => 'Контакты',
        'hero_badge' => 'Скидка -20% при заказе до конца дня!',
        'hero_title' => ($current_brand || $device_slug != 'washer' || $current_district) ? "Ремонт " . $current_device . ($current_brand ? " " . $current_brand : "") . ($current_district ? " в " . $current_district : " на дому") : 'Вернем вашу технику к жизни сегодня! Ремонт от 3500 тг',
        'hero_desc' => ($current_brand || $device_slug != 'washer' || $current_district) ? "Срочный выезд мастера Даурена" . ($current_district ? " в " . $current_district : " в Алматы") . ". Диагностика 0 тг. Гарантия 12 месяцев. Оригинальные запчасти." : "Сломалась техника? Мастер Даурен приедет за 30 минут! Выезд и диагностика — 0 тенге. Честный ремонт с гарантией 1 год.",
        'btn_write' => 'Перейти в WhatsApp',
        'btn_call' => 'Вызвать мастера',
        'stats_orders' => 'Заказов выполнено',
        'stats_work' => 'Работаем для вас',
        'stats_warranty' => 'На все работы',
        'stats_warranty_label' => 'Гарантия',
        'section_about_subtitle' => 'О СЕРВИСЕ',
        'section_about_title' => 'Профессиональный подход к каждому ремонту',
        'section_services_subtitle' => 'НАШИ УСЛУГИ',
        'section_services_title' => 'Качественный ремонт и обслуживание',
        'services_all_title' => 'Выберите устройство для ремонта:',
        'footer_about' => 'Профессиональный сервисный центр в Алматы. Доверьте ремонт вашей техники профессионалам. Мы возвращаем технику к жизни быстро и с гарантией.',
        'footer_nav_title' => 'Навигация',
        'footer_contact_title' => 'Контакты',
        'visit_count' => 'Посещений',
        '2gis_btn' => 'Маршрут в 2GIS',
        'contact_title' => 'Контакты и адрес',
        'contact_address' => 'Наш адрес в Алматы',
        'btn_consultation' => 'Перейти в WhatsApp',
        'diagnostic_title' => 'Наш подход: профессионализм в деталях',
        'diagnostic_subtitle' => 'Для качественного ремонта стиральных машин в Алматы важны две вещи: точная диагностика и надежные запчасти. Мы уделяем этому максимум внимания, чтобы ваша техника служила долго.',
        'diag_box_title' => 'Диагностическое оборудование',
        'diag_box_tag' => 'Точность — залог успеха',
        'diag_box_text' => 'Правильно определить, почему машина шумит, не греет воду или не отжимает — это половина успеха. Мы используем профессиональные инструменты, которые позволяют точно выявить неисправность в электронике, двигателе или гидравлической системе.',
        'diag_tools_title' => 'Основные инструменты мастера:',
        'diag_tools' => [
            'Мультиметр и осциллограф' => 'для диагностики модулей управления и двигателей.',
            'Тепловизор' => 'для выявления перегрева на электронных платах.',
            'Набор для замены подшипников' => 'для сложных ремонтов, включая неразборные баки.'
        ],
        'diag_benefits_title' => 'Что это дает вам:',
        'diag_benefits' => [
            'Экономия на ремонте',
            'Ремонт сложных поломок',
            'Быстрое выявление проблемы',
            'Гарантия на точную диагностику'
        ],
        'diag_result' => 'Результат: Вы платите только за устранение реальной неисправности.',
        'error_title' => 'Расшифровка и устранение кодов ошибок',
        'error_subtitle' => 'Ваша стиральная машина показывает непонятные символы? Основываясь на тысячах успешных ремонтов в Алматы, наши мастера знают, что означает каждая ошибка, и используют профессиональное диагностическое оборудование для точного определения и устранения неисправности.',
        'prices_title' => 'Цены на ремонт стиральных машин в Алматы',
        'prices_subtitle' => 'Мы предлагаем честное и прозрачное ценообразование. Выезд и диагностика по городу бесплатны при согласии на ремонт. Итоговая стоимость всегда согласовывается до начала работ.',
        'prices_table_service' => 'Наименование услуги',
        'prices_table_cost' => 'Стоимость (от)',
        'prices_footer' => '* Выезд по г. Алматы и диагностика оплачиваются (3000 тг) только в случае вашего отказа от дальнейшего ремонта. В указанную стоимость уже включена цена работы мастера. Стоимость запчастей может варьироваться в зависимости от модели вашей стиральной машины.',
        'btn_check_price' => 'Уточнить стоимость ремонта',
        'loc_title' => 'Выезжаем в любой район Алматы и области',
        'loc_subtitle' => 'Наши мастера оперативно выезжают на ремонт стиральных машин во все районы Алматы, а также в города и поселки Алматинской области.',
        'loc_districts_title' => 'Работаем во всех районах Алматы',
        'loc_region_title' => 'Выезд по Алматинской области',
        'loc_map_title' => 'Наша зона обслуживания на карте',
        'loc_footer' => 'Вашего поселка или коттеджного городка нет в списке?',
        'loc_footer_sub' => 'Не проблема! Свяжитесь с нами, и мы уточним возможность выезда для ремонта вашей стиральной машины.',
        'btn_loc_check' => 'Уточнить возможность выезда'
    ],
    'kk' => [
        'nav_about' => 'Біз туралы',
        'nav_services' => 'Қызметтер',
        'nav_reviews' => 'Пікірлер',
        'nav_shop' => 'Дүкен',
        'nav_contacts' => 'Байланыс',
        'hero_badge' => 'Бүгін тапсырыс бергенге -20% жеңілдік!',
        'hero_title' => ($current_brand || $device_slug != 'washer' || $current_district) ? ($current_district ? $current_district . " " : "Алматыда ") . ($current_brand ? $current_brand . ' ' : '') . $current_device . " жөндеу" : 'Техникаңызды бүгін қалпына келтіреміз! Жөндеу 3500 тг-ден',
        'hero_desc' => ($current_brand || $device_slug != 'washer' || $current_district) ? "Шебер Дауреннің" . ($current_district ? " " . $current_district : " үйге") . " жедел келуі. Диагностика 0 тг. 1 жыл кепілдік. Түпнұсқа бөлшектер." : "Техникаңыз бұзылды ма? Шебер Даурен 30 минутта келеді! Келу және диагностика — 0 теңге. 1 жылдық кепілдікпен адал жөндеу.",
        'btn_write' => 'WhatsApp-қа өту',
        'btn_call' => 'Шеберді шақыру',
        'stats_orders' => 'Тапсырыс орындалды',
        'stats_work' => 'Сіз үшін жұмыс істейміз',
        'stats_warranty' => 'Барлық жұмыстарға',
        'stats_warranty_label' => 'Кепілдік',
        'section_about_subtitle' => 'ШЕБЕРХАНА ТУРАЛЫ',
        'section_about_title' => 'Әр жөндеуге кәсіби көзқарас',
        'section_services_subtitle' => 'БІЗДІҢ ҚЫЗМЕТТЕР',
        'section_services_title' => 'Сапалы жөндеу және қызмет көрсету',
        'services_all_title' => 'Жөндеу үшін құрылғыны таңдаңыз:',
        'footer_about' => 'Алматыдағы кәсіби сервистік орталық. Техникаңызды мамандарға сеніп тапсырыңыз. Біз техниканы тез және кепілдікпен қалпына келтіреміз.',
        'footer_nav_title' => 'Навигация',
        'footer_contact_title' => 'Байланыс',
        'visit_count' => 'Келушілер',
        '2gis_btn' => '2GIS бағыты',
        'contact_title' => 'Байланыс және мекен-жай',
        'contact_address' => 'Алматыдағы мекен-жайымыз',
        'btn_consultation' => 'WhatsApp-қа өту',
        'diagnostic_title' => 'Біздің көзқарасымыз: егжей-тегжейлі кәсібилік',
        'diagnostic_subtitle' => 'Алматыда кір жуғыш машиналарды сапалы жөндеу үшін екі нәрсе маңызды: дәл диагностика және сенімді бөлшектер. Біз техникаңыз ұзақ қызмет етуі үшін бұған барынша көңіл бөлеміз.',
        'diag_box_title' => 'Диагностикалық жабдық',
        'diag_box_tag' => 'Дәлдік — сәттілік кепілі',
        'diag_box_text' => 'Мәселенің неден екенін (шуыл, су ысытпау немесе сықпау) дұрыс анықтау — сәттіліктің жартысы. Біз электроникадағы, қозғалтқыштағы немесе гидравликалық жүйедегі ақауды дәл анықтауға мүмкіндік беретін кәсіби құралдарды қолданамыз.',
        'diag_tools_title' => 'Шебердің негізгі құралдары:',
        'diag_tools' => [
            'Мультиметр және осциллограф' => 'басқару модульдері мен қозғалтқыштарды диагностикалау үшін.',
            'Тепловизор' => 'электронды платалардағы қызуды анықтау үшін.',
            'Подшипник ауыстыру жинағы' => 'күрделі жөндеулер, соның ішінде ажыратылмайтын бактар үшін.'
        ],
        'diag_benefits_title' => 'Бұл сізге не береді:',
        'diag_benefits' => [
            'Жөндеудегі үнемділік',
            'Күрделі ақауларды жөндеу',
            'Мәселені жылдам анықтау',
            'Дәл диагностикаға кепілдік'
        ],
        'diag_result' => 'Нәтиже: Сіз тек нақты ақауды жою үшін ғана төлейсіз.',
        'error_title' => 'Қате кодтарын түсіндіру және жою',
        'error_subtitle' => 'Кір жуғыш машинаңыз түсініксіз символдарды көрсетіп тұр ма? Алматыдағы мыңдаған сәтті жөндеулерге сүйене отырып, біздің шеберлеріміз әрбір қатенің не білдіретінін біледі және ақауды дәл анықтау мен жою үшін кәсіби диагностикалық жабдықтарды қолданады.',
        'prices_title' => 'Алматыда кір жуғыш машиналарды жөндеу бағасы',
        'prices_subtitle' => 'Біз адал және ашық баға ұсынамыз. Жөндеуке келіскен жағдайда қала бойынша келу және диагностика тегін. Қорытынды баға жұмыс басталмас бұрын келісіледі.',
        'prices_table_service' => 'Қызмет атауы',
        'prices_table_cost' => 'Құны (бастап)',
        'prices_footer' => '* Алматы қаласы бойынша келу және диагностика тек жөндеуден бас тартқан жағдайда ғана төленеді (3000 тг). Көрсетілген құнға шебердің жұмысы кіреді. Қосалқы бөлшектердің бағасы машинаның моделіне байланысты болуы мүмкін.',
        'btn_check_price' => 'Жөндеу құнын нақтылау',
        'loc_title' => 'Алматының және облыстың кез келген ауданына барамыз',
        'loc_subtitle' => 'Біздің шеберлер Алматының барлық аудандарына, сондай-ак Алматы облысының қалалары мен ауылдарына кір жуғыш машиналарды жөндеуге жедел барады.',
        'loc_districts_title' => 'Алматының барлық аудандарында жұмыс істейміз',
        'loc_region_title' => 'Алматы облысы бойынша шығу',
        'loc_map_title' => 'Картадағы қызмет көрсету аймағымыз',
        'loc_footer' => 'Тізімде сіздің ауылыңыз немесе коттедж қалашығыңыз жоқ па?',
        'loc_footer_sub' => 'Мәселе емес! Бізбен хабарласыңыз, біз сіздің кір жуғыш машинаңызды жөндеуге келу мүмкіндігін нақтылаймыз.',
        'btn_loc_check' => 'Келу мүмкіндігін нақтылау'
    ],
    'en' => [
        'nav_about' => 'About',
        'nav_services' => 'Services',
        'nav_reviews' => 'Reviews',
        'nav_shop' => 'Shop',
        'nav_contacts' => 'Contacts',
        'hero_badge' => 'Elite Appliance Service',
        'hero_title' => ($current_brand || $device_slug != 'washer' || $current_district) ? ($current_brand ? $current_brand . " " : "") . $current_device . " Repair" . ($current_district ? " in " . $current_district : "") : 'Professional Washing Machine Repair in Almaty',
        'hero_desc' => ($current_brand || $device_slug != 'washer' || $current_district) ? "Professional repair" . ($current_district ? " in " . $current_district : " in Almaty") . " by Master Dauren. 10+ years experience." : "Master Dauren's urgent home visit. -20% discount if ordered today. Only original spare parts used.",
        'btn_write' => 'Open WhatsApp',
        'btn_call' => 'Call Master',
        'stats_orders' => 'Orders Completed',
        'stats_work' => 'Working for you',
        'stats_warranty' => 'On all works',
        'stats_warranty_label' => 'Warranty',
        'section_about_subtitle' => 'ABOUT SERVICE',
        'section_about_title' => 'Professional approach to every repair',
        'section_services_subtitle' => 'OUR SERVICES',
        'section_services_title' => 'Professional repair and maintenance',
        'services_all_title' => 'Choose device for repair:',
        'footer_about' => 'Elite service center in Almaty. Entrust your repair to professionals. We bring equipment back to life quickly and with a guarantee.',
        'footer_nav_title' => 'Navigation',
        'footer_contact_title' => 'Contact Us',
        'visit_count' => 'Visits',
        '2gis_btn' => 'Route in 2GIS',
        'contact_title' => 'Contact & Address',
        'contact_address' => 'Our address in Almaty',
        'btn_consultation' => 'Open WhatsApp',
        'diagnostic_title' => 'Our Approach: Professionalism in Details',
        'diagnostic_subtitle' => 'Two things are vital for quality washing machine repair in Almaty: accurate diagnostics and reliable parts. We pay maximum attention to this so your equipment lasts longer.',
        'diag_box_title' => 'Diagnostic Equipment',
        'diag_box_tag' => 'Accuracy is the key to success',
        'diag_box_text' => 'Correctly identifying why the machine is noisy, not heating, or not spinning is half the battle. We use professional tools to accurately detect faults in electronics, motors, or hydraulic systems.',
        'diag_tools_title' => 'Main Master Tools:',
        'diag_tools' => [
            'Multimeter and oscilloscope' => 'for control module and motor diagnostics.',
            'Thermal imager' => 'to detect overheating on electronic boards.',
            'Bearing replacement kit' => 'for complex repairs, including non-separable tubs.'
        ],
        'diag_benefits_title' => 'What this gives you:',
        'diag_benefits' => [
            'Savings on repair',
            'Complex repair solutions',
            'Fast problem identification',
            'Accurate diagnostic guarantee'
        ],
        'diag_result' => 'Result: You only pay for fixing the actual fault.',
        'error_title' => 'Error Codes Decoding & Troubleshooting',
        'error_subtitle' => 'Is your washing machine showing confusing symbols? Based on thousands of successful repairs in Almaty, our technicians know what every error means and use professional diagnostic equipment to accurately identify and fix the issue.',
        'prices_title' => 'Washing Machine Repair Prices in Almaty',
        'prices_subtitle' => 'We offer fair and transparent pricing. Home visit and diagnostics are free if you proceed with the repair. The final cost is always agreed upon before work begins.',
        'prices_table_service' => 'Service Description',
        'prices_table_cost' => 'Cost (from)',
        'prices_footer' => '* Home visit and diagnostics (3000 KZT) are only charged if you refuse repair. The price includes labor cost. Spare parts cost varies by model.',
        'btn_check_price' => 'Get Price Quote',
        'loc_title' => 'Home Visit to Any District of Almaty & Region',
        'loc_subtitle' => 'Our masters promptly go for repair to all districts of Almaty, as well as to cities and villages of the Almaty region.',
        'loc_districts_title' => 'We work in all Almaty districts',
        'loc_region_title' => 'Almaty Region Home Visit',
        'loc_map_title' => 'Our Service Area on Map',
        'loc_footer' => 'Is your village or gated community not on the list?',
        'loc_footer_sub' => 'Not a problem! Contact us, and we will check the possibility of a visit for repair.',
        'btn_loc_check' => 'Check availability'
    ],
];

$cur = $t[$lang];

$services_gallery = [
    [
        'title' => 'Стиральные машины',
        'desc' => 'Замена подшипников, ТЭНов и ремонт плат управления любой сложности.',
        'image' => 'service_washer.png'
    ],
    [
        'title' => 'Посудомойки',
        'desc' => 'Устранение протечек, замена насосов и чистка системы.',
        'image' => 'service_washer.png'
    ],
    [
        'title' => 'Холодильники',
        'desc' => 'Заправка фреоном, чистка дренажа и ремонт компрессоров.',
        'image' => 'service_fridge.png'
    ],
    [
        'title' => 'Сушильные машины',
        'desc' => 'Чистка воздуховодов, замена ремней и датчиков влажности.',
        'image' => 'service_fridge.png'
    ]
];

$all_services_data = [
    ['icon' => 'tint', 'title' => ['ru' => 'Стиральные машины', 'kk' => 'Кір жуғыш машиналар', 'en' => 'Washing Machines'], 'slug' => 'washer'],
    ['icon' => 'utensils', 'title' => ['ru' => 'Посудомойки', 'kk' => 'Ыдыс жуғыштар', 'en' => 'Dishwashers'], 'slug' => 'dish'],
    ['icon' => 'wind', 'title' => ['ru' => 'Сушильные машины', 'kk' => 'Кептіргіш машиналар', 'en' => 'Dryers'], 'slug' => 'dry'],
    ['icon' => 'snowflake', 'title' => ['ru' => 'Холодильники', 'kk' => 'Тоңазытқыштар', 'en' => 'Refrigerators'], 'slug' => 'fridge'],
    ['icon' => 'igloo', 'title' => ['ru' => 'Морозильники', 'kk' => 'Мұздатқыштар', 'en' => 'Freezers'], 'slug' => 'freeze']
];

$sticker_services = [];
foreach ($all_services_data as $s) {
    $sticker_services[] = [
        'icon' => $s['icon'],
        'title' => $s['title'][$lang],
        'slug' => $s['slug']
    ];
}

$reviews = [
    [
        'name' => 'Айжан Султанова',
        'date' => '24.03.2026',
        'rating' => 5,
        'text' => 'Сломалась стиралка Bosch вечером, Даурен приехал спустя час. Починил за 40 минут! Очень вежливый и знающий мастер. Рекомендую Алматы!'
    ],
    [
        'name' => 'Ержан Маратов',
        'date' => '22.03.2026',
        'rating' => 5,
        'text' => 'Ремонтировали посудомойку LG. Все запчасти были у мастера с собой. Сделали очень аккуратно, цена адекватная.'
    ],
    [
        'name' => 'Мария Кольцова',
        'date' => '20.03.2026',
        'rating' => 5,
        'text' => 'Рекомендую ALMA Service. Мастер Даурен настоящий профи. Быстро нашли запчасть на сушилку Samsung, которую в других местах ждали недели.'
    ]
];

// Visit Counter 
$counter_file = 'visit_counter.txt';
if (!file_exists($counter_file))
    file_put_contents($counter_file, '0');
$visit_count = (int) file_get_contents($counter_file);
if (!isset($_COOKIE['visited'])) {
    $visit_count++;
    file_put_contents($counter_file, $visit_count);
    setcookie('visited', '1', time() + 3600);
}

$whatsapp_msg = ($lang == 'ru' ? 'Здравствуйте! Хочу получить консультацию по ремонту ' . ($current_brand ? $current_brand . ' ' : '') . $wa_device . ' в Алматы.' : ($lang == 'kk' ? 'Сәлеметсіз бе! Алматыда ' . ($current_brand ? $current_brand . ' ' : '') . $wa_device . ' бойынша кеңес алғым келеді.' : 'Hello! I would like to get a consultation on ' . ($current_brand ? $current_brand . ' ' : '') . $wa_device . ' repair in Almaty.'));
$whatsapp_url = "https://wa.me/" . str_replace(['+', ' ', '(', ')', '-'], '', $phone) . "?text=" . urlencode($whatsapp_msg);

$error_codes_data = [
    ['code' => 'SA', 'brand' => 'Samsung', 'desc' => 'Оперативно расшифруем коды Samsung. Проводим компонентный ремонт плат, устраняя проблемы со сливом (5E), дисбалансом (UE) или двигателем (3E).', 'pills' => ['5E, SE', 'UE, UB', '4E, LE', 'DE, DC', '3E']],
    ['code' => 'LG', 'brand' => 'LG', 'desc' => 'Ошибки LG часто связаны с системой прямого привода. Решим проблемы с набором воды (IE), сливом (OE) или люком (DE), восстанавливая программные и аппаратные сбои.', 'pills' => ['OE', 'IE', 'UE', 'DE', 'LE']],
    ['code' => 'BO', 'brand' => 'Bosch', 'desc' => 'Расшифровываем и чиним F- и E-ошибки Bosch. Используем оригинальные запчасти для ремонта AquaStop (E23) или двигателя (F43), гарантируя надежность.', 'pills' => ['F16-F18', 'F21', 'E18', 'E23', 'F43']],
    ['code' => 'SI', 'brand' => 'Siemens', 'desc' => 'Профессионально устраняем ошибки в машинах Сименс. Гарантируем качественный ремонт системы AquaStop (F23) и других неисправностей электроники.', 'pills' => ['F18', 'F23', 'E17', 'F34', 'E43']],
    ['code' => 'IN', 'brand' => 'Indesit', 'desc' => 'Знаем все типовые неисправности Индезит. Ошибки F05 (слив) и F08 (ТЭН) устраняем за один визит, имея запчасти с собой.', 'pills' => ['F01, F02', 'F05', 'F08', 'H20', 'F11']],
    ['code' => 'AR', 'brand' => 'Ariston', 'desc' => 'Ремонт Hotpoint-Ariston. Опыт работы с итальянской техникой, устраняем ошибки F09 (сбой прошивки) и F05 (засор слива).', 'pills' => ['F03', 'F05', 'F06', 'F09', 'F12']],
    ['code' => 'AEG', 'brand' => 'AEG', 'desc' => 'Знаем все E-коды АЕГ. Быстро решим проблему с набором (E10), сливом (E20) или блокировкой люка (E40), используя дилерское оборудование.', 'pills' => ['E10', 'E20', 'E40', 'E50', 'EF0']],
    ['code' => 'BE', 'brand' => 'Beko', 'desc' => 'Качественный ремонт турецкой техники Беко. Устраняем ошибки нагрева (H7) и набора воды (H5), а также сложные неисправности электроники.', 'pills' => ['H1, H2', 'H5', 'H7', 'H11']],
    ['code' => 'AT', 'brand' => 'Atlant', 'desc' => 'Оперативно выезжаем на ремонт белорусских машин Атлант. Решаем проблемы со сливом (F4), неисправностью ТЭНа (F8) и блокировкой дверцы («door»).', 'pills' => ['F3, F4', 'F8', '«door»', 'SEL']],
    ['code' => 'MI', 'brand' => 'Miele', 'desc' => 'Ремонтируем премиальную технику Miele, устраняя F-ошибки, связанные с подачей воды, сливом или электроникой. Используем только оригинальные комплектующие.', 'pills' => ['F10', 'F20', 'F50', 'Waterproof']],
    ['code' => 'EL', 'brand' => 'Electrolux', 'desc' => 'Шведская техника требует точной диагностики. Устраняем E-ошибки, связанные с проблемами слива (E20), набора воды (E10) и неисправностями двигателя.', 'pills' => ['E10', 'E20', 'E40', 'E90']],
    ['code' => 'ZA', 'brand' => 'Zanussi', 'desc' => 'Ремонтируем популярные модели Zanussi. Быстро решим проблемы с ошибками E10 (набор воды) и E20 (слив), которые часто встречаются у этого бренда.', 'pills' => ['E10', 'E20', 'E40', 'E52']],
    ['code' => 'CA', 'brand' => 'Candy', 'desc' => 'Знаем специфику итальянских машин Candy. Устраняем ошибки набора воды (E02), слива (E03) и проблемы с датчиком оборотов (E08).', 'pills' => ['E02', 'E03', 'E08', 'E16']],
    ['code' => 'WH', 'brand' => 'Whirlpool', 'desc' => 'Ремонт американской техники Whirlpool. Устраняем F-ошибки, связанные с нагревом (F08), двигателем (F06) или электроникой (F22).', 'pills' => ['F08', 'F06', 'F22', 'FP']],
    ['code' => 'GO', 'brand' => 'Gorenje', 'desc' => 'Ремонтируем словенские стиральные машины Gorenje. Решаем проблемы с датчиками (E3), двигателем (E7) и системой набора воды (E4).', 'pills' => ['E3', 'E7', 'E4', 'E1']],
    ['code' => 'HA', 'brand' => 'Hansa', 'desc' => 'Устраняем неисправности в немецких машинах Hansa. Частые проблемы: ошибки слива (E01), нагрева (E04) и проблемы с электроникой (E21).', 'pills' => ['E01', 'E04', 'E21', 'E05']],
    ['code' => 'AS', 'brand' => 'Asko', 'desc' => 'Профессиональный ремонт шведских машин Asko. Устраняем ошибки, связанные с проблемами слива (F2), набора воды (F4) и блокировки люка (F10).', 'pills' => ['F2', 'F4', 'F10', 'F3']],
    ['code' => 'SM', 'brand' => 'Smeg', 'desc' => 'Ремонт стильных итальянских машин Smeg. Решаем проблемы с ошибками набора воды (E1), слива (E3) и неисправностью двигателя (E6).', 'pills' => ['E1', 'E3', 'E6', 'E13']],
    ['code' => 'HR', 'brand' => 'Haier', 'desc' => 'Диагностика и ремонт техники Haier. Устраняем ошибки слива (Err1), блокировки люка (Err7) и проблемы с датчиками (Err3, Err4).', 'pills' => ['Err1', 'Err3', 'Err4', 'Err7']],
    ['code' => 'MD', 'brand' => 'Midea', 'desc' => 'Ремонтируем современные машины Midea. Устраняем ошибки, связанные с набором воды (E10), сливом (E21) и блокировкой дверцы (E30).', 'pills' => ['E10', 'E21', 'E30', 'E60']],
    ['code' => 'HI', 'brand' => 'Hitachi', 'desc' => 'Знаем специфику японской техники Hitachi. Устраняем С-ошибки, связанные с проблемами слива (C02), дисбалансом (C04) и люком (C01).', 'pills' => ['C01', 'C02', 'C04', 'F9']],
    ['code' => 'PA', 'brand' => 'Panasonic', 'desc' => 'Ремонт японских стиральных машин Panasonic. Устраняем H-ошибки, связанные с двигателем (H09), датчиками (H04) и электроникой (H01).', 'pills' => ['H01', 'H04', 'H09', 'U12']],
    ['code' => 'TO', 'brand' => 'Toshiba', 'desc' => 'Диагностика и ремонт машин Toshiba. Решаем проблемы с ошибками E1 (слив), E2 (люк) и E9 (неисправность датчиков).', 'pills' => ['E1', 'E2', 'E9', 'E5']],
    ['code' => 'SH', 'brand' => 'Sharp', 'desc' => 'Ремонтируем надежную технику Sharp. Устраняем ошибки набора воды (E01), слива (E02) и проблемы с дисбалансом белья (E04).', 'pills' => ['E01', 'E02', 'E04', 'E12']],
    ['code' => 'VE', 'brand' => 'Vestel', 'desc' => 'Качественный ремонт машин Vestel. Устраняем частые неисправности, связанные с ошибками набора воды (E01), слива (E02) и нагрева (E04).', 'pills' => ['E01', 'E02', 'E04', 'E06']],
];

$prices_data = [
    [
        'category' => 'Диагностика и мелкий ремонт',
        'services' => [
            ['name' => 'Выезд мастера и диагностика неисправности', 'price' => 'Бесплатно*'],
            ['name' => 'Извлечение посторонних предметов (без разбора бака)', 'price' => '4 000 тг'],
            ['name' => 'Устранение засора в системе слива', 'price' => '5 000 тг'],
            ['name' => 'Замена сетевого шнура или фильтра', 'price' => '4 500 тг'],
            ['name' => 'Замена сливного или заливного шланга', 'price' => '3 500 тг'],
            ['name' => 'Балансировка и регулировка ножек', 'price' => '3 000 тг'],
        ]
    ],
    [
        'category' => 'Ремонт узлов и компонентов',
        'services' => [
            ['name' => 'Ремонт электронного модуля (платы)', 'price' => '8 000 тг'],
            ['name' => 'Ремонт замка (устройства блокировки люка)', 'price' => '4 500 тг'],
            ['name' => 'Ремонт помпы (сливного насоса)', 'price' => '5 000 тг'],
            ['name' => 'Ремонт дозатора (лотка для порошка)', 'price' => '6 500 тг'],
            ['name' => 'Ремонт прессостата (датчика уровня воды)', 'price' => '5 500 тг'],
            ['name' => 'Ремонт таходатчика (датчика оборотов)', 'price' => '6 000 тг'],
            ['name' => 'Ремонт крестовины барабана', 'price' => '12 000 тг'],
            ['name' => 'Ремонт люка (дверцы)', 'price' => '5 000 тг'],
        ]
    ],
    [
        'category' => 'Замена ключевых запчастей',
        'services' => [
            ['name' => 'Замена ТЭНа (нагревательного элемента)', 'price' => '6 000 тг'],
            ['name' => 'Замена подшипников и сальника', 'price' => '15 000 тг'],
            ['name' => 'Замена сливного насоса (помпы)', 'price' => '4 000 тг'],
            ['name' => 'Замена амортизаторов (комплект)', 'price' => '4 500 тг'],
            ['name' => 'Замена манжеты люка (уплотнительной резины)', 'price' => '5 000 тг'],
            ['name' => 'Замена щеток двигателя', 'price' => '5 000 тг'],
            ['name' => 'Замена ремня привода', 'price' => '4 000 тг'],
            ['name' => 'Замена устройства блокировки люка (УБЛ)', 'price' => '4 000 тг'],
            ['name' => 'Замена пружин подвески бака', 'price' => '4 500 тг'],
            ['name' => 'Замена термостата (датчика температуры)', 'price' => '5 500 тг'],
            ['name' => 'Замена прессостата (датчика уровня воды)', 'price' => '5 000 тг'],
            ['name' => 'Замена модуля управления (платы)', 'price' => '9 500 тг'],
            ['name' => 'Замена электродвигателя', 'price' => '9 500 тг'],
            ['name' => 'Замена шкива барабана', 'price' => '9 000 тг'],
        ]
    ]
];

$almaty_districts = [
    'ru' => [
        'alatau' => 'Алатауский район',
        'almaly' => 'Алмалинский район',
        'auezov' => 'Ауэзовский район',
        'bostandyk' => 'Бостандыкский район',
        'zhetysu' => 'Жетысуский район',
        'medeu' => 'Медеуский район',
        'nauryzbay' => 'Наурызбайский район',
        'turksib' => 'Турксибский район'
    ],
    'kk' => [
        'alatau' => 'Алатау ауданы',
        'almaly' => 'Алмалы ауданы',
        'auezov' => 'Әуезов ауданы',
        'bostandyk' => 'Бостандық ауданы',
        'zhetysu' => 'Жетісу ауданы',
        'medeu' => 'Медеу ауданы',
        'nauryzbay' => 'Наурызбай ауданы',
        'turksib' => 'Түрксіб ауданы'
    ],
    'en' => [
        'alatau' => 'Alatau District',
        'almaly' => 'Almaly District',
        'auezov' => 'Auezov District',
        'bostandyk' => 'Bostandyk District',
        'zhetysu' => 'Zhetysu District',
        'medeu' => 'Medeu District',
        'nauryzbay' => 'Nauryzbay District',
        'turksib' => 'Turksib District'
    ]
];

$region_locations = [
    'Айтей', 'Алмалыбак', 'Байсерке', 'Батан', 'Береке', 'Бесагаш', 'Боралдай', 'Гульдала', 'Долан', 'Енбекши', 'Есик', 'Жапек батыра', 'Иргели', 'Караой', 'Каскелен', 'Кемертоган', 'Коксай', 'Кокозек', 'Коккайнар', 'Кыргауылды', 'Отеген батыр', 'Райымбек', 'Талгар', 'Түймебаев', 'Туздыбастау', 'Узынагаш', 'Фабричный (Каргалы)', 'Шелек'
];
?>