<?php 
require_once("DB.class.php");
  $dbhandle = new DB();
  $name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
?>
<html>
<title>Home</title>
<style type="text/css">
  .carousel-caption{
    
    top:25%;
}

#caro-size{
   width:100%;
   height: 800px;
}

.carousel-indicators li{
  width: 10px;
  height: 10px; 
  border-radius: 100%; 
}

.d-block {  filter: brightness(50%); }
</style>
<body>
  <?php include 'header.inc.php'; ?>

  

<!--   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox" id="caro-size">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/large/6114904363.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h3>Hello <?php echo strstr($name, '@', true); ?></h3>
        
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/large/6119130918.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block" id="carotext">
        <h2>Are you ready?</h2>
       </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/large/9493997865.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h1>To Travel the World!</h1>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 -->
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators my-4">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" id="caro-size">
      <div class="carousel-item active">
        <img src="images/large/5855729828.jpg" class="d-block w-100" id="tinted" alt="...">
        <div class="carousel-caption d-none d-md-block ">
          <h2>Hello <?php echo strstr($name, '@', true); ?></h2>
          
      </div>
      </div>
      <div class="carousel-item">
        <img src="images/large/6119130918.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block ">
          <h2>Are you ready?</h2>
         
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/large/9493997865.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block ">
          <h2>To Travel the World!</h2>
         
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


  <?php include 'footer.inc.php'; ?>

  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
</body>

</html>