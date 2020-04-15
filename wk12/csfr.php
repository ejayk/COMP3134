<form method=POST>
<label for="username">Username:</input>
<input type=text name=username></input>

<br>

<label for="pword">Password:</input>
<input type=password name=pword></input>

<br>

<input type=submit name= submit value="Submit Form"/>
</form>

<div id="splash">

<?php
    
    if ($_POST['username'] == 'host' && $_POST['pword'] == 'pass'){
        print "Access Granted!";
    }
    else{
        print "Access Denied...";
    }
    ?>

</div>
