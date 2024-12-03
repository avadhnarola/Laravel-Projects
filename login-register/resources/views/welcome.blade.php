<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<form method="POST" class="form mt-5 mx-5">
    @csrf
    <table>
        <tr>
            <td>Email : </td>
            <td><input type="email" name="email" class="form-control"></td>
        </tr>
        <tr>
            <td>Password : </td>
            <td><input type="password" name="password" class="form-control"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Login" class="btn btn-primary mt-2"></td>
        </tr>
    </table>
</form>
