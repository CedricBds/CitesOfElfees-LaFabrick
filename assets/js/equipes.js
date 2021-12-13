document.addEventListener("DOMContentLoaded", function () {
  let elemsHide = document.querySelectorAll(".disabled");
  elemsHide.forEach((elem) => {
    elem.href = "";
  });

  console.log(elemsHide);
});
