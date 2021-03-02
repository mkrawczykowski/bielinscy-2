window.addEventListener('DOMContentLoaded', (event) => {
  const itemsWithSubmenus = document.getElementsByClassName('menu-item-has-children');
  const items = document.querySelectorAll('.header__nav > .menu > .menu-item');

  for (const itemID in items) {
    if (items.hasOwnProperty(itemID)) {
      const item = items[itemID];
      item.addEventListener('mouseover', () => {
        console.log('mouseover');
        if (item.classList.contains('menu-item-has-children')) {
          item.classList.add('dropdown-active');
        }
      });

      item.addEventListener('mouseout', () => {
        console.log('mouseout');
        if (item.classList.contains('menu-item-has-children')) {
          item.classList.remove('dropdown-active');
        }
      });


    }
  }
});
  //   if (itemsWithSubmenus.hasOwnProperty(itemWithSubmenuID)) {
  //     const itemWithSubMenu = itemsWithSubmenus[itemWithSubmenuID];


  // for (const itemWithSubmenuID in itemsWithSubmenus) {
  //   if (itemsWithSubmenus.hasOwnProperty(itemWithSubmenuID)) {
  //     const itemWithSubMenu = itemsWithSubmenus[itemWithSubmenuID];
  //     itemWithSubMenu.addEventListener('mouseover', () => {

  //       for (x = 0; x < itemsWithSubmenus.length; x++) {
  //         const thisItem = itemsWithSubmenus[x];
  //         if (x != itemWithSubmenuID) {
  //           thisItem.classList.remove('dropdown-active');
  //         }
  //       }

  //       itemWithSubMenu.classList.toggle('dropdown-active');
  //     })
  //   }
  // }

