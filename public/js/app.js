$(document).ready(function() {
    $("#form1").submit((e) => {
        e.preventDefault();

        const data = {
            name: $("[name=name]").val(),
            phoneNumber: $("[name=phone_number]").val(),
            email: $("[name=email]").val(),
            address: $("[name=address]").val(),
            country: $("[name=country]").val(),
            state: $("[name=state]").val(),
            zip: $("[name=zip]").val()
        };

        console.log(data);

        fetch("/form-route", {
            method: "POST",
            body: JSON.stringify(data),
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            redirect: "follow"
        }).then(async (response) => {
            console.log(await response.json());
            window.location.href = "/paypal/create-payment";
        }).catch((err) => console.error(err));
    });
});