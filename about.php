<?php
/**
 * About Us Page - Niche Society
 * 
 * Company profile, CEO message, values, ISO certification,
 * team, and company history
 */

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/functions/helpers.php';

$lang = getCurrentLanguage();
$t = getTranslations($lang);
$dir = getTextDirection($lang);

$pageTitle = $lang === 'ar' ? 'من نحن - نيتش سوسيتي' : 'About Us - Niche Society';
$pageDescription = $lang === 'ar' 
    ? 'شركة نيتش سوسيتي - 25 عاماً من التميز في إدارة الممتلكات والفعاليات الملكية والخدمات الفاخرة' 
    : 'Niche Society - 25 years of excellence in royal estate management, events, and luxury services';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>" dir="<?= $dir ?>">
<head>
    <?= getMetaTags($pageTitle, $pageDescription, getCurrentUrl()) ?>
    <link rel="stylesheet" href="<?= url('assets/css/style.css') ?>">
    <?php if ($lang === 'ar'): ?>
    <link rel="stylesheet" href="<?= url('assets/css/rtl.css') ?>">
    <?php endif; ?>
</head>
<body>
    <?php include __DIR__ . '/includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="page-hero" style="background-image: linear-gradient(rgba(96, 34, 52, 0.7), rgba(96, 34, 52, 0.7)), url('<?= url('assets/images/about-hero.jpg') ?>');">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title" data-aos="fade-up">
                    <?= $lang === 'ar' ? 'من نحن' : 'About Us' ?>
                </h1>
                <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="100">
                    <?= $lang === 'ar' 
                        ? '25 عاماً من التميز في خدمة العائلات الملكية والشخصيات البارزة'
                        : '25 Years of Excellence Serving Royal Families and Distinguished Clients'
                    ?>
                </p>
                <div class="hero-stats" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-item">
                        <div class="stat-number">25+</div>
                        <div class="stat-label"><?= $lang === 'ar' ? 'عاماً من الخبرة' : 'Years of Experience' ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">ISO 9001</div>
                        <div class="stat-label"><?= $lang === 'ar' ? 'معتمد دولياً' : 'Internationally Certified' ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">100%</div>
                        <div class="stat-label"><?= $lang === 'ar' ? 'رضا العملاء' : 'Client Satisfaction' ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Overview -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="content-box">
                        <h2 class="section-title">
                            <?= $lang === 'ar' ? 'من نحن؟' : 'Who Are We?' ?>
                        </h2>
                        <div class="divider"></div>
                        <p class="lead-text">
                            <?= $lang === 'ar' 
                                ? 'نيتش سوسيتي هي شركة إدارة متخصصة في التميز التشغيلي للعقارات الخاصة والضيافة الراقية، مع <strong>25 عاماً من الخبرة</strong> في خدمة العائلات الملكية والعملاء رفيعي المستوى.'
                                : 'Niche Society is a management firm specializing in operational excellence for private estates and high-end hospitality, with <strong>25 years of experience</strong> serving royal families and high-profile clients.'
                            ?>
                        </p>
                        <p>
                            <?= $lang === 'ar'
                                ? 'تشمل خدماتنا إدارة العقارات الفاخرة، البروتوكول والإتيكيت الرسمي، الخدمات اللوجستية، العلاقات العامة، تنظيم الفعاليات، والضيافة الراقية.'
                                : 'Our services span luxury estate management, etiquette and official protocol, logistics, public relations, event management, and high-end hospitality.'
                            ?>
                        </p>
                        <div class="highlight-box">
                            <i class="bi bi-award"></i>
                            <div>
                                <h4><?= $lang === 'ar' ? 'قيمتنا الأساسية' : 'Core Value Proposition' ?></h4>
                                <p>
                                    <?= $lang === 'ar'
                                        ? 'في نيتش سوسيتي، نقدم الثقة وراحة البال لعملائنا، مع ضمان الفخامة والراحة والسرية التامة.'
                                        : 'At Niche Society, we deliver trust and peace of mind to our clients, ensuring luxury, comfort, and discretion.'
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="image-wrapper">
                        <img src="<?= url('assets/images/about-company.jpg') ?>" alt="<?= $lang === 'ar' ? 'نيتش سوسيتي' : 'Niche Society' ?>" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Philosophy -->
    <section class="section bg-cream">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title"><?= $lang === 'ar' ? 'فلسفتنا' : 'Our Philosophy' ?></h2>
                <div class="divider mx-auto"></div>
                <p class="lead-text">
                    <?= $lang === 'ar'
                        ? 'لا نقدم خدمات جاهزة؛ بل نبني علاقات مبنية على أسس راسخة'
                        : 'We don\'t provide ready-made services; instead, we build relationships based on solid foundations'
                    ?>
                </p>
            </div>
            <div class="row">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="philosophy-card">
                        <div class="icon-box">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h3><?= $lang === 'ar' ? 'الثقة' : 'Trust' ?></h3>
                        <p>
                            <?= $lang === 'ar'
                                ? 'بناء ثقة طويلة الأمد مع العملاء من خلال الشفافية والاحترافية المطلقة'
                                : 'Building long-term client confidence through transparency and absolute professionalism'
                            ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="philosophy-card">
                        <div class="icon-box">
                            <i class="bi bi-gem"></i>
                        </div>
                        <h3><?= $lang === 'ar' ? 'الفخامة الهادئة' : 'Quiet Luxury' ?></h3>
                        <p>
                            <?= $lang === 'ar'
                                ? 'تقديم الأناقة الراقية دون مظاهر مبالغ فيها، حيث الجودة تتحدث عن نفسها'
                                : 'Delivering sophisticated elegance without ostentation, where quality speaks for itself'
                            ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="philosophy-card">
                        <div class="icon-box">
                            <i class="bi bi-peace"></i>
                        </div>
                        <h3><?= $lang === 'ar' ? 'راحة البال' : 'Peace of Mind' ?></h3>
                        <p>
                            <?= $lang === 'ar'
                                ? 'إدارة كل التفاصيل حتى يتمكن العملاء من التركيز على ما يهمهم حقاً'
                                : 'Managing every detail so clients can focus on what truly matters'
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="section">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title"><?= $lang === 'ar' ? 'قيمنا الأساسية' : 'Our Core Values' ?></h2>
                <div class="divider mx-auto"></div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="bi bi-star"></i>
                        </div>
                        <h4><?= $lang === 'ar' ? 'التميز' : 'Excellence' ?></h4>
                        <p>
                            <?= $lang === 'ar'
                                ? 'نسعى للتميز في كل جانب من جوانب خدماتنا'
                                : 'We strive for excellence in every aspect of our services'
                            ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="bi bi-incognito"></i>
                        </div>
                        <h4><?= $lang === 'ar' ? 'السرية' : 'Discretion' ?></h4>
                        <p>
                            <?= $lang === 'ar'
                                ? 'بروتوكولات عالية المستوى للخصوصية والسرية التامة'
                                : 'High-level privacy and confidentiality protocols'
                            ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="bi bi-lightbulb"></i>
                        </div>
                        <h4><?= $lang === 'ar' ? 'الابتكار' : 'Innovation' ?></h4>
                        <p>
                            <?= $lang === 'ar'
                                ? 'حلول مبتكرة تواكب أحدث التطورات في مجال الإدارة'
                                : 'Innovative solutions that keep pace with the latest management developments'
                            ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="bi bi-heart"></i>
                        </div>
                        <h4><?= $lang === 'ar' ? 'النزاهة' : 'Integrity' ?></h4>
                        <p>
                            <?= $lang === 'ar'
                                ? 'الشفافية والصدق في جميع تعاملاتنا مع عملائنا'
                                : 'Transparency and honesty in all our dealings with clients'
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ISO Certification -->
    <section class="section bg-burgundy text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <h2 class="section-title text-white"><?= $lang === 'ar' ? 'الاعتماد الدولي' : 'International Certification' ?></h2>
                    <div class="divider divider-light"></div>
                    <p class="lead-text">
                        <?= $lang === 'ar'
                            ? 'نحن فخورون بحصولنا على شهادة ISO 9001:2015 لأنظمة إدارة الجودة'
                            : 'We are proud to hold ISO 9001:2015 certification for Quality Management Systems'
                        ?>
                    </p>
                    <ul class="certification-list">
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <strong><?= $lang === 'ar' ? 'رقم الشهادة:' : 'Certificate Number:' ?></strong>
                                <span>25EQQN01</span>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <strong><?= $lang === 'ar' ? 'تاريخ الإصدار:' : 'Issue Date:' ?></strong>
                                <span><?= $lang === 'ar' ? '5 نوفمبر 2025' : 'November 5, 2025' ?></span>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <strong><?= $lang === 'ar' ? 'صالحة حتى:' : 'Valid Until:' ?></strong>
                                <span><?= $lang === 'ar' ? '4 نوفمبر 2028' : 'November 4, 2028' ?></span>
                            </div>
                        </li>
                    </ul>
                    <div class="certified-services">
                        <h4><?= $lang === 'ar' ? 'الخدمات المعتمدة:' : 'Certified Services:' ?></h4>
                        <div class="services-badges">
                            <span class="badge-light"><?= $lang === 'ar' ? 'إدارة المنازل' : 'Household Management' ?></span>
                            <span class="badge-light"><?= $lang === 'ar' ? 'إدارة الممتلكات' : 'Properties Management' ?></span>
                            <span class="badge-light"><?= $lang === 'ar' ? 'تنظيم الفعاليات' : 'Events Management' ?></span>
                            <span class="badge-light"><?= $lang === 'ar' ? 'إدارة العمليات' : 'Operation Management' ?></span>
                            <span class="badge-light"><?= $lang === 'ar' ? 'الاستشارات' : 'Consultation' ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="iso-certificate-display">
                        <div class="certificate-icon">
                            <i class="bi bi-award-fill"></i>
                        </div>
                        <div class="certificate-badge">
                            <div class="badge-text">ISO 9001:2015</div>
                            <div class="badge-subtext"><?= $lang === 'ar' ? 'معتمد' : 'Certified' ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4" data-aos="fade-up">
                    <div class="mission-vision-card">
                        <div class="icon-large">
                            <i class="bi bi-eye"></i>
                        </div>
                        <h3><?= $lang === 'ar' ? 'رؤيتنا' : 'Our Vision' ?></h3>
                        <p>
                            <?= $lang === 'ar'
                                ? 'أن نكون الخيار الأول للعائلات الملكية والشخصيات البارزة في المملكة العربية السعودية والمنطقة للحصول على خدمات إدارة راقية تجمع بين التميز والسرية والابتكار.'
                                : 'To be the first choice for royal families and distinguished personalities in Saudi Arabia and the region for high-end management services that combine excellence, discretion, and innovation.'
                            ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="mission-vision-card">
                        <div class="icon-large">
                            <i class="bi bi-bullseye"></i>
                        </div>
                        <h3><?= $lang === 'ar' ? 'مهمتنا' : 'Our Mission' ?></h3>
                        <p>
                            <?= $lang === 'ar'
                                ? 'تقديم خدمات إدارة شاملة ومتكاملة تضمن الراحة والرفاهية لعملائنا، من خلال فريق محترف ومدرب على أعلى المعايير، مع الحفاظ على أعلى مستويات السرية والخصوصية.'
                                : 'To provide comprehensive and integrated management services that ensure comfort and luxury for our clients, through a professional team trained to the highest standards, while maintaining the highest levels of confidentiality and privacy.'
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Timeline -->
    <section class="section bg-cream">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title"><?= $lang === 'ar' ? 'رحلتنا' : 'Our Journey' ?></h2>
                <div class="divider mx-auto"></div>
                <p class="lead-text"><?= $lang === 'ar' ? '25 عاماً من النجاح والتطور المستمر' : '25 Years of Success and Continuous Evolution' ?></p>
            </div>
            <div class="timeline">
                <div class="timeline-item" data-aos="fade-right">
                    <div class="timeline-year">2000</div>
                    <div class="timeline-content">
                        <h4><?= $lang === 'ar' ? 'التأسيس' : 'Foundation' ?></h4>
                        <p><?= $lang === 'ar' ? 'بداية رحلتنا في خدمة العائلات الملكية' : 'Beginning our journey in serving royal families' ?></p>
                    </div>
                </div>
                <div class="timeline-item" data-aos="fade-left">
                    <div class="timeline-year">2010</div>
                    <div class="timeline-content">
                        <h4><?= $lang === 'ar' ? 'التوسع' : 'Expansion' ?></h4>
                        <p><?= $lang === 'ar' ? 'توسيع نطاق خدماتنا لتشمل إدارة الفعاليات والبروتوكول' : 'Expanding our services to include event management and protocol' ?></p>
                    </div>
                </div>
                <div class="timeline-item" data-aos="fade-right">
                    <div class="timeline-year">2020</div>
                    <div class="timeline-content">
                        <h4><?= $lang === 'ar' ? 'التحديث والابتكار' : 'Modernization & Innovation' ?></h4>
                        <p><?= $lang === 'ar' ? 'دمج التقنيات الذكية في خدماتنا' : 'Integrating smart technologies into our services' ?></p>
                    </div>
                </div>
                <div class="timeline-item" data-aos="fade-left">
                    <div class="timeline-year">2025</div>
                    <div class="timeline-content">
                        <h4><?= $lang === 'ar' ? 'الاعتماد الدولي' : 'International Certification' ?></h4>
                        <p><?= $lang === 'ar' ? 'الحصول على شهادة ISO 9001:2015' : 'Obtaining ISO 9001:2015 certification' ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Differentiators -->
    <section class="section">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title"><?= $lang === 'ar' ? 'لماذا نيتش سوسيتي؟' : 'Why Niche Society?' ?></h2>
                <div class="divider mx-auto"></div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="differentiator-card">
                        <div class="number">01</div>
                        <h4><?= $lang === 'ar' ? 'خبرة 25 عاماً' : '25 Years of Experience' ?></h4>
                        <p><?= $lang === 'ar' ? 'ربع قرن من الخبرة في خدمة النخبة' : 'A quarter century serving elite clientele' ?></p>
                    </div>
                </div>
                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="differentiator-card">
                        <div class="number">02</div>
                        <h4><?= $lang === 'ar' ? 'التخصص' : 'Specialization' ?></h4>
                        <p><?= $lang === 'ar' ? 'التركيز على التميز التشغيلي في البيئات الفاخرة' : 'Focus on operational excellence in luxury environments' ?></p>
                    </div>
                </div>
                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="differentiator-card">
                        <div class="number">03</div>
                        <h4><?= $lang === 'ar' ? 'السرية التامة' : 'Complete Discretion' ?></h4>
                        <p><?= $lang === 'ar' ? 'بروتوكولات عالية المستوى للخصوصية والسرية' : 'High-level privacy and confidentiality protocols' ?></p>
                    </div>
                </div>
                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="differentiator-card">
                        <div class="number">04</div>
                        <h4><?= $lang === 'ar' ? 'خدمات شاملة' : 'Comprehensive Services' ?></h4>
                        <p><?= $lang === 'ar' ? 'حلول إدارية متكاملة من البداية إلى النهاية' : 'End-to-end management solutions' ?></p>
                    </div>
                </div>
                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="differentiator-card">
                        <div class="number">05</div>
                        <h4><?= $lang === 'ar' ? 'معايير الجودة' : 'Quality Standards' ?></h4>
                        <p><?= $lang === 'ar' ? 'عمليات معتمدة بشهادة ISO 9001:2015' : 'ISO 9001:2015 certified operations' ?></p>
                    </div>
                </div>
                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="differentiator-card">
                        <div class="number">06</div>
                        <h4><?= $lang === 'ar' ? 'فريق محترف' : 'Professional Team' ?></h4>
                        <p><?= $lang === 'ar' ? 'خبراء مدربون على أعلى المعايير العالمية' : 'Experts trained to the highest international standards' ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Target Clientele -->
    <section class="section bg-cream">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title"><?= $lang === 'ar' ? 'عملاؤنا' : 'Our Clientele' ?></h2>
                <div class="divider mx-auto"></div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="clientele-card">
                        <i class="bi bi-gem"></i>
                        <h4><?= $lang === 'ar' ? 'العائلات الملكية' : 'Royal Families' ?></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="clientele-card">
                        <i class="bi bi-person-badge"></i>
                        <h4><?= $lang === 'ar' ? 'الشخصيات البارزة' : 'High-Profile Individuals' ?></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="clientele-card">
                        <i class="bi bi-building"></i>
                        <h4><?= $lang === 'ar' ? 'أصحاب العقارات الخاصة' : 'Private Estate Owners' ?></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="clientele-card">
                        <i class="bi bi-hotel"></i>
                        <h4><?= $lang === 'ar' ? 'أماكن الضيافة الفاخرة' : 'Luxury Hospitality Venues' ?></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="500">
                    <div class="clientele-card">
                        <i class="bi bi-bank"></i>
                        <h4><?= $lang === 'ar' ? 'المؤسسات التعليمية' : 'Educational Institutions' ?></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="600">
                    <div class="clientele-card">
                        <i class="bi bi-globe"></i>
                        <h4><?= $lang === 'ar' ? 'الجهات الدبلوماسية' : 'Diplomatic Entities' ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section cta-section bg-burgundy text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0" data-aos="fade-right">
                    <h2 class="text-white"><?= $lang === 'ar' ? 'هل تبحث عن خدمات إدارة راقية؟' : 'Looking for Premium Management Services?' ?></h2>
                    <p class="lead-text">
                        <?= $lang === 'ar'
                            ? 'تواصل معنا اليوم واكتشف كيف يمكننا مساعدتك'
                            : 'Contact us today and discover how we can help you'
                        ?>
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end" data-aos="fade-left">
                    <a href="<?= url('contact.php') ?>" class="btn btn-light btn-lg">
                        <?= $lang === 'ar' ? 'تواصل معنا' : 'Contact Us' ?>
                        <i class="bi bi-<?= $dir === 'rtl' ? 'arrow-left' : 'arrow-right' ?>"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });
    </script>
    <script src="<?= url('assets/js/main.js') ?>"></script>
</body>
</html>
