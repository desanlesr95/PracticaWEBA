<div class="col-md-12 col-sm-12 col-xs-12"">
  <div class="x_panel">
    <div class="x_title">
      <h2>Lista de usuarios</h2>
      <div class="clearfix"></div>
      </div>
      <div class="x_content">
      <table id="datatable-buttons" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Rol</th>
            <th>Nombre de usuario</th>
            <th>Status</th>
            <th>Opciones</th>
          </tr>
        </thead>
        <tbody id="usuariosTable">
        
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Datatables -->
        <!-- <script src="js/datatables/js/jquery.dataTables.js"></script>
  <script src="js/datatables/tools/js/dataTables.tableTools.js"></script> -->

        <!-- Datatables-->
<script src="js/datatables/jquery.dataTables.min.js"></script>
<script src="js/datatables/dataTables.bootstrap.js"></script>
<script src="js/datatables/dataTables.buttons.min.js"></script>
<script src="js/datatables/buttons.bootstrap.min.js"></script>
<script src="js/datatables/jszip.min.js"></script>
<script src="js/datatables/pdfmake.min.js"></script>
<script src="js/datatables/vfs_fonts.js"></script>
<script src="js/datatables/buttons.html5.min.js"></script>
<script src="js/datatables/buttons.print.min.js"></script>
<script src="js/datatables/dataTables.fixedHeader.min.js"></script>
<script src="js/datatables/dataTables.keyTable.min.js"></script>
<script src="js/datatables/dataTables.responsive.min.js"></script>
<script src="js/datatables/responsive.bootstrap.min.js"></script>
<script src="js/datatables/dataTables.scroller.min.js"></script>


<!-- pace -->
<script src="js/pace/pace.min.js"></script>
<script>
  var handleDataTableButtons = function() {
      "use strict";
      0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
        dom: "Bfrtip",
        buttons: [{
          extend: "copy",
          className: "btn-sm"
        }, {
          extend: "csv",
          className: "btn-sm"
        }, {
          extend: "excel",
          className: "btn-sm"
        }, {
          extend: "pdf",
          className: "btn-sm"
        }, {
          extend: "print",
          className: "btn-sm"
        }],
        responsive: !0
      })
    },
    TableManageButtons = function() {
      "use strict";
      return {
        init: function() {
          handleDataTableButtons()
        }
      }
    }();
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#datatable').dataTable();
    $('#datatable-keytable').DataTable({
      keys: true
    });
    $('#datatable-responsive').DataTable();
    $('#datatable-scroller').DataTable({
      ajax: "js/datatables/json/scroller-demo.json",
      deferRender: true,
      scrollY: 380,
      scrollCollapse: true,
      scroller: true
    });
    var table = $('#datatable-fixed-header').DataTable({
      fixedHeader: true
    });
  });
  TableManageButtons.init();
</script>