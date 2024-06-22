$(document).ready(function() {
    $('#form-2').on('submit', function(e) {
        e.preventDefault(); // Предотвратить стандартное поведение отправки формы

        // Сбор данных формы
        var formData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: 'process_form.php',
            data: formData,
            success: function(response) {
                // Обработка успешного ответа
                alert('Регистрация прошла успешно');
                console.log(response);
            },
            error: function(response) {
                // Обработка ошибки
                alert('Ошибка при регистрации');
                console.log(response);
            }
        });
    });
});