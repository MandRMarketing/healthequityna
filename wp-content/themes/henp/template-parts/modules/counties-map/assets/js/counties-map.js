const svg = document.querySelector('svg');
svg.addEventListener('click', (event) => {
  const g = event.target.closest('g');
  if (g) {
    const gId = g.getAttribute('id');
    const toggleId = gId + '-toggle';
    const toggleElement = document.getElementById(toggleId);
    const triggerElement = toggleElement.querySelector('.toggle__trigger');

    const isActive = triggerElement.classList.contains('toggle--active');

    const allToggles = document.querySelectorAll('.toggle');
    allToggles.forEach(function (toggle) {
      const toggleTrigger = toggle.querySelector('.toggle__trigger');
      const toggleBox = toggle.querySelector('.toggle__box');
      if (toggle !== toggleElement) {
        toggle.classList.remove('toggle--active');
        toggleTrigger.setAttribute('aria-expanded', 'false');
        toggle.setAttribute('aria-expanded', 'false');
        if (toggleBox) {
          toggleBox.setAttribute('aria-hidden', 'true');
          toggleBox.style.display = 'none';
        }
        const triggerText = toggle.querySelector('.toggle__trigger-text');
        if (triggerText) {
          triggerText.textContent = triggerText.dataset.show;
        }
      }
    });

    if (!isActive) {
      toggleElement.classList.add('toggle--active');
      triggerElement.setAttribute('aria-expanded', 'true');
      toggleElement.setAttribute('aria-expanded', 'true');
      const toggleBox = toggleElement.querySelector('.toggle__box');
      if (toggleBox) {
        toggleBox.setAttribute('aria-hidden', 'false');
        toggleBox.style.display = 'block';
      }
      const triggerText = toggleElement.querySelector('.toggle__trigger-text');
      if (triggerText) {
        triggerText.textContent = triggerText.dataset.hide;
      }
    } else {
      toggleElement.classList.remove('toggle--active');
      triggerElement.setAttribute('aria-expanded', 'false');
      toggleElement.setAttribute('aria-expanded', 'false');
      const toggleBox = toggleElement.querySelector('.toggle__box');
      if (toggleBox) {
        toggleBox.setAttribute('aria-hidden', 'true');
        toggleBox.style.display = 'none';
      }
      const triggerText = toggleElement.querySelector('.toggle__trigger-text');
      if (triggerText) {
        triggerText.textContent = triggerText.dataset.show;
      }
    }
  }
});
