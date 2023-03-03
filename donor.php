<!doctype html>
<html class="no-js" lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blood Bank Management System|</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js"></script>
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- adminpro icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- data-table CSS
        ============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- charts C3 CSS
        ============================================ -->
    <link rel="stylesheet" href="css/c3.min.css">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- switcher CSS
        ============================================ -->
    <link rel="stylesheet" href="css/switcher/color-switcher.css">
    <!-- style CSS
        ============================================ -->
            <link rel="stylesheet" href="css/modals.css">

            <link rel="stylesheet" href="css/buttons.css">        

    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Color Css Files
        ============================================ -->
    <link rel="alternate stylesheet" type="text/css" href="css/switcher/color-one.css" title="color-one" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="css/switcher/color-two.css" title="color-two" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="css/switcher/color-three.css" title="color-three" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="css/switcher/color-four.css" title="color-four" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="css/switcher/color-five.css" title="color-five" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="css/switcher/color-six.css" title="color-six" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="css/switcher/color-seven.css" title="color-seven" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="css/switcher/color-eight.css" title="color-eight" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="css/switcher/color-nine.css" title="color-nine" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="css/switcher/color-ten.css" title="color-ten" media="screen" />
</head>

<body>
	<?php
		require "header.php";
	?>
 <!-- Data table area Start-->

    <div class="admin-dashone-data-table-area mg-b-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline8-list shadow-reset">
                        <div class="sparkline8-hd">
                            <div class="main-sparkline8-hd">

                                <h1>Donor Table</h1>
                                <div class="sparkline8-outline-icon">
                                    <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                    <span><i class="fa fa-wrench"></i></span>
                                    <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="sparkline8-graph">
                        <button class="btn btn-success btn-sm btn-custon-rounded" style="margin-right: 96%; margin-bottom: -5%" data-toggle="modal" data-target="#add"><i class="fa fa-plus"> Add</i> </button>
                     <div id="add" class="modal modal-adminpro-general modal-zoomInDown fade" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-close-area modal-close-df">
                                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                    </div>
													<?php
														require "config.php";
														if(isset($_REQUEST['txtnm']))
														{
															$nm=$_REQUEST['txtnm'];
															$add=$_REQUEST['address'];
															$cno=$_REQUEST['contact'];
															$email=$_REQUEST['email'];
															$age=$_REQUEST['age'];
															$gen=$_REQUEST['account'];
															$blood=$_REQUEST['account1'];
															$re=$_REQUEST['remark'];
															$sql="INSERT INTO `donor`(`fullname`, `address`, `contact`, `email`, `age`, `gender`, `blood_type`, `remark`) VALUES ('$nm','$add','$cno','$email','$age','$gen','$blood','$re')";
															$data=mysqli_query($con,$sql);
														}
													?>
                                                    <div class="modal-body">
                                                        <div class="modal-login-form-inner">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="basic-login-inner modal-basic-inner">
                                                                        <h3 align="center">Add Donor</h3>
                                                                        <form action="#">
                                                                            <div class="form-group-inner">
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <label class="login2">Fullname</label>
                                                                                        <input type="text"  name="txtnm" class="form-control" placeholder="Enter Donor Fullname" required/>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <label class="login2">Address</label>
                                                                                        <input type="text"  name="address" class="form-control" placeholder="Enter Donor Address"  required />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group-inner">
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <label class="login2">Contact</label>
                                                                                        <input type="text" name="contact"  class="form-control" placeholder="Enter Donor Contact"  required />
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <label class="login2">Email Address</label>
                                                                                        <input type="email" name="email"  class="form-control" placeholder="Enter Donor Email Address"  required />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group-inner">
                                                                                <div class="row">
                                                                                    <div class="col-lg-3">
                                                                                        <label class="login2">Age</label>
                                                                                        <input type="number" name="age" class="form-control" placeholder="Age"  required />
                                                                                    </div>
                                                                                    <div class="col-lg-3">
                                                                                        <label class="login2"  required>Gender</label>
                                                                                    <select class="form-control custom-select-value" name="account">
                                                                                        <option>Male</option>
                                                                                        <option>Female</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-lg-3">
                                                                                        <label class="login2"  required>Blood</label>
                                                                                    <select class="form-control custom-select-value" name="account1">
                                                                                        <option>O+</option>
                                                                                        <option>O-</option>
																						<option>A+</option>
                                                                                        <option>A-</option>
																						<option>B+</option>
                                                                                        <option>B-</option>
																						<option>AB+</option>
                                                                                        <option>AB-</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-lg-3">
                                                                                        <label class="login2">Remarks</label>
                                                                                        <input type="text" name="remark" class="form-control" placeholder="Remarks"  required/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="login-btn-inner" style="margin-left: 8%">
                                                                                <div class="row">
                                                                                    <div class="col-lg-4"></div>
                                                                                    <div class="col-lg-8">
                                                                                        <div class="login-horizental">
                                                                                            <button class="btn btn-sm btn-primary login-submit-cs" type="submit"><i class="fa fa-check"></i> Submit</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="false" data-show-refresh="true" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true">
                                    <thead>
                                        <tr>
                                            <th data-field="id">Fullname</th>
                                            <th data-field="name" data-editable="false">Address</th>
                                            <th data-field="email" data-editable="false">Contact</th>
                                            <th data-field="phone" data-editable="false">Email Address</th>
                                            <th data-field="company" data-editable="false">Age</th>
                                            <th data-field="complete" data-editable="false">Gender</th>
                                            <th data-field="task" data-editable="false">Blood Type</th>
                                            <th data-field="date" data-editable="false">Remarks</th>
                                            <th data-field="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
										$sql="SELECT * FROM `donor`";
						
										
										$res=mysqli_query($con,$sql);
										$i=1;
										while($row=mysqli_fetch_assoc($res))
										{
									?>
                                    
									<tr>
                                            <td><?php echo $row['fullname'];?></td>
                                            <td><?php echo $row['address'];?></td>
                                            <td><?php echo $row['contact'];?></td>
                                            <td ><?php echo $row['email'];?><a href="#" style="color: blue"><u><i></i></u></a></td>
                                            <td><?php echo $row['age'];?></td>
                                            <td><?php echo $row['gender'];?></td>
                                            <td><?php echo $row['blood_type'];?></td>
                                            <td><?php echo $row['remark'];?></td>
                                            <td class="datatable-ct"><button class="btn btn-info btn-xs btn-custon-rounded-three" data-toggle="modal" data-target="#staticBackdrop" 
											data-bs-fnm="<?php echo $row['fullname']; ?>" 
											data-bs-ar="<?php echo $row['address']; ?>"
											data-bs-nos="<?php echo $row['contact']; ?>"
											data-bs-em="<?php echo $row['email']; ?>"
											data-bs-ag="<?php echo $row['age']; ?>"
											data-bs-genn="<?php echo $row['gender']; ?>"
											data-bs-bd="<?php echo $row['blood_type']; ?>"
											data-bs-rmrk="<?php echo $row['remark']; ?>"
											data-bs-id="<?php echo $row['id']; ?>"><i class="fa fa-edit"></i></button> 
											<a class="btn btn-danger btn-xs btn-custon-rounded-three" href="donordelete.php?id=<?php echo $row['id']; ?>"><i class="fa fa-times"></i></a>
											
											<?php
												$i++;
													}
											?>
                                            </td>
                                        </tr>
										
                                    </tbody>
                                </table>
								 <!-- update-->
								 
								
								 
								 <div id="staticBackdrop" class="modal modal-adminpro-general Customwidth-popup-WarningModal   modal-zoomInDown fade" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
															<div class="modal-close-area modal-close-df">
																<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
															</div>
															<div class="modal-body">
																<div class="modal-login-form-inner">
																	<div class="row">
																		<div class="col-lg-12">
																			<div class="basic-login-inner modal-basic-inner">
																				<h3 align="center" id="staticBackdropLabel" >Edit Donor</h3>
																				<form action="edit.php">
																					<div class="form-group-inner">
																						<div class="row">
																							<div class="col-lg-6">
																								<label class="login2">Fullname</label>
																								
																								<input type="text" name="tfullname" id="fulnm" class="form-control" placeholder="Enter Donor Fullname" />
																								<input type="text" name="txtid" class="form-control" id="txtid" hidden>
																							</div>
																							<div class="col-lg-6">
																								<label class="login2">Address</label>
																								<input type="text" name="taddress" id="addre" class="form-control" placeholder="Enter Donor Address" />
																							</div>
																						</div>
																					</div>
																				<div class="form-group-inner">
																					<div class="row">
																						<div class="col-lg-6">
																							<label class="login2">Contact</label>
																							<input type="text" name="contact" id="conn" class="form-control" placeholder="Enter Donor Contact" />
																						</div>
																						<div class="col-lg-6">
																							<label class="login2">Email Address</label>
																							<input type="email" name="temail" id="emaill" class="form-control" placeholder="Enter Donor Email Address" required />
																						</div>
																					</div>
																				</div>
																				<div class="form-group-inner">
																					<div class="row">
																						<div class="col-lg-3">
																							<label class="login2">Age</label>
																							<input type="number" name="tage" id="agee" class="form-control" placeholder="Age" />
																						</div>
                                                                                    <div class="col-lg-3">
                                                                                        <label class="login2">Gender</label>
                                                                                    <select class="form-control custom-select-value" id="gend" name="taccount">
                                                                                        <option>Male</option>
                                                                                        <option>Female</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-lg-3">
                                                                                        <label class="login2">Blood</label>
                                                                                    <select class="form-control custom-select-value" id="bltyp" name="taccount1">
                                                                                        <option>O+</option>
                                                                                        <option>O-</option>
																						<option>A+</option>
                                                                                        <option>A-</option>
																						<option>B+</option>
                                                                                        <option>B-</option>
																						<option>AB+</option>
                                                                                        <option>AB-</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-lg-3">
                                                                                        <label class="login2">Remarks</label>
                                                                                        <input type="text" name="tremarkk" class="form-control" id="remark" placeholder="Remarks" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="login-btn-inner" style="margin-left: 8%">
                                                                                <div class="row">
                                                                                    <div class="col-lg-4"></div>
                                                                                    <div class="col-lg-8">
                                                                                        <div class="login-horizental">
                                                                                            <button class="btn btn-sm btn-warning"  type="submit" style="background-color: #f39c12; color: #fff" ><i class="fa fa-pencil"></i> Change</button>
																							
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
										</div>
<script>
	const exampleModal = document.getElementById('staticBackdrop')
	exampleModal.addEventListener('show.bs.modal', event => {
    const button = event.relatedTarget
    const fnm = button.getAttribute('data-bs-fnm')
    const ar = button.getAttribute('data-bs-ar')
	const nos = button.getAttribute('data-bs-nos')
	const em = button.getAttribute('data-bs-em')
	const ag = button.getAttribute('data-bs-ag')
	const genn = button.getAttribute('data-bs-genn')
	const bd = button.getAttribute('data-bs-bd')
	const rmrk = button.getAttribute('data-bs-rmrk')
    const id = button.getAttribute('data-bs-id')
    const modalTitle = exampleModal.querySelector('.modal-title')
	modalTitle.textContent = `Update Record ID ${id}`
    document.getElementById('fulnm').value = fnm;
	document.getElementById('addre').value = ar;
	document.getElementById('conn').value = nos;
	document.getElementById('emaill').value = em;
	document.getElementById('agee').value = ag;
	document.getElementById('gend').value = genn;
	document.getElementById('bltyp').value = bd;
	document.getElementById('remark').value = rmrk;
	document.getElementById('id').value = id;
})
</script>

							
							


							
								
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
    <!-- Data table area End-->
	
	<?php
		require "footer.php";
	?>
    <!-- Color Switcher -->
    <div class="ec-colorswitcher sidebarmain">
        <a class="ec-handle btnclose" href="#"><i class="fa fa-cog" aria-hidden="true"></i></a>
        <h3>Style Switcher</h3>
        <div class="ec-switcherarea">
            <div class="base-color">
                <h6>Background Color</h6>
                <ul class="ec-switcher">
                    <li>
                        <a href="#" class="cs-color-1 styleswitch" data-rel="color-one"></a>
                    </li>
                    <li>
                        <a href="#" class="cs-color-2 styleswitch" data-rel="color-two"></a>
                    </li>
                    <li>
                        <a href="#" class="cs-color-3 styleswitch" data-rel="color-three"></a>
                    </li>
                    <li>
                        <a href="#" class="cs-color-4 styleswitch" data-rel="color-four"></a>
                    </li>
                    <li>
                        <a href="#" class="cs-color-5 styleswitch" data-rel="color-five"></a>
                    </li>
                    <li>
                        <a href="#" class="cs-color-6 styleswitch" data-rel="color-six"></a>
                    </li>
                    <li>
                        <a href="#" class="cs-color-7 styleswitch" data-rel="color-seven"></a>
                    </li>
                    <li>
                        <a href="#" class="cs-color-8 styleswitch" data-rel="color-eight"></a>
                    </li>
                    <li>
                        <a href="#" class="cs-color-9 styleswitch" data-rel="color-nine"></a>
                    </li>
                    <li>
                        <a href="#" class="cs-color-10 styleswitch" data-rel="color-ten"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Color Switcher end -->
    <!-- jquery
        ============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- peity JS
        ============================================ -->
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
        ============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/flot/jquery.flot.spline.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/jquery.flot.pie.js"></script>
    <script src="js/flot/Chart.min.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- map JS
        ============================================ -->
    <script src="js/map/raphael.min.js"></script>
    <script src="js/map/jquery.mapael.js"></script>
    <script src="js/map/france_departments.js"></script>
    <script src="js/map/world_countries.js"></script>
    <script src="js/map/usa_states.js"></script>
    <script src="js/map/map-active.js"></script>
    <!-- data table JS
        ============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!-- switcher JS
        ============================================ -->
    <script src="js/switcher/styleswitch.js"></script>
    <script src="js/switcher/switch-active.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
</body>

</html>