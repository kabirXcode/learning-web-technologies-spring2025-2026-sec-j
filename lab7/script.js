let price1 = 500;
let price2 = 300;
let price3 = 1000;

let q1 = document.getElementById("q1");
let q2 = document.getElementById("q2");
let q3 = document.getElementById("q3");

let t1 = document.getElementById("t1");
let t2 = document.getElementById("t2");
let t3 = document.getElementById("t3");

let grandTotal = document.getElementById("grandTotal");

let couponShown = false;

q1.addEventListener("input", updateTotal);
q2.addEventListener("input", updateTotal);
q3.addEventListener("input", updateTotal);

function updateTotal(){

let qty1 = q1.value;
let qty2 = q2.value;
let qty3 = q3.value;

if(qty1 < 0){qty1 = 0; q1.value = 0;}
if(qty2 < 0){qty2 = 0; q2.value = 0;}
if(qty3 < 0){qty3 = 0; q3.value = 0;}

let total1 = price1 * qty1;
let total2 = price2 * qty2;
let total3 = price3 * qty3;

t1.value = total1;
t2.value = total2;
t3.value = total3;

let grand = total1 + total2 + total3;

grandTotal.innerHTML = grand;

if(grand > 1000 && couponShown === false){
alert("You are eligible for a gift coupon!");
couponShown = true;
}

}