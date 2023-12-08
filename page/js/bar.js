function page(clicked) {
    window.location.href = clicked.textContent.toLowerCase().replaceAll(' ', '') + '.php';
}

function signout () {
    window.location.href = "../../includes/signout.php";
}