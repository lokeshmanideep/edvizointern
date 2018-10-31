function filter() {

	var amountField = document.getElementById('amount');
	var rad=document.radioselection.stattype;
	for(var i = 0; i < rad; i++)
   {
      if(rad[i].checked)
      {
         amountField.textContent=rad[i].value;
      }
   }

	
}
