jQuery(function(){
    
    $('#frmNuevoAcontecimientos').validetta({ 
        realTime: true,
        onValid: function (e) { 
            e.preventDefault()
            swal.fire({
                title:'Esta Seguro de Enviar esta Informacion?',
                icon:'question',
                text:'No podrá ser eliminada',
                confirmButtonText:'si',
                showDenyButton: true,
            }).then ((respuesta)=>{
                if(respuesta.isConfirmed){
                    swal.fire({
                        title: 'La información se guardó con exito',
                        icon: 'success',
                    })
                    $.$.ajax({
                        type: $('#frmNuevoAcontecimientos').attr('method'),
                        url: $('#frmNuevoAcontecimientos').attr('action'),
                        data: $('#frmNuevoAcontecimientos').serialize(),
                        success: function (response) {
                            if(response>0){
                                $('')[0].reset()
                            }
                        },
                        error: function(){
                            console.log('Error')
                        }
                    });
                } else if(result.isDenied){
                    swal.fire("Se ha cancelado la operación)")
                }
            })
        }
    })

})