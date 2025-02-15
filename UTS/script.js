$(document).ready(function() {
    $("form").submit(function(event) {
        event.preventDefault();
        
        alert("Tunggu sebentar...");

        this.submit();
    });
});

function displayResult(message) {
    document.getElementById('result').innerText = message; 
}