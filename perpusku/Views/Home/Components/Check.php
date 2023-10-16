<script>
    $(function () {
        $('.borrow').click(function () {
            const id = $(this).data('id')
            const url = "<?= BASEURL ?>/check/verify?id=" + id
            fetch(url)
            .then(response => response.json())
            .then(data => {
                if (data.auth) {
                    if (data.anggota) anggota(data.book)
                    if (data.admin) admin(data.admin)
                }else {
                    window.location.href = '/login';
                }
            })
        })

        function anggota(book)
        {
            $('#btnModal').click()
            $('.modal-image').attr('src', 'https://source.unsplash.com/170x180?' + book.category)
            $('#modal-title').html('Judul : ' + book.judul)
            $('#modal-pengarang').html('Oleh : ' + book.pengarang)
            $('#modal-penerbit').html('Penerbit : ' + book.penerbit)
            $('#modal-category').html('Category : ' + book.category)
            $('#modal-tahun').html('Tahun : ' + book.tahun_terbit)
            $('#modal-id').attr('value', book.id)

            let jumlah = $('#modal-jumlah').val()

            $('.plus').click(function () {
                if (jumlah < book.jumlah_copy) {                    
                    jumlah++
                    $('#modal-jumlah').attr('value', jumlah)
                    $('#modal-jumlah').attr('placeholder', jumlah)
                }
                

            })

            $('.minus').click(function (e) {
                if (jumlah > 1) {                    
                    jumlah--
                    $('#modal-jumlah').attr('value', jumlah)
                    $('#modal-jumlah').attr('placeholder', jumlah)
                }

            })

        }

        function checkJumlah(jumlah)
        {
            if (jumlah == 1) {
               $('.minus').off('click')
            }

            if (jumlah > 1) {
                $('.minus').on('click')
            }
        }

        function admin(data)
        {
            $("#AdminToast").addClass('d-block opacity-100')
            $('#AdminToast').css('transform', 'translateX(0%)')
            $("#ToastClose").click(() => {
                $("#AdminToast").removeClass('d-block opacity-100')
            })
            setTimeout(() => {
                $("#AdminToast").removeClass('d-block opacity-100')
                $("#ToastClose").click(() => {
                    $("#AdminToast").removeClass('d-block opacity-100')
                })
            }, 5000)

        }


    })
</script>