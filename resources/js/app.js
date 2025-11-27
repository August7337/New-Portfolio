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

// Project Tag Filtering
document.addEventListener("DOMContentLoaded", () => {
    const buttons = Array.from(document.querySelectorAll(".tag-btn"));
    const cards = Array.from(document.querySelectorAll(".project-card"));

    const allBtn = buttons.find(b => b.dataset.tag === "all");
    if (allBtn) {
        buttons.forEach(b => b.classList.remove("bg-blue-500", "text-white"));
        allBtn.classList.add("bg-blue-500", "text-white");
    }

    const normalize = (s) => (s ?? "").toString().trim().toLowerCase();

    buttons.forEach(button => {
        button.addEventListener("click", () => {
            const selectedTag = normalize(button.dataset.tag);

            cards.forEach(card => {
                const raw = card.dataset.tags ?? "";
                const cardTags = raw.split(" ").map(t => normalize(t)).filter(Boolean);

                if (selectedTag === "all" || cardTags.includes(selectedTag)) {
                    card.style.display = "";
                } else {
                    card.style.display = "none";
                }
            });

            buttons.forEach(btn => btn.classList.remove("bg-blue-300/50", "text-white"));
            button.classList.add("bg-blue-300/50", "text-white");
        });
    });
});
