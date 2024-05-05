
const eyeIcon = document.querySelector('.far.fa-eye-slash');
const passwordInput = document.getElementById('password');


eyeIcon.addEventListener('click', () => {
    
    const type = passwordInput.type === 'password' ? 'text' : 'password';
    passwordInput.type = type;

   
    eyeIcon.classList.toggle('fa-eye-slash');
    eyeIcon.classList.toggle('fa-eye');
});
