const endTime = new Date("2024-07-07T08:00:00").getTime();
const countdownElement = document.getElementById('countdown');

let prevDays, prevHours, prevMinutes;

const updateCountdown = () => {
    const now = new Date().getTime();
    const timeDiff = endTime - now;

    if (timeDiff > 0) {
        const days = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));

        if (days !== prevDays || hours !== prevHours || minutes !== prevMinutes) {
                countdownElement.innerHTML = `${days} dní : ${hours} hodin : ${minutes} minut`;
                prevMinutes = minutes;
                prevHours = hours;
                prevDays = days;
        }
    } else {
        clearInterval(countdownInterval);
        countdownElement.innerHTML = "Jupíí!";
    }
};

updateCountdown();
setInterval(updateCountdown, 1000);