    function detectUserTheme() {
        const isDarkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
        localStorage.setItem('theme', isDarkMode ? 'dark' : 'light');
    }
    detectUserTheme();
    const theme = document.getElementById('theme');
    const userTheme = localStorage.getItem('theme');

    if (userTheme === 'dark') {
        theme.setAttribute('data-bs-theme','dark')
    }
