@include('header')

<body>
    <div class="container-xxl position-relative p-0">
        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container text-center my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Your Cart</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Cart</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <h1 class="text-center mb-4">Manage Your Cart</h1>
        <div class="row">
            <!-- Cart Items -->
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row align-items-center mb-3">
                            <div class="col-md-2 text-center">
                                <img src="food_images/french-fires.webp" class="img-fluid rounded" alt="Food Item">
                            </div>
                            <div class="col-md-4">
                                <h5>Pizza Margherita</h5>
                                <p class="text-muted">Delicious classic pizza</p>
                            </div>
                            <div class="col-md-2 text-center">
                                <div class="quantity-control d-flex justify-content-center align-items-center">
                                    <button class="btn btn-outline-secondary btn-sm btn-decrement">-</button>
                                    <span class="px-2 quantity">1</span>
                                    <button class="btn btn-outline-secondary btn-sm btn-increment">+</button>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                <p class="mb-0 price" data-price="12.99">₹12.99</p>
                            </div>
                            <div class="col-md-2 text-center">
                                <button class="btn btn-danger btn-sm btn-remove">Remove</button>
                            </div>
                        </div>
                        <hr>
                        <div class="row align-items-center">
                            <div class="col-md-2 text-center">
                                <img src="https://via.placeholder.com/100" class="img-fluid rounded" alt="Food Item">
                            </div>
                            <div class="col-md-4">
                                <h5>Caesar Salad</h5>
                                <p class="text-muted">Fresh and healthy</p>
                            </div>
                            <div class="col-md-2 text-center">
                                <div class="quantity-control d-flex justify-content-center align-items-center">
                                    <button class="btn btn-outline-secondary btn-sm btn-decrement">-</button>
                                    <span class="px-2 quantity">2</span>
                                    <button class="btn btn-outline-secondary btn-sm btn-increment">+</button>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                <p class="mb-0 price" data-price="8.50">₹8.50</p>
                            </div>
                            <div class="col-md-2 text-center">
                                <button class="btn btn-danger btn-sm btn-remove">Remove</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Summary -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Order Summary</h5>
                        <div class="d-flex justify-content-between">
                            <p class="mb-1">Subtotal : </p>
                            <p class="mb-1" id="subtotal">₹30.99</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="mb-1">Delivery Charge : (5%)</p>
                            <p class="mb-1" id="tax">₹3.10</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <h6>Total : </h6>
                            <h6 id="total">₹34.09</h6>
                        </div>
                        <button class="btn btn-primary w-100 mt-3">Proceed to Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
@include('footer')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const updateSummary = () => {
            let subtotal = 0;
            const rows = document.querySelectorAll('.card-body .row.align-items-center');

            rows.forEach(row => {
                const priceElement = row.querySelector('.price');
                const quantityElement = row.querySelector('.quantity');

                if (priceElement && quantityElement) {
                    const price = parseFloat(priceElement.dataset.price);
                    const quantity = parseInt(quantityElement.textContent);
                    subtotal += price * quantity;
                }
            });

            const tax = subtotal * 0.05;
            const total = subtotal + tax;

            document.getElementById('subtotal').textContent = `$${subtotal.toFixed(2)}`;
            document.getElementById('tax').textContent = `$${tax.toFixed(2)}`;
            document.getElementById('total').textContent = `$${total.toFixed(2)}`;
        };

        document.querySelectorAll('.btn-increment').forEach(button => {
            button.addEventListener('click', function () {
                const quantityElement = this.closest('.quantity-control').querySelector('.quantity');
                quantityElement.textContent = parseInt(quantityElement.textContent) + 1;
                updateSummary();
            });
        });

        document.querySelectorAll('.btn-decrement').forEach(button => {
            button.addEventListener('click', function () {
                const quantityElement = this.closest('.quantity-control').querySelector('.quantity');
                const currentValue = parseInt(quantityElement.textContent);
                if (currentValue > 1) {
                    quantityElement.textContent = currentValue - 1;
                    updateSummary();
                }
            });
        });

        document.querySelectorAll('.btn-remove').forEach(button => {
            button.addEventListener('click', function () {
                const confirmation = confirm('Are you sure you want to remove this item from your cart?');

                if (confirmation) {
                    const itemRow = this.closest('.row');
                    if (itemRow) {
                        itemRow.remove();
                        updateSummary();
                    }
                }
            });
        });
    });
</script>