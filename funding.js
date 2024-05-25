function redirectToPage() {
    var selectedOption = document.getElementById("paymentMethod").value;
    switch(selectedOption) {
        case 'paypal':
            window.location.href = 'paypal.html';
            break;
        case 'creditCard':
            window.location.href = 'card.html';
            break;
        default:
            alert("Please select a payment method.");
            break;
    }
}