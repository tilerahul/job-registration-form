<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Display</title>
    <style>
        h1 {
            text-align: center;
            margin: 1rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Job Application Data</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Degree</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Email</th>
                    <th scope="col">Reference</th>
                    <th scope="col">Post</th>
                    <th scope="col" colspan="2">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'database.php';
                $selectQuery = "select * from jobreg";
                $query = mysqli_query($con, $selectQuery);

                $num = mysqli_num_rows($query);
                while ($res = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $res['Id']; ?></th>
                        <td><?php echo $res['Name']; ?></td>
                        <td><?php echo $res['Degree']; ?></td>
                        <td><?php echo $res['Mobile']; ?></td>
                        <td><?php echo $res['Email']; ?></td>
                        <td><?php echo $res['Refer']; ?></td>
                        <td><?php echo $res['Post']; ?></td>
                        <td><a href="update.php?Id=<?php echo $res['Id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Update"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                        <td><a href="delete.php?Id=<?php echo $res['Id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>

</html>