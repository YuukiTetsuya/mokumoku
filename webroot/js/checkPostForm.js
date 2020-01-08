$("#index-check").submit(function () {
    const str = $('input[name="mokumokuname"]').val();
    if (str == '') {
        $("#validate-null").removeClass("validate-null");
        return false;
    } else {
        $("#validate-null").addClass("validate-null");
    }
})

$("#index-check").submit(function () {
    const moku = $('input[name="mokumokuname"]').val();
    const sche = $('input[name="schedule"]').val();
    const contents = $('textarea[name="contents"]').val();
    const rule = $('input[name="rule"]').val();
    const ssid = $('input[name="ssid"]').val();
    const pass = $('input[name="pass"]').val();
    if (moku.match(/(<|>|&|"|'|\u005c|\u0020)/) || sche.match(/(<|>|&|"|'|\u005c|\u0020)/) || contents.match(/(<|>|&|"|'|\u005c|\u0020)/) || rule.match(/(<|>|&|"|'|\u005c|\u0020)/) || ssid.match(/(<|>|&|"|'|\u005c|\u0020)/) || pass.match(/(<|>|&|"|'|\u005c|\u0020)/)) {
        $("#validate").removeClass("validate");
        return false;
    } else {
        $("#validate").addClass("validate");
    }
});

$('.slider').slick();