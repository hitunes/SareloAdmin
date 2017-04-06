function payWithPaystack(customer_email, ref, amount){
    var handler = PaystackPop.setup({
      key: 'pk_test_0f42c2c591c37e67dcbe562532cb3e3b6e1fdf9b',
      email: customer_email,
      amount: amount * 100,
      ref: ref,
      metadata: {
         custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: "+2348012345678"
            }
         ]
      },
      callback: function(response){
          alert('success. transaction ref is ' + response.reference);
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }

function makeBooking(){
    $.get('/api/book').then(function(response) {

        payWithPaystack(response['customer_email'], response['ref'], response['amount']);
    })
}