<script>
    let string = '   Hello Ameer  Hamza   ';
    let trimmedString = string.trim();
    let length = trimmedString.length;
    let count = 0;  
    let wasPreviousLetterIsAlpha = false;

    function isPropperLetter(char) {
    if ((char.charCodeAt(0) >= 65 && char.charCodeAt(0) <= 90) || (char.charCodeAt(0) >= 97 && char.charCodeAt(0) <= 122)) {
        wasPreviousLetterIsAlpha = true;
    } else {
        wasPreviousLetterIsAlpha = false;
    }
    }

    for (let i = 0; i < length - 1; i++) {
    isPropperLetter(trimmedString[i]);
    if ((trimmedString[i] === ' ' || i === length - 1)) {
        count++;
    }
    }

    alert(count);
</script>