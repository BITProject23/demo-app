function validateForm() {
    var firstName = document.getElementById("student_first_name").value;
    var lastName = document.getElementById("student_last_name").value;
    var nic = document.getElementById("student_nic").value;
    var email = document.getElementById("student_email").value;
    var genderElements = document.getElementsByName("student_gender").value;
    var dateOfBirth = document.getElementById("student_bod").value;
    var phoneNumber = document.getElementById("student_contact_no").value;
    

    var firstNameNameError = document.getElementById("firstNameNameError");
    var lastNameNameError = document.getElementById("lastNameNameError");
    var nicError = document.getElementById("nicError");
    var emailError = document.getElementById("emailError");
    var genderError = document.getElementById("genderError");
    var dateOfBirthError = document.getElementById("dateOfBirthError");
    var phoneNumberError = document.getElementById("phoneNumberError");
    

    // Reset previous error messages and color
    firstNameNameError.innerHTML = "";
    lastNameNameError.innerHTML = "";
    nicError.innerHTML = "";
    emailError.innerHTML = "";
    genderError.innerHTML = "";
    dateOfBirthError.innerHTML = "";
    phoneNumberError.innerHTML = "";
    

    var errorColor = "red"; // Error message color

    // Check if inputs are empty
    if (firstName === "") {
        firstNameNameError.innerHTML = "Please enter your first name";
        firstNameNameError.style.color = errorColor;
        return false;
    }

    if (lastName === "") {
        lastNameNameError.innerHTML = "Please enter your last name";
        lastNameNameError.style.color = errorColor;
        return false;
    }

    if (nic === "") {
        nicError.innerHTML = "Please enter your NIC number";
        nicError.style.color = errorColor;
        return false;
    }

    if (email === "") {
        emailError.innerHTML = "Please enter your email";
        emailError.style.color = errorColor;
        return false;
    }

    var selectedGender = "";
    for (var i = 0; i < genderElements.length; i++) {
        if (genderElements[i].checked) {
            selectedGender = genderElements[i].value;
           // break;
        }
    }
    alert (selectedGender);
    if (selectedGender === "") {
        genderError.innerHTML = "Please select your gender";
        genderError.style.color = errorColor;
        return false;
    }

    if (dateOfBirth === "") {
        dateOfBirthError.innerHTML = "Please enter your date of birth";
        dateOfBirthError.style.color = errorColor;
        return false;
    }

    

    if (phoneNumber === "") {
        phoneNumberError.innerHTML = "Please enter your phone number";
        phoneNumberError.style.color = errorColor;
        return false;
    }

        // Validate email format
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            emailError.innerHTML = "Please enter a valid email address";
            return false;
        }
    
        // Validate phone number format
        var phoneNumberRegex = /^\d{10}$/;
        if (!phoneNumberRegex.test(phoneNumber)) {
            phoneNumberError.innerHTML = "Please enter a valid 10-digit phone number";
            return false;
        }
    
        // Validate NIC format
        var nicRegex = /^[0-9]{9}[vVxX]$/;
        if (!nicRegex.test(nic)) {
            nicError.innerHTML = "Please enter a valid NIC number";
            return false;
        }

    

    // Rest of the validation code...

    return true; // Form validation passed
}
