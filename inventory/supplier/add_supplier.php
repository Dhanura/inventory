<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Bootstrap Simple Registration Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	body{
		color: #fff;
		background: #63738a;
		font-family: 'Roboto', sans-serif;
	}
    .form-control{
		height: 40px;
		box-shadow: none;
		color: #969fa4;
	}
	.form-control:focus{
		border-color: #5cb85c;
	}
    .form-control, .btn{
        border-radius: 3px;
    }
	.signup-form{
		width: 400px;
		margin: 0 auto;
		padding: 30px 0;
	}
	.signup-form h2{
		color: #636363;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.signup-form h2:before, .signup-form h2:after{
		content: "";
		height: 2px;
		width: 20%;
		background: #d4d4d4;
		position: absolute;
		top: 50%;
		z-index: 2;
	}
	.signup-form h2:before{
		left: 0;
	}
	.signup-form h2:after{
		right: 0;
	}
    .signup-form .hint-text{
		color: #999;
		margin-bottom: 30px;
		text-align: center;
	}
    .signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .btn{
        font-size: 16px;
        font-weight: bold;
		min-width: 140px;
        outline: none !important;
    }
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
    .signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #5cb85c;
		text-decoration: none;
	}
	.signup-form form a:hover{
		text-decoration: underline;
	}
</style>
</head>
<body>
<div class="signup-form">
    <form action="supplier_add.php" method="post">
		<h2>Add Supplier</h2>
		<!-- <p class="hint-text">Add Supplier</p> -->
        <div class="form-group">

                     <input type="text" class="form-control" name="supplier_name" placeholder="Supplier Name" required="required">
				<!-- <div class="col-xs-6"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div> -->

        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="supplier_email" placeholder="Email" required="required">
        </div>
    		<div class="form-group">
                <input type="password" class="form-control" name="supplier_password" placeholder="Password" required="required">
        </div>
		    <div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="supplier_add_no" placeholder="Address Number" required="required">
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
			       <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		    </div> -->
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="supplier_add">Add Supplier</button>
        </div>
    </form>
	<div class="text-center"><a href="manage_supplier.php">View suppliers</a></div>
</div>
</body>
</html>
