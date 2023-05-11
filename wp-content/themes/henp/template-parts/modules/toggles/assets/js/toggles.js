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
  
      const $this = e.target;
      const toggleBox = $this.nextElementSibling;
  
      // Close all other open toggles
      const allToggles = Array.from(toggles);
      allToggles.forEach(function (toggle) {
        const trigger = toggle.querySelector('.toggle__trigger');
        if (trigger !== $this && trigger.getAttribute('aria-expanded') === 'true') {
          trigger.setAttribute('aria-expanded', 'false');
          toggle.querySelector('.toggle__box').setAttribute('aria-hidden', 'true');
          toggle.classList.remove('toggle--active');
        }
      });
  
      // Control ARIA landmarks on open
      if ($this.getAttribute('aria-expanded') === 'false') {
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
      const trigger = e.querySelector('.toggle__trigger');
  
      // Check to make sure box is intended to be hidden on load
      if (toggleBox.getAttribute('aria-hidden') !== 'false' || trigger.getAttribute('aria-expanded') === 'false') {
        toggleBox.style.display = 'none';
      } else {
        toggleBox.style.display = 'block';
      }
  
      trigger.addEventListener('click', toggleBehavior);
    });
  }
  