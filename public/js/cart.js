/**
 *
 * @param id
 * @param name
 * @param price
 * @param quantity
 * @param image
 */
function addToCart(id, name, price, quantity, image) {
    let cart = $("#shopping-cart"); // gets an instance of cart div element
    let cartTotal = $("#cart-total"); // gets an instance of the cart total
    $.ajax({ // makes an ajax get request to get product quantity
        url: `${local_url}/item/quantity/${id}`,
        success: function (result) {
            // cast the response to a json abject
            console.log(result)
            let queryResult = JSON.parse(result)
            // checks if the quantity returned is greater than zero
            if (parseInt(queryResult.quantity) > 0) {
                if (cart.find("#item-" + id).length) { // checks if the item is already in the cart
                    let quantityElement = $(`#item-quantity-${id}`) // gets the instance of the quantity element
                    let priceHandler = $(`#price-handler-${id}`) // gets the instance of the price element
                    let newQuantity = parseInt(quantityElement.text()) + quantity // calculate the new quantity

                    priceHandler.val(newQuantity * price) // updates the read-only element with the calculated product price
                    quantityElement.text(newQuantity) // updates the quantity element with the new quantity

                    cartTotal.text(overallSum("sum")) // calculates the total of the items in the cart

                    Cart[`${id}`].quantity = newQuantity // updates the quantity of the product in the cart Object

                    // displays a notification to the user that the product has been added
                    $.toast({
                        text: name + ' has been added to your cart',
                        showHideTransition: 'slide',
                        position: "top-right",
                        bgColor: '#fffbdb',
                        textColor: '#1a1a1a',
                        loaderBg: '#ea3a3c',
                        stack: 2
                    })

                    // saves the cart data to the LocalStorage
                    saveWithExpiry("cart", JSON.stringify(Cart), "3600000")

                } else {
                    // if the item doesn't exist in the cart
                    // create a new element that feeds the cart with the respective item
                    let item = `<div id="item-${id}" class="single-cart-box">\n` +
                        `<div class="cart-img">\n` +
                        `<a href="javascript:void(0)"><img\n` +
                        `src="${base_url}${image}"\n` +
                        `alt="cart-image"></a>\n` +
                        `</div>\n` +
                        `<div class="cart-content">\n` +
                        `<h6><a href="javascript:void(0)">${name}</a></h6>\n` +
                        `<span id="item-quantity-${id}"> ${quantity}</span> ` +
                        ` × <span id="item-price-${id}"> ${Number(price).toLocaleString('en-US')}` +
                        `<input id="price-handler-${id}" class="sum" type="text" style="display: none" readonly value="${price * quantity}"/></span>\n` +
                        `</div>\n` +
                        `<i onClick="deleteRow(${id}, 'cart-total', 'sum')" style="color: tomato" class="pe-7s-close"></i>\n` +
                        `</div>`

                    // populates the cart with the new item
                    cart.append(item)

                    // updates the total in the cart
                    cartTotal.text(overallSum("sum"))

                    // setting up object to save data of products to the cart Object
                    let product = {
                        [id]: {
                            'id': id,
                            'name': name,
                            'price': price,
                            'quantity': quantity,
                            'image': image
                        }
                    }

                    Object.assign(Cart, product) // saves the product in the cart object


                    // displays a notification to the user that the product has been added
                    $.toast({
                        text: name + ' has been added to your cart',
                        showHideTransition: 'slide',
                        position: "top-right",
                        bgColor: '#fffbdb',
                        textColor: '#1a1a1a',
                        loaderBg: '#ea3a3c',
                        stack: 2
                    })
                    // saves the cart data in the localStorage
                    saveWithExpiry("cart", JSON.stringify(Cart), "3600000")
                }
            } else { // if the quantity is not greater than zero

                // displays a notification to the user that the product is out of stock
                $.toast({
                    text: name + ' is out of stock',
                    showHideTransition: 'slide',
                    position: "top-right",
                    bgColor: '#ea3a3c',
                    textColor: '#fffbdb',
                    loaderBg: '#fffbdb',
                    stack: 2
                })
            }
        }
    })
}

/**
 * adds items to cart without any toast notification
 * @param id
 * @param name
 * @param price
 * @param quantity
 * @param image
 */
function addToCartWithoutToast(id, name, price, quantity, image) {
    let cart = $("#shopping-cart"); // gets an instance of cart div element
    let cartTotal = $("#cart-total"); // gets an instance of the cart total

    // create a new element that feeds the cart with the respective item
    let item = `<div id="item-${id}" class="single-cart-box">\n` +
        `<div class="cart-img">\n` +
        `<a href="javascript:void(0)"><img\n` +
        `src="${base_url}${image}"\n` +
        `alt="cart-image"></a>\n` +
        `</div>\n` +
        `<div class="cart-content">\n` +
        `<h6><a href="javascript:void(0)">${name}</a></h6>\n` +
        `<span id="item-quantity-${id}"> ${quantity}</span> ` +
        ` × <span id="item-price-${id}"> ${Number(price).toLocaleString('en-US')}` +
        `<input id="price-handler-${id}" class="sum" type="text" style="display: none" readonly value="${price}"/></span>\n` +
        `</div>\n` +
        `<i onClick="deleteRow(${id}, 'cart-total', 'sum')" style="color: tomato" class="pe-7s-close"></i>\n` +
        `</div>`

    // populates the cart with the new item
    cart.append(item)

    // updates the total in the cart
    cartTotal.text(overallSum("sum"))

}

/**
 * calculates the sum of the content of an array
 * @param {array} array the array of numbers to be summed up
 * @return {number} the summed up figure
 */
function array_sum(array) {
    let result = 0;
    for (let i = 0; i < array.length; i++)
        result += Number(array[i]);
    return result;
}


/**
 * calculates the overall total of all the products on the cart table (including the VAT)
 * @param {string} sumClass the class name of all the total prices of each product on the cart
 * @return {string}
 */
function overallSum(sumClass) {
    // gets the value of the class name
    let overallSum = $(`.${sumClass}`);
    // an array to store all the totals of product prices
    let sum_arr = [];

    // loop to push the totals to the array. the idea is to be
    // able to sum the content of the array
    // to get the overall total
    for (let i = 0; i < overallSum.length; i++)
        sum_arr.push(overallSum.eq(i).val());

    let ans = array_sum(sum_arr);
    return Number(ans).toLocaleString();
}

function overallSumLabel(sumClass) {
    // gets the value of the class name
    let overallSum = $(`.${sumClass}`);
    // an array to store all the totals of product prices
    let sum_arr = [];

    // loop to push the totals to the array. the idea is to be
    // able to sum the content of the array
    // to get the overall total
    for (let i = 0; i < overallSum.length; i++)
        sum_arr.push(
            parseFloat(overallSum.eq(i).text().replaceAll(",", ""))
        );

    let ans = array_sum(sum_arr);
    return Number(ans).toLocaleString();
}


/**
 * deletes the item the cart
 * @param id
 * @param cart_id
 * @param sumClass
 */
function deleteRow(id, cart_id, sumClass) {
    $(`#item-${id}`).remove() // deletes the item from the cart
    if (typeof Cart !== 'undefined') {// checks if the cart object exists
        delete Cart[`${id}`] // deletes the item from the cart object
        saveWithExpiry("cart", JSON.stringify(Cart), "3600000") // save the cart data in the localStorage
        $(`#${cart_id}`).text(overallSum(`${sumClass}`)) // updates the cart's total amount
    } else {
        $(`#${cart_id}`).text(overallSumLabel(`${sumClass}`)) // updates the cart's total amount
        $(`#total-cart-input`).val(overallSumLabel(`${sumClass}`).replaceAll(",","")) // updates the cart's total amount
    }


}

/**
 *
 * @param {string} key id for data
 * @param {string} value data to store in local storage
 * @param {string} ttl time for data to live in milliseconds
 */
function saveWithExpiry(key, value, ttl) {
    const now = new Date()

    // `item` is an object which contains the original value
    // as well as the time when it's supposed to expire
    const item = {
        value: value,
        expiry: now.getTime() + ttl,
    }
    localStorage.setItem(key, JSON.stringify(item))
}

/**
 *
 * @param {string} key id to retrieve data
 * @returns {null|*} returns returns data or null if data has expired
 */
function getWithExpiry(key) {
    const itemStr = localStorage.getItem(key)
    // if the item doesn't exist, return null
    if (!itemStr) {
        return null
    }
    const item = JSON.parse(itemStr)
    const now = new Date()
    // compare the expiry time of the item with the current time
    if (now.getTime() > item.expiry) {
        // If the item is expired, delete the item from storage
        // and return null
        localStorage.removeItem(key)
        return null
    }
    return item.value
}


function sendCartToCheckout(){
    $("#cart-table").submit()
}

$("#add-cart").on("click", function () {
    let max = Number($("#modal-quantity").prop("max"));
    let currentValue = Number($("#modal-quantity").val());
    let productQuantity = $("#product-quantity")
    if (currentValue > max) {
        $("#modal-quantity").val(max)
        productQuantity.val(max)
        $.toast({
            text: 'quantity requested exceeded available quantity',
            showHideTransition: 'slide',
            position: "top-right",
            icon: 'error',
            bgColor: '#ea3a3c',
            textColor: '#fffbdb',
            loaderBg: '#ffffff',
            stack: 2
        })
    } else {
        productQuantity.val(currentValue)
        let id = $(this).prop("data-product-id") // get product id of the current product in the modal
        let largeThumbs = $(".largeThumbs")[0].src; // gets the image url for the thumbnail of the product
        let productName = $("#product-name").text(); // gets the name of the product
        let productPrice = Number($("#product-price").text().replaceAll(",", "")); //gets the price of the product
        productQuantity = Number($("#product-quantity").val()); //gets the quantity of the product
        addToCart(id, productName, productPrice, productQuantity, largeThumbs.replace(base_url, "")) // adds the product to
        // the cart
        $("#close-modal").click()
    }

})


/**
 * makes sure the user doesn't order more than the available quantity
 */
$("#modal-quantity").on("keyup", function () {
    let max = Number($(this).prop("max"));
    let currentValue = Number($(this).val());
    let productQuantity = $("#product-quantity")
    if (currentValue > max) {
        $(this).val(max)
        productQuantity.val(max)
        $.toast({
            text: 'quantity requested exceeded available quantity',
            showHideTransition: 'slide',
            position: "top-right",
            icon: 'error',
            bgColor: '#ea3a3c',
            textColor: '#fffbdb',
            loaderBg: '#ffffff',
            stack: 2
        })
    } else {
        productQuantity.val(currentValue)
    }
})



$("#go-cart").on("click", function (e) {
    e.preventDefault(); // prevent the link from redirecting
    $.post(`${local_url}/cart/send`, Cart, function (data) { // post request
        data = JSON.parse(data) // parsing the received data to JSON object
        if (data.msg === "success") { // checking message for success
            window.location = `${local_url}/cart` //redirects to the cart page
        } else {
            // displays a notification to the user that the cart could not be forwarded to the server
            $.toast({
                text: 'Something went wrong! Please reload the page',
                showHideTransition: 'slide',
                position: "top-right",
                icon: 'error',
                bgColor: '#ea3a3c',
                textColor: '#fffbdb',
                loaderBg: '#fffbdb',
                stack: 2
            })
        }
    })
})
