const text = "Animated Message";
const colors = ["#ff0000", "#ffa500", "#ffff00", "#008000", "#0000ff", "#4b0082", "#9400d3"];
let index = 0;
let letter = text.split('');

function animateText() {
 letter.forEach((char, i) => {
    const color = colors[index % colors.length];
    console.log(`%c${char}`, `color: ${color}`);
    index++;
 });
}

setInterval(animateText, 500);