function payWithPaystack(order_id){
    $.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.post('/transaction', {'order_id': order_id}).then(function(response){
        
        meta = {
            'transaction_id': response.id,
            'applicant_id': order_id
        }
        handlePayment(response.user.email, response.amount, response.reference, meta);
    })
  }
  function handlePayment(email, amount, ref, meta){
     
    var handler = PaystackPop.setup({
      key: 'pk_test_f0dfa9ed3fd01bbbf59ede20a02695115871bb48',
      email: email,
      amount: amount * 100,
      ref: ref,
      metadata: {
      },
      callback: function(response){
        //   if(response.response)
            updateOnSuccess(meta);
      },
      onClose: function(){
        //   alert('window closed');
      }
    });
    handler.openIframe();
  }
  function updateOnSuccess(data){
           $.ajaxSetup({
                        headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                    });
            var data = {
                'status': 'success',
            }
            $.post('/transaction/'+meta.transaction_id+'/edit', data).then(function(response){
                window.location = '/thankyou/'+meta.applicant_id;
            });
  }