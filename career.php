<!DOCTYPE html>
<html lang="en">
  <?php include 'config.php'?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        .banner{
            background-size: cover;
        }
        .navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed; /* Set the navbar to fixed position */
  top: 0; /* Position the navbar at the top of the page */
  width: 100%; /* Full width */
}
h1,
p{
  color:#fff;
}
.jobs{
      border:1px solid black;
      box-shadow:5px 5px 4px 5px grey;
      margin:10px;
      padding:10px;
    }
    </style>
    <title>Career</title>
</head>
<body>
<!-- <div class="container-fluid">
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="banner">
    <img src="banner1.jpg" alt="banner" class="img-fluid" width="1900">
</div>

<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">PHP Developer</h5>
      <h6 class="card-subtitle mb-2 text-muted" style="text-align: center;">Company Name</h6>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

      <p>
          <b>Skills Required: </b> qwertsjjdn
      </p>
      <p>
        <b>Job Location: </b> qwertsjjdn
    </p>
    <p>
        <b>CTC: </b> qwertsjjdn
    </p>
    </div>
  </div>

</div> -->
    <div class="row">
    <div class="col-12">
      <div class="jumbotron jumbotron-fluid" style="background-image:url('banner-1.jpg'); background-size:cover;">
        <div class="container">
          <h1 class="display-4">Job Portal</h1>
            <p class="lead">Best aJobs available matching your skills</p>
        </div>
    
    </div>
    </div>
    </div>
    <div class="row">
      <?php
      $sql="SELECT cname,position,Jdesc,CTC,skills from jobs";
      $result=mysqli_query($conn,$sql);
      if($result->num_rows>0){
        while($rows=$resulty->fetch_assoc()){
          echo'
          <div class="col-md-4">
            <div class="jobs">
              <h3 style="text-align:center;">'.$rows['position'].'</h3>
              <h4 style="text-align:center;">'.$rows['cname'].'</h4>
              <p style="color:black;text-align:justify;">'.$rows['Jdesc'].'</p>
              <p style="color:black;"><b>skills required:</b>'.$rows['skills].'</p>
              <p style="color:black;"><b>CTC:</b>'.$rows['CTC].'</p>
              <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
                  Apply Now
              </button>
            </div>
          </div>';
       }
      }
      ?>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply for jobs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying for:</label>
            <input type="text" class="form-control" name="apply"></div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year Passout</label>
            <input type="text" class="form-control" name="year">
          </div>
        <!-- <div class="mb-3">
            <label for="message-text" class="col-form-label">.....</label>
              <textarea class="form-control" id="message-text"></textarea>
        </div> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Apply</button>
        </form>
      </div>
    </div>
  </div>
</div>
      <!-- <div class="collapse" id="collapseExample">
  <div class="card card-body">
      <form action="" method="POST">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="" name="cname" >
</div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name="pos">
  </div>
    <div class="mb-3">
    <label for="JobDesc" class="form-label">Job Description</label>
    <textarea name="" id="" cols="30" rows="10" class="flow-control"  name="Jdesc">  </textarea></div>
    <div class="mb-3">
    <label for="skills" class="form-label">Skills Required</label>
    <input type="text" class="form-control" id="skills" id="skills"></div>
    <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name="CTC">
  </div>
  <button type="submit" class="btn btn-primary" name="job">Submit</button>
</form> -->

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>