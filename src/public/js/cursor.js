document.addEventListener("DOMContentLoaded", function () {
  const stalker = document.getElementById("cursor");
  document.addEventListener("mousemove", function (e) {
    const x = e.clientX;
    const y = e.clientY;
    stalker.style.opacity = "0.2";
    stalker.style.transform = "translate(" + x + "px, " + y + "px)"; 
  });
});
