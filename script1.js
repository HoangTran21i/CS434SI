// Smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();

        const target = document.querySelector(this.getAttribute('href'));
        if (target) { // Kiểm tra xem phần tử có tồn tại
            target.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});

// Active state on scroll
window.addEventListener('scroll', function() {
    let sections = document.querySelectorAll('section');
    let navLinks = document.querySelectorAll('nav ul li a');

    sections.forEach(section => {
        let top = window.scrollY;
        let offset = section.offsetTop - 150;
        let height = section.offsetHeight;
        let id = section.getAttribute('id');

        if (top >= offset && top < offset + height) {
            navLinks.forEach(link => {
                link.classList.remove('active');
            });
            const activeLink = document.querySelector(`nav ul li a[href*="${id}"]`);
            if (activeLink) {
                activeLink.classList.add('active');
            }
        }
    });
});

// AJAX form submission
const form = document.querySelector('form');
if (form) { // Kiểm tra xem phần tử form có tồn tại
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        let formData = new FormData(form);
        fetch('submit.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            alert('Form submitted successfully!');
        })
        .catch(error => {
            alert('There was an error submitting the form.');
        });
    });
}
