jQuery(document).ready(function () {
  // Add button to BB Menu
  jQuery(".fl-builder--menu").append(
    '<button class="fl-builder--menu-item hidden-class-btn" data-type="event" data-event="hiddenClassToggle">Toggle Hidden Classes<span class="menu-event event-hiddenClassToggle"></span><span class="fl-builder--menu-item-accessory">⌘=</span></button>'
  );
  // Toggle body class on button click
  jQuery(".hidden-class-btn").on("click", function () {
    jQuery("body").toggleClass("show-hidden-classes");
  });
  // Toggle body class on shortcut
  function hiddenClassToggle() {
    jQuery("body").toggleClass("show-hidden-classes");
  }
  // Add shortcut to BB
  jQuery(function () {
    FLBuilder.addHook("hiddenClassToggle", hiddenClassToggle);
  });
});
