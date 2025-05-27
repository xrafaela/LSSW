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
  });
  