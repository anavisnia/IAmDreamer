// function for smooth scrolling + spyscroll START ====
function makeNavLinkSmooth() {
  const navLinks = document.querySelectorAll(".navbar__link");

  for (let n in navLinks) {
    if (navLinks.hasOwnProperty(n)) {
      navLinks[n].addEventListener("click", (e) => {
        e.preventDefault();
        document.querySelector(navLinks[n].hash).scrollIntoView({
          behavior: "smooth",
        });
      });
    }
  }
}

// iskvietimas funkcijos
makeNavLinkSmooth();

// scrollspy parodyti kokia sekcija dabar rodoma
const spyScrolling = () => {
  const sections = document.querySelectorAll(".main__content");

  window.onscroll = () => {
    const scrollPosition =
      document.documentElement.scrollTop || document.body.scrollTop;

    for (let s in sections) {
      if (
        sections.hasOwnProperty(s) &&
        sections[s].offsetTop <= scrollPosition
      ) {
        const id = sections[s].id;
        document.querySelector(".link-active").classList.remove("link-active");

        document
          .querySelector(`a[href*=${id}]`)
          .parentNode.classList.add("link-active");
      }
    }
  };
};

// iskvietimas scrollSpy
spyScrolling();

// smooth scrolling + spyscroll  END ===

// noBtn smooth in home section scrolling  START ====
const makeNoBtnSmooth = () => {
  const noBtn = document.querySelectorAll(".btnNo");

  for (let n in noBtn) {
    if (noBtn.hasOwnProperty(n)) {
      noBtn[n].addEventListener("click", (e) => {
        e.preventDefault();
        document.querySelector(noBtn[n].hash).scrollIntoView({
          behavior: "smooth",
        });
      });
    }
  }
};

makeNoBtnSmooth();
// noBtn smooth END ===

// REDIRECT START ===
// function is pagrindinio puslapio contact sekcijos, paspaudus migtuka redirektina i atskira langa, kur yra forma
redirBtn = document.getElementById("btnRedForm");
redirBtn.addEventListener("click", redirect);
// pasakom kur redirektinti
function redirect() {
  window.location.href = "http://localhost/respon_pj/form.php";
}
// REDIRECT END ===
