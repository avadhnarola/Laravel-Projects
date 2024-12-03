<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">


<div class="container">

    <h2 class="text-center mt-3">Welcome To dashboard</h2>
    <table class="table table-bordered">
        <thead class="table-info">
            <tr >
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Gender</th>
                <th>Contact No</th>
            </tr>
        </thead>

        <?php foreach ($data as $key => $values) { ?>
        <tr>
            <td>{{$values->id}}</td>
            <td>{{$values->name}}</td>
            <td>{{$values->email}}</td>
            <td>{{$values->password}}</td>
            <td>{{$values->gender}}</td>
            <td>{{$values->contact}}</td>
        </tr>
        <?php } ?>
    </table>
</div>
<div class="container">

    <a href="{{URL('/logout')}}" class="btn btn-danger">Logout</a>
</div>