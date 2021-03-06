<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"><link href="//netdna.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js" integrity="sha384-lZmvU/TzxoIQIOD9yQDEpvxp6wEU32Fy0ckUgOH4EIlMOCdR823rg4+3gWRwnX1M" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script type="text/javascript">
    </script>
<!--  Ensemble des liens et scripts nécessaire à la date -->
<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    $(document).ready(function(){
      var date_input=$('input[name="dateStart"]'); //notre injection de date a pour nom "dateStart"

      var options={
        format: "yyyy-mm-dd",
        clearBtn: true,
        keyboardNavigation: true,
        startDate: "now",
        autoclose: true,
      };
      date_input.datepicker(options);
    })
    $(document).ready(function(){
      var date_input=$('input[name="dateEnd"]'); //notre injection de date a pour nom "dateEnd"

      var options={
        format: "yyyy-mm-dd",
        clearBtn: true,
        keyboardNavigation: true,
        startDate: "now",
        autoclose: true,
      };
      date_input.datepicker(options);
    })
    $(document).ready(function(){
      var date_input=$('input[name="dateAccept"]'); //notre injection de date a pour nom "dateAccept"

      var options={
        format: "yyyy-mm-dd",
        todayBtn:"true",
        keyboardNavigation: true,
        startDate: "now",
        endDate: "now",
        defaultViewDate : "now",
        todayHighlight: "true",
        autoclose: true,
      };
      date_input.datepicker(options);
    })

    function now(Now){
        var today = new Date();
        var day = today.getDate();
        var month = today.getMonth()+1; //les mois sont basé sur 0!
        var year = today.getFullYear();

        if(dd<10) {
            dd = '0'+dd
        }

        if(mm<10) {
            mm = '0'+mm
        }

        today = year + '/' + month + '/' + day;
        document.getElementById('dateAccept').setAttribute()
    }
</script>

<div class="container centered_form">
        <div class="row centered-form">
        <div class="col-xs-4 col-sm-4 col-md-8 col-lg-8 col-sm-offset-4 col-md-offset-8">
        	<div class="panel panel-default">
        		<div class="panel-heading">
                    <h3 class="panel-title" ><center>Soumission Evenement Validé</center></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" action ="propositionEventAdminDb.php" method="post">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-12">
			    					<div class="form-group">
			                             <input type="text" name="Titre" id="TitreActivité" class="form-control input-sm" placeholder="Titre de l'activité" required>
			    					</div>
			    				</div>
                            </div>

                            <div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-12">
			    					<div class="form-group">
			    						<input type="text" name="Author" id="Author" class="form-control input-sm" placeholder="Votre nom">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-12">
			    					<div class="form-group">
                                        <textarea rows="6" type="text" name="description" id="description" class="form-control input-sm" placeholder="Description" required></textarea>
			    					</div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                            <div class="form-group">
                                                    <input class="form-control" id="dateEnd" name="dateEnd" placeholder="Date de début" type="text" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                            <div class="form-group">
                                                    <input class="form-control" id="dateStart" name="dateStart" placeholder="Date de fin" type="text" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                            <div class="form-group">
                                                    <input class="form-control" id="dateAccept" name="dateAccept" placeholder="Date du jour" type="text" required/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">


                                <div class="col-xs-6 col-sm-6 col-md-6">
		    			                   <input type="submit" value="Proposer" class="btn btn-info btn-block">
                                </div>
                            </div>
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
        padding: 30px;
    }

    .panel-heading{
    font-size:10px;
	padding:30px 30px 0px 38px;
    background-color: silver;
    }
