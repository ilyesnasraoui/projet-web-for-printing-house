function controle() {
    var cin=document.getElementById("cin").value.length;
    var firstname=document.getElementById('prenom').value.length;
    var lastname=document.getElementById('nom').value.length;
    var telephone_type=document.getElementById('telephone').value;
    var telephone=document.getElementById('telephone').value.length;
    var license=document.getElementById('license').value.length;
    var i=0;
    var adresse=document.getElementById('adresse').value.length;
    /*var date=document.getElementById("birthday").value;

	var an=date.substring(0,4);
	var mois=date.substring(5,7);
	var jour=date.substring(8,9);
//----------------------------------------------------------
	jour=jour +date.charAt(9);

	var dd = new Date;
	var j=dd.getYear( );

	var numero=dd.getDate( ); 	
	var moiis=dd.getMonth( );
	var annee=1900+j;
	
	if(Number(an)<annee)
		document.getElementById('erreur').innerText= "Entrer une date valide!";
    else
    {
    	document.getElementById('erreur').innerText= "";
    	i++;
    }	

	if (Number(an)==annee&&Number(mois)<moiis+1) 
		document.getElementById('erreur').innerText= "Entrer une date valide!";
    else
    {
    	document.getElementById('erreur').innerText= "";
    	i++;
    }
      	
	if (Number(an)==annee&&Number(mois)==moiis+1&&Number(jour)<numero)
			document.getElementById('erreur').innerText= "Entrer une date valide!";
    else
    {
    	document.getElementById('erreur').innerText= "";
    	i++;
    }
      	

*/
    if(cin!=8)
        document.getElementById('erreur1').innerText= "Entrer un CIN valide!";
    else{
    	document.getElementById('erreur1').innerText= "";
    	i++;
    }

    
    if(firstname==0)
    	document.getElementById('erreur2').innerText="Ce champs est obligatoire!";
    else
    {
    	document.getElementById('erreur2').innerText= "";
    	i++;
    }


    if(lastname==0)
    {
        document.getElementById('erreur3').innerText= "Ce champs est obligatoire!";
    }else{
	    document.getElementById('erreur3').innerText= "";
	    i++;
    }
    
    if((typeof telephone_type != Number) && (telephone!=8))
    	document.getElementById('erreur4').innerText= "Entrer un numero de telephone valide!";
    else{
   		document.getElementById('erreur4').innerText= "";
	    i++;

    }
    if(telephone==0)
    	document.getElementById('erreur5').innerText="Ce champs est obligatoire!";
    else
    {
    	document.getElementById('erreur5').innerText= "";
    	i++;
    }
    if(adresse==0)
    	document.getElementById('erreur6').innerText="Ce champs est obligatoire!";
    else
    	{
    	document.getElementById('erreur6').innerText="";
		i++;
		}



    if(i==6)
    	return true;
    else 
    	return false;

}