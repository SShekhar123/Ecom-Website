

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
                                                                            <label for="product-title" class="col-md-3 control-label">Category Name: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" class="form-control" id="cate" required=""name="cat" placeholder="Enter Category">
                                                                            </div>
                                                                        </div>
                                                                         <div class="form-group">
                                                                            <label for="" class="col-md-3 control-label"></label>
                                                                            <div class="col-md-7 text-center">
                                                                                <input type="submit" class="btn btn-primary btn-lg " style="" name="su" value="Add">
                                                                               
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
                                                    subCategory
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
														$procat[]=$dh['category'];
																													$procat1[]=$dh['subcategory'];
														$procat2[]=$dh['childcategory'];

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
												$procat[$i]
												</td>
												<td>
												$procat1[$i]
												</td><td>
												$procat2[$i]
												</td>
										
			";?>
                                        
                                        
                                        </form> <form method="post" action="categoryedit.php">
												<td><?php echo'
												<button type="submit" value="'.$id[$i].'" name="er" class="btn btn-default">Edit</button>
												';?>	</form>
												 <form method="post" action="deletecategory.php">
													<?php echo'
												<button type="submit" id="bt" class="btn btn-default" value="'.$id[$i].'" name="del23" >
                                                    Delete</button>';?></form><?php echo '</td>
													</tr>';?>
													<!-- Modal -->

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
          
    