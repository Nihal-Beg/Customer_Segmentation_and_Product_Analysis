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

    const dropdownLinks = document.querySelectorAll(".dropdown > a");
    dropdownLinks.forEach(link => {
      link.addEventListener("click", function (event) {
        const parentLi = this.parentElement;
        parentLi.classList.toggle("active");
        event.preventDefault(); // Prevent the default link behavior
      });
    });

  function redirectToPage() {
    var userInput = document.getElementById('search-input').value.trim();
    var searchQuery = encodeURIComponent(userInput);

    var pageMappings = {
        "Electronics": "elec.html",
        "electronics": "elec.html",
        "mobile": "elec.html",
        "Mobile": "elec.html",
        "laptop" : "elec.html",
        "Laptop" : "elec.html",
                
    };

    var destinationPage = pageMappings[searchQuery];

    if (destinationPage) {
        window.location.href = destinationPage;
    } else {
        alert("Page not found for the entered search query.");
    }
}

const slider = document.querySelector('.slider');
const slides = document.querySelectorAll('.slide');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');
let slideIndex = 0;

function showSlide(index) {
  slider.style.transform = `translateX(-${index * 100}%)`;
}

function prevSlide() {
  slideIndex = Math.max(slideIndex - 1, 0);
  showSlide(slideIndex);
}

function nextSlide() {
  slideIndex = Math.min(slideIndex + 1, slides.length - 1);
  showSlide(slideIndex);
}