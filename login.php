
<?php 

require_once "includes/header.php";

?>
<br><br>
<div class="container">
    
      <div class="row">

        <div class="col-md-4">
            
        </div>

          <div class="col-md-4">
              <br><br><br>

          <div class="card">
              <div class="card-header">
                  Login
              </div>
              <div class="card-body">
            
                <form method ="POST" action ="login.php" >
                  <div class = "form-group">
                    <label >Usuario</label>
                    <input type="text" class="form-control" name="uid" aria-describedby="emailHelp" placeholder="Nombre de Usuario">
                    <small id="emailHelp" class="form-text text-muted">Nunca compartas tu nombre de usuario y contraseña</small>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" name="pwd" placeholder="Escribe aquí tu contraseña">
                  </div>
              
                  <input type="submit" name = "submit" class="btn btn-primary" value = "Entrar" />
                </form>
                
                    

              </div>
        
          </div>
              
          </div>
          
      </div>
  </div>

  <br><br><br><br><br><br><br><br><br>
<?php 

require_once "includes/footer.php";

?>