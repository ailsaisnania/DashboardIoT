let list = document.querySelectorAll(".navigation li");

function activeLink(){
    list.forEach(item =>{
        item.classList.remove("hovered");
    })

    this.classList.add("hovered");
}

list.forEach(item=> item.addEventListener("mouseover", activeLink));


// MENU toogle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function(){
    navigation.classList.toggle("active");
    main.classList.toggle("active")
}


//dropdown

    function openTab(event, tabName) {
        // Hide all tab contents
        document.querySelectorAll('.tab-content').forEach(tab => {
            tab.classList.remove('active');
        });

        // Remove active class from all tab buttons
        document.querySelectorAll('.tab-button').forEach(button => {
            button.classList.remove('active');
        });

        // Show the selected tab and add active class to the button
        document.getElementById(tabName).classList.add('active');
        event.currentTarget.classList.add('active');
    }


    
    function addToFormula(value) {
        const input = document.getElementById('formulaInput');
        input.value += value + ' ';
    }
    $(document).ready(function(){
    $("button.add-threshold-button").click(function(){
        $ (".multiple .wrapper-input:last-child").clone().appendTo(".multiple");
});
});


//modal for notification
document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('modal');
    const openModalBtn = document.getElementById('openModalBtn');
    const closeModalBtn = document.getElementById('closeModalBtn');

    openModalBtn.addEventListener('click', () => {
        modal.style.display = 'block';
        
    });

    closeModalBtn.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    // Close modal if clicked outside of it
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
        modal.style.display = 'none';
        }
    });
    });

    

