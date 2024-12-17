@include('admin/header')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Testimonial Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Testimonial Form</li>
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
                            <h3 class="card-title">Manage Testimonial</h3>
                        </div>
                        <form method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input required type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter Name" name="name">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <input required type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter Description" name="description">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Profession</label>
                                    <input required type="text" class="form-control" id="exampleInputPassword1"
                                        placeholder="Enter Profession" name="profession">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Testimonial Image</label>
                                    <input required type="file" class="form-control" name="image">
                                </div>

                            </div>
                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary" name="submit" value="Submit Data">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@include('admin/footer')