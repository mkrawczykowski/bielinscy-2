

$(function () {
  console.log("ready!");
  $('menu-item-has-children').on('click', function () {
    $(this).toggleClass('active');
  })
});