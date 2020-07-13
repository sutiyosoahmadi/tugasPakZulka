<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!doctype html>

  <title>Hello, world!</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-12 border bg-primary text-white" style="height:100px">header</div>

      <nav class="navbar col-12 navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="JavaScript:void(0)">MyLogo</a>
        <button class="navbar-toggler navbar-toggler-right"
        type="button" data-toggle="collapse"
        data-target="#navb">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="JavaScript:void(0)">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="JavaScript:void(0)">Facilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" 
            href="JavaScript:void(0)">Guest Book</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" 
          placeholder="search">
          <button class="btn btn-info my-2 my-sm-0" type="button">search</button>
        </form>
      </div>
    </nav>
    <div class="container" >
      <h2 align="center">FORM PENJUALAN BARANG BEKAS</h2>
      <form action="pembayaran2.php" method="post">


        <select class="form-control" name="nama_barang" id="nama_barang">
          <option value="">Nama barang</option>
          <option value="Playstation">Handphone</option>
          <option value="X-box">Televisi</option>
          <option value="Nintendo-switch">Kulkas</option>
          <option value="Project-scorpio">Rumah</option>
          <option value="Asus ROG-GL-503">Lemari</option>
          <option value="PS-vita">Motor</option>
          <option value="Pc-rakitan">Mobil</option>

        </select>


        <div class="form-group">
          <label for="harga"></label>
          <input type="number" class="form-control" placeholder="Harga Barang" name="harga_barang">
        </div>
        <div class="form-group">
          <label for="jumlah"></label>
          <input type="number" class="form-control" placeholder="Jumlah Barang" name="jumlah_barang">

        </div>
        <button type="submit" class="btn btn-primary" name="hitung">Hitung</button>
      </form>
    </div>
      <!-- <div class="col-12 col-md-4 col-lg-2" style="background-color: #ffb3d9;" align="justify"><img src="assets/images/business-icon.jpg" height="200" alt="" style="float: left;">
    <div class="col-12 col-md-4 col-lg-2 bg-danger text-light">banner<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets\images\bbplk-bekasi.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets\images\miniindo.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets\images\tranningcamp.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div></div>
    <div class="col-12 bg-info text-light">footer</div>
!-- 
  <div class="col-12 col-md-8 border text-center bg-danger text-white">content</div>
  <div class="col-12 col-md-4 border text-center bg-success text-white">banner</div>
  <div class="col-12 border text-center bg-info text-white">footer</div>

</div> -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835 -->Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>