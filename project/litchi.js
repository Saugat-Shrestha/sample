function first()
{
    document.getElementById("pic").src="litchi1.jpg";

}
function second()
{
    document.getElementById("pic").src="litchi2.jpg";

}
function third()
{
    document.getElementById("pic").src="litchi3.jpg";

}
setInterval(first,2000);
setInterval(second,4000);
setInterval(third,6000);