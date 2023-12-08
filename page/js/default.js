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

        /// Course
        const courseDiv = document.createElement('div');
        courseDiv.className = 'course';
        const courseIcon = document.createElement('i');
        courseIcon.className = 'bx bxs-user-detail';
        courseDiv.appendChild(courseIcon);
        const course = document.createElement('input');
        course.name = 'course';
        course.type = 'text';
        course.placeholder = 'Enter course';
        course.required = true;
        course.autocomplete = 'off';
        courseDiv.appendChild(course);

        /// Age
        const ageDiv = document.createElement('div');
        ageDiv.className = 'age';
        const ageIcon = document.createElement('i');
        ageIcon.className = 'bx bx-user-plus';
        ageDiv.appendChild(ageIcon);
        const age = document.createElement('input');
        age.name = 'age';
        age.type = 'number';
        age.step = '1';
        age.min = '1';
        age.placeholder = 'Enter age';
        age.required = true;
        age.autocomplete = 'off';
        ageDiv.appendChild(age);

        /// Year
        const yearDiv = document.createElement('div');
        yearDiv.className = 'year';
        const yearIcon = document.createElement('i');
        yearIcon.className = 'bx bx-user-plus';
        yearDiv.appendChild(yearIcon);
        const year = document.createElement('input');
        year.name = 'year';
        year.type = 'number';
        year.step = '1';
        year.max = '4';
        year.min = '1';
        year.placeholder = 'Enter year';
        year.required = true;
        year.autocomplete = 'off';
        yearDiv.appendChild(year);

        /// Sex
        const sexDiv = document.createElement('div');
        sexDiv.className = 'sex';
        const sexIcon = document.createElement('i');
        sexIcon.className = 'bx bx-male-female';
        sexDiv.appendChild(sexIcon);
        const sex = document.createElement('select');
        sex.name = 'sex';
        sex.required = true;
        const disableSex = document.createElement('option');
        disableSex.value = '';
        disableSex.disabled = true;
        disableSex.selected = true;
        disableSex.text = 'Select sex';
        const male = document.createElement('option');
        male.value = 'Male';
        male.text = 'Male';
        const female = document.createElement('option');
        female.value = 'Female';
        female.text = 'Female';
        sex.add(disableSex);
        sex.add(male);
        sex.add(female);
        sexDiv.appendChild(sex);

        /// College
        const collegeDiv = document.createElement('div');
        collegeDiv.className = 'college';
        const collegeIcon = document.createElement('i');
        collegeIcon.className = 'bx bxs-graduation';
        collegeDiv.appendChild(collegeIcon);
        const college = document.createElement('select');
        college.name = 'college';
        college.required = true;
        const disableCollege = document.createElement('option');
        disableCollege.value = '';
        disableCollege.disabled = true;
        disableCollege.selected = true;
        disableCollege.text = 'Select college';
        const CE = document.createElement('option');
        CE.value = 'CE';
        CE.text = 'College of Engineering';
        const CADBE = document.createElement('option');
        CADBE.value = 'CABDBE';
        CADBE.text = 'College of Architercture, Design and the Built Environment';
        college.add(disableCollege);
        college.add(CE);
        college.add(CADBE);
        collegeDiv.appendChild(college);

        form.removeChild(document.querySelector('main form p:nth-of-type(2)'));
        form.insertBefore(nameDiv, button);
        form.insertBefore(studentIDDiv, button);
        form.insertBefore(webmailDiv, button);
        form.insertBefore(ageDiv, button);
        form.insertBefore(sexDiv, button);
        form.insertBefore(yearDiv, button);
        form.insertBefore(collegeDiv, button);
        form.insertBefore(courseDiv, button);
        form.action = "../../includes/default-register.php";
    } else {
        form.insertBefore(forgotPassword, form.children[3]);
        form.removeChild(document.querySelector('.name'));
        form.removeChild(document.querySelector('.studentID'));
        form.removeChild(document.querySelector('.webmail'));
        form.removeChild(document.querySelector('.age'));
        form.removeChild(document.querySelector('.year'));
        form.removeChild(document.querySelector('.sex'));
        form.removeChild(document.querySelector('.college'));
        form.removeChild(document.querySelector('.course'));
        form.action = "../../includes/default-login.php";
    }
}

function passwordVisibility () {
    const passwordIcon = document.querySelector('main form div:nth-of-type(2) i:nth-of-type(2)');
    passwordIcon.className === 'bx bx-hide'
        ? passwordIcon.className = 'bx bx-show'
        : passwordIcon.className = 'bx bx-hide';


    const inputPassword = document.querySelector('main form div:nth-of-type(2) input:nth-of-type(1)');
    inputPassword.type === 'password'
        ? inputPassword.type = 'text'
        : inputPassword.type = 'password';
}