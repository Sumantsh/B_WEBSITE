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
            address: $("[name=address]").val(),
            country: $("[name=country]").val(),
            state: $("[name=state]").val(),
            zip: $("[name=zip]").val(),
            shipping: $(".toPay").text() - $(".prd-total").text()
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