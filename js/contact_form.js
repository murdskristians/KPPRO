function contact_form_set(lang){

    const errorTranslations = {
        name_e: {
            en: {
                title: "Incorrect name",
                text: "Full name is too short."
            },
            lv: {
                title: "Nepareizs vārds",
                text: "Vārds ir pārāk īss."
            }
        },
        surname_e: {
            en: {
                title: "Incorrect surname",
                text: "Surname is too short."
            },
            lv: {
                title: "Nepareizs uzvārds",
                text: "Uzvārds ir pārāk īss."
            }
        },
        email_e: {
            en: {
                title: "Incorrect Email",
                text: "The email is too short, the minimum length is 6 characters."
            },
            lv: {
                title: "Nepareiza e-pasta adrese",
                text: "E-pasta adrese ir pārāk īsa, minimālais garums ir 6 rakstzīmes."
            }
        },
        phone_e: {
            en: {
                title: "Incorrect phone nr.",
                text: "The phone nr. is too short, the minimum length is 8 numbers."
            },
            lv: {
                title: "Nepareizs tālruņa numurs",
                text: "Tālruņa numurs ir pārāk īss, minimālais garums ir 8 cipari."
            }
        },
        subject_e: {
            en: {
                title: "Incorrect subject",
                text: "The subject is too short, the minimum length is 2 characters."
            },
            lv: {
                title: "Nepareizs virsraksts",
                text: "Ziņas virsraksts ir pārāk īss, minimālais garums ir 2 rakstzīmes."
            }
        },
        message_e: {
            en: {
                title: "Incorrect message",
                text: "The message text is too short, the minimum length is 5 characters."
            },
            lv: {
                title: "Nepareiza ziņa",
                text: "Ziņas teksts ir pārāk īss, minimālais garums ir 5 rakstzīmes."
            }
        },
        success: {
            en: {
                title: "Message is sent",
                text: "Your message has been sent successfully."
            },
            lv: {
                title: "Ziņa ir nosūtīta",
                text: "Jūsu ziņa ir veiksmīgi nosūtīta."
            }
        }
    };

    let submitBtn = document.getElementById('submitBtn');
    let resetBtn = document.getElementById('resetBtn');
    let name_input = document.getElementById('contact_name');
    let email_input = document.getElementById('contact_email');
    let phone_input = document.getElementById('contact_phone');
    // let url_input = document.getElementById('contact_url');
    let subject_input = document.getElementById('contact_subject');
    let message_input = document.getElementById('contact_message');
    let response = document.getElementById('contact_response');

    phone_input.addEventListener("input", function (event) {
        const inputValue = event.target.value;
        phone_input.value = inputValue.replace(/[^0-9+]/g, "");
    });

    function contact_form() {

        if (name_input.value.length < 2) {
            let info_modal = new ModalWindow(
                errorTranslations['name_e'][lang]['title'],
                errorTranslations['name_e'][lang]['text']
            );
            info_modal.open();
            return;
        }
        if (email_input.value.length < 6) {
            let info_modal = new ModalWindow(
                errorTranslations['email_e'][lang]['title'],
                errorTranslations['email_e'][lang]['text']
            );
            info_modal.open();
            return;
        }
        if (subject_input.value.length < 2) {
            let info_modal = new ModalWindow(
                errorTranslations['subject_e'][lang]['title'],
                errorTranslations['subject_e'][lang]['text']
            );
            info_modal.open();
            return;
        }
        if (phone_input.value.length < 8) {
            let info_modal = new ModalWindow(
                errorTranslations['phone_e'][lang]['title'],
                errorTranslations['phone_e'][lang]['text']
            );
            info_modal.open();
            return;
        }
        if (message_input.value.length < 5) {
            let info_modal = new ModalWindow(
                errorTranslations['message_e'][lang]['title'],
                errorTranslations['message_e'][lang]['text']
            );
            info_modal.open();
            return;
        }

        const uri = "/server/process_contact_form.php";
        const xmlhttp = new XMLHttpRequest();
        const fd = new FormData();

        xmlhttp.open("POST", uri, true);

        xmlhttp.onreadystatechange = function () {

            if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {

                if (xmlhttp.responseText === 'Email sent successfully.') {

                    document.getElementById('form-title').innerText = errorTranslations['success'][lang]['title'];
                    name_input.style.display = 'none';
                    email_input.style.display = 'none';
                    phone_input.style.display = 'none';
                    // url_input.style.display = 'none';
                    message_input.style.display = 'none';
                    subject_input.style.display = 'none';
                    response.style.display = "block";
                    submitBtn.style.display = 'none';
                    resetBtn.style.display = 'none';
                }
            }
        }

        let name = name_input.value;
        let email = email_input.value;
        let phone = phone_input.value;
        // let url = url_input.value;
        let message = message_input.value;

        let info_modal = new ModalWindow(
            errorTranslations['success'][lang]['title'],
            errorTranslations['success'][lang]['text']
        );
        info_modal.open();

        fd.append('contact_form', name);
        fd.append('email', email);
        // fd.append('url', url);
        fd.append('phone', phone);
        fd.append('message', message);

        xmlhttp.send(fd);
    }

    submitBtn.addEventListener('click', contact_form);
}
