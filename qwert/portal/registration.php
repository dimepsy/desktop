<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="js/validate.js">
</script>
</head>

<body>
    <div id="wrapper">
    	<div id="top_part">
        </div><!--end of top part-->
        <div id="mid_part">
            <div id="form_container">
            	<h1>SIGN UP HERE!!!</h1>
				<span class="close">X</span>
                <form name="AdmissionForm" method="post" action="a.php" onsubmit="return ValidateForm()">
                    <table id="OuterTable">
                      <tr>
                        	<td>
                    
                                    <legend>Personal Information</legend>
                                    <table class="InnerTable">
                                        
                                            <td class="FirstColumn">Full Name</td>
                                            <td colspan="2"><input type="text" name="FirstName" value="" id="FirstName" class="TextField" maxlength="20" size="20" onchange="javascript:ValidateFirstName();" onclick="javascript:ClearField(this);" /></td>
                                            <td><img id="FirstNameErrorImg" src="Images/transparent.png" height="16" width="16" /></td>
                                            <td id="FirstNameError" class="LastColumn"></td>
                                        
                                       </tr>
                                       
                                       
                                    <tr>
                                            <td class="FirstColumn">Gender</td>
                                            <td><input type="radio" name="Gender" value="Male" checked="checked" /></td>
                                            <td><input type="radio" name="Gender" value="Female" /></td>
                                            <td></td>
                                            <td class="LastColumn"></td>
                                        </tr>
                                        <tr>
                                            <td class="FirstColumn"></td>
                                            <td>Male</td>
                                            <td>Female</td>
                                            <td></td>
                                            <td class="LastColumn"></td>
                                        </tr>
                                        
                                    </table>
                            	
                            </td>
                        </tr>
                        <tr>
                        	<td>
                            	
                                    <legend>Contact Information</legend>
                                    <table class="InnerTable">
                                        <tr>
                                            <td class="FirstColumn">Address</td>
                                            <td colspan="2"><input type="text" name="Address" value="" id="Address" class="TextField" maxlength="50" size="20" onchange="javascript:ValidateAddress();" onclick="javascript:ClearField(this);" /></td>
                                            <td><img id="AddressErrorImg" src="Images/transparent.png" height="16" width="16" /></td>
                                            <td id="AddressError" class="LastColumn"></td>
                                        </tr>
                                        <tr>
                                            <td class="FirstColumn">Contact No</td>
                                            <td colspan="2"><input type="text" name="PhoneNo" value="" id="PhoneNo" class="TextField" maxlength="15" size="20" onchange="javascript:ValidatePhoneMobile(this);" onclick="javascript:ClearField(this);" /></td>
                                            <td><img id="PhoneNoErrorImg" src="Images/transparent.png" height="16" width="16" /></td>
                                            <td id="PhoneNoError" class="LastColumn"></td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="FirstColumn">Email</td>
                                            <td colspan="2"><input type="text" name="Email" value="" id="Email" class="TextField" maxlength="50" size="20" onchange="javascript:ValidateEmail();" onclick="javascript:ClearField(this);" /></td>
                                            <td><img id="EmailErrorImg" src="Images/transparent.png" height="16" width="16" /></td>
                                            <td id="EmailError" class="LastColumn"></td>
                                        </tr>
										<tr>
										<td class="FirstColumn">Username</td>
                                            <td colspan="2"><input type="text" name="Username" value="" id="Username" class="TextField" maxlength="50" size="20" onchange="javascript:ValidateEmail();" onclick="javascript:ClearField(this);" /></td>
                                            <td><img id="EmailErrorImg" src="Images/transparent.png" height="16" width="16" /></td>
                                            <td id="UserError" class="LastColumn"></td>
										</tr>
										<tr>
										<td class="FirstColumn">Password</td>
                                            <td colspan="2"><input type="text" name="Password" value="" id="Password" class="TextField" maxlength="50" size="20" onchange="javascript:ValidateEmail();" onclick="javascript:ClearField(this);" /></td>
                                            <td><img id="PasswordErrorImg" src="Images/transparent.png" height="16" width="16" /></td>
                                            <td id="UserError" class="LastColumn"></td>
										</tr>
                        			</table>
                            
                            </td>
                        </tr>
                       
                        
                  
                        
                        
                        <tr>
                        	<td>
                            	
                                
                                <table class="InnerTable">
                                	
					<tr><td><img id="AgreementErrorImg" src="Images/transparent.png" height="16" width="16" /></td><td colspan="4" id="AgreementError"></td></tr>
                                	<tr>
                                    <td class="FirstColumn"><input type="submit" value="Submit" name="Submit" /></td>
                                    <td colspan="4"><input type="reset" value="Reset" name="Reset" /></td>
                                    </tr>
                                </table>
                              
                            </td>
                        </tr>
                    </table><!--end of form table-->
                </form><!--end of form-->
            </div><!--end of form container-->
        </div><!--end of mid part-->
        <div id="bottom_part">
        </div><!--end of bottom part-->
    </div><!--end of wrapper-->
    <script type="text/javascript">
	CalculateAge();
	ChangeFieldAggregate();
	//CalculatePercentage(document.AdmissionForm.PCMPhysics,document.AdmissionForm.PCMChemistry,document.AdmissionForm.PCMMaths,document.AdmissionForm.PCMPercentage);
			
	</script>
</body>
</html>
