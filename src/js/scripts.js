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


  // const vrPlayersOuterDivs = document.querySelectorAll('.three-products__product > div:first-child > div:nth-child(2)');
  // // const vrPlayersInnerDivs = document.querySelectorAll('.three-products__product > div:first-child > div:nth-child(2) > div.ggskin_container:first-child');

  // if (vrPlayersOuterDivs.length != 0) {
  //   for (vrPlayerID in vrPlayersOuterDivs) {
  //     if (vrPlayersOuterDivs.hasOwnProperty(vrPlayerID)) {
  //       const vrPlayerOuter = vrPlayersOuterDivs[vrPlayerID];
  //       // const vrPlayerInner = vrPlayersInnerDivs[vrPlayerID];

  //       vrPlayerOuter.setAttribute('style', 'height:450px');
  //       console.log(vrPlayerOuter.style.height);
  //       // vrPlayerInner.style.top = '400px';
  //       console.log('========================================');
  //     }
  //   }
  // };
});
