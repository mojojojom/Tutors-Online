<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    </head>
    <body>
        <div class="container">
            <br />
            <h2 align="center">Schedule Appointments</h2>
            <br />
            <div id="calendar"></div>
        </div>
    
    <script>
    $(document).ready(function () {
        var calendar = $('#calendar').fullCalendar({
            editable: true,
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            events: 'load.php',
            selectable: true,
            selectHelper: true,
            select: function (start, end, allDay) {
                var title = prompt("Enter Appointment Title");
                if (title) {
                var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                $.ajax({
                    url: "insert.php",
                    type: "POST",
                    data: { title: title, start: start, end: end },
                    success: function () {
                    calendar.fullCalendar('refetchEvents');
                    alert("Appointment Added Successfully");
                    }
                })
                }
            },
            editable: true,
            eventResize: function (event) {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                var title = event.title;
                var id = event.id;
                $.ajax({
                url: "update.php",
                type: "POST",
                data: { title: title, start: start, end: end, id: id },
                success: function () {
                    calendar.fullCalendar('refetchEvents');
                    alert("Appointment Updated Successfully");
                }
            })
        },
            eventDrop: function (event) {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                var title = event.title;
                var id = event.id;
                $.ajax({
                    url: "update.php",
                    type: "POST",
                    data: { title: title, start: start, end: end, id: id },
                    success: function () {
                        calendar.fullCalendar('refetchEvents');
                        alert("Appointment Moved Successfully");
                    }
                });
            },
            eventClick: function (event) {
        if (confirm("Are you sure you want to remove this appointment?")) {
            var id = event.id;
            $.ajax({
                url: "delete.php",
                type: "POST",
                data: { id: id },
                success: function () {
                    calendar.fullCalendar('refetchEvents');
                    alert("Appointment Removed");
                }
            })
        }
    },
        });
    });
    </script>

    </body>
</html>