jQuery(function () {
    //alert(1);
    // Seleccione los departamentos y activa los municipios de ese depto
    $('#dep').change(function () {
        var id = $(this).val();
        $.ajax({
            type: "GET",
            url: "getUbicaciones",
            datatype: 'json',
            cache: false,
            data: { id: id },

            success: function (data) {
                var datos = JSON.parse(data);
                console.log(datos);
                $("#municipios").empty();
                $.each(datos, function (i, item) {
                    $("#municipios").append('<option value=' + item.id_Municipio + '>' + item.nombre_Municipio + '</option>');
                });
            },
            error: function () {
            }
        });
    });

    //Enviar el formulario y agregar
    $('#frmNewAcont').validetta({
        realTime: true,
        onValid: function (e) {
            e.preventDefault()
            Swal.fire({
                title: 'Esta Seguro de Enviar esta Informacion?',
                icon: 'question',
                text: 'No podrá ser eliminada',
                confirmButtonText: 'si',
                showDenyButton: true,
            }).then((respuesta) => {
                if (respuesta.isConfirmed) {
                    Swal.fire({
                        title: 'La información se guardó con exito',
                        icon: 'success',
                    })
                    $.ajax({
                        type: $('#frmNewAcont').attr('method'),
                        url: $('#frmNewAcont').attr('action'),
                        data: $('#frmNewAcont').serialize(),
                        success: function (response) {
                            if (response > 0) {
                                $('#frmNewAcont')[0].reset()
                            }
                        },
                        error: function () {
                            console.log('Error')
                        }
                    });
                } else if (result.isDenied) {
                    Swal.fire("Se ha cancelado la operación)")
                }
            })
        }
    })

    //Modificar 
    $('#btnModAcont').on('click', function (e) {
        //alert(1)
        e.preventDefault()
        $.ajax({
            type: $("#frmEditAcont").attr('method'),
            url: $("#frmEditAcont").attr('action'),
            data: $("#frmEditAcont").serialize(),
            success: function (response) {
                //console.log(response)
                if (response > 0) {
                    alert('Producto Modificado con exito')
                    window.location.href = 'http://localhost/ProyectoComunitario/gestionAcontecimiento/acontecimientos';
                }
            },
            error: function () {
                console.log('error')
            }
        });
    })

    //Eliminar acont
    $('body').on('click', '#btnDeleteAcont', function (e) {
        e.preventDefault()
        Swal.fire({
            title: 'Estas Seguro de eliminar?',
            text: "No podrás revertir esta acción!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Eliminar!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Eliminado!',
                    'Tu archivo se ha eliminado',
                    'Completado'
                )
                var boton = $(this)
                $.ajax({
                    type: 'GET',
                    url: boton.attr('href'),
                    success: function (response) {
                        //console.log(response)
                        if (response > 0) {
                            //alert('Docente ha sido eliminado')
                            boton.closest('tr').remove()
                            //window.location.href = 'http://localhost/S7SMySQL-Class/producto/index';
                        }
                    },
                    error: function () {
                        console.log('error')
                    }
                });
            }
        })

    })

    $('#frmMunicipio').validetta({
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
                    $.ajax({
                        type: $('#frmMunicipio').attr('method'),
                        url: $('#frmMunicipio').attr('action'),
                        data: $('#frmMunicipio').serialize(),
                        success: function (response) {
                            if (response > 0) {
                                $('#frmMunicipio')[0].reset()
                                window.location.href = 'http://localhost/ProyectoComunitario/Municipio/TablaMunicipios';
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

    $('#btnModificarM').on('click', function (e) {
        e.preventDefault()
        swal.fire({
            title: 'Esta Seguro de Enviar esta Informacion?',
            icon: 'question',
            text: 'No podra ser modificado',
            confirmButtonText: 'si',
            showDenyButton: true,
        }).then((respuesta) => {
            if (respuesta.isConfirmed) {
                $.ajax({
                    type: $('#frmEditM').attr('method'),
                    url: $('#frmEditM').attr('action'),
                    data: $('#frmEditM').serialize(),
                    success: function (response) {
                        if (response > 0) {
                            $('#frmEditM')[0].reset()
                            window.location.href = 'http://localhost/ProyectoComunitario/Municipio/TablaMunicipios';
                        }
                    },
                    error: function () {
                        console.log('Eror')
                    }
                });

            } else if (result.isDenied) {
                swal.fire(
                    "Ha cancelado la operación"
                )
            }
        })
    })

})

//boton para elimar materias
$('body').on('click', '#EliminarM', function (e) {
    e.preventDefault()
    var boton = $(this)
    swal.fire({
        title: 'Está seguro de eliminar esta información',
        icon: 'question',
        text: 'No podrá recuperar la información',
        confirmButtonText: 'Sí, borralo',
        showDenyButton: true,
    }).then((respuesta) => {
        if (respuesta.isConfirmed) {
            swal.fire({
                title: "Se borro con exito",
                icon: "success",
            })
            $.ajax({
                type: 'GET',
                url: boton.attr('href'),
                success: function (response) {
                    if (response) {
                        window.location.href = 'http://localhost/ProyectoComunitario/Municipio/TablaMunicipios';
                        boton.closest('tr').remove()
                    }
                },
                error: function () {
                    console.log('Error')
                }
            });
        } else if (result.isDenied) {
            swal.fire("Ha cancelado la operación")
        }
    })
})