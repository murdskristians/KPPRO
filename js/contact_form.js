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
            },
            de: {
                title: "Falscher Name",
                text: "Der vollständige Name ist zu kurz."
            },
            cn: {
                title: "姓名不正确",
                text: "全名太短。"
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
            },
            de: {
                title: "Falscher Nachname",
                text: "Der Nachname ist zu kurz."
            },
            cn: {
                title: "姓氏不正确",
                text: "姓氏太短。"
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
            },
            de: {
                title: "Falsche E-Mail",
                text: "Die E-Mail ist zu kurz, die Mindestlänge beträgt 6 Zeichen."
            },
            cn: {
                title: "电子邮件不正确",
                text: "电子邮件太短，最小长度为6个字符。"
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
            },
            de: {
                title: "Falsche Telefonnummer",
                text: "Die Telefonnummer ist zu kurz, die Mindestlänge beträgt 8 Zahlen."
            },
            cn: {
                title: "电话号码不正确",
                text: "电话号码太短，最小长度为8位数字。"
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
            },
            de: {
                title: "Falsches Thema",
                text: "Das Thema ist zu kurz, die Mindestlänge beträgt 2 Zeichen."
            },
            cn: {
                title: "主题不正确",
                text: "主题太短，最小长度为2个字符。"
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
            },
            de: {
                title: "Falsche Nachricht",
                text: "Der Nachrichtentext ist zu kurz, die Mindestlänge beträgt 5 Zeichen."
            },
            cn: {
                title: "消息不正确",
                text: "消息文本太短，最小长度为5个字符。"
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
            },
            de: {
                title: "Nachricht wurde gesendet",
                text: "Ihre Nachricht wurde erfolgreich gesendet."
            },
            cn: {
                title: "消息已发送",
                text: "您的消息已成功发送。"
            }
        }
    };

    let submitBtn = document.getElementById('submitBtn');
    let resetBtn = document.getElementById('resetBtn');

    let form_title =document.getElementById('form_title')
    let name_input = document.getElementById('contact_name');
    let email_input = document.getElementById('contact_email');
    let phone_input = document.getElementById('contact_phone');
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

                    form_title.innerText = errorTranslations['success'][lang]['title'];

                    name_input.style.display = 'none';
                    email_input.style.display = 'none';
                    phone_input.style.display = 'none';
                    message_input.style.display = 'none';
                    subject_input.style.display = 'none';
                    submitBtn.style.display = 'none';
                    resetBtn.style.display = 'none';

                    response.style.display = "block";
                }
            }
        }

        let name = name_input.value;
        let email = email_input.value;
        let phone = phone_input.value;
        let message = message_input.value;

        let info_modal = new ModalWindow(
            errorTranslations['success'][lang]['title'],
            errorTranslations['success'][lang]['text']
        );
        info_modal.open();

        fd.append('contact_form', name);
        fd.append('email', email);
        fd.append('phone', phone);
        fd.append('message', message);

        xmlhttp.send(fd);
    }

    submitBtn.addEventListener('click', contact_form);
}
