<?php
include 'database.php';
$Id = $_GET['Id'];

$deleteQuery = "delete from jobreg where ID=$Id";

$query = mysqli_query($con, $deleteQuery);


if ($query) {
    ?>
    <script>
        alert("Delete Successful !!")
        </script>
<?php
} else {
    ?>
    <script>
        alert("Delete Failed !!")
        </script>
<?php
}
header('location:display.php');
?>