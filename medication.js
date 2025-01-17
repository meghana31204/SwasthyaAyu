document.getElementById('severity').addEventListener('input', function () {
  document.getElementById('severityLevel').textContent = this.value;
});

document.getElementById('medicationForm').addEventListener('submit', function (event) {
  event.preventDefault();

  const symptom = document.getElementById('symptom').value;
  const age = document.getElementById('age').value;
  const severity = document.getElementById('severity').value;
  const dosha = document.getElementById('dosha').value;

  // Mock Ayurvedic remedies based on symptom and dosha
  const remedies = {
    vata: ['Abhyanga (oil massage)', 'Warm foods', 'Ginger tea'],
    pitta: ['Aloe vera juice', 'Cooling drinks', 'Meditation'],
    kapha: ['Triphala', 'Dry brushing', 'Spices like turmeric and pepper'],
    unaware: ['General balanced diet', 'Yoga', 'Herbal teas'],
  };

  // Populate result section
  document.getElementById('resultSymptom').textContent = symptom || 'N/A';
  document.getElementById('resultAge').textContent = age || 'N/A';
  document.getElementById('resultSeverity').textContent = severity || 'N/A';
  document.getElementById('resultDosha').textContent = dosha || 'N/A';

  const resultRemedies = remedies[dosha] || ['No remedies found for the selected dosha.'];
  document.getElementById('resultRemedies').innerHTML = resultRemedies.map((remedy) => `<li>${remedy}</li>`).join('');

  document.getElementById('resultSection').classList.remove('hidden');
});
