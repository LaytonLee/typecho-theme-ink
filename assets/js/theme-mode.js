/**
 * 明暗主题切换
 */

let themeSwitchButton = document.getElementById('themeSwitch');
let root = document.documentElement;
let currentTheme = getCurTheme()

// 初始化主题
updateTheme();

// 切换按钮点击事件
themeSwitchButton.addEventListener('click', function() {
    currentTheme = currentTheme === 'light' ? 'dark' : 'light';
    updateTheme();
    localStorage.setItem('theme_preference', currentTheme);
});

function getThemeByTime() {
    // 根据时间判断页面主题
    let currentHour = (new Date()).getHours();
    let currentTheme;

    // 判断白天还是夜晚
    if (currentHour >= 6 && currentHour < 18) {
        currentTheme = "light"
    } else {
        currentTheme = "dark"
    }

    return currentTheme;
}

function getCurTheme() {
    let currentTheme = localStorage.getItem('theme_preference');

    if (currentTheme === null || currentTheme === undefined) {
        currentTheme = getThemeByTime()
    }

    return currentTheme
}

// 更新主题样式
function updateTheme() {
    if (currentTheme === 'light') {
        root.style.setProperty('--bg-color', 'var(--bg-color-light)');
        root.style.setProperty('--text-color', 'var(--text-color-light)');
        root.style.setProperty('--card-bg-color', 'var(--card-bg-light)');
    } else {
        root.style.setProperty('--bg-color', 'var(--bg-color-dark)');
        root.style.setProperty('--text-color', 'var(--text-color-dark)');
        root.style.setProperty('--card-bg-color', 'var(--card-bg-dark)');
    }
}

