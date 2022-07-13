const buttons = document.querySelectorAll("#button-delete");
const button_close = document.querySelector('#button-close');
const popup = document.querySelector('#popup')

function openModal(buttons) {

    if (buttons) {

        buttons.forEach((button) => { 
            
            button.addEventListener('click', () => {
                return popup.classList.remove('hidden');
            });
      
        });
    
    }
} 

function closeModal(button_close) {

    if (button_close) {

        button_close.addEventListener('click', () => {
            return popup.classList.add('hidden');
        });
      
    }
    
}

openModal(buttons);
closeModal(button_close);


