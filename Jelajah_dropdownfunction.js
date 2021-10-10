function myOpen() {
    document.getElementById("content").classList.toggle("show");
};
window.onclick = (e) => {
    if (!e.target.matches('.drop')) {
        var dropdowns = document.getElementByClassName("drop-content");
        for (var d = 0; d < dropdowns.length; d++) {
            var openDropdown = dropdowns[d];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            };
        };
    };
};