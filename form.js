let currentStep = 1;

function showStep(step) {
    let steps = document.querySelectorAll('.step');
    steps.forEach(step => {
        step.style.display = "none";
    });
    document.getElementById('step' + step).style.display = "block";

    let progressBar = document.getElementById('progressBar');
    let progress = ((step - 1) / (steps.length - 1)) * 100;
    progressBar.style.width = progress + "%";
}

function nextStep() {
    currentStep++;
    showStep(currentStep);
}

function prevStep() {
    currentStep--;
    showStep(currentStep);
}

function submitForm() {
    // Process form submission here
    if (currentStep === 5) {
        let form = document.getElementById('jobForm');
        let formData = new FormData(form);
        
        fetch('form.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (response.ok) {
                return response.text();
            } else {
                throw new Error('Error submitting form');
            }
        })
        .then(data => {
            alert(data); // Display server response
            // Optionally, you can reset the form or perform other actions after successful submission
            // For example, resetForm();
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
}
