
<!DOCTYPE html>
<html>
<head>
        <meta charset='utf-8'/>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../../Bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../Bootstrap/js/bootstrap.min.js">
        <link rel="stylesheet" href="../../css/style.css" rel="stylesheet">
        
        <link  href="../../fullcalendar-3.9.0/fullcalendar.min.css" rel="stylesheet">
        <link  href="../../fullcalendar-3.9.0/fullcalendar.print.min.css"  rel="stylesheet" media='print'>
        <script src="../../fullcalendar-3.9.0/lib/jquery.min.js"></script>
        <script src="../../fullcalendar-3.9.0/lib/moment.min.js"></script>
        <script src="../../fullcalendar-3.9.0/fullcalendar.min.js"></script>
        <style>
            body {
                margin: 40px 10px;
                padding: 0;
                font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
                font-size: 14px;
            }
            #calendar {
                max-width: 600px;
                margin: 0 auto;
            }
        </style>
        
</head>
<body>
<script>
  $(document).ready(function() {

    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
      },
      defaultDate: '2018-02-12',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2018-02-01',
        },
        {
          title: 'Long Event',
          start: '2018-02-07',
          end: '2018-02-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-02-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-02-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2018-02-11',
          end: '2018-02-13'
        },
        {
          title: 'Meeting',
          start: '2018-02-12T10:30:00',
          end: '2018-02-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2018-02-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2018-02-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2018-02-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2018-02-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2018-02-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2018-02-28'
        }
      ]
    });

  });

</script>
    

  <div id='calendar'></div>
   <div class="modal fade" id="visualizar" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-center">Visualizando Detalhes</h4>
          </div>
          <div class="modal-body">
              <table class="table table-bordered">
                  <tr>
                   <th>Id</th>
                   <th>Titulo</th>
                   <th>Inicio</th>
                   <th>fim</th>
                  
                  <tr>
                    <td class="success"><div id="id"></div></td>
                    <td class="success"><div id="title"></div></td>
                    <td class="success"><div id="start"></div></td>
                    <td class="success"><div id="end"></div></td>

                    </tr>
              </table>
              <div class="form-group">
                  <label for="exampleInputPassword1">Descrição</label>
                  <textarea class="form-control" rows="3" id="desc" disabled="disabled"></textarea>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Editarr</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal --> 

<div class="modal fade" id="cadastrar" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-center">Cadastrar Evento</h4>
          </div>
            <form method="post" action="CadastrarEvento.php">
              <div class="modal-body">
                      <div class="form-group ">
                        <label for="exampleInputEmail1">Titulo</label>
                        <input type="text" class="form-control" name="titulo" placeholder="Evento">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Cor</label>
                        <select name="cor" class="form-control" id="color">
                            <option style="color:#228B22" value="#228B22">Verde</option>
                            <option style="color:#8B0000" value="#8B0000">Vermelho</option>
                            <option style="color:#FFD700" value="#FFD700">Amarelo</option>s
                            <option style="color:#FF4500" value="#FF4500">Laranja</option>
                            <option style="color:#0071c5" value="##0071c5">Azul Turqueza</option>
                        </select>
                      </div>
                      <div class="form-inline">
                          <div class="form-group">
                            <label for="exampleInputPassword1">Data Inicial</label>
                            <input type="text" class="form-control" name="start" id="start">
                          </div>
                          <div class="form-group  col-md-offset-1 ">
                            <label for="exampleInputPassword1">Data Final</label>
                            <input type="text" class="form-control" name="end" id="end">
                          </div>      
                      </div>
                      <br>
                      <div class="form-group">
                            <label for="exampleInputPassword1">Descrição (Opcional)</label>
                            <textarea class="form-control" rows="3" id="desc" name="desc" ></textarea>
                      </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
            </form>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal --> 
</body>
</html>
