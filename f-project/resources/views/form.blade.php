<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<form method="POST" class="form mt-5 mx-5">
    @csrf
    <table class="form-group">
        <tr>
            <td>Name : </td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email : </td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Password : </td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>Gender : </td>
            <td>
                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female
            </td>
        </tr>
        <tr>
            <td>City : </td>
            <td>
                <select name="city" id="">
                    <option value="" disabled selected>-- Select City --</option>
                    <option value="Surat">Surat</option>
                    <option value="Vapi">Vapi</option>
                    <option value="Navasari">Navasari</option>
                    <option value="Vadodara">Vadodara</option>
                    <option value="Gandhinagar">Gandhinagar</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Contact : </td>
            <td><input type="number" name="contact"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" class="btn btn-primary mt-2"></td>
        </tr>
    </table>
</form>

<table border="" class="table table-info table-bordered">
    <thead class="table-secondary">
        <th>User Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Gender</th>
        <th>City</th>
        <th>Contact</th>
        <th>Delete</th>
        <th>Update</th>
        <!-- <th>User Id</th> -->
    </thead>
    <?php foreach ($data as $key => $values) { ?>
    <tr>
        <td>{{$values->id}}</td>
        <td>{{$values->name}}</td>
        <td>{{$values->email}}</td>
        <td>{{$values->password}}</td>
        <td>{{$values->gender}}</td>
        <td>{{$values->city}}</td>
        <td>{{$values->contact}}</td>
        <td><a href="{{URL('/delete/' . $values->id)}}" class="btn btn-danger">Delete</a></td>
        <td><a href="{{URL('/update/' . $values->id)}}" class="btn btn-warning">Update</a></td>
    </tr>
    <?php } ?>
</table>