let Foto = document.getElementById('Foto');
let InputFile = document.getElementById('InputFile');
let Browse = document.getElementById('browse');
let BtnEdit = document.querySelector('.BtnEdit');
let BtnUpdate = document.querySelector('.BtnUpdate');
let BtnCancel = document.querySelector('.BtnCancel');


BtnEdit.addEventListener('click', () => {
    BtnEdit.style.display = 'none';
    BtnUpdate.classList.remove('d-none');
    BtnCancel.classList.remove('d-none');
    Browse.classList.remove('d-none');

    document.getElementById('nama').attributes.removeNamedItem('disabled')
    document.getElementById('no_hp').attributes.removeNamedItem('disabled')
    document.getElementById('alamat').attributes.removeNamedItem('disabled')
})

BtnCancel.addEventListener('click', () => {
    BtnEdit.style.display = 'inline-flex';
    BtnUpdate.classList.add('d-none');
    BtnCancel.classList.add('d-none');
    Browse.classList.add('d-none');
    
    document.getElementById('nama').setAttribute('disabled', '')
    document.getElementById('no_hp').setAttribute('disabled', '')
    document.getElementById('alamat').setAttribute('disabled', '')

})


Browse.addEventListener('click', function () {
    InputFile.click();
})

Foto.addEventListener('click', function () {
    if (!Browse.classList.contains('d-none')) {
        InputFile.click();
    }

})

InputFile.addEventListener('change', function() {
    if (InputFile.files[0]) {
        let Reader = new FileReader();
        Reader.readAsDataURL(InputFile.files[0]);
        Reader.onload = function (e) {
            Foto.src = e.target.result
        }
        
    }
})