<?php
require_once "classes/Database.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta property="og:url" content="http://localhost/OOPS/index.php" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="This is the title of the website" />
    <meta property="og:description" content="this is the description" />
    <meta property="og:image" content="https://www.junglescout.com/wp-content/uploads/2020/05/Prime-day-banner.png" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>


<?php  

$db = new Database();
$db->query("INSERT INTO opptable VALUES('', 'mbiakop clinton')");
$db->execute();

$db->query("SELECT * FROM opptable");

echo $db->rowCount();



?>

<!-- get the current page url -->
<?php

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')  {
      $url = "https://";   
  }else {
      $url = "http://";   
 } 
 $url.= $_SERVER['HTTP_HOST'];
$url.= $_SERVER['REQUEST_URI'];
echo $url;

?>

<body>

    <div id="fb-root"></div>
    <script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>



    <!-- Your share button code -->
    <div class="fb-share-button" data-href="http://localhost/OOPS/index.php" data-layout="button_count" size=large>
    </div>
    <form action="index.php" method="POST">


        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <input type="submit" class="btn btn-success" name="submit">
    </form>



</body>

</html>