import gsap from 'gsap';

let tl = gsap.timeline({});
tl.to('.time-block', { x: 0, opacity: 1, duration: 0.5, stagger: 0.2 });