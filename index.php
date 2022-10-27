<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Playfair+Display&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger invasion |Add newitem</title>
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
            padding: 15px 16px;
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

    </style>
</head>
<body>
    <div class="topnav">
        <a class="active" href="main.php">Home</a>
        <a href="index.php">Admin</a>
        <a href="shop.php">Customer</a>
    </div>
    <center>
         <div class="main">
           <form method="post" action="insert.php" enctype="multipart/form-data">
           <h1 style="color:black;font-size:50px">BURGER INVASION</h1>
             <img src="buricon.jpeg" alt="buricon" width="450px">
             <br><br>
             <input type="text" name='name'>
             <br>
             <input type="text" name='price'>
             <br>
             <input type="file" name='image' id="file" style='display:none;'>
             <label for="file">Select Image</label>
             <button name='upload'>Upload Item</button>
             <br>
             <a href="items.php">Show All Items</a>
            
           </form>
          </div>
          <br>
          <footer>Designed and developed by Mai Nasser @2022</footer>
    </center>
</body>
</html>
