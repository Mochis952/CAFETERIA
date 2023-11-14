// app.js

// Objeto para manejar el carrito
const Cart = {
    items: [],
    total: 0,

    // Añadir un producto al carrito
    addToCart: function (productId, name, price) {
        // Verificar si el producto ya está en el carrito
        const existingItem = this.items.find(item => item.productId === productId);

        if (existingItem) {
            // Si el producto ya está en el carrito, aumenta la cantidad
            existingItem.quantity += 1;
        } else {
            // Si no, agrega un nuevo elemento al carrito
            this.items.push({ productId, name, price, quantity: 1 });
        }

        this.calculateTotal();
        this.updateCartView();
    },

    // Restar un producto del carrito
    removeFromCart: function (productId) {
        // Buscar el producto en el carrito
        const existingItem = this.items.find(item => item.productId === productId);

        if (existingItem) {
            // Si hay más de un artículo, decrementar la cantidad
            if (existingItem.quantity > 1) {
                existingItem.quantity -= 1;
            } else {
                // Si solo hay un artículo, eliminar el producto del carrito
                this.items = this.items.filter(item => item.productId !== productId);
            }

            this.calculateTotal();
            this.updateCartView();
        }
    },

    // Calcular el total del carrito
    calculateTotal: function () {
        this.total = this.items.reduce((acc, item) => acc + item.price * item.quantity, 0);
    },

    // Actualizar la vista del carrito
    updateCartView: function () {
        const cartSection = document.getElementById('cart');
        const cartTotal = document.getElementById('cart-total');
        const cartItems = document.getElementById('cart-items');
        const cartIcon = document.getElementById('cart-icon');

        // Mostrar el carrito
        cartSection.style.display = 'block';

        // Limpiar la lista de elementos del carrito
        cartItems.innerHTML = '';

        // Añadir los elementos al carrito
        this.items.forEach(item => {
            const cartItem = document.createElement('li');
            cartItem.textContent = `${item.name} - $${item.price.toFixed(2)} x ${item.quantity}`;

            // Agregar botón para restar producto
            const removeButton = document.createElement('button');
            removeButton.textContent = 'Eliminar';
            removeButton.classList.add('delete-item');
            removeButton.setAttribute('data-id', item.productId);
            removeButton.addEventListener('click', removeFromCart);
            cartItem.appendChild(removeButton);

            cartItems.appendChild(cartItem);
        });

        // Actualizar el total en el carrito
        cartTotal.innerText = this.total.toFixed(2);

        // Mostrar el número de elementos en el ícono del carrito
        cartIcon.innerText = this.items.reduce((acc, item) => acc + item.quantity, 0);
        cartIcon.style.display = 'block';
    }
};

// Manejar clic en el botón "Agregar al carrito"
document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', addToCart);
});

// Manejar clic en el botón "Eliminar" del carrito
document.querySelectorAll('.delete-item').forEach(button => {
    button.addEventListener('click', removeFromCart);
});

// Función para agregar un producto al carrito
function addToCart(event) {
    const button = event.target;
    const productId = button.getAttribute('data-id');
    const productName = button.getAttribute('data-name');
    const productPrice = parseFloat(button.getAttribute('data-price'));

    // Añadir el producto al carrito
    Cart.addToCart(productId, productName, productPrice);
}

// Función para restar un producto del carrito
function removeFromCart(event) {
    const button = event.target;
    const productId = button.getAttribute('data-id');

    // Restar el producto del carrito
    Cart.removeFromCart(productId);
}
