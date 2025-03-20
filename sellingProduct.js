// Import the products data
import products from './data.js';
function getProductIdFromUrl() {
    const urlParams = new URLSearchParams(window.location.search);
    return parseInt(urlParams.get('id'), 10); // Get the 'id' parameter from the URL
}

function displayProductDetails() {
    const productId = getProductIdFromUrl();
    const product = products.find(p => p.id === productId); // Find the product by ID

    if (product) {
        // Populate the HTML elements with product details
        document.querySelector('.product-image img').src = product.image;
        document.querySelector('.product-image img').alt = product.name;
        document.querySelector('.product-details h2').textContent = product.name;
        document.querySelector('.product-price').textContent = `$${product.price.toFixed(2)}`;
        document.querySelector('.product-details p').textContent = product.details;

        // Set the initial quantity in the input field
        document.getElementById('quantity').value = product.quantity;

        // Add event listeners for quantity buttons
        document.querySelector('.quantity-selector button.btn-light.btn-sm:first-of-type').addEventListener('click', () => {
            decreaseQuantity();
        });

        document.querySelector('.quantity-selector button.btn-light.btn-sm:last-of-type').addEventListener('click', () => {
            increaseQuantity();
        });
    } else {
        console.error('Product not found');
        // Optionally, display an error message or redirect to a 404 page
    }
}

// Execute the display function when the DOM is fully loaded
document.addEventListener('DOMContentLoaded', displayProductDetails);

function decreaseQuantity() {
    var quantity = document.getElementById("quantity");
    if (quantity.value > 1) {
        quantity.value--;
    }
}

function increaseQuantity() {
    var quantity = document.getElementById("quantity");
    quantity.value++;
}