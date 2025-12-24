<?php
/**
 * Homepage
 * Niche Society Website
 */

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/functions/helpers.php';

// Handle language switch
if (isset($_GET['lang'])) {
    setLanguage($_GET['lang']);
    redirect(SITE_URL . '/index.php');
}

// Page meta information
$pageTitle = t('home_title', 'نيش سوسايتي - خدمات الإدارة الفاخرة');
$pageDescription = t('home_description', 'نقدم حلولاً متكاملة لإدارة الممتلكات والفعاليات الفاخرة مع 25 عاماً من الخبرة في خدمة العائلات الملكية والشخصيات الرفيعة في المملكة العربية السعودية');
$pageKeywords = t('home_keywords', 'إدارة فاخرة، إدارة ممتلكات، إدارة فعاليات، بروتوكول ملكي، خدمات VIP، نيش سوسايتي');

include __DIR__ . '/includes/header.php';

generateMetaTags($pageTitle, $pageDescription, $pageKeywords, 'niche-society-homepage-1-scaled.jpg');
?>

<!-- Main Content -->
<main class="homepage">

<!-- Hero Section -->
<section class="hero-premium">
    <!-- Background Image -->
    <div class="hero-bg-container">
        <div class="hero-bg-image" style="background-image: url('<?php echo ASSETS_URL; ?>/images/niche-society-homepage-1-scaled.jpg');"></div>
        <div class="hero-gradient-overlay"></div>
        <div class="hero-pattern-overlay"></div>
    </div>
    
    <!-- Hero Content -->
    <div class="hero-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <!-- Badge -->
                    <div class="hero-premium-badge">
                        <div class="badge-line"></div>
                        <span class="badge-year">EST. 2000</span>
                        <div class="badge-line"></div>
                    </div>
                    
                    <!-- Title -->
                    <h1 class="hero-main-title">
                        <?php if (getCurrentLang() === 'ar'): ?>
                            <span class="title-line-1">إدارة <span class="text-gold">استثنائية</span></span>
                            <span class="title-line-2">لحياة <span class="text-cream">استثنائية</span></span>
                        <?php else: ?>
                            <span class="title-line-1">Exceptional <span class="text-gold">Management</span></span>
                            <span class="title-line-2">For Exceptional <span class="text-cream">Lives</span></span>
                        <?php endif; ?>
                    </h1>
                    
                    <!-- Subtitle -->
                    <p class="hero-subtitle">
                        <?php echo getCurrentLang() === 'ar'
                            ? '25 عامًا من التميز في خدمة العائلات الملكية والشخصيات الرفيعة بخصوصية تامة ومعايير لا تُضاهى'
                            : '25 Years of Excellence Serving Royal Families & Distinguished Clients with Absolute Privacy'; ?>
                    </p>
                    
                    <!-- Stats -->
                    <div class="hero-stats-premium">
                        <div class="stat-premium">
                            <div class="stat-icon"><i class="bi bi-award"></i></div>
                            <div class="stat-content">
                                <div class="stat-value">25+</div>
                                <div class="stat-text"><?php echo getCurrentLang() === 'ar' ? 'عامًا' : 'Years'; ?></div>
                            </div>
                        </div>
                        <div class="stat-separator"></div>
                        <div class="stat-premium">
                            <div class="stat-icon"><i class="bi bi-people"></i></div>
                            <div class="stat-content">
                                <div class="stat-value">500+</div>
                                <div class="stat-text"><?php echo getCurrentLang() === 'ar' ? 'عميل' : 'Clients'; ?></div>
                            </div>
                        </div>
                        <div class="stat-separator"></div>
                        <div class="stat-premium">
                            <div class="stat-icon"><i class="bi bi-star"></i></div>
                            <div class="stat-content">
                                <div class="stat-value">ISO</div>
                                <div class="stat-text"><?php echo getCurrentLang() === 'ar' ? 'معتمد' : 'Certified'; ?></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- CTA -->
                    <div class="hero-cta-premium">
                        <a href="javascript:void(0)" class="btn-premium-primary">
                            <span class="btn-text">
                                <i class="bi bi-grid-3x3"></i>
                                <?php echo getCurrentLang() === 'ar' ? 'استكشف خدماتنا' : 'Our Services'; ?>
                            </span>
                        </a>
                        <a href="javascript:void(0)" class="btn-premium-outline">
                            <span class="btn-text">
                                <i class="bi bi-envelope"></i>
                                <?php echo getCurrentLang() === 'ar' ? 'تواصل معنا' : 'Contact Us'; ?>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
                     
 

<!-- About Section -->
<section class="about-section-minimal">
    <div class="container">
        <!-- Section Header -->
        <div class="about-header" data-aos="fade-up">
            <div class="about-decorative-line"></div>
            <div class="about-badge-minimal">
                <span><?php echo getCurrentLang() === 'ar' ? 'من نحن' : 'About Us'; ?></span>
            </div>
            <div class="about-decorative-line"></div>
        </div>
        
        <!-- Main Content -->
        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
                <div class="about-main-content">
                    <h2 class="about-minimal-title">
                        <?php echo getCurrentLang() === 'ar'
                            ? 'شركة متخصصة في تقديم'
                            : 'Specialized in Providing'; ?>
                        <span class="title-emphasis">
                            <?php echo getCurrentLang() === 'ar'
                                ? 'حلول إدارية وتنظيمية استثنائية'
                                : 'Exceptional Management Solutions'; ?>
                        </span>
                    </h2>
                    
                    <div class="about-description-minimal">
                        <p class="lead-text">
                            <?php echo getCurrentLang() === 'ar'
                                ? 'نيش سوسايتي هي شركة متخصصة في تقديم حلول إدارية وتنظيمية بمعايير تعيد تعريف معنى التميز، تشمل الممتلكات الخاصة، العقارات، الإتيكيت والبروتوكولات الرسمية، اللوجستيات، العلاقات العامة، والخدمات التشغيلية الراقية.'
                                : 'Niche Society specializes in providing management and organizational solutions that redefine excellence, covering private properties, real estate, etiquette and official protocols, logistics, public relations, and premium operational services.'; ?>
                        </p>
                        <p>
                            <?php echo getCurrentLang() === 'ar'
                                ? 'بخبرة تتجاوز 25 عامًا في خدمة العائلات الملكية، الشخصيات الرفيعة، والعملاء الدوليين، نُدير العمليات ونُنسّق التفاصيل بأسلوب يجمع بين الدقة، الخصوصية، والرقي؛ لأن العملاء الاستثنائيين لا يبحثون عن خدمة، بل عن تجربة تُدار بثقة وتُنفّذ بسلاسة بشكل استثنائي يشبههم.'
                                : 'With over 25 years of experience serving royal families, distinguished personalities, and international clients, we manage operations and coordinate details with precision, privacy, and elegance.'; ?>
                        </p>
                    </div>
                    
                    <!-- CTA -->
                    <div class="about-cta-minimal">
                        <a href="javascript:void(0)" class="btn-minimal-primary">
                            <span><?php echo getCurrentLang() === 'ar' ? 'اعرف المزيد عنا' : 'Learn More About Us'; ?></span>
                            <i class="bi bi-arrow-<?php echo getCurrentLang() === 'ar' ? 'left' : 'right'; ?>"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Meet Niche Society Section -->
<section class="meet-ceo-section">
    <div class="container">
        <div class="row align-items-center g-0">
            <!-- Image Column -->
            <div class="col-lg-5" data-aos="fade-<?php echo getCurrentLang() === 'ar' ? 'left' : 'right'; ?>">
                <div class="ceo-image-wrapper">
                    <div class="ceo-decorative-border">
                        <div class="border-corner border-corner-tl"></div>
                        <div class="border-corner border-corner-tr"></div>
                        <div class="border-corner border-corner-bl"></div>
                        <div class="border-corner border-corner-br"></div>
                    </div>
                    <img src="<?php echo getImageUrl('Niche-Society-Arabic-ceo-1-661x1024.png'); ?>" 
                         alt="<?php echo getCurrentLang() === 'ar' ? 'خديجة - مؤسسة نيش سوسايتي' : 'Khadija - Founder, Niche Society'; ?>" 
                         class="ceo-portrait">
                </div>
            </div>
            
            <!-- Content Column -->
            <div class="col-lg-7" data-aos="fade-<?php echo getCurrentLang() === 'ar' ? 'right' : 'left'; ?>">
                <div class="ceo-content-wrapper">
                    <div class="ceo-section-badge">
                        <span><?php echo getCurrentLang() === 'ar' ? 'تعرف على نيش سوسايتي' : 'Get to Know Niche Society'; ?></span>
                    </div>
                    
                    <div class="ceo-story">
                        <p class="story-text"><?php echo getCurrentLang() === 'ar'
                                ? 'وُلدت نيش سوسايتي من شغفي العميق للتحدي، ورغبة لا تهدأ في ابتكار حلول عصرية تُترجم أعلى معايير الجودة والدقة.'
                                : 'Niche Society was born from my deep passion for challenges, and an unwavering desire to innovate modern solutions that translate the highest standards of quality and precision.'; ?></p>
                        
                        <p class="story-text"><?php echo getCurrentLang() === 'ar'
                                ? 'لطالما كان بناء الأنظمة، ومتابعة تفاصيل التفاصيل، وتحقيق نتائج ملموسة هو ما يُلهمني ويدفعني للاستمرار.'
                                : 'Building systems, following details of details, and achieving tangible results has always been what inspires me and drives me to continue.'; ?></p>
                        
                        <p class="story-text"><?php echo getCurrentLang() === 'ar'
                                ? 'لم يكن للمستحيل مكان في قاموسي، بل كان دافعًا لمزيد من الإصرار على تطوير المهارات، ومواكبة أحدث التقنيات، وتقديم خدمات تُلبي تطلعات العملاء وتُجسد طموحي.'
                                : 'The impossible had no place in my dictionary, but rather was a motivation for more determination to develop skills, keep up with the latest technologies, and provide services that meet clients\' aspirations and embody my ambition.'; ?></p>
                        
                        <p class="story-text"><?php echo getCurrentLang() === 'ar'
                                ? 'نيش سوسايتي ليست مجرد مشروع، بل ثمرة سنوات من التجربة، والتنوع الثقافي، والتحديات التي واجهتها خلال مسيرتي المهنية.'
                                : 'Niche Society is not just a project, but the fruit of years of experience, cultural diversity, and challenges I faced during my professional journey.'; ?></p>
                        
                        <p class="story-text"><?php echo getCurrentLang() === 'ar'
                                ? 'فقد تأسست نيش سوسايتي لتقدم خدمات ترتقي بالخصوصية، وتُعزز الإنتاجية، وتُنفذ بأعلى درجات الحرفية، بهدوء وسلاسة وأناقة لا تُخطئها العين ولا تُغفلها الحواس؛ لأن الرقي يُشعر به قبل أن يُرى.'
                                : 'Niche Society was founded to provide services that elevate privacy, enhance productivity, and are executed with the highest levels of craftsmanship, with tranquility, smoothness, and elegance that the eye cannot miss and the senses cannot overlook; because refinement is felt before it is seen.'; ?></p>
                        
                        <p class="story-closing"><?php echo getCurrentLang() === 'ar'
                                ? 'لأن ثقتكم وابتسامتكم.. هما مصدر فخرنا، وأساس قوة استمرارنا.'
                                : 'Because your trust and smile.. are the source of our pride, and the foundation of our continued strength.'; ?></p>
                    </div>
                    
                    <div class="ceo-signature">
                        <div class="signature-line"></div>
                        <h3 class="ceo-name"><?php echo getCurrentLang() === 'ar' ? 'خديجة' : 'Khadija'; ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Philosophy Section: Vision, Goals & Values -->
<section class="philosophy-section">
    <div class="philosophy-bg-pattern"></div>
    <div class="container">
        <!-- Artistic Header -->
        <div class="philosophy-header">
            <div class="philosophy-intro">
                <span class="philosophy-badge"><?php echo t('pillars_badge', 'ما يحركنا'); ?></span>
                <h2 class="philosophy-main-title"><?php echo t('philosophy_main_title', 'فلسفتنا'); ?></h2>
                <p class="philosophy-subtitle"><?php echo t('philosophy_subtitle', 'نحن لا نقدم خدمات فحسب، بل نبني إرثًا من التميز والاحترافية'); ?></p>
            </div>
        </div>
        
        <!-- Pillars Grid -->
        <div class="philosophy-grid">
            <!-- Vision - Featured Large Card -->
            <div class="philosophy-item vision-item">
                <div class="philosophy-card vision-card">
                    <div class="card-number">01</div>
                    <div class="card-corner top-left"></div>
                    <div class="card-corner bottom-right"></div>
                    <div class="philosophy-content">
                        <div class="philosophy-icon-art">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="30" cy="30" r="12" stroke="#602234" stroke-width="1.5"/>
                                <circle cx="30" cy="30" r="20" stroke="#602234" stroke-width="1" opacity="0.3"/>
                                <circle cx="30" cy="30" r="4" fill="#602234"/>
                                <line x1="30" y1="8" x2="30" y2="16" stroke="#602234" stroke-width="1.5"/>
                                <line x1="30" y1="44" x2="30" y2="52" stroke="#602234" stroke-width="1.5"/>
                                <line x1="8" y1="30" x2="16" y2="30" stroke="#602234" stroke-width="1.5"/>
                                <line x1="44" y1="30" x2="52" y2="30" stroke="#602234" stroke-width="1.5"/>
                            </svg>
                        </div>
                        <h3 class="philosophy-card-title"><?php echo t('vision_title', 'رؤيتنا'); ?></h3>
                        <div class="title-underline"></div>
                        <p class="philosophy-text">
                            <?php echo t('vision_text', 'أن نكون المرجع الأول في تقديم حلول إدارية وتنظيمية تُعيد تعريف معنى الإدارة الراقية، عبر خدمات تُنفّذ بهدوء، وتُصمّم حسب السياق، وتُدار بثقة. كما نطمح إلى تحويل كل موقع وكل دور إلى منظومة متكاملة تُجسّد الفخامة الهادئة، وتُعبر عن أصحابها، لأننا لا نُقدّم خدمات جاهزة، بل نُهندس التجربة من الصفر، ونرتقي بها إلى مستوى غير مسبوق.'); ?>
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Goals - Top Right -->
            <div class="philosophy-item goals-item">
                <div class="philosophy-card goals-card">
                    <div class="card-number">02</div>
                    <div class="card-corner top-left"></div>
                    <div class="card-corner bottom-right"></div>
                    <div class="philosophy-content">
                        <div class="philosophy-icon-art">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30 10 L34 26 L50 26 L37 37 L42 53 L30 43 L18 53 L23 37 L10 26 L26 26 Z" stroke="#602234" stroke-width="1.5" fill="none"/>
                                <circle cx="30" cy="30" r="24" stroke="#602234" stroke-width="1" opacity="0.3"/>
                            </svg>
                        </div>
                        <h3 class="philosophy-card-title"><?php echo t('goals_title', 'أهدافنا'); ?></h3>
                        <div class="title-underline"></div>
                        <p class="philosophy-text">
                            <?php echo t('goals_text', 'أن نُبسّط التعقيد، ونُعيد ترتيب المشهد بأسلوب يُضيف قيمة حقيقية لكل لحظة، وأن نُقدّم خدمات غير محدودة تشمل إدارة العمليات، التنسيق اللوجستي، تنظيم البروتوكولات، والدعم التنفيذي، من خلف الكواليس وحتى أدق التفاصيل، لنحوّل كل تجربة إلى رحلة سلسة، راقية، ومُصمّمة حسب رؤية العميل وتطلعاته.'); ?>
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Values - Bottom Right -->
            <div class="philosophy-item values-item">
                <div class="philosophy-card values-card">
                    <div class="card-number">03</div>
                    <div class="card-corner top-left"></div>
                    <div class="card-corner bottom-right"></div>
                    <div class="philosophy-content">
                        <div class="philosophy-icon-art">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="15" y="15" width="30" height="30" stroke="#602234" stroke-width="1.5"/>
                                <rect x="10" y="10" width="40" height="40" stroke="#602234" stroke-width="1" opacity="0.3"/>
                                <path d="M30 20 L38 30 L30 40 L22 30 Z" stroke="#602234" stroke-width="1.5" fill="none"/>
                                <circle cx="30" cy="30" r="3" fill="#602234"/>
                            </svg>
                        </div>
                        <h3 class="philosophy-card-title"><?php echo t('values_title', 'قيمنا'); ?></h3>
                        <div class="title-underline"></div>
                        <p class="philosophy-text">
                            <?php echo t('values_text', '١. الخصوصية: نُدير كل شيء من خلف الكواليس، باحترام تام للمساحات الشخصية، لأن الهدوء هو جوهر الفخامة، والثقة تبدأ من الصمت المدروس. ٢. الدقة: نُنفّذ كل مهمة وكأنها الأولى، ونُعامل كل تفصيلة وكأنها الأهم، لأن الإتقان ليس خيارًا، بل أسلوب عمل. ٣. الثقة: نبنيها عبر أداء لا يتغيّر، وشفافية لا تُطلب، لأن العلاقة مع نيش سوسايتي تبدأ بالاطمئنان، وتستمر بالثبات. ٤. الفخامة: ليست في الشكل، بل في الشعور. نُصمّم كل تجربة لتُشبه أصحابها، وتُعبّر عنهم، وتُقدَّم بروح راقية ولمسة محسوبة. ٥. الانسجام: كل ما في نيش سوسايتي يعمل بتناغم: الفرق، الأنظمة، والخدمات؛ لأننا لا نُدير فقط، بل نُنسّق الحياة لتتحوّل إلى تجربة استثنائية تعبر عن أصحابها.'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section-elegant">
    <div class="container">
        <!-- Section Header -->
        <div class="services-header-elegant" data-aos="fade-up">
            <span class="services-badge-elegant"><?php echo t('services_badge', 'خدماتنا'); ?></span>
            <h2 class="services-title-elegant"><?php echo t('services_title', 'حلول متكاملة لإدارة استثنائية'); ?></h2>
            <div class="services-decorative-line">
                <span class="line-dot"></span>
                <span class="line-dot"></span>
                <span class="line-dot"></span>
            </div>
        </div>
        
        <!-- Services Grid -->
        <div class="services-grid-elegant">
            <!-- Service 1: Smart Property Management -->
            <div class="service-card-elegant" data-aos="fade-up" data-aos-delay="100">
                <div class="service-image-elegant">
                    <div class="service-badge-number">01</div>
                    <img src="<?php echo getImageUrl('service-5.jpg'); ?>" alt="<?php echo t('service1_title', 'خدمات الإدارة الذكية لممتلكاتك'); ?>">
                    <div class="service-image-overlay"></div>
                </div>
                <div class="service-content-elegant">
                    <h3 class="service-title-elegant"><?php echo t('service1_title', 'خدمات الإدارة الذكية لممتلكاتك'); ?></h3>
                    <p class="service-description-elegant">
                        <?php echo t('service1_desc', 'نحوّل كل موقع إلى منظومة متكاملة تُدار بأنظمة ذكية وتُنسّق بتواصل فعّال، لتبقى على اطلاع دائم بكل التفاصيل دون عناء أو تعقيد.'); ?>
                    </p>
                    <ul class="service-features-elegant">
                        <li>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="2" width="12" height="12" stroke="#602234" stroke-width="1.5"/>
                                <path d="M5 8L7 10L11 6" stroke="#602234" stroke-width="1.5"/>
                            </svg>
                            <?php echo t('service1_feat1', 'تأسيس نظام داخلي شامل لكافة الأعمال'); ?>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="2" width="12" height="12" stroke="#602234" stroke-width="1.5"/>
                                <path d="M5 8L7 10L11 6" stroke="#602234" stroke-width="1.5"/>
                            </svg>
                            <?php echo t('service1_feat2', 'إدارة العمليات اليومية وتقييمها'); ?>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="2" width="12" height="12" stroke="#602234" stroke-width="1.5"/>
                                <path d="M5 8L7 10L11 6" stroke="#602234" stroke-width="1.5"/>
                            </svg>
                            <?php echo t('service1_feat3', 'لوحات تحكم رقمية وتقارير مخصصة'); ?>
                        </li>
                    </ul>
                    <a href="javascript:void(0)" class="service-link-elegant">
                        <span><?php echo t('learn_more', 'اعرف المزيد'); ?></span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M<?php echo getCurrentLang() === 'ar' ? '12 4L6 10L12 16' : '8 4L14 10L8 16'; ?>" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Service 2: Event Management -->
            <div class="service-card-elegant" data-aos="fade-up" data-aos-delay="200">
                <div class="service-image-elegant">
                    <div class="service-badge-number">02</div>
                    <img src="<?php echo getImageUrl('service.png'); ?>" alt="<?php echo t('service2_title', 'إدارة الفعاليات'); ?>">
                    <div class="service-image-overlay"></div>
                </div>
                <div class="service-content-elegant">
                    <h3 class="service-title-elegant"><?php echo t('service2_title', 'إدارة الفعاليات'); ?></h3>
                    <p class="service-description-elegant">
                        <?php echo t('service2_desc', 'من اللقاءات الخاصة إلى الاحتفالات الكبرى، نُصمّم الانطباع العام، ونُشرف على كل تفصيلة لتنعكس الأناقة في الجو، والخصوصية في التنفيذ.'); ?>
                    </p>
                    <ul class="service-features-elegant">
                        <li>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="2" width="12" height="12" stroke="#602234" stroke-width="1.5"/>
                                <path d="M5 8L7 10L11 6" stroke="#602234" stroke-width="1.5"/>
                            </svg>
                            <?php echo t('service2_feat1', 'تصميم تجارب متخصصة لكل نوع من الفعاليات'); ?>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="2" width="12" height="12" stroke="#602234" stroke-width="1.5"/>
                                <path d="M5 8L7 10L11 6" stroke="#602234" stroke-width="1.5"/>
                            </svg>
                            <?php echo t('service2_feat2', 'إدارة الخدمات اللوجستية بدقة وكفاءة'); ?>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="2" width="12" height="12" stroke="#602234" stroke-width="1.5"/>
                                <path d="M5 8L7 10L11 6" stroke="#602234" stroke-width="1.5"/>
                            </svg>
                            <?php echo t('service2_feat3', 'إشراف ميداني وتنسيق فريق محترف'); ?>
                        </li>
                    </ul>
                    <a href="javascript:void(0)" class="service-link-elegant">
                        <span><?php echo t('learn_more', 'اعرف المزيد'); ?></span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M<?php echo getCurrentLang() === 'ar' ? '12 4L6 10L12 16' : '8 4L14 10L8 16'; ?>" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Service 3: Protocol & Etiquette -->
            <div class="service-card-elegant" data-aos="fade-up" data-aos-delay="300">
                <div class="service-image-elegant">
                    <div class="service-badge-number">03</div>
                    <img src="<?php echo getImageUrl('service-3.jpg'); ?>" alt="<?php echo t('service3_title', 'البروتوكول وفن الإتيكيت'); ?>">
                    <div class="service-image-overlay"></div>
                </div>
                <div class="service-content-elegant">
                    <h3 class="service-title-elegant"><?php echo t('service3_title', 'البروتوكول وفن الإتيكيت'); ?></h3>
                    <p class="service-description-elegant">
                        <?php echo t('service3_desc', 'نقدم برامج استشارية وتدريبية مخصصة لتعزيز التواصل والسلوك في الإطارات الرسمية واليومية، مع التركيز على الأسلوب الشخصي والحضور الدبلوماسي.'); ?>
                    </p>
                    <ul class="service-features-elegant">
                        <li>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="2" width="12" height="12" stroke="#602234" stroke-width="1.5"/>
                                <path d="M5 8L7 10L11 6" stroke="#602234" stroke-width="1.5"/>
                            </svg>
                            <?php echo t('service3_feat1', 'برامج تدريبية لفن التواصل الدبلوماسي'); ?>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="2" width="12" height="12" stroke="#602234" stroke-width="1.5"/>
                                <path d="M5 8L7 10L11 6" stroke="#602234" stroke-width="1.5"/>
                            </svg>
                            <?php echo t('service3_feat2', 'استشارات في السلوك الرسمي والعلاقات العامة'); ?>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="2" width="12" height="12" stroke="#602234" stroke-width="1.5"/>
                                <path d="M5 8L7 10L11 6" stroke="#602234" stroke-width="1.5"/>
                            </svg>
                            <?php echo t('service3_feat3', 'تطوير الحضور والأسلوب الشخصي المهني'); ?>
                        </li>
                    </ul>
                    <a href="javascript:void(0)" class="service-link-elegant">
                        <span><?php echo t('learn_more', 'اعرف المزيد'); ?></span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M<?php echo getCurrentLang() === 'ar' ? '12 4L6 10L12 16' : '8 4L14 10L8 16'; ?>" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- View All Button -->
        <div class="services-footer-elegant" data-aos="fade-up" data-aos-delay="400">
            <a href="javascript:void(0)" class="view-all-services-btn">
                <?php echo t('view_all_services', 'عرض جميع الخدمات'); ?>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M<?php echo getCurrentLang() === 'ar' ? '15 6L9 12L15 18' : '9 6L15 12L9 18'; ?>" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                </svg>
            </a>
        </div>
    </div>
</section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
