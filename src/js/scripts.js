window.addEventListener('DOMContentLoaded', (event) => {
  const itemsWithSubmenus = document.querySelectorAll('.menu-item-has-children');

  for (const itemID in itemsWithSubmenus) {
    if (itemsWithSubmenus.hasOwnProperty(itemID)) {
      const item = itemsWithSubmenus[itemID];
      item.addEventListener('click', (e) => {
        (e.target.closest('ul.sub-menu')) ? console.log('tak') : e.preventDefault();
        if (item.classList.contains('menu-item-has-children')) {
          item.classList.toggle('dropdown-active');
        }
      });
    }
  };

  const hamburgerToggler = document.querySelector('.logo-nav__hamburger-menu');
  const mainMenu = document.querySelector('.logo-nav__main-menu');

  hamburgerToggler.addEventListener('click', (e) => {
    mainMenu.classList.toggle('active');
    hamburgerToggler.classList.toggle('open');
  });

});
