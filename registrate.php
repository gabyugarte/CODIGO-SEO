<?php 

require_once "includes/header.php";

?>
<div class="container">
      <div class="row">

        <div class="col-md-4">
        </div>
          <div class="col-md-4">
              <br>
            <div class="card">
              <div class="card-header">
                  Regístro
              </div>
              <div class="card-body">
                <P>No tienes cuenta?, Regístrate aquí!</p>
                <form method ="post" action ="#" >
                  <div class = "form-group">
                    <label >Nombre de Usuario</label>
                      <input required name="uid" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Nombre de Usuario aquí">                  </div>
                      <small id="emailHelp" class="form-text text-muted">Nunca compartas tu nombre de usuario y contraseña</small>
              
                    <label for="password">Contraseña</label>
                      <input required name="pwd"type="password" class="form-control"  placeholder="Escribe aquí tu contraseña"><br>
                    <label for="confirmPassword">Confirmar Contraseña</label>
                      <input required name="pwdRepeat"class="form-control"type="password" placeholder="Confirma tu contraseña"><br>
                

          
                    <label >Email</label>
                      <input required name="email" type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Tu correo electrónico"><br>
                 
             
              
                  <button type="submit" name="submit" class="btn btn-primary">Registrarse</button>
                </div>
                </form>
                <a href="login.php">Ya tengo una cuenta</a><br>
                    

              </div>
          </div>
      </div>
    </div>
</div>
              <?php 

require_once "includes/footer.php";

?>