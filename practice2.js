function alert_paragraph_color() {
    // Get input values
    let borderR = document.getElementById("border_R").value;
    let borderG = document.getElementById("border_G").value;
    let borderB = document.getElementById("border_B").value;
    let borderWidth = document.getElementById("border_width").value;
    
    let bgR = document.getElementById("bg_R").value;
    let bgG = document.getElementById("bg_G").value;
    let bgB = document.getElementById("bg_B").value;
    
    // Construct color strings
    let borderColor = `rgb(${borderR}, ${borderG}, ${borderB})`;
    let backgroundColor = `rgb(${bgR}, ${bgG}, ${bgB})`;

    // Apply styles
    let paragraph = document.getElementById("paragraph");
    paragraph.style.borderColor = borderColor;
    paragraph.style.borderWidth = borderWidth + "px";
    paragraph.style.backgroundColor = backgroundColor;
}
