<?php 

echo "Welcome to first laravel<br>";

?>
<a href="{{URL(path: '/second')}}">Second Page</a>


<h2>Simple Form</h2>

<form method="POST"> 
    @csrf
    <table>
        <tr>
            <td>Name : </td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit"></td>
        </tr>
    </table>
</form>

{{$name}}