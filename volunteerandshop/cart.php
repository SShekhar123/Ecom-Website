 <?php


include('admin/assets/config.php');
//include('admin/assets/config3.php');
//include('admin/assets/config4.php');
//include 'admin/assets/track.php';


  if(isset($_POST['cart']))
  {

    $quantity = $_POST['quantity'];
    $price = $_POST['prod_price'];
    $info = $_POST['productinfo'];
    $id =  $_POST['productID'];
     
  // echo $quantity;
   //echo $id;
   //echo $info;
   //echo $price;

    //echo $quantity;
    //echo $price;
    //echo $info;
   // echo $size;

    $amount = $quantity * $price;
  //  echo $amount;

$str = "0123456789qwertyasdfghjiklzxcv";
           $str = str_shuffle($str);
            $str = substr($str,0,9);
            $cartid = $str;

            
    $sql = "INSERT INTO `cart` (`cartid`,`productid` , `productinfo`, `quantity` , `price` ) values ('$cartid',$id , '$info' ,'$quantity' ,'$amount')" ;
    $result = mysqli_query($conn,$sql);
   // echo $sql;
   //echo mysql_error();
    header("location:checkout.php?id=$cartid");
   // echo $price;
  }
  // mysql_query()
?>