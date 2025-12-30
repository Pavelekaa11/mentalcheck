const questions = [
    { text: "Merasa gugup, cemas, atau tegang" },
    { text: "Tidak mampu menghentikan atau mengontrol rasa khawatir" },
    { text: "Terlalu banyak mengkhawatirkan berbagai hal" },
    { text: "Sulit untuk rileks" },
    { text: "Terlalu gelisah sehingga sulit untuk duduk diam" },
    { text: "Mudah merasa kesal atau mudah tersinggung" },
    { text: "Merasa takut seolah-olah sesuatu yang buruk akan terjadi" },
];

const options = [
    { label: "Tidak sama sekali", value: 0 },
    { label: "Beberapa hari", value: 1 },
    { label: "Lebih dari setengah hari", value: 2 },
    { label: "Hampir setiap hari", value: 3 },
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

    options.forEach((opt) => {
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
    score += value;
    currentQuestion++;

    if (currentQuestion < questions.length) {
        renderQuestion();
    } else {
        localStorage.setItem("gad7_result", score);
        window.location.href = "/hasil/gad7";
    }
}

function updateProgress() {
    const percent = ((currentQuestion + 1) / questions.length) * 100;
    progressBar.style.width = percent + "%";
    currentText.innerText = currentQuestion + 1;
}

// init
renderQuestion();
