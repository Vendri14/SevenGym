document.getElementById('gambar').addEventListener('change', function (event) {
    var input = event.target;

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            document.getElementById('showimg').src = e.target.result;
        }; 

        reader.readAsDataURL(input.files[0]);
    }
});
