document.addEventListener("DOMContentLoaded", function () {
  let firstContent = document.getElementById("hiddenInformations");
  let secondContent = document.getElementById("hiddenInformations_PtTwo");
  let toggleBtn = document.getElementById("toggleInfos");

  toggleBtn.addEventListener("click", function () {
    firstContent.style.display = "grid";
    secondContent.style.display = "grid";
    window.scroll({
      top: 700,
      left: 0,
      behavior: "smooth",
    });
  });
});
