function openOther(evt, otherClass) {
    var i, tab_other, tab_other_link;
    tab_other = document.getElementsByClassName("tab_other");
    for (i = 0; i < tab_other.length; i++) {
        tab_other[i].style.display = "none";
    }
    tab_other_link = document.getElementsByClassName("balance");
    for (i = 0; i < tab_other_link.length; i++) {
        tab_other_link[i].className = tab_other_link[i].className.replace(" balance-active", "");
    }
    document.getElementById(otherClass).style.display = "block";
    evt.currentTarget.className += " balance-active";
}
document.getElementById("defaultTabOther").click();