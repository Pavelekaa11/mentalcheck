const questions = [
  "Seberapa sering kamu merasa lelah secara fisik?",
  "Seberapa sering kamu merasa kelelahan secara emosional?",
  "Seberapa sering kamu merasa kehabisan energi?",
  "Seberapa sering kamu merasa lelah saat bangun tidur dan harus menghadapi hari?",
  "Seberapa sering kamu merasa bahwa setiap aktivitas terasa melelahkan?",
  "Seberapa sering kamu merasa kelelahan yang berkepanjangan?"
];

const options = [
  { label: "Tidak pernah", value: 0 },
  { label: "Jarang", value: 1 },
  { label: "Kadang-kadang", value: 2 },
  { label: "Sering", value: 3 },
  { label: "Sangat sering", value: 4 }
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
      "w-full text-left border rounded-lg px-4 py-3 hover:bg-orange-50 transition";
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
    localStorage.setItem("burnout_score", score);
    window.location.href = "/hasil?tes=burnout";
  }
}

function updateProgress() {
  const percent = ((currentQuestion + 1) / questions.length) * 100;
  progressBar.style.width = percent + "%";
  currentText.innerText = currentQuestion + 1;
}

renderQuestion();
