// variables globales
let nav = 0;
let clicked = null;

// eventos guardados por el usuario
let events = localStorage.getItem('events') ? JSON.parse(localStorage.getItem('events')) : [];

// tareas fijas predefinidas
const tareasFijas = [
    { date: '6/5/2025', title: 'Entrega de Tarea 1' },
    { date: '10/5/2025', title: 'Examen Parcial' },
    { date: '15/5/2025', title: 'Proyecto Final' }
];

// variables del DOM
const newEvent = document.getElementById('newEventModal');
const deleteEventModal = document.getElementById('deleteEventModal');
const backDrop = document.getElementById('modalBackDrop');
const eventTitleInput = document.getElementById('eventTitleInput');

const calendar = document.getElementById('calendar');
const weekdays = ['Domingo','Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];

function openModal(date) {
    clicked = date;

    const allEvents = [...events, ...tareasFijas];
    const eventDay = allEvents.find(event => event.date === clicked);

    if (eventDay) {
        document.getElementById('eventText').innerText = eventDay.title;
        deleteEventModal.style.display = 'block';
    } else {
        newEvent.style.display = 'block';
    }

    backDrop.style.display = 'block';
}

function load() {
    const date = new Date();

    if (nav !== 0) {
        date.setMonth(new Date().getMonth() + nav);
    }

    const day = date.getDate();
    const month = date.getMonth();
    const year = date.getFullYear();

    const daysMonth = new Date(year, month + 1, 0).getDate();
    const firstDayMonth = new Date(year, month, 1);

    const dateString = firstDayMonth.toLocaleDateString('es-ES', {
        weekday: 'long',
        year: 'numeric',
        month: 'numeric',
        day: 'numeric',
    });

    const paddingDays = weekdays.indexOf(dateString.split(', ')[0]);

    document.getElementById('monthDisplay').innerText = `${date.toLocaleDateString('es-ES', { month: 'long' })}, ${year}`;

    calendar.innerHTML = '';

    for (let i = 1; i <= paddingDays + daysMonth; i++) {
        const dayS = document.createElement('div');
        dayS.classList.add('day');

        const dayString = `${month + 1}/${i - paddingDays}/${year}`;

        if (i > paddingDays) {
            dayS.innerText = i - paddingDays;

            const allEvents = [...events, ...tareasFijas];
            const eventDay = allEvents.find(event => event.date === dayString);

            if (i - paddingDays === day && nav === 0) {
                dayS.id = 'currentDay';
            }

            if (eventDay) {
                const eventDiv = document.createElement('div');
                eventDiv.classList.add('event');
                eventDiv.innerText = eventDay.title;
                dayS.appendChild(eventDiv);
            }

            dayS.addEventListener('click', () => openModal(dayString));
        } else {
            dayS.classList.add('padding');
        }

        calendar.appendChild(dayS);
    }
}

function closeModal() {
    eventTitleInput.classList.remove('error');
    newEvent.style.display = 'none';
    backDrop.style.display = 'none';
    deleteEventModal.style.display = 'none';

    eventTitleInput.value = '';
    clicked = null;
    load();
}

function saveEvent() {
    if (eventTitleInput.value) {
        eventTitleInput.classList.remove('error');

        events.push({
            date: clicked,
            title: eventTitleInput.value
        });

        localStorage.setItem('events', JSON.stringify(events));
        closeModal();
    } else {
        eventTitleInput.classList.add('error');
    }
}

function deleteEvent() {
    if (tareasFijas.find(event => event.date === clicked)) {
        alert('No puedes eliminar esta tarea predeterminada.');
        closeModal();
        return;
    }

    events = events.filter(event => event.date !== clicked);
    localStorage.setItem('events', JSON.stringify(events));
    closeModal();
}

function buttons() {
    document.getElementById('backButton').addEventListener('click', () => {
        nav--;
        load();
    });

    document.getElementById('nextButton').addEventListener('click', () => {
        nav++;
        load();
    });

    document.getElementById('saveButton').addEventListener('click', () => saveEvent());
    document.getElementById('cancelButton').addEventListener('click', () => closeModal());
    document.getElementById('deleteButton').addEventListener('click', () => deleteEvent());
    document.getElementById('closeButton').addEventListener('click', () => closeModal());
}

buttons();
load();