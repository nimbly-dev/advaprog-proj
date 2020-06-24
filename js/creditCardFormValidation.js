function checkIfSelectionIsNull(){
  var checkout = document.getElementById('requestCheckoutButton');
  var typeOfCard = document.getElementById("typeOfCard").value;

  if(typeOfCard == "null"){
    checkout.disabled = true;
  }
  else {
    checkout.disabled = false;
  }
}
