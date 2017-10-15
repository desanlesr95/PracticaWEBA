<?php 
session_start();
echo $_SESSION['id_rol'];
 /*switch ($_SESSION['id_rol']) {
 	case 100://Administrador
 		include_once 'solicitudes_admin.php';
 		break;
 	case 101://Lider
 		include_once 'solicitudes_lider.php';
 		break;
 	case 102:///Responsable
 		include_once 'solicitudes_responsable.php';
 		break;
 	case 103://Colaborador
 		include_once 'solicitudes_colaborador.php';
 		break;
 	default:
 		break;
 }*/
 include_once 'solicitudes_all.php';
 ?>


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
            <th>id_solicitud</th>
            <th>Solicitante</th>
            <th>Receptor</th>
            <th>Descripcion</th>
            <th>Fecha de registro</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody id="usuariosTable">

            <?php 
            	//sacar los nombres---->
              if ($sql->rowCount() > 0 ){   
                while($rows = $sql->fetch(PDO::FETCH_ASSOC)){
                	$receptor;
                	$solicitante;
                    echo "<tr>
                        <td>".$rows['id_solicitud']."</td>
                        <td>".$rows['nombre']."</td>";
                        $solicitante=$rows['nombre'];
                        $rows = $sql->fetch(PDO::FETCH_ASSOC);
                        $receptor=$rows['nombre'];
                    echo "<td>".$rows['nombre']."</td>
                        <td>".$rows['descripcion']."</td>
                        <td>".$rows['fecha_registro']."</td>
                        <td><button id='".$rows['id_solicitud']."' type='button' class='btn btn-info btn-lg btn-primary' data-toggle='modal' data-target='#myModal".$rows['id_solicitud']."'>Consultar</button></td>";
                    echo "</tr>";



                    echo '<div id="myModal'.$rows['id_solicitud'].'" class="modal fade" role="dialog">
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Solicitud</h4>
							      </div>
							      <div class="modal-body">';
			
									if ($_SESSION['id_rol']==103){
										if ($rows['status']=='Aceptada_lider') {
											echo "<h1>Terminar Solicitud</h1>";
										}
										else{
											echo "<h1>Consultar Solictud</h1>";
										}
									}
									else if($_SESSION['id_rol']==102){

									}
									else if($_SESSION['id_rol']==101) {
										
									}
								
				echo '
				<span class="label label-primary">Status:</span><br><br><span class="label label-success">'.$rows['status'].'</span><br><br>
				<span class="label label-primary">Id solicitud:</span><br>'.$rows['id_solicitud'].'<br>
				<span class="label label-primary">Solicitante:</span><br>'.$solicitante.'<br>
				<span class="label label-primary">Receptor:</span><br>'.$receptor.'<br>
				<span class="label label-primary">Descripción:</span><br>'.$rows['descripcion'].'<br>
				<span class="label label-primary">Bitacora:</span><br>';
				?>
				
				
				
				<?php
				/*
				<tr>
					<td>'.$rows['fecha_registro'].'</td>
					<td>CREADA</td>
					<td>'.$solicitante.'</td>
					</tr>
				*/
				echo    '
					</div>
				    <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				    </div>
				   </div>
				  </div>
				</div>';
                }
              }

            ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Modal -->

