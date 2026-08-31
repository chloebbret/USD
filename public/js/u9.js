const coaches = document.querySelectorAll('.coach');

function checkCoaches() {
  coaches.forEach((coach) => {
    const coachTop = coach.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;

    if (coachTop < windowHeight) {
      coach.classList.add('show');
    }
  });
}

window.addEventListener('scroll', checkCoaches);
