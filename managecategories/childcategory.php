

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

<script type="text/javascript" charset="utf8" src="js/jquery.dataTables.js"></script>
    <script type="text/javascript"  src=" https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>

    <!--Export table buttons-->
    <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/pdfmake.min.js" ></script>
    <script type="text/javascript"  src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.1/js/buttons.print.min.js"></script>

<!--Export table button CSS-->

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<link href="http://fonts.googleapis.com/css?family=Roboto:400,300,400italic,500,500italic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet" type="text/css">


    <!--Data Table-->
   <script src="js/bootstrap.min.js" type="text/javascript"></script>

                 <script>
$(document).ready(function($){
$('#mytable').DataTable();
});</script>
             

                               <?php
	
include('configproduct.php');
try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname","root","");
}
catch(Exception $e)
{
	echo 'Not connected'.$e->getMessage();
}

?>
                                <div  id="t1"  class="table-responsive">
                                   
                                    <table class="table table-hover table-bordered matmix-dt bg-hc-border" id="mytable">
                                        <thead>
                                                                           <form method="post">
                                                                            <div class="form-group">
                                                                            <label for="product-cat" class="col-md-3 control-label">Product childCategory: </label>
                                                                            <div class="col-md-7">
                                                                                <select name="pcat12" class="form-control select2">
                                                                                    <option value="none" selected>Select childCategory:</option>
                                                                                                                                  <?php 

																					
																					
																					$query="select distinct(subcategory) from categorymap";
																					
							        foreach($conn->query($query) as $row)
									{//while($row=mysqli_fetch_array($product))
									//{
                                        
										?>
										<option><?php echo $row['subcategory']; ?></option>
                                  <?php
									}	                                    $category = $_POST['subcategory'];

																					?>
                                      
                                                                                    </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="product-title" class="col-md-3 control-label">ChildCategory Name: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" class="form-control" id="cat" required=""name="cat23" placeholder="Enter Category">
                                                                            </div>
                                                                        </div>
                                                                         <div class="form-group">
                                                                            <label for="" class="col-md-3 control-label"></label>
                                                                            <div class="col-md-7 text-center">
                                                                                <input type="submit" class="btn btn-primary btn-lg " style="" name="sub" value="Add">
                                                                               
                                                                            </div>
                                                                        </div>
</form>
                                            <form method="post" action="categoryedit.php">

                                            <tr>
                                                <th colspan="8">
                                                    <div class="dt-col-header">All new Categories.</div>
                                                                                                  </th>
                                                <th colspan="4">
                                                    <form class="form-horizontal">
                                                        <div class="form-group td-bulk-action">
                                                            <label class="col-md-6 control-label">Bulk Action:</label>
                                                            <div class=" col-md-6">
                                                                <select class="form-control input-sm status-select-all">
                                                                    <option>Select</option>
                                                                    <option>Approve</option>
                                                                    <option>Reject</option>
                                                                    <option>Suspend</option>
                                                                    <option>Pending</option>
                                                                </select>
                                                            </div>
                                                    </form>
                                                </th>
                                            </tr>
                                            <form>
                                            <tr>
                                                <th class="tc-center">
                                                    <input class="tc-check-all" type="checkbox" value="0" />
                                                </th>
                                                <th>
                                                    S.no
                                                </th>
                                                <th>
                                                    Category
                                                </th>
                                                <th>
                                                    SubCategory
                                                </th>
                                                
                                                   <th>
                                                    childCategory
                                                </th>
                                                
                                                  
                                                <th class="tc-center">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                                <?php
												$abc="SELECT * FROM `categorymap`";
												$procat=array();
												
														foreach($conn->query($abc) as $dh)
														{
														$procat[]=$dh['childcategory'];
															$procat2[]=$dh['category'];
																												$procat1[]=$dh['subcategory'];
																												
																													$id[]=$dh['s.no'];

														}
												$runm=sizeof($procat);
                        					
												for($i=$runm-1;$i>=0;$i--){
												echo "
										<tr>
										<td class='tc-center sorting_1'>
                                                    <div class='icheckbox_minimal-aero'>
                                                        <input type='checkbox' class='tc-check' value='0'>
                                                        <ins class='iCheck-helper'>

                                                        </ins>
                                                    </div>
                                                </td>
	                                            
										
												<td>
                                                    $i
                                                </td>
                                                  
										 <td>
												$procat2[$i]
												</td>
										<td>
												$procat1[$i]
												</td>
										<td>
												$procat[$i]
												</td>
										
			";?>
                                        
                                        
                                        </form>   <form method="post" action="childcategoryedit.php">
												<td><?php echo'
												<button type="submit" value="'.$id[$i].'" name="er1" class="btn btn-default">Edit</button>
												';?>	</form>
												 <form method="post" action="childcatdelete.php">
													<?php echo'
												<button type="submit" id="bt" class="btn btn-default" value="'.$id[$i].'" name="del234" >
                                                    Delete</button>';?></form><?php echo '</td>
													</tr>';?>
													<!-- Modal -->

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
                                                                            <label for="Name" class="col-md-3 control-label">Category: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" class="form-control" id="name" value="<?php  echo $procat[$i]; ?>"  name="ename"required="">
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                       </div>
                                                        <div class="modal fade" id="add-eve" role="dialog">
                                                    <div class="modal-dialog">

                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title">Delete Info</h4>
                                                            </div>
                                                            <div class="modal-footer">                                                                   
                                                                <!-- Form Starts Here -->
                                                                <div class="col-md-12">
                                                                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                                                        <div class="form-group">
                                                                            <label for="Name" class="col-md-3 control-label"> Name: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" class="form-control" id="name"value="<?php
																					  echo $yname[$i];
																					   ?>" name="edname"required="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="" class="col-md-3 control-label"></label>
                                                                            <div class="col-md-7 text-center">
                                                                                <input type="Submit" class="btn btn-primary btn-lg " style="" name="edel" value="Delete">
                                                                                
                                                                            </div>
                                                                        </div>

                                                                    </form>
                                                                </div>
                                                            </div>
                                    </div>            
                                         </div>          
                                                </div>
                                                <?php } ?>
                                                
                                                </tbody>
                                           
                                           </table>
                                            
                                   
            
            <footer class="footer-container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="footer-left">
                                <span>&copy; 2015
                                    <a href="http://themeforest.net/user/westilian">westilian</a>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="footer-right">
                                <span class="footer-meta">Crafted with&nbsp;
                                    <i class="fa fa-heart"></i>&nbsp;by&nbsp;
                                    <a href="http://themeforest.net/user/westilian">westilian</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div></div>
        
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <!--Load Mask-->
    <script src="js/jquery.loadmask.js"></script>
    <script src="js/jRespond.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/nav-accordion.js"></script>
    <script src="js/hoverintent.js"></script>
    <!--Materialize Effect-->
    <script src="js/waves.js"></script>
    <!--iCheck-->
    <script src="js/icheck.js"></script>
    <!--Select2-->
    <script src="js/select2.js"></script>
    <!--jquery.mentionsInput-->
    <script src="js/underscore.js"></script>
    <script src="js/jquery.elastic.js"></script>
    <script src="js/jquery.events.input.js"></script>
    <script src="js/jquery.mentionsInput.js"></script>
    <script src="js/bootstrap-filestyle.js"></script>
    <!--Text Editor-->
    <script src="js/summernote.min.js"></script>
    <!--CHARTS-->
    <script src="js/chart/sparkline/jquery.sparkline.js"></script>
    <script src="js/chart/easypie/jquery.easypiechart.min.js"></script>
    <!--Smart Resize-->
    <script src="js/smart-resize.js"></script>
    <!--Data Tables-->
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/dataTables.responsive.js"></script>
    <script src="js/dataTables.tableTools.js"></script>
    <script src="js/dataTables.bootstrap.js"></script>
    <script src="js/stacktable.js"></script>
    <script src="js/bootbox.js"></script>
    <script src="js/sweetalert.js"></script>
    <!--Layout Initialize-->
    <script src="js/layout.init.js"></script>
    <!--Template Plugins Initialize-->
    <script src="js/matmix.init.js"></script>
    <!--High Resolution Ready-->
    <script src="js/retina.min.js"></script>
    <!-- Product-dropdown -->
    <script src="js/custom.js"></script>
