document.addEventListener("DOMContentLoaded", () => {
  /* ==========================================================================
     Intersection Observer for "Fuwatto" Fade-up Animations
     ========================================================================== */
  const fadeElements = document.querySelectorAll(".js-fade-up");
  const heroZoomImage = document.querySelector(".js-hero-zoom");

  // Options for observer
  const observerOptions = {
    root: null, // viewport
    rootMargin: "0px",
    threshold: 0.15 // trigger when 15% visible
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("is-active");
        observer.unobserve(entry.target); // Annul observer after triggering once
      }
    });
  }, observerOptions);

  fadeElements.forEach(el => observer.observe(el));

  // Trigger hero image zoom-out animation immediately on load
  if (heroZoomImage) {
    setTimeout(() => {
      heroZoomImage.classList.add("is-loaded");
    }, 100); // slight delay for smooth start
  }

  /* ==========================================================================
     Header Events (Scroll & Hamburger menu)
     ========================================================================== */
  const header = document.querySelector(".js-header");
  const hamburger = document.querySelector(".js-hamburger");

  if (hamburger) {
    hamburger.addEventListener("click", () => {
      header.classList.toggle("is-open");
    });
  }
  
  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
      header.classList.add("is-scrolled");
    } else {
      header.classList.remove("is-scrolled");
    }
  });

  /* ==========================================================================
     Smooth Scroll for Anchor Links
     ========================================================================== */
  const anchorLinks = document.querySelectorAll('a[href^="#"]');
  
  anchorLinks.forEach(link => {
    link.addEventListener("click", function(e) {
      e.preventDefault();
      const targetId = this.getAttribute("href");
      if (targetId === "#") return;
      
      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        const headerOuterHeight = header.offsetHeight;
        const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY - headerOuterHeight;
        
        window.scrollTo({
          top: targetPosition,
          behavior: "smooth"
        });
        
        // Close mobile menu if open
        if (header.classList.contains("is-open")) {
          header.classList.remove("is-open");
        }
      }
    });
  });

});
