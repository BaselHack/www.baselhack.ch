import './bootstrap';

// import gsap animation library
import { gsap } from 'gsap';

import './custom.js';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import collapse from '@alpinejs/collapse'

window.Alpine = Alpine;
Alpine.plugin(focus);
Alpine.plugin(collapse);
Alpine.start();