function shortcut(clicked) {
    window.location.href = clicked.name.toLowerCase().replaceAll(' ', '') + '.php';
}