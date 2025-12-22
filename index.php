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

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
