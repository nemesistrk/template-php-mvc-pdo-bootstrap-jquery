<!DOCTYPE html>
<html>
    <head>
        <title>Template MVC PHP PDO BOOTSTRAP - Home Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php 
        require_once '../config/properties.php';        
        require_once 'header.php'; 
        ?>
    </head>
    <body>
        <div>
            <h1>Template MVC PHP PDO BOOTSTRAP 0.0</h1>
            <h2>This Template contains the next:</h2>
            <p>
            <ul>
                <li>MVC Model</li>
                <li>HTML 5</li>
                <li>PHP</li>
                <li>PDO usign MySQL</li>
                <li>BOOTSTRAP</li>
                <li>JQuery v1.10.2</li>
            </ul>
            </p>
            <h2>This is a example for beging to use this template. Enjoy it
            </h2>
            <form id="frmLogin" name="frmLogin" class="form-horizontal" action="JavaScript:login();" >
            <fieldset>

            <!-- Form Name -->
            <legend>Login</legend>

            <!-- Password input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="usuario">User:</label>
              <div class="col-md-4">
                <input id="usuario" name="user" type="text" placeholder="User Name" class="form-control input-md">
                <span class="help-block">help</span>
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="password">Pasword:</label>  
              <div class="col-md-4">
              <input id="password" name="password" type="password" placeholder="placeholder" class="form-control input-md">
              <span class="help-block">help</span>  
              </div>
            </div>

            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="singlebutton">Login</label>
              <div class="col-md-4">
                <button id="singlebutton" name="singlebutton" class="btn btn-primary">Enviar</button>
              </div>
            </div>

            </fieldset>
                <input type="hidden" name="accion" id="accion" value="login" />
            </form>
        </div>
        
    <?php 
        require_once 'footer.php';
    ?>    
        
    </body>
</html>
