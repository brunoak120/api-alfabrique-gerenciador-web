$('#estado').change(function () {
    var uf = $(this).val();
    $.get('/admin/profile/get-cidades/' + uf, function (busca) {
        $('#cidade').empty();
        $.each(busca, function (key, value) {
            $('#cidade').append('<option value="' + value.id + '">' + value.nome + '</option>');
        });
    });
});

$('#cep').change(function () {
    var cep = $(this).val();
    $.get('/admin/profile/get-cidades/' + uf, function (busca) {
        $('#cidade').empty();
        $.each(busca, function (key, value) {
            $('#cidade').append('<option value="' + value.id + '">' + value.nome + '</option>');
        });
    });
});