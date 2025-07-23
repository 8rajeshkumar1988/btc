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
            company_name:       $form.find('[name="company_name"]').val(),
            requirements:  $form.find('[name="requirements"]').val(),
            whatsapp:      $form.find('[name="whatsapp"]').val(),
            org_type:      $form.find('[name="org_type"]').val(),
            tandc:         $form.find('[name="tandc"]').val(),
            e_com_btc:     $form.find('[name="e_com_btc"]').val(),
            source_url:    window.location.href
        };

        $.post(aaLead.ajax_url, data, function (response) {
            if (response.success) {
                alert(response.data);
                // $form.trigger('reset');
            } else {
                alert('Error: ' + response.data);
            }
        });
    });

    $('#btc-event-form').on('submit', function (e) {
        e.preventDefault();

        const $form  = $(this);
        const data = {
            action:        'save_event',
            nonce:         aaEvent.nonce,
            name:          $form.find('[name="name"]').val(),
            email:         $form.find('[name="email"]').val(),
            phone:         $form.find('[name="phone"]').val(),
            reason_to_attend:  $form.find('[name="reason_to_attend"]').val(),
            no_of_attendees:      $form.find('[name="no_of_attendees"]').val(),
            source_url:    window.location.href
        };

        $.post(aaEvent.ajax_url, data, function (response) {
            if (response.success) {
                alert(response.data);
                // $form.trigger('reset');
            } else {
                alert('Error: ' + response.data);
            }
        });
    });


     $('#btc-subscribe-form').on('submit', function (e) {
        e.preventDefault();

        const $form  = $(this);
        const data = {
            action:        'save_subscribe',
            nonce:         aaSubscribe.nonce,
            name:          $form.find('[name="name"]').val(),
            email:         $form.find('[name="email"]').val(),
            source_url:    window.location.href
        };

        $.post(aaSubscribe.ajax_url, data, function (response) {
            if (response.success) {
                alert(response.data);
                // $form.trigger('reset');
            } else {
                alert('Error: ' + response.data);
            }
        });
    });
});
