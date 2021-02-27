window.addEventListener('DOMContentLoaded', (event) => {
  const itemsWithSubmenus = document.getElementsByClassName('menu-item-has-children');
  console.log(itemsWithSubmenus);

  for (const itemWithSubmenuID in itemsWithSubmenus) {
    console.log(itemWithSubmenuID);
    if (itemsWithSubmenus.hasOwnProperty(itemWithSubmenuID)) {
      const itemWithSubMenu = itemsWithSubmenus[itemWithSubmenuID];
      itemWithSubMenu.addEventListener('click', () => {
        itemWithSubMenu.classList.toggle('dropdown-active');
        console.log('mouseover');
      })
    }

  }
});