$(document).ready(function() {
    $("#form1").submit((e) => {
        e.preventDefault();

        const data = {
            name: $("[name=firstname]").val() + " " + $("[name=lastname]").val(),
            phoneNumber: $("[name=phone_number]").val(),
            email: $("[name=email]").val(),
            address: $("[name=address]").val(),
            country: $("[name=country]").val(),
            state: $("[name=state]").val(),
            zip: $("[name=zip]").val(),
            shipping: $(".toPay").text() - $(".prd-total").text()
        };

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


    $(window).scroll(function() {
        // Check if the page has been scrolled by at least 100px
        if ($(this).scrollTop() >= 100) {
          // Make the navbar sticky
            $('#myheader').css('position', 'fixed');
            $('#myheader').css('top', '0');
        } else {
          // Reset the navbar to its default position
            $('#myheader').css('position', 'relative');
            $('#myheader').css('top', '0');
        }
    });

});