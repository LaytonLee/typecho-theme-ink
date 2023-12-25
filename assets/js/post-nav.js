/**
 * 动态生成文章目录
 */
document.addEventListener("DOMContentLoaded", function() {
    let titleLevel = {
        "H2": 1,
        "H3": 2,
        "H4": 3,
        "H5": 4,
        "H6": 5
    }
    let titleLevelMap = new Map(Object.entries(titleLevel))

    let contentSections = document.querySelector('.post-content');
    if (contentSections === null || contentSections === undefined) {
        return ;
    }

    let sectionTitles = contentSections.querySelectorAll('h2, h3, h4, h5, h6');
    if (sectionTitles === null || sectionTitles === undefined || sectionTitles.length === 0) {
        return ;
    }

    let headingList = [];
    let topLevel = titleLevelMap.get(sectionTitles[0].tagName);
    let bottomLevel = topLevel + 2;

    sectionTitles.forEach(function(title, index) {  
        tmpLevel = titleLevelMap.get(title.tagName);
        
        switch(tmpLevel) {
            case topLevel:
                containerClass = "catelog-heading-1";
                break;
            case topLevel + 1:
                containerClass = "catelog-heading-2";
                break;
            case topLevel + 2:
                containerClass = "catelog-heading-3";
                break;
            default:
                containerClass = false;
        }
        
        if (containerClass) {
            let navLinkContainer = document.createElement('div');
            navLinkContainer.className = containerClass;

            let navLink = document.createElement('a');
            navLink.href = '#' + title.id;
            navLink.textContent = title.textContent;

            navLinkContainer.appendChild(navLink);
            headingList.push(navLinkContainer);
        }
    });

    let nav = document.getElementById("post-catelog-content")
    headingList.forEach(function(item, index) {
        nav.appendChild(item);
    });
});


