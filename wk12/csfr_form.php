<?php
    session_start();

    function randString($n) { 
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
        $randomString = ''; 
    
        for ($i = 0; $i < $n; $i++) { 
            $index = rand(0, strlen($characters) - 1); 
            $randomString .= $characters[$index]; 
        } 
    
        return $randomString; 
    }

    $_SESSION["confirmation"] = randString(10);
?>

<script language="javascript" type="text/javascript">
    document.onload = function() { document.getElementById('login').submit(); }
</script>

<form method=POST action="csfr_action.php" id="login">
    <input type=hidden name=username value=host></input>
    <br>
    <input type=hidden name=pword value=pass></input>
    <br>
    <input type=hidden name=confirmation value='<?php $_SESSION["confirmation"]?>'></input>
</form>