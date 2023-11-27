function handleFileInputChange(event, imgElementId) {
    var input = event.target;

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            document.getElementById(imgElementId).src = e.target.result;
        };

        reader.readAsDataURL(input.files[0]);
    }
}

document.getElementById('gambar').addEventListener('change', function (event) {
    handleFileInputChange(event, 'showimg');
});

document.getElementById('gambar2').addEventListener('change', function (event) {
    handleFileInputChange(event, 'showimg2');
});
