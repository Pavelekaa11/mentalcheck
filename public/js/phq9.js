const questions = [
    {
        text: "Sedikit tertarik atau bergairah dalam melakukan sesuatu",
    },
    {
        text: "Merasa murung, sedih, atau putus asa",
    },
    {
        text: "Sulit tidur atau terlalu banyak tidur",
    },
    {
        text: "Merasa lelah atau kurang bertenaga",
    },
    {
        text: "Nafsu makan berkurang atau berlebihan",
    },
    {
        text: "Merasa buruk tentang diri sendiri — atau merasa gagal",
    },
    {
        text: "Sulit berkonsentrasi pada sesuatu",
    },
    {
        text: "Bergerak atau berbicara sangat lambat atau terlalu gelisah",
    },
    {
        text: "Pikiran bahwa Anda lebih baik mati atau ingin menyakiti diri sendiri",
    },
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
const warningBox = document.getElementById("warning");

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

    // warning khusus soal ke-9
    if (currentQuestion === 8) {
        warningBox.classList.remove("hidden");
    } else {
        warningBox.classList.add("hidden");
    }

    updateProgress();
}

function handleAnswer(value) {
    score += value;

    // extra perhatian untuk soal 9
    if (currentQuestion === 8 && value > 0) {
        alert(
            "Terima kasih sudah jujur menjawab.\n" +
                "Jika kamu merasa tidak aman, pertimbangkan untuk menghubungi orang terdekat atau profesional."
        );
    }

    currentQuestion++;

    if (currentQuestion < questions.length) {
        renderQuestion();
    } else {
        localStorage.setItem("phq9_result", score);
        window.location.href = "/hasil/phq9";
    }
}

function updateProgress() {
    const percent = ((currentQuestion + 1) / questions.length) * 100;
    progressBar.style.width = percent + "%";
    currentText.innerText = currentQuestion + 1;
}

// init
renderQuestion();
