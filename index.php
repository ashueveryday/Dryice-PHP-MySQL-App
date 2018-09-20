<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>DRYiCE Sample Application</title>
<link rel="icon" href="images/dryic_icon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="images/dryic_icon.ico" type="image/x-icon"/>
<link href="css/style-User-Input-Form.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.6.4.js"></script>
<script type="text/javascript" language="javascript">
	$(document).ready(function() {
		$('#SubmitButton').click(function() {
			//$("#contactPersonErr").hide();
			var error = "false";
			$("#contactPersonErr").hide();
			$("#emailErr").hide();
			if ($.trim($("#contactPerson").val()).length == 0) {
				$("#contactPersonErr").show();
				error = "true";
			}if ($.trim($("#email").val()).length == 0) {
				$("#emailErr").show();
				error = "true";
			}
			if (error == "true") {
				return false;
			}
			return true;
		});
	});
</script>
</head>
<body>
	<img  height="400" width="1350" src="images/banner.png"/>
<!------------------------------------Header Closed------------------------------------------->
	<div class="App42PaaS_body_wrapper" align="center">
    	<div class="App42PaaS_body_1">
        	<div class="App42PaaS_body_inner_1">
         
            <div class="form_wrapper_1" >
			<form method="post" action="save.php">
			<fieldset>
  		  	<legend>Personal Particular</legend>
            <div class="contactForm_tr">
				<div class="contactForm_td1">Name</div>
            	<div class="contactForm_tdMiddle">: </div>
           		<div class="contactForm_td2">
                <input name="name" type="text" class="Personal-input" id="contactPerson" value=""></div>
				<div class="contactForm_td2" style="color: red; padding-left: 90px; display: none;" id="contactPersonErr">Name is mandatory</div>
            </div>
			<div class="contactForm_tr">
				<div class="contactForm_td1">Email</div>
            	<div class="contactForm_tdMiddle">: </div>
           		<div class="contactForm_td2"><input name="email" type="text" id="email" class="Personal-input" maxlength="30">
                </div>
				<div class="contactForm_td2" style="color: red; padding-left: 90px; display: none;" id="emailErr">Email is mandatory</div>
            </div>
			</fieldset>
			<fieldset>
			<legend>What do you like about this Page :</legend>
            <div class="massage-box">
			<textarea name="description" cols="30" rows="5" class="massage-textFild"></textarea>
            </div>
			</fieldset>
			<div style="margin-left:60px; margin-right:10px;">
			<input id="SubmitButton" class="submit_btn" type="image" border="0" name="submit" alt="Submit" src="images/submit_btn.png"></input>
			&nbsp;&nbsp;&nbsp;&nbsp;<a class="submit_btn" href="home.php"><img src="images/data.png" /></a>
			</div>	
			</form>
			</div>
            
           <div class="reachus_wrapper_vcard"> 
            	<div class="vcard_txt">
                </div>
            </div>
            </div>
    	</div>
    </div>
</body>
</html>
