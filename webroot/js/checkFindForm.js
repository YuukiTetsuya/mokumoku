function check() {
    var a = document.search_form.search.value;
    if (a == "") {
        document.getElementById('check-msg').style.display = 'block';
        document.getElementById('check-msg').style.animation = 'fadeIn 0.8s ease 0s 1 normal';
        return false;
    } else if (a.match(/(<|>|&|"|'|\u005c|\u0020)/)) {
        document.getElementById('check-vali-msg').style.display = 'block';
        document.getElementById('check-vali-msg').style.animation = 'fadeIn 0.8s ease 0s 1 normal';
        return false;
    } else if (!a.match(/\S/g)) {
        return false;
    }
}