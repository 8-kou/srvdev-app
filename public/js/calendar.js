document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'ja',
        displayEventTime: false,
        eventClick: function (info) {
            window.location.href = '/schedules/' + info.event.id;
        },
        events: '/events',
    });

    calendar.render();
});
