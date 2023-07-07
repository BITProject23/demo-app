<!DOCTYPE html>
<html>
<head>
  <title>Dropdown List Example</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  <h1>Dropdown List Example</h1>

  <select id="myDropdown">
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
    <option value="3">Option 3</option>
  </select>

  <div id="dataContainer"></div>

  <script>
  $(document).ready(function() {
    // Select the first option on page load
    $('#myDropdown').val($('#myDropdown option:first').val());

    // Load data based on selected option
    $('#myDropdown').change(function() {
      var selectedValue = $(this).val();
      loadData(selectedValue);
    });

    // Function to load data via Ajax
    function loadData(value) {
      $.ajax({
        url: "<?php echo base_url('load_data'); ?>",
        method: "POST",
        data: { selectedValue: value },
        dataType: "html",
        success: function(response) {
          $('#dataContainer').html(response);
        },
        error: function(xhr, status, error) {
          console.log(xhr.responseText);
        }
      });
    }

    // Load data for the initially selected option
    var initialSelectedValue = $('#myDropdown').val();
    loadData(initialSelectedValue);
  });
  </script>
</body>
</html>
