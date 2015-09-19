<script type="text/javascript">
function setCookie(cname,str1,str2,exdays)
{
var d = new Date();
d.setTime(d.getTime()+(exdays*24*60*60*1000));
var expires = "expires="+d.toGMTString();
var cq=getCookie("cookque");
document.cookie = cname+"="+cq+"#"+str1+"$"+str2+"#; "+expires;
}

function getCookie(cname)
{
var name = cname + "=";
var ca = document.cookie.split(';');
for(var i=0; i<ca.length; i++) 
  {
  var c = ca[i].trim();
  if (c.indexOf(name)==0) return c.substring(name.length,c.length);
  }
return "";
}

function checkcookie(str1)
{
var cq=getCookie("cookque");
var start=cq.indexOf("#"+str1+"$");
var answer=0;
if(start>=0)
{
for(var i=start+1;i<cq.length;i++)
  {
  if(cq.charAt(i)=="$")
  start=i+1;
  if(cq.charAt(i)=="#")
  {var end=i;
  break;
  }
  }
answer=parseInt(cq.slice(start,end));
}
return answer;
}


</script>

<div id="questions">
<?php
include 'db.php';
$query=mysqli_query($conn,"SELECT * FROM qdb WHERE status='1' ORDER BY no DESC LIMIT 30;");
$jsarray = array();
while($rows=mysqli_fetch_row($query))
{
echo "
<div class='main' id='".$rows[0]."'>
</div>
<div class='well'>
<div class='list-group'>
            <a href='javascript:void(0)' class='list-group-item active' style='font-size:1.8em'>
            <i class='fa fa-question-circle animated'></i> ".$rows[1]."</a>
</div>
<div class='row'>
<div class='col-xs-1.5 col-sm-1.5 votes'>
<b><div id='".$rows[0]."v'></div></b> 
Votes
</div> 
<div class='col-xs-2 col-sm-2' style='float:right;text-align:right'>
<div class='addthis_toolbox addthis_default_style '> 
<a class='addthis_button_facebook'></a> 
<a class='addthis_button_twitter'></a> 
<a class='addthis_button_google_plusone_share'></a>
<a class='addthis_button_pinterest_share'></a>
 </div> 
<script type='text/javascript' src='//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53c764716d4aa03a'></script></div>
<div class='col-xs-4 col-sm-4' style='float:right;text-align:right'><em><small>on ".$rows[12]."-".$rows[13]."-".$rows[14]." at ".$rows[15]. "</small></em></div>
</div> 
<br>
<br>
<div class='row'>
<div class='col-xs-4 col-sm-4' style='text-align:left'>
<div id='".$rows[0]."-1'>
<i class=fa fa-caret-right animated'></i>
<a href='javascript:void(0)'onClick='getVote(".$rows[0].", 1)'> ".$rows[2]." </a>
</div>
</div>
<div class='col-xs-7 col-sm-7'>
<div  class='progress progress-striped'>
<div class='progress-bar' id='".$rows[0]."-1p'  style='width:0'></div>
</div>
</div>
<div class='col-xs-1 col-sm-1' id='".$rows[0]."-1f'>

</div>
</div>";
if($rows[3])
{echo "
<div class='row'>
<div class='col-xs-4 col-sm-4' style='text-align:left'>
<div id='".$rows[0]."-2'>
<i class=fa fa-caret-right animated'></i>
<a href='javascript:void(0)'onClick='getVote(".$rows[0].", 2)'> ".$rows[3]." </a>
</div>
</div>
<div class='col-xs-7 col-sm-7'>
<div class='progress progress-striped'>
<div id='".$rows[0]."-2p' class='progress-bar progress-bar-success'  style='width:0'></div>
</div>
</div>
<div class='col-xs-1 col-sm-1' id='".$rows[0]."-2f'>

</div>
</div>";
if($rows[4])
{echo "
<div class='row'>
<div class='col-xs-4 col-sm-4' style='text-align:left'>
<div id='".$rows[0]."-3'>
<i class=fa fa-caret-right animated'></i>
<a href='javascript:void(0)'onClick='getVote(".$rows[0].", 3)'> ".$rows[4]." </a>
</div>
</div>
<div class='col-xs-7 col-sm-7'>
<div class='progress progress-striped'>
<div id='".$rows[0]."-3p' class='progress-bar progress-bar-info'  style='width:0'></div>
</div>
</div>
<div class='col-xs-1 col-sm-1' id='".$rows[0]."-3f'>
</div>
</div>";
if($rows[5])
{echo "
<div class='row'>
<div class='col-xs-4 col-sm-4' style='text-align:left'>
<div id='".$rows[0]."-4'>
<i class=fa fa-caret-right animated'></i>
<a href='javascript:void(0)'onClick='getVote(".$rows[0].", 4)'> ".$rows[5]." </a>
</div>
</div>
<div class='col-xs-7 col-sm-7'>
<div class='progress progress-striped'>
<div id='".$rows[0]."-4p' class='progress-bar progress-bar-warning'  style='width:0'></div>
</div>
</div>
<div class='col-xs-1 col-sm-1' id='".$rows[0]."-4f'>

</div>
</div>";
if($rows[6])
{echo "
<div class='row'>
<div class='col-xs-4 col-sm-4' style='text-align:left'>
<div id='".$rows[0]."-5'>
<i class=fa fa-caret-right animated'></i>
<a href='javascript:void(0)'onClick='getVote(".$rows[0].", 5)'> ".$rows[6]." </a>
</div>
</div>
<div class='col-xs-7 col-sm-7'>
<div class='progress progress-striped'>
<div id='".$rows[0]."-5p' class='progress-bar progress-bar-danger'  style='width:0'></div>
</div>
</div>
<div class='col-xs-1 col-sm-1' id='".$rows[0]."-5f'>

</div>
</div></div>";
}}}}
echo "</table></div>";
$jsarray[]=array($rows[0],$rows[7],$rows[8],$rows[9],$rows[10],$rows[11]);
}
$jsarray[] =array(0,0,0,0,0,0);
echo "<script type='text/javascript'>var array=".json_encode($jsarray)."; </script>";
?>

<script type="text/javascript"> 
var token;
var maxtoken;
var index;


var ulimit=array.length-1;
function showvote()
{
for(var x=0;x<=ulimit;x++)
{
var votes=0;
for(var y=1;y<=5;y++){
votes+=parseInt(array[x][y]);
}
$( "#"+(array[x][0])+"v" ).text(votes);
var cc=checkcookie(array[x][0]);
if(cc!=0)
showresult(array[x][0],cc);
}
return true;
}

function getVote(str1, str2)
{

for(var x=0;x<=ulimit;x++)
{
if(array[x][0]==str1)
{
index=x;
break;
}
}
var total=0;
array[index][str2]++;
$( "#"+str1+"v" ).text(parseInt($( "#"+str1+"v" ).text())+1);
for(var x=1;x<=5;x++)
{
total+=parseInt(array[index][x]);
}
for(var x=1;x<=5;x++)
{
var percent=Math.round(100*array[index][x]/total);
if(x==1)
{$( "#"+str1+"-"+x+"p" ).css("width", percent+"%");
$( "#"+str1+"-"+x+"f" ).text(percent+"%");
}
else if(x==2 )
{$( "#"+str1+"-"+x+"p" ).css("width", percent+"%");
$( "#"+str1+"-"+x+"f" ).text(percent+"%");
}
else if(x==3 && $( "#"+str1+"-"+x ).text())
{$( "#"+str1+"-"+x+"p" ).css("width", percent+"%");
$( "#"+str1+"-"+x+"f" ).text(percent+"%");
}
else if(x==4 && $( "#"+str1+"-"+x ).text())
{$( "#"+str1+"-"+x+"p" ).css("width", percent+"%");
$( "#"+str1+"-"+x+"f" ).text(percent+"%");
}
else if($( "#"+str1+"-"+x ).text())
{$( "#"+str1+"-"+x+"p" ).css("width", percent+"%");
$( "#"+str1+"-"+x+"f" ).text(percent+"%");
}
if(x==str2)
{$( "#"+str1+"-"+x ).html('<i class="fa fa-check-square" style="color: #148f77;"></i>'+$( "#"+str1+"-"+x ).text());
$( "#"+str1+"-"+x+"p" ).parent(".progress-striped").addClass("active");
}
else
$( "#"+str1+"-"+x ).html($( "#"+str1+"-"+x ).text());
}
//setcookie
setCookie("cookque",str1,str2,365);
//send to database
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById(str1).innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","vote.php?question="+str1+"&response="+str2,true);
xmlhttp.send();
}

function showresult(str1,str2)
{
var total=0;
for(var x=0;x<=ulimit;x++)
{
if(array[x][0]==str1)
{
index=x;
break;
}
}
for(var x=1;x<=5;x++)
{
total+=parseInt(array[index][x]);
}
for(var x=1;x<=5;x++)
{
var percent=Math.round(100*array[index][x]/total);
if(x==1)
{$( "#"+str1+"-"+x+"p" ).css("width", percent+"%");
$( "#"+str1+"-"+x+"f" ).text(percent+"%");
}
else if(x==2 )
{$( "#"+str1+"-"+x+"p" ).css("width", percent+"%");
$( "#"+str1+"-"+x+"f" ).text(percent+"%");
}
else if(x==3 && $( "#"+str1+"-"+x ).text())
{$( "#"+str1+"-"+x+"p" ).css("width", percent+"%");
$( "#"+str1+"-"+x+"f" ).text(percent+"%");
}
else if(x==4 && $( "#"+str1+"-"+x ).text())
{$( "#"+str1+"-"+x+"p" ).css("width", percent+"%");
$( "#"+str1+"-"+x+"f" ).text(percent+"%");
}
else if($( "#"+str1+"-"+x ).text())
{$( "#"+str1+"-"+x+"p" ).css("width", percent+"%");
$( "#"+str1+"-"+x+"f" ).text(percent+"%");
}
if(x==str2)
{$( "#"+str1+"-"+x ).html('<i class="fa fa-check-square" style="color: #148f77;"></i>'+$( "#"+str1+"-"+x ).text());
$( "#"+str1+"-"+x+"p" ).parent(".progress-striped").addClass("active");
}
else
$( "#"+str1+"-"+x ).html($( "#"+str1+"-"+x ).text());
}
}
</script> 