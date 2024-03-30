var longClickTimer;
var targetElements = document.querySelectorAll(".post");

if (targetElements.length > 0) {
  targetElements.forEach(function (targetElement) {
    targetElement.addEventListener("mousedown", function (event) {
      longClickTimer = setTimeout(function () {
        var selected = document.getElementById(event.target.id).style;
        if (selected.boxShadow != "") {
          selected.boxShadow = "";
          selected.backgroundColor = "var(--tertiary-color)"
        } else {


          selected.boxShadow = "#0067C0 0px 0px 0px 2px inset";
          selected.backgroundColor = "#0067c014"
        }
      }, 500);
    });

    targetElement.addEventListener("mouseup", function (event) {
      clearTimeout(longClickTimer);
    });
  });
}

function closeModal() {
  console.log(document.getElementById("title").value = "");
  console.log(document.getElementById("description").value = "");
  document.getElementById("containerModal").style.display = "none";
}

function openModal() {
  document.getElementById("containerModal").style.display = "flex";
}