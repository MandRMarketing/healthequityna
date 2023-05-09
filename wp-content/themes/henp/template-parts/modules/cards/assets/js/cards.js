document.addEventListener('DOMContentLoaded', () => {
    let counters = document.querySelectorAll('.cards__container .card h1');
  
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
          setCounter(entry.target, parseInt(entry.target.textContent), entry.target.classList.contains('percentage'), entry.target.dataset.animated);
          entry.target.dataset.animated = true;
        } else {
          entry.target.classList.remove('active');
        }
      });
    });
  
    counters.forEach(counter => {
      observer.observe(counter);
    });
  });
  
  function setCounter(element, number, isPercentage, animated) {
    if (animated === 'true') {
      element.textContent = number + (isPercentage ? '%' : '');
      return;
    }
  
    let counter = 0;
    let interval = setInterval(() => {
      if (counter <= number) {
        element.textContent = counter + (isPercentage ? '%' : '');
        counter++;
      } else {
        clearInterval(interval);
      }
    }, 20);
  }
  