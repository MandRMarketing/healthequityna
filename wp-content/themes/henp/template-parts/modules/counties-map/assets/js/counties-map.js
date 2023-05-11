const svg = document.querySelector('svg');
svg.addEventListener('click', (event) => {
  const g = event.target.closest('g');
  if (g) {
    const gId = g.getAttribute('id');
    const toggleId = gId + '-toggle';
    // Get the toggle element by ID
    const toggleElement = document.getElementById(toggleId);
    const triggerElement = toggleElement.querySelector('.toggle__trigger');

    if (triggerElement.classList.contains('toggle--active')) {
      // Remove the active class
      triggerElement.classList.remove('toggle--active');

      // Set ARIA attributes
      toggleElement.setAttribute('aria-expanded', 'false');
      const toggleBox = toggleElement.querySelector('.toggle__box');
      if (toggleBox) {
        toggleBox.setAttribute('aria-hidden', 'true');
      }

      // Change the toggle trigger text
      const triggerText = toggleElement.querySelector('.toggle__trigger-text');
      if (triggerText) {
        triggerText.textContent = triggerText.dataset.show;
      }

      // Hide the toggle content box
      if (toggleBox) {
        toggleBox.style.display = 'none';
      }
    } else {
      // Set the toggle as active
      triggerElement.classList.add('toggle--active');

      // Set ARIA attributes
      toggleElement.setAttribute('aria-expanded', 'true');
      const toggleBox = toggleElement.querySelector('.toggle__box');
      if (toggleBox) {
        toggleBox.setAttribute('aria-hidden', 'false');
      }

      // Change the toggle trigger text
      const triggerText = toggleElement.querySelector('.toggle__trigger-text');
      if (triggerText) {
        triggerText.textContent = triggerText.dataset.hide;
      }

      // Show the toggle content box
      if (toggleBox) {
        toggleBox.style.display = 'block';
      }
    }
  }
});
