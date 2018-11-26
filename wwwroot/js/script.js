document.getElementById('TextField').addEventListener('input', e => {
    var button = document.getElementById('SendButton');
    var field = document.getElementById('TextField');

    if (field.value == "" || field.value == null) {
        button.disabled = true;
    } else {
        button.disabled = false;
    }
})