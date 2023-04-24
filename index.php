<?php

//require 'logout.php';
include 'header.php';

//var_dump($_SESSION);
?>

<html>
    <body>
        <form action="step2.php">
            
            <table class="initial" style="width: 1000px; margin-top: 50px;">
            <h1 class="data_header">Welcome To Your IT Support Systems</h1>
                <tr>
                    <td>
                        <select name="address" id="address">
                            <option value=""></option>
                            <option value="Mr">Mr</option>
                            <option value="Miss">Miss</option>
                            <option value="Mrs">Mrs</option>
                        </select>
                    </td>
                    <td><input type="text" name="first_name" placeholder="First Name"></td>
                    <td><input type="text" name="last_name" placeholder="Last Name"></td>
                    <td>
                        <select name="role" id="role">
                            <option value=""></option>
                            <option value="admin">Admin</option>
                            <option value="manager">Manager</option>
                            <option value="ceo">CEO</option>
                        </select>
                    </td>
                    <?php
 //                       $_SESSION["first_name"] = $_GET["first_name"];
   //                     $_SESSION["last_name"] = $_GET["last_name"];
     //                   $_SESSION["role"] = $_GET["role"];
                    ?>
                    <td><input type="submit"></td>
                </tr> 
            </table>
            
        </form>
        <?php
            include 'footer.php';
            //var_dump($_SESSION);
        ?>
    </body>
</html>