@include('header')

<div class="container-xxl position-relative p-0">
    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Food Menu</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<!-- Menu Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
            <h1 class="mb-5">Most Popular Items</h1>
        </div>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <!-- Filter Tabs -->
            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-filter="data-*" href="#">
                        <i class="fa fa-coffee fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Popular</small>
                            <h6 class="mt-n1 mb-0">All Foods</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 " data-filter="Breakfast" href="#">
                        <i class="fa fa-coffee fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Popular</small>
                            <h6 class="mt-n1 mb-0">Breakfast</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 pb-3" data-filter="Lunch" href="#">
                        <i class="fa fa-hamburger fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Special</small>
                            <h6 class="mt-n1 mb-0">Lunch</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-filter="Dinner" href="#">
                        <i class="fa fa-utensils fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Lovely</small>
                            <h6 class="mt-n1 mb-0">Dinner</h6>
                        </div>
                    </a>
                </li>
            </ul>

            <!-- Food Items -->
            <div class="tab-content">
                <div id="food-list" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <?php foreach ($menu_data as $key => $values) { ?>
                        <div class="col-lg-6 food-item {{$values->foodType}}">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded"
                                    src="{{asset('food_images/' . $values->image)}}" alt=""
                                    style="width: 80px; height:80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>{{$values->name}}</span>
                                        <span class="text-primary">₹{{$values->price}}</span>
                                    </h5>
                                    <div class="d-flex">
                                        <div class="col-sm-10">
                                            <small class="fst-italic">{{$values->description}}</small>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="/cart" class="btn btn-cart"
                                                style="background-color:#0F172B; color:#fff;">Order</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Menu End -->



@include('footer')


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const filterLinks = document.querySelectorAll('.nav-item a[data-filter]');
        const foodItems = document.querySelectorAll('.food-item');

        filterLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();

                // Remove active class from all links
                filterLinks.forEach(link => link.classList.remove('active'));

                // Add active class to the clicked link
                this.classList.add('active');

                // Get the filter value
                const filter = this.getAttribute('data-filter');

                // Show/Hide items based on the filter
                foodItems.forEach(item => {
                    if (filter === "all" || item.classList.contains(filter)) {
                        item.style.display = "block";
                    } else {
                        item.style.display = "none";
                    }
                });
            });
        });
    });
</script>