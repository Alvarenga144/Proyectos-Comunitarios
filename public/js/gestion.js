jQuery(function () {

    $('#formularioUsuario').validetta({
        realTime: true,
        onValid: function (e) {
            e.preventDefault()
            swal.fire({
                title: 'Esta Seguro de Enviar esta Informacion?',
                icon: 'question',
                text: 'No podra ser modificado',
                confirmButtonText: 'si',
                showDenyButton: true,
            }).then((respuesta) => {
                if (respuesta.isConfirmed) {
                    swal.fire({
                        title: 'La informacion se guardo con exito',
                        icon: 'success',
                    })
                    $.ajax({
                        type: $('#formularioUsuario').attr('method'),
                        url: $('#formularioUsuario').attr('action'),
                        data: $('#formularioUsuario').serialize(),
                        success: function (response) {
                            if (response > 0) {
                                $('#formularioUsuario')[0].reset()
                            }
                        },
                        error: function () {
                            console.log('Eror')
                        }
                    })

                } else if (result.isDenied) {
                    swal.fire(
                        "Ha cancelado la operacion"
                    )

                }
            })
        }
    })

    //con este evento accedemos al metodo 'modificar' en el controlador gestionUsuario
    $('.btnEditar').on('click', function () {
        id = $(this).attr('data-id');
        $.ajax({
            url: 'modificar',
            type: 'POST',
            dataType: 'JSON',
            data: { dataId: id },
        })
            .done(function (data) {
                $("#id").val(data.datos['id_Usuario']);
                $("#username").val(data.datos['nombre_User']);
                $("#fechaNac").val(data.datos['fecha_Nac']);
                $("#correo").val(data.datos['correo']);
                $("#contra").val(data.datos['password_user']);
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: data.msg,
                    showConfirmButton: false,
                    timer: 1500
                })
                console.log(data);
            })
            .fail(function (data) {
                console.log(data);
            });
    })

    //modificar
    $('#btnModificar').on('click', function (e) {
        e.preventDefault()
        $.ajax({
            type: $('#frmEdit').attr('method'),
            url: $('#frmEdit').attr('action'),
            data: $('#frmEdit').serialize(),
            success: function (response) {
                //console.log(response)
                if (response > 0) {
                    swal.fire({
                        title: 'Modificado!',
                        text: 'Su archivo ha sido modificado.',
                        icon: 'success'
                    })
                    $('#frmEdit')[0].reset()
                }
            },
            error: function () {
                console.log('Eror')
            }
        })
    })

})

//eliminar usuarios
const deleteUsuario = id => {
    //alert(id);
    var boton = $(this);

    swal.fire({
        title: '¿Está seguro?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'si, borralo!'
    }).then((respuesta) => {
        if (respuesta.isConfirmed) {
            swal.fire({
                title: 'Eliminado!',
                text: 'Su archivo ha sido eliminado.',
                icon: 'success'
            })
            $.ajax({
                url: `${url}GestionUsuario/eliminar?id_Usuario=${id}`,
                method: 'GET',
                success: res => {
                    console.log(res)
                    if (res > 0) {
                        // window.location.href = 'http://localhost:80/ProyectoComunitario/gestion/tablaUsuario';
                        //alert('Usuario Eliminado');
                        $('body').click(() => {
                            boton.closest('tr').remove();
                        })
                    } else {
                        alert('Error al eliminar Usuario');
                    }

                }

            });

        } else if (result.isDenied) {
            swal.fire("Ha cancelado la operacion")

        }
    }

    );

}