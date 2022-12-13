<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inspire physics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>

    </style>
</head>

<body>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 ">
                <img src="imgae.-removebg-preview.png" width="200px" alt="">
                <h1>Inspire - Physics <span class="material-symbols-outlined">
                        lightbulb_circle
                    </span></h1>
                <p>This is a online registration and enquiry page so if you are interested to take admission in our
                    institute you can register your self and if you want to enquiry than in both condition you want to
                    fill
                    form and we will contact you immediately.</p>
            </div>

            <form class="col-md-8 mt-5" method="POST">
                <div class="row ms-md-4">
                    <div class="mb-3 col-md-6">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required>

                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="studentname" class="form-label">Enter-name</label>
                        <input type="text" name="studentname" class="form-control" id="studentname" required>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="fathersname" class="form-label">Enter-fathersname</label>
                        <input type="text" name="fathersname" class="form-control" id="fathersname" required>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="contactnumber" class="form-label">Conatct-number</label>
                        <input type="number" name="contactnumber" class="form-control" id="contactnumber" required>
                    </div>
                    <div class="col-md-6 mb-4 mt-3">
                        <select class="form-select" required name="qualification" aria-label="Default select example">
                            <option selected disabled value="">select your Qualification</option>
                            <option value="7th-8th-9th">7th-8th-9th</option>
                            <option value="10th">10th</option>
                            <option value="11th-12th">11th-12th</option>
                            <option value="BSC">BSC</option>
                        </select>
                    </div>
                    <div class="col-md-6 mt-3">
                        <select class="form-select" required  name="district"  aria-label="Default select example">
                            <option selected disabled value="">select your district</option>
                            <option value="Aaria">Aaria</option>
                            <option value="Bhagalpur">Bhagalpur</option>
                            <option value="Darbhanga">Darbhanga</option>
                            <option value="Patna">Patna</option>
                            <option value="Purnea">purnea</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="enter addres" class="form-label">Enter addres</label>
                        <textarea class="form-control" name="addres" id="enter addres" rows="3" required></textarea>
                    </div>
                    <div class="mb-3 col-md-3 ">
                        <label for="pincode" class="form-label">Enter-pincode</label>
                        <input type="number" name="pincode" class="form-control" id="pincode" required>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <a href="details.php" class="btn btn-primary mt-4">Check-details</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>


<?php
include 'connection.php';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $name = $_POST['studentname'];
    $fathername = $_POST['fathersname'];
    $contact = $_POST['contactnumber'];
    $qualification = $_POST['qualification'];
    $district = $_POST['district'];
    $addres = $_POST['addres'];
    $pincode = $_POST['pincode'];

    $insertquery = "insert into studentregis(email, name, fathersname, number, qualification, district,addres, pincode) values('$email', '$name', '$fathername', '$contact', '$qualification', '$district', '$addres', '$pincode')";

    $query = mysqli_query($con, $insertquery);
    if($query){
        ?>
        <script>alert("data submitted successfully");</script>
        <?php
    }else{
        ?>
        <script>alert("something is error");</script>
        <?php
    }

}
?>