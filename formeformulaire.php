<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"><link href="//netdna.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js" integrity="sha384-lZmvU/TzxoIQIOD9yQDEpvxp6wEU32Fy0ckUgOH4EIlMOCdR823rg4+3gWRwnX1M" crossorigin="anonymous"></script>

<!------ Include the above in your HEAD tag ---------->

<div class="row justify-content-center">
	<div>
		<form class="form-signin mg-btm" method="post">
    	<h3 class="heading-desc">
		Formulaire idée évènement</h3>

		<div class="main" >

            <input type="text" class="form-control"  name="titre" id="tire" placeholder="Titre" autofocus>
            <input type="text" class="form-control" name="description" id ="description" placeholder="Description">

            <form action="transfert.php" method="post" enctype="multipart/form-data">
                <p>
                    Formulaire d'envoi de fichier :<br />
                    <input type="file" name="monfichier" /><br />
                    <input type="submit" value="Envoyer le fichier" />
                </p>
            </form>

		<span class="clearfix"></span>
        </div>
		<div class="send-footer">
		<div class="panel-boddy">

                        <div>
                            <button type="submit" class="btn btn-info btn-block">Envoyer votre idée</button>
                        </div>
                    </div>

		</div>
      </form>
	</div>
</div>

<style>

.form-signin {
  max-width: 400px;
  display:block;
  background-color: #f7f7f7;
  -moz-box-shadow: 0 0 3px 3px #888;
    -webkit-box-shadow: 0 0 3px 3px #888;
	box-shadow: 0 0 3px 3px #888;
  border-radius:2px;
  margin-top: 60px;

}
.main{

	padding: 38px;


}

.heading-desc{
	font-size:20px;
	font-weight:bold;
	padding:38px 38px 0px 38px;

}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;

}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  font-size: 16px;
  height: 20px;
  padding: 20px;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="text"] {
  margin-bottom: 10px;
  border-radius: 5px;

}

.send-footer{
	background:#f0f0f0;
	margin: 0 auto;
	border-top: 1px solid #dadada;
	padding:20px;
}

.btn.btn-info.btn-block{

       border-color: #E00A0A;
       background: #E00A0A;
    }


</style>
