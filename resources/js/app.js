import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


const techs = [
    {selector: document.getElementById('front'), section: document.getElementById('frontSection')},
    {selector: document.getElementById('back'), section: document.getElementById('backSection')},
    {selector: document.getElementById('tools'), section: document.getElementById('toolsSection')},
];

techs.forEach(element => {
    element.selector.addEventListener('click', () => {
        changeTechs(element.selector);
        changeTechsSection(element.section);
    })
});

function changeTechs(spanToActivate) {
    techs.forEach(element => {
        element.selector.classList.remove('active');
    });
    spanToActivate.classList.add('active');
}

function changeTechsSection(sectionToShow) {
    techs.forEach(element => {
        element.section.classList.add('hidden');
    });
    sectionToShow.classList.remove('hidden');
}

