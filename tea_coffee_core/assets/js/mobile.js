/**
 * Displays mobile navigation
 */
var state = 0; // default close nav button

function changeState() {
    state == 0? state = 1: state = 0;
}

console.log('Mobile script Loaded!');

document.getElementById("mobile-nav-button").addEventListener("click", function() {
    //change state
    changeState();

    if (state == 0) {
        console.log(state);
        // remove menu
        document.getElementById("mobile-nav-view").style.right = '-100vw';
        document.getElementsByTagName("body")[0].style.overflowY = 'scroll';

        //retun menu icon to hamburger
        document.getElementsByClassName("mobile-nav-icon")[0].classList.remove("rotate-clockwise");
    }
    else if (state == 1) {
        console.log(state);
        //display menu
        document.getElementById("mobile-nav-view").style.right = 0;
        document.getElementsByTagName("body")[0].style.overflow = 'hidden';

        //turn menu icon to x
        document.getElementsByClassName("mobile-nav-icon")[0].classList.add("rotate-clockwise");
    }
});

