$("#index-check").submit(function () {
    const value = $('input[name="mokumokuname"]').val();
    if (value.match(/(<|>|&|"|'|\u005c|\u0020)/)) {
        $("#validate").removeClass("validate");
        return false;
    } else {
        $("#index-check").submit();
    }
});

$('.slider').slick();