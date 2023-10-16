<script>
    $(function () {
        $('.confirm').click(function () {
            let id = $(this).data('id')
            let type = $(this).data('type')
            let url = "<?= BASEURL ?>/dashboard/admin/borrow/confirm?id=" + id + "&type=" + type
            fetch(url).then(response => response.json()).then(data => {
                $('.status[data-status="' + id + '"]').removeClass('bg-warning')
                if (data.approve) {
                    $('.status[data-status="' + id + '"]').html('approved')
                    $('.status[data-status="' + id + '"]').removeClass('bg-danger')
                    $('.status[data-status="' + id + '"]').addClass('bg-primary')
                }

                if (data.decline) {
                    $('.status[data-status="' + id + '"]').html('decline')
                    $('.status[data-status="' + id + '"]').addClass('bg-danger')
                }
            })
        })
    })
</script>