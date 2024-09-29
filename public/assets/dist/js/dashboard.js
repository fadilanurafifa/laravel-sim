document.getElementById('menu-checkbox').addEventListener('change', function() {
    const sidebar = document.querySelector('.sidebar');
    if (this.checked) {
        sidebar.classList.remove('closed');
        sidebar.classList.add('open');
    } else {
        sidebar.classList.remove('open');
        sidebar.classList.add('closed');
    }
});
document.getElementById('menu-checkbox').addEventListener('change', function() {
    const sidebar = document.querySelector('.sidebar');

    if (this.checked) {
        sidebar.classList.remove('closed');
    } else {
        sidebar.classList.add('closed');
    }
});
