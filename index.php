<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD - PHP</title>
  <!-- Boostrap 4.0 -->  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>

<!-- Modal -->
<div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- FORMULARIO PARA REGISTRAR PERSONAS -->
        
        
        
        
        
        <div class="form-group">
          <label for="completename">Nombre</label>
          <input type="text" class="form-control" id="completename" aria-describedby="emailHelp" placeholder="Ingresa tu nombre">
        </div>

        <div class="form-group">
          <label for="completeemail">Correo Electronico</label>
          <input type="text" class="form-control" id="completeemail" aria-describedby="emailHelp" placeholder="Ingresa tu correo electronico">
        </div>

        <div class="form-group">
          <label for="completemobile">Telefono</label>
          <input type="text" class="form-control" id="completemobile" aria-describedby="emailHelp" placeholder="Ingresa tu telefono">
        </div>

        <div class="form-group">
          <label for="completeplace">Puesto</label>
          <input type="text" class="form-control" id="completeplace" aria-describedby="emailHelp" placeholder="Ingresa tu puesto">
        </div>
        ...

      </div>



      <!-- Boton Formulario Agregar Usuarios -->
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" onclick="addUser()">Enviar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>


    </div>
  </div>
</div>

  <div class="container my-3">
    <h1 class="text-center">Operaciones CRUD Usando Boostrap y JQUERY</h1>
    <!-- BOTON AGREGAR PERSONAS -->
    <button type="button" class="btn btn-dark my-5" data-toggle="modal" data-target="#completeModal">
      Agregar Usuarios
    </button>


    <!-- Table -->
    <div id="displayDataTable">
      
    </div>

  </div>
 




  <!-- Boostrap javascript -->
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script> -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>

  <!-- Funciones JAVASCRIPT -->
  <script>

    function displayData(){
      let displayData = "true";
      $.ajax({
        url: 'display.php',
        type:'post',
        data:{
          displaySend: displayData
        },
        success: function(data,status){
          // JQUERY
          $('#displayDataTable').html(data);
        }
      });

    }

    // Obtener datos del formulario
    function addUser() {
      let nameAdd = $('#completename').val();
      let emailAdd = $('#completeemail').val();
      let mobileAdd = $('#completemobile').val();
      let placeAdd = $('#completeplace').val();

      //AJAX
      $.ajax({
        url:'insert.php',
        type:'post',
        data:{
          nameSend:nameAdd,
          emailSend:emailAdd,
          mobileSend:mobileAdd,
          placeSend:placeAdd
        },
        success:function(data,status){
          displayData();
        }
      });
    }
    
  </script>

</body>
</html>