$(document).ready(function(){
    $('#btnRegistrar').click(function(){
        vacios = validarFormVacio('frmProductos');
    
        if(vacios > 0 )
        {
            alertify.alert('Campos Vacios', 'Debes Llenar todos los Campos!');
            return false;
        }
        datos=$('#frmProductos').serialize();
        $.ajax({
            type:"POST",
            data:datos,
            url:"../procesos/registro2.php",
            success:function(r){
                console.log(r);
                if(r == "ok")
                {
                    alertify.alert('Registro de Producto', 'Registro Correcto!', function(){ alertify.success('ok'); });
                    setTimeout(function(){ location.reload(); }, 2000);
                }
                else
                {
                    alertify.alert('Error en Registro', 'Registro Duplicado !', function(){ alertify.error('Error'); });
                    setTimeout(function(){ location.reload(); }, 2000);
                }
                
            }
        });
    });
    });

    


