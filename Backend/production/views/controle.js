function notnumber()
{
	var a=document.getElementById('prod').value;
	if (a!="")
	if (a[0]!=a[0].toUpperCase())
{
		console.log('First letter is not toUpperCase');
	return false;
}
	else
		return true;


}