gsap.registerPlugin(ScrollTrigger);

// ------------------------------------------------ Custom Cursor --------------------------------------------
const cursor = document.querySelector(".custom-cursor");
let mouseX = 0, mouseY = 0, posX = 0, posY = 0;

window.addEventListener("mousemove", e => {
  mouseX = e.clientX;
  mouseY = e.clientY;
});

gsap.ticker.add(() => {
  posX += (mouseX - posX) * 0.35; // slightly faster follow
  posY += (mouseY - posY) * 0.35;
  gsap.set(cursor, { x: posX, y: posY });
});

document.querySelectorAll(".hoverEffect").forEach(el => {
  el.addEventListener("mouseenter", () => gsap.to(cursor, {
    scale: 5,
    backgroundColor: "#ffffff",
    duration: 0.15, // faster transition
    ease: "power2.out"
  }));
  el.addEventListener("mouseleave", () => gsap.to(cursor, {
    scale: 1,
    backgroundColor: "#ffffff",
    duration: 0.15,
    ease: "power2.out"
  }));
});


// ------------------------------------------------ Horizontal Scroll --------------------------------------------
const sections = gsap.utils.toArray(".panel");
const horizontalScroll = gsap.to(sections, {
  xPercent: -100 * (sections.length - 1),
  ease: "none",
  scrollTrigger: {
    trigger: ".horizontal-sections",
    pin: true,
    scrub: 0.8, // faster scrub
    anticipatePin: 1,
    snap: { snapTo: 1 / (sections.length - 1), duration: 0.5, ease: "power2.inOut" },
    end: () => "+=" + document.querySelector(".horizontal-sections").offsetWidth * 1.1,
  },
});


// ------------------------------------------------ Infinite Menu Scroll --------------------------------------------
const menu = document.querySelectorAll(".nav-links");
if (menu) {
  menu.innerHTML += menu.innerHTML;
  gsap.to(menu, {
    x: "-50%",
    duration: 15, // faster loop
    ease: "none",
    repeat: -1
  });
}


// ------------------------------------------------ Split Texts --------------------------------------------
function splitText(selector, byWord = false) {
  document.querySelectorAll(selector).forEach(el => {
    const text = el.textContent.trim();
    el.textContent = "";
    const parts = byWord ? text.split(/\s+/) : text.split("");
    parts.forEach((part, i) => {
      const span = document.createElement("span");
      span.textContent = part;
      if (byWord) span.classList.add("word");
      el.appendChild(span);
      if (byWord && i < parts.length - 1) el.appendChild(document.createTextNode(" "));
    });
  });
}
splitText(".fade-letters");
splitText(".fade-words", true);


// ------------------------------------------------ Home Page Animation --------------------------------------------
const homeTl = gsap.timeline({ delay: 0.1 });
homeTl.fromTo(".home > .fade-letters > span", { opacity: 0, y: 60 }, {
  opacity: 1, y: 0, duration: 0.6, ease: "power3.out", stagger: 0.06
})
  .fromTo(".home > footer", { opacity: 0, y: 40 }, { opacity: 1, y: 0, duration: 0.3 }, "-=0.1")
  .fromTo(".home > header", { opacity: 0, y: -40 }, { opacity: 1, y: 0, duration: 0.3 }, "-=0.1")
  .fromTo(".home > .vertical-content", { opacity: 0, x: -40 }, { opacity: 1, x: 0, duration: 0.3 }, "-=0.1");


// ------------------------------------------------ Section Timeline Function --------------------------------------------
function createSectionTimeline(section) {
  if (!document.querySelector(section)) return;

  if ([".about", ".service", ".contact"].includes(section)) {
    gsap.fromTo(`${section} .top-text.fade-words .word`, { opacity: 0 }, {
      opacity: 1,
      stagger: 0.05,
      duration: 0.6,
      ease: "power2.out",
      scrollTrigger: {
        trigger: section,
        containerAnimation: horizontalScroll,
        start: "left center",
        toggleActions: "restart none restart none",
        onEnter: self => self.animation.restart(),
        onEnterBack: self => self.animation.restart(),
      }
    });

    const title = document.querySelector(`${section} .h2`);
    if (title) {
      gsap.to(title, {
        "--beforeWidth": "100%",
        duration: 0.9, // faster
        delay: 0.3,
        ease: "power2.out",
        scrollTrigger: {
          trigger: section,
          containerAnimation: horizontalScroll,
          start: "left center",
          toggleActions: "restart none restart none",
          onEnter: self => self.animation.restart(),
          onEnterBack: self => self.animation.restart(),
        },
      });
    }
  }

  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: section,
      containerAnimation: horizontalScroll,
      start: "left center",
      toggleActions: "restart none restart none",
      onEnter: self => self.animation.restart(),
      onEnterBack: self => self.animation.restart(),
    },
  });

  tl.fromTo(`${section} .h1 span`, { opacity: 0, y: 60 }, {
    opacity: 1, y: 0, duration: 0.8, ease: "power2.out", stagger: 0.6
  })
    .fromTo(`${section} > header`, { opacity: 0, y: -60 }, { opacity: 1, y: 0, duration: 0.5 }, "-=0.2")
    .fromTo(`${section} > .vertical-content`, { opacity: 0, x: -60 }, { opacity: 1, x: 0, duration: 0.5 }, "-=0.2")
    .fromTo(`${section} > footer`, { opacity: 0, y: 60 }, { opacity: 1, y: 0, duration: 0.5 }, "-=0.2")
  if (document.querySelector(`.contact`)) {
    tl.to(
      [`.contact .right-site`, `.contact .left-site`], 
      { opacity: 1, scale: 1, duration: 0.5, ease: "power2.out" }, // zoom to normal size
      "-=0.2"
    );
  }
}

[".about", ".service", ".contact"].forEach(createSectionTimeline);


// ------------------------------------------------ Floating Shapes --------------------------------------------
const container = document.querySelector(".floating-shapes");
if (container) {
  const shapes = ["+", "-", "o", "◆", "◇", "▲", "▼"];
  const createShape = () => {
    const span = document.createElement("span");
    span.textContent = shapes[Math.floor(Math.random() * shapes.length)];
    span.style.left = Math.random() * window.innerWidth + "px";
    span.style.top = Math.random() * window.innerHeight + "px";
    span.style.fontSize = Math.random() * 25 + 10 + "px"; // smaller
    span.style.color = `rgba(0,0,0,${Math.random() * 0.5 + 0.2})`;
    span.style.animationDuration = Math.random() * 2 + 1 + "s"; // faster float
    container.appendChild(span);
    span.addEventListener("animationend", () => span.remove());
  };
  setInterval(createShape, 150); // spawn faster
}

// ------------------------------------------------ Card Slider --------------------------------------------

const track = document.querySelector(".card-track");
const cards = document.querySelectorAll(".card");
const cardWidth = cards[0].offsetWidth + 20; // card width + gap

// Duplicate the cards to make infinite loop
track.innerHTML += track.innerHTML;

const totalWidth = cardWidth * cards.length;

gsap.to(track, {
  x: `-${totalWidth}px`,
  ease: "linear",
  duration: 20, // adjust speed
  repeat: -1,
});


// ------------------------------------------------ Refresh on Resize --------------------------------------------
window.addEventListener("resize", () => ScrollTrigger.refresh());