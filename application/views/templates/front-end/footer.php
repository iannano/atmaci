</body>
</html>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/jQuery-1.11.2/jquery-1.11.2.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/Semantic-UI-1.12.0/dist/semantic.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/jQuery-bxslider/jquery.bxslider.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/smooth-scroll-master/dist/js/smooth-scroll.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery-scrollspy-master/scrollspy.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/fancyapps-fancyBox/source/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/fancyapps-fancyBox/source/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/fancyapps-fancyBox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/atma-main-asset/js/control-script.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/Countdown/js/jquery.lwtCountdown-1.0.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/Countdown/js/misc.js"></script>
<script src="https://www.google.com/recaptcha/api.js?onload=loadCaptcha&render=explicit" async defer></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
<script type="text/javascript">
    /*function initialize1() {
        var myLatlng = new google.maps.LatLng(-7.2631822,112.6709932,17);
        var mapOptions = {
            zoom: 17,
            center: myLatlng
        };
        var map = new google.maps.Map(document.getElementById('atma-location'), mapOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Our Primary Address'
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize1);
    
    function initialize2() {
        var myLatlng = new google.maps.LatLng(-7.3307453,112.639879,17);
        var mapOptions = {
            zoom: 17,
            center: myLatlng
        };
        var map = new google.maps.Map(document.getElementById('atma-location-secondary'), mapOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Our Primary Address'
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize2);
    
    function initialize3() {
        var myLatlng = new google.maps.LatLng(-7.2394837,112.6292737,17);
        var mapOptions = {
            zoom: 17,
            center: myLatlng
        };
        var map = new google.maps.Map(document.getElementById('atma-location-third'), mapOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Our Primary Address'
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize3);
    
    $(document).ready(function() {
        $.ajaxSetup({ 
            cache: true 
        });
        $.getScript('//connect.facebook.net/en_US/sdk.js', function(){
            FB.init({
                appId: '1653860474832999',
                status: true,
                xfbml: true,
                version: 'v2.3'
            });
            FB.api(
                "/me?fields=id,name,albums.limit(10)",
                function (response) {
                  if (response && !response.error) {
                    console.log(response);
                  }
                }
            );
        });
    });
    */
    $('.bxslider').bxSlider({
        auto: true,
        autoControls: true
    });
    $('.slider8').bxSlider({
        mode: 'vertical',
        slideWidth: 300,
        minSlides: 4,
        slideMargin: 10,
        auto: true
    });
    $('.dropdown').dropdown({
        transition: 'slide down',
        action: 'hide'
    });
    $('#dropdownPekerjaan').dropdown({
        transition: 'slide down'
    });
    $('#dropdownProvinsi').dropdown({
        transition: 'slide down'
    });
    $('#dropdownKota').dropdown({
        transition: 'slide down'
    });
    $('#dropdownKotaKelahiran').dropdown({
        transition: 'slide down'
    });
    $('#dropdownProvinsiKelahiran').dropdown({
        transition: 'slide down'
    });
    $(".fancybox").fancybox({
	openEffect	: 'none',
	closeEffect	: 'none'
    });
    var captchaContainer = null;
    var loadCaptcha = function() {
        captchaContainer = grecaptcha.render('captcha_container', {
            'sitekey' : '6LdtSgcTAAAAALgkfL3TphRtWE2ASFgLLWqVLTKt',
            'callback' : function(response) {
                console.log(response);
            }
        });
    };
    // Set Time
    $('#countdown_dashboard').countDown({
        targetOffset: {
            'day':      0,
            'month':    0,
            'year':     0,
            'hour':     0,
            'min':      30,
            'sec':      0
        },
        onComplete: function(){
            console.log("Test Selesai");
        }
    });
    $('#countdown_dashboard').startCountDown();
</script>