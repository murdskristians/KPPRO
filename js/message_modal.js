
// ModalWindow object
// Using:
// let info_modal = new ModalWindow(
// 'Order successful!',
// 'Email with details will be sent soon.'
// );
// info_modal.open();
// info_modal.close();
function ModalWindow(title, text) {

    function generateUniqueId() {
        // Create an array to store the random bytes
        const array = new Uint8Array(16);

        // Generate random values
        crypto.getRandomValues(array);

        // Convert the array to a hexadecimal string
        let uniqueId = '';
        for (let i = 0; i < array.length; i++) {
            uniqueId += array[i].toString(16).padStart(2, '0');
        }

        return uniqueId;
    }

    const u_id = generateUniqueId();
    const modal_class = 'modal_' + u_id;
    const bg_class = 'bg_' + u_id;
    const modal_content_class = 'modal_content_' + u_id;
    const modal_title_class = 'modal_title_' + u_id;
    const modal_text_class = 'modal_text_' + u_id;
    const close_class = 'close_' + u_id;

    const styleElement = document.createElement('style');
    styleElement.innerHTML = `        
          .${close_class} {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 60px;
            line-height: 32px;
            cursor: pointer;
            padding-right: 4px;
            padding-top: 2px;
            transition:all 0.5s ease;
          }
          
          .${close_class}:hover {
            color:gray;
          }
          
          .${modal_class} {
            display:none;
            position: fixed;
            width:100%;
            height:100%;
            z-index:999;
            top:0;
            left:0;
            overflow-y: auto;
          }
          
          .${bg_class} {
            background-color:rgba(0,0,0,0.3);
            position: absolute;
            width:100%;
            height:100%;
            z-index:-1;
          }
          
          .${modal_content_class} {
            max-width:800px;
            margin:auto;
            background-color:white;
            padding: 45px;
            min-width:400px;
            border-radius: 5px;
            position: relative;
            overflow: hidden;
            box-shadow:
            0 1.8px 2.2px rgba(0, 0, 0, 0.017),
            0 4.3px 5.3px rgba(0, 0, 0, 0.024),
            0 8px 10px rgba(0, 0, 0, 0.03),
            0 14.3px 17.9px rgba(0, 0, 0, 0.036),
            0 26.7px 33.4px rgba(0, 0, 0, 0.043),
            0 64px 80px rgba(0, 0, 0, 0.06);
            border:1px solid rgba(0,0,0,0.2);
            top:50%;
            transform:translateY(-50%);
          }
          
          .${modal_title_class} {
            font-size: 20px;
            font-weight: bold;
            margin-bottom:10px;
          }
          
          .${modal_text_class} {
            margin-bottom:10px;
          }
          
        `;
    document.head.appendChild(styleElement);

    const modalElement = document.createElement('div');
    modalElement.className = modal_class;

    const modalBg = document.createElement('div');
    modalBg.className = bg_class;

    const modalContent = document.createElement('div');
    modalContent.className = modal_content_class;

    const modalTitle = document.createElement('div');
    modalTitle.className = modal_title_class;
    modalTitle.innerHTML = title;

    const modalText = document.createElement('div');
    modalText.className = modal_text_class;
    modalText.innerHTML = text;

    const closeButton = document.createElement('span');
    closeButton.className = close_class;
    closeButton.innerHTML = '&times;';

    closeButton.addEventListener('click', function () {
        modalElement.style.display = 'none';
        modalElement.remove();
    });

    modalElement.appendChild(modalBg);

    modalContent.appendChild(modalTitle);
    modalContent.appendChild(modalText);
    modalContent.appendChild(closeButton);

    modalElement.appendChild(modalContent);

    this.open = function () {
        modalElement.style.display = 'block';
        modalContent.style.display = 'block';
    };

    this.close = function () {
        modalElement.style.display = 'none';
        modalContent.style.display = 'none';
    };

    document.body.appendChild(modalElement);
}
