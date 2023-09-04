// Get all buttons with class "mostrar-modal"
const buttons = document.querySelectorAll('.mostrar-modal');

// Get all modals
const modals = document.querySelectorAll('.modal');

// Attach click event listeners to each button
buttons.forEach((button, index) => {
    button.addEventListener('click', () => {
        modals[index].style.display = 'block';
    });
});

// Attach click event listeners to close buttons
const closeButtons = document.querySelectorAll('.close');
closeButtons.forEach((closeButton) => {
    closeButton.addEventListener('click', () => {
        modals.forEach((modal) => {
            modal.style.display = 'none';
        });
    });
});
