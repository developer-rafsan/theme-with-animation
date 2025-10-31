gsap.registerPlugin(ScrollTrigger);

// ------------------------------------------------ Custom Cursor Setup --------------------------------------------
const cursor = document.querySelector(".custom-cursor");

let mouseX = 0, mouseY = 0;
let posX = 0, posY = 0;

// Track mouse movement
window.addEventListener("mousemove", (e) => {
  mouseX = e.clientX;
  mouseY = e.clientY;
});

// Smooth cursor follow
gsap.ticker.add(() => {
  posX += (mouseX - posX) * 0.25; 
  posY += (mouseY - posY) * 0.25;
  gsap.set(cursor, { x: posX, y: posY });
});

// Hover effect on links / special elements
document.querySelectorAll(".hoverEffect").forEach(el => {
  el.addEventListener("mouseenter", () => {
    gsap.to(cursor, {
      scale: 5,                      
      backgroundColor: "#1100ff71",   
      borderColor: "transparent",    
      duration: 0.2,                 
      ease: "power1.out"
    });
  });
  el.addEventListener("mouseleave", () => {
    gsap.to(cursor, {
      scale: 1,
      backgroundColor: "transparent",      
      borderColor: "black",
      duration: 0.2,
      ease: "power1.out"
    });
  });
});


// --------------------------------------------------- setup horizontal scroll --------------------------------------------
const sections = gsap.utils.toArray(".panel");

let scrollTween = gsap.to(sections, {
  xPercent: -100 * (sections.length - 1),
  ease: "none",
  scrollTrigger: {
    id: "horizontalScroll",
    trigger: ".horizontal-sections",
    pin: true,
    scrub: 1,
    snap: (progress, self) => {
      const total = sections.length - 1;
      const scrollDiff = Math.abs(self.scroll() - self.start);

      if (scrollDiff < 100) return false;

      const currentSection = Math.round(progress * total);

      return currentSection / total; 
    },
    end: () => "+=" + document.querySelector(".horizontal-sections").offsetWidth,
  },
});




// ---------------------------------------------------------- animation the menu --------------------------------------------
const menu = document.querySelector(".nav-links");

// Clone items to create seamless loop
const clone = menu.innerHTML;
menu.innerHTML += clone;

// Animate infinite scroll
gsap.to(menu, {
  x: `-50%`,      
  duration: 20,     
  ease: "linear",
  repeat: -1        
});



// ------------------------------ Split Text into Letters ------------------------------------
document.querySelectorAll(".fade-letters").forEach((el) => {
  const text = el.textContent;
  el.textContent = "";
  text.split("").forEach((letter) => {
    const span = document.createElement("span");
    span.textContent = letter;
    el.appendChild(span);
  });
});

// ------------------------------ Split word into Letters ------------------------------------
document.querySelectorAll(".fade-words").forEach((el) => {
  const text = el.textContent.trim();
  el.textContent = ""; 

  // Split text into words
  const words = text.split(" ");

  words.forEach((word, index) => {
    // Create a span for each word
    const wordSpan = document.createElement("span");
    wordSpan.classList.add("word"); 
    wordSpan.textContent = word;

    // Add a space after word except the last one
    if (index < words.length - 1) {
      wordSpan.innerHTML += "&nbsp;";
    }

    el.appendChild(wordSpan);
  });
});



// ---------------------------------------------------------- home page --------------------------------------------
const homeTl = gsap.timeline({ delay: 0.2 });
homeTl.fromTo(
  ".home >.fade-letters > span",
  { opacity: 0, y: 60 },
  { 
    opacity: 1, 
    y: 0, 
    ease: "power3.out", 
    stagger: 0.03 
  }
);

homeTl.fromTo(
  ".home > h5",
  { opacity: 0, y: 40 },
  { opacity: 1, y: 0, duration: 0.4, ease: "power2.out" },
  "-=0.1" 
);

homeTl.fromTo(
  ".home > footer",
  { opacity: 0, y: 40 },
  { opacity: 1, y: 0, duration: 0.4, ease: "power2.out" },
  "-=0.1" 
);

homeTl.fromTo(
  ".home > header",
  { opacity: 0, y: -40 },
  { opacity: 1, y: 0, duration: 0.4, ease: "power2.out" },
  "-=0.1" 
);

homeTl.fromTo(
  ".home > .vertical-content",
  { opacity: 0, x: -40 },
  { opacity: 1, x: 0, duration: 0.4, ease: "power2.out" },
  "-=0.1" 
);


// --- Helper: Timeline for each section ---
// function createSectionTimeline(sectionSelector, options = {}) {
//   const tl = gsap.timeline({
//     scrollTrigger: {
//       trigger: sectionSelector,
//       containerAnimation: scrollTween,
//       start: "left center",
//       toggleActions: "play none none reverse",
//       ...options.scrollTrigger,
//     },
//   });

//   tl.fromTo(
//     `${sectionSelector} .fade-letters span`,
//     { opacity: 0, y: 100 },
//     { opacity: 1, y: 0, duration: 0.5, ease: "power3.out", stagger: 0.05 }
//   );

//   // Animate paragraph (if exists)
//   if (document.querySelector(`${sectionSelector} p`)) {
//     tl.fromTo(
//       `${sectionSelector} p`,
//       { opacity: 0, y: 40 },
//       { opacity: 1, y: 0, duration: 0.6, ease: "power2.out" },
//       "-=0.3" // overlap with text animation
//     );
//   }

//   // Animate subheading (h5 or h3)
//   if (document.querySelector(`${sectionSelector} h5`)) {
//     tl.fromTo(
//       `${sectionSelector} h5`,
//       { opacity: 0, y: 60 },
//       { opacity: 1, y: 0, duration: 0.5, ease: "power2.out" },
//       "-=0.4"
//     );
//   }

//   return tl;
// }

// // --- About and Contact animations (triggered on scroll) ---
// createSectionTimeline(".about");
// createSectionTimeline(".contact");

// --- Refresh ScrollTrigger on resize ---
window.addEventListener("resize", () => {
  ScrollTrigger.refresh();
});
