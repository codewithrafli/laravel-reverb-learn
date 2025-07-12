import './bootstrap';

window.Echo.channel('polling')
    .listen('PollUpdated', (e) => {
        console.log(e);

        const countElement = document.getElementById(`vote-count-${e.optionId}`);

        if (countElement) {
            countElement.innerText = e.votes;
        }
    });
