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
	$('#add-evel').modal('show');
		
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
$id1=@$_POST['er1'];
$qwem="SELECT * FROM `categorymap` where `s.no`='$id1'";
     $procat=array();
												
														foreach($conn->query($qwem) as $dh123)
														{
														$procat[]=$dh123['category'];
																													$procat1[]=$dh123['category'];
														$procat2[]=$dh123['subcategory'];

															$id[]=$dh123['s.no'];
														
														}
$rukh=sizeof($procat);
for($in=$rukh-1;$in>=0;$in++)
{
?>
<div class="modal fade" id="add-evel" role="dialog">
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
                                                                            <label for="Name" class="col-md-3 control-label">ID: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" class="form-control" id="ID" value="<?php  echo $id[$in]; ?>"  name="ca"required="">
                                                                            </div>
                                                                        </div>
                                                                    
                                                                               <div class="form-group">
                                                                            <label for="Name" class="col-md-3 control-label">Category: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" class="form-control" id="name" value="<?php  echo $procat1[$in]; ?>"  name="cat12"required="">
                                                                            </div>
                                                                        </div>
                                                                         <div class="form-group">
                                                                            <label for="Name" class="col-md-3 control-label">subCategory: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" class="form-control" id="name" value="<?php  echo $procat2[$in]; ?>"  name="cat23"required="">
                                                                            </div>
                                                                        </div>
                                                                         <div class="form-group">
                                                                            <label for="Name" class="col-md-3 control-label">ChildCategory: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" class="form-control" id="name" value="<?php  echo $procat[$in]; ?>"  name="cat"required="">
                                                                            </div>
                                                                        </div>
                                                                    
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
$cat=@$_POST['cat'];
$cat1=@$_POST['ca'];
	$cat12=@$_POST['cat12'];
$cat23=@$_POST['cat23'];

		$quer12="UPDATE `categorymap` SET `category`='$cat12',`subcategory`='$cat23',`childcategory`='$cat' WHERE `s.no`='$cat1'";
	$conn->exec($quer12);
	header('location:managecategories.php');
}

?>

</body>
