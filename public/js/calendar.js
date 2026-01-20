document.addEventListener('DOMContentLoaded', function () {

    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'ja',

        // ここを追加
        dateClick: function(info) {
            window.location.href = '/schedules/create?date=' + info.dateStr;
        },

        eventClick: function(info) {
            window.location.href = '/schedules/' + info.event.id;
        },

        events: '/events'
    });

    calendar.render();
});
