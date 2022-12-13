
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
    <div class="container">
      <h1 class="text-center mb-4">List of student who has been register</h1>
      <table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Email</th>
      <th>Student Name</th> 
      <th>Fathers Name</th>
      <th>Conatct</th>
      <th>Qualification</th>
      <th>District</th>
      <th>Addres</th>
      <th>Pincode</th>
      <th colspan="2">Operation</th>
    </tr>
  </thead>
  <tbody>
                <?php
                include 'connection.php';
                $select_query = "select * from studentregis";
                $query = mysqli_query($con, $select_query);
                while($res = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                   
                    <td><?php echo $res['id'] ?></td>
                    <td><?php echo $res['email'] ?></td>
                    <td><?php  echo $res['name'] ?></td>
                    <td><?php echo $res['fathersname'] ?></td>
                    <td><?php echo $res['number']  ?></td>
                    <td><?php echo $res['qualification'] ?></td>
                    <td><?php echo $res['district'] ?></td>
                    <td><?php echo $res['addres'] ?></td>
                    <td><?php echo $res['pincode'] ?></td>
                    <td><a href="update.php?id= <?php echo $res['id'] ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="change your details"> <i class="fa-solid fa-pen-to-square" ></i></a></td>
                    <td><a href="delete.php?ids= <?php echo $res['id']?> " data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="fa-solid fa-trash"></i></td></a>
                    </tr>
                    <?php
                }

              ?>
    
    
    
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>
</html>