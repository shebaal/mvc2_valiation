

// confirm



const username = document.getElementById('username');
const number = document.getElementById('number');
const email = document.getElementById('email');
const city = document.getElementById('city');
const country = document.getElementById('country');
const description = document.getElementById('description');
const code = document.getElementById('code');
const confirm = document.querySelector("#confirm");
// 
const next = document.querySelector("#next");
const prev = document.querySelector("#prev");
const progress = document.querySelector(".progress");
const circles = document.querySelectorAll(".circle");
const forms = document.querySelectorAll(".myform");
let counter = 1;
let currentIndex = 0;
let ifconfirm = false;
confirm.addEventListener("click", confirmation)
function confirmation() {
    window.alert("هل انت متاكد من الشراء")
    ifconfirm = true;

}
next.addEventListener("click", () => {
    if (currentIndex === 0) {
        if (username.value.trim() != '' || number.value.trim() != '' || city.value.trim() != '' || country.value.trim() != '' || email.value.trim() != '' || description.value.trim() != '') {

            counter++;
        }
        else {
            window.alert("الرجاء ادخال جميع البيانات ")
        }
    }
    if (currentIndex === 1) {
        if (code.value.trim() != '') {

            counter++;
        }
        else {
            window.alert("الرجاء ادخال رقم البطاقة")
        }
    }
    if (currentIndex === 2) {
        if (ifconfirm) {

            counter++;
        }
        else {
            window.alert("من فضلك قم بتاكد الشراء")
        }
    }



    update();
});

prev.addEventListener("click", () => {
    counter--;
    update();
});

function update() {


    circles.forEach((circle, index) => {
        if (index < counter) {
            currentIndex = index;
            circle.classList.add("active");


            forms.forEach((myform, index2) => {
                if (index === index2) {

                    myform.classList.add("activeform");

                } else {
                    myform.classList.remove("activeform");
                }
            });


        }
    });


    if (counter === 1) {
        prev.disabled = true;
    } else if (counter === circles.length) {
        next.disabled = true;
    } else {
        prev.disabled = false;
        next.disabled = false;
    }

    const actives = document.querySelectorAll('.active');
    progress.style.width = (actives.length - 1) / (circles.length - 1) * 100 + '%'

}


// end confirm