$(document).ready(function(){
   
    /* Boton guardar info de banner */
    $('#btn-guardar-banner').click(function(){
       
        var titulo = $("#titulo-banner").val();
        var texto = $("#texto-banner").val();
        var nombre_imagen = $("#banner").val().split('\\').pop();
        
        var extension = nombre_imagen.split('.').pop();
        //validar que sean solo archivos imagen
        var validos = ["jpg", "png", "gif","jpeg"];
        if(titulo.length == 0){
            alert("Especifique un titulo");
            return false;
        }else if(texto.length == 0){
            alert("Especifique un texto");
            return false;
        }
        
        
    });
    
       $('#btn-update-banner').click(function(){
       
        var titulo = $("#titulo-banner").val();
        var texto = $("#texto-banner").val();
        var nombre_imagen = $("#banner").val().split('\\').pop();
        
        var extension = nombre_imagen.split('.').pop();
        //validar que sean solo archivos imagen
        
        var validos = ["jpg", "png", "gif","jpeg"];
        if(nombre_imagen != ""){            
            if($.inArray(extension, validos) == -1){
                alert("Formato inválido de imagen, especifique otra imagen");
                return false;
            }
        }
        if(titulo.length == 0){
            alert("Especifique un titulo");
            return false;
        }else if(texto.length == 0){
            alert("Especifique un texto");
            return false;
        }
        
        
    });
    
    
    /* Boton guardar nueva categoria */
    $('#btn-save-new-category').click(function(){
       
        var name = $("#category-name").val();
        var title = $("#category-title").val();
        var description = $("#category-description").val();
        var image_name = $("#image_category").val().split('\\').pop();
        var extension = image_name.split('.').pop();
        var active = $('#category-state').val(); 
        
        //validar que sean solo archivos imagen
        var validos = ["jpg", "png", "gif","jpeg"];
        if(image_name != ""){            
            if($.inArray(extension, validos) == -1){
                alert("Formato inválido de imagen, especifique otra imagen");
                return false;
            }
        }else{
            image_name = 'default.jpg';
        }
        if(title.length == 0){
            alert("Especifique un titulo");
            return false;
        }else if(name.length == 0){
            alert("Especifique un nombre");
            return false;
        }else if(description.length == 0){
            alert("Especifique una descripcion");
            return false;
        }
        
       
    });
    /* Fin guardar categoria */
    
    /* Boton Actualizar nueva categoria */
    $('#btn-update-new-category').click(function(){
        var category_id = $("#category-id").val();
        var name = $("#category-name").val();
        var title = $("#category-title").val();
        var description = $("#category-description").val();
        var image_name = $("#image_category").val().split('\\').pop();
        var extension = image_name.split('.').pop();
        var active = $('#category-state').val(); 
        //alert(name+title+description+image_name+extension+active)
        //alert("VAcio: "+image_name)
        //validar que sean solo archivos imagen
        var validos = ["jpg", "png", "gif","jpeg"];
        if(image_name != ""){            
            if($.inArray(extension, validos) == -1){
                alert("Formato inválido de imagen, especifique otra imagen");
                return false;
            }
        }else{
            image_name = 'default.jpg';
        }
        if(title.length == 0){
            alert("Especifique un titulo");
            return false;
        }else if(name.length == 0){
            alert("Especifique un nombre");
            return false;
        }else if(description.length == 0){
            alert("Especifique una descripcion");
            return false;
        }        
       
    });
    /* Fin Actualizar categoria */
    
    
    /* Boton guardar nuevo producto */
    $('#btn-save-new-product').click(function(){
       
        var title = $("#product-title").val();
        var description = $("#product-description").val();
        var product_category_id = $('#product-category-id :selected').val();
        var product_category_name = $('#product-category-id :selected').text();
        
        var image_name = $("#product_img").val().split('\\').pop();
        var extension = image_name.split('.').pop();
        var active = $('#product-state').val(); 
        //alert(title+description+image_name+extension+active+product_category_id)
        //validar que sean solo archivos imagen
        var validos = ["jpg", "png", "gif","jpeg"];
        if(image_name != ""){            
            if($.inArray(extension, validos) == -1){
                alert("Formato inválido de imagen, especifique otra imagen");
                return false;
            }
        }else{
            image_name = 'default.jpg';
        }
        if(title.length == 0){
            alert("Especifique un titulo");
            return false;
        }else if(description.length == 0){
            alert("Especifique una descripcion");
            return false;
        }
        
               
    });
    /* Fin guardar producto*/
    
    /* Boton actualizar producto */
    $('#btn-update-new-product').click(function(){
        var product_id = $("#product-id").val();
        var title = $("#product-title").val();
        var description = $("#product-description").val();
        var product_category_id = $('#product-category-id :selected').val();
        var product_category_name = $('#product-category-id :selected').text();
        
        var image_name = $("#product_img").val().split('\\').pop();
        var extension = image_name.split('.').pop();
        var active = $('#product-state').val(); 
        //alert(title+description+image_name+extension+active+product_category_id)
        //validar que sean solo archivos imagen
        var validos = ["jpg", "png", "gif","jpeg"];
        if(image_name != ""){            
            if($.inArray(extension, validos) == -1){
                alert("Formato inválido de imagen, especifique otra imagen");
                return false;
            }
        }else{
            image_name = 'default.jpg';
        } 
        if(title.length == 0){
            alert("Especifique un titulo");
            return false;
        }else if(description.length == 0){
            alert("Especifique una descripcion");
            return false;
        }
        
               
    });
    /* Fin actualizar producto*/
    
           
    
    /* Guardar novedades */
    $('#btn-guardar-novedades').click(function(){
       
        var titulo = $("#titulo-novedades").val();
        var texto = $("#texto-novedades").val();
        
        if(titulo.length == 0){
            alert("Especifique un titulo");
        }else if(texto.length == 0){
            alert("Especifique un texto");
        }else{
                
            $.ajax({
               type: "POST",
               url: "./actions/save-novedades.php",
               data: {
                   titulo:titulo,
                   texto:texto
                  
               }
               }).done(function() {
                   
                   alert("Guardado");
                   window.location = "./banner-administrator.php";
               });
        }
    });
    /* Fin gaurdar novedades */
  
    
      
    
    /* Boton activa usuario */
    $("#activate-user-acount").click(function(){
        var ci = $("#ci-update").val();
        
        $.ajax({
                type: "POST",
                url: "./actions/activate-user.php",
                data: {ci:ci},
                success: function(data){
                    
                    window.location = "./users.php";
                    
              }
        });
    });
    
    
    /* Aplicar cambios user edit data */
    $("#btn-update-user-data").click(function(){

            var ci = $("#ci-update").val();
            var nombre = $("#nombre-update").val();
            var tipo_de_usuario = $("#tipo_de_usuario").val();
            var perfil = $("#perfil_de_usuario").val();

            //var password = $("#password-update").val();
            //var password2 = $("#password-update-re").val();
            
                    $.ajax({
                            type: "POST",
                            url: "./actions/update-user-data-action.php",
                            data: {ci:ci,nombre:nombre,tipo_de_usuario:tipo_de_usuario,perfil:perfil},
                            success: function(){
                                $("#modalUserData").modal("hide");
                                url = "./users.php";
                                $(location).attr('href',url);
                          }
                    });
               
            
        });  
    
    
    /* Administracion de Usuarios */
    $('#btn-user-update').click(function(){
        //alert("procesado...")
        //var rows = $("#tipoLocal").val();
        var ci = $("#input-ci").val()
        if(!ci){
            alert("Vacio");
        }else{
    
            var $loading = $('#visualizar-usuario').html("<div class='progress progress-striped active'><div class='bar' style='width: 100%;'>Cargando.. </div></div>");

             $.ajax({
                type: "POST",
                url: "./actions/user-update.php",
                data: {
                    ci:ci

                }
                }).done(function( data ) {
                    if(data == false){
                        data = "<div class='alert alert-warning'>No se encontro ningun registro..</div>";
                    }
                    $loading.html(data);

             });
        }
    })
    /* Fin administracion de usuarios */
    
    /* Mostrar datos de consulta */
    $('#btn-consultar').click(function(){
        //alert("procesado...")
        //var rows = $("#tipoLocal").val();
        var ci = $("#input-ci").val()
        if( !(ci)){
            alert("Ingrese un numero de cedula valido")
            exit();

        }else{
    
            var $loading = $('#visualizar-consulta').html("<div class='progress progress-striped active'><div class='bar' style='width: 100%;'>Cargando.. </div></div>");

             $.ajax({
                type: "POST",
                url: "/admin/actions/listaConsulta.php",
                
                data: {
                    ci:ci

                }
                }).done(function( data ) {
                    if(data == false){
                        data = "<div class='alert alert-warning'>No se encontro ningun registro..</div>";
                    }
                    $loading.html(data);

             });
        }
    })
    
    
    
    
    /**** Mensajes ****/
    $("#msg").delay(3000).hide("fade",2000)
   //$("#error-panel").delay(4000).hide("fade",3000)
    
   
    
    /******************/
    
    $("#btn-edit-user-data").click(function(){
            var ci = $("#ci-info").val();
            
            var numeroDeCasa = $("#numero-de-la-casa").val();
            //var barrio = $("#nombre-del-barrio").attr("name").val();
            var barrio = $('select[name=nombre-del-barrio] option:selected').attr('name') 
            
            var ciudad = $('select[name=nombre-de-la-ciudad] option:selected').attr('name') 
           
            var calle = $("#nombre-de-la-calle").val();
            var localidad = $('select[name=nombre-de-localidad] option:selected').attr('name') 
            var celular1 = $("#celular-1").val();
            var celular2 = $("#celular-2").val();
            var lineaBaja1 = $("#linea-baja-1").val();
            var lineaBaja2 = $("#linea-baja-2").val();
            var email = $("#e-mail").val();
            $.ajax({
                    type: "POST",
                    url: "./actions/edit-user-data-action.php",
                    data: {ci:ci,numeroDeCasa:numeroDeCasa,barrio:barrio,ciudad:ciudad,calle:calle,localidad:localidad,celular1:celular1,celular2:celular2,lineaBaja1:lineaBaja1,lineaBaja2:lineaBaja2,email:email},
                    success: function(){
                        $("#modalUserData").modal("hide");
                        url = "./index.php";
                        $(location).attr('href',url);
                  }
            });
            
            
        });  
        
});


 /* Boton activar Categoria */
function btn_active_category(category_id){
    var active = 0;
    var activate_label = $('#activate_'+category_id).val();

    if(activate_label == "Activar"){
        //activa una categoria
        $('#activate_'+category_id).val('Desactivar');
        active = 1;
    }else{
        //desactiva una categoria
        $('#activate_'+category_id).val('Activar');
        active = 0;
    }
    //actualiza la base de datos
    $.ajax({
            type: "POST",
            url: "./actions/update-category-state.php",
            data: {
                category_id:category_id,
                active:active
            },
            success: function(){
               var msg = "";
               msg += "<div id='msg-success' class='alert alert-success'>"+(activate_label == 'Activar' ? 'Activado':'Desactivado')+"</div>";
               $('#msg').html(msg).hide().slideDown('fast');
               $('#msg').delay(1000).slideUp('fast',function(){
                   //$('#msg-success').remove()
               });
               
          }
    });
    
}

function btn_active_category_electromedicina(category_id){
    var active = 0;
    var activate_label = $('#activate_'+category_id).val();

    if(activate_label == "Activar"){
        //activa una categoria
        $('#activate_'+category_id).val('Desactivar');
        active = 1;
    }else{
        //desactiva una categoria
        $('#activate_'+category_id).val('Activar');
        active = 0;
    }
    //actualiza la base de datos
    $.ajax({
            type: "POST",
            url: "./actions/update-category-electromedicina-state.php",
            data: {
                category_id:category_id,
                active:active
            },
            success: function(){
               var msg = "";
               msg += "<div id='msg-success' class='alert alert-success'>"+(activate_label == 'Activar' ? 'Activado':'Desactivado')+"</div>";
               $('#msg').html(msg).hide().slideDown('fast');
               $('#msg').delay(1000).slideUp('fast',function(){
                   //$('#msg-success').remove()
               });
               
          }
    });
    
}


 /* Boton activar producto */
function btn_active_product(product_id){
    
    var active = 0;
    var activate_label = $('#activate_'+product_id).val();

    if(activate_label == "Activar"){
        //activa una categoria
        $('#activate_'+product_id).val('Desactivar');
        active = 1;
    }else{
        //desactiva una categoria
        $('#activate_'+product_id).val('Activar');
        active = 0;
    }
    //actualiza la base de datos
    $.ajax({
            type: "POST",
            url: "./actions/update-product-state.php",
            data: {
                product_id:product_id,
                active:active
            },
            success: function(data){
                var msg = "";
                if(data == 0){
                    
                    msg += "<div id='msg-success' class='alert alert-success'>"+(activate_label == 'Activar' ? 'Activado':'Desactivado')+"</div>";
                }else{
                    msg += "<div id='msg-success' class='alert alert-danger'>Ocurrio un error!</div>";
                
                }   
              
              
               $('#msg').html(msg).hide().slideDown('fast');
               $('#msg').delay(1000).slideUp('fast',function(){
                   //$('#msg-success').remove()
               });
               
          }
    });
}


/* Boton activar banner */
function btn_active_banner_electromedicina(banner_id){
    
    var active = 0;
    var activate_label = $('#activate_banner_electromedicina'+banner_id).val();

    if(activate_label == "Activar"){
        //activa una categoria
        $('#activate_banner_electromedicina'+banner_id).val('Desactivar');
        active = 1;
    }else{
        //desactiva una categoria
        $('#activate_banner_electromedicina'+banner_id).val('Activar');
        active = 0;
    }
    //actualiza la base de datos
    $.ajax({
            type: "POST",
            url: "./actions/update-banner-state.php",
            data: {
                banner_id:banner_id,
                active:active
            },
            success: function(){
                var msg = "";
                  
                    msg += "<div id='msg-success' class='alert alert-success'>"+(activate_label == 'Activar' ? 'Activado':'Desactivado')+"</div>";
                          
               $('#msg').html(msg).hide().slideDown('fast');
               $('#msg').delay(1000).slideUp('fast',function(){
                   //$('#msg-success').remove()
               });
               
          }
    });
}


/* Boton activar banner telecomunicaciones */
function btn_active_banner_telecomunicaciones(banner_id){
    
    var active = 0;
    var activate_label = $('#activate_banner_telecomunicaciones'+banner_id).val();

    if(activate_label == "Activar"){
        //activa una categoria
        $('#activate_banner_telecomunicaciones'+banner_id).val('Desactivar');
        active = 1;
    }else{
        //desactiva una categoria
        $('#activate_banner_telecomunicaciones'+banner_id).val('Activar');
        active = 0;
    }
    //actualiza la base de datos
    $.ajax({
            type: "POST",
            url: "./actions/update-banner-telecomunicaciones-state.php",
            data: {
                banner_id:banner_id,
                active:active
            },
            success: function(){
                var msg = "";
                  
                    msg += "<div id='msg-success' class='alert alert-success'>"+(activate_label == 'Activar' ? 'Activado':'Desactivado')+"</div>";
                          
               $('#msg').html(msg).hide().slideDown('fast');
               $('#msg').delay(1000).slideUp('fast',function(){
                   //$('#msg-success').remove()
               });
               
          }
    });
}


/* Boton activar producto */
function btn_active_product_electromedicina(product_id){
    
    var active = 0;
    var activate_label = $('#activate_'+product_id).val();

    if(activate_label == "Activar"){
        //activa una categoria
        $('#activate_'+product_id).val('Desactivar');
        active = 1;
    }else{
        //desactiva una categoria
        $('#activate_'+product_id).val('Activar');
        active = 0;
    }
    //actualiza la base de datos
    $.ajax({
            type: "POST",
            url: "./actions/update-product-electromedicina-state.php",
            data: {
                product_id:product_id,
                active:active
            },
            success: function(){
                var msg = "";
                msg += "<div id='msg-success' class='alert alert-success'>"+(activate_label == 'Activar' ? 'Activado':'Desactivado')+"</div>";
                             
              
               $('#msg').html(msg).hide().slideDown('fast');
               $('#msg').delay(1000).slideUp('fast',function(){
                   //$('#msg-success').remove()
               });
               
          }
    });
}

function option_active_hot_telecomunicaciones(product_id){
  
        var active = 0;
        var activate_label = $('#activate_hot_'+product_id).is(':checked');

        if(activate_label){
            //activa una categoria
            var hot = "Activar";
            active = 1;
        }else{
            //desactiva una categoria
            var hot = "Desactivar";
            active = 0;
        }
        
        $.ajax({
            type: "POST",
            url: "./actions/active-product-hot-telecomunicaciones-state.php",
            data: {
                product_id:product_id,
                active:active
            },
            success: function(){
                    var msg = "";
                    msg += "<div id='msg-success' class='alert alert-success'>"+(hot == 'Activar' ? 'Activado':'Desactivado')+"</div>";
                    $('#msg').html(msg).hide().slideDown('fast');
                    $('#msg').delay(1000).slideUp('fast',function(){
                        //$('#msg-success').remove()
                    });
        
            }
        });
}

function option_active_hot_electromedicina(product_id){
  
        var active = 0;
        var activate_label = $('#activate_hot_'+product_id).is(':checked');

        if(activate_label){
            //activa una categoria
            var hot = "Activar";
            active = 1;
        }else{
            //desactiva una categoria
            var hot = "Desactivar";
            active = 0;
        }
        
        $.ajax({
            type: "POST",
            url: "./actions/active-product-hot-electromedicina-state.php",
            data: {
                product_id:product_id,
                active:active
            },
            success: function(){
                    var msg = "";
                    msg += "<div id='msg-success' class='alert alert-success'>"+(hot == 'Activar' ? 'Activado':'Desactivado')+"</div>";
                    $('#msg').html(msg).hide().slideDown('fast');
                    $('#msg').delay(1000).slideUp('fast',function(){
                        //$('#msg-success').remove()
                    });
        
            }
        });
}

function btn_delete_category(category_id){

    $.ajax({
            type: "POST",
            url: "./actions/category-delete-action.php",
            data: {
                category_id:category_id
            },
            success: function(){
               //$('#category_id_'+category_id).slideUp('slow');
               $('#category_id_'+category_id).hide(500, function () {
                        $('#category_id_'+category_id).remove();
                });
                
                var msg = "<div id='msg-success' class='alert alert-success'>Eliminado exito!</div>";
                $('#msg').html(msg).hide().slideDown('fast');
                $('#msg').delay(1000).slideUp('fast',function(){
                    //$('#msg-success').remove()
                });
             
          }
    });
}

function btn_delete_category_electromedicina(category_id){

    $.ajax({
            type: "POST",
            url: "./actions/category-electromedicina-delete-action.php",
            data: {
                category_id:category_id
            },
            success: function(){
               //$('#category_id_'+category_id).slideUp('slow');
               $('#category_id_'+category_id).hide(500, function () {
                        $('#category_id_'+category_id).remove();
                });
                
                var msg = "<div id='msg-success' class='alert alert-success'>Eliminado exito!</div>";
                $('#msg').html(msg).hide().slideDown('fast');
                $('#msg').delay(1000).slideUp('fast',function(){
                    //$('#msg-success').remove()
                });
             
          }
    });
}

function btn_delete_product(product_id){

    $.ajax({
            type: "POST",
            url: "./actions/product-delete-action.php",
            data: {
                product_id:product_id
            },
            success: function(){
               //$('#category_id_'+category_id).slideUp('slow');
               $('#product_id_'+product_id).hide(500, function () {
                        $('#product_id_'+product_id).remove();
                });
                
                var msg = "<div id='msg-success' class='alert alert-success'>Eliminado exito!</div>";
                $('#msg').html(msg).hide().slideDown('fast');
                $('#msg').delay(1000).slideUp('fast',function(){
                    //$('#msg-success').remove()
                });
             
          }
    });
}

function btn_delete_product_electromedicina(product_id){

    $.ajax({
            type: "POST",
            url: "./actions/product-electromedicina-delete-action.php",
            data: {
                product_id:product_id
            },
            success: function(){
               //$('#category_id_'+category_id).slideUp('slow');
               $('#product_id_'+product_id).hide(500, function () {
                        $('#product_id_'+product_id).remove();
                });
                
                var msg = "<div id='msg-success' class='alert alert-success'>Eliminado exito!</div>";
                $('#msg').html(msg).hide().slideDown('fast');
                $('#msg').delay(1000).slideUp('fast',function(){
                    //$('#msg-success').remove()
                });
             
          }
    });
}

function btn_borrar_banner(id,banner_table){

    $.ajax({
            type: "POST",
            url: "./actions/borrar-banner.php",
            data: {
                id:id,
                banner_table:banner_table
            },
            success: function(){

                //$('#'+id).remove();
                url = "./banner-administrator.php";
                window.location = url;
          }
    });
}
