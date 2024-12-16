import {programmSports} from "./dataSpotrs.js";

const proSport = JSON.parse(programmSports);

function viewBox (proSport){
    const scheduleBox = document.querySelector('.schedule-box');

    proSport.forEach(item => {
        scheduleBox.insertAdjacentHTML('beforeend', `
        <div class="schedule_item-box" id="${item.name}">
			<div class="schedule_item">
            <p class="schedule_item-title">${item.name}</p>
            <p class="schedule_item-time">${item.time}</p>
			<p class="schedule_item-maxnumber">Максимальное количество участников: <span class="tel">${item.maxPeople}</span></p>
            <p data-id=${item.id} class="schedule_item-currentnumber">Текущее количество записанных участников: <span class="tel">${item.currentPeople}</span></p>
            <div class="button-box">
            <button class="button-submit headBut" id="${item.id}">Записаться</button>
            <button class="button-reject disabled headBut" data-id="${item.name}">Отменить запись</button>
            </div>
		</div>
        `)
        if (Number(item.maxPeople) === Number(item.currentPeople)) {
            const submitButton = document.getElementById(`${item.id}`);
            submitButton.classList.add('disabled');
        }
    });
}
viewBox (proSport);

const scheduleBox = document.querySelector('.schedule-box');

scheduleBox.addEventListener('click', function (e) {
    if (e.target.classList.contains('button-submit')) {
        proSport[e.target.id - 1].currentPeople = Number(proSport[e.target.id - 1].currentPeople) + 1;
        const currentNumberOfParticipants = document.querySelector(`[data-id="${e.target.id}"]`);
        const span = currentNumberOfParticipants.querySelector('span');
        span.textContent = proSport[e.target.id - 1].currentPeople;

        const currentSubmitButton = document.getElementById(`${e.target.id}`);
        currentSubmitButton.classList.add('disabled');
        currentSubmitButton.nextElementSibling.classList.remove('disabled');
    }
    if (e.target.classList.contains('button-reject')) {
        console.log(proSport);
        let currentWorkoutsInfoItem = proSport.filter(item => item.name === e.target.dataset.id);
        let index = Number(currentWorkoutsInfoItem[0].id) - 1;
        proSport[index].currentPeople = proSport[index].currentPeople - 1;

        const currentNumberOfParticipants = document.querySelector(`[data-id="${index + 1}"]`);
        const span = currentNumberOfParticipants.querySelector('span');
        span.textContent = proSport[index].currentPeople;

        const currentRejectButton = document.querySelector(`[data-id="${e.target.dataset.id}"]`);
        currentRejectButton.classList.add('disabled');
        currentRejectButton.previousElementSibling.classList.remove('disabled');
    }
});