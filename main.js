const card = document.querySelectorAll(".card__inner");

card.addEventListener("click", function (e) {
  card.classList.toggle('is-flipped');
});