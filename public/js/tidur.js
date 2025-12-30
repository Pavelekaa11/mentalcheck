const questions = [
  "Saya sulit untuk tertidur.",
  "Saya sering terbangun di malam hari.",
  "Saya merasa tidur saya tidak nyenyak.",
  "Saya bangun tidur dengan perasaan lelah.",
  "Saya merasa waktu tidur saya tidak cukup.",
  "Kualitas tidur saya secara keseluruhan buruk."
];

const options = [
  { label: "Tidak pernah", value: 0 },
  { label: "Jarang", value: 1 },
  { label: "Kadang-kadang", value: 2 },
  { label: "Sering", value: 3 },
  { label: "Selalu", value: 4 }
];

let currentQuestion = 0;
let score = 0;

const questionEl = document.getElementById("question");
const answersEl = document.getElementById("answers");
const progressBar = document.getElementById("progressBar");
const currentText = document.getElementById("current");

function renderQuestion() {
  questionEl.innerText = questions[currentQuestion];
  answersEl.innerHTML = "";

  options.forEach(opt => {
    const btn = document.createElement("button");
    btn.className =
      "w-full text-left border rounded-lg px-4 py-3 hover:bg-indigo-50 transition";
    btn.innerText = opt.label;
    btn.onclick = () => handleAnswer(opt.value);
    answersEl.appendChild(btn);
  });

  updateProgress();
}

function handleAnswer(value) {
  score += value;
  currentQuestion++;

  if (currentQuestion < questions.length) {
    renderQuestion();
  } else {
    localStorage.setItem("tidur_result", score);
    window.location.href = "/hasil/tidur";
  }
}

function updateProgress() {
  const percent = ((currentQuestion + 1) / questions.length) * 100;
  progressBar.style.width = percent + "%";
  currentText.innerText = currentQuestion + 1;
}

renderQuestion();
