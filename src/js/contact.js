document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("contact-form");
  if (!form) return;

  const successBox = document.getElementById("contact-success");
  const errorFields = Array.from(document.querySelectorAll(".field-error"));

  function clearErrors() {
    errorFields.forEach((el) => (el.textContent = ""));
    if (successBox) {
      successBox.classList.add("hidden");
      successBox.textContent = "";
    }
  }

  function showFieldErrors(errors) {
    // errors expected as { fieldName: message }
    for (const [field, msg] of Object.entries(errors)) {
      const el = document.querySelector(`.field-error[data-for="${field}"]`);
      if (el) el.textContent = msg;
    }
  }

  form.addEventListener("submit", function (e) {
    e.preventDefault();
    clearErrors();

    const formData = new FormData(form);

    fetch(form.action, {
      method: form.method || "POST",
      body: formData,
      headers: {
        Accept: "application/json",
      },
    })
      .then(async (res) => {
        const contentType = res.headers.get("Content-Type") || "";
        let data;
        if (contentType.includes("application/json")) {
          data = await res.json();
        } else {
          data = { success: !res.ok, message: await res.text() };
        }

        if (res.ok && data.success) {
          if (successBox) {
            successBox.textContent = data.message || "Message envoyé.";
            successBox.classList.remove("hidden");
          }
          form.reset();
        } else {
          const errors = data.errors || {};
          if (Object.keys(errors).length > 0) {
            showFieldErrors(errors);
          } else if (data.message) {
            // si erreur générale, afficher en haut (successBox réutilisé mais en rouge)
            if (successBox) {
              successBox.textContent = data.message;
              successBox.classList.remove("hidden");
              successBox.classList.remove("text-green-700", "bg-green-100", "border-green-200");
              successBox.classList.add("text-red-600", "bg-red-100", "border-red-200");
            }
          }
        }
      })
      .catch((err) => {
        if (successBox) {
          successBox.textContent = "Erreur réseau. Veuillez réessayer.";
          successBox.classList.remove("hidden");
          successBox.classList.remove("text-green-700", "bg-green-100", "border-green-200");
          successBox.classList.add("text-red-600", "bg-red-100", "border-red-200");
        }
      });
  });
});
