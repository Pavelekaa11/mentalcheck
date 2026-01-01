const questions = [
    {
        text: "Saya merasa bahwa saya adalah orang yang berharga.",
        reverse: false,
    },
    {
        text: "Saya merasa memiliki sejumlah kualitas yang baik.",
        reverse: false,
    },
    { text: "Secara umum, saya cenderung merasa gagal.", reverse: true },
    {
        text: "Saya mampu melakukan sesuatu sebaik kebanyakan orang lain.",
        reverse: false,
    },
    {
        text: "Saya merasa tidak memiliki banyak hal untuk dibanggakan.",
        reverse: true,
    },
    {
        text: "Saya memiliki sikap positif terhadap diri saya sendiri.",
        reverse: false,
    },
    { text: "Secara keseluruhan, saya puas dengan diri saya.", reverse: false },
    {
        text: "Saya berharap bisa lebih menghargai diri sendiri.",
        reverse: true,
    },
    { text: "Kadang saya merasa tidak berguna.", reverse: true },
    { text: "Saya sering merasa bahwa saya tidak baik.", reverse: true },
];

const options = [
    { label: "Sangat tidak setuju", value: 0 },
    { label: "Tidak setuju", value: 1 },
    { label: "Setuju", value: 2 },
    { label: "Sangat setuju", value: 3 },
];

let current = 0;
let score = 0;

const questionEl = document.getElementById("question");
const answersEl = document.getElementById("answers");
const progressBar = document.getElementById("progressBar");
const currentText = document.getElementById("current");

function renderQuestion() {
    questionEl.innerText = questions[current].text;
    answersEl.innerHTML = "";

    options.forEach((opt) => {
        const btn = document.createElement("button");
        btn.className =
            "w-full text-left border rounded-lg px-4 py-3 hover:bg-pink-50 transition";
        btn.innerText = opt.label;
        btn.onclick = () => handleAnswer(opt.value);
        answersEl.appendChild(btn);
    });

    updateProgress();
}

function handleAnswer(value) {
    const q = questions[current];
    score += q.reverse ? 3 - value : value;

    current++;

    if (current < questions.length) {
        renderQuestion();
    } else {
        localStorage.setItem("hargadiri_result", score);
        window.location.href = "/hasil/hargadiri";
    }
}

function updateProgress() {
    const percent = ((current + 1) / questions.length) * 100;
    progressBar.style.width = percent + "%";
    currentText.innerText = current + 1;
}

renderQuestion();
