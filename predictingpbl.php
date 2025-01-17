<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Ayurvedic disease prediction based on symptoms">
  <title>Swasthya Ayu - Disease Prediction</title>
  <link rel="stylesheet" href="predictingcss.css">
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
      <h1>Disease Prediction Based on Symptoms</h1>

      <form action="predictingpbl.php" method="POST">
        <fieldset class="box">
          <label for="symptoms">Enter Your Symptoms:</label>
          <textarea name="symptoms" id="symptoms" placeholder="Describe your symptoms..."><?php echo isset($_POST['symptoms']) ? htmlspecialchars($_POST['symptoms']) : ''; ?></textarea>
          <button type="submit">Predict Disease</button>
        </fieldset>
      </form>

      <?php
      // Database connection
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "swasthyaayu_login"; // Updated database name

      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      // Function to fetch diseases based on symptoms
      function predictDisease($symptoms) {
          global $conn;

          $predictedDiseases = [];

          // Split symptoms by comma and trim spaces
          $symptomsArray = explode(',', $symptoms);
          $symptomsArray = array_map('trim', $symptomsArray);

          // Loop through symptoms and match diseases
          foreach ($symptomsArray as $symptom) {
              $sql = "SELECT DISTINCT disease FROM prediction WHERE symptom LIKE ?";
              $stmt = $conn->prepare($sql);
              $stmt->bind_param("s", $symptom);
              $stmt->execute();
              $result = $stmt->get_result();

              while ($row = $result->fetch_assoc()) {
                  // Ensure no duplicates are added
                  if (!in_array($row['disease'], $predictedDiseases)) {
                      $predictedDiseases[] = $row['disease'];
                  }
              }
          }

          return $predictedDiseases; // Return the diseases found
      }

      // Handle form submission
      if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['symptoms'])) {
          $symptoms = $_POST['symptoms'];

          if (empty($symptoms)) {
              echo "<p>Please enter symptoms.</p>";
          } else {
              // Fetch predicted diseases
              $predictedDiseases = predictDisease($symptoms);

              // Check if diseases are found
              if (count($predictedDiseases) > 0) {
                  $diseasePrediction = implode(', ', $predictedDiseases);
              } else {
                  $diseasePrediction = "No diseases found for the given symptoms.";
              }
          }
      }

      $conn->close();
      ?>

      <?php if (isset($diseasePrediction)): ?>
        <div id="result">
          <h2>Predicted Disease:</h2>
          <p><?php echo htmlspecialchars($diseasePrediction); ?></p>
        </div>
      <?php endif; ?>

    </section>
  </main>

  <footer>
    <p>&copy; 2024 Swasthya Ayu - Empowering Ayurvedic Healing</p>
  </footer>
</body>
</html>
