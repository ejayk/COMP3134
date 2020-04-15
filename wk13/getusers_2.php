<form method="GET">
    <input type=text name=input>
    <input type=submit name=submit value="Submit">
</form>

<?php
$con=mysqli_connect("localhost","newuser","password","dbUsers");

if (mysqli_connect_errno())
    echo "Failed to connect to the database: " . mysqli_connect_error();

if (isset($_GET["submit"])) {
        $firstname = $_GET["input"];
        $active = 1;
        $sql = "SELECT * FROM users WHERE firstname LIKE ? AND active LIKE ?";
        $stmt = $con->prepare($sql); 
        $stmt->bind_param("si", $firstname, $active);
        $stmt->execute();
        $result = $stmt->get_result();
   
    echo "<html><head><style></style></head><body>	<table>  <tr>    
    <th>Username</th><th>Email</th><th>FirstName</th><th>LastName</th><th>Active</th>";

    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['firstname'] . "</td>";
        echo "<td>" . $row['lastname'] . "</td>";
        echo "<td>" . $row['active'] . "</td>";
        echo "</tr>";
    }
    echo "  </tr>       </table>        </body>         </html>";
}
mysqli_close($con);

?>