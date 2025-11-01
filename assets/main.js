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
      backgroundColor: "#ffffffff",
      duration: 0.2,
      ease: "power1.out"
    });
  });
  el.addEventListener("mouseleave", () => {
    gsap.to(cursor, {
      scale: 1,
      backgroundColor: "#ffffffff",
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
    scrub: 0.6,
    anticipatePin: 1,
    snap: {
      snapTo: 1 / (sections.length - 1),
      duration: 0.6,
      ease: "back.out(1.4)",
    },
    end: () =>
      "+=" + document.querySelector(".horizontal-sections").offsetWidth * 1.1,
  },
});




// ---------------------------------------------------------- animation the menu --------------------------------------------
const menu = document.querySelectorAll(".nav-links");

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
  el.innerHTML = "";

  const words = text.split(/\s+/);

  words.forEach((word, index) => {
    const span = document.createElement("span");
    span.classList.add("word");
    span.textContent = word;

    el.appendChild(span);

    // Add a space after each word except the last
    if (index < words.length - 1) {
      el.appendChild(document.createTextNode(" "));
    }
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
    duration: 1.5,
    ease: "power3.out",
    stagger: 0.03
  }
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


// ------------------------------------------ Timeline for each section --------------------------------------------------------
function createSectionTimeline(sectionSelector, options = {}) {
  // Word fade-in only for .about
  if (sectionSelector === ".about" || sectionSelector === ".service" || sectionSelector === ".contact") {
    gsap.fromTo(
      `${sectionSelector} .top-text.fade-words .word`,
      { opacity: 0 },
      {
        opacity: 1,
        stagger: 0.05,
        duration: .6,
        ease: "power2.out",
        scrollTrigger: {
          trigger: `${sectionSelector}`,
          containerAnimation: scrollTween,
          start: "left center",
          toggleActions: "restart none restart none",
          onEnter: (self) => self.animation.restart(),
          onEnterBack: (self) => self.animation.restart(),
        },
      }
    );

    // select your heading
    const title = document.querySelector(`${sectionSelector}` + " .h2");
    gsap.to(title, {
      "--beforeWidth": "100%",
      stagger: 0.05,
      duration: 1,
      delay: 1,
      ease: "power2.out",
      scrollTrigger: {
        trigger: `${sectionSelector}`,
        containerAnimation: scrollTween,
        start: "left center",
        toggleActions: "restart none restart none",
        onEnter: (self) => self.animation.restart(),
        onEnterBack: (self) => self.animation.restart(),
      },
    });


  }

  const tlAbout = gsap.timeline({
    scrollTrigger: {
      trigger: sectionSelector,
      containerAnimation: scrollTween,
      start: "left center",
      toggleActions: "restart none restart none",
      onEnter: (self) => self.animation.restart(),
      onEnterBack: (self) => self.animation.restart(),
      ...options.scrollTrigger,
    },
  });

  // Shared animations for all sections
  tlAbout
    .fromTo(
      `${sectionSelector} .h1 span`,
      { opacity: 0, y: 40 },
      {
        opacity: 1,
        y: 0,
        duration: 1,
        ease: "power2.out",
        stagger: 0.3,
      },
      "-=0.1"
    )
    .fromTo(
      `${sectionSelector} > header`,
      { opacity: 0, y: -40 },
      { opacity: 1, y: 0, duration: 0.6, ease: "power2.out" },
      "-=0.1"
    )
    .fromTo(
      `${sectionSelector} > .vertical-content`,
      { opacity: 0, x: -40 },
      { opacity: 1, x: 0, duration: 0.6, ease: "power2.out" },
      "-=0.1"
    )
    .fromTo(
      `${sectionSelector} > footer`,
      { opacity: 0, y: 40 },
      { opacity: 1, y: 0, duration: 0.6, ease: "power2.out" },
      "-=0.1"
    );

  return tlAbout;
}

// --- Initialize for both sections ---
createSectionTimeline(".about");
createSectionTimeline(".service");
createSectionTimeline(".contact");




// ---------------------------------------------------------- cards for infinite scroll --------------------------------------------
document.addEventListener("DOMContentLoaded", () => {
  const track = document.querySelector(".card-track");
  if (!track) return;

  // Duplicate all cards for seamless infinite scroll
  const cards = Array.from(track.children);
  cards.forEach(card => {
    const clone = card.cloneNode(true);
    track.appendChild(clone);
  });
});



// ---------------------------------------------------------- floating shapes --------------------------------------------
const container = document.querySelector(".floating-shapes");
const shapes = ["+", "-", "o", "◆", "◇", "▲", "▼"];

function createShape() {
  const span = document.createElement("span");
  span.innerText = shapes[Math.floor(Math.random() * shapes.length)];

  // Random position
  span.style.left = Math.random() * window.innerWidth + "px";
  span.style.top = Math.random() * window.innerHeight + "px";

  // Random size & color
  const size = Math.random() * 30 + 10; // 10px - 40px
  span.style.fontSize = size + "px";
  span.style.color = `rgba(0,0,0,${Math.random() * 0.5 + 0.2})`;

  // Random animation duration
  span.style.animationDuration = Math.random() * 3 + 2 + "s";

  container.appendChild(span);

  // Remove element after animation
  span.addEventListener("animationend", () => {
    span.remove();
  });
}
// Create shapes continuously
setInterval(createShape, 200);




//  ---------------------------------------------------------- Refresh ScrollTrigger on resize ----------------------------------------------------------
window.addEventListener("resize", () => {
  ScrollTrigger.refresh();
});