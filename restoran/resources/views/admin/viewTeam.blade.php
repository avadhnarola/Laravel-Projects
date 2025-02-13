@include('admin/header')

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View Chef</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{URL('/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">View Chef</li>
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
                            <h3 class="card-title">Manage Chef</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Image</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $key => $values) { ?>
                                    <tr>
                                        <td>{{$values->id}}</td>
                                        <td>{{$values->name}}</td>
                                        <td>{{$values->designation}}</td>
                                        <td><img src="{{asset("chef_images/".$values->image)}}" alt="" style="height:80px; width:80px;"></td>
                                        <td>
                                            <a href="{{URL('/updateTeam/'.$values->id)}}"><i class="fa-regular fa-pen-to-square" style="color:green;"></i></a>
                                        </td>
                                        <td>

                                            <a href="{{URL('/deleteTeam/'.$values->id)}}"><i class="fa-regular fa-trash-can" style="color:red; margin-left:8px;"></i></a>
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


