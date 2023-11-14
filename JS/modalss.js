var modal = document.getElementById("myModal");
var modal2 = document.getElementById("myModal2");

function openModal(target) {
  target.style.display = "block";
}


function closeModal(target) {
  target.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}

//Kirim data Ke Modal

$(document).ready(function () {
  $('.btnupdate').click(function () {
      var idexc = $(this).data('idexc');
      var exerciseName = $(this).data('namaex');
      var waktuset = $(this).data('waktu-set');
      var reps = $(this).data('rep');

      $('#myModal2 h2').html('Edit Data: ' + exerciseName);
      $('#myModal2 #idexc').val(idexc);
      $('#myModal2 #nama_exercise').val(exerciseName);
      $('#myModal2 #waktuset').val(waktuset);
      $('#myModal2 #reps').val(reps);

      openModal(myModal2);
  });

});







