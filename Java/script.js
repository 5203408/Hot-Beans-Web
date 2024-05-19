document.addEventListener("DOMContentLoaded", function() {
    // Get the modal elements
    var modal1 = document.getElementById("myModal1");
    var modal2 = document.getElementById("myModal2");
    var modal3 = document.getElementById("myModal3");

    // Get the button elements to open the modals
    var btn1 = document.getElementById("profile1");
    var btn2 = document.getElementById("profile2");
    var btn3 = document.getElementById("profile3");

    // Get the close button elements for each modal
    var closeBtn1 = modal1.getElementsByClassName("close")[0];
    var closeBtn2 = modal2.getElementsByClassName("close")[0];
    var closeBtn3 = modal3.getElementsByClassName("close")[0];

    // Function to open modal
    function openModal(modal) {
        modal.style.display = "block";
    }

    // Function to close modal
    function closeModal(modal) {
        modal.style.display = "none";
    }

    // Event listeners to open modals when buttons are clicked
    if (btn1 && modal1) {
        btn1.addEventListener("click", function() {
            openModal(modal1);
        });
    }

    if (btn2 && modal2) {
        btn2.addEventListener("click", function() {
            openModal(modal2);
        });
    }

    if (btn3 && modal3) {
        btn3.addEventListener("click", function() {
            openModal(modal3);
        });
    }

    // Event listeners to close modals when close buttons are clicked
    if (closeBtn1 && modal1) {
        closeBtn1.addEventListener("click", function() {
            closeModal(modal1);
        });
    }

    if (closeBtn2 && modal2) {
        closeBtn2.addEventListener("click", function() {
            closeModal(modal2);
        });
    }

    if (closeBtn3 && modal3) {
        closeBtn3.addEventListener("click", function() {
            closeModal(modal3);
        });
    }

    // Event listener to close modal when clicking outside of it
    window.addEventListener("click", function(event) {
        if (event.target == modal1) {
            closeModal(modal1);
        }
        if (event.target == modal2) {
            closeModal(modal2);
        }
        if (event.target == modal3) {
            closeModal(modal3);
        }
    });
});



document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.querySelector('.toggle-button');
    toggleButton.addEventListener('click', function () {
        const nav = document.querySelector('.navbar ul');
        nav.style.display = nav.style.display === 'flex' ? 'none' : 'flex';
    });
});