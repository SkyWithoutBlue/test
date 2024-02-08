$(function () {
  const worksSlider = $('[data-slider="slick"]');
  /*Filter
    =========================================================== */

  let filter = $("[data-filter]"); //сохраняем в переменную фильтр наши ссылки, по которым фильтруем наши работы

  filter.on("click", function (event) {
    event.preventDefault(); //при нажатие на какую-то из наших ссылок изменяем ей её стандартное поведение

    let cat = $(this).data("filter"); //сохраняем значение категории

    if (cat == "Все работы") {
      $("[data-cat]").removeClass("hide"); //сравниваем значение категории, с тем на какуб ссылку нажал пользователь, если это было Все работы то ему покажутся все работы
    } else {
      $("[data-cat]").each(function () {
        let workCat = $(this).data("cat");

        if (workCat != cat) {
          $(this).addClass("hide");
        } else {
          $(this).removeClass("hide");
        }
      });
    }
  });

  /*Modal
    =========================================================== */

  const modalCall = $("[data-modal]");
  const modalClose = $("[data-close]");

  modalCall.on("click", function (event) {
    event.preventDefault(); //при нажатие на какую-то из наших ссылок изменяем ей её стандартное поведение

    let $this = $(this);
    let modalId = $this.data("modal");

    $(modalId).addClass("show");

    $("body").addClass("no-scroll");

    setTimeout(function () {
      $(modalId).find(".modal__dialog").css({
        transform: "scale(1)",
      });
    }, 200);

    worksSlider.slick("setPosition");
  });

  modalClose.on("click", function (event) {
    event.preventDefault(); //при нажатие на какую-то из наших ссылок изменяем ей её стандартное поведение

    let $this = $(this);
    let modalParent = $this.parents(".modal");

    modalParent.find(".modal__dialog").css({
      transform: "scale(0)",
    });

    setTimeout(function () {
      modalParent.removeClass("show");
      $("body").removeClass("no-scroll");
    }, 200);
  });

  $(".modal").on("click", function (event) {
    let $this = $(this);
    $this.find(".modal__dialog").css({
      transform: "scale(0)",
    });

    setTimeout(function () {
      $this.removeClass("show");
      $("body").removeClass("no-scroll");
    }, 200);
  });

  $(".modal__dialog").on("click", function (event) {
    event.stopPropagation();
  });

  /*Slider: http://kenwheeler.github.io/slick/
    =========================================================== */
  worksSlider.slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    arrows: false,
    dots: true,
  });

  $(".slickPrev").on("click", function (event) {
    event.preventDefault();

    let currentSlider = $(this).parents(".modal").find('[data-slider="slick"]');

    currentSlider.slick("slickPrev");
  });

  $(".slickNext").on("click", function (event) {
    event.preventDefault();

    let currentSlider = $(this).parents(".modal").find('[data-slider="slick"]');

    currentSlider.slick("slickNext");
  });

  /*Mobile nav
    =========================================================== */

  const navToggle = $("#navToggle");
  const nav = $("#nav");

  navToggle.on("click", function (event) {
    event.preventDefault();
    nav.toggleClass("show");
  });
});
