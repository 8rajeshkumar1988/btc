jQuery(function ($) {


$("#whatsapp_checkbox").on("change", function () {
  const $phoneInput = $("#phone");
  const $whatsappInput = $("#whatsapp_number");

  const phoneInstance = $phoneInput[0]._intlTelInstance;
  const whatsappInstance = $whatsappInput[0]._intlTelInstance;

  if (!phoneInstance || !whatsappInstance) {
    console.warn("intlTelInput not initialized on one or both inputs");
    return;
  }

  if ($(this).is(":checked")) {
    const plainNumber = $phoneInput.val();

    $whatsappInput
      .val(plainNumber)
      .prop("readonly", true);
    
    whatsappInstance.setCountry(phoneInstance.getSelectedCountryData().iso2);

    $phoneInput.on("input._sync", function () {
      $whatsappInput.val($phoneInput.val());
    });

    $phoneInput.on("countrychange._sync", function () {
      const countryData = phoneInstance.getSelectedCountryData();
      whatsappInstance.setCountry(countryData.iso2);
    });

  } else {
    // Unbind all sync
    $phoneInput.off(". _sync");
    $whatsappInput
      .val("")
      .prop("readonly", false);
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

    const phoneInput = $form.find('[name="phone"]')[0];
    const phone = phoneInput._intlTelInstance.getNumber();

    const whatsappInput = $form.find('[name="whatsapp"]')[0];
    const whatsapp = whatsappInput && whatsappInput._intlTelInstance.getNumber();

    const data = {
      action: "save_lead",
      nonce: aaLead.nonce,
      name: $form.find('[name="name"]').val(),
      email: $form.find('[name="email"]').val(),
      enquiry_type: $form.find('[name="enquiry_type"]').val(),
      phone: phone,
      company_name: $form.find('[name="company_name"]').val(),
      requirements: $form.find('[name="requirements"]').val(),
      whatsapp: whatsapp,
      org_type: $form.find('[name="org_type"]').val(),
      tandc: $form.find('[name="tandc"]').val(),
      e_com_btc: $form.find('[name="e_com_btc"]').val(),
      source_url: window.location.href,
    };

    $.post(aaLead.ajax_url, data, function (response) {
      if (response.success) {
        // alert(response.data);
        $form.trigger("reset");
        $(".lead_form_error").text("");
        window.location.href = "/thank-you/";
      } else {
        $(".lead_form_error").text(response.data);
      }
    });
  });

  $("#btc-event-form").on("submit", function (e) {
    e.preventDefault();
    const $form = $(this);
    let isValid = true;
    $form.find(".error_input").removeClass("error_input");
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

    const $reason = $($form.find('[name="reason_to_attend"]'));
    if (!$reason.val().trim()) {
      isValid = false;
      $reason.addClass("error_input");
    }

    const $phone = $($form.find('[name="phone"]'));
    const phoneVal = $phone.val().trim();
    const phonePattern = /^[0-9]{7,15}$/;
    if (!phonePattern.test(phoneVal)) {
      isValid = false;
      $phone.addClass("error_input");
    }
    if (!isValid) {
      return false;
    }
    const phoneInput = $form.find('[name="phone"]')[0];
    const phone = phoneInput._intlTelInstance.getNumber();
    const data = {
      action: "save_event",
      nonce: aaLead.event_nonce,
      name: $form.find('[name="name"]').val(),
      email: $form.find('[name="email"]').val(),
      phone: phone,
      reason_to_attend: $form.find('[name="reason_to_attend"]').val(),
      no_of_attendees: $form.find('[name="no_of_attendees"]').val(),
      source_url: window.location.href,
    };

    $.post(aaLead.ajax_url, data, function (response) {
      if (response.success) {
        $form.trigger("reset");
        window.location.href = "/thank-you/";
      } else {
        $(".event_form_error").text(response.data);
      }
    });
  });

  $("#btc-subscribe-form").on("submit", function (e) {
    e.preventDefault();
    const error_text = document.querySelector(".newsletter_error");
    $(".subscribe_success").text('');
    const $form = $(this);
    let isValid = true;
    $form.find(".error_input").removeClass("error_input");
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

    if (!isValid) {
      error_text.innerText = "Please fill all the fields*";
      return false;
    }
    const data = {
      action: "save_subscribe",
      nonce: aaLead.subscribe_nonce,
      name: $form.find('[name="name"]').val(),
      email: $form.find('[name="email"]').val(),
      source_url: window.location.href,
    };
    error_text.innerText = "";

    $.post(aaLead.ajax_url, data, function (response) {
      if (response.success) {
        console.log(response.data);
        $(".subscribe_success").text(response.data);
        $form.trigger("reset");
        
      } else {
        error_text.innerText = response.data;
      }
    });
  });
});
