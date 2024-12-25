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
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input type="text" class="form-control" name="fname" id="firstName" placeholder="John"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" name="lname" placeholder="Doe"
                                            required>
                                    </div>
                                    <div class="col-12">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="john.doe@example.com" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="address" name="address" placeholder="123 Main St"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="city" class="form-label">City</label>
                                        <input type="text" class="form-control" id="city" name="city" placeholder="Los Angeles"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="zip" class="form-label">ZIP Code</label>
                                        <input type="text" class="form-control" id="zip" name="zip" placeholder="90001" required>
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
                                <div class="d-flex justify-content-between">
                                    <p>Item 1</p>
                                    <p>$10.00</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p>Item 2</p>
                                    <p>$15.00</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p>Delivery</p>
                                    <p>Free</p>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <h5>Total</h5>
                                    <p class="total">$25.00</p>
                                </div>
                                <input type="submit" name="placeOrder" class="btn btn-primary w-100 mt-3" value="Place Order">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
@include('footer')