export default class FormHandler {
  constructor() {
    this.contactForm = document.getElementById("contact_form");

    if (this.contactForm) {
      this.contactForm.addEventListener("submit", (event) =>
        this.handleSubmit(event)
      );
    }
  }

  handleSubmit(event) {
    event.preventDefault();

    // Check form validity using Bootstrap's method
    if (this.contactForm.checkValidity() === false) {
      this.contactForm.classList.add("was-validated");
      return;
    }

    const formData = new FormData(this.contactForm);
    formData.append("nonce", contactForm.nonce); // Include the nonce in the form data

    // Disable form elements to prevent additional submissions while processing
    this.disableFormElements(true);

    fetch("/wp-json/dbwp/v1/contactForm", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          alert("Thank you! I will get back to you as soon as possible.");
          this.contactForm.reset();
          // Reset the form's validation state
          this.contactForm.classList.remove("was-validated");
        } else {
          // Handle error scenarios here, if needed
          alert(data.message); // Display the error message
        }
      })
      .catch((error) => {
        // Handle error scenarios here, if needed
        console.error(error);
      })
      .finally(() => {
        // Re-enable form elements after processing is complete
        this.disableFormElements(false);
      });
  }

  // Helper function to disable or enable form elements
  disableFormElements(disable) {
    const formElements = this.contactForm.elements;
    for (const element of formElements) {
      element.disabled = disable;
    }
  }
}
