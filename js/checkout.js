function onSelectCreditCard(){
   var selectionOfPayment = document.getElementById("orderPaymentSelect").value;
   var creditCardForm = document.getElementById("creditcard-form");
   var checkout = document.getElementById("requestCheckoutButton");
    if(selectionOfPayment == "Credit Card"){
      creditCardForm.style.visibility = "visible";
    }
    else {
      creditCardForm.style.visibility = "hidden";
    }
}

function checkIfSelectionIsNull(){
  var checkout = document.getElementById('requestCheckoutButton');
  var selectionOfPayment = document.getElementById("orderPaymentSelect").value;

  if(checkPaymentMethod() != true || checkTypeOfCard() != true){
    checkout.disabled = false;
  }
  else {
    checkout.disabled = true;
  }
}

function checkPaymentMethod(){
   var selectionOfPayment = document.getElementById("orderPaymentSelect").value;
   var checkout = document.getElementById('requestCheckoutButton');
   // If Null is true
   if(selectionOfPayment == "null"){
     return true;
   }
   else{
     return false;
   }
}

function checkTypeOfCard(){
   var typeOfCard = document.getElementById("typeOfCard").value;
   var checkout = document.getElementById('requestCheckoutButton');
   // If Null is true
   if(typeOfCard == "null"){
     return true;
   }else{
     return false;
   }
}
