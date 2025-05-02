const items = document.querySelectorAll('.item');

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            items.forEach((item, i) => {
                setTimeout(() => {
                    item.classList.add('visible');
                }, i * 100); // 100ms entre cada uno
            });
            observer.disconnect(); // si solo quieres que se animen una vez
        }
    });
}, {
    threshold: 0.1
});

items.forEach(item => observer.observe(item));