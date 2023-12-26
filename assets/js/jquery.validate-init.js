jQuery(".form-valide").validate({
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
