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
$qwe="SELECT * FROM `vendors` where `ID`='$id1'";
												$mail=array();
												
														foreach($conn->query($qwe) as $dh)
														{
														$mail[]=$dh['Mail_ID'];
														$mobile[]=$dh['Mobile_No'];
														$img[]=$dh['Image'];
														$vname[]=$dh['Name'];
														$status[]=$dh['Status'];
														$Bname[]=$dh['Business_Name'];
														$loc[]=$dh['Location'];
														
														
														}
												$ru=sizeof($mail);
												for($i=$ru-1;$i>=0;$i--){
?><div class="modal fade" id="add-even" role="dialog">
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
                                                                            <label for="Name" class="col-md-3 control-label">Name: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" class="form-control" id="name"value="<?php
																					  echo $vname[$i]; ?>" name="ename"required="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="Name" class="col-md-3 control-label">Email: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" class="form-control" id="name" value="<?php
																					  echo $mail[$i]; ?>"readonly name="emm"required="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="Name" class="col-md-3 control-label">Contact: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" class="form-control" id="name"value="<?php echo $mobile[$i];?>"readonly name="con"required="">
                                                                            </div>
                                                                        </div>
                                                                
                                                                                   <div class="form-group">
                                                                            <label for="product-title" class="col-md-3 control-label">Business Name: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" class="form-control" id="product-title"value="<?php echo $Bname[$i]; ?>" required=""name="epcat">
                                                                            </div>
                                                                        </div>
                                                                       
                                                                       
                                                                        
                                                                        <div class="form-group">
                                                                            <label for="product-img" class="col-md-3 control-label">Photo:</label>
                                                                            <div class="col-md-7">
                                                                                <input type="file"class="form-control"      name="epimg" value="<?php echo $img[$i];?>"readonly>
                                                                            </div>
                                                                        </div>
																		
                                                                        <div class="form-group">
                                                                            <label for="status" class="col-md-3 control-label">Change-Status: </label>
                                                                            <div class="col-md-7">
                                                                                <select name="ecstatus"class="form-control"     >     <option>Select</option>
                                                                                    <option value="1">Approved</option>
                                                                                    <option value="2">Pending</option>
                                                                               <option value="3">Rejected</option>
                                                                                    <option value="4">Suspended</option>
                                                                               
																			   
																			   </select>
                                                                            </div>
                                                                        </div>
																	
																	    
                                                                    
                                                                        <div class="form-group">
                                                                            <label for="" class="col-md-3 control-label"></label>
                                                                            <div class="col-md-7 text-center">
                                                                                <input type="Submit" class="btn btn-primary btn-lg " style="" name="es" value="Update">
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
if(@$_REQUEST['es'])
{$ename=@$_REQUEST['ename'];
    $epimg=@$_FILES['epimg']['name'];
	$emm=@$_REQUEST['emm'];
    $con=@$_REQUEST['con'];
    
$epcat=@$_REQUEST['epcat'];
$ecstatus=@$_REQUEST['ecstatus'];
		$quer="UPDATE `vendors` SET `Business_Name`='$epcat',`Mail_ID`='$emm',`Mobile_No`='$con',`Image`='$epimg',`Status`='$ecstatus',`Mobile_No`='$con',`Mail_ID`='$emm' WHERE `Name`='$ename'";
$conn->exec($quer);	

	header('location:vendors.php');
}

?>

</body>
