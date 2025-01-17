<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Specialties</title>
	<link rel="Stylesheet" href="alerts.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- Bootstrap CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

	<!-- Bootstrap JavaScript -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
	<!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Medical Specialties</h2>
        <ul>
            <li onclick="showContent('default')">Health Tips</li>
            <li onclick="showContent('cardiology')">Cardiology</li>
            <li onclick="showContent('neurology')">Neurology</li>
            <li onclick="showContent('pulmonology')">Pulmonology</li>
            <li onclick="showContent('dermatology')">Dermatology</li>
            <li onclick="showContent('urology')">Urology</li>
            <li onclick="showContent('pediatrics')">Pediatrics</li>
            <li onclick="showContent('Orthopedics')">Orthopedics</li>
            <li onclick="showContent('hematology')">Hematology</li>
        </ul>
    </div>
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
						<a href="Tips and Articles.php" class="no-underline px-2">Wellness tips</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
    <!-- Content Area -->
    <div class="content">
        <div id="default">
            <h2 class="john">Health Tips</h2>
			<p class="slogan" > "Your health is your greatest asset. Prioritize it through nutritious eating, regular exercise, and a positive mindset for a vibrant life."</p>
            <p style="font-family:bold"> STAY HEALTHY </P>
            <ol>
                <li class="Tips">Follow A Balanced Diet Plan</li>
				<img class="tip_img" src="https://batonrougeclinic.com/wp-content/uploads/2021/10/Baldwin-10.-The-Pros-and-Cons-of-Vegetarian-Diets.jpg" alt="Diet">
                <p class="tip_para"> Following a balanced diet plan is essential for overall health. Incorporate a variety of foods, including fruits, vegetables, whole grains, lean proteins, and healthy fats. Stay hydrated and limit processed foods and sugars. Consistent, mindful eating promotes energy, improves mood, and supports long-term well-being for a healthier lifestyle.</p>
				<li class="Tips">A Regular Exercise Routine Is The Key</li>
				<img class="tip_img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVmC2y4NOt2HpHCkimcx17VxyrMvsP2Vc74g&s" alt="Exercise">
				<p class="tip_para">Regular exercise is crucial for maintaining physical and mental health. Aim for at least 150 minutes of moderate activity each week, including aerobic and strength-training exercises. It boosts energy levels, enhances mood, improves cardiovascular health, and supports weight management. Consistent physical activity leads to a healthier, happier life overall. </p>
                <li class="Tips">Stay hydrated</li>
				<img class="tip_img" src="https://s.abcnews.com/images/Health/gty_drinking_water_mi_130719_16x9_992.jpg" alt="water">
				<p class="tip_para">Staying hydrated is essential for optimal health. Aim to drink at least eight glasses of water daily, adjusting for activity levels and climate. Proper hydration supports digestion, regulates body temperature, and enhances physical performance. Incorporate water-rich foods and limit sugary beverages to maintain hydration and overall well-being effectively.</p>
                <li class="Tips">Get enough sleep</li>
				<img class="tip_img" src="https://nouvelles.umontreal.ca/fileadmin/_processed_/csm_20221020_Sommeil_f7c8605170.jpg" alt="Sleep">
                <p class="tip_para">Getting enough sleep is essential for overall health and well-being. Aim for 7 to 9 hours of quality sleep each night to support physical recovery, improve cognitive function, and enhance mood. Establish a consistent sleep schedule, create a relaxing bedtime routine, and minimize distractions to promote restful sleep for a healthier life.</p>
				<li class="Tips">Manage stress.</li>
				<img class="tip_img" src="https://cdn.prod.website-files.com/620e4101b2ce12a1a6bff0e8/63bc1fffef375305987d272a_Tips%20for%20Stress%20Management%20for%20Students.webp" alt="stress">
				<p class="tip_para">Managing stress is vital for maintaining mental and emotional well-being. Identify stressors and implement effective coping strategies such as mindfulness, deep breathing exercises, and physical activity. Prioritize time for relaxation and hobbies, maintain a supportive social network, and ensure a balanced lifestyle to reduce stress and improve overall quality of life.</p>
			</ol>
			
            <h2>Recommended Yoga Asanas</h2>
            <ol>
                <li class="Tips">Corpse Pose | Savasana</li>
				<img class="tip_img" src="https://pixahive.com/wp-content/uploads/2021/02/Savasana-Corpse-Pose-356990-pixahive.jpg" alt="savasana" >
                <p class="tip_para"> <p>
						Corpse Pose (Savasana) is a vital yoga posture that offers numerous benefits for both the body and mind. 
						It promotes deep relaxation, helping to reduce stress and tension. By calming the mind, Savasana enhances 
						focus and mental clarity while encouraging mindfulness and self-awareness.
					</p>
					<h3>Benefits of Savasana:</h3>
					<ul>
						<li>Helps the body and mind relax deeply.</li>
						<li>Enhances concentration and mental clarity.</li>
						<li>Encourages mindfulness and self-awareness.</li>
						<li>Aids in recovery after intense yoga practices.</li>
						<li>Combats fatigue and rejuvenates energy levels.</li>
						<li>Promotes a sense of overall well-being.</li>
					</ul></p>
				<li class="Tips">Tree pose | Vrikshasana</li>
				<img class="tip_img" src="https://cdn.yogajournal.com/wp-content/uploads/2022/01/Tree-Pose_Alt-1_2400x1350_Andrew-Clark.jpeg" alt="Tree pose">
                <p class="tip_para"> <p>
						Tree Pose (Vrksasana) is a standing yoga posture that enhances balance, strength, and focus. 
						In this pose, you stand on one leg while placing the opposite foot on your inner thigh or calf (avoid the knee). 
						Bring your hands together at your heart or raise them overhead. This pose promotes stability, grounding, 
						and mental clarity.
					</p>
					<h3>Benefits of Tree Pose:</h3>
					<ul>
						<li>Enhances stability and coordination.</li>
						<li>Builds strength in the legs and core.</li>
						<li>Encourages concentration and mental clarity.</li>
						<li>Helps develop better posture and alignment.</li>
						<li>Connects you with the earth, promoting a sense of stability.</li>
					</ul></p>
				<li class="Tips">Bridge Pose | Setu Bandhasana</li>
				<img class="tip_img" src="https://www.gaia.com/wp-content/uploads/Bridge_DaynaSeraye-768x432.jpg" alt="bridge pose"> 
                <p class="tip_para"> <p>
						Bridge Pose (Setu Bandhasana) is a gentle backbend that stretches the chest, neck, and spine while 
						strengthening the back, glutes, and legs. To practice this pose, lie on your back with your knees bent 
						and feet flat on the floor, hip-width apart. Press your feet into the ground, lift your hips towards 
						the ceiling, and clasp your hands beneath your back. This pose promotes relaxation, improves posture, 
						and opens the heart.
					</p>
					<h3>Benefits of Bridge Pose:</h3>
					<ul>
						<li>Enhances strength in the back, glutes, and legs.</li>
						<li>Opens up the chest and shoulders, relieving tension.</li>
						<li>Helps align the spine and improves overall posture.</li>
						<li>Reduces stress and anxiety, promoting relaxation.</li>
						<li>Massages the abdominal organs, aiding digestion.</li>
					</ul></p>
				<li class="Tips">Warrior II | Virabhadrasana II</li>
				<img class="tip_img" src="https://images.squarespace-cdn.com/content/v1/5f05cbb2fcd06836468dcd08/1619646401349-FC9IWXR4AJE9OJH11T7B/How-To-Do-Warrior-II-Pose" alt="warrior">
                <p class="tip_para"> <p>
						Warrior II (Virabhadrasana II) is a powerful standing pose that builds strength, stamina, and concentration. 
						To practice this pose, start in a standing position, step one foot back while bending the front knee at a 90-degree angle. 
						Extend your arms parallel to the floor, with palms facing down. Gaze over your front fingertips. This pose enhances 
						physical and mental endurance, promotes confidence, and opens the hips and chest.
					</p>
					<h3>Benefits of Warrior II:</h3>
					<ul>
						<li>Strengthens the legs, core, and upper body.</li>
						<li>Improves endurance and stability in the body.</li>
						<li>Encourages a sense of empowerment and assertiveness.</li>
						<li>Increases flexibility and opens the heart space.</li>
						<li>Enhances concentration and mental clarity.</li>
					</ul> </p>
				<li class="Tips"> Locust Pose | Salabhasana</li>
				<img class="tip_img" src="https://www.everydayyoga.com/cdn/shop/articles/Yoga_How-to-do-Locust-Pose_01_300x350_845cb895-d46b-4965-8c39-4b937f0a7894_grande.jpg?v=1558424585" alt="5th pose">
				<p class="tip_para">  <p>
						Locust Pose (Salabhasana) is a backbending yoga posture that strengthens the back, glutes, and legs while 
						stretching the chest and shoulders. To practice this pose, lie flat on your stomach with your arms at your 
						sides. As you inhale, lift your head, chest, and legs off the ground, keeping your arms alongside your body. 
						Hold this position while engaging your back muscles and breathing deeply. This pose promotes flexibility in 
						the spine, improves posture, and energizes the body.
					</p>
					<h3>Benefits of Locust Pose:</h3>
					<ul>
						<li>Builds strength in the lower back and spinal muscles.</li>
						<li>Increases flexibility in the spine and hips.</li>
						<li>Encourages better posture by opening the chest and shoulders.</li>
						<li>Aids digestion and improves circulation to abdominal organs.</li>
						<li>Energizes the body and reduces fatigue.</li>
					</ul></p>
            </ol>
        </div>
        <!-- Cardiology Content -->
        <div id="cardiology" class="hidden">
            <h1 class="logy_heading">Cardiology</h1>
            <h2>What is Cardiology? </h2>
			<p class="tip_para"> Cardiology is the branch of medicine focused on the study and treatment of disorders related to the heart and blood vessels. It encompasses a wide range of conditions, including coronary artery disease, heart rhythm disorders (arrhythmias), heart failure, and congenital heart defects. Individuals experiencing symptoms such as chest pain, shortness of breath, or irregular heartbeats are often referred to a cardiologist for evaluation and treatment.</p>
            <img class="tip_img" src="https://drsanjaykumar.co.in/wp-content/uploads/2021/01/ccc.jpg" alt="heart image">
			<h2><strong> When would I need a cardiologist?</strong></h2>
			<p>If you experience any concerning heart-related symptoms or have risk factors for heart disease, it may be necessary to consult a cardiologist for evaluation and guidance.</p>
				<h4>Symptoms that can indicate a heart problem include:</h4>
				<ul>
					<li>Shortness of breath</li>
					<li>Dizziness</li>
					<li>Chest pains</li>
					<li>Changes in heart rate or rhythm</li>
					<li>High blood pressure</li>
				</ul>

			<h2><strong>Tips to Keep Your Heart Healthy:</strong></h2>
			<img class="tip_img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCFG1yAWhNjyLFlGowyNx5zt2AmHFge9fDiA&s" alt="tips for heart" >
            <ul>
                <li>Exercise regularly to keep your heart strong.</li>
                <li>Maintain a heart-healthy diet rich in whole grains and vegetables.</li>
                <li>Avoid smoking and limit alcohol consumption.</li>
                <li>Monitor your cholesterol and blood pressure levels.</li>
                <li>Reduce stress through activities like meditation and yoga.</li>
            </ul>
			<h2> Food to consume for healthy heart </h2>
			<ol>
				<li class="Tips">Leafy Greens </li>
				<img class="tip_img" src="https://housing.com/news/wp-content/uploads/2022/11/green-leafy-vegetables-compressed.jpg" alt="leafy greens">
				<p class="tip_para"><p>Eating leafy greens is highly beneficial for heart health due to their rich nutrient content. Leafy greens, such as spinach, kale, and Swiss chard, are loaded with essential vitamins, minerals, and antioxidants that support overall health and help reduce the risk of heart disease.</p>
					<ul>
						<li>Lowers bad cholesterol</li>
						<li>Keeps blood pressure healthy</li>
						<li>Helps control weight</li>
						<li>Lowers risk of heart disease</li>
						<li>Provides important nutrients</li>
					</ul>
				</p> 
				<li class="Tips">Nuts</li>
					<img class="tip_img" src="https://baileybariatrics.com/sites/default/files/field/image/GettyImages-695071562.jpg" alt="nuts">
					<p class="tip_para">Nuts, such as almonds and walnuts, are rich in healthy fats, protein, and fiber. They can help lower bad cholesterol and support heart health.</p>
					<ul>
						<li>Lowers cholesterol levels</li>
						<li>Provides healthy fats</li>
						<li>Supports weight management</li>
						<li>Contains antioxidants</li>
						<li>Reduces inflammation</li>
					</ul>

					<li class="Tips">Fatty Fish</li>
					<img class="tip_img" src="https://www.heart.org/-/media/Healthy-Living-Images/Healthy-Eating/salmon_fish_on_a_cutting_board.jpg?h=434&w=750&sc_lang=en" alt="fatty fish">
					<p class="tip_para">Fatty fish, like salmon and mackerel, are excellent sources of omega-3 fatty acids, which are important for heart health and reducing inflammation.</p>
					<ul>
						<li>Reduces triglycerides</li>
						<li>Improves heart rhythm</li>
						<li>Lowers blood pressure</li>
						<li>Supports brain health</li>
						<li>Enhances overall cardiovascular health</li>
					</ul>

					<li class="Tips">Whole Grains</li>
					<img class="tip_img" src="https://assets.clevelandclinic.org/transform/40f5393d-e6d3-4968-90f2-cbd894b67779/wholeGrainProducts-842797430-770x533-1_jpg" alt="whole grains">
					<p class="tip_para">Whole grains, such as brown rice and oats, are high in fiber and nutrients, contributing to better heart health and lower cholesterol levels.</p>
					<ul>
						<li>Promotes heart health</li>
						<li>Helps with digestion</li>
						<li>Regulates blood sugar</li>
						<li>Supports weight management</li>
						<li>Rich in antioxidants</li>
					</ul>

					<li class="Tips">Fruits</li>
					<img class="tips_img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAJm0FxiwJOkKZZclgeBYQRDkuL9L11CWmaw&s" alt="fruits">
					<p class="tips_para">Fruits, like berries and oranges, are packed with vitamins, minerals, and antioxidants that protect the heart and improve overall health.</p>
					<ul>
						<li>Reduces risk of heart disease</li>
						<li>Boosts immune system</li>
						<li>Supports healthy blood pressure</li>
						<li>Improves skin health</li>
						<li>Provides essential vitamins</li>
					</ul>

					<li class="Tips">Legumes</li>
					<img class="tip_img" src="https://i0.wp.com/www.ayurtimes.com/wp-content/uploads/2021/01/Legumes.jpg" alt="legumes">
					<p class="tip_para">Legumes, including beans and lentils, are rich in fiber and protein, making them a great choice for maintaining a healthy heart and managing weight.</p>
					<ul>
						<li>Controls blood sugar levels</li>
						<li>Supports weight loss</li>
						<li>Lowers cholesterol</li>
						<li>Provides plant-based protein</li>
						<li>Enhances gut health</li>
					</ul>
					</div>
        <!-- Neurology Content -->
				<div id="neurology" class="hidden">
					<h1 class="logy_heading">Neurology</h1>
					<h2>What is Neurology?</h2>
					<p class="tip_para">Neurology is the branch of medicine that focuses on the diagnosis and treatment of diseases and disorders affecting the nervous system, which includes the brain, spinal cord, and nerves. Common neurological conditions include headaches, epilepsy, multiple sclerosis, Parkinson's disease, and stroke. Patients experiencing symptoms such as persistent headaches, dizziness, or numbness may be referred to a neurologist for specialized care.</p>
					<img class="tip_img" src="https://www.adhikarilifeline.com/wp-content/uploads/2022/09/neurosurgeon-neurologist-600x380.jpg" alt="neurology image">
					
					<h2><strong>When would I need a neurologist?</strong></h2>
					<p>If you have ongoing neurological symptoms or conditions affecting your nervous system, consulting a neurologist is important for proper evaluation and treatment.</p>
					
					<h4>Symptoms that can indicate a neurological problem include:</h4>
					<ul>
						<li>Persistent headaches</li>
						<li>Dizziness or balance issues</li>
						<li>Numbness or tingling in the limbs</li>
						<li>Seizures or convulsions</li>
						<li>Memory problems or cognitive changes</li>
					</ul>

					<h2><strong>Tips to Keep Your Nervous System Healthy:</strong></h2>
					<img class="tip_img" src="https://img.freepik.com/premium-photo/protection-treatment-brain-prevention-health-neurology-from-diseases_587895-2322.jpg" alt="tips for nervous system health">
					<ul>
						<li>Maintain a balanced diet rich in nutrients.</li>
						<li>Stay physically active to improve blood flow to the brain.</li>
						<li>Get enough sleep to support brain function.</li>
						<li>Manage stress through relaxation techniques.</li>
						<li>Avoid excessive alcohol consumption and smoking.</li>
					</ul>

					<h2>Foods to Consume for a Healthy Nervous System</h2>
					<ol>
						<li class="Tips">Fatty Fish</li>
						<img class="tip_img" src="https://medicaldialogues.in/h-upload/2023/06/15/211874-fish-consumption.webp" alt="fatty fish">
						<p class="tip_para">Fatty fish, such as salmon and trout, are high in omega-3 fatty acids, which are essential for brain health and cognitive function.</p>
						<ul>
							<li>Supports memory and cognitive performance</li>
							<li>Reduces inflammation in the brain</li>
							<li>Improves mood and mental well-being</li>
						</ul>

						<li class="Tips">Blueberries</li>
						<img class="tip_img" src="https://www.health.com/thmb/CtlUl-Ka_h64xiMh7c-eZWvs87c=/724x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-670247782-33772a33262945fc97802b6ddd63e5e0.jpg" alt="blueberries">
						<p class="tip_para">Blueberries are packed with antioxidants that may delay brain aging and improve memory.</p>
						<ul>
							<li>Enhances communication between brain cells</li>
							<li>Improves cognitive function</li>
							<li>Reduces oxidative stress in the brain</li>
						</ul>

						<li class="Tips">Turmeric</li>
						<img class="tip_img" src="https://www.viralspices.com/wp-content/uploads/2022/01/Evaluating-the-Differences-between-Fresh-and-Dried-Turmeric.jpg" alt="turmeric">
						<p class="tip_para">Turmeric contains curcumin, which has anti-inflammatory and antioxidant properties that benefit brain health.</p>
						<ul>
							<li>May improve memory and mood</li>
							<li>Supports the growth of new brain cells</li>
							<li>Reduces the risk of neurodegenerative diseases</li>
						</ul>

						<li class="Tips">Broccoli</li>
						<img class="tip_img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuIlJ4YMCTemRZamCzBUoLWp9ZVfW7ap80wA&s" alt="broccoli">
						<p class="tip_para">Broccoli is high in antioxidants and vitamin K, which is believed to support brain health.</p>
						<ul>
							<li>Improves cognitive function</li>
							<li>Enhances memory</li>
							<li>Provides essential nutrients for brain health</li>
						</ul>

						<li class="Tips">Pumpkin Seeds</li>
						<img class="tip_img" src="https://satvikk.com/wp-content/uploads/2021/12/istockphoto-1175603836-612x612-1.jpg" alt="pumpkin seeds">
						<p class="tip_para">Pumpkin seeds are a rich source of antioxidants and magnesium, which are beneficial for brain health.</p>
						<ul>
							<li>Supports nerve function</li>
							<li>Reduces inflammation</li>
							<li>Improves mood and cognitive function</li>
						</ul>
					</ol>
				</div>

        <!-- Pulmonology Content -->
				<div id="pulmonology" class="hidden">
					<h1 class="logy_heading">Pulmonology</h1>
					<h2>What is Pulmonology?</h2>
					<p class="tip_para">Pulmonology is the branch of medicine that deals with diseases and conditions of the respiratory system, including the lungs, airways, and chest. Common pulmonary disorders include asthma, chronic obstructive pulmonary disease (COPD), lung infections, and pulmonary hypertension. Patients experiencing symptoms such as persistent cough, shortness of breath, or wheezing may be referred to a pulmonologist for specialized care.</p>
					<img class="tip_img" src="https://revere-health.hqdemo.app/wp-content/uploads/iStock-115987328.jpg" alt="pulmonology image">
					
					<h2><strong>When would I need a pulmonologist?</strong></h2>
					<p>If you have ongoing respiratory issues or symptoms indicating lung problems, consulting a pulmonologist is advisable for proper evaluation and treatment.</p>
					
					<h4>Symptoms that can indicate a pulmonary problem include:</h4>
					<ul>
						<li>Chronic cough</li>
						<li>Shortness of breath</li>
						<li>Wheezing or noisy breathing</li>
						<li>Chest pain</li>
						<li>Frequent respiratory infections</li>
					</ul>

					<h2><strong>Tips to Keep Your Lungs Healthy:</strong></h2>
					<img class="tip_img" src="https://selfchec.org/wp-content/uploads/2017/09/Screen-Shot-2017-09-02-at-10.05.55-PM.png" alt="tips for lung health">
					<ul>
						<li>Avoid smoking and secondhand smoke.</li>
						<li>Exercise regularly to improve lung capacity.</li>
						<li>Maintain a healthy diet rich in fruits and vegetables.</li>
						<li>Stay hydrated to help thin mucus.</li>
						<li>Practice good hygiene to prevent respiratory infections.</li>
					</ul>

					<h2>Food to Consume for Healthy Lungs</h2>
					<ol>
						<li class="Tips">Leafy Greens</li>
						<img class="tip_img" src="https://images.squarespace-cdn.com/content/v1/5ddd5a853fc2d81d4f28612a/1585047530893-5GEZ4X4Q6LGY6FBMGU7D/louis-hansel-shotsoflouis-ZYjpgrFeWD0-unsplash.jpg" alt="leafy greens">
						<p class="tip_para">Leafy greens, such as spinach and kale, are rich in antioxidants that help reduce inflammation and support lung function.</p>
						<ul>
							<li>High in vitamins and minerals</li>
							<li>Boosts overall health</li>
							<li>Reduces oxidative stress</li>
						</ul>

						<li class="Tips">Berries</li>
						<img class="tip_img" src="https://www.onegreenplanet.org/wp-content/uploads/2019/05/shutterstock_1357275044.jpg" alt="berries">
						<p class="tip_para">Berries, like blueberries and strawberries, are high in antioxidants and vitamins that promote lung health.</p>
						<ul>
							<li>Contains anti-inflammatory properties</li>
							<li>Supports immune function</li>
							<li>Enhances lung capacity</li>
						</ul>

						<li class="Tips">Fatty Fish</li>
						<img class="tip_img" src="https://scitechdaily.com/images/Raw-Salmon-Filet-777x518.jpg" alt="fatty fish">
						<p class="tip_para">Fatty fish, such as salmon and mackerel, are rich in omega-3 fatty acids, which can reduce inflammation in the lungs.</p>
						<ul>
							<li>Supports respiratory function</li>
							<li>Improves lung function</li>
							<li>Helps manage asthma symptoms</li>
						</ul>

						<li class="Tips">Garlic</li>
						<img class="tip_img" src="https://static.toiimg.com/thumb/msid-105445525,width-1280,height-720,resizemode-4/105445525.jpg" alt="garlic">
						<p class="tip_para">Garlic contains compounds that can improve lung health and fight respiratory infections.</p>
						<ul>
							<li>Boosts immune system</li>
							<li>Reduces inflammation</li>
							<li>Promotes better respiratory function</li>
						</ul>

						<li class="Tips">Nuts</li>
						<img class="tip_img" src="https://domf5oio6qrcr.cloudfront.net/medialibrary/9884/GettyImages-179751167.jpg" alt="nuts">
						<p class="tip_para">Nuts, such as almonds and walnuts, provide essential fatty acids and vitamins that can benefit lung health.</p>
						<ul>
							<li>Reduces inflammation</li>
							<li>Supports immune function</li>
							<li>Contains antioxidants</li>
						</ul>
					</ol>
				</div>


        <!-- Dermatology Content -->
			<div id="dermatology" class="hidden">
				<h1 class="logy_heading">Dermatology</h1>
				<h2>What is Dermatology?</h2>
				<p class="tip_para">Dermatology is the branch of medicine that focuses on the diagnosis and treatment of skin, hair, and nail disorders. This field encompasses a wide variety of conditions, including acne, eczema, psoriasis, skin infections, and skin cancers. Patients experiencing skin issues, rashes, or persistent changes in their skin are often referred to a dermatologist for evaluation and treatment.</p>
				<img class="tip_img" src="https://plymouthmeetingdermatology.com/wp-content/uploads/2022/01/plym_What-is-Cosmetic-Dermatology.jpg" alt="dermatology image">
				
				<h2><strong>When would I need a dermatologist?</strong></h2>
				<p>If you have persistent skin concerns, unusual changes in your skin, or specific skin conditions, consulting a dermatologist is essential for accurate diagnosis and effective treatment.</p>
				
				<h4>Symptoms that can indicate a skin problem include:</h4>
				<ul>
					<li>Persistent acne or breakouts</li>
					<li>Itchy or inflamed skin</li>
					<li>Changes in moles or skin lesions</li>
					<li>Skin rashes that do not improve</li>
					<li>Hair loss or changes in hair texture</li>
				</ul>

				<h2><strong>Tips to Keep Your Skin Healthy:</strong></h2>
				<img class="tip_img" src="https://media6.ppl-media.com/mediafiles/blogs/skincare_routine_1024x684_b49ad26d9f.png" alt="tips for skin health">
				<ul>
					<li>Stay hydrated by drinking plenty of water.</li>
					<li>Use sunscreen to protect your skin from UV damage.</li>
					<li>Maintain a balanced diet rich in vitamins and antioxidants.</li>
					<li>Practice good hygiene and skin care routines.</li>
					<li>Avoid smoking and excessive alcohol consumption.</li>
				</ul>

				<h2>Foods to Consume for Healthy Skin</h2>
				<ol>
					<li class="Tips">Fatty Fish</li>
					<img class="tip_img" src="https://images-prod.healthline.com/hlcmsresource/images/AN_images/omega-3-rich-foods-1296x728-feature.jpg" alt="fatty fish">
					<p class="tip_para">Fatty fish, such as salmon and mackerel, are rich in omega-3 fatty acids, which help maintain skin elasticity and hydration.</p>
					<ul>
						<li>Reduces inflammation and redness</li>
						<li>Supports skin barrier function</li>
						<li>Enhances overall skin health</li>
					</ul>

					<li class="Tips">Avocados</li>
					<img class="tip_img" src="https://images.healthshots.com/healthshots/en/uploads/2024/04/04153309/avocado-1.jpg" alt="avocados">
					<p class="tip_para">Avocados are high in healthy fats and vitamins E and C, which are essential for maintaining skin health.</p>
					<ul>
						<li>Hydrates and nourishes the skin</li>
						<li>Protects against skin damage</li>
						<li>Promotes a youthful appearance</li>
					</ul>

					<li class="Tips">Walnuts</li>
					<img class="tip_img" src="https://domf5oio6qrcr.cloudfront.net/medialibrary/9531/iStock-481114390.jpg" alt="walnuts">
					<p class="tip_para">Walnuts are rich in fatty acids, zinc, and antioxidants that support skin health and protect against oxidative stress.</p>
					<ul>
						<li>Improves skin hydration</li>
						<li>Reduces the risk of skin disorders</li>
						<li>Supports overall skin health</li>
					</ul>

					<li class="Tips">Sweet Potatoes</li>
					<img class="tip_img" src="https://cdn.prod.website-files.com/63ed08484c069d0492f5b0bc/65a6d441e99ae945026bb843_sweet-potato.jpg" alt="sweet potatoes">
					<p class="tip_para">Sweet potatoes are a great source of beta-carotene, which the body converts to vitamin A, promoting healthy skin.</p>
					<ul>
						<li>Reduces the appearance of fine lines</li>
						<li>Protects against sun damage</li>
						<li>Promotes skin cell turnover</li>
					</ul>

					<li class="Tips">Berries</li>
					<img class="tip_img" src="https://publish.purewow.net/wp-content/uploads/sites/2/2022/07/types-of-berries_universal.jpg" alt="berries">
					<p class="tip_para">Berries are packed with antioxidants that help protect the skin from free radical damage and support overall skin health.</p>
					<ul>
						<li>Boosts collagen production</li>
						<li>Improves skin texture</li>
						<li>Reduces signs of aging</li>
					</ul>
				</ol>
			</div>


        <!-- Urology Content -->
		<div id="urology" class="hidden">
			<h1 class="logy_heading">Urology</h1>
			<h2>What is Urology?</h2>
			<p class="tip_para">Urology is a branch of medicine that focuses on the diagnosis and treatment of disorders related to the urinary system and the male reproductive organs. This field encompasses a wide range of conditions, including urinary tract infections (UTIs), kidney stones, bladder disorders, and prostate issues. Patients experiencing symptoms such as frequent urination, blood in urine, or pelvic pain are often referred to a urologist for evaluation and treatment.</p>
			<img class="tip_img" src="https://www.apollospectra.com/backend/web/uploads/1977098907.jpg" alt="urology image">
			
			<h2><strong>When would I need a urologist?</strong></h2>
			<p>If you have persistent urinary issues, reproductive health concerns, or other symptoms related to the urinary system, consulting a urologist is essential for accurate diagnosis and effective treatment.</p>
			
			<h4>Symptoms that can indicate a urological problem include:</h4>
			<ul>
				<li>Frequent urination or urgency</li>
				<li>Painful urination or burning sensation</li>
				<li>Blood in urine</li>
				<li>Pelvic or lower abdominal pain</li>
				<li>Issues with sexual function</li>
			</ul>

			<h2><strong>Tips to Keep Your Urinary System Healthy:</strong></h2>
			<img class="tip_img" src="https://wp04-media.cdn.ihealthspot.com/wp-content/uploads/sites/390/2023/08/istockphoto-1171778559-612x612-1.jpg" alt="tips for urinary health">
			<ul>
				<li>Stay hydrated by drinking plenty of water.</li>
				<li>Practice good hygiene to prevent infections.</li>
				<li>Limit caffeine and alcohol consumption.</li>
				<li>Maintain a healthy diet rich in fruits and vegetables.</li>
				<li>Regularly exercise to promote overall health.</li>
			</ul>

			<h2>Foods to Consume for a Healthy Urinary System</h2>
			<ol>
				<li class="Tips">Cranberries</li>
				<img class="tip_img" src="https://images.immediate.co.uk/production/volatile/sites/30/2019/10/Cranberries-in-a-wooden-bowl-16db0f1.jpg?quality=90&resize=440,400" alt="cranberries">
				<p class="tip_para">Cranberries are known for their ability to prevent urinary tract infections by preventing bacteria from adhering to the urinary tract.</p>
				<ul>
					<li>Helps reduce UTI recurrence</li>
					<li>Rich in antioxidants</li>
					<li>Supports overall urinary health</li>
				</ul>

				<li class="Tips">Pumpkin Seeds</li>
				<img class="tip_img" src="https://www.agiboo.com/wp-content/uploads/2021/01/pumpkin-seeds-were-poured-from-sack-ground.jpg" alt="pumpkin seeds">
				<p class="tip_para">Pumpkin seeds are a great source of zinc and other nutrients that support prostate health and overall urinary function.</p>
				<ul>
					<li>Supports prostate health</li>
					<li>Rich in antioxidants</li>
					<li>Promotes healthy bladder function</li>
				</ul>

				<li class="Tips">Beets</li>
				<img class="tip_img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGwmgTSVXABXX_TSuADe2gm0WwUh93Xt_hJg&s" alt="beets">
				<p class="tip_para">Beets are high in nitrates, which can help improve blood flow and support healthy kidney function.</p>
				<ul>
					<li>Promotes kidney health</li>
					<li>Supports healthy blood pressure</li>
					<li>Rich in vitamins and minerals</li>
				</ul>

				<li class="Tips">Watermelon</li>
				<img class="tip_img" src="https://www.health.com/thmb/_zzhU70IVOq9zmdetmD0ReyI0nE=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Health-Stocksy_txp3d0ecc80Mrw300_Medium_663260-32aabbea1b5746eb860666d69a624204.jpg" alt="watermelon">
				<p class="tip_para">Watermelon is a hydrating fruit that helps flush out toxins and promotes healthy urine production.</p>
				<ul>
					<li>Hydrates the body</li>
					<li>Supports kidney function</li>
					<li>Rich in vitamins A and C</li>
				</ul>

				<li class="Tips">Garlic</li>
				<img class="tip_img" src="https://www.usatoday.com/gcdn/presto/2022/12/22/USAT/c7afe9b6-e80b-4fe6-9d23-df34dec94198-WPHosp_Article4_3.jpg?crop=2120,1193,x0,y107&width=660&height=371&format=pjpg&auto=webp" alt="garlic">
				<p class="tip_para">Garlic has natural antibacterial properties that can help prevent infections and promote overall urinary tract health.</p>
				<ul>
					<li>Boosts the immune system</li>
					<li>Supports healthy urinary function</li>
					<li>Reduces inflammation</li>
				</ul>
			</ol>
		</div>
		<!--pediatrics content-->
			<div id="pediatrics" class="hidden">
				<h1 class="logy_heading">Pediatrics</h1>
				<h2>What is Pediatrics?</h2>
				<p class="tip_para">Pediatrics is the branch of medicine that focuses on the health and medical care of infants, children, and adolescents. Pediatricians are trained to diagnose and treat a variety of conditions, from minor illnesses to serious diseases. They provide preventive health care, including routine check-ups, vaccinations, and health education, to ensure the healthy development of children.</p>
				<img class="tip_img" src="https://i0.wp.com/post.healthline.com/wp-content/uploads/2020/05/pediatrician-baby-doctor-1296x728-header.jpg?w=1155&h=1528" alt="pediatrics image">
				
				<h2><strong>When would I need a pediatrician?</strong></h2>
				<p>Consulting a pediatrician is essential when your child shows any signs of illness, requires vaccinations, or needs regular health check-ups to monitor growth and development.</p>
				
				<h4>Common signs that may require pediatric care include:</h4>
				<ul>
					<li>Fever or persistent cough</li>
					<li>Difficulty breathing or wheezing</li>
					<li>Unexplained rashes or skin conditions</li>
					<li>Changes in appetite or weight</li>
					<li>Behavioral changes or developmental delays</li>
				</ul>

				<h2><strong>Tips to Keep Your Child Healthy:</strong></h2>
				<img class="tip_img" src="https://productimages.withfloats.com/serviceimages/tile/64c2832bf64b898c195c2830Pediatrician-hinjewadi" alt="tips for child health">
				<ul>
					<li>Ensure regular check-ups and vaccinations.</li>
					<li>Encourage a balanced diet rich in fruits, vegetables, and whole grains.</li>
					<li>Promote physical activity and outdoor play.</li>
					<li>Limit screen time and encourage reading and creative play.</li>
					<li>Teach good hygiene habits, such as handwashing.</li>
				</ul>

				<h2>Foods to Consume for Healthy Child Development</h2>
				<ol>
					<li class="Tips">Fruits</li>
					<img class="tip_img" src="https://www.euroschoolindia.com/wp-content/uploads/2023/04/ways-to-eat-more-fruit.jpg" alt="fruits">
					<p class="tip_para">Fruits provide essential vitamins and minerals that support overall health and immunity in children.</p>
					<ul>
						<li>Rich in antioxidants</li>
						<li>Boosts immune system</li>
						<li>Supports healthy digestion</li>
					</ul>

					<li class="Tips">Vegetables</li>
					<img class="tip_img" src="https://goodparentingbrighterchildren.com/wp-content/uploads/2014/05/Good-Parenting-Brighter-Children-Vegetables-1.jpg" alt="vegetables">
					<p class="tip_para">Vegetables are crucial for a child’s growth, providing essential nutrients and dietary fiber.</p>
					<ul>
						<li>Promotes healthy weight</li>
						<li>Supports brain development</li>
						<li>Rich in vitamins and minerals</li>
					</ul>

					<li class="Tips">Whole Grains</li>
					<img class="tip_img" src="https://vaya.in/news/wp-content/uploads/2019/05/Whole-grains-for-Kids.jpg" alt="whole grains">
					<p class="tip_para">Whole grains provide energy and essential nutrients that support a child's development and growth.</p>
					<ul>
						<li>Supports healthy digestion</li>
						<li>Regulates blood sugar levels</li>
						<li>Rich in fiber</li>
					</ul>

					<li class="Tips">Dairy Products</li>
					<img class="tip_img" src="https://cdn.firstcry.com/education/2022/11/07145239/Dairy-Product-List-For-Kids-with-their-Benefits-And-Facts-696x476.jpg" alt="dairy products">
					<p class="tip_para">Dairy products are important sources of calcium and vitamin D, which are vital for bone health in children.</p>
					<ul>
						<li>Supports strong bones and teeth</li>
						<li>Provides protein and essential nutrients</li>
						<li>Promotes healthy growth</li>
					</ul>

					<li class="Tips">Lean Proteins</li>
					<img class="tip_img" src="https://aging.ny.gov/sites/g/files/oee1096/files/media/2023/05/protein.jpg" alt="lean proteins">
					<p class="tip_para">Lean proteins, such as chicken and fish, are crucial for muscle growth and repair in growing children.</p>
					<ul>
						<li>Supports healthy muscle development</li>
						<li>Provides essential amino acids</li>
						<li>Promotes overall health</li>
					</ul>
				</ol>
			</div>
		<!-- Orthopedics -->
			<div id="Orthopedics" class="hidden">
				<h1 class="logy_heading">Orthopedics</h1>
				<h2>What is Orthopedics?</h2>
				<p class="tip_para">Orthopedics is the branch of medicine that focuses on diagnosing, treating, and preventing disorders related to the musculoskeletal system. This includes bones, joints, muscles, ligaments, and tendons. Orthopedic specialists, known as orthopedic surgeons, treat a variety of conditions ranging from fractures and arthritis to sports injuries and congenital disorders.</p>
				<img class="tip_img" src="https://sayaamed.com/wp-content/uploads/2022/01/Orthopedics-in-sayaa-med-1.jpg" alt="orthopedics image">
				
				<h2><strong>When would I need an orthopedic specialist?</strong></h2>
				<p>If you experience persistent pain, limited mobility, or injuries related to bones and joints, it may be necessary to consult an orthopedic specialist for evaluation and treatment.</p>
				
				<h4>Common symptoms that may require orthopedic care include:</h4>
				<ul>
					<li>Joint pain or swelling</li>
					<li>Persistent back pain</li>
					<li>Limited range of motion</li>
					<li>Injuries from sports or accidents</li>
					<li>Deformities or congenital conditions</li>
				</ul>

				<h2><strong>Tips to Maintain Musculoskeletal Health:</strong></h2>
				<img class="tip_img" src="https://agility-ortho.com/wp-content/uploads/2016/06/Skeleton-800x600.jpg" alt="tips for orthopedic health">
				<ul>
					<li>Engage in regular exercise to strengthen muscles and improve flexibility.</li>
					<li>Maintain a healthy weight to reduce strain on joints.</li>
					<li>Practice good posture to prevent back and neck pain.</li>
					<li>Use proper techniques when lifting heavy objects to avoid injuries.</li>
					<li>Ensure adequate intake of calcium and vitamin D for bone health.</li>
				</ul>

				<h2>Foods to Consume for Healthy Bones and Joints</h2>
				<ol>
					<li class="Tips">Almonds</li>
					<img class="tip_img" src="https://i0.wp.com/post.healthline.com/wp-content/uploads/2023/02/Almonds-Table-Bowl-1296x728-Header.jpg?w=1155&h=1528" alt="almonds">
					<p class="tip_para">Almonds are high in calcium and vitamin E, both of which are essential for maintaining bone density and overall health.</p>
					<ul>
						<li>Promotes bone strength</li>
						<li>Contains healthy fats</li>
					</ul>

					<li class="Tips">Salmon</li>
					<img class="tip_img" src="https://www.onceuponachef.com/images/2018/02/pan-seared-salmon-.jpg" alt="salmon">
					<p class="tip_para">Salmon is rich in omega-3 fatty acids and vitamin D, which help reduce inflammation and support bone health.</p>
					<ul>
						<li>Supports joint health</li>
						<li>Reduces risk of chronic disease</li>
					</ul>

					<li class="Tips">Sweet Potatoes</li>
					<img class="tip_img" src="https://extension.okstate.edu/fact-sheets/images/sweet-potato-production/figure-1.png" alt="sweet potatoes">
					<p class="tip_para">Sweet potatoes are high in beta-carotene, which is converted into vitamin A, essential for bone health and immune function.</p>
					<ul>
						<li>Supports bone growth</li>
						<li>Rich in antioxidants</li>
					</ul>

					<li class="Tips">Quinoa</li>
					<img class="tip_img" src="https://nuttyyogi.com/cdn/shop/products/Quinoa_White.jpg?v=1677652891" alt="quinoa">
					<p class="tip_para">Quinoa is a complete protein source and provides essential minerals like magnesium, important for bone health.</p>
					<ul>
						<li>Promotes muscle maintenance</li>
						<li>Supports overall nutrition</li>
					</ul>

					<li class="Tips">Berries</li>
					<img class="tip_img" src="https://www.euroschoolindia.com/wp-content/uploads/2024/01/benefits-of-berry-juice-jpg.webp" alt="berries">
					<p class="tip_para">Berries, such as strawberries and blueberries, are rich in antioxidants, which can help reduce inflammation in the body.</p>
					<ul>
						<li>Supports joint health</li>
						<li>Rich in vitamins and minerals</li>
					</ul>
				</ol>
			</div>
		<!-- Hermatology-->
			<div id="hematology" class="hidden">
				<h1 class="logy_heading">Hematology</h1>
				<h2>What is Hematology?</h2>
				<p class="tip_para">Hematology is the branch of medicine that focuses on the study, diagnosis, treatment, and prevention of blood disorders. This includes conditions affecting red blood cells, white blood cells, platelets, hemoglobin, blood vessels, and the bone marrow. Hematologists specialize in treating blood-related conditions, such as anemia, leukemia, lymphoma, and clotting disorders.</p>
				<img class="tip_img" src="https://www.geetanjalihospital.co.in/img/media/cache/blogs/02/825x408/1010/2%20(1).jpg" alt="hematology image">
				
				<h2><strong>When would I need a hematologist?</strong></h2>
				<p>If you experience symptoms such as unusual bruising, fatigue, frequent infections, or any other abnormal blood-related issues, you may need to consult a hematologist for evaluation and treatment.</p>
				
				<h4>Common symptoms that may require hematology care include:</h4>
				<ul>
					<li>Fatigue and weakness</li>
					<li>Frequent infections</li>
					<li>Unexplained bruising or bleeding</li>
					<li>Shortness of breath</li>
					<li>Abnormal blood test results</li>
				</ul>

				<h2><strong>Tips to Maintain Healthy Blood:</strong></h2>
				<img class="tip_img" src="https://media.istockphoto.com/id/1179992727/photo/red-blood-cells-flowing-through-artery.jpg?s=612x612&w=0&k=20&c=76UNkN-X1vA-mr89YOq00eoLIQPCOtQ_eVRpouyIGlM=" alt="tips for hematology health">
				<ul>
					<li>Eat a balanced diet rich in iron, vitamin B12, and folate to support red blood cell production.</li>
					<li>Stay hydrated to maintain proper blood viscosity.</li>
					<li>Avoid smoking and limit alcohol intake to reduce the risk of blood disorders.</li>
					<li>Engage in regular physical activity to promote healthy circulation.</li>
					<li>Regularly monitor your blood pressure and cholesterol levels.</li>
				</ul>

				<h2>Foods to Consume for Healthy Blood</h2>
				<ol>
					<li class="Tips">Spinach</li>
					<img class="tip_img" src="https://www.trustbasket.com/cdn/shop/articles/Spinach.webp?v=1686909241" alt="spinach">
					<p class="tip_para">Spinach is high in iron and folate, essential for the production of red blood cells.</p>
					<ul>
						<li>Boosts iron levels</li>
						<li>Rich in antioxidants</li>
					</ul>

					<li class="Tips">Red Meat</li>
					<img class="tip_img" src="https://images.squarespace-cdn.com/content/v1/5a3ed64f4c326d77c53e744a/1537716115919-796NC3QARADGU3XHOH1S/thyme.jpg" alt="red meat">
					<p class="tip_para">Red meat is an excellent source of heme iron, which is more easily absorbed by the body compared to non-heme iron.</p>
					<ul>
						<li>Supports hemoglobin production</li>
						<li>Rich in essential nutrients</li>
					</ul>

					<li class="Tips">Citrus Fruits</li>
					<img class="tip_img" src="https://www.thespruceeats.com/thmb/twq1ZnPL7D196YUpSqtKF_n-BEw=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/citrus_hero1-34ada1a25b254f43864ebc62864195cd.jpg" alt="citrus fruits">
					<p class="tip_para">Citrus fruits are rich in vitamin C, which enhances iron absorption from plant-based foods.</p>
					<ul>
						<li>Improves iron absorption</li>
						<li>Boosts immune function</li>
					</ul>

					<li class="Tips">Beans</li>
					<img class="tip_img" src="https://images.squarespace-cdn.com/content/v1/59f0e6beace8641044d76e9c/1665415220691-VXVP42NA5A65QAAF62KR/Social+Beans.jpeg" alt="beans">
					<p class="tip_para">Beans are a great source of iron and protein, making them an excellent food for blood health.</p>
					<ul>
						<li>Supports red blood cell production</li>
						<li>Rich in fiber</li>
					</ul>

					<li class="Tips">Quinoa</li>
					<img class="tip_img" src="https://media-cdn2.greatbritishchefs.com/media/in1o4glq/img23323.whqc_1426x713q80.jpg" alt="quinoa">
					<p class="tip_para">Quinoa is a complete protein that provides essential amino acids and minerals necessary for healthy blood.</p>
					<ul>
						<li>Promotes overall nutrition</li>
						<li>Supports energy levels</li>
					</ul>
				</ol>
			</div>
    </div>

	<script>
		// JavaScript function to show/hide content
		function showContent(contentId) {
			// Hide all sections
			var sections = document.querySelectorAll('.content > div');
			sections.forEach(function (section) {
				section.classList.add('hidden');
			});

			// Show the clicked section
			document.getElementById(contentId).classList.remove('hidden');
		}

		// Show health tips by default
		showContent('default');

		// Ensure the page starts at the top on every visit, including back navigation
		if ('scrollRestoration' in history) {
			history.scrollRestoration = 'manual'; // Disable browser's default scroll restoration
		}

		// Scroll to the top on page load
		document.addEventListener('DOMContentLoaded', function () {
			window.scrollTo(0, 0);
		});
	</script>


</body>
</html>