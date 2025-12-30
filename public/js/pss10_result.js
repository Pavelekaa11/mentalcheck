const scoreEl = document.getElementById("score");
const levelEl = document.getElementById("level");
const descEl = document.getElementById("description");

const score = parseInt(localStorage.getItem("pss10_result")) || 0;
scoreEl.innerText = score;

let level = "";
let desc = "";

if (score <= 13) {
    level = "Stres rendah";
    desc =
        "Tingkat stres yang kamu alami tergolong rendah. Kamu cukup mampu mengelola tekanan dalam kehidupan sehari-hari.";
} else if (score <= 26) {
    level = "Stres sedang";
    desc =
        "Kamu mengalami tingkat stres sedang. Disarankan untuk mulai menerapkan manajemen stres dan menjaga keseimbangan hidup.";
} else {
    level = "Stres tinggi";
    desc =
        "Tingkat stres yang kamu alami tinggi. Pertimbangkan untuk mencari dukungan sosial atau bantuan profesional.";
}

levelEl.innerText = level;
descEl.innerText = desc;
