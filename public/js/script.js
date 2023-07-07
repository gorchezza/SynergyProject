// // PRIVATEAREA
let path = window.location;

if (path == "http://127.0.0.1:8000/private"){
  const input = document.getElementById('avatar');
  const modalImage = document.getElementById('modal-image');
  const preview = document.getElementById('preview');

  input.addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
      const reader = new FileReader();

      reader.addEventListener('load', function() {
        modalImage.src = this.result;
      });


      reader.readAsDataURL(file);
    }
  });

  const modal = document.getElementById('modal');
  const overlay = document.getElementById('overlay');
  const closeModalButton = document.getElementsByClassName('close')[0];

  preview.addEventListener('click', function() {
    modal.style.display = 'block';
    overlay.style.display = 'block';
  });

  closeModalButton.addEventListener('click', function() {
    modal.style.display = 'none';
    overlay.style.display = 'none';
  });



  function copyForm() {
    let nick = document.getElementById("user-nickname").innerText;
    let id = document.getElementById("user-id").innerText;
    
    let copiedText = nick + id;
    navigator.clipboard.writeText(copiedText)
      .then(function() {
        alert("Cкопировано!");
      })
      .catch(function() {
        alert("Ошибка при копировании.");
      });
  }

  let copyBtn = document.getElementById("icon-btn-copy");

  copyBtn.addEventListener('click', copyForm);

  const refactorBtn = document.getElementById('refactor');
  const modalNickname = document.getElementById('modal-nickname');
  const closeModalNickBtn = document.getElementById('close-nickname-modal-btn')

  refactorBtn.addEventListener('click', function() {
    modalNickname.style.display = 'block';
    overlay.style.display = 'block';
  });

  closeModalNickBtn.addEventListener('click', function() {
    modalNickname.style.display = 'none';
    overlay.style.display = 'none';
  });

}


// REGISTRATION
if (path == "http://127.0.0.1:8000/registration"){
  function generatePassword() {
    event.preventDefault();
     // Сгенерировать случайный пароль
    let password = generateRandomPassword(8); // Здесь длина пароля
    
    // Установить сгенерированный пароль в поле ввода
    document.getElementById("password").value = password;
  
  }
  
  function generateRandomPassword(length) {
    let characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()";
    let password = "";
    
    for (let i = 0; i < length; i++) {
      let randomIndex = Math.floor(Math.random() * characters.length);
      password += characters.charAt(randomIndex);
    }
    
    return password;
  }
  
  
  const passGenBtn = document.getElementById("pass-generation-btn");
  
  passGenBtn.addEventListener('click', generatePassword);
  

  function togglePasswordVisibility() {
    event.preventDefault();
    let password = document.getElementById("password");
    let toggle = document.getElementById("toggle-btn")
    
    if (password.type === "password") {
      password.type = "text";
      toggle.innerText = "Скрыть";
    } else {
      password.type = "password";
      toggle.innerText = "Показать";
    }
  }
}

let light = document.getElementById('light-theme');
let dark = document.getElementById('dark-theme');
let pink = document.getElementById('pink-theme');
let styleLink = document.getElementById('style');

styleLink.href = localStorage.getItem('selectedStyle');

light.addEventListener('click', function() {
  styleLink.href = "css/light-style.css"
  localStorage.setItem('selectedStyle', "css/light-style.css");
});

dark.addEventListener('click', function() {
  styleLink.href = "css/dark-style.css"
  localStorage.setItem('selectedStyle', "css/dark-style.css");
});

pink.addEventListener('click', function() {
  styleLink.href = "css/pink-style.css"
  localStorage.setItem('selectedStyle', "css/pink-style.css");
});

