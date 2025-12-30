const scoreEl = document.getElementById("score");
const levelEl = document.getElementById("level");
const descEl = document.getElementById("description");

const score = parseInt(localStorage.getItem("phq9_result")) || 0;
scoreEl.innerText = score;

let level = "";
let desc = "";

if (score <= 4) {
    level = "Minimal atau tidak ada depresi";
    desc =
        "Gejala depresi yang kamu alami tergolong sangat ringan. Tetap jaga kesehatan mental dan fisikmu.";
} else if (score <= 9) {
    level = "Depresi ringan";
    desc =
        "Kamu menunjukkan beberapa gejala depresi ringan. Coba perhatikan pola tidur, aktivitas harian, dan dukungan sosial.";
} else if (score <= 14) {
    level = "Depresi sedang";
    desc =
        "Gejala yang kamu alami cukup mengganggu. Pertimbangkan untuk berbicara dengan orang terpercaya atau tenaga profesional.";
} else if (score <= 19) {
    level = "Depresi sedang hingga berat";
    desc =
        "Gejala depresi yang kamu alami signifikan. Sangat disarankan untuk mencari bantuan profesional.";
} else {
    level = "Depresi berat";
    desc =
        "Kondisi ini perlu perhatian serius. Mohon pertimbangkan segera menghubungi tenaga kesehatan mental.";
}

levelEl.innerText = level;
descEl.innerText = desc;
