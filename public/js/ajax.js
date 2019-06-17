$(function(){
      $('#ajaxSubmit').click(function(e){
               e.preventDefault();
               var url = $(this).attr('data-url');
          
               var user = $(this).attr('data-user');
               var message = $('#message').val();
               var nbrMessage = $('#post-reply').length;
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });


              $.ajax({
            url:url,
           data:{
             message : message,
             user: user,

           },
          method: 'GET',
           success:function(reponsePHP){
              $('#commentsContainer').last('.post-reply').append(reponsePHP).slideDown();
              $('#message').val('');
            },
           error:function(xhr, ajaxOptions, thrownError){

               console.log('Erreur de la transaction ajax')
           }
       })
            });
            });
