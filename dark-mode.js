document.addEventListener('DOMContentLoaded', function() {
    const darkModeToggle = document.getElementById('dark-mode-switch');
    const darkModeStylesheet = document.getElementById('dark-mode-style');
    
    // Check for saved user preference
    const savedMode = localStorage.getItem('darkMode');
    if (savedMode === 'enabled') {
        enableDarkMode();
        darkModeToggle.checked = true;
    }
    
    // Toggle dark mode
    darkModeToggle.addEventListener('change', function() {
        if (this.checked) {
            enableDarkMode();
            localStorage.setItem('darkMode', 'enabled');
        } else {
            disableDarkMode();
            localStorage.setItem('darkMode', 'disabled');
        }
    });
    
    function enableDarkMode() {
        darkModeStylesheet.disabled = false;
        document.body.classList.add('dark-mode');
    }
    
    function disableDarkMode() {
        darkModeStylesheet.disabled = true;
        document.body.classList.remove('dark-mode');
    }
});