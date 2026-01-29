<!-- FOOTER STARTS A-->
<footer>
    <div class="container">
        <div class="col-1">
            <h3>Know Us Better</h3>
            <div class="f_link"> <a href="#">Home</a> <a href="#">About Us</a> <a href="#">Products</a> <a
                    href="#">Exports</a> <a href="#">Our USP</a> <a href="#">blog</a> </div>
        </div>
        <div class="col-2">
            <h3>Quick Links</h3>
            <div class="f_link"> <a href="#">Terms and conditions</a> <a href="#">Bulk Order Inquiry</a> <a href="#">Quality
                    Certification</a> <a href="#">Privacy policy</a> <a href="#">Contact Us</a> <a href="#">Sitemap</a> </div>
        </div>
        <div class="col-3">
            <h3>Keep in touch</h3>
            <div class="f_contact_con white">
                <h4>KJ EXIM - Organic Fertilizer Supplier</h4>
                <p class="mt15"><i class="fa fa-map-marker fs18 mr5"></i> House no 740, near Ganesh temple,<br>
                    A/P Nittur, Tal - Chandgad,<br>
                    Kolhapur, Maharashtra 416508, India</p>
                <p class="mt15"><i class="fa fa-envelope fs14 mr5"></i> <a
                        href="mailto: kjexim2023@gmail.com">kjexim2023@gmail.com</a></p>
                <p class="mt15"><i class="fa fa-phone fs14 mr5"></i> Mobile: +91 9689653783</p>
                <p class="mt15"><i class="fa fa-phone fs14 mr5"></i> Phone: +91 8454042304</p>
            </div>
        </div>
        <div class="business_details_con white">
            <h3>Business Details</h3>
            <div class="business_details">
                <p><strong>Contact Person:</strong> Ketan Mahadev Jadhav</p>
                <p><strong>Designation:</strong> Proprietor</p>
                <p><strong>GST Number:</strong> 27BCPPJ7536N1ZS</p>
                <p><strong>Established:</strong> 2023</p>
                <p><strong>Experience:</strong> 3 years in Agriculture & Organic Fertilizer</p>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="cp" style="background-color: #333; color: #fff;">
        <div class="container">
            <p class="copyright" style="color: #fff !important;">
                © 2023, <strong style="color: #fff !important;">KJ EXIM</strong>. All rights reserved.
                <span style="color: #fff !important;">Managed By :- <a href="https://trade4export.com"
                        style="color: rgb(92, 92, 241) !important;">Trade4Export</a></span>
            </p>
            <div class="clearfix"></div>
        </div>
    </div>
</footer>

<!-- Enquiry modal -->
<div class="modal" id="enquiryModal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>

        <h3>Enquiry Form</h3>

        <form onsubmit="sendWhatsApp(event)">
            <input type="text" id="name" placeholder="Your Name" required>
            <input type="email" id="email" placeholder="Your Email" required>
            <input type="tel" id="number" placeholder="Your Phone Number" required>
            <input type="text" id="subject" placeholder="Subject" required>
            <textarea id="message" rows="4" placeholder="Your Message" required></textarea>

            <button type="submit">Send via WhatsApp</button>
        </form>
    </div>
</div>
<!-- enquiry script -->
<script>
    function openModal() {
        document.getElementById("enquiryModal").style.display = "flex";
    }

    function closeModal() {
        document.getElementById("enquiryModal").style.display = "none";
    }

    function sendWhatsApp(e) {
        e.preventDefault();

        let name = document.getElementById("name").value;
        let email = document.getElementById("email").value;
        let number = document.getElementById("number").value;
        let subject = document.getElementById("subject").value;
        let message = document.getElementById("message").value;

        let whatsappNumber = "919689653783";

        let text = `*New Enquiry*%0A
Name: ${name}%0A
Email: ${email}%0A
Phone: ${number}%0A
Subject: ${subject}%0A
Message: ${message}`;

        let url = `https://wa.me/${whatsappNumber}?text=${text}`;
        window.open(url, "_blank");

        closeModal();
    }
</script>

<!-- whatsapp script -->
<script>
    function sendWhatsAppMessage(event) {
        event.preventDefault();

        let name = document.getElementById("name").value;
        let email = document.getElementById("email").value;
        let phone = document.getElementById("phone").value;
        let message = document.getElementById("message").value;

        let whatsappNumber = "9689653783";

        let whatsappMessage =
            `Hello, I would like to contact you.%0A%0A` +
            `Name: ${name}%0A` +
            `Email: ${email}%0A` +
            `Phone: ${phone}%0A` +
            `Message: ${message}`;

        let whatsappURL = `https://wa.me/${whatsappNumber}?text=${whatsappMessage}`;

        window.open(whatsappURL, "_blank");
    }
</script>

<!-- FOOTER ENDS A-->
<script src="Scripts/jquery-1.11.3.min.js"></script>
<script src="Scripts/bootstrap.min.js"></script>
<script src="Scripts/helpers.min.js"></script>
<script src="Scripts/function.js"></script>
</body>

</html>