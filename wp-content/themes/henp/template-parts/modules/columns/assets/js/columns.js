const fadeText = document.querySelector('#about .fade-text');
const readMoreBtn = document.querySelector('#about .btn');

readMoreBtn.addEventListener('click', function () {
  fadeText.classList.toggle('expanded');
  if (fadeText.classList.contains('expanded')) {
    readMoreBtn.textContent = 'Hide';
  } else {
    readMoreBtn.textContent = 'Read More';
  }
});
