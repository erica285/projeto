const toggleButton = document.getElementById('mode-switch');
const themeStylesheet = document.getElementById('theme-stylesheet');

// Verifica o tema armazenado no localStorage
const currentTheme = localStorage.getItem('theme');
if (currentTheme) {
    themeStylesheet.setAttribute('href', currentTheme);
}

// Alternar entre os temas
toggleButton.addEventListener('click', () => {
    if (themeStylesheet.getAttribute('href') === 'light-mode.css') {
        themeStylesheet.setAttribute('href', 'dark-mode.css');
        localStorage.setItem('theme', 'dark-mode.css');
    } else {
        themeStylesheet.setAttribute('href', 'light-mode.css');
        localStorage.setItem('theme', 'light-mode.css');
    }
});