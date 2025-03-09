// Für die aufklappbaren Elemente
document.querySelectorAll('.accordion').forEach(item => {
    item.addEventListener('click', () => {
        item.classList.toggle('active');
    });
});
