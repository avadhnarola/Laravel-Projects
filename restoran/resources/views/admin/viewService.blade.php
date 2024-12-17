@include('admin/header')

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View Service</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{URL('/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">View Service</li>
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
                            <h3 class="card-title">Manage Service</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Icon</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $key => $values) { ?>
                                    <tr>
                                        <td>{{$values->id}}</td>
                                        <td>{{$values->icon}}</td>
                                        <td>{{$values->title}}</td>
                                        <td>{{$values->description}}</td>
                                        <td>
                                            <a href="{{URL('/updateService/'.$values->id)}}"><i class="fa-regular fa-pen-to-square" style="color:green;"></i></a>
                                        </td>
                                        <td>

                                            <a href="{{URL('/deleteService/'.$values->id)}}"><i class="fa-regular fa-trash-can" style="color:red; margin-left:8px;"></i></a>
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


