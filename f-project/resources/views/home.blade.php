<?php 

    echo "<h1>This is Home page</h1>";

?>

<a href="{{URL(path: '/second')}}">Second Page</a>

<form method="POST">
    @csrf
    <table>
        <tr>
            <td>Name : </td>
            <td>
                <input type="text" name="name">
            </td>
        </tr>
        <tr>
            <td>Age : </td>
            <td>
                <input type="number" name="age">
            </td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="submit"></td>
        </tr>
    </table>
</form>

{{$name}}
{{$age}}