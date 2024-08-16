function consoleText(word, id, color) {
    var visible = true;
    var letterCount = 1;
    var waiting = false;
    var target = document.getElementById(id);
    var con = document.getElementById('console');

    // Check if the elements exist
    if (!target || !con) {
        console.error("Target element or console element not found!");
        return;
    }

    target.style.color = color;

    function typeEffect() {
        if (!waiting) {
            target.innerHTML = word.substring(0, letterCount);
            letterCount++;
            if (letterCount > word.length) {
                waiting = true;
                setTimeout(function() {
                    letterCount = 1;
                    waiting = false;
                }, 100);
            }
        }
    }

    function blinkCursor() {
        con.classList.toggle('hidden');
    }

    setInterval(typeEffect, 80);
    setInterval(blinkCursor, 150);
}

consoleText('Expand your business!', 'text', 'black');
