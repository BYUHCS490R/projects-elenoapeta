document.getElementById("myForm").addEventListener("submit", handleSubmit);

function handleSubmit(event) {
  event.preventDefault();

  let name = document.getElementById("name");
  let email = document.getElementById("email");
  let age = document.getElementById("age");
  let comment = document.getElementById("comment");

  [name, email, age, comment].forEach(input => input.classList.remove("error"));

  let errors = 0;

  if (!name.value.trim()) {
    name.classList.add("error");
    errors++;
  }

  if (!email.value.trim()) {
    email.classList.add("error");
    errors++;
  }

  if (!comment.value.trim()) {
    comment.classList.add("error");
    errors++;
  }

  if (age.value < 18 || age.value > 80) {
    age.classList.add("error");
    alert("Age must be between 18 and 80.");
    errors++;
  }

  if (errors > 0) {
    alert("Please fill out all required fields correctly.");
    return;
  }

  const data = {
    name: name.value,
    email: email.value,
    age: age.value,
    comment: comment.value
  };

  console.log("Form Data:", data);

  const xhr = new XMLHttpRequest();
  xhr.open("GET", "response.json", true);

  xhr.onload = function () {
    if (xhr.status === 200) {
      let response = JSON.parse(xhr.responseText);

      document.getElementById("responseMessage").innerHTML = response.message;

      showPopup(response.message);

      document.getElementById("myForm").reset();
      document.getElementById("myForm").style.opacity = "0.6";
    }
  };

  xhr.send();
}

function showPopup(message) {
  let popup = document.getElementById("popup");
  let p = document.getElementById("popupMessage");

  p.textContent = message;
  popup.classList.remove("hidden");

  setTimeout(() => popup.classList.add("show"), 50);

  setTimeout(() => {
    popup.classList.remove("show");
    setTimeout(() => popup.classList.add("hidden"), 400);
  }, 3000);
}
