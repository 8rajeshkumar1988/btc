<form action="">
    <div>
        <label for="name">Name</label>
        <br />
        <input id="name" type="text" placeholder="Enter your name" />
    </div>
    <div>
        <label for="email">Email</label>
        <br />
        <input id="email" type="email" placeholder="Enter your email" />
    </div>
    <div>
        <label for="enquiry_type">Enquiry Type</label>
        <br />
        <select id="enquiry_type">
            <option value="general">General Enquiry</option>
            <option value="product">Product Enquiry</option>
            <option value="order">Order Enquiry</option>
        </select>
    </div>
    <div>
        <label for="phone">Phone Number</label>
        <br />
        <input id="phone" type="tel" placeholder="Enter your phone number" />
    </div>
    <div>
        <label for="company">Company Name</label>
        <br />
        <input
            id="company"
            type="text"
            placeholder="Enter your company name" />
    </div>

    <div class="whatsapp_input">
        <div class="whatsapp_container">
            <label for="whatsapp_number">Whatsapp Number</label>
            <div class="checkbox_container">
                <input type="checkbox" id="whatsapp_checkbox" />
                <label for="whatsapp_checkbox">Same as phone number</label>
            </div>
        </div>
        <input
            id="whatsapp_number"
            type="tel"
            placeholder="Enter your Whatsapp number" />
    </div>
    <div>
        <label for="Organization">Organization Type</label>
        <br />
        <input
            id="Organization"
            type="text"
            placeholder="Enter your Organization Type" />
    </div>
    <div class="textareaDiv">
        <label for="requirements">Tell Us About Your Requirements</label>
        <br />
        <textarea
            id="requirements"
            rows="3"
            placeholder="Enter your requirements"></textarea>
    </div>
    <div>
        <div class="policy_container">
            <input type="checkbox" id="policy_checkbox" />
            <label for="policy_checkbox">
                I agree to the BTC privacy policy.*
            </label>
        </div>
    </div>
    <div>
        <div class="e_com_btc">
            <input type="checkbox" id="e_com_btc" />
            <label for="e_com_btc">
                I agree to receive e-communications from BTC.
            </label>
        </div>
    </div>
    <div class="btn_container">
        <button class="cta">Submit <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt=""> </button>
    </div>
</form>