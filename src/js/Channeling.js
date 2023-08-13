
function categorySelection() {
    var e = document.getElementById("category");
    var that = e.options[e.selectedIndex];
    console.log(that.value);

    if (that.value == "eyeCareUnit") {
        document.getElementById("sub_category_dental").style.display = "none";
        document.getElementById("sub_category_eye").style.display = "block";
    } else {
        document.getElementById("sub_category_eye").style.display = "none";
        document.getElementById("sub_category_dental").style.display = "block";
    }
}