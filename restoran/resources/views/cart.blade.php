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

                        <?php foreach ($cart_data as $key => $values) { ?>
                        <div class="row align-items-center mb-3">
                            <div class="col-md-2 text-center">
                                <img src="{{asset('food_images/' . $values->image)}}" class="img-fluid rounded"
                                    alt="Food Item">
                            </div>
                            <div class="col-md-4">
                                <h5>{{$values->name}}</h5>
                                <p class="text-muted">{{$values->description}}</p>
                            </div>
                            <div class="col-md-2 text-center">
                                <div class="quantity-control d-flex justify-content-center align-items-center">
                                    <button class="btn btn-outline-secondary btn-sm btn-decrement">-</button>
                                    <span class="px-2 quantity">1</span>
                                    <button class="btn btn-outline-secondary btn-sm btn-increment">+</button>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                <p class="mb-0 price" data-price="{{$values->price}}">₹{{$values->price}}</p>
                            </div>
                            <div class="col-md-2 text-center">
                                <a href="{{URL('/deleteCart/' . $values->id)}}"
                                    class="btn btn-danger btn-sm btn-remove">Remove</a>
                            </div>
                        </div>

                        <hr>
                        <?php } ?>

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
                            <p class="mb-1" id="subtotal">₹0.00</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="mb-1">Discount: (10%)</p>
                            <p class="mb-1" id="discount">₹0.00</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="mb-1">Delivery: </p>
                            <p class="mb-1" id="discount">Free</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <h6>Total : </h6>
                            <h6 id="total">₹0.00</h6>
                        </div>
                        <a href="/checkOut" class="btn btn-primary w-100 mt-3">Proceed to Checkout</a>
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
        let subtotal = 0;
        let discount = 0;
        let total = 0;

        const updateSummary = () => {
            subtotal = 0; // Reset subtotal

            const rows = document.querySelectorAll('.row.align-items-center');

            rows.forEach(row => {
                const priceElement = row.querySelector('.price');
                const quantityElement = row.querySelector('.quantity');

                if (priceElement && quantityElement) {
                    const price = parseFloat(priceElement.dataset.price);
                    const quantity = parseInt(quantityElement.textContent);

                    subtotal += price * quantity;
                }
            });

            discount = subtotal * 0.1; // Calculate discount (5% of subtotal)
            total = subtotal - discount; // Calculate total

            // Update the DOM
            document.getElementById('subtotal').textContent = `₹${subtotal.toFixed(2)}`;
            document.getElementById('discount').textContent = `- ₹${discount.toFixed(2)}`;
            document.getElementById('total').textContent = `₹${total.toFixed(2)}`;
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

        // Initial calculation
        updateSummary();
    });
</script>