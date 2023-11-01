<table border="1" align="center" width="50%" height="250px">
        
        <?php include_once ('top.php'); ?>
    
    <tr>
        <td>
<form method="POST" action="">

            <fieldset>
                <legend>Registration</legend>
                Name:<input type="text" name="name" id="" value="">
                <hr>
                Email:<input type="email" name="email" id="" value="">
                <hr>
                User Name:<input type="text" name="username" id="" value="">
                <hr>
                Password:<input type="password" name="password" id="" value="">
                <hr>
                Confirm Password:<input type="password" name="confirmpassword" id="" value="">
                <hr>
                <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="other">Other
                </fieldset>
                <hr>
                <fieldset>
                <legend>Date of Birth</legend>
                        <input type="text" name="day" value="" size="10">/
                        <input type="text" name="month" value="" size="10">/
                        <input type="text" name="year" value="" size="10">
                        <i>(dd/mm/yyyy)</i>
                <hr>
                </fieldset>
                </fieldset>
                <hr>
                <input type="submit" name="submit" id="" value="Submit">
                <input type="reset" name="submit" id="" value="Reset">
            </fieldset>
        </form></td>
    </tr>
    
        <?php include_once ('bottom.php'); ?>
    
</table>