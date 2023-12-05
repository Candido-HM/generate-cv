'use strict'

  document.addEventListener("DOMContentLoaded", () => {
    const savedTheme = localStorage.getItem("theme");
    if (savedTheme) {
      document.querySelector("body").setAttribute("data-bs-theme", savedTheme);
    }
  });

  const modeToggle = () => {
    const theme = document.querySelector("body").getAttribute("data-bs-theme");
    
    if (theme === "dark") {
      document.querySelector("body").setAttribute("data-bs-theme", "light");
      localStorage.setItem('theme', 'light'); 
    } else {
      document.querySelector("body").setAttribute("data-bs-theme", "dark");
      localStorage.setItem('theme', 'dark')
    }
  }