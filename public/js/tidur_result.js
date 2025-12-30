const scoreEl = document.getElementById("score");
const levelEl = document.getElementById("level");
const descEl = document.getElementById("description");

const score = parseInt(localStorage.getItem("tidur_result")) || 0;
scoreEl.innerText = score;

let level = "";
let desc = "";

if (score <= 5) {
    level = "Kualitas tidur baik";
    desc =
        "Kualitas tidur kamu tergolong baik. Pertahankan kebiasaan tidur yang sehat.";
} else if (score <= 12) {
    level = "Kualitas tidur cukup";
    desc =
        "Terdapat beberapa gangguan tidur ringan. Coba perhatikan pola tidur dan waktu istirahatmu.";
} else {
    level = "Kualitas tidur buruk";
    desc =
        "Kualitas tidur kamu tergolong buruk. Disarankan untuk memperbaiki kebiasaan tidur dan mencari bantuan profesional bila perlu.";
}

levelEl.innerText = level;
descEl.innerText = desc;
