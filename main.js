"use strict";

/*****************
 * variables
 *****************/

/*****************
 * FONCTIONS
 *****************/
function choiceNewsletter() {
  let checked = document.querySelector(".choice").checked;
  if (checked == true) {
    console.log("");
  }
}
/*****************
 * CODE
 *****************/
document
  .querySelector(".submitNewsletter")
  .addEventListener("click", choiceNewsletter);
