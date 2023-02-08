const burger = document.getElementById('bar-checkbox');
const sidebar = document.getElementsByClassName('sidebar')[0];

burger.addEventListener('click', function() {
    sidebar.classList.toggle('hide');
})