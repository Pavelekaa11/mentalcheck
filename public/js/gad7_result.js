const score = parseInt(localStorage.getItem("gad7_result"));

const scoreEl = document.getElementById("score");
const levelEl = document.getElementById("level");
const descEl = document.getElementById("description");
const boxEl = document.getElementById("scoreBox");

if (isNaN(score)) {
    scoreEl.innerText = "-";
    levelEl.innerText = "Data tidak ditemukan";
    descEl.innerText = "Silakan ulangi tes terlebih dahulu.";
} else {
    scoreEl.innerText = score;

    if (score <= 4) {
        setResult(
            "Kecemasan minimal",
            "green",
            "Kamu tidak menunjukkan gejala kecemasan yang signifikan."
        );
    } else if (score <= 9) {
        setResult(
            "Kecemasan ringan",
            "yellow",
            "Terdapat tanda-tanda kecemasan ringan. Perhatikan keseimbangan aktivitas dan istirahat."
        );
    } else if (score <= 14) {
        setResult(
            "Kecemasan sedang",
            "orange",
            "Gejala kecemasan mulai berdampak pada aktivitas harian."
        );
    } else {
        setResult(
            "Kecemasan berat",
            "red",
            "Gejala kecemasan cukup berat dan sebaiknya dikonsultasikan ke profesional."
        );
    }
}

function setResult(level, color, desc) {
    levelEl.innerText = level;
    descEl.innerText = desc;

    boxEl.classList.add(`bg-${color}-50`, `text-${color}-700`);
}
