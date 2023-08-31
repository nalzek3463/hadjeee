document.addEventListener('DOMContentLoaded', function () {
    var wishlistButtons = document.querySelectorAll('.dodaj_wishlist');

    wishlistButtons.forEach(function (button) {
        button.addEventListener('click', addToWishlist);
    });

    function addToWishlist(event) {
        var productId = event.currentTarget.getAttribute('data-product-id');

        // Send an AJAX request to the server
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'dodaj-wishlist.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Wishlist item added successfully
                    alert('Arikal dodan u listu želja!');
                } else {
                    // Error adding wishlist item
                    alert('Neuspjelo dodavalje artikla u listu želja.');
                }
            }
        };
        xhr.send('productId=' + encodeURIComponent(productId));
    }
});
