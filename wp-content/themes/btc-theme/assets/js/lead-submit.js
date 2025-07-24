jQuery(function ($) {
     $("#whatsapp_checkbox").on("change", function () {
        if ($(this).is(":checked")) {
        $("#whatsapp_number").val($("#phone").val());
        } else {
        $("#whatsapp_number").val("");
        }
    });
  $("#aa-lead-form").on("submit", function (e) {
    e.preventDefault();

    const $form = $(this);
    let isValid = true;
    $form.find(".error_input").removeClass("error_input");
    $form.find(".error_text").removeClass("error_text");
    $(".lead_form_error").text("");
   
    const $name = $($form.find('[name="name"]'));
    if (!$name.val().trim()) {
      isValid = false;
      $name.addClass("error_input");
    }
    const $email = $($form.find('[name="email"]'));
    const emailVal = $email.val().trim();
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(emailVal)) {
      isValid = false;
      $email.addClass("error_input");
    }
    
    const $phone = $($form.find('[name="phone"]'));
    const phoneVal = $phone.val().trim();
    const phonePattern = /^[0-9]{7,15}$/;
    if (!phonePattern.test(phoneVal)) {
      isValid = false;
      $phone.addClass("error_input");
    }

    const $company = $($form.find('[name="company_name"]'));
    if (!$company.val().trim()) {
      isValid = false;
      $company.addClass("error_input");
    }
    const $org = $($form.find('[name="org_type"]'));
    if (!$org.val().trim()) {
      isValid = false;
      $org.addClass("error_input");
    }
    const $req = $($form.find('[name="requirements"]'));
    if (!$req.val().trim()) {
      isValid = false;
      $req.addClass("error_input");
    }
    const $policy = $($form.find('[name="tandc"]'));
    if (!$policy.is(":checked")) {
      isValid = false;
      $(".lead_form_error").text("*Please accept the terms and conditions.");
    }

    if (!isValid) {
      return false;
    }

    const data = {
      action: "save_lead",
      nonce: aaLead.nonce,
      name: $form.find('[name="name"]').val(),
      email: $form.find('[name="email"]').val(),
      enquiry_type: $form.find('[name="enquiry_type"]').val(),
      phone: $form.find('[name="phone"]').val(),
      company_name: $form.find('[name="company_name"]').val(),
      requirements: $form.find('[name="requirements"]').val(),
      whatsapp: $form.find('[name="whatsapp"]').val(),
      org_type: $form.find('[name="org_type"]').val(),
      tandc: $form.find('[name="tandc"]').val(),
      e_com_btc: $form.find('[name="e_com_btc"]').val(),
      source_url: window.location.href,
    };

    $.post(aaLead.ajax_url, data, function (response) {
      if (response.success) {
        alert(response.data);
        $form.trigger("reset");
        $(".lead_form_error").text("");
      } else {
        $(".lead_form_error").text(response.data);
      }
    });
  });

  $("#btc-event-form").on("submit", function (e) {
    e.preventDefault();

    const $form = $(this);
    const data = {
      action: "save_event",
      nonce: aaLead.event_nonce,
      name: $form.find('[name="name"]').val(),
      email: $form.find('[name="email"]').val(),
      phone: $form.find('[name="phone"]').val(),
      reason_to_attend: $form.find('[name="reason_to_attend"]').val(),
      no_of_attendees: $form.find('[name="no_of_attendees"]').val(),
      source_url: window.location.href,
    };

    $.post(aaLead.ajax_url, data, function (response) {
      if (response.success) {
        alert(response.data);
        $form.trigger("reset");
      } else {
        alert("Error: " + response.data);
      }
    });
  });

  $("#btc-subscribe-form").on("submit", function (e) {
    e.preventDefault();

    const $form = $(this);
    const data = {
      action: "save_subscribe",
      nonce: aaLead.subscribe_nonce,
      name: $form.find('[name="name"]').val(),
      email: $form.find('[name="email"]').val(),
      source_url: window.location.href,
    };

    $.post(aaLead.ajax_url, data, function (response) {
      if (response.success) {
        alert(response.data);
        $form.trigger("reset");
      } else {
        alert("Error: " + response.data);
      }
    });
  });
});
