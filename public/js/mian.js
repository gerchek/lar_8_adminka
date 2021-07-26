

let lang = document.querySelector('.lang_group');
let drop_lang = document.querySelector('.drop_lang');


function sleep(time) {
    return new Promise((resolve) => setTimeout(resolve, time));
}


window.onscroll = function () {
    scrollFunc();
};

function scrollFunc() {
    if (drop_lang != undefined) {
        drop_lang.classList.remove('active')
    }
}


window.onclick = function (e) {

    if (drop_lang.classList.contains('active') && !e.target.closest('.lang_group')) {
        drop_lang.classList.remove('active')
    }
}

// Clicks =================================


if (lang != undefined) {
    lang.addEventListener('click', function () {
        sleep(2).then(() => {
            drop_lang.classList.toggle('active');
        });
    });
}

// For check only once =======================
function onlyOne(checkbox) {
    let checkboxes = document.getElementsByName('check')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false

    })
}

// For check only once =======================










//  Tabs ==========================================
const tabsBtn = document.querySelectorAll(".top_item");
const tabsItems = document.querySelectorAll(".nav_wrap");
tabsBtn.forEach((e) => {
    onTabClick(tabsBtn, tabsItems, e);
});
function onTabClick(tabBtns, tabItems, item) {
    item.addEventListener("click", function (e) {
        let currentBtn = item;
        let tabId = currentBtn.getAttribute("data-tab");
        let currentTab = document.querySelector(tabId);
        if (e.srcElement.classList.contains("active")) {
            // e.srcElement.classList.remove("active");
            // e.srcElement.parentElement
            //     .querySelector(".tab__btn")
            //     .classList.remove("active");
            // console.log(e.srcElement.parentElement.querySelector(".event"));
            // e.srcElement.parentElement
            //     .querySelector(".event")
            //     .classList.remove("active");
        } else if (!currentBtn.classList.contains("active")) {
            tabBtns.forEach(function (item) {
                item.classList.remove("active");
            });
            tabItems.forEach(function (item) {
                item.classList.remove("active");
            });
            currentBtn.classList.add("active");
            currentTab.classList.add("active");
        }
    });
}
// -----------------------------------------------------------------------------------------------
const tabsBtn_2 = document.querySelectorAll(".tab_btn");
const tabsItems_2 = document.querySelectorAll(".tab_info");
tabsBtn_2.forEach((e) => {
    onTabClick(tabsBtn_2, tabsItems_2, e);
});
function onTabClick(tabBtns_2, tabItems_2, item) {
    item.addEventListener("click", function (e) {
        let currentBtn_2 = item;
        let tabId = currentBtn_2.getAttribute("data-tab");
        let currentTab_2 = document.querySelector(tabId);
        if (e.srcElement.classList.contains("active")) {
            // e.srcElement.classList.remove("active");
            // e.srcElement.parentElement
            //     .querySelector(".tab__btn")
            //     .classList.remove("active");
            // console.log(e.srcElement.parentElement.querySelector(".event"));
            // e.srcElement.parentElement
            //     .querySelector(".event")
            //     .classList.remove("active");
        } else if (!currentBtn_2.classList.contains("active")) {
            tabBtns_2.forEach(function (item) {
                item.classList.remove("active");
            });
            tabItems_2.forEach(function (item) {
                item.classList.remove("active");
            });
            currentBtn_2.classList.add("active");
            currentTab_2.classList.add("active");
        }
    });
}

// Calculstion ====================

function percentCalc() {
    sum = parseInt(document.getElementById("sum").value);
    sum == '' ? 0 : sum;
    percent = parseInt(document.getElementById("percent").value);
    deadline = parseInt(document.getElementById("deadline").value);
    //amount = sum * percent / 100


    if (percent == 100) {
        document.getElementById("g1").selected = 'selected';
        deadline = 90
        percent = 4
    };

    if (percent == 200) {
        document.getElementById("g2").selected = 'selected';
        deadline = 180
        percent = 6
    };

    if (percent == 300) {
        document.getElementById("g3").selected = 'selected';
        deadline = 365
        percent = 10
    };

    if (percent == 400) {
        document.getElementById("g3").selected = 'selected';
        deadline = 365
        percent = 8
    };

    if (percent == 500) {
        document.getElementById("g4").selected = 'selected';
        deadline = 730
        percent = 10
    };

    if (deadline == 90) {
        dd = 3;
    };
    if (deadline == 180) {
        dd = 6;
    }
    if (deadline == 365) {
        dd = 12;
    };
    if (deadline == 730) {
        dd = 24;
    };
    if (deadline == 1095) {
        dd = 36;
    };


    result4 = ((sum * percent / 100) / 365) * 30;

    result4 == '' ? '0' : result4

    if (Number.isNaN(result4)) { result4 = 0 }

    document.getElementById("perText").innerText = percent + " %";
    document.getElementById("resultText").innerText = result4.toFixed(2);

}

// Calculstion end ====================
