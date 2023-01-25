import './bootstrap';

import.meta.glob([
    '../images/**',
    '../fonts/**',
]);

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

$(function (){
    $('.pageLoading').hide();
    $('.pageLoading + div').css('opacity', '1');
});
