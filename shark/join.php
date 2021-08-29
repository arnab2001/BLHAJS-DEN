<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="../css/backendstyle.css">
  <title>join us!</title>
</head>

<body>
  <!-- Button trigger modal -->
  <section class="join join-2">
    <div class="container">

        <div class="d-flex justify-content-evenly align-items-center h-100">
  <button type="button" class="btun " data-bs-toggle="modal" data-bs-target="#exampleModal">
    Join us
  </button>

  <button type="button" class="btun " data-bs-toggle="modal" data-bs-target="#exampleModal2">
    Donate
  </button>
    </div>
    </div>
  </section>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Join The Cause!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="backend.php">

            <div class="form-group">
              <label>Name</label>
              <input name="name" required class="form-control" id="name" placeholder="Enter your full name">

            </div>
            <div class="form-group">
              <label>Email</label>
              <input name="email" required class="form-control" id="exampleInputPassword1" placeholder="Enter your Email address">
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Tell us why you want to join</label>
              <textarea name="description" required class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Under 100 words"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Tell us what would you want to do for the community</label>
              <textarea name="description1" required class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Under 100 words"></textarea>
            </div>

            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </form>

        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="alert alert-danger" role="alert">
          Coming soon!
        </div>
      </div>
    </div>
  </div>













  <section class="join">
    <h1 class="text-center p-4 texto"> People-who-joined</h1>
      <div class="container py-auto ">
        <div class="row d-flex justify-content-center align-items-center h-100">




  <?php
  $con = mysqli_connect("localhost", "root", "", "shark");
  $query = "SELECT * FROM joinus order by id DESC";
  $query_run = mysqli_query($con, $query);
  $i = 0;

  while ($i < 5 && ($row = mysqli_fetch_array($query_run))) {

  ?>


          <div class="col-md-6 col-lg-4 p-4">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">

                <div class="text-center mb-4 pb-2">
                  <img src="shark.png" alt="Bulb" width="100">
                </div>

                <figure class="text-center mb-0">
                  <blockquote class="blockquote">
                    <p class="pb-3">
                      <i class="fas fa-quote-left fa-xs text-primary"></i>
                      <span class="lead font-italic"><?php echo $row["description1"]; ?></span>
                      <i class="fas fa-quote-right fa-xs text-primary"></i>
                    </p>
                  </blockquote>
                  <figcaption class="blockquote-footer mb-0">
                    <?php echo $row["name"]; ?>
                  </figcaption>
                </figure>

              </div>
            </div>
          </div>






  <?php $i++;
  } ?>

        </div>
</div>
    </section>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
