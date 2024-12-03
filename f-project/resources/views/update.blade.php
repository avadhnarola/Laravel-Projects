<?php foreach ($data as $key => $values) { ?>

    <form method="POST">
        @csrf
        <table>
            <tr>
                <td>Name : </td>
                <td><input type="text" name="name" value="{{$values->name}}"></td>
            </tr>
            <tr>
                <td>Email : </td>
                <td><input type="email" name="email" value="{{$values->email}}"></td>
            </tr>
            <tr>
                <td>Password : </td>
                <td><input type="password" name="password" value="{{$values->password}}"></td>
            </tr>
            <tr>
            <td>Gender : </td>
            <td>
                <input type="radio" name="gender" value="Male" <?php if($values->gender == 'Male'){echo 'checked';} ?>> Male
                <input type="radio" name="gender" value="Female" <?php if($values->gender == 'Female'){echo 'checked';} ?>> Female
            </td>
        </tr>
        <tr>
            <td>City : </td>
            <td>
                <select name="city" id="">
                    <option value="" disabled selected>-- Select City --</option>
                    <option value="Surat" <?php if($values->city == 'Surat'){echo 'selected';} ?>>Surat</option>
                    <option value="Vapi"<?php if($values->city == 'Vapi'){echo 'selected';} ?>>Vapi</option>
                    <option value="Navasari"<?php if($values->city == 'Navasari'){echo 'selected';} ?>>Navasari</option>
                    <option value="Vadodara"<?php if($values->city == 'Vadodara'){echo 'selected';} ?>>Vadodara</option>
                    <option value="Gandhinagar"<?php if($values->city == 'Gandhinagar'){echo 'selected';} ?>>Gandhinagar</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Contact : </td>
            <td><input type="number" name="contact" value="{{$values->contact}}"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" class="btn btn-primary mt-2"></td>
        </tr>
        </table>
    </form>

<?php } ?>