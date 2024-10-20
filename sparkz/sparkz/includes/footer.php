<style>
	.float-button {
        text-decoration: none;
        position: fixed;
        padding: 10px;
        padding-right: 15px;
        bottom: 30px;
        right: 30px;
        color: #fff;
        background-color:#25D366;
        border-radius: 25px 30px 5px 25px;
        z-index: 100;
        font-family: Arial;
        font-size: 17px;
        animation: whatsapp-animation 0.5s ease-in-out;
        box-shadow: 1px 2px 5px 2px rgba(30,30,30,0.3);
        transition:all 0.3s ease-out;
    }

    .float-button:hover {
         background-color: #128C7E;
          color: #fff;
    }

    .fa-whatsapp {
        font-size: 20px !important;
        padding-right: 5px;
        padding-left: 5px;
    }

    @keyframes whatsapp-animation {
        from {
            opacity: 0%;
        }

        to {
            opacity: 100%
        }
    }

    @media screen and (max-width: 545px) {
        span {
            display: none;
        }

        .float-button {
            bottom: 15px;
            right: 15px;
            width: 20px;
            border-radius: 20px 20px 5px 20px;
        }

        .fa-whatsapp {
            font-size: 22px !important;
            padding: 4px;
        }
    }
</style>



<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap.min.js"></script>
<script src="assets/js/foundation-datepicker.min.js"></script>
<script src="assets/js/validator.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/ajax.js"></script>
 <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

</body>
</html>