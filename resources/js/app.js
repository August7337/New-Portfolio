import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Manage Techs Section
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

// Mobile Menu Toggle
document.addEventListener('DOMContentLoaded', () => {
    const burgerBtn = document.getElementById('burgerBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const burgerIcon = document.getElementById('burgerIcon');

    if (!burgerBtn || !mobileMenu) return;

    burgerBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');

        if (burgerIcon.classList.contains('fa-bars')) {
            burgerIcon.classList.remove('fa-bars');
            burgerIcon.classList.add('fa-xmark');
        } else {
            burgerIcon.classList.remove('fa-xmark');
            burgerIcon.classList.add('fa-bars');
        }
    });

    mobileMenu.querySelectorAll('a[href^="#"]').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
            if (burgerIcon) {
                burgerIcon.classList.remove('fa-xmark');
                burgerIcon.classList.add('fa-bars');
            }
        });
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            mobileMenu.classList.add('hidden');
            if (burgerIcon) {
                burgerIcon.classList.remove('fa-xmark');
                burgerIcon.classList.add('fa-bars');
            }
        }
    });
});


// Twemoji Parsing
document.addEventListener('DOMContentLoaded', function() {
    twemoji.parse(document.body);
});
