    // Add-to-cart button click event handler
    var addToCartButtons = document.getElementsByClassName('add-to-cart');
    for (var i = 0; i < addToCartButtons.length; i++) {
        addToCartButtons[i].addEventListener('click', addToCart);
    }

    function addToCart() {
        var menuItem = this.parentElement;
        var menuItemTitle = menuItem.querySelector('.menu-item-title').innerText;
        var menuItemPrice = menuItem.querySelector('.menu-item-price').innerText;

        // Replace this with your own logic to add the item to the cart
        alert('Added to cart:\n\n' + menuItemTitle + '\nPrice: ' + menuItemPrice);
    }