const questions = [
  { text: "Dalam sebulan terakhir, seberapa sering kamu merasa kesal karena sesuatu yang terjadi secara tak terduga?" },
  { text: "Dalam sebulan terakhir, seberapa sering kamu merasa tidak mampu mengontrol hal-hal penting dalam hidupmu?" },
  { text: "Dalam sebulan terakhir, seberapa sering kamu merasa gugup dan stres?" },
  { text: "Dalam sebulan terakhir, seberapa sering kamu merasa yakin mampu menangani masalah pribadi?" , reverse: true },
  { text: "Dalam sebulan terakhir, seberapa sering kamu merasa bahwa segala sesuatunya berjalan sesuai keinginanmu?" , reverse: true },
  { text: "Dalam sebulan terakhir, seberapa sering kamu merasa tidak mampu mengatasi semua hal yang harus kamu lakukan?" },
  { text: "Dalam sebulan terakhir, seberapa sering kamu mampu mengendalikan gangguan dalam hidupmu?" , reverse: true },
  { text: "Dalam sebulan terakhir, seberapa sering kamu merasa berada di atas segalanya?" , reverse: true },
  { text: "Dalam sebulan terakhir, seberapa sering kamu marah karena hal-hal yang berada di luar kendalimu?" },
  { text: "Dalam sebulan terakhir, seberapa sering kamu merasa kesulitan menumpuk sehingga tidak bisa diatasi?" }
];

const options = [
  { label: "Tidak pernah", value: 0 },
  { label: "Hampir tidak pernah", value: 1 },
  { label: "Kadang-kadang", value: 2 },
  { label: "Cukup sering", value: 3 },
  { label: "Sangat sering", value: 4 }
];

let currentQuestion = 0;
let score = 0;

const questionEl = document.getElementById("question");
const answersEl = document.getElementById("answers");
const progressBar = document.getElementById("progressBar");
const currentText = document.getElementById("current");

function renderQuestion() {
  questionEl.innerText = questions[currentQuestion].text;
  answersEl.innerHTML = "";

  options.forEach(opt => {
    const btn = document.createElement("button");
    btn.className =
      "w-full text-left border rounded-lg px-4 py-3 hover:bg-blue-50 transition";
    btn.innerText = opt.label;

    btn.onclick = () => handleAnswer(opt.value);
    answersEl.appendChild(btn);
  });

  updateProgress();
}

function handleAnswer(value) {
  const q = questions[currentQuestion];

  // reverse scoring untuk item positif
  if (q.reverse) {
    score += (4 - value);
  } else {
    score += value;
  }

  currentQuestion++;

  if (currentQuestion < questions.length) {
    renderQuestion();
  } else {
    localStorage.setItem("pss10_result", score);
    window.location.href = "/hasil/pss10";
  }
}

function updateProgress() {
  const percent = ((currentQuestion + 1) / questions.length) * 100;
  progressBar.style.width = percent + "%";
  currentText.innerText = currentQuestion + 1;
}

// init
renderQuestion();
