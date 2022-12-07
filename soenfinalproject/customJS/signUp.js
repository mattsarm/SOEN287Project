        const form = document.getElementById("myForm");
        const password = form.password;
        const confirmPassword = form.confirmPassword;
        const feedback = document.getElementById("confirmPassword-feedback");
        let isPasswordMatch = false;
  
        confirmPassword.addEventListener("input", () => {
          if (password.value != confirmPassword.value) {
            feedback.innerHTML = "Password do not match";
            isPasswordMatch = false;
          } else {
            feedback.innerHTML = "";
            isPasswordMatch = true;
          }
        });
  
        form.onsubmit = function () {
          if (isPasswordMatch) {
            alert("Form submitted. Great!");
            return true;
          }
          alert("Wait! Password did not match.");
          return false;
        };