jQuery(document).ready(function () {
  jQuery(".fl-builder--menu").append(
    '<button class="fl-builder--menu-item hidden-class-btn" data-type="event" data-event="hiddenClassToggle">Toggle Hidden Classes<span class="menu-event event-hiddenClassToggle"></span><span class="fl-builder--menu-item-accessory">⌘=</span></button>'
  );

  jQuery(".hidden-class-btn").on("click", function () {
    jQuery("body").toggleClass("show-hidden-classes");
  });

  function hiddenClassToggle() {
    jQuery("body").toggleClass("show-hidden-classes");
  }
  jQuery(function () {
    FLBuilder.addHook("hiddenClassToggle", hiddenClassToggle);
  });
});
