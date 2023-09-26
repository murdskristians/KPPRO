lv_btn_mob = document.getElementById('lv_btn_mob');
en_btn_mob = document.getElementById('en_btn_mob');
lv_btn = document.getElementById('lv_btn');
en_btn = document.getElementById('en_btn');
de_btn = document.getElementById('de_btn');

function addLangBtnClickListener(id, language) {
    document.getElementById(id).addEventListener('click', function() {
        changeLanguage(language, this);
    });
}
addLangBtnClickListener('lv_btn_mob', 'lv');
addLangBtnClickListener('en_btn_mob', 'en');
addLangBtnClickListener('lv_btn', 'lv');
addLangBtnClickListener('en_btn', 'en');
addLangBtnClickListener('de_btn', 'de');
// addLangBtnClickListener('cn_btn', 'cn');

function set_session(lang){
    const uri = "/server/languageChange_f.php";
    const xmlhttp = new XMLHttpRequest();
    const fd = new FormData();

    xmlhttp.open('POST', uri, true);

    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
            location.reload();
        }
    }

    fd.append('set_session', '1');
    fd.append('lang', lang);

    xmlhttp.send(fd);
}

function changeLanguage(lang, el) {

    // if (el.id === 'lv_btn') {
    //     lv_btn.classList.add('active');
    //     en_btn.classList.remove('active');
    // } else if (el.id === 'en_btn') {
    //     lv_btn.classList.remove('active');
    //     en_btn.classList.add('active');
    // } else if (el.id === 'lv_btn_mob') {
    //     lv_btn_mob.classList.add('active');
    //     en_btn_mob.classList.remove('active');
    // } else if (el.id === 'en_btn_mob') {
    //     lv_btn_mob.classList.remove('active');
    //     en_btn_mob.classList.add('active');
    // }



    console.log(el.id);
    el.classList.toggle('active');
    set_session(lang);
}


// Function to set the active button and store its ID in localStorage
function setActiveButton(el) {
    let buttonId = el.id;

    // Remove 'active' class from all buttons
    document.querySelectorAll('.your-button-class').forEach(function (button) {
        button.classList.remove('active');
    });

    // Add 'active' class to the clicked button
    el.classList.add('active');

    // Determine the corresponding button in the other pair
    let otherButtonId;
    if (buttonId === 'lv_btn') {
        otherButtonId = 'lv_btn_mob';
    } else if (buttonId === 'lv_btn_mob') {
        otherButtonId = 'lv_btn';
    } else if (buttonId === 'en_btn') {
        otherButtonId = 'en_btn_mob';
    } else if (buttonId === 'en_btn_mob') {
        otherButtonId = 'en_btn';
    }

    // Add 'active' class to the corresponding button in the other pair
    let otherButton = document.getElementById(otherButtonId);
    if (otherButton) {
        otherButton.classList.add('active');
    }

    // Store the active button ID in localStorage
    localStorage.setItem('activeButton', buttonId);
}

// Check if there is a stored active button ID and apply 'active' class
let storedButtonId = localStorage.getItem('activeButton');
if (storedButtonId) {
    let activeButton = document.getElementById(storedButtonId);
    if (activeButton) {
        setActiveButton(activeButton); // Set the active button based on the stored ID
    }
} else {
    // If there's no stored active button ID, set a default active button here
    let defaultActiveButton = document.getElementById('en_btn'); // Change 'lv_btn' to your default button ID
    setActiveButton(defaultActiveButton);
}

// Add click event listeners to your buttons
document.getElementById('lv_btn').addEventListener('click', function () {
    setActiveButton(this);
});

document.getElementById('en_btn').addEventListener('click', function () {
    setActiveButton(this);
});

document.getElementById('lv_btn_mob').addEventListener('click', function () {
    setActiveButton(this);
});

document.getElementById('en_btn_mob').addEventListener('click', function () {
    setActiveButton(this);
});





