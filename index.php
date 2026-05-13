<?php // require_once('download.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pradipta Sarker | Web Developer</title>
    <meta name="description" content="Pradipta Sarker — Web Developer &amp; Designer crafting clean, responsive, user-friendly experiences.">
    <meta name="author" content="Pradipta Sarker">
    <meta name="keywords" content="web developer, frontend, HTML, CSS, JavaScript, React, portfolio">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Fira+Code:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/modern.css">
</head>
<body>
    <div id="preloader"><div class="loader"><span></span><span></span><span></span></div></div>

    <header class="navbar" id="navbar">
        <div class="nav-container">
            <a href="#hero" class="nav-logo">PS<span class="dot">.</span></a>
            <nav>
                <ul class="nav-links" id="nav-links">
                    <li><a href="#about" class="nav-link">About</a></li>
                    <li><a href="#resume" class="nav-link">Resume</a></li>
                    <li><a href="#service" class="nav-link">Services</a></li>
                    <li><a href="#works" class="nav-link">Works</a></li>
                    <li><a href="#contact" class="nav-link">Contact</a></li>
                    <li><a href="download.php" class="btn-outline nav-cv">Resume <i class="fa fa-download"></i></a></li>
                    <li><a href="cover-letter.php" class="btn-outline nav-cv">Cover Letter <i class="fa fa-file-lines"></i></a></li>
                </ul>
                <button class="hamburger" id="hamburger" aria-label="Toggle menu">
                    <span></span><span></span><span></span>
                </button>
            </nav>
        </div>
    </header>

    <section id="hero" class="hero">
        <div class="hero-bg"><div class="hero-grid"></div></div>
        <div class="hero-content">
            <p class="hero-greeting">Hi, my name is</p>
            <h1 class="hero-name">Pradipta Sarker<span class="cursor">_</span></h1>
            <h2 class="hero-tagline">Front End Developer</h2>
            <p class="hero-desc">I'm a web developer &amp; designer who loves creating clean, responsive, and user-friendly experiences. From blank canvas to pixel-perfect production — I bring ideas to life.</p>
            <div class="hero-actions">
                <a href="#works" class="btn-primary">View My Work</a>
                <a href="#contact" class="btn-ghost">Get In Touch</a>
            </div>
        </div>
        <div class="hero-scroll"><a href="#about"><span class="scroll-line"></span><span class="scroll-dot"></span></a></div>
    </section>

    <section id="about" class="section">
        <div class="container">
            <h2 class="section-title"><span class="num">01.</span> About Me</h2>
            <div class="about-grid">
                <div class="about-text">
                    <p>I'm <strong>Pradipta Sarker</strong>, a passionate web developer and designer. I love creating new things and tackling challenging problems with thoughtful, intelligent solutions.</p>
                    <p>My core tech stack is <span class="highlight">HTML5</span>, <span class="highlight">CSS3</span>, <span class="highlight">Bootstrap</span>, <span class="highlight">JavaScript / jQuery</span>, <span class="highlight">Sass</span>, <span class="highlight">Git</span>, and <span class="highlight">Photoshop</span>.</p>
                    <p>Here are the tools and technologies from my resume stack:</p>
                    <ul class="tech-list">
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>Bootstrap</li>
                        <li>JavaScript / jQuery</li>
                        <li>Sass</li>
                        <li>Git</li>
                        <li>Photoshop</li>
                    </ul>
                </div>
                <div class="about-img-wrap">
                    <div class="about-img"><img src="img/per-intro.png" alt="Pradipta Sarker"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="resume" class="section section-alt">
        <div class="container">
            <h2 class="section-title"><span class="num">02.</span> Resume</h2>
            <div class="resume-grid">
                <div class="resume-col">
                    <h3 class="resume-col-title"><i class="fa fa-graduation-cap"></i> Education</h3>
                    <div class="timeline">
                        <div class="tl-item">
                            <div class="tl-dot"></div>
                            <div class="tl-content">
                                <span class="tl-date">Jan 2011 — Apr 2015</span>
                                <h4>B.Sc in C.S.E</h4>
                                <p class="tl-place">Daffodil International University</p>
                                <p>CGPA: 3.13</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="resume-col">
                    <h3 class="resume-col-title"><i class="fa fa-briefcase"></i> Work Experience</h3>
                    <div class="timeline">
                        <div class="tl-item">
                            <div class="tl-dot"></div>
                            <div class="tl-content">
                                <span class="tl-date">Aug 2016 — Present</span>
                                <h4>Front-End Dev</h4>
                                <p class="tl-place">Revo Interactive</p>
                                <p>Working with outside clients and solving new challenges that sharpen front-end skills. Strong hands-on experience with Git, Sass, and jQuery.</p>
                            </div>
                        </div>
                        <div class="tl-item">
                            <div class="tl-dot"></div>
                            <div class="tl-content">
                                <span class="tl-date">Jun 2016 — Jul 2016</span>
                                <h4>Jr. Web Developer</h4>
                                <p class="tl-place">BestSkillBD.com</p>
                                <p>Started the professional journey here and adapted quickly to a real office environment, improving technical and teamwork skills.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="skills-heading"><i class="fa fa-code"></i> Skills</h3>
            <div class="skills-grid">
                <div class="skill-bar-wrap"><div class="skill-label"><span>HTML5</span><span>95%</span></div><div class="skill-track"><div class="skill-fill" data-width="95"></div></div></div>
                <div class="skill-bar-wrap"><div class="skill-label"><span>CSS3</span><span>90%</span></div><div class="skill-track"><div class="skill-fill" data-width="90"></div></div></div>
                <div class="skill-bar-wrap"><div class="skill-label"><span>Bootstrap</span><span>86%</span></div><div class="skill-track"><div class="skill-fill" data-width="86"></div></div></div>
                <div class="skill-bar-wrap"><div class="skill-label"><span>JavaScript / jQuery</span><span>84%</span></div><div class="skill-track"><div class="skill-fill" data-width="84"></div></div></div>
                <div class="skill-bar-wrap"><div class="skill-label"><span>Git</span><span>85%</span></div><div class="skill-track"><div class="skill-fill" data-width="85"></div></div></div>
                <div class="skill-bar-wrap"><div class="skill-label"><span>Sass</span><span>88%</span></div><div class="skill-track"><div class="skill-fill" data-width="88"></div></div></div>
                <div class="skill-bar-wrap"><div class="skill-label"><span>Photoshop</span><span>80%</span></div><div class="skill-track"><div class="skill-fill" data-width="80"></div></div></div>
            </div>
            <div class="cv-cta">
                <a href="download.php" class="btn-primary"><i class="fa fa-download"></i> Download Resume</a>
                <a href="cover-letter.php" class="btn-ghost"><i class="fa fa-file-lines"></i> Download Cover Letter</a>
            </div>
        </div>
    </section>

    <section id="service" class="section">
        <div class="container">
            <h2 class="section-title"><span class="num">03.</span> Services</h2>
            <p class="section-sub">Nothing can substitute for just plain hard work. I stay committed and keep levelling up.</p>
            <div class="services-grid">
                <div class="service-card"><div class="service-icon"><i class="fa fa-pen-nib"></i></div><h3>Web Design</h3><p>Every project starts from a blank canvas. I craft unique, brand-aligned designs that put the user first.</p></div>
                <div class="service-card"><div class="service-icon"><i class="fa fa-code"></i></div><h3>Web Development</h3><p>Clean, standards-compliant code that works across all major browsers and is SEO-friendly.</p></div>
                <div class="service-card"><div class="service-icon"><i class="fa fa-mobile-screen"></i></div><h3>Responsive Layouts</h3><p>Mobile-first, fluid layouts that look great on every device from phones to widescreen monitors.</p></div>
                <div class="service-card"><div class="service-icon"><i class="fa-brands fa-linux"></i></div><h3>Server Configuration</h3><p>Experienced with setting up, maintaining, and troubleshooting Linux servers.</p></div>
                <div class="service-card"><div class="service-icon"><i class="fa fa-palette"></i></div><h3>UI / UX Polish</h3><p>Attention to detail in animations, spacing, and interactions to give interfaces that extra layer of quality.</p></div>
                <div class="service-card"><div class="service-icon"><i class="fa fa-magnifying-glass-chart"></i></div><h3>Performance &amp; SEO</h3><p>Optimising assets, improving Core Web Vitals, and structuring content so sites rank well and load fast.</p></div>
            </div>
        </div>
    </section>

    <section id="works" class="section section-alt">
        <div class="container">
            <h2 class="section-title"><span class="num">04.</span> Works</h2>
            <p class="section-sub">A selection of projects I've built and shipped.</p>
            <div class="filter-bar">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="design">Web Design</button>
                <button class="filter-btn" data-filter="land">Landing Page</button>
                <button class="filter-btn" data-filter="webapp">Web App</button>
                <button class="filter-btn" data-filter="ecom">E-Commerce</button>
            </div>
            <div class="portfolio-grid" id="portfolio-grid">
                <div class="port-item" data-category="land"><div class="port-img"><img src="img/work/helio-s10.jpg" alt="helio-s10" loading="lazy"><div class="port-overlay"><a href="img/work/helio-s10.jpg" class="port-zoom" data-lightbox data-caption="helio-s10 — Mobile Landing Page"><i class="fa fa-expand"></i></a><a href="http://helio-bd.com/" target="_blank" rel="noopener noreferrer" class="port-link"><i class="fa fa-arrow-up-right-from-square"></i></a></div></div><div class="port-info"><h4>helio-s10</h4><p>Mobile Landing Page</p><span class="port-tag">Landing Page</span></div></div>
                <div class="port-item" data-category="webapp"><div class="port-img"><img src="img/work/eboxtv.jpg" alt="eboxtv" loading="lazy"><div class="port-overlay"><a href="img/work/eboxtv.jpg" class="port-zoom" data-lightbox data-caption="Eboxtv — Frontend Development"><i class="fa fa-expand"></i></a><a href="http://www.myebox.tv/" target="_blank" rel="noopener noreferrer" class="port-link"><i class="fa fa-arrow-up-right-from-square"></i></a></div></div><div class="port-info"><h4>Eboxtv</h4><p>Frontend Development</p><span class="port-tag">Web App</span></div></div>
                <div class="port-item" data-category="land"><div class="port-img"><img src="img/work/helio-s25.jpg" alt="helio-s25" loading="lazy"><div class="port-overlay"><a href="img/work/helio-s25.jpg" class="port-zoom" data-lightbox data-caption="helio-s25 — Mobile Landing Page"><i class="fa fa-expand"></i></a><a href="http://helio-bd.com/helio-s25/" target="_blank" rel="noopener noreferrer" class="port-link"><i class="fa fa-arrow-up-right-from-square"></i></a></div></div><div class="port-info"><h4>helio-s25</h4><p>Mobile Landing Page</p><span class="port-tag">Landing Page</span></div></div>
                <div class="port-item" data-category="design"><div class="port-img"><img src="img/work/hireitpeople.jpg" alt="hireitpeople" loading="lazy"><div class="port-overlay"><a href="img/work/hireitpeople.jpg" class="port-zoom" data-lightbox data-caption="hireitpeople — Theme Customization"><i class="fa fa-expand"></i></a><a href="https://www.hireitpeople.com/" target="_blank" rel="noopener noreferrer" class="port-link"><i class="fa fa-arrow-up-right-from-square"></i></a></div></div><div class="port-info"><h4>hireitpeople Front-End</h4><p>Theme Customization</p><span class="port-tag">Web Design</span></div></div>
                <div class="port-item" data-category="design ecom"><div class="port-img"><img src="img/work/avakaya.jpg" alt="avakaya" loading="lazy"><div class="port-overlay"><a href="img/work/avakaya.jpg" class="port-zoom" data-lightbox data-caption="Avakaya — E-commerce Front-End"><i class="fa fa-expand"></i></a><a href="https://avakaya.com/" target="_blank" rel="noopener noreferrer" class="port-link"><i class="fa fa-arrow-up-right-from-square"></i></a></div></div><div class="port-info"><h4>Avakaya</h4><p>E-commerce Front-End</p><span class="port-tag">E-Commerce</span></div></div>
                <div class="port-item" data-category="land design"><div class="port-img"><img src="img/work/esi_ww.jpg" alt="ESI Technologies" loading="lazy"><div class="port-overlay"><a href="img/work/esi_ww.jpg" class="port-zoom" data-lightbox data-caption="ESI Technologies — Single Page Dev"><i class="fa fa-expand"></i></a><a href="http://revo-apps.com/demo/esi/Public/" target="_blank" rel="noopener noreferrer" class="port-link"><i class="fa fa-arrow-up-right-from-square"></i></a></div></div><div class="port-info"><h4>ESI Technologies</h4><p>Single Page Front-End</p><span class="port-tag">Landing Page</span></div></div>
                <div class="port-item" data-category="design land"><div class="port-img"><img src="img/work/ak_khan_water.jpg" alt="AK Khan Water Health" loading="lazy"><div class="port-overlay"><a href="img/work/ak_khan_water.jpg" class="port-zoom" data-lightbox data-caption="AK Khan Water Health — Single Page Portfolio"><i class="fa fa-expand"></i></a><a href="http://akw.axiomshuvo.com/" target="_blank" rel="noopener noreferrer" class="port-link"><i class="fa fa-arrow-up-right-from-square"></i></a></div></div><div class="port-info"><h4>AK Khan Water Health</h4><p>Single Page Portfolio</p><span class="port-tag">Landing Page</span></div></div>
                <div class="port-item" data-category="land"><div class="port-img"><img src="img/work/resort_sample.jpg" alt="Resort" loading="lazy"><div class="port-overlay"><a href="img/work/resort_sample.jpg" class="port-zoom" data-lightbox data-caption="Resort — Sample Landing Page"><i class="fa fa-expand"></i></a><a href="http://resort.axiomshuvo.com/" target="_blank" rel="noopener noreferrer" class="port-link"><i class="fa fa-arrow-up-right-from-square"></i></a></div></div><div class="port-info"><h4>Resort</h4><p>Sample Landing Page</p><span class="port-tag">Landing Page</span></div></div>
                <div class="port-item" data-category="design"><div class="port-img"><img src="img/work/h1bLottery.jpeg" alt="h1bLottery" loading="lazy"><div class="port-overlay"><a href="img/work/h1bLottery.jpeg" class="port-zoom" data-lightbox data-caption="h1bLottery — Single Page Application"><i class="fa fa-expand"></i></a><a href="http://h1blottery.com/" target="_blank" rel="noopener noreferrer" class="port-link"><i class="fa fa-arrow-up-right-from-square"></i></a></div></div><div class="port-info"><h4>h1bLottery</h4><p>Single Page Application</p><span class="port-tag">Web Design</span></div></div>
                <div class="port-item" data-category="design"><div class="port-img"><img src="img/work/newslife.jpg" alt="newslife" loading="lazy"><div class="port-overlay"><a href="img/work/newslife.jpg" class="port-zoom" data-lightbox data-caption="Newslife — Newspaper Sample Theme"><i class="fa fa-expand"></i></a><a href="http://newslife.axiomshuvo.com/" target="_blank" rel="noopener noreferrer" class="port-link"><i class="fa fa-arrow-up-right-from-square"></i></a></div></div><div class="port-info"><h4>Newslife</h4><p>Newspaper Sample Theme</p><span class="port-tag">Web Design</span></div></div>
                <div class="port-item" data-category="design"><div class="port-img"><img src="img/work/daily_shokalerkhobor.jpg" alt="shokalerkhobor24" loading="lazy"><div class="port-overlay"><a href="img/work/daily_shokalerkhobor.jpg" class="port-zoom" data-lightbox data-caption="shokalerkhobor24 — Website Frontend"><i class="fa fa-expand"></i></a><a href="http://www.shokalerkhobor24.com" target="_blank" rel="noopener noreferrer" class="port-link"><i class="fa fa-arrow-up-right-from-square"></i></a></div></div><div class="port-info"><h4>shokalerkhobor24</h4><p>Website Frontend Development</p><span class="port-tag">Web Design</span></div></div>
                <div class="port-item" data-category="webapp"><div class="port-img"><img src="img/work/desirecruiter.jpg" alt="desirecruiter" loading="lazy"><div class="port-overlay"><a href="img/work/desirecruiter.jpg" class="port-zoom" data-lightbox data-caption="Desirecruiter — Website Frontend"><i class="fa fa-expand"></i></a><a href="http://www.desirecruiter.com/" target="_blank" rel="noopener noreferrer" class="port-link"><i class="fa fa-arrow-up-right-from-square"></i></a></div></div><div class="port-info"><h4>Desirecruiter</h4><p>Website Frontend Development</p><span class="port-tag">Web App</span></div></div>
            </div>
        </div>
    </section>

    <section id="contact" class="section">
        <div class="container">
            <h2 class="section-title"><span class="num">05.</span> Get In Touch</h2>
            <p class="section-sub contact-intro">Have a project in mind or just want to say hi? My inbox is always open.</p>
            <div class="contact-grid">
                <div class="contact-info">
                    <div class="contact-links">
                        <a href="https://www.linkedin.com/in/pradiptasarkershuvo/" target="_blank" rel="noopener noreferrer" class="contact-social"><i class="fa-brands fa-linkedin-in"></i> LinkedIn</a>
                        <a href="https://github.com/axiomshuvo" target="_blank" rel="noopener noreferrer" class="contact-social"><i class="fa-brands fa-github"></i> GitHub</a>
                    </div>
                </div>
                <form class="contact-form" id="contact-form" action="" method="POST" novalidate>
                    <div class="form-row">
                        <div class="form-group"><label for="c-name">Name</label><input type="text" id="c-name" name="name" placeholder="Your Name" required autocomplete="name"></div>
                        <div class="form-group"><label for="c-email">Email</label><input type="email" id="c-email" name="email" placeholder="your@email.com" required autocomplete="email"></div>
                    </div>
                    <div class="form-group"><label for="c-subject">Subject</label><input type="text" id="c-subject" name="subject" placeholder="What's this about?"></div>
                    <div class="form-group"><label for="c-message">Message</label><textarea id="c-message" name="message" rows="5" placeholder="Tell me about your project..." required></textarea></div>
                    <button type="submit" class="btn-primary btn-full">Send Message <i class="fa fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-inner">
            <div class="footer-social">
                <a href="https://www.linkedin.com/in/pradiptasarkershuvo/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="https://github.com/axiomshuvo" target="_blank" rel="noopener noreferrer" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
            </div>
            <p class="footer-copy">Designed &amp; Built by <strong>Pradipta Sarker</strong> &copy; <?php echo date('Y'); ?></p>
        </div>
    </footer>

    <div id="lightbox" class="lightbox" role="dialog" aria-modal="true" aria-label="Image preview">
        <button class="lb-close" id="lb-close" aria-label="Close"><i class="fa fa-xmark"></i></button>
        <div class="lb-content"><img src="" alt="" id="lb-img"><p id="lb-caption"></p></div>
    </div>

    <button class="scroll-top" id="scroll-top" aria-label="Scroll to top"><i class="fa fa-chevron-up"></i></button>
    <script src="js/modern.js"></script>
</body>
</html>
