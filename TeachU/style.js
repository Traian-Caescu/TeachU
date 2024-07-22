function hideShow() {
    const pass = document.querySelector('#password');
    const typeAttr = pass.getAttribute('type');
    const passwordInfo = document.querySelector('#password-info')

    if (typeAttr == 'password') {
        pass.setAttribute('type', 'text');
        passwordInfo.textContent = 'Hide password';
    } else if (typeAttr == 'text') {
        pass.setAttribute('type', 'password');
        passwordInfo.textContent = 'Show password';

    }

}


// flip card from log in to register
var card = document.getElementById("card");
var title = document.getElementById("title");

function openRegister() {
    card.style.transform = "rotateY(-180deg)";
    title.innerHTML = 'Registration-Form';
}

function openLogin() {
    card.style.transform = "rotateY(0deg)";
    title.innerHTML = 'Login-Form';
}


function toggleNavbar() {
  var nav = document.getElementById("navbarNav");

  if (nav.className === "navbar-nav") {
    nav.className += " show";
  } else {
    nav.className = "navbar-nav";
  }
}




var answers = ["D", "B", "A", "D", "D"],
    tot = answers.length;
function getCheckedValue(radioName) {
    var radios = document.getElementsByName(radioName);
    for (var y = 0; y < radios.length; y++)
        if (radios[y].checked) return radios[y].value;
}
function getScore() {
    var score = 0;
    for (var i = 0; i < tot; i++)
        if (getCheckedValue("question" + i) === answers[i]) score += 1;
    return score;
}
function returnScore() {
    document.getElementById("myresults").innerHTML =
        "Your score is " + getScore() + "/" + tot;
    if (getScore() > 3) {
        console.log("Congratulations");
    }
}








document.getElementById("quizButton").onclick = function () {
        location.href = "quiz.php";
    };
	
	
	document.getElementById("mathButton").onclick = function () {
        location.href = "bodmas.php";
    };
