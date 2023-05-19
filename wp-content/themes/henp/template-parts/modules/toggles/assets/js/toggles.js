(function () {
  const toggles = document.querySelectorAll('.toggle');
  if (typeof toggles !== 'undefined' && toggles !== null) {
    Toggles(toggles);
  }
})();

/**
 * Default toggle functionality
 *
 * @param {Node} toggles Node list of all toggles
 */
function Toggles(toggles) {
  function toggleBehavior(e) {
    e.preventDefault();

    const $this = e.target.closest('.toggle');
    const toggleBox = $this.querySelector('.toggle__box');

    const isActive = $this.classList.contains('toggle--active');

    // Close all other toggles before opening the current one
    Array.from(toggles).forEach(function (toggle) {
      if (toggle !== $this && toggle.classList.contains('toggle--active')) {
        toggle.classList.remove('toggle--active');
        toggle.setAttribute('aria-expanded', 'false');
        toggle.querySelector('.toggle__box').setAttribute('aria-hidden', 'true');
        toggle.querySelector('.toggle__box').style.display = 'none';
      }
    });

    // Control ARIA landmarks on open
    if (!isActive) {
      $this.setAttribute('aria-expanded', 'true');
      toggleBox.setAttribute('aria-hidden', 'false');
    } else {
      // Control ARIA landmarks on close
      $this.setAttribute('aria-expanded', 'false');
      toggleBox.setAttribute('aria-hidden', 'true');
    }

    // Check if toggle trigger has multiple children
    let triggerText = $this.querySelector('.toggle__trigger-text');
    if (triggerText !== null) {
      const revealedText = triggerText.dataset.show;
      const hiddenText = triggerText.dataset.hide;

      // Only run if data attributes found
      if (typeof revealedText !== 'undefined' && typeof hiddenText !== 'undefined') {
        // Change value based on if toggle is active
        const toggleText = $this.classList.contains('toggle--active') ? revealedText : hiddenText;

        // Replace the current text value
        triggerText.textContent = toggleText;
      }
    }

    $this.classList.toggle('toggle--active');

    const toggleBoxDisplay = $this.classList.contains('toggle--active') ? 'block' : 'none';
    toggleBox.style.display = toggleBoxDisplay;
  }

  Array.prototype.slice.call(toggles, 0).forEach(function (e) {
    const toggleBox = e.querySelector('.toggle__box');

    // Check to make sure box is intended to be hidden on load
    if (toggleBox.getAttribute('aria-hidden') !== 'false') {
      toggleBox.style.display = 'none';
    }

    e.querySelector('.toggle__trigger').addEventListener('click', toggleBehavior);
  });
}
