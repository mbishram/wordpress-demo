import Alpine from 'alpinejs';
import customPageAnimation from './custom-page-animation.js';

window.Alpine = Alpine;

Alpine.data('customPageAnimation', customPageAnimation);

Alpine.start();
