<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Account</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/register.css">


</head>

<body>

    <div class="mt-5">
        <div class="form-container m-auto">
            <p class="title">Update Account</p>
            <?php foreach ($data as $key => $values) { ?>
            <form class="form" method="post">
                @csrf
                <input type="text" class="input" placeholder="Name" name="name" required value="{{$values->name}}">
                <input type="email" class="input" placeholder="Email" name="email" required value="{{$values->email}}">
                <input type="password" class="input" placeholder="Password" name="password" required
                    value="{{$values->password}}">

                <table>
                    <tr>
                        <th>Gender : </th>
                        <td>
                            <input type="radio" value="Male" name="gender" style="margin-right: 5px;" <?php    if ($values->gender == 'Male') {
        echo 'checked';
    } ?>>Male
                            <input type="radio" value="Female" name="gender" style="margin-right: 5px;" <?php    if ($values->gender == 'Female') {
        echo 'checked';
    } ?>>Female
                        </td>
                    </tr>
                </table>
                <input type="number" class="input" placeholder="Contact No." name="contact"
                    value="{{$values->contact}}">



                <input class="form-btn" type="submit" name="submit" value="Update Account">
            </form>
            <?php }?>

        </div>
    </div>
</body>

</html>