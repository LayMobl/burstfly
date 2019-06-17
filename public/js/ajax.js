$(function(){
    $('#ajaxSubmit').click(function(e){
        e.preventDefault();
        //Je récupère l'url
        var url = $(this).attr('data-url');
        //Je récupère l'utilisateur
        var user = $(this).attr('data-user');
        //Je récupère la valeur du message
        var message = $('#message').val();
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
                //J'ajoute le nouveau commentaire avec animation en fin de liste
              $('#commentsContainer').last('.post-reply').append(reponsePHP).slideDown();
                // Je vide le contenu du textarea
              $('#message').val('');
            },
           error:function(){
                console.log('Erreur de la transaction ajax')
           }
       })
    });
});
