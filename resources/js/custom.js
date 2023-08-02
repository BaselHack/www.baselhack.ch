import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';
gsap.registerPlugin(ScrollTrigger);

// ANIMATIONS 
/*
const tl = gsap.timeline();
tl.fromTo('.time-block', { 
    clipPath: 'polygon(0 0, 0 0, 0 100%, 0% 100%)'
}, { 
    clipPath: 'polygon(0 0, 100% 0, 100% 100%, 0 100%)',
    stagger: 0.25, 
    duration: 2, 
    ease: 'power2.inOut',
    scrollTrigger: { 
        trigger: '.time-block', 
        start: '-40% center', 
        end: 'bottom 50%', 
        scrub: true
    }
});
*/

/* 
document.querySelector(".card-shine").onmousemove = (e) => {
    const x = e.pageX - e.target.offsetLeft;
    const y = e.pageY - e.target.offsetTop;
    e.target.style.setProperty("--x", `${x}px`);
    e.target.style.setProperty("--y", `${y}px`);
};
*/

/*
tl.fromTo('.cta-element', {
    opacity: 0,
    clipPath: 'polygon(0 0, 100% 0, 100% 0, 0 0)'
},
{
    opacity: 1,
    clipPath: 'polygon(0 0, 100% 0, 100% 100%, 0 100%)',
    duriation: 2,
    ease: 'power2.inOut',
    scrollTrigger: { 
        trigger: '.cta-element', 
        start: '-70% 100%', 
        end: 'bottom 50%', 
        scrub: true
    }
});
*/

// COUNTDOWN TIMER
import moment from 'moment';
document.addEventListener("DOMContentLoaded", () => {
    let dayField = document.getElementById("countDays");
    let hourField = document.getElementById("countHours");
    let minuteField = document.getElementById("countMinutes");
    let secondField = document.getElementById("countSeconds");

    let interval;
    const eventDay = moment("2023-10-27 08:30:00");

    // Convert to millisecond
    const second = 1000;
    const minute = second * 60;
    const hour = minute * 60;
    const day = hour * 24;

    const countDownFn = () => {
        const today = moment();
        const timeSpan = eventDay.diff(today);

        if (timeSpan <= -today) {
            console.log("Unfortunately we have past the event day");
            clearInterval(interval);
            return;
        } else if (timeSpan <= 0) {
            console.log("Today is the event day");
            clearInterval(interval);
            return;
        } else {
            const days = Math.floor(timeSpan / day);
            const hours = Math.floor((timeSpan % day) / hour);
            const minutes = Math.floor((timeSpan % hour) / minute);
            const seconds = Math.floor((timeSpan % minute) / second);

            // Set results
            dayField.innerHTML = days;
            hourField.innerHTML = hours;
            minuteField.innerHTML = minutes;
            secondField.innerHTML = seconds;
        }
    };

    interval = setInterval(countDownFn, second);
});