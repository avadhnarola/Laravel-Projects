@include('admin/header')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Food Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Food Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Update Food</h3>
                        </div>
                        <?php foreach ($data as $key => $values) { ?>

                        <form method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input required type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter Food Name" name="name" value="{{$values->name}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Discription</label>
                                    <input required type="text" class="form-control" id="exampleInputPassword1"
                                        placeholder="Enter Discription" name="description"
                                        value="{{$values->description}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Eating Type</label>
                                    <select name="foodType" id="foodType" class="form-control">
                                        <option value="" disabled>Select Your Type</option>
                                        <option value="Breakfast" @selected($values->foodType == 'Breakfast')>Breakfast
                                        </option>
                                        <option value="Lunch" @selected($values->foodType == 'Lunch')>Lunch</option>
                                        <option value="Dinner" @selected($values->foodType == 'Dinner')>Dinner</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Price</label>
                                    <input required type="text" class="form-control" id="exampleInputPassword1"
                                        placeholder="Enter price" name="price" value="{{$values->price}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Food Image</label>
                                    <input required type="file" class="form-control" name="image"
                                        value="{{$values->image}}">
                                </div>

                            </div>
                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary" name="submit" value="Submit Data">
                            </div>
                        </form>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@include('admin/footer')