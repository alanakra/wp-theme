function showQualities(firstList, secondList) {
 var rand1 = firstList[Math.floor(Math.random() * firstList.length)];
 var rand2 = secondList[Math.floor(Math.random() * secondList.length)];
 document.getElementById("accroche1").innerHTML = rand1;
 document.getElementById("accroche2").innerHTML = rand2;
}