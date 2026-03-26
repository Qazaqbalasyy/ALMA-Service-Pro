<?php
include 'config.php';
include 'counter.php';
$visit_count = get_visitor_count();
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $seo_title; ?>
    </title>
    <meta name="description" content="<?php echo $seo_desc; ?>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="logo-3d.png">
</head>

<body>
    <!-- Reading Progress Bar -->
    <div class="progress-container">
        <div class="progress-bar" id="readingProgress"></div>
    </div>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <a href="index.php?lang=<?php echo $lang; ?>" class="logo-wrapper">
                <div class="logo-icon">
                    <img src="logo-3d.png" alt="ALMA Service Pro Logo">
                </div>
                <div class="logo-text">
                    <span class="logo-accent">ALMA</span> Service Pro
                </div>
            </a>

            <div class="nav-right">
                <ul class="nav-links">
                    <li><a href="#about"><?php echo $cur['nav_about']; ?></a></li>
                    <li><a href="#services"><?php echo $cur['nav_services']; ?></a></li>
                    <li><a href="#reviews"><?php echo $cur['nav_reviews']; ?></a></li>
                    <li><a href="#contacts"><?php echo $cur['nav_contacts']; ?></a></li>
                </ul>

                <a href="<?php echo $whatsapp_url; ?>" class="nav-phone">
                    <i class="fab fa-whatsapp"></i>
                    <?php echo $phone; ?>
                </a>

                <div class="lang-switcher">
                    <button class="lang-btn">
                        <img src="https://flagcdn.com/w20/<?php echo ($lang == 'ru' ? 'ru' : ($lang == 'kk' ? 'kz' : 'us')); ?>.png"
                            alt="">
                        <span><?php echo strtoupper($lang); ?></span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="lang-dropdown">
                        <a href="?lang=ru" class="<?php echo $lang == 'ru' ? 'active' : ''; ?>">
                            <img src="https://flagcdn.com/w20/ru.png" alt=""> RUS
                        </a>
                        <a href="?lang=kk" class="<?php echo $lang == 'kk' ? 'active' : ''; ?>">
                            <img src="https://flagcdn.com/w20/kz.png" alt=""> KAZ
                        </a>
                        <a href="?lang=en" class="<?php echo $lang == 'en' ? 'active' : ''; ?>">
                            <img src="https://flagcdn.com/w20/us.png" alt=""> ENG
                        </a>
                    </div>
                </div>

                <div class="theme-toggle" id="theme-btn" title="Toggle Mode">
                    <i class="fas fa-moon"></i>
                </div>

                <div class="menu-toggle" id="mobile-menu">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-flex">
                <div class="hero-text fade-in">
                    <span class="badge"><?php echo $cur['hero_badge']; ?></span>
                    <h1 class="gradient-text"><?php echo $cur['hero_title']; ?></h1>
                    <p><?php echo $cur['hero_desc']; ?></p>

                    <!-- Hero Features Grid (High Conversion) -->
                    <div class="hero-features">
                        <div class="h-feat">
                            <i class="fas fa-stethoscope"></i>
                            <span>Бесплатная диагностика</span>
                        </div>
                        <div class="h-feat">
                            <i class="fas fa-bolt"></i>
                            <span>Ремонт за 1 день</span>
                        </div>
                        <div class="h-feat">
                            <i class="fas fa-shield-alt"></i>
                            <span>Гарантия 12 месяцев</span>
                        </div>
                        <div class="h-feat">
                            <i class="fas fa-user-check"></i>
                            <span>Опытные мастера</span>
                        </div>
                    </div>

                    <div class="hero-actions">
                        <a href="<?php echo $whatsapp_url; ?>" target="_blank" class="btn btn-whatsapp btn-lg">
                            <i class="fab fa-whatsapp"></i> <?php echo $cur['btn_consultation']; ?>
                        </a>
                        <a href="tel:<?php echo str_replace([' ', '(', ')', '-'], '', $phone); ?>"
                            class="btn btn-primary btn-lg">
                            <i class="fas fa-phone-alt"></i> <?php echo $cur['btn_call']; ?>
                        </a>
                    </div>
                </div>
                <div class="hero-image-box fade-in">
                    <img src="master_dauren_new.png" alt="Мастер Даурен" class="master-photo-blend">
                    <div class="master-info-card">
                        <div class="master-card-header">
                            <span class="master-card-name">Даурен Батраев</span>
                            <span class="master-card-rating"><i class="fas fa-star"></i> 5.0</span>
                        </div>
                        <p class="master-card-desc">Старший мастер по ремонту стиральных машин</p>
                        <div class="master-card-exp">
                            <span>ОПЫТ РАБОТЫ: 10 лет</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scroll to Top Button -->
    <button id="scrollToTop" class="scroll-btn" title="Наверх">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Floating WhatsApp -->
    <a href="<?php echo $whatsapp_url; ?>" class="floating-whatsapp" target="_blank" title="Написать в WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Stats Bar -->
    <section class="stats-bar">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-card">
                    <i class="fas fa-tools"></i>
                    <div class="stat-info">
                        <span class="stat-label"><?php echo $cur['stats_orders']; ?></span>
                        <div class="stat-value">
                            <strong class="stat-num" data-target="30000">0</strong><span>+</span>
                        </div>
                    </div>
                </div>
                <div class="stat-card">
                    <i class="fas fa-clock"></i>
                    <div class="stat-info">
                        <span class="stat-label"><?php echo $cur['stats_work']; ?></span>
                        <div class="stat-value"><strong>Пн-Сб</strong></div>
                    </div>
                </div>
                <div class="stat-card">
                    <i class="fas fa-shield-alt"></i>
                    <div class="stat-info">
                        <span class="stat-label"><?php echo $cur['stats_warranty']; ?></span>
                        <div class="stat-value"><strong><?php echo $cur['stats_warranty_label']; ?></strong></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-content">
                    <span class="section-subtitle"><?php echo $cur['section_about_subtitle']; ?></span>
                    <h2><?php echo $cur['section_about_title']; ?></h2>
                    <p>
                        <strong>ALMA Service Pro</strong> — это олицетворение качества и надежности в сфере ремонта
                        бытовой техники в Алматы. Мы объединили многолетний опыт инженеров и современный подход к
                        клиентскому сервису.
                    </p>
                    <p>Наш ведущий мастер Даурен контролирует каждый этап работы, чтобы ваше устройство служило долго.
                        Мы не просто чиним технику — мы заботимся о вашем комфорте, предоставляя прозрачный сервис с
                        официальной гарантией.</p>
                    <ul class="features-list">
                        <li><i class="fas fa-microchip"></i> Высокоточная диагностика электроники</li>
                        <li><i class="fas fa-tools"></i> Ремонт за один визит в 90% случаев</li>
                        <li><i class="fas fa-shield-alt"></i> Защита ваших прав официальной гарантией</li>
                        <li><i class="fas fa-clock"></i> Соблюдение сроков без задержек</li>
                    </ul>
                </div>
                <div class="about-image">
                    <div class="image-glass-card">
                        <img src="hero_bg.png" alt="<?php echo $company_name; ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Diagnostic Section -->
    <section class="diagnostic" id="approach">
        <div class="container">
            <div class="section-header centered">
                <h2 class="diagnostic-title"><?php echo $cur['diagnostic_title']; ?></h2>
                <p class="section-subtitle-text"><?php echo $cur['diagnostic_subtitle']; ?></p>
            </div>

            <div class="diagnostic-box">
                <div class="diag-top-bar">
                    <div class="diag-title-row">
                        <h3 class="diag-box-title"><?php echo $cur['diag_box_title']; ?></h3>
                        <span class="diag-tag"><?php echo $cur['diag_box_tag']; ?></span>
                    </div>
                    <p class="diag-intro"><?php echo $cur['diag_box_text']; ?></p>
                </div>

                <div class="diag-content-grid">
                    <div class="diag-left">
                        <h4 class="diag-list-title"><?php echo $cur['diag_tools_title']; ?></h4>
                        <ul class="diag-tools-list">
                            <?php foreach ($cur['diag_tools'] as $tool => $tool_desc): ?>
                                <li>
                                    <i class="fas fa-circle-dot"></i>
                                    <div class="tool-info">
                                        <strong><?php echo $tool; ?></strong>
                                        <span class="tool-desc-text">— <?php echo $tool_desc; ?></span>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="diag-right">
                        <h4 class="diag-list-title"><?php echo $cur['diag_benefits_title']; ?></h4>
                        <div class="benefits-grid">
                            <?php foreach ($cur['diag_benefits'] as $benefit): ?>
                                <div class="benefit-item">
                                    <i class="fas fa-check"></i>
                                    <span><?php echo $benefit; ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="diag-footer-row">
                    <p class="diag-result-text"><?php echo $cur['diag_result']; ?></p>
                    <a href="<?php echo $whatsapp_url; ?>" target="_blank" class="btn btn-primary btn-consultation">
                        <i class="fab fa-whatsapp"></i> <?php echo $cur['btn_consultation']; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle"><?php echo $cur['section_services_subtitle']; ?></span>
                <h2><?php echo $cur['section_services_title']; ?></h2>
            </div>

            <!-- Services Gallery Slider -->
            <div class="swiper services-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($services_gallery as $item): ?>
                        <div class="swiper-slide">
                            <div class="service-gallery-card">
                                <div class="service-card-badge">ГАРАНТИЯ 1 ГОД</div>
                                <div class="service-gallery-image">
                                    <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>">
                                    <div class="service-gallery-overlay">
                                        <h3><?php echo $item['title']; ?></h3>
                                        <p><?php echo $item['desc']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <!-- Interactive Sticker Carousel -->
            <div class="sticker-carousel-container">
                <h3 class="all-services-title"><?php echo $cur['services_all_title']; ?></h3>
                <div class="sticker-swiper-wrapper">
                    <div class="swiper sticker-swiper">
                        <div class="swiper-wrapper">
                            <?php foreach ($sticker_services as $s): ?>
                                <div class="swiper-slide">
                                    <a href="?device=<?php echo $s['slug']; ?>&lang=<?php echo $lang; ?>#home"
                                        class="device-sticker-link">
                                        <div
                                            class="device-sticker <?php echo ($device_slug == $s['slug'] ? 'active' : ''); ?>">
                                            <div class="sticker-icon">
                                                <i class="fas fa-<?php echo $s['icon']; ?>"></i>
                                            </div>
                                            <span class="sticker-title"><?php echo $s['title']; ?></span>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- Navigation Buttons -->
                    <div class="swiper-button-next sticker-next"></div>
                    <div class="swiper-button-prev sticker-prev"></div>
                </div>
            </div>


        </div>
    </section>

    <!-- Brands Hub (Competitor Style Grid) -->
    <section class="brands-hub" id="brands">
        <div class="container">
            <div class="section-header centered">
                <h2><?php echo ($lang == 'ru' ? 'Ремонтируем все бренды стиральных машин' : ($lang == 'kk' ? 'Барлық маркадағы кір жуғыш машиналарды жөндейміз' : 'We repair all washing machine brands')); ?>
                </h2>
            </div>

            <div class="brands-catalog" id="brandsCatalog">
                <?php
                $visible_count = 18; // Show 3 rows of 6 by default
                $counter = 0;
                foreach ($brands as $brand_name):
                    $is_hidden = $counter >= $visible_count ? 'hidden-brand' : '';
                    $brand_color = '#1D1D1F'; // Default
                    if ($brand_name == 'Bosch')
                        $brand_color = '#ED1C24';
                    if ($brand_name == 'Samsung')
                        $brand_color = '#0067B7';
                    if ($brand_name == 'LG')
                        $brand_color = '#A50034';
                    if ($brand_name == 'Indesit')
                        $brand_color = '#005393';
                    if ($brand_name == 'Beko')
                        $brand_color = '#004A99';
                    if ($brand_name == 'Miele')
                        $brand_color = '#8C0014';
                    ?>
                    <a href="?brand=<?php echo urlencode($brand_name); ?>&device=<?php echo $device_slug; ?>#home"
                        class="brand-card <?php echo $is_hidden; ?>" style="--brand-clr: <?php echo $brand_color; ?>;">
                        <span class="brand-logo-text"><?php echo $brand_name; ?></span>
                        <span class="brand-subtext"><?php echo $brand_name; ?></span>
                    </a>
                    <?php
                    $counter++;
                endforeach; ?>
            </div>

            <div class="brands-toggle-wrapper">
                <button id="toggleBrands" class="btn btn-outline">
                    <span
                        id="toggleText"><?php echo ($lang == 'ru' ? 'Показать все бренды' : ($lang == 'kk' ? 'Барлық брендтерді көрсету' : 'Show all brands')); ?></span>
                    <i class="fas fa-chevron-down"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Error Codes Section -->
    <section class="error-codes" id="errors">
        <div class="container">
            <div class="section-header centered">
                <h2 class="error-section-title"><?php echo $cur['error_title']; ?></h2>
                <p class="error-section-desc"><?php echo $cur['error_subtitle']; ?></p>
            </div>

            <div class="error-grid">
                <?php foreach ($error_codes_data as $e): ?>
                    <div class="error-card">
                        <div class="error-card-header">
                            <div class="error-brand-badge"><?php echo $e['code']; ?></div>
                            <h3 class="error-brand-name"><?php echo $e['brand']; ?></h3>
                        </div>
                        <p class="error-brand-desc"><?php echo $e['desc']; ?></p>
                        <div class="error-pills-container">
                            <?php foreach ($e['pills'] as $pill): ?>
                                <a href="https://wa.me/<?php echo str_replace(['+', ' ', '(', ')', '-'], '', $phone); ?>?text=<?php echo urlencode('Здравствуйте! Моя стиральная машина ' . $e['brand'] . ' показывает ошибку ' . $pill . '. Нужен ремонт в Алматы.'); ?>" 
                                   target="_blank" class="error-pill">
                                    <?php echo $pill; ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing" id="prices">
        <div class="container">
            <div class="section-header centered">
                <h2 class="pricing-section-title"><?php echo $cur['prices_title']; ?></h2>
                <p class="pricing-section-desc"><?php echo $cur['prices_subtitle']; ?></p>
            </div>

            <div class="pricing-wrapper">
                <div class="pricing-table-container">
                    <table class="pricing-table">
                        <thead>
                            <tr>
                                <th><?php echo $cur['prices_table_service']; ?></th>
                                <th><?php echo $cur['prices_table_cost']; ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($prices_data as $cat): ?>
                                <tr class="price-cat-header">
                                    <td colspan="2"><?php echo $cat['category']; ?></td>
                                </tr>
                                <?php foreach ($cat['services'] as $s): ?>
                                    <tr>
                                        <td class="service-name-cell"><?php echo $s['name']; ?></td>
                                        <td class="service-price-cell"><strong><?php echo $s['price']; ?></strong></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div class="pricing-footer-box">
                    <p><?php echo $cur['prices_footer']; ?></p>
                </div>

                <div class="pricing-actions">
                    <a href="https://wa.me/<?php echo str_replace(['+', ' ', '(', ')', '-'], '', $phone); ?>?text=<?php echo urlencode('Здравствуйте! Хочу уточнить стоимость ремонта стиральной машины в Алматы.'); ?>" 
                       target="_blank" class="btn btn-primary btn-lg">
                        <i class="fas fa-calculator"></i> <?php echo $cur['btn_check_price']; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Locations Section -->
    <section class="locations" id="locations">
        <div class="container">
            <div class="section-header centered">
                <h2 class="loc-title"><?php echo $cur['loc_title']; ?></h2>
                <p class="loc-subtitle"><?php echo $cur['loc_subtitle']; ?></p>
            </div>

            <div class="loc-content">
                <div class="loc-group">
                    <h4 class="loc-group-title"><?php echo $cur['loc_districts_title']; ?></h4>
                    <div class="loc-pills">
                        <?php foreach ($almaty_districts[$lang] as $slug => $name): ?>
                            <a href="?district=<?php echo $slug; ?>&brand=<?php echo $current_brand; ?>&device=<?php echo $device_slug; ?>#locations" class="loc-pill <?php echo ($district_slug == $slug ? 'active' : ''); ?>">
                                <?php echo $name; ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="loc-group">
                    <h4 class="loc-group-title"><?php echo $cur['loc_region_title']; ?></h4>
                    <div class="loc-pills">
                        <?php foreach ($region_locations as $loc): ?>
                            <span class="loc-pill secondary"><?php echo $loc; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="loc-map-container">
                    <h4 class="loc-group-title centered"><?php echo $cur['loc_map_title']; ?></h4>
                    <div class="map-wrapper">
                        <!-- Real Interactive Yandex Map -->
                        <div class="map-iframe-container" style="position:relative;overflow:hidden;border-radius:24px;">
                            <iframe src="https://yandex.kz/map-widget/v1/?ll=76.883726%2C43.253018&z=11&l=map" 
                                    width="100%" height="500" frameborder="0" allowfullscreen="true" 
                                    style="position:relative;display:block;"></iframe>
                        </div>
                    </div>
                </div>

                <div class="loc-footer-card">
                    <div class="loc-footer-info">
                        <h5><i class="fas fa-question-circle"></i> <?php echo $cur['loc_footer']; ?></h5>
                        <p><?php echo $cur['loc_footer_sub']; ?></p>
                    </div>
                    <a href="<?php echo $whatsapp_url; ?>" target="_blank" class="btn btn-outline btn-whatsapp-loc">
                        <i class="fab fa-whatsapp"></i> <?php echo $cur['btn_loc_check']; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="reviews" id="reviews">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle"><?php echo $cur['nav_reviews']; ?></span>
                <h2><?php echo ($lang == 'ru' ? 'Что говорят наши клиенты' : ($lang == 'kk' ? 'Клиенттеріміз не дейді' : 'What our clients say')); ?>
                </h2>
            </div>

            <!-- Swiper Slider Wrapper -->
            <div class="reviews-slider-wrapper">
                <div class="swiper reviews-slider">
                    <div class="swiper-wrapper">
                        <?php foreach ($reviews as $review): ?>
                            <div class="swiper-slide">
                                <div class="review-card">
                                    <div class="review-header">
                                        <span class="reviewer-name"><?php echo $review['name']; ?></span>
                                        <span class="review-date"><?php echo $review['date']; ?></span>
                                    </div>
                                    <div class="rating">
                                        <?php for ($i = 0; $i < $review['rating']; $i++): ?>
                                            <i class="fas fa-star"></i>
                                        <?php endfor; ?>
                                    </div>
                                    <p class="review-text">"<?php echo $review['text']; ?>"</p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Navigation - Outside swiper for better control -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>


    <!-- Contact & Info Section -->
    <section class="contacts" id="contacts">
        <div class="container">
            <div class="contact-card">
                <div class="contact-info">
                    <h2><?php echo $cur['contact_title']; ?></h2>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h4><?php echo $cur['contact_address']; ?></h4>
                            <p><?php echo $address; ?><br><strong><?php echo $location_details; ?></strong></p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <h4><?php echo $cur['contact_hours']; ?></h4>
                            <p>
                                <?php foreach ($work_hours as $days => $hours): ?>
                                    <?php echo ($lang == 'ru' ? $days : ($lang == 'kk' ? ($days == 'Пн-Пт' ? 'Дс-Жм' : 'Сб') : ($days == 'Пн-Пт' ? 'Mon-Fri' : 'Sat'))); ?>:
                                    <?php echo $hours; ?><br>
                                <?php endforeach; ?>
                            </p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone-alt"></i>
                        <div>
                            <h4><?php echo $cur['contact_phone']; ?></h4>
                            <p><a href="tel:<?php echo str_replace([' ', '(', ')', '-'], '', $phone); ?>">
                                    <?php echo $phone; ?>
                                </a></p>
                        </div>
                    </div>
                </div>
                <div class="contact-map">
                    <div class="map-container">
                        <!-- Almaty, Rozybakieva 289/1 -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2908.123547849187!2d76.89274231215431!3d43.212393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836ec3b9c00001%3A0x7d00000000000000!2z0YPQuy4g0KDQvtC30YvQsdCw0LrQuNC10LLQsCAyODkvMSwg0JDQu9C80LDRgtGLIDA1MDAwMA!5e0!3m2!1sru!2skz!4v1700000000000!5m2!1sru!2skz"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="map-overlay">
                            <a href="https://2gis.kz/almaty/geo/70000001018567106" target="_blank"
                                class="btn btn-primary">
                                <i class="fas fa-route"></i> <?php echo $cur['2gis_btn']; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col footer-about">
                    <div class="logo" style="margin-bottom: 1.5rem;">
                        <span class="logo-accent">ALMA</span> Service <span>Pro</span>
                    </div>
                    <p><?php echo $cur['footer_about']; ?></p>
                </div>
                <div class="footer-col footer-links">
                    <h3><?php echo $cur['footer_nav_title']; ?></h3>
                    <ul>
                        <li><a href="#about"><?php echo $cur['nav_about']; ?></a></li>
                        <li><a href="#services"><?php echo $cur['nav_services']; ?></a></li>
                        <li><a href="#reviews"><?php echo $cur['nav_reviews']; ?></a></li>
                        <li><a href="#contacts"><?php echo $cur['nav_contacts']; ?></a></li>
                    </ul>
                </div>
                <div class="footer-col footer-contact">
                    <h3><?php echo $cur['footer_contact_title']; ?></h3>
                    <ul class="footer-contact-info">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span><?php echo $address; ?><br><small><?php echo $location_details; ?></small></span>
                        </li>
                        <li>
                            <i class="fas fa-phone-alt"></i>
                            <a
                                href="tel:<?php echo str_replace([' ', '(', ')', '-'], '', $phone); ?>"><?php echo $phone; ?></a>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <span>Пн-Пт: 10:00–19:00, Сб: 10:00–18:00</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy;
                    <?php echo date("Y"); ?>
                    <?php echo $company_name; ?>.
                    <?php echo ($lang == 'ru' ? 'Все права защищены' : ($lang == 'kk' ? 'Барлық құқықтар қорғалған' : 'All rights reserved')); ?>.
                    ALMA Service Pro.
                </p>
                <div class="visitor-counter">
                    <i class="fas fa-eye"></i> <?php echo $cur['visit_count']; ?>:
                    <?php echo number_format($visit_count, 0, '.', ' '); ?>
                </div>
                <div class="social-links">
                    <a href="https://wa.me/<?php echo str_replace(['+', ' ', '(', ')', '-'], '', $phone); ?>"><i
                            class="fab fa-whatsapp"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-telegram"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile Bottom Action Bar -->
    <div class="mobile-action-bar">
        <a href="tel:<?php echo str_replace([' ', '(', ')', '-'], '', $phone); ?>" class="action-bar-item call">
            <div class="action-icon-box pulse-icon">
                <i class="fas fa-phone-alt"></i>
            </div>
            <div class="action-text-group">
                <span class="action-label">
                    <?php echo ($lang == 'ru' ? 'Принимаем заказы' : ($lang == 'kk' ? 'Тапсырыс қабылдау' : 'Accepting orders')); ?>
                </span>
                <span class="action-main">
                    <?php echo ($lang == 'ru' ? 'Позвонить' : ($lang == 'kk' ? 'Қоңырау шалу' : 'Call Now')); ?>
                </span>
            </div>
        </a>
        <a href="<?php echo $whatsapp_url; ?>" target="_blank" class="action-bar-item whatsapp">
            <div class="action-icon-box">
                <i class="fab fa-whatsapp"></i>
                <div class="status-indicator">
                    <div class="status-dot"></div>
                    <span class="status-text">
                        <?php echo ($lang == 'ru' ? 'ОНЛАЙН' : ($lang == 'kk' ? 'ОНЛАЙН' : 'ONLINE')); ?>
                    </span>
                </div>
            </div>
            <div class="action-text-group">
                <span class="action-label">WhatsApp</span>
                <span class="action-main">
                    <?php echo ($lang == 'ru' ? 'Консультация' : ($lang == 'kk' ? 'Кеңес алу' : 'Consultation')); ?>
                </span>
            </div>
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>