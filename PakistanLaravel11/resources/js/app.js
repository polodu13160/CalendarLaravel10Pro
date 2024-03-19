import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener("alpine:init", () => {
    Alpine.setListenerManipulators(
        (target, event, handler, options, modifiers) => {
            jQuery(target).on(event, handler);
        },
        (target, event, handler, options) => {
            jQuery(target).off(event, handler);
        }
    );
});