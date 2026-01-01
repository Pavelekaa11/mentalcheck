const scoreEl = document.getElementById("score");
const levelEl = document.getElementById("level");
const descEl = document.getElementById("description");

const score = parseInt(localStorage.getItem("harga_result")) || 0;
scoreEl.innerText = score;

let level = "";
let desc = "";

if (score < 15) {
    level = "Harga diri rendah";
    desc =
        "Kamu cenderung memiliki penilaian yang kurang positif terhadap diri sendiri. Membangun penerimaan diri dan dukungan sosial dapat membantu.";
} else if (score <= 25) {
    level = "Harga diri sedang";
    desc =
        "Kamu memiliki tingkat harga diri yang cukup baik. Tetap pertahankan sikap positif terhadap diri sendiri dan terus berkembang.";
} else {
    level = "Harga diri tinggi";
    desc =
        "Kamu memiliki pandangan yang positif dan sehat terhadap diri sendiri. Ini merupakan indikator kesejahteraan psikologis yang baik.";
}

levelEl.innerText = level;
descEl.innerText = desc;
