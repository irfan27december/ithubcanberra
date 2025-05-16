function openCalendar() {
  document.getElementById("calendar-modal").style.display = "flex";
  document.getElementById("appointment-date").valueAsDate = new Date();
}

function closeCalendar() {
  document.getElementById("calendar-modal").style.display = "none";
  document.getElementById("form-response").innerText = "";
}

document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("appointment-form");
  form.addEventListener("submit", function (e) {
    e.preventDefault();
    const formData = new FormData(form);

    fetch("appointment_handler.php", {
      method: "POST",
      body: formData
    })
      .then(response => response.text())
      .then(data => {
        const msg = document.getElementById("form-response");
        if (data.trim() === "success") {
          msg.innerText = "Appointment submitted successfully!";
          msg.style.color = "green";
        } else {
          msg.innerText = "There was an error submitting your appointment.";
          msg.style.color = "red";
        }
      });
  });
});
