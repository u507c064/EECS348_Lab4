function checkMatch() {
    // Get the input values
    let password1 = document.getElementById("pass1").value;
    let password2 = document.getElementById("pass2").value;

    // Check if passwords are at least 8 characters long
    if (password1.length < 8 || password2.length < 8) {
        alert("Error: Password must be at least 8 characters long.");
        return;
    }

    // Check if passwords match
    if (password1 !== password2) {
        alert("Error: Passwords do not match.");
        return;
    }

    // If both conditions pass
    alert("Success: Passwords match!");
}
