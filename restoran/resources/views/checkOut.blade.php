@include('header')

<body>
    <div class="container-xxl position-relative p-0">
        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container text-center my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Check Out Now !</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Check Out</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <!-- Billing Details -->
                        <div class="col-md-12">
                            <h4 class="mb-4">Billing Details</h4>
                            <form id="checkoutForm">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input type="text" class="form-control" name="fname" id="firstName"
                                            placeholder="John" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" name="lname"
                                            placeholder="Doe" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="john.doe@example.com" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="address" name="address"
                                            placeholder="123 Main St" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="city" class="form-label">City</label>
                                        <input type="text" class="form-control" id="city" name="city"
                                            placeholder="Los Angeles" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="zip" class="form-label">ZIP Code</label>
                                        <input type="text" class="form-control" id="zip" name="zip" placeholder="90001"
                                            required>
                                    </div>
                                    <div class="col-12">
                                        <label for="notes" class="form-label">Order Notes</label>
                                        <textarea class="form-control" id="notes" rows="3" name="notes"
                                            placeholder="Add any special instructions..."></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12">
                            <h4 class="mb-4">Order Summary</h4>
                            <div class="summary-box">
                                <div id="cartItems">
                                    <?php foreach ($cart_data as $key => $values) { ?>
                                    <div class="d-flex justify-content-between">
                                        <p>{{$values->name}}</p>
                                        <p class="price" data-price="{{$values->price}}">₹{{$values->price}}</p>
                                    </div>
                                    <?php }?>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p>Discount : (10%)</p>
                                    <p id="discount">₹0.00</p>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <h5>Total: </h5>
                                    <b><h6 id="total">₹0.00</h6></b>
                                </div>
                                <button type="button" id="placeOrder" class="btn btn-primary w-100 mt-3">
                                    Place Order
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let subtotal = 0;
            let discount = 0;
            let total = 0;

            const updateSummary = () => {
                subtotal = 0;

                const prices = document.querySelectorAll('.price');

                prices.forEach(priceElement => {
                    const price = parseFloat(priceElement.dataset.price);
                    subtotal += price;
                });

                discount = subtotal * 0.1; // Calculate discount (20% of subtotal)
                total = subtotal - discount; // Calculate total

                // Update the DOM
                document.getElementById('discount').textContent = `- ₹${discount.toFixed(2)}`;
                document.getElementById('total').textContent = `₹${total.toFixed(2)}`;
            };

            const printBill = () => {
                const cartItems = `<?php foreach ($cart_data as $key => $values) { ?>
                    <tr>
                        <td><img src="{{asset('food_images/'.$values->image)}}" alt="Product Image" style="width: 50px; height: 50px;"></td>
                        <td>{{$values->name}}</td>
                        <td>₹{{$values->price}}</td>
                    </tr>
                <?php } ?>`;

                const billWindow = window.open('', '_blank');

                billWindow.document.write(`
                    <html>
                        <head>
                            <title class="text-center">Order Bill</title>
                            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                            <style>
                                body { font-family: Arial, sans-serif; margin: 20px; }
                                .bill-header { text-align: center; margin-bottom: 20px; }
                                .bill-header h1 { margin: 0; }
                                .table img { object-fit: cover; }
                            </style>
                        </head>
                        <body>
                            <div class="bill-header">
                                <h1>Your Order Bill</h1>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Item</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ${cartItems}
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2">Discount:</td>
                                        <td>- ₹${discount.toFixed(2)}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><strong>Total:</strong></td>
                                        <td><strong>₹${total.toFixed(2)}</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="bill-header">
                                <h1>Thank You!</h1>
                            </div>
                        </body>
                    </html>
                `);

                billWindow.document.close();
                billWindow.print();
            };

            // Add event listener to the "Place Order" button
            document.getElementById('placeOrder').addEventListener('click', function () {
                updateSummary();
                printBill();
            });

            // Initial calculation
            updateSummary();
        });
    </script>
</body>
@include('footer')
