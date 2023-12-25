/**
 * 动态加载网站信息
 */
document.addEventListener("DOMContentLoaded", function() {
    let logo = "";    // site logo, for example: assets/img/avatar.png
    let siteName = "";     // site name
    let githubUrl = ""      // github url
    let copyright = "© 2022-2023 [your name]. All rights reserved.";  // copyright statement

    let logoUrl = getThemeUrl()  + logo;

    document.getElementById("site-logo").setAttribute("src", logoUrl);
    document.getElementById("site-name").innerText = siteName;
    document.getElementById("githubLink").setAttribute("href", githubUrl);
    document.getElementById("footer").innerHTML = copyright;

    function getThemeUrl() {
        // 从页面中获取主题的url
        themeUrl = document.getElementById("themeUrl").href;
        return themeUrl;
    }
}); 


