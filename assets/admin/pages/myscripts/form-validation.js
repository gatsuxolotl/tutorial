var FormValidation = function () {

    // basic validation
    var validacionformularionoticias = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation

            var form1 = $('#formulario_nueva_noticia');
            var error1 = $('.alert-danger', form1);
            var success1 = $('.alert-success', form1);

            form1.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                rules: {
                    titulo: {
                        minlength: 5,
                        required: true
                    },
                    contenido: {
                        minlength: 10,
                        required: true
                    },
                    fecha: {
                        required: true,
                    }
                },
                messages: {
                    titulo: {
                        minlength: "escribe minimo 5 caracteres",
                        required: "el titulo es obligatorio"
                    },
                    contenido: {
                        minlength: "escribe minimo 10 caracteres",
                        required: "el titulo es obligatorio"
                    },
                    fecha: {
                        required: "la fecha es obligatoria",
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success1.hide();
                    error1.show();
                    Metronic.scrollTo(error1, -200);
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                submitHandler: function (form) {
                    $.ajax({
                         url: $('#formulario_nueva_noticia').attr('action'),
                         type: 'post',
                         cache: false,
                         dataType: 'json',
                         data: $('#formulario_nueva_noticia').serialize(),
                         beforeSend: function () {
                             // body...
                             //alert("se estan enviando los datos");
                         },
                         error: function (jqXHR, status, error) {
                             // body...
                             alert("hubo un error"+error);
                         },
                         success: function (respuesta) {
                             // body...
                             alert("petcion exitosa");
                            if(respuesta.exito){
                                alert(respuesta.mensaje);
                                window.parent.location.reload();
                            }else{
                                alert(respuesta.mensaje);
                            }
                         }
                    });
                }
            });


    }

    return {
        //main function to initiate the module
        init: function () {

            validacionformularionoticias();

        }

    };

}();