window.addEventListener('DOMContentLoaded', (event) => {
  const itemsWithSubmenus = document.getElementsByClassName('menu-item-has-children');
  const items = document.querySelectorAll('.header__nav > .menu > .menu-item');

  for (const itemID in items) {
    if (items.hasOwnProperty(itemID)) {
      const item = items[itemID];
      item.addEventListener('mouseover', () => {
        if (item.classList.contains('menu-item-has-children')) {
          item.classList.add('dropdown-active');
        }
      });

      item.addEventListener('mouseout', () => {
        if (item.classList.contains('menu-item-has-children')) {
          item.classList.remove('dropdown-active');
        }
      });


    }
  }
});
