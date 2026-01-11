document.addEventListener('DOMContentLoaded', function () {
    var toast = document.getElementById('flash-toast');
    if (!toast) return;
    // show animation
    requestAnimationFrame(function () { toast.classList.add('show'); });
    var close = toast.querySelector('.flash-close');
    function hide() { toast.classList.remove('show'); setTimeout(function () { if (toast && toast.parentNode) toast.parentNode.removeChild(toast); }, 300); }
    close && close.addEventListener('click', hide);
    // auto dismiss after 4s
    setTimeout(hide, 4000);
});
