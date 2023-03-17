let input = document.getElementById('platImage');
let choose = document.getElementById('choose-file');

choose.onclick = (e)=>{
    e.preventDefault();
    input.click();
};

input.addEventListener('change', ()=>{
    const file = input.files[0];
    showFile(file);
});

showFile = (file)=>{
    var img = document.getElementById('imageToShow');
    extensions = ['png', 'jpg', 'jpeg'];
    if(file.type.match("image.*")){
        var reader = new FileReader();
        reader.onload= ()=>{
            img.src = reader.result;
        };
        reader.readAsDataURL(file);
        img.style.display = "block";
        choose.textContent = "Modifier l'image";
    }else{
        alert("Type de fichier invalide");
    }
}
