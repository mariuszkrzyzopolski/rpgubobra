function zegarek()
{
var minuty=new Date();
var godziny=new Date();
var sekundy=new Date();
sekundy=sekundy.getSeconds();
minuty=minuty.getMinutes();
godziny=godziny.getHours();
if(sekundy<10)
{
	sekundy="0"+sekundy;
}
if(minuty<10)
{
	minuty="0"+minuty;
}
if(godziny<10)
{
	godziny="0"+godziny;
}
document.getElementById("zegar").innerHTML=godziny+":"+minuty+":"+sekundy;
/*document.getElementById("zegar").style.margin="100px 0px 0px 20px";
document.getElementById("zegar").style.width="100px";
document.getElementById("zegar").style.height="100px";
document.getElementById("zegar").style.float="left";
document.getElementById("zegar").style.fontSize="xx-large";
*/
setTimeout("zegarek()",1000);
}


