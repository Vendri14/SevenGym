<!DOCTYPE html>
<html>
<head>
  <style>
    /* Styling for the modal */
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.7);
      z-index: 1;
    }
    
    /* Styling for the modal content */
    .modal-content {
      background-color: #fff;
      width: 50%;
      margin: 15% auto;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }
  </style>
</head>
<body>

<!-- Button to trigger the pop-up -->
<button onclick="openModal()">Open Pop-up</button>

<!-- The modal -->
<div id="myModal" class="modal">
  <div class="modal-content">
    <span onclick="closeModal()" style="float: right; cursor: pointer;">&times;</span>
    <h2>Pop-up Content</h2>
    <p>This is a simple pop-up created with HTML and JavaScript.</p>
  </div>
</div>

<script>
// Get references to the modal and the button that opens it
var modal = document.getElementById("myModal");

// Function to open the modal
function openModal() {
  modal.style.display = "block";
}

// Function to close the modal
function closeModal() {
  modal.style.display = "none";
}

// Close the modal if the user clicks outside of it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
