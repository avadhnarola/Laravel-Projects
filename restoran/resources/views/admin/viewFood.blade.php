@include('admin/header')

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View Food</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{URL('/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">View Food</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="card-title">Manage Food</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Food Type</th>
                                        <th>Price</th>
                                        <th>Food Image</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $key => $values) { ?>
                                    <tr>
                                        <td>{{$values->id}}</td>
                                        <td>{{$values->name}}</td>
                                        <td>{{$values->description}}</td>
                                        <td>{{$values->foodType}}</td>
                                        <td>{{$values->price}}</td>
                                        <td>{{$values->image}}</td>
                                        <td>
                                            <a href="{{URL('/updateFood/' . $values->id)}}"><i
                                                    class="fa-regular fa-pen-to-square" style="color:green;"></i></a>
                                        </td>
                                        <td>

                                            <a href="{{URL('/deleteFood/' . $values->id)}}"><i class="fa-regular fa-trash-can"
                                                    style="color:red; margin-left:8px;"></i></a>
                                        </td>
                                    </tr>
                                    <?php }?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('admin/footer');


