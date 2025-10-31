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
      backgroundColor: "#8aff4671",
      duration: 0.2,
      ease: "power1.out"
    });
  });
  el.addEventListener("mouseleave", () => {
    gsap.to(cursor, {
      scale: 1,
      backgroundColor: "#c1ee1fff",
      duration: 0.2,
      ease: "power1.out"
    });
  });
});


// --------------------------------------------------- setup horizontal scroll --------------------------------------------
const sections = gsap.utils.toArray(".panel");

let scrollTween = gsap.to(sections, {
  xPercent: -100 * (sections.length - 1),
  ease: "power1.inOut", 
  duration: 1, 
  scrollTrigger: {
    id: "horizontalScroll",
    trigger: ".horizontal-sections",
    pin: true,
    scrub: 0.3, 
    anticipatePin: 1,
    snap: {
      snapTo: 1 / (sections.length - 1),
      duration: 1,
      ease: "back.out(1.4)",
    },
    end: () =>
      "+=" + document.querySelector(".horizontal-sections").offsetWidth * 1.1, // extra space for better flow
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
// --- Helper: Timeline for each section ---
function createSectionTimeline(sectionSelector, options = {}) {
  // Word fade-in only for .about
  if (sectionSelector === ".about") {
    gsap.fromTo(
      `${sectionSelector} .top-text.fade-words .word`,
      { opacity: 0 },
      {
        opacity: 1,
        stagger: 0.05,
        ease: "power2.out",
        duration: 0.6,
        scrollTrigger: {
          trigger: `${sectionSelector}`,
          containerAnimation: scrollTween,
          start: "left center",
          toggleActions: "play none none reverse",
        },
      }
    );
  }

  const tlAbout = gsap.timeline({
    scrollTrigger: {
      trigger: sectionSelector,
      containerAnimation: scrollTween,
      start: "left center",
      toggleActions: "play none none reverse",
      ...options.scrollTrigger,
    },
  });

  // Shared animations for all sections
  tlAbout
    .fromTo(
      `${sectionSelector} .h2`,
      { opacity: 0, y: 40 },
      { opacity: 1, y: 0, duration: 0.4, ease: "power2.out" },
      "-=0.1"
    )
    .fromTo(
      `${sectionSelector} .h1 span`,
      { opacity: 0, y: 40 },
      {
        opacity: 1,
        y: 0,
        duration: 0.4,
        ease: "power2.out",
        stagger: 0.1,
      },
      "-=0.1"
    )
    .fromTo(
      `${sectionSelector} > header`,
      { opacity: 0, y: -40 },
      { opacity: 1, y: 0, duration: 0.4, ease: "power2.out" },
      "-=0.1"
    )
    .fromTo(
      `${sectionSelector} > .vertical-content`,
      { opacity: 0, x: -40 },
      { opacity: 1, x: 0, duration: 0.4, ease: "power2.out" },
      "-=0.1"
    )
    .fromTo(
      `${sectionSelector} > footer`,
      { opacity: 0, y: 40 },
      { opacity: 1, y: 0, duration: 0.4, ease: "power2.out" },
      "-=0.1"
    );

  return tlAbout;
}

// --- Initialize for both sections ---
createSectionTimeline(".about");
createSectionTimeline(".service");




const cardGroup = document.querySelector(".card-group");
const cards = gsap.utils.toArray(".card");

// Duplicate cards for seamless looping
cardGroup.innerHTML += cardGroup.innerHTML;

// Total width of original cards including gap
const cardWidth = cards[0].offsetWidth + 24;
const totalWidth = cardWidth * cards.length;

// Animate the entire card-group
gsap.to(cards, {
  x: `+=${totalWidth}`, // move left by total width
  duration: 8,          // adjust speed
  ease: "linear",       // smooth continuous motion
  repeat: -1,           // infinite loop
  modifiers: {
    x: gsap.utils.unitize(x => parseFloat(x) % totalWidth) // seamless loop
  }
});


// --- Refresh ScrollTrigger on resize ---
window.addEventListener("resize", () => {
  ScrollTrigger.refresh();
});
