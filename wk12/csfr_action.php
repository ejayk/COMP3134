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
    $session_confirm = $_SESSION["confirmation"]; 
    $post_confirm  = $_POST['confirmation'];

    if ($session_confirm == $post_confirm && $_POST['pword'] == 'pass' && $_POST['username'] == 'host'){
        print "Access Granted";
    }
    else{
        print "Access Denied";
    }
?>

</div>