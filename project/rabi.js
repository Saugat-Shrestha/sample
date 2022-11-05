function first()
{
    document.getElementById("pic").src="rabi1.jpg";

}
function second()
{
    document.getElementById("pic").src="rabi2.jpg";

}
function third()
{
    document.getElementById("pic").src="rabi3.jpg";

}
setInterval(first,2000);
setInterval(second,4000);
setInterval(third,6000);