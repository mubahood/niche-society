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
                        <a href="<?php echo url('services.php'); ?>" class="btn-premium-primary">
                            <span class="btn-text">
                                <i class="bi bi-grid-3x3"></i>
                                <?php echo getCurrentLang() === 'ar' ? 'استكشف خدماتنا' : 'Our Services'; ?>
                            </span>
                        </a>
                        <a href="<?php echo url('contact.php'); ?>" class="btn-premium-outline">
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
                        <a href="<?php echo url('contact.php'); ?>" class="btn-premium-outline">
                            <span class="btn-text"><?php echo getCurrentLang() === 'ar' ? 'ابدأ المحادثة' : 'Start a Conversation'; ?></span>
                            <span class="btn-icon"><i class="bi bi-envelope"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Decorative Elements -->
    <div class="hero-decorative-line hero-line-left"></div>
    <div class="hero-decorative-line hero-line-right"></div>
    
    <!-- Scroll Indicator -->
    <div class="hero-scroll-indicator" data-aos="fade-up" data-aos-delay="700">
        <div class="scroll-text"><?php echo getCurrentLang() === 'ar' ? 'اكتشف المزيد' : 'Discover More'; ?></div>
        <div class="scroll-arrow">
            <i class="bi bi-chevron-down"></i>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section py-5 bg-light">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-<?php echo getCurrentLang() === 'ar' ? 'left' : 'right'; ?>">
                <img src="<?php echo getImageUrl('niche-society-homepage-1-scaled.jpg'); ?>" 
                     alt="<?php echo getCurrentLang() === 'ar' ? 'نيش سوسايتي' : 'Niche Society'; ?>" 
                     class="img-fluid rounded-4 shadow-lg">
            </div>
            <div class="col-lg-6" data-aos="fade-<?php echo getCurrentLang() === 'ar' ? 'right' : 'left'; ?>">
                <span class="badge bg-primary-subtle text-primary px-3 py-2 mb-3">
                    <?php echo getCurrentLang() === 'ar' ? 'من نحن؟' : 'Who We Are'; ?>
                </span>
                <h2 class="display-5 fw-bold mb-4 text-navy">
                    <?php echo getCurrentLang() === 'ar'
                        ? 'شركة متخصصة في تقديم حلول إدارية وتنظيمية استثنائية'
                        : 'Specialized in Providing Exceptional Management Solutions'; ?>
                </h2>
                <p class="lead text-muted mb-4">
                    <?php echo getCurrentLang() === 'ar'
                        ? 'نيش سوسايتي هي شركة متخصصة في تقديم حلول إدارية وتنظيمية بمعايير تعيد تعريف معنى التميز، تشمل الممتلكات الخاصة، العقارات، الإتيكيت والبروتوكولات الرسمية، اللوجستيات، العلاقات العامة، والخدمات التشغيلية الراقية.'
                        : 'Niche Society specializes in providing management and organizational solutions that redefine excellence, covering private properties, real estate, etiquette and official protocols, logistics, public relations, and premium operational services.'; ?>
                </p>
                <p class="text-muted mb-4">
                    <?php echo getCurrentLang() === 'ar'
                        ? 'بخبرة تتجاوز 25 عامًا في خدمة العائلات الملكية، الشخصيات الرفيعة، والعملاء الدوليين، نُدير العمليات ونُنسّق التفاصيل بأسلوب يجمع بين الدقة، الخصوصية، والرقي؛ لأن العملاء الاستثنائيين لا يبحثون عن خدمة، بل عن تجربة تُدار بثقة وتُنفّذ بسلاسة بشكل استثنائي يشبههم.'
                        : 'With over 25 years of experience serving royal families, distinguished personalities, and international clients, we manage operations and coordinate details with precision, privacy, and elegance, because exceptional clients seek not just service, but an experience managed with confidence and executed seamlessly in an exceptional manner that reflects them.'; ?>
                </p>
                <a href="<?php echo url('about.php'); ?>" class="btn btn-primary btn-lg">
                    <i class="bi bi-arrow-<?php echo getCurrentLang() === 'ar' ? 'left' : 'right'; ?> me-2"></i>
                    <?php echo getCurrentLang() === 'ar' ? 'اعرف المزيد عنا' : 'Learn More About Us'; ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission Section -->
<section class="vision-mission-section py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6" data-aos="fade-up">
                <div class="card border-0 shadow-sm h-100 hover-lift">
                    <div class="card-body p-5">
                        <div class="icon-box bg-primary-subtle text-primary rounded-circle p-3 mb-4 d-inline-flex">
                            <i class="bi bi-eye fs-3"></i>
                        </div>
                        <h3 class="fw-bold mb-3 text-navy">
                            <?php echo getCurrentLang() === 'ar' ? 'رؤيتنا' : 'Our Vision'; ?>
                        </h3>
                        <p class="text-muted mb-0">
                            <?php echo getCurrentLang() === 'ar'
                                ? 'أن نكون المرجع الأول في تقديم حلول إدارية وتنظيمية تُعيد تعريف معنى الإدارة الراقية، عبر خدمات تُنفّذ بهدوء، وتُصمّم حسب السياق، وتُدار بثقة. كما نطمح إلى تحويل كل موقع وكل دور إلى منظومة متكاملة تُجسّد الفخامة الهادئة، وتُعبر عن أصحابها، لأننا لا نُقدّم خدمات جاهزة، بل نُهندس التجربة من الصفر، ونرتقي بها إلى مستوى غير مسبوق.'
                                : 'To be the first reference in providing management and organizational solutions that redefine refined management, through services executed quietly, designed according to context, and managed with confidence. We aspire to transform every site and role into an integrated system embodying quiet luxury and reflecting its owners, because we do not offer ready-made services, but engineer the experience from scratch, elevating it to an unprecedented level.'; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100 hover-lift">
                    <div class="card-body p-5">
                        <div class="icon-box bg-burgundy-subtle text-burgundy rounded-circle p-3 mb-4 d-inline-flex">
                            <i class="bi bi-bullseye fs-3"></i>
                        </div>
                        <h3 class="fw-bold mb-3 text-navy">
                            <?php echo getCurrentLang() === 'ar' ? 'أهدافنا' : 'Our Goals'; ?>
                        </h3>
                        <p class="text-muted mb-0">
                            <?php echo getCurrentLang() === 'ar'
                                ? 'أن نُبسّط التعقيد، ونُعيد ترتيب المشهد بأسلوب يُضيف قيمة حقيقية لكل لحظة، وأن نُقدّم خدمات غير محدودة تشمل إدارة العمليات، التنسيق اللوجستي، تنظيم البروتوكولات، والدعم التنفيذي، من خلف الكواليس وحتى أدق التفاصيل، لنحوّل كل تجربة إلى رحلة سلسة، راقية، ومُصمّمة حسب رؤية العميل وتطلعاته.'
                                : 'To simplify complexity and reorganize the scene in a way that adds real value to every moment, and to provide unlimited services including operations management, logistics coordination, protocol organization, and executive support, from behind the scenes to the finest details, transforming every experience into a seamless, refined journey designed according to the client\'s vision and aspirations.'; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="values-section py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="badge bg-primary-subtle text-primary px-3 py-2 mb-3">
                <?php echo getCurrentLang() === 'ar' ? 'قيمنا' : 'Our Values'; ?>
            </span>
            <h2 class="display-5 fw-bold mb-3 text-navy">
                <?php echo getCurrentLang() === 'ar'
                    ? 'المبادئ التي نعمل بها'
                    : 'The Principles We Work By'; ?>
            </h2>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">
                <?php echo getCurrentLang() === 'ar'
                    ? 'في عالمنا، التفاصيل ليست إضافات.. هي البنية التحتية للرقي'
                    : 'In our world, details are not additions.. they are the infrastructure of elegance'; ?>
            </p>
        </div>

        <div class="row g-4">
            <?php
            $values = [
                [
                    'number' => '١',
                    'title_ar' => 'الخصوصية',
                    'title_en' => 'Privacy',
                    'description_ar' => 'نُدير كل شيء من خلف الكواليس، باحترام تام للمساحات الشخصية، لأن الهدوء هو جوهر الفخامة، والثقة تبدأ من الصمت المدروس.',
                    'description_en' => 'We manage everything from behind the scenes, with full respect for personal spaces, because tranquility is the essence of luxury, and trust begins with deliberate silence.',
                    'icon' => 'shield-check'
                ],
                [
                    'number' => '٢',
                    'title_ar' => 'الدقة',
                    'title_en' => 'Precision',
                    'description_ar' => 'نُنفّذ كل مهمة وكأنها الأولى، ونُعامل كل تفصيلة وكأنها الأهم، لأن الإتقان ليس خيارًا، بل أسلوب عمل.',
                    'description_en' => 'We execute every task as if it were the first, and treat every detail as if it were the most important, because perfection is not an option, but a way of working.',
                    'icon' => 'bullseye'
                ],
                [
                    'number' => '٣',
                    'title_ar' => 'الثقة',
                    'title_en' => 'Trust',
                    'description_ar' => 'نبنيها عبر أداء لا يتغيّر، وشفافية لا تُطلب، لأن العلاقة مع نيش سوسايتي تبدأ بالاطمئنان، وتستمر بالثبات.',
                    'description_en' => 'We build it through unwavering performance and unprompted transparency, because the relationship with Niche Society begins with reassurance and continues with consistency.',
                    'icon' => 'hand-thumbs-up'
                ],
                [
                    'number' => '٤',
                    'title_ar' => 'الفخامة',
                    'title_en' => 'Luxury',
                    'description_ar' => 'ليست في الشكل، بل في الشعور. نُصمّم كل تجربة لتُشبه أصحابها، وتُعبّر عنهم، وتُقدَّم بروح راقية ولمسة محسوبة.',
                    'description_en' => 'Not in form, but in feeling. We design every experience to resemble its owners, express them, and be delivered with a refined spirit and calculated touch.',
                    'icon' => 'gem'
                ],
                [
                    'number' => '٥',
                    'title_ar' => 'الانسجام',
                    'title_en' => 'Harmony',
                    'description_ar' => 'كل ما في نيش سوسايتي يعمل بتناغم: الفرق، الأنظمة، والخدمات؛ لأننا لا نُدير فقط، بل نُنسّق الحياة لتتحوّل إلى تجربة استثنائية تعبر عن أصحابها.',
                    'description_en' => 'Everything at Niche Society works in harmony: teams, systems, and services; because we don\'t just manage, but coordinate life to transform it into an exceptional experience that reflects its owners.',
                    'icon' => 'infinity'
                ]
            ];

            foreach ($values as $index => $value):
            ?>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                <div class="value-card card border-0 shadow-sm h-100 hover-lift">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start mb-3">
                            <div class="value-number text-burgundy fw-bold display-4 me-3">
                                <?php echo $value['number']; ?>
                            </div>
                            <div class="flex-grow-1">
                                <h4 class="fw-bold mb-2 text-navy">
                                    <?php echo getCurrentLang() === 'ar' ? $value['title_ar'] : $value['title_en']; ?>
                                </h4>
                                <i class="bi bi-<?php echo $value['icon']; ?> text-primary fs-4"></i>
                            </div>
                        </div>
                        <p class="text-muted mb-0">
                            <?php echo getCurrentLang() === 'ar' ? $value['description_ar'] : $value['description_en']; ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="badge bg-primary-subtle text-primary px-3 py-2 mb-3">
                <?php echo getCurrentLang() === 'ar' ? 'خدماتنا' : 'Our Services'; ?>
            </span>
            <h2 class="display-5 fw-bold mb-3 text-navy">
                <?php echo getCurrentLang() === 'ar'
                    ? 'حلول شاملة لإدارة متكاملة'
                    : 'Comprehensive Solutions for Integrated Management'; ?>
            </h2>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">
                <?php echo getCurrentLang() === 'ar'
                    ? 'نقدم مجموعة متكاملة من الخدمات التي تغطي جميع جوانب الإدارة الفاخرة'
                    : 'We offer a comprehensive range of services covering all aspects of luxury management'; ?>
            </p>
        </div>

        <?php
        // Get featured services from database
        $services = getAllServices(true);
        
        if (!empty($services)):
        ?>
        <div class="row g-4 mb-5">
            <?php foreach (array_slice($services, 0, 6) as $index => $service): ?>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                <div class="service-card card border-0 shadow-sm h-100 hover-lift">
                    <?php if ($service['image']): ?>
                    <img src="<?php echo getImageUrl($service['image']); ?>" 
                         class="card-img-top" 
                         alt="<?php echo getCurrentLang() === 'ar' ? $service['title_ar'] : $service['title_en']; ?>">
                    <?php endif; ?>
                    <div class="card-body p-4">
                        <?php if ($service['icon']): ?>
                        <div class="service-icon text-primary mb-3">
                            <i class="<?php echo $service['icon']; ?> fs-1"></i>
                        </div>
                        <?php endif; ?>
                        <h3 class="h4 fw-bold mb-3 text-navy">
                            <?php echo getCurrentLang() === 'ar' ? $service['title_ar'] : $service['title_en']; ?>
                        </h3>
                        <p class="text-muted mb-4">
                            <?php echo getCurrentLang() === 'ar' 
                                ? truncate($service['description_ar'], 150) 
                                : truncate($service['description_en'], 150); ?>
                        </p>
                        <a href="<?php echo url('services.php#' . $service['slug']); ?>" 
                           class="btn btn-outline-primary">
                            <?php echo getCurrentLang() === 'ar' ? 'اعرف المزيد' : 'Learn More'; ?>
                            <i class="bi bi-arrow-<?php echo getCurrentLang() === 'ar' ? 'left' : 'right'; ?> ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <div class="text-center" data-aos="fade-up">
            <a href="<?php echo url('services.php'); ?>" class="btn btn-primary btn-lg px-5 py-3">
                <?php echo getCurrentLang() === 'ar' ? 'جميع الخدمات' : 'All Services'; ?>
                <i class="bi bi-arrow-<?php echo getCurrentLang() === 'ar' ? 'left' : 'right'; ?> ms-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="team-section py-5 bg-light">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5" data-aos="fade-<?php echo getCurrentLang() === 'ar' ? 'left' : 'right'; ?>">
                <img src="<?php echo getImageUrl('TEAM-scaled.jpg'); ?>" 
                     alt="<?php echo getCurrentLang() === 'ar' ? 'فريق نيش سوسايتي' : 'Niche Society Team'; ?>" 
                     class="img-fluid rounded-4 shadow-lg">
            </div>
            <div class="col-lg-7" data-aos="fade-<?php echo getCurrentLang() === 'ar' ? 'right' : 'left'; ?>">
                <span class="badge bg-primary-subtle text-primary px-3 py-2 mb-3">
                    <?php echo getCurrentLang() === 'ar' ? 'فريقنا' : 'Our Team'; ?>
                </span>
                <h2 class="display-5 fw-bold mb-4 text-navy">
                    <?php echo getCurrentLang() === 'ar'
                        ? 'تعرفوا على فريق نيش سوسايتي'
                        : 'Meet the Niche Society Team'; ?>
                </h2>
                <p class="lead text-muted mb-4">
                    <?php echo getCurrentLang() === 'ar'
                        ? 'في نيش سوسايتي، الفريق ليس مجرد أسماء في الهيكل الإداري، بل هو العقل المدبر وراء كل تجربة مُتقنة، واليد الخفية التي تُنسّق التفاصيل قبل أن تُطلب.'
                        : 'At Niche Society, the team is not just names in the organizational structure, but the mastermind behind every perfected experience, and the hidden hand that coordinates details before they are requested.'; ?>
                </p>
                <p class="text-muted mb-4">
                    <?php echo getCurrentLang() === 'ar'
                        ? 'كل فرد يحمل خبرة متعددة في الحلول الإدارية، التنظيمية، والتقنية عبر مجالات تشمل إدارة الممتلكات، العقارات، البروتوكولات الرسمية، اللوجستيات، العلاقات العامة، والخدمات التشغيلية الراقية.'
                        : 'Each member carries diverse experience in management, organizational, and technical solutions across fields including property management, real estate, official protocols, logistics, public relations, and premium operational services.'; ?>
                </p>
                <p class="text-muted mb-4">
                    <?php echo getCurrentLang() === 'ar'
                        ? 'نُجيد فن الإنصات لما لا يُقال، ونفهم ما يبحث عنه أصحاب الذوق الرفيع دون أن يُطلب. نحن لا نُدير فقط، بل نُهندس الراحة، نُنسّق الخصوصية، ونُقدّم تجربة تُشبه أصحابها في رقيّها، دقتها، وهدوئها.'
                        : 'We master the art of listening to what is not said, and understand what refined taste seekers look for without being asked. We don\'t just manage, but engineer comfort, coordinate privacy, and deliver an experience that reflects its owners in its elegance, precision, and tranquility.'; ?>
                </p>
                <a href="<?php echo url('about.php#team'); ?>" class="btn btn-primary btn-lg">
                    <?php echo getCurrentLang() === 'ar' ? 'تعرف على الفريق' : 'Meet the Team'; ?>
                    <i class="bi bi-arrow-<?php echo getCurrentLang() === 'ar' ? 'left' : 'right'; ?> ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<?php
$testimonials = getRandomTestimonials(3);
if (!empty($testimonials)):
?>
<section class="testimonials-section py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="badge bg-primary-subtle text-primary px-3 py-2 mb-3">
                <?php echo getCurrentLang() === 'ar' ? 'آراء العملاء' : 'Client Testimonials'; ?>
            </span>
            <h2 class="display-5 fw-bold mb-3 text-navy">
                <?php echo getCurrentLang() === 'ar'
                    ? 'ماذا يقول عملاؤنا'
                    : 'What Our Clients Say'; ?>
            </h2>
        </div>

        <div class="row g-4">
            <?php foreach ($testimonials as $index => $testimonial): ?>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                <div class="testimonial-card card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <i class="bi bi-quote text-primary" style="font-size: 3rem;"></i>
                        </div>
                        <p class="testimonial-text mb-4">
                            <?php echo getCurrentLang() === 'ar' ? $testimonial['testimonial_ar'] : $testimonial['testimonial_en']; ?>
                        </p>
                        <div class="d-flex align-items-center">
                            <?php if ($testimonial['client_photo']): ?>
                            <img src="<?php echo getImageUrl($testimonial['client_photo']); ?>" 
                                 alt="<?php echo getCurrentLang() === 'ar' ? $testimonial['client_name_ar'] : $testimonial['client_name_en']; ?>" 
                                 class="rounded-circle me-3" 
                                 width="60" height="60">
                            <?php endif; ?>
                            <div>
                                <h5 class="mb-1 fw-bold">
                                    <?php echo getCurrentLang() === 'ar' ? $testimonial['client_name_ar'] : $testimonial['client_name_en']; ?>
                                </h5>
                                <p class="text-muted small mb-0">
                                    <?php echo getCurrentLang() === 'ar' ? $testimonial['client_position_ar'] : $testimonial['client_position_en']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Latest Blog Posts Section -->
<?php
$recentPosts = getRecentBlogPosts(3);
if (!empty($recentPosts)):
?>
<section class="blog-section py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="badge bg-primary-subtle text-primary px-3 py-2 mb-3">
                <?php echo getCurrentLang() === 'ar' ? 'المدونة' : 'Blog'; ?>
            </span>
            <h2 class="display-5 fw-bold mb-3 text-navy">
                <?php echo getCurrentLang() === 'ar'
                    ? 'أحدث المقالات'
                    : 'Latest Articles'; ?>
            </h2>
        </div>

        <div class="row g-4 mb-4">
            <?php foreach ($recentPosts as $index => $post): ?>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                <article class="blog-card card border-0 shadow-sm h-100 hover-lift">
                    <?php if ($post['featured_image']): ?>
                    <img src="<?php echo getImageUrl($post['featured_image']); ?>" 
                         class="card-img-top" 
                         alt="<?php echo getCurrentLang() === 'ar' ? $post['title_ar'] : $post['title_en']; ?>">
                    <?php endif; ?>
                    <div class="card-body p-4">
                        <?php if ($post['category']): ?>
                        <span class="badge bg-primary-subtle text-primary mb-2">
                            <?php echo $post['category']; ?>
                        </span>
                        <?php endif; ?>
                        <h3 class="h5 fw-bold mb-3">
                            <a href="<?php echo url('blog-single.php?slug=' . $post['slug']); ?>" 
                               class="text-decoration-none text-navy hover-primary">
                                <?php echo getCurrentLang() === 'ar' ? $post['title_ar'] : $post['title_en']; ?>
                            </a>
                        </h3>
                        <p class="text-muted mb-3">
                            <?php echo getCurrentLang() === 'ar' 
                                ? truncate($post['excerpt_ar'], 100) 
                                : truncate($post['excerpt_en'], 100); ?>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="bi bi-calendar3 me-1"></i>
                                <?php echo formatDate($post['published_at'], getCurrentLang()); ?>
                            </small>
                            <a href="<?php echo url('blog-single.php?slug=' . $post['slug']); ?>" 
                               class="btn btn-sm btn-outline-primary">
                                <?php echo getCurrentLang() === 'ar' ? 'اقرأ المزيد' : 'Read More'; ?>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center" data-aos="fade-up">
            <a href="<?php echo url('blog.php'); ?>" class="btn btn-primary btn-lg">
                <?php echo getCurrentLang() === 'ar' ? 'جميع المقالات' : 'All Articles'; ?>
                <i class="bi bi-arrow-<?php echo getCurrentLang() === 'ar' ? 'left' : 'right'; ?> ms-2"></i>
            </a>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- CTA Section -->
<section class="cta-section py-5 bg-burgundy text-white">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8" data-aos="zoom-in">
                <h2 class="display-4 fw-bold mb-4">
                    <?php echo getCurrentLang() === 'ar'
                        ? 'هل أنتم مستعدون لتجربة إدارة استثنائية؟'
                        : 'Are You Ready for an Exceptional Management Experience?'; ?>
                </h2>
                <p class="lead mb-5">
                    <?php echo getCurrentLang() === 'ar'
                        ? 'تواصلوا معنا اليوم لنبدأ رحلة تحويل ممتلكاتكم وفعالياتكم إلى تجارب استثنائية'
                        : 'Contact us today to begin transforming your properties and events into exceptional experiences'; ?>
                </p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="<?php echo url('contact.php'); ?>" class="btn btn-light btn-lg px-5 py-3">
                        <i class="bi bi-envelope me-2"></i>
                        <?php echo getCurrentLang() === 'ar' ? 'تواصل معنا' : 'Contact Us'; ?>
                    </a>
                    <a href="<?php echo url('services.php'); ?>" class="btn btn-outline-light btn-lg px-5 py-3">
                        <i class="bi bi-grid-3x3-gap me-2"></i>
                        <?php echo getCurrentLang() === 'ar' ? 'اكتشف خدماتنا' : 'Explore Services'; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
