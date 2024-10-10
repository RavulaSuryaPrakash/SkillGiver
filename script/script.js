// script.js
document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('nav a');
    const sections = document.querySelectorAll('main section');

    links.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();

            // Hide all sections
            sections.forEach(section => section.classList.add('hidden'));

            // Show the clicked section
            const sectionId = link.getAttribute('data-section');
            document.getElementById(sectionId).classList.remove('hidden');
        });
    });
})