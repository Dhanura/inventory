<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	.table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {
		padding-bottom: 15px;
		background: #435d7d;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }
	/* Custom checkbox */
	.custom-checkbox {
		position: relative;
	}
	.custom-checkbox input[type="checkbox"] {
		opacity: 0;
		position: absolute;
		margin: 5px 0 0 3px;
		z-index: 9;
	}
	.custom-checkbox label:before{
		width: 18px;
		height: 18px;
	}
	.custom-checkbox label:before {
		content: '';
		margin-right: 10px;
		display: inline-block;
		vertical-align: text-top;
		background: white;
		border: 1px solid #bbb;
		border-radius: 2px;
		box-sizing: border-box;
		z-index: 2;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		content: '';
		position: absolute;
		left: 6px;
		top: 3px;
		width: 6px;
		height: 11px;
		border: solid #000;
		border-width: 0 3px 3px 0;
		transform: inherit;
		z-index: 3;
		transform: rotateZ(45deg);
	}
	.custom-checkbox input[type="checkbox"]:checked + label:before {
		border-color: #03A9F4;
		background: #03A9F4;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		border-color: #fff;
	}
	.custom-checkbox input[type="checkbox"]:disabled + label:before {
		color: #b8b8b8;
		cursor: auto;
		box-shadow: none;
		background: #ddd;
	}
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 400px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
    .modal .modal-title {
        display: inline-block;
    }
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}
	.modal form label {
		font-weight: normal;
	}
</style>
<script type="text/javascript">
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();

	// Select/Deselect checkboxes
	// var checkbox = $('table tbody input[type="checkbox"]');
	// $("#selectAll").click(function(){
	// 	if(this.checked){
	// 		checkbox.each(function(){
	// 			this.checked = true;
	// 		});
	// 	} else{
	// 		checkbox.each(function(){
	// 			this.checked = false;
	// 		});
	// 	}
	// });
	// checkbox.click(function(){
	// 	if(!this.checked){
	// 		$("#selectAll").prop("checked", false);
	// 	}
	// });
});
</script>
</head>
<body>
  <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    <div class="w3-container">
      <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
        <i class="fa fa-remove"></i>
      </a>
      <img src="/w3images/avatar_g2.jpg" style="width:45%;" class="w3-round"><br><br>
      <h4><b>Dashboard</b></h4>
    </div>
    <div class="w3-bar-block">
      <a href="../users/manage_users.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>users</a>
  		<a href="../supplier/manage_supplier.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>suppliers</a>
  		<a href="../items/manage_items.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Items</a>
  		<a href="../requisition/manage_requisitions.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Requisition</a>
  		<a href="../quotations/manage_quotations.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Quotations</a>
  		<a href="../orders/manage_orders.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Orders</a>
      <!-- <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a>
      <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a> -->
    </div>
    <!-- <div class="w3-panel w3-large">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div> -->
  </nav>
  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:300px">

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage Suppliers</h2>
					</div>
					<div class="col-sm-6">
						<a href="add_supplier.php" class="btn btn-success" role="button"><i class="material-icons">&#xE147;</i> <span>Add New Supplier</span></a>
						<!-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a> -->
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<!-- <th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th> -->
                        <th>Supplier ID</th>
                        <th>Suplier Name</th>
                        <th>Supplier Email</th>
                        <th>Password</th>
                        <th>Address</th>
                        <th>Country</th>
                    </tr>
                  </thead>
                  <tbody>
    <?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost", "root", "root", "Inventory");

    // Check connection
    if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Attempt select query execution
    $sql = "SELECT * FROM supplier";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
        // echo "<table>";
        //     echo "<tr>";
        //         echo "<th>id</th>";
        //         echo "<th>first_name</th>";
        //         echo "<th>last_name</th>";
        //         echo "<th>email</th>";
        //     echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['supplier_id'] . "</td>";
                echo "<td>" . $row['supplier_name'] . "</td>";
                echo "<td>" . $row['supplier_email'] . "</td>";
                echo "<td>" . $row['supplier_password'] . "</td>";
                echo "<td>" . $row['supplier_add_no'] . "<br>". $row['supplier_add_street'] . "<br>". $row['supplier_add_city'] ."</td>";
                echo "<td>" . $row['supplier_add_country'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
        } else{
        echo "No records matching your query were found.";
        }
    } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Close connection
    mysqli_close($link);
    ?>
			<div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item active"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
	<!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">Add Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" class="form-control" required>
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">Edit Supplier</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Telephone</label>
              <input type="email" class="form-control" required>
						</div>
            <div class="form-group">
              <label>Address</label>
                <input type="text" class="form-control" name="supplier_add_no" placeholder="Number" required="required">
            </div>
    				<div class="form-group">
                <input type="text" class="form-control" name="supplier_add_street" placeholder="Street" required="required">
            </div>
    				<div class="form-group">
                <input type="text" class="form-control" name="supplier_add_city" placeholder="City" required="required">
            </div>
            <div class="form-group">
                <input list="country" class="form-control" name="supplier_add_country" placeholder="Country" required="required">
                  <datalist id="country">
    							<!-- <select id="country" name="supplier_add_country"> -->
    							   <option value="Afganistan">Afghanistan</option>
    							   <option value="Albania">Albania</option>
    							   <option value="Algeria">Algeria</option>
    							   <option value="American Samoa">American Samoa</option>
    							   <option value="Andorra">Andorra</option>
    							   <option value="Angola">Angola</option>
    							   <option value="Anguilla">Anguilla</option>
    							   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
    							   <option value="Argentina">Argentina</option>
    							   <option value="Armenia">Armenia</option>
    							   <option value="Aruba">Aruba</option>
    							   <option value="Australia">Australia</option>
    							   <option value="Austria">Austria</option>
    							   <option value="Azerbaijan">Azerbaijan</option>
    							   <option value="Bahamas">Bahamas</option>
    							   <option value="Bahrain">Bahrain</option>
    							   <option value="Bangladesh">Bangladesh</option>
    							   <option value="Barbados">Barbados</option>
    							   <option value="Belarus">Belarus</option>
    							   <option value="Belgium">Belgium</option>
    							   <option value="Belize">Belize</option>
    							   <option value="Benin">Benin</option>
    							   <option value="Bermuda">Bermuda</option>
    							   <option value="Bhutan">Bhutan</option>
    							   <option value="Bolivia">Bolivia</option>
    							   <option value="Bonaire">Bonaire</option>
    							   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
    							   <option value="Botswana">Botswana</option>
    							   <option value="Brazil">Brazil</option>
    							   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
    							   <option value="Brunei">Brunei</option>
    							   <option value="Bulgaria">Bulgaria</option>
    							   <option value="Burkina Faso">Burkina Faso</option>
    							   <option value="Burundi">Burundi</option>
    							   <option value="Cambodia">Cambodia</option>
    							   <option value="Cameroon">Cameroon</option>
    							   <option value="Canada">Canada</option>
    							   <option value="Canary Islands">Canary Islands</option>
    							   <option value="Cape Verde">Cape Verde</option>
    							   <option value="Cayman Islands">Cayman Islands</option>
    							   <option value="Central African Republic">Central African Republic</option>
    							   <option value="Chad">Chad</option>
    							   <option value="Channel Islands">Channel Islands</option>
    							   <option value="Chile">Chile</option>
    							   <option value="China">China</option>
    							   <option value="Christmas Island">Christmas Island</option>
    							   <option value="Cocos Island">Cocos Island</option>
    							   <option value="Colombia">Colombia</option>
    							   <option value="Comoros">Comoros</option>
    							   <option value="Congo">Congo</option>
    							   <option value="Cook Islands">Cook Islands</option>
    							   <option value="Costa Rica">Costa Rica</option>
    							   <option value="Cote DIvoire">Cote DIvoire</option>
    							   <option value="Croatia">Croatia</option>
    							   <option value="Cuba">Cuba</option>
    							   <option value="Curaco">Curacao</option>
    							   <option value="Cyprus">Cyprus</option>
    							   <option value="Czech Republic">Czech Republic</option>
    							   <option value="Denmark">Denmark</option>
    							   <option value="Djibouti">Djibouti</option>
    							   <option value="Dominica">Dominica</option>
    							   <option value="Dominican Republic">Dominican Republic</option>
    							   <option value="East Timor">East Timor</option>
    							   <option value="Ecuador">Ecuador</option>
    							   <option value="Egypt">Egypt</option>
    							   <option value="El Salvador">El Salvador</option>
    							   <option value="Equatorial Guinea">Equatorial Guinea</option>
    							   <option value="Eritrea">Eritrea</option>
    							   <option value="Estonia">Estonia</option>
    							   <option value="Ethiopia">Ethiopia</option>
    							   <option value="Falkland Islands">Falkland Islands</option>
    							   <option value="Faroe Islands">Faroe Islands</option>
    							   <option value="Fiji">Fiji</option>
    							   <option value="Finland">Finland</option>
    							   <option value="France">France</option>
    							   <option value="French Guiana">French Guiana</option>
    							   <option value="French Polynesia">French Polynesia</option>
    							   <option value="French Southern Ter">French Southern Ter</option>
    							   <option value="Gabon">Gabon</option>
    							   <option value="Gambia">Gambia</option>
    							   <option value="Georgia">Georgia</option>
    							   <option value="Germany">Germany</option>
    							   <option value="Ghana">Ghana</option>
    							   <option value="Gibraltar">Gibraltar</option>
    							   <option value="Great Britain">Great Britain</option>
    							   <option value="Greece">Greece</option>
    							   <option value="Greenland">Greenland</option>
    							   <option value="Grenada">Grenada</option>
    							   <option value="Guadeloupe">Guadeloupe</option>
    							   <option value="Guam">Guam</option>
    							   <option value="Guatemala">Guatemala</option>
    							   <option value="Guinea">Guinea</option>
    							   <option value="Guyana">Guyana</option>
    							   <option value="Haiti">Haiti</option>
    							   <option value="Hawaii">Hawaii</option>
    							   <option value="Honduras">Honduras</option>
    							   <option value="Hong Kong">Hong Kong</option>
    							   <option value="Hungary">Hungary</option>
    							   <option value="Iceland">Iceland</option>
    							   <option value="Indonesia">Indonesia</option>
    							   <option value="India">India</option>
    							   <option value="Iran">Iran</option>
    							   <option value="Iraq">Iraq</option>
    							   <option value="Ireland">Ireland</option>
    							   <option value="Isle of Man">Isle of Man</option>
    							   <option value="Israel">Israel</option>
    							   <option value="Italy">Italy</option>
    							   <option value="Jamaica">Jamaica</option>
    							   <option value="Japan">Japan</option>
    							   <option value="Jordan">Jordan</option>
    							   <option value="Kazakhstan">Kazakhstan</option>
    							   <option value="Kenya">Kenya</option>
    							   <option value="Kiribati">Kiribati</option>
    							   <option value="Korea North">Korea North</option>
    							   <option value="Korea Sout">Korea South</option>
    							   <option value="Kuwait">Kuwait</option>
    							   <option value="Kyrgyzstan">Kyrgyzstan</option>
    							   <option value="Laos">Laos</option>
    							   <option value="Latvia">Latvia</option>
    							   <option value="Lebanon">Lebanon</option>
    							   <option value="Lesotho">Lesotho</option>
    							   <option value="Liberia">Liberia</option>
    							   <option value="Libya">Libya</option>
    							   <option value="Liechtenstein">Liechtenstein</option>
    							   <option value="Lithuania">Lithuania</option>
    							   <option value="Luxembourg">Luxembourg</option>
    							   <option value="Macau">Macau</option>
    							   <option value="Macedonia">Macedonia</option>
    							   <option value="Madagascar">Madagascar</option>
    							   <option value="Malaysia">Malaysia</option>
    							   <option value="Malawi">Malawi</option>
    							   <option value="Maldives">Maldives</option>
    							   <option value="Mali">Mali</option>
    							   <option value="Malta">Malta</option>
    							   <option value="Marshall Islands">Marshall Islands</option>
    							   <option value="Martinique">Martinique</option>
    							   <option value="Mauritania">Mauritania</option>
    							   <option value="Mauritius">Mauritius</option>
    							   <option value="Mayotte">Mayotte</option>
    							   <option value="Mexico">Mexico</option>
    							   <option value="Midway Islands">Midway Islands</option>
    							   <option value="Moldova">Moldova</option>
    							   <option value="Monaco">Monaco</option>
    							   <option value="Mongolia">Mongolia</option>
    							   <option value="Montserrat">Montserrat</option>
    							   <option value="Morocco">Morocco</option>
    							   <option value="Mozambique">Mozambique</option>
    							   <option value="Myanmar">Myanmar</option>
    							   <option value="Nambia">Nambia</option>
    							   <option value="Nauru">Nauru</option>
    							   <option value="Nepal">Nepal</option>
    							   <option value="Netherland Antilles">Netherland Antilles</option>
    							   <option value="Netherlands">Netherlands (Holland, Europe)</option>
    							   <option value="Nevis">Nevis</option>
    							   <option value="New Caledonia">New Caledonia</option>
    							   <option value="New Zealand">New Zealand</option>
    							   <option value="Nicaragua">Nicaragua</option>
    							   <option value="Niger">Niger</option>
    							   <option value="Nigeria">Nigeria</option>
    							   <option value="Niue">Niue</option>
    							   <option value="Norfolk Island">Norfolk Island</option>
    							   <option value="Norway">Norway</option>
    							   <option value="Oman">Oman</option>
    							   <option value="Pakistan">Pakistan</option>
    							   <option value="Palau Island">Palau Island</option>
    							   <option value="Palestine">Palestine</option>
    							   <option value="Panama">Panama</option>
    							   <option value="Papua New Guinea">Papua New Guinea</option>
    							   <option value="Paraguay">Paraguay</option>
    							   <option value="Peru">Peru</option>
    							   <option value="Phillipines">Philippines</option>
    							   <option value="Pitcairn Island">Pitcairn Island</option>
    							   <option value="Poland">Poland</option>
    							   <option value="Portugal">Portugal</option>
    							   <option value="Puerto Rico">Puerto Rico</option>
    							   <option value="Qatar">Qatar</option>
    							   <option value="Republic of Montenegro">Republic of Montenegro</option>
    							   <option value="Republic of Serbia">Republic of Serbia</option>
    							   <option value="Reunion">Reunion</option>
    							   <option value="Romania">Romania</option>
    							   <option value="Russia">Russia</option>
    							   <option value="Rwanda">Rwanda</option>
    							   <option value="St Barthelemy">St Barthelemy</option>
    							   <option value="St Eustatius">St Eustatius</option>
    							   <option value="St Helena">St Helena</option>
    							   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
    							   <option value="St Lucia">St Lucia</option>
    							   <option value="St Maarten">St Maarten</option>
    							   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
    							   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
    							   <option value="Saipan">Saipan</option>
    							   <option value="Samoa">Samoa</option>
    							   <option value="Samoa American">Samoa American</option>
    							   <option value="San Marino">San Marino</option>
    							   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
    							   <option value="Saudi Arabia">Saudi Arabia</option>
    							   <option value="Senegal">Senegal</option>
    							   <option value="Seychelles">Seychelles</option>
    							   <option value="Sierra Leone">Sierra Leone</option>
    							   <option value="Singapore">Singapore</option>
    							   <option value="Slovakia">Slovakia</option>
    							   <option value="Slovenia">Slovenia</option>
    							   <option value="Solomon Islands">Solomon Islands</option>
    							   <option value="Somalia">Somalia</option>
    							   <option value="South Africa">South Africa</option>
    							   <option value="Spain">Spain</option>
    							   <option value="Sri Lanka">Sri Lanka</option>
    							   <option value="Sudan">Sudan</option>
    							   <option value="Suriname">Suriname</option>
    							   <option value="Swaziland">Swaziland</option>
    							   <option value="Sweden">Sweden</option>
    							   <option value="Switzerland">Switzerland</option>
    							   <option value="Syria">Syria</option>
    							   <option value="Tahiti">Tahiti</option>
    							   <option value="Taiwan">Taiwan</option>
    							   <option value="Tajikistan">Tajikistan</option>
    							   <option value="Tanzania">Tanzania</option>
    							   <option value="Thailand">Thailand</option>
    							   <option value="Togo">Togo</option>
    							   <option value="Tokelau">Tokelau</option>
    							   <option value="Tonga">Tonga</option>
    							   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
    							   <option value="Tunisia">Tunisia</option>
    							   <option value="Turkey">Turkey</option>
    							   <option value="Turkmenistan">Turkmenistan</option>
    							   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
    							   <option value="Tuvalu">Tuvalu</option>
    							   <option value="Uganda">Uganda</option>
    							   <option value="United Kingdom">United Kingdom</option>
    							   <option value="Ukraine">Ukraine</option>
    							   <option value="United Arab Erimates">United Arab Emirates</option>
    							   <option value="United States of America">United States of America</option>
    							   <option value="Uraguay">Uruguay</option>
    							   <option value="Uzbekistan">Uzbekistan</option>
    							   <option value="Vanuatu">Vanuatu</option>
    							   <option value="Vatican City State">Vatican City State</option>
    							   <option value="Venezuela">Venezuela</option>
    							   <option value="Vietnam">Vietnam</option>
    							   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
    							   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
    							   <option value="Wake Island">Wake Island</option>
    							   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
    							   <option value="Yemen">Yemen</option>
    							   <option value="Zaire">Zaire</option>
    							   <option value="Zambia">Zambia</option>
    							   <option value="Zimbabwe">Zimbabwe</option>
    							<!-- </select> -->
                  </datalist>
            </div>
						<!-- <div class="form-group">
							<label>Department</label>
              <input list="depertments" class="form-control" name="department_name" placeholder="Department_Name" required="required">
                <datalist id="depertments">
                  <option value="Recuisition">
                  <option value="Human Resource">
                  <option value="Finance">
                  <option value="Operations">
                  <option value="Productions">
                </datalist>
						</div> -->
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">Delete Supplier</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<p>Are you sure you want to delete this Supplier?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
