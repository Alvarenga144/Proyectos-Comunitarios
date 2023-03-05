jQuery(function () {

    $('#frmEmpleado').validetta({
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
                        type: $('#frmEmpleado').attr('method'),
                        url: $('#frmEmpleado').attr('action'),
                        data: $('#frmEmpleado').serialize(),
                        success: function (response) {
                            if (response > 0) {
                                $('#frmEmpleado')[0].reset()
                            }
                        },
                        error: function () {
                            console.log('Eror')
                        }
                    })

                } else if (result.isDenied) {
                    swal.fire(
                        "Ha cancelado la operación"
                    )

                }
            })
        }
    })

    //con este evento accedemos al metodo 'modificar' en el controlador gestionUsuario
    $('.btnEditar').on('click', function () {
        id = $(this).attr('data-id');
        $.ajax({
            url: 'modificarE',
            type: 'POST',
            dataType: 'JSON',
            data: { dataId: id },
        })
            .done(function (data) {
                $("#id_Emp").val(data.datos['id_Responsable']);
                $("#username").val(data.datos['nombre_Responsable']);
                $("#fechaNac").val(data.datos['fecha_nacimiento']);
                $("#correo").val(data.datos['correo_Responsable']);
                $("#contra").val(data.datos['password_respon']);
                $("#cargo").val(data.datos['cargo']);
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

//eliminar empleado
const deleteEmpleado = id => {
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
                url: `${url}empleado/eliminarE?id_Responsable=${id}`,
                method: 'GET',
                success: res => {
                    console.log(res)
                    if (res > 0) {
                        $('body').click(() => {
                            boton.closest('tr').remove();
                        })
                    } else {
                        alert('Error al eliminar Empleado');
                    }

                }

            });

        } else if (result.isDenied) {
            swal.fire("Ha cancelado la operacion")

        }
    }

    );

}