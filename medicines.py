from flask import Flask, request, render_template

app = Flask(__name__)

# Symptom-disease mapping
symptoms_diseases = {
    "fever": "Malaria",
    "cough": "Common Cold",
    "headache": "Migraine",
    "fever, body pain": "Dengue"
}

@app.route('/', methods=['GET', 'POST'])
def home():
    disease = None  # Default value for the disease
    if request.method == 'POST':
        # Get the user symptoms from the form
        user_symptoms = request.form['symptoms'].lower()
        
        # Match symptoms with diseases
        disease = symptoms_diseases.get(user_symptoms, "No matching disease found. Please consult a doctor.")
    
    # Render the same page with the result
    return render_template('index.html', disease=disease)

if __name__ == '__main__':
    app.run(debug=True)
