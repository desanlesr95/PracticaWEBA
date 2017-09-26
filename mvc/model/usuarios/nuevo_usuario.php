<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Nuevo Usuario <small>Hoja Registro</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
              </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">

          <form class="form-horizontal form-label-left" novalidate method="POST" id="frm_registrar">


            <span class="section">Personal Info</span>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="nombre" class="form-control col-md-7 col-xs-12"  data-validate-words="1" name="nombre" placeholder="Nombre" required="required" type="text">
              </div>
            </div>



	         <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Apellido paterno <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="apellidop" class="form-control col-md-7 col-xs-12" data-validate-words="1" name="apellidop" placeholder="Apellido paterno" required="required" type="text">
              </div>
            </div>


            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Apellido materno <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="apellidom" class="form-control col-md-7 col-xs-12"  data-validate-words="1" name="apellidom" placeholder="Apellido Materno" required="required" type="text">
              </div>
            </div>


            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Rol <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="id_rol" class="form-control col-md-7 col-xs-12" name="id_rol" placeholder="Rol" required="required" type="number" data-validate-minmax="100,110">
              </div>
            </div>


            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Username <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="username" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="username" placeholder="Username" required="required" type="text">
              </div>
            </div>



            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Contraseña <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="contrasena" class="form-control col-md-7 col-xs-12" name="contrasena" placeholder="Contraseña" required="required" type="password">
              </div>
            </div>


	          <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Repetir contraseña <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="contrasena2" class="form-control col-md-7 col-xs-12" name="contrasena2" placeholder="Repetir contraseña" required="required" type="password">
              </div>
            </div>

            <div class="item form-group">
              <div class="col-md-offset-4 col-md-6 col-sm-6 col-xs-12">
                <div class="col-xs-6 col-md-6">
                  <input id="radio" class="form-control col-md-7 col-xs-12" name="group" required="required" type="radio" value="A">Activo
                </div>
                <div class="col-xs-6 col-md-6">
                  <input id="radio" class="form-control col-md-7 col-xs-12" name="group" required="required" type="radio" value="I">Inactivo 
                </div>
              </div> 
            </div>



            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-3">
                <button id="send" type="submit" class="btn btn-success">Guardar</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>



        <script src="js/bootstrap.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="js/icheck/icheck.min.js"></script>
  <!-- pace -->
  <script src="js/pace/pace.min.js"></script>
  <script src="js/custom.js"></script>
  <!-- form validation -->
  <script src="js/validator/validator.js"></script>
  <script>
    // initialize the validator function
    validator.message['date'] = 'not a real date';

    // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    $('form')
      .on('blur', 'input[required], input.optional, select.required', validator.checkField)
      .on('change', 'select.required', validator.checkField)
      .on('keypress', 'input[required][pattern]', validator.keypress);

    $('.multi.required')
      .on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

    // bind the validation to the form submit event
    //$('#send').click('submit');//.prop('disabled', true);

    $('form').submit(function(e) {
      e.preventDefault();
      var submit = true;
      // evaluate the form using generic validaing
      if (!validator.checkAll($(this))) {
        submit = false;
      }

      if (submit)
        guardarUsuario();
      return false;
    });

    /* FOR DEMO ONLY */
    $('#vfields').change(function() {
      $('form').toggleClass('mode2');
    }).prop('checked', false);

    $('#alerts').change(function() {
      validator.defaults.alerts = (this.checked) ? false : true;
      if (this.checked)
        $('form .alert').remove();
    }).prop('checked', false);
  </script>