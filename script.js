$(".js-hide-row").click(function () {
    self = $(this)
    $.ajax({
        type: "POST",
        url: "product_actions/hide_product.php",
        data: {id: $(this).data("productId")},
        success: function (response) {
            if (response) {
                self.parents("tr").hide();
            }
        }
    })
})

$(".js-increase-product-quantity").click(function () {
    self = $(this)
    $.ajax({
        type: "POST",
        url: "product_actions/increase_product_quantity.php",
        data: {id: $(this).data("productId")},
        success: function (response) {
            if (response) {
                quantity = +self.siblings(".js-product-quantity").text() + 1
                self.siblings(".js-product-quantity").text(quantity)
            }
        }
    })
})

$(".js-reduce-product-quantity").click(function () {
    self = $(this)
    $.ajax({
        type: "POST",
        url: "product_actions/reduce_product_quantity.php",
        data: {id: $(this).data("productId")},
        success: function (response) {
            if (response) {
                quantity = +self.siblings(".js-product-quantity").text() - 1
                self.siblings(".js-product-quantity").text(quantity)
            }
        }
    })
})

