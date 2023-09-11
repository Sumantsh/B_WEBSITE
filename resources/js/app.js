import './bootstrap';

$(document).ready(function() {
    $("#form1").submit((e) => {
        e.preventDefault();

        const data = {
            name: $("[name=name]").val(),
            phoneNumber: $("[name=phone_Number]").val(),
            email: $("[name=email]").val(),
            address: $("[name=address]").val(),
            country: $("[name=country]").val(),
            state: $("[name=state]").val(),
            zip: $("[name=zip]").val()
        };

  

        fetch("/form-route", {
            method: "POST",
            body: JSON.stringify(data),
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            redirect: "follow"
        }).then((response) => console.log(response)).catch((err) => console.error(err));
    });


    
    

});