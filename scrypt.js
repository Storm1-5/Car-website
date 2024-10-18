document.addEventListener('DOMContentLoaded', () => {
    const cart = [];
    const products = document.querySelectorAll('.prod');
    const cartItems = document.getElementById('cart-items');
    const totalPrice = document.getElementById('total-price');
   
    

    products.forEach(product => {
        product.querySelector('.add-to-cart').addEventListener('click', () => {
            const productId = product.getAttribute('data-id');
            const productName = product.querySelector('h3').innerText;
            const productPrice = parseFloat(product.querySelector('p').innerText.replace('Prix: ', '').replace('€', ''));

            const cartItem = cart.find(item => item.id === productId);
            if (cartItem) {
                cartItem.quantity++;
            } else {
                cart.push({ id: productId, name: productName, price: productPrice, quantity: 1 });
            }

            updateCart();
        });
        resetCart();
    });

  

    function updateCart() {
        cartItems.innerHTML = '';
        let total = 0;

        cart.forEach(item => {
            const li = document.createElement('li');
            li.innerText = `${item.name} - ${item.quantity} x ${item.price}€`;
            cartItems.appendChild(li);
            total += item.price * item.quantity;
        });

        totalPrice.innerText = total.toFixed(2);
    }

});
