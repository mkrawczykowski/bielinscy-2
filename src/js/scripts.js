window.addEventListener('DOMContentLoaded', (event) => {
  const itemsWithSubmenus = document.getElementsByClassName('menu-item-has-children');
  console.log(itemsWithSubmenus.length);

  for (const itemWithSubmenuID in itemsWithSubmenus) {
    if (itemsWithSubmenus.hasOwnProperty(itemWithSubmenuID)) {
      const itemWithSubMenu = itemsWithSubmenus[itemWithSubmenuID];
      itemWithSubMenu.addEventListener('click', () => {

        for (x = 0; x < itemsWithSubmenus.length; x++) {
          const thisItem = itemsWithSubmenus[x];
          if (x != itemWithSubmenuID) {
            thisItem.classList.remove('dropdown-active');
          }
        }

        itemWithSubMenu.classList.toggle('dropdown-active');
      })
    }
  }

});