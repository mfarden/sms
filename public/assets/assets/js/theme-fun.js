$(document).ready(function () {


  // **************
  // Profoilo 
  // **************
  $(".profile-bx").on("click", function (e) {
    e.stopPropagation();
    $(this).find(".profile-dropdown-bx").toggle();
  });

  // Hide dropdown when clicking outside
  $(document).on("click", function () {
    $(".profile-dropdown-bx").hide();
  });


  // **************
  // Drak Mode
  // **************
  $("#darkToggle").on("click", function () {
    $("body").toggleClass("dark-mode");
    if ($("body").hasClass("dark-mode")) {
      $("#darkIcon").removeClass("bx-moon").addClass(" bx-sun");
    } else {
      $("#darkIcon").removeClass("bx-sun").addClass("bx-moon");
    }
  });

  // **************
  // Menu icon 
  // **************
  $('.menu-icon').click(function () {
    $('.sidebar , .content-bx ').toggleClass("open");
    return false;
  });
const ctx = $("#barChart");

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun","July","August","september","Novmber","December"],
            datasets: [
                {
                    label: "Sales 2024",
                    data: [12, 19, 13, 15, 22, 30,15, 22, 30,20,17],
                    backgroundColor: "rgba(54, 162, 235, 0.7)",
                    borderColor: "rgb(54, 162, 235)",
                    borderWidth: 2
                },
                {
                    label: "Sales 2025",
                    data: [14, 15, 10, 25, 20, 28, 15, 10, 25, 20, 28],
                    backgroundColor: "rgba(255, 99, 132, 0.7)",
                    borderColor: "rgb(255, 99, 132)",
                    borderWidth: 2
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            barPercentage: 0.6,
            categoryPercentage: 0.5
        }
    });

});

$('#summernote').summernote({
  height: 120,
  fontNames: ['Poppins'],
  fontNamesIgnoreCheck: ['Poppins'],
  BackgroundColor: ['color']

});




const imageInput = $("#image-input");
const imageWrapper = $("#image-wrapper");
const removeIcon = $(".remove-icon"); // Select remove (cut) icon
const editIcon = $(".edit-icon"); // Select edit icon
const placeholder = $(".image-placeholder"); // Select placeholder

// Handle file selection
imageInput.change(function (event) {
  const file = event.target.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function (e) {
      imageWrapper.html(`
                    <img id="preview-image" class="card-img img-fluid" style="max-width: 100%;" src="${e.target.result}" alt="">
                `);
      removeIcon.show(); // Show remove icon
      editIcon.show(); // Show edit icon
      placeholder.hide(); // Hide placeholder
    };
    reader.readAsDataURL(file);
  }
});

// Click edit icon to open file input
editIcon.click(function () {
  imageInput.click();
});

// Click remove (cut) icon to remove image
removeIcon.click(function () {
  imageWrapper.html('<div class="image-placeholder"></div>'); // Restore placeholder
  imageInput.val(""); // Reset input
  removeIcon.hide(); // Hide remove icon
  editIcon.hide(); // Hide edit icon
  placeholder.show(); // Show placeholder again
});

// Ensure icons are hidden initially
$(document).ready(function () {
  removeIcon.hide();
  editIcon.hide();
});