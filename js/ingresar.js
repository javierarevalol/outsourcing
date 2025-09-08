$('#formLogin').submit(function(e){
    e.preventDefault();
    var user = $.trim($("#user").val());    
    var password =$.trim($("#password").val());
    
    if(user.length == "" || password == ""){
       Swal.fire({
           type:'warning',
           title:'Debe ingresar un usuario y/o contraseña. ',
       });
       return false; 
     } else {
        $.ajax({
            url:"./conexiones/ingresar.php",
            type:"POST",
            datatype: "json",
            data: {user:user, password:password}, 
            success:function(data){
                if(data == "null"){
                    Swal.fire({
                        type:'error',
                        title:'Usuario y/o contraseña incorrecta. ',
                    });
                }else{
                    Swal.fire({
                        type:'success',
                        title:'¡Conexión exitosa!',
                        confirmButtonColor:'#3085d6',
                        confirmButtonText:'Ingresar'
                    }).then((result) => {
                        if(result.value){
                            window.location.href = "./dashboard.html";
                        }
                    })
                }
            }    
        });
     }     
 });