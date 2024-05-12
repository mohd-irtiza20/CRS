<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <div id="outer_wrapper">
    <ul id="slider">
      <?php
       $reviews = mysqli_query($con, "select * from reviews join users on reviews.user_id= users.id limit 6 ");
      while ($rev = mysqli_fetch_assoc($reviews)) {
      ?>
      <li>
        <div class="slider_inner text-center">
          <span style="font-size:20px;"><?php echo $rev['name']; ?> </span><br>
          <?php
            echo "<img src='$rev[profile]' style='width:80px; height:80px;border-radius:50%;'>";
          ?>
          
          <?php $i = 0;
            $rat = $rev['rating'];
            echo "<br>";
            while ($i < $rat) 
            {
              echo '<span><i class="fa fa-star" style="color: #fb641b"></i></span>';
              $i++;
            }
            while ($i < 5) 
            {
              echo '<span><i class="fa fa-star" style="color:whitesmoke"></i></span>';
              $i++;
            }
          ?>
          
          <p class="text-center"><?php echo $rev['review']; ?> </p>
        </div>
      </li>
      <?php } ?>
    </ul>
  </div>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

<style>

@import url('https://fonts.googleapis.com/css2?family=Lora:wght@500&family=Source+Sans+Pro:ital@1&display=swap');


#outer_wrapper {
  width:100%;
  margin:0 auto;
  display:flex;
  justify-content:center;
}
#slider {
  list-style-type:none;
  display:flex;
  flex-wrap:wrap;
  justify-content:space-around;
  padding:20px 0;
}
.slider_inner {
  width:300px;
  /* Adjust the width as needed */
        margin:20px;
  padding:20px;
  background-color:#fff;
  box-shadow:0px 3px 10px rgba(0,0,0,0.1);
  border-radius:8px;
  border:solid 1px #ddd;
}
.slider_inner img {
  width:80px;
  height:80px;
  border-radius:50%;
}
.slider_inner p {
  font-size:18px;
  line-height:24px;
}
.slider_inner span {
  font-size:20px;
  margin-right:5px;
}
.slider_inner .fa-star {
  font-size:20px;
  color:#fb641b;
}


</style>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
  // jQuery(document).ready(function() {
  //   $('#slider').slick({
  //     slidesToShow: 1,
  //     slidesToScroll: 1,
  //     dots: true,
  //     arrows: false,
  //     autoplay: true,
  //     infinite: true,
  //     autoplaySpeed: 4000
  //   });
  // });
</script>

</body>

</html>