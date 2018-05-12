var numerSlajdu=0;
function slajder()
{
	var i;
	var uchwyt=document.getElementsByClassName("slajd");
	for (var i = 0; i < uchwyt.length; i++) {
		uchwyt[i].style.display="none"
	}
	numerSlajdu++;
	if(numerSlajdu>uchwyt.length)
	{
		numerSlajdu=1;
	}
	uchwyt[numerSlajdu-1].style.display="block";
	setTimeout('slajder()', 4000);
}