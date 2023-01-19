$(document).ready(function () {
    edit();
});


function edit() {

    $(document).on('click', '#edit', function () {
        $.ajax({
            url: 'edit.php',
            method: 'POST',
            data: {
                proizvod_id: $(this).val()
            },
            dataType: 'json',
            success: function (data) {
                $('#editfrm').show();
                $('#id').val(data.id);
                $('#naziv').val(data.naziv);
                $('#cena').val(data.cena);
                $('#merna_jedinica').val(data.merna_jedinica);
                $('#kolicina').val(data.kolicina);
                $('#dobavljac_id').val(data.dobavljac_id);
            }
        });
    })
}
