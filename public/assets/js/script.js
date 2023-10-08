$(function () {

    $('.fa-eye-slash').hide()

    $('.fa-eye.EyeInput').click(function () {
        $(this).hide()
        $('.fa-eye-slash.EyeInput').show()
        $('#InputPassword').attr('type', 'text')
    })

    $('.fa-eye-slash.EyeInput').click(function() {
        $('.fa-eye-slash.EyeInput').hide()
        $('.fa-eye.EyeInput').show()
        $('#InputPassword').attr('type', 'password')
    })

    $('.fa-eye.EyeRepeat').click(function () {
        $(this).hide()
        $('.fa-eye-slash.EyeRepeat').show()
        $('#RepeatPassword').attr('type', 'text')
    })

    $('.fa-eye-slash.EyeRepeat').click(function() {
        $('.fa-eye-slash.EyeRepeat').hide()
        $('.fa-eye.EyeRepeat').show()
        $('#RepeatPassword').attr('type', 'password')
    })

     $('#Register').submit(function(event) {
        let InputPassword = $('#InputPassword');
        let RepeatPassword = $('#RepeatPassword');
        let InputName = $('#InputName');
        let InputEmail = $('#InputEmail');

        let InputVal = InputPassword.val();
        let RepeatVal = RepeatPassword.val();



        if (InputName.val() === '') {
            event.preventDefault(); 
            InputName.addClass('is-invalid');
        } else {
            InputName.removeClass('is-invalid');
        }

        if (InputEmail.val() === '') {
            event.preventDefault(); 
            InputEmail.addClass('is-invalid');
        } else {
            InputEmail.removeClass('is-invalid');
        }

        if (InputVal === '' || RepeatVal === '') {
            event.preventDefault(); 
            InputPassword.addClass('is-invalid');
            RepeatPassword.addClass('is-invalid');
        } else {
            InputPassword.removeClass('is-invalid');
            RepeatPassword.removeClass('is-invalid');
        }

        if (InputVal !== RepeatVal) {
            event.preventDefault(); 

            InputPassword.addClass('is-invalid');
            RepeatPassword.addClass('is-invalid');
        }

        if (InputVal.length < 3 || RepeatVal.length < 3 ) {
            event.preventDefault();

            InputPassword.addClass('is-invalid');
                RepeatPassword.addClass('is-invalid');
        }
    });
})