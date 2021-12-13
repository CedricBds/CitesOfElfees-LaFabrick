document.addEventListener("DOMContentLoaded", function () {
  /*INTERACTIONS*/
  let btn1 = document.getElementById("toggle1");
  let btn2 = document.getElementById("toggle2");
  let btn3 = document.getElementById("toggle3");
  let btn4 = document.getElementById("toggle4");
  let btn5 = document.getElementById("toggle5");
  /*AFFICHAGES*/
  let box1 = document.getElementById("box1");
  let box2 = document.getElementById("box2");
  let box3 = document.getElementById("box3");
  let box4 = document.getElementById("box4");
  let box5 = document.getElementById("box5");
  let def = document.getElementById("default");
  function hideAll() {
    box1.style.display = "none";
    box2.style.display = "none";
    box3.style.display = "none";
    box4.style.display = "none";
    box5.style.display = "none";
    def.style.display = "none";
  }

  btn1.addEventListener("click", function () {
    hideAll();
    box1.style.display = "block";
  });

  btn2.addEventListener("click", function () {
    hideAll();
    box2.style.display = "block";
  });

  btn3.addEventListener("click", function () {
    hideAll();
    box3.style.display = "block";
  });

  btn4.addEventListener("click", function () {
    hideAll();
    box4.style.display = "block";
  });

  btn5.addEventListener("click", function () {
    hideAll();
    box5.style.display = "block";
  });
});
