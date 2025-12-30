const scoreEl = document.getElementById("score");
const levelEl = document.getElementById("level");
const descEl = document.getElementById("description");

const score = parseInt(localStorage.getItem("burnout_result")) || 0;
scoreEl.innerText = score;

let level = "";
let desc = "";

if (score <= 7) {
    level = "Burnout rendah";
    desc =
        "Tingkat kelelahan yang kamu alami masih tergolong rendah. Kamu cukup mampu menjaga keseimbangan energi fisik dan emosional.";
} else if (score <= 15) {
    level = "Burnout sedang";
    desc =
        "Kamu mulai menunjukkan tanda-tanda burnout. Perlu perhatian pada waktu istirahat dan manajemen aktivitas harian.";
} else {
    level = "Burnout tinggi";
    desc =
        "Tingkat burnout kamu tinggi. Sangat disarankan untuk mengambil waktu istirahat dan mencari dukungan profesional jika diperlukan.";
}

levelEl.innerText = level;
descEl.innerText = desc;
