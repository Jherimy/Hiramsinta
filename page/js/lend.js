function uploadImage() {
    document.querySelector("main form div:nth-of-type(1) input[type='file']").click();
}

function changeImage() {
    if (document.querySelector("main form div:nth-of-type(1) input[type='file']").files.length > 0) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
          document.querySelector("main form div:nth-of-type(1) img").src = e.target.result;
        };
        
        reader.readAsDataURL(document.querySelector("main form div:nth-of-type(1) input[type='file']").files[0]);
      }
}

function resizeInput(input) {
  if (input.value.length > 4 && input.value.length < 15) {
    input.style.width = input.value.length + 2 + 'ch';
  }
}