    <div class="cr-footer t-a-center">
        <div class="container">
            <ul class="cr-social-list pull-left">
                <li class="cr-social-list__item"><a href="instagram.com">
                        <img src="<?php echo theme() ?>/src/images/icons/insta_white.svg" height="18" width="19" alt="">
                    </a></li>
                <li class="cr-social-list__item"><a href="instagram.com">
                        <img src="<?php echo theme() ?>/src/images/icons/fb-white.svg" height="18" width="19" alt="">
                    </a></li>
            </ul>
            <a href="./spaces.html" class="cr-button mod-white pull-right tc-white">всі офіси</a>
            <ul class="cr-horizontal-list">
                <li class="cr-horizontal-list__item"><a href="" class="cr-link--white">Навчання</a></li>
                <li class="cr-horizontal-list__item"><a href="" class="cr-link--white">Послуги</a></li>
                <li class="cr-horizontal-list__item"><a href="" class="cr-link--white">Простори</a></li>
                <li class="cr-horizontal-list__item"><a href="" class="cr-link--white">FAQ</a></li>
                <li class="cr-horizontal-list__item"><a href="" class="cr-link--white">Про нас</a></li>
                <li class="cr-horizontal-list__item"><a href="" class="cr-link--white">Контакти</a></li>
            </ul>
            <div class="cr-footer__copyright">De House 2017</div>
        </div>
    </div>
</div>

<script>
//    function initMap() {
//        var bounds  = new google.maps.LatLngBounds();
//        var locations = [
//            ['school', 49.825870, 23.971553],
//            ['perfectial', 49.811748, 24.038954],
//            ['cytadel', 49.833025, 24.024031],
//        ];
//        var map = new google.maps.Map(document.getElementsByClassName('js-cr-map')[0], {
//            disableDefaultUI: true,
//            center: {lat: 0, lng: 0},
//            zoom: 15
//        });
//        for (var i in locations) {
//            var position = new google.maps.LatLng(locations[i][1], locations[i][2]);
//            bounds.extend(position);
//            var marker = new google.maps.Marker({
//                position: position,
//                map: map
//            });
//        }
//        map.panToBounds(bounds);
//        map.fitBounds(bounds);
//    }

</script>
<!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVTcBwJMTXFz3mOnx21ghxp7TqzO2Mm9U&callback=initMap"></script>-->
<!--<script src="./dist/index.bundle.js"></script>-->
<?php wp_footer(); ?>
</body>
</html>
