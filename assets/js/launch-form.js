document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('launch-form');
  if (!form) return;

  const message = document.getElementById('form-message');
  const submitBtn = form.querySelector('button[type="submit"]');

  form.addEventListener('submit', async (e) => {
    e.preventDefault();

    const email = form.email.value.trim();
    const notRobot = form.not_robot.checked;
    const consentGiven = form.consent_given.checked;

    message.textContent = '';
    message.className = 'text-sm text-center pt-1';

    if (!email) {
      message.textContent = 'Please enter your email address.';
      message.classList.add('text-burgundy');
      return;
    }
    if (!notRobot) {
      message.textContent = 'Please confirm the "not a robot" checkbox.';
      message.classList.add('text-burgundy');
      return;
    }
    if (!consentGiven) {
      message.textContent = 'Please confirm you consent to receive marketing emails.';
      message.classList.add('text-burgundy');
      return;
    }

    submitBtn.disabled = true;
    submitBtn.classList.add('opacity-60');

    try {
      const res = await fetch('api/newsletter-submit.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ email, not_robot: notRobot, consent_given: consentGiven }),
      });
      const data = await res.json();

      if (data.success) {
        form.reset();
        message.textContent = "You're on the list. See you at launch.";
        message.classList.add('text-forest');
      } else {
        message.textContent = data.error || 'Something went wrong. Please try again.';
        message.classList.add('text-burgundy');
      }
    } catch (err) {
      message.textContent = 'Network error — please try again in a moment.';
      message.classList.add('text-burgundy');
    } finally {
      submitBtn.disabled = false;
      submitBtn.classList.remove('opacity-60');
    }
  });
});
