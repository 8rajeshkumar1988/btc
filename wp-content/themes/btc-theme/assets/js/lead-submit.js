jQuery(function ($) {
    $('#aa-lead-form').on('submit', function (e) {
        e.preventDefault();

        const $form  = $(this);
        const data = {
            action:        'save_lead',
            nonce:         aaLead.nonce,
            name:          $form.find('[name="name"]').val(),
            email:         $form.find('[name="email"]').val(),
            enquiry_type:  $form.find('[name="enquiry_type"]').val(),
            phone:         $form.find('[name="phone"]').val(),
            company:       $form.find('[name="company"]').val(),
            requirements:  $form.find('[name="requirements"]').val(),
            whatsapp:      $form.find('[name="whatsapp"]').val(),
            org_type:      $form.find('[name="org_type"]').val(),
            source_url:    window.location.href
        };

        $.post(aaLead.ajax_url, data, function (response) {
            if (response.success) {
                alert(response.data);
                $form.trigger('reset');
            } else {
                alert('Error: ' + response.data);
            }
        });
    });
});
