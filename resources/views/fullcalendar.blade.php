<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='node_modules/@fullcalendar/core/main.css' rel='stylesheet' />
<link href='node_modules/@fullcalendar/daygrid/main.css' rel='stylesheet' />
<link href='node_modules/@fullcalendar/timegrid/main.css' rel='stylesheet' />
<link href='node_modules/@fullcalendar/list/main.css' rel='stylesheet' />
<script src='dist/example.js'></script>
<style>

  body {
    margin: 40px 10px;
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }

</style>
</head>
<body>

  <div id='calendar'></div>




<script type="text/javascript">
import { Calendar } from '@fullcalendar/core';
import interactionPlugin from '@fullcalendar/interaction';
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';
import listPlugin from '@fullcalendar/list';

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new Calendar(calendarEl, {
    plugins: [ dayGridPlugin, listPlugin ],
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
    },
    defaultDate: '2020-01-12',
    navLinks: true, // can click day/week names to navigate views
    editable: true,
    eventLimit: true, // allow "more" link when too many events
    events: [
      {
        title: 'All Day Event',
        start: '2020-3-01',
      },
      {
        title: 'Happy Hour',
        start: '2020-01-12T17:30:00'
      },
      {
        title: 'Click for Google',
        url: 'http://google.com/',
        start: '2020-01-28'
      }
    ]
  });

  calendar.render();
});

</script>
</body>
</html>
