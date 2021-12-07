"use strict";

/*****************
 * variables
 *****************/

/*****************
 * FONCTIONS
 *****************/
function removeHide() {
  const LI = document.querySelectorAll(".morecat li");
  console.log(LI);
  for (let i = 0; i < LI.length; i++) {
    LI[i].classList.remove("hide");
    document.querySelector(".plus").classList.add("hide");
  }
}

/*****************
 * CODE
 *****************/

document.querySelector(".plus").addEventListener("click", removeHide);
