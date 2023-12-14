<!DOCTYPE html>
<html lang="en">

<head>
    <title>Job Application Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./jobapp.css">
</head>

<body>

    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <h3>Apply for Web Developer Post</h3>
                <div class="card">
                    <form class="form-card" method="POST">
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Enter Your Name<span class="text-danger"> *</span></label>
                                <input type="text" id="fname" name="name" placeholder="Enter your first name">
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Enter Your Qualification<span class="text-danger"> *</span></label>
                                <input type="text" id="lname" name="qul" placeholder="Enter your Qualification">
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label>
                                <input type="text" id="mob" name="mob" placeholder="">
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Business email<span class="text-danger"> *</span></label>
                                <input type="text" id="email" name="email" placeholder="">
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Any References<span class="text-danger"> *</span></label>
                                <input type="text" id="job" name="ref" placeholder="">
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Post<span class="text-danger"> *</span></label>
                                <input type="text" id="job" name="job" value="Web Developer">
                            </div>

                        </div>


                        <div class="row justify-content-end">
                            <div class="form-group col-sm-6"><a href="display.php" class="btn-block check-form btn-primary">Check Form</a></div>
                            <div class="form-group col-sm-6"> <input type="submit" class="btn-block btn-primary" name="submit"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>

    </script>
</body>

</html>

<?php
    include 'database.php';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $qul = $_POST['qul'];
        $mobile = $_POST['mob'];
        $email = $_POST['email'];
        $refer = $_POST['ref'];
        $job = $_POST['job'];

        $insertQuery = "insert into jobreg(Name, Degree, Mobile, Email, Refer, Post) values( '$name', '$qul', '$mobile', '$email', '$refer', '$job' )";

        $res = mysqli_query($con, $insertQuery);
        if($res){
            ?>
            <script>alert("Registration Successful !!")</script>
            <?php
        }else{
            ?>
            <script>alert("Registration Failed !!")</script>
            <?php
        } 
    }
?>