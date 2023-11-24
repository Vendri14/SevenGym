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

function updateDates() {
  // Get the input value
  var monthsInput = document.getElementById('months_input').value;

  // Get the current date
  var currentDate = new Date();

  // Calculate the date one month later
  var oneMonthLater = new Date();
  oneMonthLater.setMonth(oneMonthLater.getMonth() + parseInt(monthsInput));

  var totalPrice = parseInt(monthsInput) * 150000;

  // Display the dates
  document.getElementById('currentDate').innerHTML = 'Tanggal Berlangganan </br> ' + currentDate.toISOString().slice(0, 10) + ' - ' + oneMonthLater.toISOString().slice(0, 10);
  document.getElementById('totalPrice').innerHTML = 'Total Price: </br> Rp ' + totalPrice;

  document.getElementById('currentDateInput').value = currentDate.toISOString().slice(0, 10);
  document.getElementById('oneMonthLaterInput').value = oneMonthLater.toISOString().slice(0, 10);
  document.getElementById('totalPriceInput').value = totalPrice;
}


function updateDates2() {
  // Get the input value
  var monthsInput = document.getElementById('months_input2').value;

  // Get the current date
  var currentDate = new Date();

  // Calculate the date one month later
  var oneMonthLater = new Date();
  oneMonthLater.setMonth(oneMonthLater.getMonth() + parseInt(monthsInput));

  var totalPrice = parseInt(monthsInput) * 150000;

  // Display the dates
  document.getElementById('currentDate2').innerHTML = 'Tanggal Berlangganan </br> ' + currentDate.toISOString().slice(0, 10) + ' - ' + oneMonthLater.toISOString().slice(0, 10);
  document.getElementById('totalPrice2').innerHTML = 'Total Price: </br> Rp ' + totalPrice;

  document.getElementById('currentDateInput2').value = currentDate.toISOString().slice(0, 10);
  document.getElementById('oneMonthLaterInput2').value = oneMonthLater.toISOString().slice(0, 10);
  document.getElementById('totalPriceInput2').value = totalPrice;
}






