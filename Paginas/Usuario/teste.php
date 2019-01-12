<html>
    <head>
        <title>Vida Saudavel</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../../Bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../Bootstrap/js/bootstrap.min.js">
        <link rel="stylesheet" href="../../css/style.css" rel="stylesheet">
        
        <link  href='../../fullcalendar-3.9.0/fullcalendar.min.css' rel="stylesheet">
        <link  href='../../fullcalendar-3.9.0/fullcalendar.print.min.css' rel="stylesheet"  media='print'>
        <script src='../../fullcalendar-3.9.0/lib/jquery.min.js'></script>
        <script src='../../fullcalendar-3.9.0/lib/moment.min.js'></script>
        <script src='../../fullcalendar-3.9.0/fullcalendar.min.js'></script>
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
    </head>
    <body>
        dasd
        <div id='calendar'></div>
        <script src="../../Bootstrap/jquery/jquery.min.js"></script>        
        <script src="../../Bootstrap/js/bootstrap.js"></script>
    </body>
</html>