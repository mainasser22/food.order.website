<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Playfair+Display&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger invasion</title>
    <link rel="stylesheet" href="index.css">
    <style>
        
        .topnav {
            background-color: #333;
            overflow: hidden;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }


        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }
        .poster{
            flex-basis: 31%;
            border-radius: 10px;
            margin-bottom: 5%;
            margin-left: 25px;;
            text-align: left;
            padding-top: 100px;
            padding-left: 60px;
           
        }
        .poster img{
           width: 90%;
           border-radius: 10px;

        }

    </style>
</head>

<body>

    <div class="topnav">
        <a class="active" href="main.php">Home</a>
        <a href="index.php">Admin</a>
        <a href="shop.php">Customer</a>
    </div>
    <section>
        <div class="row">
          <div class="poster">
          <img src="pic1.jpeg">
          </div>
          <div class="poster">
          <img src="pic2.jpeg">
          </div>
          <div class="poster">
          <img src="pic3.jpeg">
          </div>

        </div>
    </section>






</body>

</html>