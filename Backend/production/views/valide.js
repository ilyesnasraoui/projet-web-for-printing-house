function controle() {
    var cin=document.getElementById("cin").value.length;
    var firstname=document.getElementById('prenom').value.length;
    var lastname=document.getElementById('nom').value.length;
    var telephone_type=document.getElementById('telephone').value;
    var telephone=document.getElementById('telephone').value.length;
    var license=document.getElementById('license').value.length;
    var i=0;
    var adresse=document.getElementById('adresse').value.length;
    
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