<h1>Weak Password</h1>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label>Password</label>
    <input type="password" name="password">
    <br/>
    <input type="submit">
</form>

<?php
    $easy_passwords = array("123456", "123456789", "qwerty", "password", 
    "111111", "12345678", "abc123", "1234567", "password1", "12345");
    
    if (in_array($_POST['password'], $easy_passwords)) {
        echo "Successfully authenticated";
    }

?>