const form = document.querySelector('main form');
const button = document.querySelector('main form input[type="submit"]');

/// Forgot password
const forgotPassword = document.createElement('p');
forgotPassword.textContent = 'Forgot password?';
form.insertBefore(forgotPassword, button)

function register() {
    const firstParagraph = document.querySelector('main form p:nth-of-type(1)');
    firstParagraph.textContent === "WELCOME BACK!" 
        ? firstParagraph.textContent = 'CREATE AN ACCOUNT'
        : firstParagraph.textContent = 'WELCOME BACK!';

    const firstInput = document.querySelector('main form div:nth-of-type(1) input:nth-of-type(1)');
    firstInput.placeholder === 'Enter username or webmail'
        ? firstInput.placeholder = 'Enter username'
        : firstInput.placeholder = 'Enter username or webmail';
    
    const inputSubmit = document.querySelector('main form input[type="submit"]');
    inputSubmit.value === 'LOG IN'
        ? inputSubmit.value = 'SIGN UP'
        : inputSubmit.value = 'LOG IN';

    if (button.value === 'SIGN UP') {
        /// Student ID
        const studentIDDiv = document.createElement('div');
        studentIDDiv.className = 'studentID';
        const studentIDicon = document.createElement('i');
        studentIDicon.className = 'bx bx-id-card';
        studentIDDiv.appendChild(studentIDicon);
        const studentID = document.createElement('input');
        studentID.name = 'studentID';
        studentID.type = 'text';
        studentID.placeholder = 'Enter student ID';
        studentID.required = true;
        studentID.autocomplete = 'off';
        studentIDDiv.appendChild(studentID);

        /// Name
        const nameDiv = document.createElement('div');
        nameDiv.className = 'name';
        const nameIcon = document.createElement('i');
        nameIcon.className = 'bx bx-user-plus';
        nameDiv.appendChild(nameIcon);
        const studentName = document.createElement('input');
        studentName.name = 'name';
        studentName.type = 'text';
        studentName.placeholder = 'Enter name';
        studentName.required = true;
        studentName.autocomplete = 'off';
        nameDiv.appendChild(studentName);

        /// Webmail
        const webmailDiv = document.createElement('div');
        webmailDiv.className = 'webmail';
        const webmailIcon = document.createElement('i');
        webmailIcon.className = 'bx bx-envelope';
        webmailDiv.appendChild(webmailIcon);
        const webmail = document.createElement('input');
        webmail.name = 'webmail';
        webmail.type = 'text';
        webmail.placeholder = 'Enter webmail';
        webmail.required = true;
        webmail.autocomplete = 'off';
        webmailDiv.appendChild(webmail);

        form.removeChild(document.querySelector('main form p:nth-of-type(2)'));
        form.insertBefore(studentIDDiv, button);
        form.insertBefore(nameDiv, button);
        form.insertBefore(webmailDiv, button);
        form.action = "../../includes/default-register.php";
    } else {
        form.insertBefore(forgotPassword, form.children[3]);
        form.removeChild(document.querySelector('.studentID'));
        form.removeChild(document.querySelector('.name'));
        form.removeChild(document.querySelector('.webmail'));
        form.action = "../../includes/default-login.php";
    }
}