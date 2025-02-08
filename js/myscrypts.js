// Get the button:
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) { element.className += " " + arr2[i]; }
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

function active() {
  //Add active class to the current button (highlight it)
  var btnContainer = document.getElementById("myBtnContainer");
  var btns = btnContainer.getElementsByClassName("btn");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }
}

function myFunction(x) {
  x.classList.toggle("change");
}

var modal = document.getElementById("myModal");
function activeModal() {
  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var img = document.getElementById("myImg");
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");
  img.onclick = function () {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }


  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on <span> (x), close the modal
  span.onclick = function () {
    modal.style.display = "none";
  }
}

function submitQuiz() {
  var q1Answer = document.querySelector('input[name="q1"]:checked');
  var q2Answer = document.querySelector('input[name="q2"]:checked');
  var q3Answer = document.querySelector('input[name="q3"]:checked');
  var heroCountAnswer = document.getElementById("heroCount").value;
  var fullName = document.getElementById("fullName").value.trim(); // Change to retrieve value

  // Check answers
  var correctAnswers = 0;

  if (q1Answer && q1Answer.value === "a") {
    correctAnswers++;
  }

  if (q2Answer && q2Answer.value === "c") {
    correctAnswers++;
  }

  if (q3Answer && q3Answer.value === "b") {
    correctAnswers++;
  }

  if (heroCountAnswer === "124") {
    correctAnswers++;
  }

  if (fullName.toLowerCase() === "defense of the ancients") { // Check case-insensitive
    correctAnswers++;
  }

  // Display correct answer count in the 'results' field
  document.getElementById('results').value = correctAnswers;

  // Example: Update progress bar based on correct answers (adjust as needed)
  var progressPercentage = (correctAnswers / 5) * 100; // Assuming there are 5 questions
  document.getElementById('progress').style.width = progressPercentage + "%";
  document.getElementById('progress').innerText = progressPercentage.toFixed(2) + "%";
}

function submitQuiz2() {
  var res = 0;

  var q1Answer = document.querySelector('input[name="q1"]:checked');
  if (q1Answer && q1Answer.value === "c") {
    res += 1;
    document.getElementById("q1d").style.display = "none";
    document.getElementById("q1s").style.display = "block";
    document.getElementById("q1s").innerHTML = "Pareizi!";
  } else {
    document.getElementById("q1d").style.display = "block";
    document.getElementById("q1s").style.display = "none";
    document.getElementById("q1d").innerHTML = "Nepareizi!";
  }

  var q2Answer = document.querySelector('input[name="q2"]:checked');
  if (q2Answer && q2Answer.value === "b") {
    res += 1;
    document.getElementById("q2d").style.display = "none";
    document.getElementById("q2s").style.display = "block";
    document.getElementById("q2s").innerHTML = "Pareizi!";
  } else {
    document.getElementById("q2d").style.display = "block";
    document.getElementById("q2s").style.display = "none";
    document.getElementById("q2d").innerHTML = "Nepareizi!";
  }

  var q3Answer = document.querySelector('input[name="q3"]:checked');
  if (q3Answer && q3Answer.value === "c") {
    res += 1;
    document.getElementById("q3d").style.display = "none";
    document.getElementById("q3s").style.display = "block";
    document.getElementById("q3s").innerHTML = "Pareizi!";
  } else {
    document.getElementById("q3d").style.display = "block";
    document.getElementById("q3s").style.display = "none";
    document.getElementById("q3d").innerHTML = "Nepareizi!";
  }

  var q4Answer = document.querySelector('input[name="q4"]:checked');
  if (q4Answer && q4Answer.value === "a") {
    res += 1;
    document.getElementById("q4d").style.display = "none";
    document.getElementById("q4s").style.display = "block";
    document.getElementById("q4s").innerHTML = "Pareizi!";
  } else {
    document.getElementById("q4d").style.display = "block";
    document.getElementById("q4s").style.display = "none";
    document.getElementById("q4d").innerHTML = "Nepareizi!";
  }

  var q5Answer = document.querySelector('input[name="q5"]:checked');
  if (q5Answer && q5Answer.value === "a") {
    res += 1;
    document.getElementById("q5d").style.display = "none";
    document.getElementById("q5s").style.display = "block";
    document.getElementById("q5s").innerHTML = "Pareizi!";
  } else {
    document.getElementById("q5d").style.display = "block";
    document.getElementById("q5s").style.display = "none";
    document.getElementById("q5d").innerHTML = "Nepareizi!";
  }

  window.alert("Jūsu rezultāts ir " + res + " pareizi no 5.");

}

function Register() {
  var username = document.getElementById("username").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var date = document.getElementById("date").value;
  var curse = document.querySelector('input[name="c1"]:checked').value;
  var group = document.getElementById("Group").value;

  // Collect all checked checkboxes
  var WEB = document.querySelectorAll('input[name="d1"]:checked');
  var webTechnologies = [];

  // Iterate over NodeList and push values to webTechnologies array
  WEB.forEach((checkbox) => {
    webTechnologies.push(checkbox.value);
  });

  var resultHTML = "<h2>Reģistrācijas dati</h2>";
  resultHTML += "<p><strong>Lietotājvārds:</strong> " + username + "</p>";
  resultHTML += "<p><strong>E-pasts:</strong> " + email + "</p>";
  resultHTML += "<p><strong>Parole:</strong> " + password + "</p>";
  resultHTML += "<p><strong>Dzimšanas diena:</strong> " + date + "</p>";
  resultHTML += "<p><strong>Kurss:</strong> " + curse + "</p>";
  resultHTML += "<p><strong>Grupa:</strong> " + group + "</p>";
  resultHTML += "<p><strong>WEB tehnoloģijas:</strong> " + webTechnologies.join(', ') + "</p>";

  var resultPage = window.open();
  resultPage.document.write(resultHTML);
}


function getCheckedValues() {
  // Получить все чекбоксы с именем "d1"
  const checkboxes = document.querySelectorAll('input[name="d1"]:checked');

  // Массив для хранения выбранных значений
  let selectedValues = [];

  // Пройти по всем выбранным чекбоксам и сохранить их значения
  checkboxes.forEach((checkbox) => {
    selectedValues.push(checkbox.value);
  });

  // Вывести результат на страницу
  document.getElementById('result').innerText = 'Вы выбрали: ' + selectedValues.join(', ');
}

var clickCount = 0;
function changeImage() {
  var imagePaths = ["../images/aaa.jpg", "../images/bbb.jpg", "../images/ccc.jpg", "../images/ddd.jpg", "../images/gxgxgx.jpg"];
  var image = document.getElementById("main-image");

  if (clickCount >= imagePaths.length) {
    clickCount = 0;
  }

  var currentIndex = clickCount;

  image.src = imagePaths[currentIndex];

  image.style.display = "block";
  clickCount++;


}


