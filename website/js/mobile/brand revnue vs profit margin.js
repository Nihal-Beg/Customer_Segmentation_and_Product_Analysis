document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.querySelector(".menu-toggle");
    const navList = document.querySelector(".navbar ul");
  
    menuToggle.addEventListener("click", function () {
      navList.classList.toggle("active");
    });
  
    
    document.addEventListener("click", function (event) {
      if (!navList.contains(event.target) && !menuToggle.contains(event.target)) {
        navList.classList.remove("active");
      }
    });
  });


  