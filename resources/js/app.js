import './bootstrap';

import Alpine from 'alpinejs';

import { Calendar } from '@fullcalendar/core';

import timeGridPlugin from '@fullcalendar/timegrid';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', async function() {
    const calendarEl = document.querySelector('#calendar');

    if (calendarEl == null) return;

    // const { data } = await axios.get('/api/events');
    const events=[
        {
            "id": 1,
            "title":"non earum",
            "color":"DarkSlateBlue",
            "start":"2024-03-01 09:00:00",
            "end":"2024-03-01 10:00:00",
            "borderColor":"green"
        },
        {
            "id":2,
            "title":"rum",
            "color":"LightCoral",
            "start":"2024-03-01 10:00:00",
            "end":"2024-03-01 11:00:00",
            "borderColor":"yellow"
        },
        {
            "id":3,
            "title":"nm",
            "color":"Teal",
            "start":"2024-03-01 14:00:00",
            "end":"2024-03-01 16:00:00",
            "borderColor":"green"
        },
    ]

    const calendar = new Calendar(calendarEl, {
        plugins: [ timeGridPlugin ],
        initialView: 'timeGridWeek',
        slotMinTime: "08:00:00",
        slotMaxTime: "20:00:00",
        eventClick: async function(info) {
            let { data } = await axios.put('/api/subscribe', {
                id: info.event.id,
            });

            info.el.style.borderColor = data.attached === true ? 'green' : 'yellow';
        },
        // events: data.events,
        events: events
    });

    calendar.setOption('locale', 'fr');
    calendar.render();
});


