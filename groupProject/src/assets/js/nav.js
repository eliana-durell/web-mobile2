// Checks if the screen width is greater than/less than the desired size
const checkScreenWidth = (greaterThan = true, size = 768) => {
    if (greaterThan) return (window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth) > size;
    else return (window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth) < size;
};

// deactivates all dropdown menus
const removeAllDropdowns = () => {
    const links = document.querySelectorAll('.links');
    for (let link of links) {
        link.parentElement.classList.remove('expanded');
        link.classList.remove('active');
    }
};

// activates the selected dropdown menu
const updateDropdown = (ele, updateText) => {
    // close all first
    removeAllDropdowns();

    // show dropdown
    const links = ele.querySelector('.links');
    links.classList.toggle('active');

    // update text if screen size > 768
    if (checkScreenWidth()) {
        if (updateText.length > 1 || updateText === '.') ele.classList.add('expanded');
        ele.children[0].innerText = updateText;
    }
};

// Contrast Dropdown
const contrast = document.querySelector('#expandC');
contrast.addEventListener('mouseover', () => {
    // stop when screen width is less than 768px
    if (!checkScreenWidth()) return;

    updateDropdown(contrast, 'Contrast');
});
contrast.addEventListener('mouseout', () => {
    // stop when screen width is less than 768px
    if (!checkScreenWidth()) return;

    updateDropdown(contrast, 'C');
    removeAllDropdowns();
});
contrast.addEventListener('click', (e) => {
    // stop when screen width is greater than 768px
    if (checkScreenWidth()) return;

    // stop everything else beside this method to modify
    e.stopPropagation();

    updateDropdown(contrast, 'C');
});

// Repetition Dropdown
const repetition = document.querySelector('#expandR');
repetition.addEventListener('mouseover', () =>  {
    // stop when screen width is less than 768px
    if (!checkScreenWidth()) return;

    updateDropdown(repetition, 'Repetition');
});
repetition.addEventListener('mouseout', () => {
    // stop when screen width is less than 768px
    if (!checkScreenWidth()) return;

    updateDropdown(repetition, 'R');
    removeAllDropdowns();
});
repetition.addEventListener('click', (e) => {
    // stop when screen width is greater than 768px
    if (checkScreenWidth()) return;

    // stop everything else beside this method to modify
    e.stopPropagation();
    updateDropdown(repetition, 'R');
});

// Alignment Dropdown
const alignment = document.querySelector('#expandA');
alignment.addEventListener('mouseover', () => {
    // stop when screen width is less than 768px
    if (!checkScreenWidth()) return;

    updateDropdown(alignment, 'Alignment');
});
alignment.addEventListener('mouseout', () => {
    // stop when screen width is less than 768px
    if (!checkScreenWidth()) return;

    updateDropdown(alignment, 'A');
    removeAllDropdowns();
});
alignment.addEventListener('click', (e) => {
    // stop when screen width is greater than 768px
    if (checkScreenWidth()) return;

    // stop everything else beside this method to modify
    e.stopPropagation();
    updateDropdown(alignment, 'A');
});

// Proximity Dropdown
const proximity = document.querySelector('#expandP');
proximity.addEventListener('mouseover', () => {
    // stop when screen width is less than 768px
    if (!checkScreenWidth()) return;

    updateDropdown(proximity, 'Proximity');
});
proximity.addEventListener('mouseout', () => {
    // stop when screen width is less than 768px
    if (!checkScreenWidth()) return;

    updateDropdown(proximity, 'P');
    removeAllDropdowns();
});
proximity.addEventListener('click', (e) => {
    // stop when screen width is greater than 768px
    if (checkScreenWidth()) return;

    // stop everything else beside this method to modify
    e.stopPropagation();
    updateDropdown(proximity, 'P');
});

// Other Dropdown
const other = document.querySelector('#others');
other.addEventListener('mouseover', () => {
    // stop when screen width is less than 768px
    if (!checkScreenWidth()) return;

    updateDropdown(other, 'Others.');
});
other.addEventListener('mouseout', () => {
    // stop when screen width is less than 768px
    if (!checkScreenWidth()) return;

    updateDropdown(other, '.');
    removeAllDropdowns();
});
other.addEventListener('click', (e) => {
    // stop when screen width is greater than 768px
    if (checkScreenWidth()) return;

    // stop everything else beside this method to modify
    e.stopPropagation();
    updateDropdown(other, '.');
});

// collapse all dropdowns in tablet/mobile  
document.addEventListener('click', () => {
    // stop when screen width is greater than 768px
    if (checkScreenWidth()) return;
    
    removeAllDropdowns();
});