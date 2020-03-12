$().ready(function() {
    $("#signupForm").validate({
        rules: {
            email: {
                email: true
            },
            phone_number: {
                numeric: true
            }
        },
        messages: {
            name: "Введіть ім'я",
            surname: "Введіть прізвище",
            email: "Введіть імейл",
            phone: "Введіть номер телефону",
            city: "Введіть місто"
        },
    })
});
