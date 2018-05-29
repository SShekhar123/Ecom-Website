<body>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="A Components Mix Bootstarp 3 Admin Dashboard Template">
<meta name="author" content="Westilian">
<title>Womenfederation Admin</title>
<link rel="stylesheet" href="css/font-awesome.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="css/animate.css" type="text/css">
<link rel="stylesheet" href="css/waves.css" type="text/css">
<link rel="stylesheet" href="css/layout.css" type="text/css">
<link rel="stylesheet" href="css/components.css" type="text/css">
<link rel="stylesheet" href="css/plugins.css" type="text/css">
<link rel="stylesheet" href="css/common-styles.css" type="text/css">
<link rel="stylesheet" href="css/pages.css" type="text/css">
<link rel="stylesheet" href="css/responsive.css" type="text/css">
<link rel="stylesheet" href="css/matmix-iconfont.css" type="text/css">
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>


    <!--Data Table-->
   <script src="js/bootstrap.min.js" type="text/javascript"></script>

<script>
	$(window).on('load',function(){
	$('#add-even').modal('show');
		
	});
	</script>
</head>
<?php
include('configproduct.php');
												

try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname","root","");
	
}
catch(Exception $e)
{
	echo 'Not connected'.$e->getMessage();
}
$id1=@$_POST['er'];
$qwe="SELECT * FROM `product` where `ID`='$id1'";
     $pro=array();
												
														foreach($conn->query($qwe) as $dh123)
														{
														$pro[]=$dh123['Product_Title'];
														$price[]=$dh123['Display_Price'];
														$img[]=$dh123['Product_Images'];
														$stock[]=$dh123['Stock'];
														$status[]=$dh123['Status'];
														$label[]=$dh123['label'];
															$mail[]=$dh123['email'];
															$con[]=$dh123['contact'];
												
															$id[]=$dh123['ID'];
														$yname[]=$dh123['name'];
							
														}
$ru=sizeof($pro);
for($i=$ru-1;$i>=0;$i++)
{
?>
<div class="modal fade" id="add-even" role="dialog">
                                                    <div class="modal-dialog">


<!-- Modal content-->
                                                   <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title">Edit Info</h4>
                                                            </div>
                                                            <div class="modal-footer">                                                                   
                                                                <!-- Form Starts Here -->
                                                              <div class="col-md-12">
                                                                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                                                        <div class="form-group">
                                                                            <label for="Name" class="col-md-3 control-label">Name: </label>SS
                                                                            <div class="col-md-7">
                                                                                <input type="text" class="form-control" id="name" value="<?php  echo $yname[$i]; ?>"  name="ename"required="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="Name" class="col-md-3 control-label">Email: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" class="form-control" id="name" value="<?php echo  $mail[$i]; ?>"readonly name="ename"required="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="Name" class="col-md-3 control-label">Contact: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" class="form-control" id="name" value="<?php echo $con[$i]; ?>"readonly name="econ"required="">
                                                                            </div>
                                                                        </div>
                                                                        
                                                                           <div class="form-group">
                                                                            <label for="product-title" class="col-md-3 control-label">Product Title: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" class="form-control" id="product-title" required="" value="<?php echo $pro[$i]; ?>" name="eptitle">
                                                                            </div>
                                                                        </div>
                                                                       
                                                                       
                                                                        <div class="form-group">
                                                                            <label for="product-price" class="col-md-3 control-label">Product Price: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="number" class="form-control" id="product-price" min="0" placeholder="" required="" 
                                                                                value="<?php echo $price[$i];?>" 
                                                                                
                                                                                name="epprice">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="stock-info" class="col-md-3 control-label">Stock Information: </label>
                                                                            <div class="col-md-7">
                                                                                <textarea class="form-control" rows="3" value="<?php echo $stock[$i];?>"name="esinfo"></textarea>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="product-img" class="col-md-3 control-label">Product Images:</label>
                                                                            <div class="col-md-7">
                                                                                <input type="file"value="<?php echo $img[$i]; ?>" name="epimg" id="product-img" multiple >
                                                                            </div>
                                                                        </div>
																		
                                                                        <div class="form-group">
                                                                            <label for="status" class="col-md-3 control-label">Change-Status: </label>
                                                                            <div class="col-md-7">
                                                                                <select name="ecstatus" class="form-control"
																				value="<?php echo $status[$i]; ?>"<option>Select</option>
                                                                                    <option value="1">Approved</option>
                                                                                    <option value="2">Pending</option>
                                                                               <option value="3">Rejected</option>
                                                                                    <option value="4">Suspended</option>
                                                                               
																			   
																			   </select>
                                                                            </div>
                                                                        </div>
																	
																	    <div class="form-group">
                                                                            <label for="label" class="col-md-3 control-label">Change-Label: </label>
                                                                	<div class="col-md-7">
                                                                  
																<select name="eclabel" value="<?php echo $label[$i];?>"class="form-control">     <option>Select</option>
                                                                                    <option value="1">Featured</option>
                                                                                    <option value="2">Popular</option>
                                                                               <option value="3">Top-Rated</option>
																			   </select>
                                                                            </div>
                                                                        </div>
                                                                    ';?> 
                                                                    
                                                                        <div class="form-group">
                                                                            <label for="" class="col-md-3 control-label"></label>
                                                                            <div class="col-md-7 text-center">
                                                                                <input type="Submit" class="btn btn-primary btn-lg " style="" name="esubmit" value="Update">
                                                                                <button type="reset" class="btn btn-danger btn-lg " style="" name="reset">Reset</button>

                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                       </div>
                                                
<?php 
} 
if(@$_REQUEST['esubmit'])
{
	$epprice=@$_POST['epprice'];    
	$ename=@$_POST['ename'];
	$econ=@$_POST['econ'];
    $epimg=@$_FILES['epimg']['name'];	
$eptitle=@$_POST['eptitle'];
$ecstatus=@$_POST['ecstatus'];
$eclabel=@$_POST['eclabel'];
$esinfo=@$_POST['esinfo'];
		$quer12="UPDATE `product` SET `Product_Title`='$eptitle',`Stock`='$esinfo',`Display_Price`='$epprice',`Product_Images`='$epimg',`Status`='$ecstatus',`label`='$eclabel' WHERE `email`='$ename'";
	$conn->exec($quer12);
	header('location:manageproducts.php');
}

?>

</body>
