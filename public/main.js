// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};


//Tab
function showTab(event, tabId) {
  // Hide all tab content
  const contents = document.getElementsByClassName('tab-content');
  for (let content of contents) {
      content.classList.remove('active');
  }

  // Remove active class from all buttons
  const buttons = document.getElementsByClassName('tab-button');
  for (let button of buttons) {
      button.classList.remove('active');
  }

  // Show the selected tab content and add active class to the button
  document.getElementById(tabId).classList.add('active');
  event.currentTarget.classList.add('active');
}