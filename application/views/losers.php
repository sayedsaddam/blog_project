<style>
	.quiz-container {
		max-width: 500px;
		background-color: #fff;
		border-radius: 10px;
		padding: 20px;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
	}

	h1 {
		text-align: center;
	}

	#question-container {
		margin-bottom: 20px;
	}

	#question-text {
		font-size: 18px;
		margin-bottom: 10px;
	}

	#answer-buttons {
		display: grid;
		grid-template-columns: repeat(2, 1fr);
		grid-gap: 10px;
	}

	button {
		height: 40px;
		font-size: 16px;
		background-color: #eaeaea;
		border: none;
		border-radius: 5px;
		cursor: pointer;
	}

	button:hover {
		background-color: #d2d2d2;
	}

	#controls-container {
		display: flex;
		justify-content: space-between;
		align-items: center;
	}

	#timer-container {
		display: flex;
		align-items: center;
	}

	#timer-text {
		font-size: 14px;
	}

	#timer {
		font-weight: bold;
		margin-left: 5px;
	}
</style>
<div class="container">
	<div class="row mb-3">
		<div class="col-12 text-center">
			<h1 class="h1 font-weight-bold">Javascript Projects</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12 mt-2">
			<div class="card mb-5">
				<div class="card-header">
					<h4 class="card-title">Guess a number between 1 and 100:</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label for="number">Number</label>
						<input type="number" name="number" id="userGuess" class="form-control form-control-lg" placeholder="Enter number">
					</div>
					<div class="form-group">
						<button class="btn btn-primary btn-block" onclick="checkGuess()">Check</button>
					</div>
					<div id="message" class="alert"></div>
				</div>
			</div>
			<!-- Quiz app in JS -->
			<div class="card mb-5">
				<div class="card-header">
					<h5 class="card-title">Javascript quiz app</h5>
				</div>
				<div class="card-body">
					<div id="question-container">
						<p id="question-text"></p>
						<div id="answer-buttons"></div>
					</div>
					<div id="controls-container">
						<button id="start-button" class="btn btn-primary">Start Quiz</button>
						<div id="timer-container">
							<span id="timer-text">Time Left: <span id="timer">0</span></span>
						</div>
					</div>
				</div>
			</div>
			<!-- BMI Calculator -->
			<div class="card mb-5">
				<div class="card-header">
					<h5 class="card-title">BMI Calculator</h5>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label for="height">Height</label>
						<input type="number" id="height" class="form-control form-control-lg" placeholder="Height">
					</div>
					<div class="form-group">
						<label for="weight">Weight</label>
						<input type="number" id="weight" class="form-control form-control-lg" placeholder="Weight">
					</div>
					<div class="form-group">
						<button class="btn btn-primary btn-block" onclick="calculateBMI()">Calculate</button>
					</div>
					<div id="result" class="alert"></div>
				</div>
			</div>
			<!-- Todo list in JS -->
			<div class="card mb-5">
				<div class="card-header">
					<h5 class="card-title">Todo List</h5>
				</div>
				<div class="card-body">
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Task detail..." aria-label="Task detail..." aria-describedby="basic-addon2" id="taskInput">
						<div class="input-group-append">
							<button class="btn btn-primary" onclick="addTask()">Add Task</button>
						</div>
					</div>
					<ul id="taskList"></ul>
				</div>
			</div>
			<!-- Math Calculator -->
			<div class="card mb-5">
				<div class="card-header">
					<h5 class="card-title">Math Calculator</h5>
				</div>
				<div class="card-body">
					<input type="text" id="results" class="form-control form-control-lg mb-3" readonly placeholder="Result will be displayed here...">
					<div class="row mb-3">
						<div class="col-md-3">
							<button class="btn btn-primary btn-block" onclick="clearResult()">C</button>
						</div>
						<div class="col-md-3">
							<button class="btn btn-primary btn-block" onclick="appendNumber(7)">7</button>
						</div>
						<div class="col-md-3">
							<button class="btn btn-primary btn-block" onclick="appendNumber(8)">8</button>
						</div>
						<div class="col-md-3">
							<button class="btn btn-primary btn-block" onclick="appendNumber(9)">9</button>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-3">
							<button class="btn btn-primary btn-block" onclick="appendOperator('+')">+</button>
						</div>
						<div class="col-md-3">
							<button class="btn btn-primary btn-block" onclick="appendNumber(4)">4</button>
						</div>
						<div class="col-md-3">
							<button class="btn btn-primary btn-block" onclick="appendNumber(5)">5</button>
						</div>
						<div class="col-md-3">
							<button class="btn btn-primary btn-block" onclick="appendNumber(6)">6</button>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-3">
							<button class="btn btn-primary btn-block" onclick="appendOperator('-')">-</button>
						</div>
						<div class="col-md-3">
							<button class="btn btn-primary btn-block" onclick="appendNumber(1)">1</button>
						</div>
						<div class="col-md-3">
							<button class="btn btn-primary btn-block" onclick="appendNumber(2)">2</button>
						</div>
						<div class="col-md-3">
							<button class="btn btn-primary btn-block" onclick="appendNumber(3)">3</button>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-3">
							<button class="btn btn-primary btn-block" onclick="appendOperator('*')">*</button>
						</div>
						<div class="col-md-3">
							<button class="btn btn-primary btn-block" onclick="appendNumber(0)">0</button>
						</div>
						<div class="col-md-3">
							<button class="btn btn-primary btn-block" onclick="appendOperator('/')">/</button>
						</div>
						<div class="col-md-3">
							<button class="btn btn-primary btn-block" onclick="calculate()">=</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Password generator in JS -->
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">Password Generator in JS</h5>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label for="password">Generate Password</label>
						<input type="text" id="password" class="form-control form-control-lg" placeholder="Generate password">
					</div>
					<div class="form-group">
						<button id="genPass" class="btn btn-primary" onclick="generatePassword()">Generate Password</button>
						<button id="copyPass" class="btn btn-secondary" onclick="copyPassword()">Copy Password</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	// number guessing game
	const randomNumber = Math.floor(Math.random() * 100) + 1;
	function checkGuess(){
		const userGuess = parseInt(document.getElementById('userGuess').value);
		const message = document.getElementById('message');
		if(userGuess === randomNumber){
			message.classList.add('alert-success');
			message.textContent = 'Congraulations! You guessed the correct number.';
		}else if(userGuess < randomNumber){
			message.classList.add('alert-danger');
			message.textContent = 'Too low! Try again.' + randomNumber;
		}else{
			message.classList.add('alert-danger');
			message.textContent = 'Too high! Try again.' + randomNumber;
		}
	}
	// Quiz app
	const quizQuestions = [
		{
			question: 'What is the capital of France?',
			options: ['Paris', 'London', 'Berlin', 'Rome'],
			correctAnswer: 'Paris'
		},
		{
			question: 'Which planet is known as the Red Planet?',
			options: ['Venus', 'Mars', 'Jupiter', 'Saturn'],
			correctAnswer: 'Mars'
		},
		{
			question: 'What is the chemical symbol of Gold?',
			options: ['Au', 'Ag', 'Cu', 'Fe'],
			correctAnswer: 'Au'
		}
	];
	let currenctQuestionIndex = 0;
	let score = 0;
	let timeLeft = 30;
	let timerInterval;
	
	function startQuiz(){
		document.getElementById('start-button').style.display = 'none';
		displayQuestion();
		startTimer();
	}
	function displayQuestion(){
		const currentQuestion = quizQuestions[currenctQuestionIndex];
		const questionText = document.getElementById('question-text');
		const answerButtons = document.getElementById('answer-buttons');
		questionText.innerHTML = '';
		answerButtons.innerHTML = '';
		questionText.innerHTML = currentQuestion.question;
		currentQuestion.options.forEach(option => {
			const button = document.createElement('button');
			button.innerText = option;
			button.classList.add('btn-primary');
			answerButtons.appendChild(button);
			button.addEventListener('click', function(){
				checkAnswer(option);
			});
		});
	}
	function checkAnswer(selectedOption){
		const currentQuestion = quizQuestions[currenctQuestionIndex];
		if(selectedOption === currentQuestion.correctAnswer){
			score++;
		}
		currenctQuestionIndex++;
		if(currenctQuestionIndex < quizQuestions.length){
			displayQuestion();
		}else{
			endQuiz();
		}
	}
	function startTimer(){
		timerInterval = setInterval(function(){
			timeLeft--;
			document.getElementById('timer').textContent = timeLeft;
			if(timeLeft <= 0){
				endQuiz();
			}
		}, 1000);
	}
	function endQuiz(){
		clearInterval(timerInterval);
		const scorePercentage = (score / quizQuestions.length) * 100;
		const questionContainer = document.getElementById('question-container');
		questionContainer.innerHTML = `
			<h2>Quiz Completed!</h2>
			<p>Your score: ${score} out of ${quizQuestions.length}</p>
			<p>Score percentage: ${scorePercentage}%</p>
		`;
	}
	document.getElementById('start-button').addEventListener('click', startQuiz);
	// BMI calculator
	function calculateBMI(){
		var heightInput = document.getElementById('height');
		var weightInput = document.getElementById('weight');
		var resultDiv = document.getElementById('result');
		var height = parseFloat(heightInput.value);
		var weight = parseFloat(weightInput.value);
		if(isNaN(height) || isNaN(weight)){
			resultDiv.innerHTML = 'Please enter valid height and weight.';
			return;
		}
		var bmi = weight / ((height / 100)** 2);
		var category = '';
		if(bmi < 18.5){
			category = 'Underweight';
		}else if(bmi < 25){
			category = 'Normal weight';
		}else if(bmi < 30){
			category = 'Overweight';
		}else{
			category = 'Obese';
		}
		resultDiv.innerHTML = 'Your BMI is ' + bmi.toFixed(2) + '(' + category + ')';
		resultDiv.classList.add('alert-success');
	}
	// Todo list
	function addTask(){
		var input = document.getElementById('taskInput');
		var task = input.value;
		input.value = '';
		if(task === ''){
			alert('Please enter a task.');
			return;
		}
		var taskList = document.getElementById('taskList');
		var li = document.createElement('li');
		li.appendChild(document.createTextNode(task));
		taskList.appendChild(li);
	}
	// Math calculator
	let expression = '';
	function appendNumber(number){
		expression += number;
		document.getElementById('results').value = expression;
	}
	function appendOperator(operator){
		expression += operator;
		document.getElementById('results').value = expression;
	}
	function clearResult(){
		expression = '';
		document.getElementById('results').value = '';
	}
	function calculate(){
		try{
			const result = eval(expression);
			document.getElementById('results').value = Number(result).toLocaleString();
			expression = '';
		}catch(error){
			document.getElementById('results').value = 'Error';
		}
	}
	// Generate password
	var password = document.getElementById('password');
	function generatePassword(){
		var chars = '0123456789abcdefghijklmnopqrstuvwxyz!@#$%^&*()ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		var passwordLength = 12;
		var password = '';
		for(var i = 0; i <= passwordLength; i++){
			var randomNumber = Math.floor(Math.random() * chars.length);
			password += chars.substring(randomNumber, randomNumber + 1);
		}
		document.getElementById('password').value = password;
	}
	function copyPassword(){
		var copyText = document.getElementById('password');
		copyText.select();
		document.execCommand('copy');
	}
</script>
