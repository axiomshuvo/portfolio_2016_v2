# Pradipta Sarker — Personal Portfolio

A modern personal portfolio website showcasing my work, skills, and experience as a web developer and designer.

🌐 **Live:** [axiomshuvo.com](http://www.axiomshuvo.com)

---

## About

This is the source code for my personal portfolio site — rebuilt with a modern dark developer aesthetic. It highlights my projects, professional timeline, technical skills, and contact information.

---

## Sections

| Section | Description |
|---|---|
| **Hero** | Introduction with animated text and CTA |
| **About** | Bio, tech stack, and a quick summary of who I am |
| **Resume** | Education timeline, work experience, and animated skill bars |
| **Services** | What I offer: web design, development, responsive layouts, server config |
| **Works** | Filterable project grid with lightbox preview and live site links |
| **Contact** | Contact form and social media links |

---

## Tech Stack

- **HTML5** — semantic, accessible markup
- **CSS3** — custom properties, CSS Grid, Flexbox, animations
- **Vanilla JavaScript** — no jQuery, no framework
- **PHP** — server-side rendering, copyright year, vCard download
- **Font Awesome 6** — icons
- **Google Fonts** — Inter + Fira Code

---

## Features

- 🌑 Dark theme with teal accent (`#64ffda`)
- 📱 Fully responsive — mobile-first with hamburger navigation
- ⚡ Animated skill progress bars (triggered on scroll)
- 🖼 Built-in lightbox for portfolio image previews
- 🎯 Portfolio filter by category (Web Design, Landing Page, Web App, E-Commerce)
- 🔄 Scroll-activated fade-in animations via `IntersectionObserver`
- 🔝 Scroll-to-top button
- 🚀 Zero external JS dependencies

---

## Project Structure

```
portfolio_2016_v2/
├── index.php           # Main entry point
├── download.php        # vCard download handler
├── style.css           # Legacy styles (kept for reference)
├── css/
│   └── modern.css      # Primary modern stylesheet
├── js/
│   └── modern.js       # All interactive JS (vanilla)
├── img/
│   ├── per-intro.png   # Profile photo
│   ├── favicon/        # Favicon assets
│   └── work/           # Portfolio screenshots
├── lib/                # Legacy third-party libraries
└── file/               # Downloadable assets (vCard, CV)
```

---

## Getting Started

This is a static PHP site. You need a PHP-capable local server to run it.

**With PHP CLI:**
```bash
php -S localhost:8000
```

**With MAMP / XAMPP / Laragon:**  
Drop the folder into your server's `htdocs` / `www` directory and open in a browser.

---

## Projects Showcased

| Project | Category | Description |
|---|---|---|
| helio-s10 | Landing Page | Mobile product landing page |
| Eboxtv | Web App | Frontend development |
| helio-s25 | Landing Page | Mobile product landing page |
| hireitpeople | Web Design | Theme customization |
| Avakaya | E-Commerce | E-commerce frontend |
| ESI Technologies | Landing Page | Single page frontend |
| AK Khan Water Health | Landing Page | Single page portfolio |
| Resort Sample | Landing Page | Sample landing page |
| h1bLottery | Web Design | Single page application |
| Newslife | Web Design | Newspaper sample theme |
| shokalerkhobor24 | Web Design | Website frontend |
| Desirecruiter | Web App | Website frontend |

---

## Connect

- 🐦 [Twitter](https://twitter.com/Axiom_shuvo)
- 💼 [LinkedIn](https://www.linkedin.com/in/pradiptasarkershuvo/)
- 🐙 [GitHub](https://github.com/Axiom-shuvo)
- 📘 [Facebook](https://www.facebook.com/sarkar.shuvo)

---

## License

MIT — see [LICENSE](LICENSE) for details.
