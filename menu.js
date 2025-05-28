document.addEventListener("DOMContentLoaded", function () {
    fetch("menu.html")
      .then(response => {
        if (!response.ok) throw new Error("Erro ao carregar o menu: " + response.status);
        return response.text();
      })
      .then(data => {
        document.getElementById("menu-placeholder").innerHTML = data;
  
        const currentPage = window.location.pathname.split("/").pop() || "index.html";
        const allLinks = document.querySelectorAll("#menu-placeholder nav a");
  
        allLinks.forEach(link => {
          const linkHref = link.getAttribute("href").split("#")[0];
  
          if (linkHref === currentPage) {
            link.classList.add("active");
  
            const submenu = link.closest("ul.submenu");
            if (submenu) {
              submenu.style.display = "block";
  
              const parentLi = submenu.closest("li");
              if (parentLi) {
                const parentLink = parentLi.querySelector("a");
                if (parentLink) {
                  parentLink.classList.add("active");
                }
              }
            }
          }
        });
      })
      .catch(error => console.error("Erro:", error));
  
    const currentPage = window.location.pathname.split("/").pop(); // Obtém o nome do arquivo atual
    const sidebarLinks = document.querySelectorAll(".sidebar a");
  
    sidebarLinks.forEach(link => {
      if (link.getAttribute("href") === currentPage) {
        link.classList.add("active"); // Adiciona a classe 'active' ao link correspondente
      }
    });
  
    const menuItems = document.querySelectorAll("nav ul li");
  
    menuItems.forEach(item => {
      const submenu = item.querySelector("ul.submenu");
      if (submenu) {
        item.addEventListener("mouseenter", () => {
          submenu.style.display = "block";
          submenu.style.opacity = "0";
          submenu.style.transform = "translateY(-10px)";
          setTimeout(() => {
            submenu.style.opacity = "1";
            submenu.style.transform = "translateY(0)";
          }, 10);
        });
  
        item.addEventListener("mouseleave", () => {
          submenu.style.opacity = "0";
          submenu.style.transform = "translateY(-10px)";
          setTimeout(() => {
            submenu.style.display = "none";
          }, 300);
        });
      }
    });
  });
