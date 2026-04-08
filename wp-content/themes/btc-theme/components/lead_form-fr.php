<form id="aa-lead-form">
    <div>
        <label for="name">Nom*</label>
        <br />
        <input id="name" name="name" type="text" class="text-control__input"  />
    </div>
    <div>
        <label for="email">Email*</label>
        <br />
        <input id="email" name="email" class="email-input" type="email"  />
    </div>
    <div>
        <label for="enquiry_type">Type de Renseignement*</label>
        <br />
        <span class="enquiry_type_box">
            <select id="enquiry_type" name="enquiry_type">
                <option value="General">Général</option>
                <option value="Business">Entreprise</option>
                <option value="Entrepreneur">Entrepreneur</option>
                <option value="Careers">Carrières</option>
            </select>
        </span>
    </div>
    
    <div style="position: relative;z-index: 2;" >
        <label for="phone">Numéro de Téléphone*</label>
        <br />
        <span data-lenis-prevent>
            <input id="phone" name="phone" autocomplete="new-phone" class="phone-input" type="tel"  />
        </span>
    </div>
    <div>
        <label for="company">Nom de l'Entreprise*</label>
        <br />
        <input
            id="company"
            type="text"
            name="company_name"
             />
    </div>

    <div class="whatsapp_input" style="position: relative;z-index: 1;" >
        <div class="whatsapp_container">
            <label for="whatsapp_number">Numéro Whatsapp</label>
            <div class="checkbox_container">
                <input type="checkbox" id="whatsapp_checkbox" />
                <label for="whatsapp_checkbox">Identique au numéro de téléphone</label>
            </div>
        </div>
        <span data-lenis-prevent>

            <input
            id="whatsapp_number"
            type="tel"
            name="whatsapp" class="phone-input"
            />
        </span>
    </div>
    <div>
        <label for="Organization">Type d'Organisation*</label>
        <br />
        <input
            id="Organization"
            type="text"
            name="org_type"
             />
    </div>
    <div class="textareaDiv">
        <label for="requirements">Parlez-Nous De Vos Besoins*</label>
        <br />
        <textarea
            id="requirements"
            rows="3"
            name="requirements"
           ></textarea>
    </div>
    <div>
        <div class="policy_container">
            <input type="checkbox" checked id="policy_checkbox" name="tandc" />
            <label for="policy_checkbox" class="policy_label">
            J'accepte la <a href="/privacy-policy" target="_blank" style="color: #000">politique de confidentialité</a> de.*
            </label>
        </div>
    </div>
    <div>
        <div class="e_com_btc">
            <input type="checkbox" checked id="e_com_btc" name="e_com_btc" />
            <label for="e_com_btc" class="e_com_btc_label">
            J'accepte de recevoir des communications en ligne de BTC
            </label>
        </div>
    </div>
    <div class="btn_container">
        <button class="cta lead_form_submit">Renseigner <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt=""> </button>
        <p class="lead_form_error"></p>
    </div>
</form>




<script>
    $(document).ready(function() {
        gsap.from('#aa-lead-form > div', {
            opacity: 0,
            y: 100,
            duration: 1,
            delay: 0.5,
            ease: "power4.out",
            stagger: 0.08,
            scrollTrigger: {
                trigger: "#aa-lead-form",
                start: "top 85%",
                toggleActions: "play none none reverse",
            }
        });
    });
</script>