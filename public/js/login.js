$(document).ready(function(){
    $("#frmLogin").on('submit', function(e){
        e.preventDefault();
        user=$("#user").val();
        psw=$("#psw").val();
        if (user != "") {
            if (psw != "") {
            
                $.ajax({
                    url: 'startLogin',
                    type: 'POST',
                    dataType: 'JSON',
                    data: $(this).serialize(),
                })
                .done(function(data) {
                    if (data.status) {
                        window.location="http://localhost/ProyectoComunitario/inicio/home";
                    }else{
                        Lobibox.notify('error', {
                        icon:false,
                        sound:false,    
                        msg: data.message
                        });
                    }
                
                })
                .fail(function(data) {
                    console.log(data);
                });    

            }else{
                Lobibox.notify('info', {
                    icon:false,
                    sound:false,    
                    msg: 'Password requerido'
                    });
            }
        }else{
            Lobibox.notify('info', {
                icon:false,
                sound:false,    
                msg: 'Usuario requerido'
                });
        }
        
    })
})