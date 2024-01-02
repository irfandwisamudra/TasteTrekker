$(document).ready(function () {
  jQuery(".form-valide-category").validate({
    rules: {
      name_category: {
        required: !0,
      },
      desc_category: {
        required: !0,
      },
      image_category: {
        required: !0,
      },
    },
    messages: {
      name_category: {
        required: "Silakan masukkan nama",
      },
      desc_category: {
        required: "Silahkan masukkan deskripsi",
      },
      image_category: {
        required: "Silahkan upload gambar",
      },
    },

    ignore: [],
    errorClass: "invalid-feedback animated fadeInUp",
    errorElement: "div",
    errorPlacement: function (e, a) {
      jQuery(a).parents(".form-group > div").append(e);
    },
    highlight: function (e) {
      jQuery(e)
        .closest(".form-group")
        .removeClass("is-invalid")
        .addClass("is-invalid");
    },
    success: function (e) {
      jQuery(e).closest(".form-group").removeClass("is-invalid"),
        jQuery(e).remove();
    },
  });

  jQuery(".form-valide-menu").validate({
    rules: {
      name_menu: {
        required: !0,
      },
      category_id: {
        required: !0,
      },
      price: {
        required: !0,
        number: !0,
      },
      image_menu: {
        required: !0,
      },
    },
    messages: {
      name_menu: {
        required: "Silakan masukkan nama",
      },
      category_id: {
        required: "Silahkan pilih kategori",
      },
      price: {
        required: "Silahkan masukkan harga",
        number: "Harga harus dalam bentuk angka",
      },
      image_menu: {
        required: "Silahkan upload gambar",
      },
    },

    ignore: [],
    errorClass: "invalid-feedback animated fadeInUp",
    errorElement: "div",
    errorPlacement: function (e, a) {
      jQuery(a).parents(".form-group > div").append(e);
    },
    highlight: function (e) {
      jQuery(e)
        .closest(".form-group")
        .removeClass("is-invalid")
        .addClass("is-invalid");
    },
    success: function (e) {
      jQuery(e).closest(".form-group").removeClass("is-invalid"),
        jQuery(e).remove();
    },
  });

  jQuery(".form-valide-recipe").validate({
    rules: {
      "title": {
        required: !0,
      },
      "menu_id": {
        required: !0,
      },
      "desc_recipe": {
        required: !0,
      },
      "serving": {
        required: !0,
      },
      "timing": {
        required: !0,
      },
      "image_recipe": {
        required: !0,
      },
    },
    messages: {
      "title": {
        required: "Silakan masukkan judul",
      },
      "menu_id": {
        required: "Silahkan pilih menu",
      },
      "desc_recipe": {
        required: "Silahkan masukkan deskripsi",
      },
      "serving": {
        required: "Silahkan masukkan penyajian",
      },
      "timing": {
        required: "Silahkan masukkan waktu",
      },
      "image_recipe": {
        required: "Silahkan upload gambar",
      },
    },

    ignore: [],
    errorClass: "invalid-feedback animated fadeInUp",
    errorElement: "div",
    errorPlacement: function (e, a) {
      jQuery(a).parents(".form-group > div").append(e);
    },
    highlight: function (e) {
      jQuery(e)
        .closest(".form-group")
        .removeClass("is-invalid")
        .addClass("is-invalid");
    },
    success: function (e) {
      jQuery(e).closest(".form-group").removeClass("is-invalid"),
        jQuery(e).remove();
    },
  });

  jQuery(".form-valide-order").validate({
    rules: {
      "val-user": {
        required: !0,
      },
      "val-payment": {
        required: !0,
      },
      "val-delivery": {
        required: !0,
      },
    },
    messages: {
      "val-user": {
        required: "Silakan pilih username",
      },
      "val-payment": {
        required: "Silahkan pilih pembayaran",
      },
      "val-delivery": {
        required: "Silahkan pilih pengiriman",
      },
    },

    ignore: [],
    errorClass: "invalid-feedback animated fadeInUp",
    errorElement: "div",
    errorPlacement: function (e, a) {
      jQuery(a).parents(".form-group > div").append(e);
    },
    highlight: function (e) {
      jQuery(e)
        .closest(".form-group")
        .removeClass("is-invalid")
        .addClass("is-invalid");
    },
    success: function (e) {
      jQuery(e).closest(".form-group").removeClass("is-invalid"),
        jQuery(e).remove();
    },
  });
});
