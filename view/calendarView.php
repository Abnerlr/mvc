<!DOCTYPE html>
<html>
  <head>
    <title>Calendario</title>
    <?= inc('commonCss');?>
    <link rel="stylesheet" type="text/css" href="<?= RUTA['fullCalendar']?>">
    <link rel="stylesheet" type="text/css" href="<?= RUTA['css']?>calendar.css">
  </head>
  <header>
    <?= inc('header');?>
  </header>
  <body>

    <div class="container">
      <div class="page-header" style="margin-top: -20px !important">
        <h1>Calendario</h1>
      </div>
      <div class="calendar" id="calendar">
        
      </div>

      <!-- Modal -->
    <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form class="form-horizontal" method="POST" action=" <?php echo $helper->url("calendar","crearEvento"); ?> ">
        
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Añadir Evento</h4>
          </div>
          <div class="modal-body">
          
            <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Título</label>
            <div class="col-sm-10">
              <input type="text" name="title" class="form-control" id="title" placeholder="Title">
            </div>
            </div>
            <div class="form-group">
            <label for="color" class="col-sm-2 control-label">Color</label>
            <div class="col-sm-10">
              <select name="color" class="form-control" id="color">
                <option value="">Seleccione</option>
                <option style="color:#0071c5;" value="#0071c5">&#9724; Azul Oscuro</option>
                <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquesa</option>
                <option style="color:#008000;" value="#008000">&#9724; Verde</option>             
                <option style="color:#FFD700;" value="#FFD700">&#9724; Amarillo</option>
                <option style="color:#FF8C00;" value="#FF8C00">&#9724;  Naranja</option>
                <option style="color:#FF0000;" value="#FF0000">&#9724; Rojo</option>
                <option style="color:#000;" value="#000">&#9724; Negro</option>
                
              </select>
            </div>
            </div>
            <div class="form-group">
            <label for="start" class="col-sm-2 control-label">Fecha inicial</label>
            <div class="col-sm-10">
              <input type="text" name="start" class="form-control" id="start" readonly>
            </div>
            </div>
            <div class="form-group">
            <label for="end" class="col-sm-2 control-label">Fecha Final</label>
            <div class="col-sm-10">
              <input type="text" name="end" class="form-control" id="end" readonly>
            </div>
            </div>
          
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
        </div>
        </div>
      </div>
      
      
      
      <!-- Modal -->
      <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form class="form-horizontal" method="POST" action="<?php echo $helper->url("calendar","editarEvento"); ?>">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Editar Evento</h4>
          </div>
          <div class="modal-body">
          
            <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Título</label>
            <div class="col-sm-10">
              <input type="text" name="title" class="form-control" id="title" placeholder="Title">
            </div>
            </div>
            <div class="form-group">
            <label for="color" class="col-sm-2 control-label">Color</label>
            <div class="col-sm-10">
              <select name="color" class="form-control" id="color">
                <option value="">Choose</option>
                <option style="color:#0071c5;" value="#0071c5">&#9724; Azul Oscuro</option>
                <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turqueza</option>
                <option style="color:#008000;" value="#008000">&#9724; Verde</option>             
                <option style="color:#FFD700;" value="#FFD700">&#9724; Amarillo</option>
                <option style="color:#FF8C00;" value="#FF8C00">&#9724; Naranja</option>
                <option style="color:#FF0000;" value="#FF0000">&#9724; Rojo</option>
                <option style="color:#000;" value="#000">&#9724; Negro</option>
                
              </select>
            </div>
            </div>
              <div class="form-group"> 
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                <label class="text-danger"><input type="checkbox"  name="delete"> Eliminar Evento</label>
                </div>
              </div>
            </div>
            
            <input type="hidden" name="id" class="form-control" id="id">
          
          
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
        </div>
        </div>
      </div>
  </div>

    <?= inc('commonJs'); ?>
    <script type="text/javascript" src="<?= SCRIPTS['moment'];?>"></script>
    <script type="text/javascript" src="<?= SCRIPTS['fullCalendar'];?>"></script>

    <script>
      $(function() {
        
        $('#calendar').fullCalendar({
            header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,basicWeek,basicDay'
          },
          editable: true,
          eventLimit: true,
          selectable: true,
          selectHelper: true,
          select: function(start, end) {
            
            $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
            $('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
            $('#ModalAdd').modal('show');
          },
          eventRender: function(event, element) {
            element.bind('dblclick', function() {
              $('#ModalEdit #id').val(event.id);
              $('#ModalEdit #title').val(event.title);
              $('#ModalEdit #color').val(event.color);
              $('#ModalEdit').modal('show');
            });
          },
          eventDrop: function(event, delta, revertFunc) { 

            edit(event);

          },
          eventResize: function(event,dayDelta,minuteDelta,revertFunc) { 

            edit(event);

          },events: [
                      <?php foreach($events as $event): 
                      
                          $start = explode(" ", $event['start']);
                          $end = explode(" ", $event['end']);

                          if($start[1] == '00:00:00'){
                            $start = $start[0];
                          }else{
                            $start = $event['start'];
                          }
                          if($end[1] == '00:00:00'){
                            $end = $end[0];
                          }else{
                            $end = $event['end'];
                          }
                      ?>
                        {
                          id: '<?php echo $event['id']; ?>',
                          title: '<?php echo $event['title']; ?>',
                          start: '<?php echo $start; ?>',
                          end: '<?php echo $end; ?>',
                          color: '<?php echo $event['color']; ?>',
                        },
                        <?php endforeach; ?>
          ]
        });

        function edit(event){
          start = event.start.format('YYYY-MM-DD HH:mm:ss');
          if(event.end){
            end = event.end.format('YYYY-MM-DD HH:mm:ss');
          }else{
            end = start;
          }
          
          id =  event.id;
          
          Event = [];
          Event[0] = id;
          Event[1] = start;
          Event[2] = end;
          
          $.ajax({
           url: '<?php echo $helper->url("calendar","editarEvento");?>',
           type: "POST",
           data: {Event:Event},
           success: function(rep) {
              if(rep == 'OK'){
                alert('Actualizado');
              }else{
                alert('UPS! Algo ha salido mal. Intenta de nuevo!'); 
              }
            }
          });
        }
      });
  </script>
  </body>
  <footer>
    <a href="<?php echo $helper->url("usuarios","index");?>">Usuarios</a>
  </footer>
</html>
