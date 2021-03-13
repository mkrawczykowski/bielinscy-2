window.addEventListener('DOMContentLoaded', (event) => {
  const itemsWithSubmenus = document.querySelectorAll('.menu-item-has-children');
  // const items = document.querySelectorAll('.logo-nav__main-menu .menu-item a');
  console.log(itemsWithSubmenus);

  for (const itemID in itemsWithSubmenus) {
    console.log(itemID);
    if (itemsWithSubmenus.hasOwnProperty(itemID)) {
      const item = itemsWithSubmenus[itemID];
      console.log(item);
      item.addEventListener('click', (e) => {
        e.preventDefault();
        if (item.classList.contains('menu-item-has-children')) {

          item.classList.toggle('dropdown-active');
          console.log('dropdown-active');
        }
      });

    }
  };

});
