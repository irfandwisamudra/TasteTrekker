jQuery(".form-valide-category").validate({
    rules: {
        "val-name": {
            required: !0
        },
        "val-desc": {
            required: !0
        },
        "val-image": {
            required: !0
        }
    },
    messages: {
        "val-name": {
            required: "Silakan masukkan nama"
        },
        "val-desc": {
            required: "Silahkan masukkan deskripsi"
        },
        "val-image": {
            required: "Silahkan upload gambar"
        }
    },

    ignore: [],
    errorClass: "invalid-feedback animated fadeInUp",
    errorElement: "div",
    errorPlacement: function(e, a) {
        jQuery(a).parents(".form-group > div").append(e)
    },
    highlight: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
    },
    success: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid"), jQuery(e).remove()
    },
});

jQuery(".form-valide-recipe").validate({
    rules: {
        "val-title": {
            required: !0
        },
        "val-menu": {
            required: !0
        },
        "val-desc": {
            required: !0
        },
        "val-serving": {
            required: !0
        },
        "val-timing": {
            required: !0
        },
        "val-image": {
            required: !0
        }
    },
    messages: {
        "val-title": {
            required: "Silakan masukkan judul"
        },
        "val-menu": {
            required: "Silahkan pilih menu"
        },
        "val-desc": {
            required: "Silahkan masukkan deskripsi"
        },
        "val-serving": {
            required: "Silahkan masukkan penyajian"
        },
        "val-timing": {
            required: "Silahkan masukkan waktu"
        },
        "val-image": {
            required: "Silahkan upload gambar"
        }
    },

    ignore: [],
    errorClass: "invalid-feedback animated fadeInUp",
    errorElement: "div",
    errorPlacement: function(e, a) {
        jQuery(a).parents(".form-group > div").append(e)
    },
    highlight: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
    },
    success: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid"), jQuery(e).remove()
    },
});

jQuery(".form-valide-menu").validate({
    rules: {
        "val-name": {
            required: !0
        },
        "val-category": {
            required: !0
        },
        "val-price": {
            required: !0,
            number: !0
        },
        "val-image": {
            required: !0
        }
    },
    messages: {
        "val-name": {
            required: "Silakan masukkan nama"
        },
        "val-category": {
            required: "Silahkan masukkan kategori"
        },
        "val-price": {
            required: "Silahkan masukkan harga",
            number: "Harga harus dalam bentuk angka"
        },
        "val-image": {
            required: "Silahkan upload gambar"
        }
    },

    ignore: [],
    errorClass: "invalid-feedback animated fadeInUp",
    errorElement: "div",
    errorPlacement: function(e, a) {
        jQuery(a).parents(".form-group > div").append(e)
    },
    highlight: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
    },
    success: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid"), jQuery(e).remove()
    },
});
