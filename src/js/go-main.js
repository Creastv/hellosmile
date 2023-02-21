(window.load = function (event) {
  const togglerNav = document.querySelector(".js-navbar__toggler");
  const nav = document.querySelector(".js-navbar__navigation");
  let navFlag = false;

  togglerNav.addEventListener("click", () => {
    if (navFlag == false) {
      nav.classList.add("active");
      togglerNav.classList.add("active");
      document.querySelector("body").style.overflow = "hidden";
      navFlag = true;
    } else {
      nav.classList.remove("active");
      togglerNav.classList.remove("active");
      document.querySelector("body").style.overflow = "inherit";
      // document.querySelector(".js-header").classList.remove("active");
      navFlag = false;
    }
    loadItemsNav();
  });
  function loadItemsNav() {
    const li = [...document.querySelectorAll(".js-header-nav-list li")];
    let index = 0;
    setTimeout(function () {
      window.setInterval(function () {
        if (index < li.length) {
          li[index++].classList.toggle("liVisible");
        }
      }, 150);
    }, 0);
  }
  // Close after click the navmenu on mobile
  const itemsNAv = document.querySelectorAll(".js-navbar__navigation a");
  for (let i = 0; i < itemsNAv.length; i++) {
    itemsNAv[i].addEventListener("click", () => {
      nav.classList.remove("active");
      togglerNav.classList.remove("active");
      navFlag = false;
    });
  }
  // Go to Top
  const goToTop = document.querySelector("#go-to-top");
  goToTop.addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
  });
  document.addEventListener("scroll", () => {
    if (window.pageYOffset >= 200) {
      goToTop.classList.add("active");
    } else {
      goToTop.classList.remove("active");
    }
  });
  // sticy nabvbar
  const navbar = document.querySelector("#header");
  document.addEventListener("scroll", () => {
    var st = window.pageYOffset || document.documentElement.scrollTop;
    if (window.pageYOffset) {
      navbar.classList.add("active");
    } else {
      navbar.classList.remove("active");
    }
  });

  // set body padding top by geting header height
  // function heightHeader() {
  //   const heightHeader = document.querySelector("#header");
  //   document.querySelector("body").style.paddingTop = heightHeader.clientHeight + "px";
  // }
  // window.addEventListener("resize", heightHeader);
  // heightHeader();

  //   // scroll to section
  // footer
  const calaps = document.querySelectorAll(".calaps");
  console.log(calaps);
  for (let i = 0; i < calaps.length; i++) {
    console.log(calaps[i].querySelector(".calaps__opener"));
    calaps[i].querySelector(".calaps__opener").addEventListener("click", function () {
      calaps[i].classList.toggle("active");
    });
  }
})();
