<!DOCTYPE html>
<html>
<head>
<title>availabilities</title>
<style>
*{
text-align:center;
font-family:courier new;
font-size:25px;
font-weight:bold;
}
/*
body{
background-color:bisque;

}
*/
body{
background-image:url("av.jpg"),url("banana.jpg");
background-repeat: no-repeat;
background-attachment:fixed;
background-size:cover;
background-origin:padding-box; /* padding-box,content,border*/
padding:55px 55px ;
//background-position:right top;
margin:50px 50px 50px 50px;
//border:2px ridge black;
border-width:5px 10px;
//outline: 10px groove red;
//outline-offset:10px;

}


.fill{
border:5px solid black;
padding:10px;
margin:15px;
background-color:violet;
color:black;
}
ul{
background:powderblue;
border: 4px solid red;
margin:100px;
padding:20px;
}

ul li{
background:dodgerblue;
height : 50px;
border: 4px solid black;
padding:2px;
}

a.one:link , a.one:visited {
background-color:hotpink;
color:black;
text-align:center;
text-decoration:none;
padding:15px 25px;
display:inline-block;
}

a.one:hover , a.one:active{
 background-color:black;
color:white;
}
</style>
</head>

<body>



<h1 class="fill" style="text-transform:capitalize;">AVAILABILITIES</h1>
<ul style="font-size:30px;list-style-type:none ">
<li><a href="#fruits">FRUITS</li>
<li><a href="#vegetables ">VEGETABLES</a> </li>
</ul>
<br>
<br>
<br>
<pre>












<ul id="fruits" style="list-style-type:none;font-size:20px;">
<form method="post">
<li><label for="quantity1">APPLE </label>





			QUANTITY       :     <input type="number" id="quantity1" name="quantity1" value=0><br>

		</li>








<li><label for="quantity2"> BANANA</label>





			QUANTITY      :     <input type="number" id="quantity2" name="quantity2" value=0><br>

			</li>








<li><label for="quantity3">  PINEAPPLE</label>





			QUANTITY      :    <input type="number" id="quantity3" name="quantity3" value=0><br>

			</li>








<li><label for="quantity4"> ORANGE</label>





			QUANTITY      :      <input type="number" id="quantity4" name="quantity4" value=0><br>

			</li>








<li><label for="quantity5"> LICHI </label>





			QUANTITY       :      <input type="number" id="quantity5" name="quantity5" value=0><br>

			</li>








<li><label for="quantity6"> WATERMELON </label>





			QUANTITY       :      <input type="number" id="quantity6" name="quantity6" value=0><br>

			</li>








<li><label for="quantity7"> GRAPES</label>





			QUANTITY       :      <input type="number" id="quantity7" name="quantity7" value=0><br>

			</li>








<li><label for="quantity8">JACKFRUIT </label>





			QUANTITY       :      <input type="number" id="quantity8" name="quantity8" value=0><br>

			</li>








<li><label for="quantity9"> GUAVA</label>





			QUANTITY       :      <input type="number" id="quantity9" name="quantity9" value=0><br>

			</li>








<li><label for="quantity10"> CUSTARD APPLE</label>





			QUANTITY       :      <input type="number" id="quantity10" name="quantity10" value=0><br>

			</li>








</ul>









<ul id="vegetables" style="list-style-type:none;font-size:20px;">
<li><label for="quantitya"> CARROT</label>





			QUANTITY       :     <input type="number" id="quantitya" name="quantitya" value=0><br>

			</li>








<li><label for="quantityb"> bRINJAL</label>





			QUANTITY       :     <input type="number" id="quantityb" name="quantityb" value=0><br>

			</li>








<li><label for="quantityc">POTATO</label>





			QUANTITY      :     <input type="number" id="quantityc" name="quantityc" value=0><br>

			</li>








<li><label for="quantityd"> BITTER GUARD</label>





			QUANTITY       :     <input type="number" id="quantityd" name="quantityd" value=0><br>

			</li>








<li><label for="quantitye">BOTTLE GUARD </label>





			QUANTITY       :     <input type="number" id="quantitye" name="quantitye" value=0><br>

			</li>








<li><label for="quantityf"> BEETROOT</label>





			QUANTITY       :     <input type="number" id="quantityf" name="quantityf" value=0><br>

			</li>








<li><label for="quantityg"> LADY'S FINGER</label>





			QUANTITY       :     <input type="number" id="quantityg" name="quantityg" value=0><br>

			</li>








<li><label for="quantityh"> BEANS</label>





			QUANTITY       :     <input type="number" id="quantityh" name="quantityh" value=0><br>

			</li>








<li><label for="quantityi">TOMATO</label>





			QUANTITY      :     <input type="number" id="quantityi" name="quantityi" value=0><br>

			</li>








<li><label for="quantityj"> CABBAGE</label>





			QUANTITY       :     <input type="number" id="quantityj" name="quantityj" value=0><br>

			</li>








                   <input type="submit" value="SUBMIT" >
</form>
</ul>


</pre>

<?php

$quantity1 = htmlspecialchars($_POST['quantity1']);
$quantity2 = htmlspecialchars($_POST['quantity2']);
$quantity3 = htmlspecialchars($_POST['quantity3']);
$quantity4 = htmlspecialchars($_POST['quantity4']);
$quantity5 = htmlspecialchars($_POST['quantity5']);
$quantity6 = htmlspecialchars($_POST['quantity6']);
$quantity7 = htmlspecialchars($_POST['quantity7']);
$quantity8 = htmlspecialchars($_POST['quantity8']);
$quantity9 = htmlspecialchars($_POST['quantity9']);
$quantity10 = htmlspecialchars($_POST['quantity10']);



$quantitya = htmlspecialchars($_POST['quantitya']);
$quantityb = htmlspecialchars($_POST['quantityb']);
$quantityc = htmlspecialchars($_POST['quantityc']);
$quantityd = htmlspecialchars($_POST['quantityd']);
$quantitye = htmlspecialchars($_POST['quantitye']);
$quantityf = htmlspecialchars($_POST['quantityf']);
$quantityg = htmlspecialchars($_POST['quantityg']);
$quantityh = htmlspecialchars($_POST['quantityh']);
$quantityi = htmlspecialchars($_POST['quantityi']);
$quantityj = htmlspecialchars($_POST['quantityj']);


$user = 'root';
$password = 'root';
$db = 'mysql';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);


$conn = new mysqli($host, $user, $password, $db, $port);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO availabilities(quantity1,quantity2,quantity3,quantity4,quantity5,quantity6,quantity7,quantity8,quantity9,quantity10,quantitya,quantityb,quantityc,quantityd,quantitye,quantityf,quantityg,quantityh,quantityi,quantityj) VALUES ($quantity1,$quantity2,$quantity3,$quantity4,$quantity5,$quantity6,$quantity7,$quantity8,$quantity9,$quantity10,$quantitya,$quantityb,$quantityc,$quantityd,$quantitye,$quantityf,$quantityg,$quantityh,$quantityi,$quantityj)";

if ($conn->query($sql) === TRUE) {
  echo "SUBMITTED SUCCESSFULLY";
} else {
  echo "ENTER A VALID QUANTITY"  ;
}

$conn->close();

?>


<!-- list -->
</br>
</br>
<div><button type="button" onclick="document.getElementById('demo').style.display='block'">YOUR ORDERS ARE :</button> </div>
</br>
</br>
<div  id="demo" style="display:none;">
<table >
    <table border="1">
      <colgroup>
       <!--col span="2" style="color: white;background-color:lightblue; text align: left; padding:20px;"-->
        <col span="20" style="background-color:red; width:500px; color:black;text-align:right;padding:100px">
      </colgroup>
  <tr>
    <th>APPLE</th>
    <th>BANANA</th>
    <th>PINEAPPLE</th>
    <th>ORANGE</th>
    <th>LICHI</th>
    <th>WATERMELON</th>
    <th>GRAPES</th>
    <th>JACKFRUIT</th>
    <th>GUAVA</th>
    <th>CUSTARD APPLE</th>
    <th>CARROT</th>
    <th>BRINJAL</th>
    <th>POTATO</th>
    <th>BITTER GUARD</th>
    <th>BOTTLE GUARD</th>
    <th>BEETROOT</th>
    <th>LADY'S FINGER</th>
    <th>BEANS</th>
    <th>TOMATO</th>
    <th>CABBAGE</th>
  </tr>

  <tr span="22" style="padding:100px;background-color:lightblue;height:60px;">

    <td><?php echo $quantity1 ?></td>
    <td><?php echo $quantity2 ?></td>
    <td><?php echo $quantity3?></td>
    <td><?php echo $quantity4 ?></td>
    <td><?php echo $quantity5 ?></td>
    <td><?php echo $quantity6 ?></td>
    <td><?php echo $quantity7 ?></td>
    <td><?php echo $quantity8 ?></td>
    <td><?php echo $quantity9 ?></td>
    <td><?php echo $quantity10 ?></td>
    <td><?php echo $quantitya ?></td>
    <td><?php echo $quantityb ?></td>
    <td><?php echo $quantityc ?></td>
    <td><?php echo $quantityd ?></td>
    <td><?php echo $quantitye ?></td>
    <td><?php echo $quantityf ?></td>
    <td><?php echo $quantityg ?></td>
    <td><?php echo $quantityh ?></td>
    <td><?php echo $quantityi ?></td>
    <td><?php echo $quantityj ?></td>
</tr>

</table>
</div>
 <pre>


<a class="one" href="about.html" target="_blank"> NEXT</a>


</pre>
</body>
</html>
