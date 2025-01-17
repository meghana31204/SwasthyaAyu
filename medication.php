<?php
// Database connection
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'swasthyaayu_login';

$conn = new mysqli($host, $user, $password, $dbname);

// Check for connection error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$response = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $symptom = $conn->real_escape_string($_POST['symptom']);
    $age = $conn->real_escape_string($_POST['age']);
    $severity = $conn->real_escape_string($_POST['severity']);
    $dosha = $conn->real_escape_string($_POST['dosha']);

    $query = "SELECT medication_name, intake_instructions, intake_frequency, suggested_remedies 
              FROM medication 
              WHERE symptom LIKE '%$symptom%' 
              AND age_group = '$age' 
              AND severity_level = '$severity' 
              AND dosha_type = '$dosha'";

    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $response .= "<h3 class='text-lg font-bold mb-2'>Recommended Ayurvedic Treatment</h3><ul class='list-disc pl-5'>";
        while ($row = $result->fetch_assoc()) {
            $response .= "
                <li><strong>Medication:</strong> {$row['medication_name']}</li>
                <li><strong>Intake Instructions:</strong> {$row['intake_instructions']}</li>
                <li><strong>Intake Frequency:</strong> {$row['intake_frequency']}</li>
                <li><strong>Suggested Remedies:</strong> {$row['suggested_remedies']}</li>
                <hr>";
        }
        $response .= "</ul>";
    } else {
        $response = "<p class='text-red-500'>No remedies found for the given input.</p>";
    }
    echo $response;
    exit;
}
?>
   

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Ayurvedic medication prescription for diseases">
  <title>Swasthya Ayu - Personalized Ayurvedic Treatment</title>
  <link rel="stylesheet" href="medication.css">
  <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>

		<header>
		<nav class="flex items-center text-black">
			<div class="logo-container flex items-center">
				<img src="https://www.pngarts.com/files/12/Ayurveda-Logo-Free-PNG-Image.png" class="logo-image" alt="AyuCare Logo" />
				<h2 class="logo-text">Swasthya Ayu</h2>
			</div>
			<div class="top-9 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 shadow-xl">
				<ul class="flex-1 text-center text-black">
					<li class="list-none inline-block px-5 text-lg leading-lg hover:underline hover:bg-gray-200 hover:font-bold hover:rounded-full">
						<a href="predictingpbl.php" class="no-underline px-2">Predict condition</a>
					</li>
					<li class="list-none inline-block px-5 text-lg leading-lg hover:underline hover:bg-gray-200 hover:font-bold hover:rounded-full">
						<a href="medication.php" class="no-underline px-2">Prescribe Medicine</a>
					</li>
					<li class="list-none inline-block px-5 text-lg leading-lg hover:underline hover:bg-gray-200 hover:font-bold hover:rounded-full">
						<a href="Tips and Articles.php" class="no-underline px-2">Wellness Tips</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

  <main>
    <section class="container">
      <h1>Personalized Ayurvedic Treatment</h1>
      <p style="text-align:center;">Fill in the details below to get Ayurvedic remedies tailored to your symptoms.</p>
	
      <form id="medicationForm">
	  <fieldset class="box">
        <label for="symptom">Symptom:</label>
        <input type="text" id="symptom" name="symptom" placeholder="Enter your symptom" required><br>

        <label for="age">Age Group:</label>
        <select id="age" name="age" required>
          <option value="">Select age group</option>
          <option value="0-12">0-12 years</option>
          <option value="13-18">13-18 years</option>
          <option value="19-30">19-30 years</option>
          <option value="31-40">31-40 years</option>
          <option value="40+">40+ years</option>
        </select>
		<br>
        <label for="severity">Severity Level:</label>
        <input type="range" id="severity" name="severity" min="1" max="3" value="1">
        <span id="severityLevel">1</span>
		<br>
        <label for="dosha">Ayurvedic Dosha Type:</label>
        <select id="dosha" name="dosha" required>
          <option value="">Select Dosha Type</option>
          <option value="vata">Vata</option>
          <option value="pitta">Pitta</option>
          <option value="kapha">Kapha</option>
          <option value="unaware">Unaware about Doshas</option>
        </select>
		<br>
        <button type="submit">Get Remedies</button>

      <div id="resultSection" class="hidden">
        <h2><b>Recommended Ayurvedic Treatment</b></h2>
        <p><strong>Symptom:</strong> <span id="resultSymptom"></span></p>
        <p><strong>Age Group:</strong> <span id="resultAge"></span></p>
        <p><strong>Severity Level:</strong> <span id="resultSeverity"></span></p>
        <p><strong>Dosha Type:</strong> <span id="resultDosha"></span></p>
        <h3><strong>Suggested Remedies:</strong></h3>
        <ul id="resultRemedies">
          <li>No remedies found yet. Please fill the form above.</li>
        </ul>
      </div>
    </section>
	<fieldset>
	</form>
  </main>

  <footer>
    <p>&copy; 2024 Swasthya Ayu - Empowering Ayurvedic Healing</p>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  // Update severity level display
  document.getElementById("severity").addEventListener("input", function () {
    document.getElementById("severityLevel").innerText = this.value;
  });

  // Handle form submission using AJAX
  $("#medicationForm").on("submit", function (e) {
    e.preventDefault(); // Prevent form from submitting traditionally

    $.ajax({
      url: "", // Current PHP file
      method: "POST",
      data: $(this).serialize(),
      success: function (response) {
        // Show the result section and display the response
        $("#resultSection").removeClass("hidden").html(response);
      },
      error: function () {
        alert("Error fetching data. Please try again.");
      }
    });
  });
</script>

</body>
</html>
