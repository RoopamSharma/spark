<div id="timer"></div>


<script>
$(document).ready(function () {
    $('#timer').countdown({
        until: new Date(2020, 8 - 1, 8),
        compact: true
    });
});
</script>