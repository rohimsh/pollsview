
<script type="text/javascript">
// 	setInterval("checkLoad()",1000);
// function checkLoad()
// {
//    if(document.getElementById("questions"))
//    {
// 	document.getElementById("preLoaderDiv").style.visibility = "hidden";
//    }
// }
</script>
<div class="well">
    <form method="POST" action="askdb.php" ><center>
	<div class="form-group">
	 <textarea class="form-control" name="que" placeholder="Question you want poll on.." rows="3" cols="70" autofocus required></textarea>
	  </div>
    <div class="row">
	 <div class="form-group-text col-xs-6 col-sm-6">
	 <input class="form-control" type="text" name="opt1"   placeholder="Option 1*  " maxlength=100 size=50 required></input>
	 </div>
	 <div class="form-group-text col-xs-6 col-sm-6">
	 <input class="form-control" type="text" name="opt2"   placeholder="Option 2*  " maxlength=100 size=50 required ></input>
	  </div>
  </div>
      <br>
  <div class="row">
	 <div class="form-group-text col-xs-6 col-sm-6">
	 <input class="form-control" type="text" name="opt3"   placeholder="Option 3  " maxlength=100 size=50  ></input>
	  </div>
	 <div class="form-group-text col-xs-6 col-sm-6">
	 <input class="form-control" type="text" name="opt4"   placeholder="Option 4  " maxlength=100 size=50  ></input>
    </div>
	 </div>
        <br>
    <div class="row">
	 <div class="form-group-text col-xs-6 col-sm-6">
	 <input class="form-control" type="text" name="opt5"   placeholder="Option 5  " maxlength=100 size=50  ></input>
	  </div>


      <div class="col-xs-6 col-sm-6"><input class="btn btn-lg btn-primary btn-block" type="submit" class="btn btn-primary btn-lg" value="Ask"></div>
    </center></form>
</div>
	<br>
<div class='row'>
  <div class='col-xs-1 col-sm-1'>
<b>*N o t e :</b>
  </div>
    <div class='col-xs-4 col-sm-4'>
1. At least two options are necesaary for polling!</div>
      <div class='col-xs-4 col-sm-4'>
2. Options should NOT be more than 100 characters!
</div>
</div>
