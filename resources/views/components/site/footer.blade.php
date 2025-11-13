<!-- Our Footer -->
<section class="footer_one">
    <div class="container pb60">
        <div class="row">
            <div class="col-sm-6 col-md-5 col-lg-3 col-xl-3">
                <div class="footer_contact_widget">
                    <h4>Contact Us</h4>
                    <div class="footer_contact_iconbox d-flex mb-4">
                        <div class="icon"><span class="flaticon-phone-call"></span></div>
                        <div class="details ms-4">
                            <h5 class="title">Monday-Friday: 08am-9pm</h5>
                            <a href="#">+234 701 435 9042</a> </div>
                    </div>
                    <div class="footer_contact_iconbox d-flex">
                        <div class="icon"><span class="flaticon-email"></span></div>
                        <div class="details ms-4">
                            <h5 class="title">Need help with your order?</h5>
                            <a href="#">support@taraconservices.com</a> </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-2 col-xl-2">
                <div class="footer_qlink_widget">
                    <h4>Our Top Categories</h4>
                    <ul class="list-unstyled">
                        @foreach (app('categories')->take(5) as $category)
                            <li class="">
                                <a href="{{ route('shop.index', ['category'=> $category]) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-2 col-xl-2">
                <div class="footer_qlink_widget">
                    <h4>Customer Support</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">My Cart</a></li>
                        <li><a href="#">My Items</a></li>
                        <li><a href="#">Shop</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-2 col-xl-2">
                <div class="footer_qlink_widget">
                    <h4>Our Services</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Refund</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-8 col-md-5 col-lg-3 col-xl-3">
                <div class="footer_social_widget">
                    <h4 class="title">Follow us</h4>
                    <div class="social_icon_list mt30">
                        <ul class="mb20">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
{{--                            <li class="list-inline-item"><a href="#"><i class="fab fa-x-twitter"></i></a></li>--}}
                            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer_acceped_card_widget">
                    <h4 class="title mb20">We accept</h4>
                    <div class="acceped_card_list">
                        <ul class="d-flex mb-0">
                            <li class="me-2"><a href="#"><img src="https://creativelayers.net/themes/zeomart-html/images/resource/visa-card.png" alt="visa-card"></a></li>
                            <li class="me-2"><a href="#"><img src="https://creativelayers.net/themes/zeomart-html/images/resource/master-card.png" alt="master-card"></a></li>
                            <li class="me-2"><a href="#"><img src="https://creativelayers.net/themes/zeomart-html/images/resource/apple-pay.png" alt="apple-pay"></a></li>
                            <li class="me-2"><a href="#"><img src="https://creativelayers.net/themes/zeomart-html/images/resource/discover-card.png" alt="discover-card"></a></li>
                            <li class="me-2"><a href="#"><img src="https://creativelayers.net/themes/zeomart-html/images/resource/paypal.png" alt="paypal"></a></li>
                            <li><a href="#"><img src="https://creativelayers.net/themes/zeomart-html/images/resource/amex-card.png" alt="amex-card"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container bdrt1 pt20 pb20">
        <div class="row">
            <div class="col-lg-6">
                <div class="copyright-widget text-center text-lg-start d-block d-lg-flex mb15-md">
                    <p class="me-4">© 2025 . All Rights Reserved</p>
                    <p><a href="#">Privacy</a> · <a href="#">Terms</a></p>
                </div>
            </div>

        </div>
    </div>
</section>
