$(document).ready(function() {
    console.log($(".paynow-stripe"));
    $(".paynow-stripe").click((e) => {
        console.log($(".paynow-stripe"));
        e.preventDefault();

        const data = {
            firstname: $("[name=firstname]").val(),
            lastname: $("[name=lastname]").val(),
            phoneNumber: $("[name=phone_number]").val(),
            email: $("[name=email]").val(),
            billing_line_one: $("[name=billing_address_line1]").val(),
            billing_line_two: $("[name=billing_address_line2]").val(),
            billing_country: $("[name=billing_country]").val(),
            billing_city: $("[name=billing_city]").val(),
            billing_state: $("[name=billing_state]").val(),
            billing_zip: $("[name=billing_zip]").val(),
            shipping_line_one: $("[name=shipping_address_line1]").val(),
            shipping_line_two: $("[name=shipping_address_line2]").val(),
            shipping_country: $("[name=shipping_country]").val(),
            shipping_city: $("[name=shipping_city]").val(),
            shipping_state: $("[name=shipping_state]").val(),
            shipping_zip: $("[name=shipping_zip]").val(),
            shipping: $(".toPay-stripe").text() - $(".prd-total").text()
        };

        const validated = () => {
            const fields = document.querySelectorAll("input[required]");
            for(let i = 0; i < fields.length; i++) {
                if(fields[i].value) {
                    continue;
                } else {
                    return false;
                }
            }
            return true;
        }

        if(validated()) {
            fetch("/form-route", {
                method: "POST",
                body: JSON.stringify(data),
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                redirect: "follow"
            }).then(async (response) => {
                window.location.href = "/stripe/create-payment";
            }).catch((err) => console.error(err));
        } else {
            alert("Please fill in all the fields carefully");
        }
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