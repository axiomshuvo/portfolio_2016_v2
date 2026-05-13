(function () {
  'use strict';

  // ===== PRELOADER =====
  window.addEventListener('load', function () {
    var pre = document.getElementById('preloader');
    if (pre) {
      pre.classList.add('hidden');
      setTimeout(function () { pre.style.display = 'none'; }, 600);
    }
  });

  // ===== NAVBAR SCROLL =====
  var navbar = document.getElementById('navbar');
  function onScroll() {
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
    // active nav link
    var sections = document.querySelectorAll('section[id]');
    var scrollPos = window.scrollY + 100;
    sections.forEach(function (sec) {
      var top = sec.offsetTop;
      var bottom = top + sec.offsetHeight;
      var link = document.querySelector('.nav-link[href="#' + sec.id + '"]');
      if (link) {
        if (scrollPos >= top && scrollPos < bottom) {
          link.classList.add('active');
        } else {
          link.classList.remove('active');
        }
      }
    });
    // scroll-to-top
    var st = document.getElementById('scroll-top');
    if (st) {
      if (window.scrollY > 400) st.classList.add('visible');
      else st.classList.remove('visible');
    }
  }
  window.addEventListener('scroll', onScroll, { passive: true });

  // ===== HAMBURGER =====
  var hamburger = document.getElementById('hamburger');
  var navLinks = document.getElementById('nav-links');
  if (hamburger && navLinks) {
    hamburger.addEventListener('click', function () {
      hamburger.classList.toggle('open');
      navLinks.classList.toggle('open');
    });
    // close on link click
    navLinks.querySelectorAll('a').forEach(function (a) {
      a.addEventListener('click', function () {
        hamburger.classList.remove('open');
        navLinks.classList.remove('open');
      });
    });
  }

  // ===== SCROLL-TO-TOP =====
  var scrollTop = document.getElementById('scroll-top');
  if (scrollTop) {
    scrollTop.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // ===== SKILL BAR ANIMATION =====
  var skillsFired = false;
  function animateSkills() {
    if (skillsFired) return;
    var section = document.getElementById('resume');
    if (!section) return;
    var rect = section.getBoundingClientRect();
    if (rect.top < window.innerHeight - 100) {
      skillsFired = true;
      document.querySelectorAll('.skill-fill').forEach(function (el) {
        var w = el.getAttribute('data-width') || '0';
        el.style.width = w + '%';
      });
    }
  }
  window.addEventListener('scroll', animateSkills, { passive: true });
  animateSkills();

  // ===== PORTFOLIO FILTER =====
  var filterBtns = document.querySelectorAll('.filter-btn');
  var portItems = document.querySelectorAll('.port-item');
  filterBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      filterBtns.forEach(function (b) { b.classList.remove('active'); });
      btn.classList.add('active');
      var filter = btn.getAttribute('data-filter');
      portItems.forEach(function (item) {
        if (filter === 'all') {
          item.classList.remove('hidden');
        } else {
          var cats = item.getAttribute('data-category') || '';
          if (cats.split(' ').indexOf(filter) !== -1) {
            item.classList.remove('hidden');
          } else {
            item.classList.add('hidden');
          }
        }
      });
    });
  });

  // ===== LIGHTBOX =====
  var lightbox = document.getElementById('lightbox');
  var lbImg = document.getElementById('lb-img');
  var lbCaption = document.getElementById('lb-caption');
  var lbClose = document.getElementById('lb-close');

  document.querySelectorAll('[data-lightbox]').forEach(function (trigger) {
    trigger.addEventListener('click', function (e) {
      e.preventDefault();
      var src = trigger.getAttribute('href');
      var cap = trigger.getAttribute('data-caption') || '';
      lbImg.src = src;
      lbImg.alt = cap;
      lbCaption.textContent = cap;
      lightbox.classList.add('open');
      document.body.style.overflow = 'hidden';
    });
  });

  function closeLightbox() {
    lightbox.classList.remove('open');
    document.body.style.overflow = '';
    lbImg.src = '';
  }
  if (lbClose) lbClose.addEventListener('click', closeLightbox);
  lightbox.addEventListener('click', function (e) {
    if (e.target === lightbox) closeLightbox();
  });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeLightbox();
  });

  // ===== FADE-IN ON SCROLL =====
  function initFadeIns() {
    var targets = document.querySelectorAll(
      '.service-card, .port-item, .tl-item, .skill-bar-wrap, .about-grid, .contact-grid'
    );
    targets.forEach(function (el) { el.classList.add('fade-in'); });

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });

    targets.forEach(function (el) { observer.observe(el); });
  }
  if ('IntersectionObserver' in window) {
    initFadeIns();
  } else {
    // Fallback — show all immediately
    document.querySelectorAll('.fade-in').forEach(function (el) {
      el.classList.add('visible');
    });
  }

  // ===== SMOOTH SCROLL for anchor links =====
  document.querySelectorAll('a[href^="#"]').forEach(function (a) {
    a.addEventListener('click', function (e) {
      var target = document.querySelector(a.getAttribute('href'));
      if (target) {
        e.preventDefault();
        var offset = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--nav-h')) || 70;
        var top = target.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top: top, behavior: 'smooth' });
      }
    });
  });

})();
