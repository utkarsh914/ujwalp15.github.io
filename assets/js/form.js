//For the contact form
function submitForm(form){
    var url = form.attr("action");
    var formData = $(form).serializeArray();
    $.post(url, formData).done(function (data) {
        alert(data);
    });
}

$("#contact_form").on('submit',function (e){
       e.preventDeafult();

      submitForm("#contact_form");
})
