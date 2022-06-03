<!-- Internet Connection Status-->
<div class="internet-connection-status" id="internetStatus"></div>
<div class="footer-nav-area" id="footerNav">
    <div class="container h-100 px-0">
        <div class="suha-footer-nav h-100">
            <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
                <li><a class="{{ Request::is('m') ? 'active' : ' ' }}" href="{{route('m')}}"><i class="lni lni-home"></i>Home</a></li>
                <li><a href="message.html"><i class="lni lni-life-ring"></i>Support</a></li>
                <li><a href="/mcart" class="{{ Request::is('m.cart') ? 'active' : ' ' }}"><i class="lni lni-shopping-basket"></i>Cart</a></li>
                <li><a href="pages.html"><i class="lni lni-alarm"></i>Notification</a></li>
                <li><a href="settings.html"><i class="lni lni-cog"></i>Settings</a></li>
            </ul>
        </div>
    </div>
</div>


<!-- All JavaScript Files-->
<script src="../mobile/js/bootstrap.bundle.min.js"></script>
<script src="../mobile/js/jquery.min.js"></script>
<script src="../mobile/js/waypoints.min.js"></script>
<script src="../mobile/js/jquery.easing.min.js"></script>
<script src="../mobile/js/owl.carousel.min.js"></script>
<script src="../mobile/js/jquery.magnific-popup.min.js"></script>
<script src="../mobile/js/jquery.counterup.min.js"></script>
<script src="../mobile/js/jquery.countdown.min.js"></script>
<script src="../mobile/js/jquery.passwordstrength.js"></script>
<script src="../mobile/js/dark-mode-switch.js"></script>
<script src="../mobile/js/no-internet.js"></script>
<script src="../mobile/js/active.js"></script>
<script src="../mobile/js/pwa.js"></script>

<script>
   $(function() {
  $('suha-footer-nav ul li a').each(function() {
    var isActive = this.pathname === location.pathname;
    $(this).parent().toggleClass('active', isActive);
  });
});
</script>
</body>

  </html>