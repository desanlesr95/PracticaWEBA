<?php
	//echo "login";
	//$_SESSION['mvc_conectado'] = 1;
?>

<body style="background:#F7F7F7;">

  <div class="">

    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
          <form name="frm_login" id="frm_login" method="POST" >
            <h1>Control de Acceso</h1>
            <div>
              <input type="text" class="form-control" name="usuario" id="usuario"placeholder="Username" required="" />
            </div>
            <div>
              <input type="password" class="form-control" name="passwd" id="passwd" placeholder="Password" required="" />
            </div>
            <div>
              <a class="btn btn-default submit" onclick="acceso();">Entrar</a>
            </div>
            <div class="clearfix"></div>
			<div id="resultado"></div>
            <div class="separator">

              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-anchor" style="font-size: 26px;"></i> MVC </h1>

                <p>©2017 Programación Web Avanzada</p>
              </div>
            </div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
    </div>
  </div>

</body>
