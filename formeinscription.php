<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"><link href="//netdna.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js" integrity="sha384-lZmvU/TzxoIQIOD9yQDEpvxp6wEU32Fy0ckUgOH4EIlMOCdR823rg4+3gWRwnX1M" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<!------ Include the above in your HEAD tag ---------->
 <script type="text/javascript">

        var regExpMail = /^[a-z0-9.-]+@[a-z0-9.-]{2,}.[a-z]{2,4}$/;
        var rexExpPass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[\da-zA-Z]{5,16}$/;
        var TestFullForm = 0;

        function testEmail(email){
            var OK = regExpMail.exec(email.value);
            if (!OK){
                window.alert(" cette email n'est correct!");

            }else
                TestFullForm = TestFullForm + 1;
        }
        function testPass(password){
            var OK = rexExpPass.exec(password.value);
            if (!OK){
                window.alert("Votre mot de passe n'est pas assez sécurisé!");

            }else

                TestFullForm = TestFullForm + 1;
        }

        function verificationTotale(){
            if (TestFullForm < 2){
                window.alert("vous n'avez pas remplis tout les champs");

                window.alert("Value test =  " +TestFullForm);
            }
            else
                window.alert("merci de votre inscription");
        }
    </script>

<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
                    <h3 class="panel-title" ><center>Inscription au site </center></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" action ="testInscription.php" method="post">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="firstName" id="firstName" class="form-control input-sm" placeholder="First Name">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="lastName" id="lastName" class="form-control input-sm" placeholder="Last Name">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-12">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    			</div>
		    			<input type="submit" value="Register" class="btn btn-info btn-block" onclick="
                            testPass(document.getElementById('password'));
                            testEmail(document.getElementById('email'));
                            verificationTotale();
                            ">


			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>


<style>

   body{
        background-color: #999999;
    }
    .centered-form{
	   margin-top: 60px;
       justify-content: center;
    }

    .centered-form .panel{
	   background: rgba(255, 255, 255, 0.8);
	   box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
       background-color: #525252;

    }

    .btn.btn-info.btn-block{

       border-color: #E00A0A;
       background: #E00A0A;

    }

    .panel-body{
        padding: 20px;
    }

    .panel-heading{
    font-size:20px;
	padding:30px 30px 0px 38px;
    background-color: silver;
    }


</style>
azertyuiO1
