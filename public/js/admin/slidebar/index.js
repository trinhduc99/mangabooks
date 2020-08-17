$(function () {
    $('#logout').click(function () {
        if (confirm('Are you sure to logout')) {
            event.preventDefault();
            document.getElementById('logout-form').submit();
        }
    });
});
