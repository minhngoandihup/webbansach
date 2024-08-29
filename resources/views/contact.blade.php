 @extends('layout')
 @section('title', 'Liên Hệ')
 @section('content')
 
 <main>

<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="slider-area">
<div class="slider-height2 slider-bg5 d-flex align-items-center justify-content-center">
<div class="hero-caption hero-caption2">
<h2>Liên hệ</h2>
</div>
</div>
</div>
</div>
</div>
</div>



<section class="contact-section">
<div class="container ">
<div class="d-none d-sm-block mb-5 pb-4 d-flex">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.442708853966!2d106.62616837480606!3d10.853893739299627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bee0b0ef9e5%3A0x5b4da59e47aa97a8!2zQ8O0bmcgVmnDqm4gUGjhuqduIE3hu4FtIFF1YW5nIFRydW5n!5e0!3m2!1svi!2s!4v1715581268156!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<script>
                    function initMap() {
                        var uluru = {
                            lat: -25.363,
                            lng: 131.044
                        };
                        var grayStyles = [{
                            featureType: "all",
                            stylers: [{
                                saturation: -90
                            },
                            {
                                lightness: 50
                            }
                            ]
                        },
                        {
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#ccdee9'
                            }]
                        }
                        ];
                        var map = new google.maps.Map(document.getElementById('map'), {
                            center: {
                                lat: -31.197,
                                lng: 150.744
                            },
                            zoom: 9,
                            styles: grayStyles,
                            scrollwheel: false
                        });
                    }
                </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
                </script>
</div>
<div class="row">
<div class="col-12">
<h2 class="contact-title">Liên lạc</h2>
</div>
<div class="col-lg-8">
<form class="form-contact contact_form" action="https://preview.colorlib.com/theme/abcbook/contact_process.php" method="post" id="contactForm" novalidate="novalidate">
<div class="row">
<div class="col-12">
<div class="form-group">
<textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Nhập tin nhắn"></textarea>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Nhập tên của bạn">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
</div>
</div>
<div class="col-12">
<div class="form-group">
<input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Nhập chủ đề">
</div>
</div>
</div>
<div class="form-group mt-3">
<button type="submit" class="button button-contactForm boxed-btn">Gửi</button>
</div>
</form>
</div>
<div class="col-lg-3 offset-lg-1">
<div class="media contact-info">
<span class="contact-info__icon"><i class="bi bi-house"></i></span>
<div class="media-body">
<h3>TP.HCM, Việt Nam.</h3>
<p>Công viên Quang Trung, Quận 12</p>
</div>
</div>
<div class="media contact-info">
<span class="contact-info__icon"><i class="bi bi-phone"></i></span>
<div class="media-body">
<h3>+84 378 617 574</h3>
<p>Từ thứ 2 đến thứ 6 - 9 giờ sáng đến 6 giờ chiều</p>
</div>
</div>
<div class="media contact-info">
<span class="contact-info__icon"><i class="bi bi-envelope"></i></span>
<div class="media-body">
<h3><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ee9d9b9e9e819c9aae8d8182819c82878cc08d8183">[Địa chỉ email&#160;được bảo vệ]</a></h3>
<p>Rất hân hạnh được giải đáp thắc mắc của bạn bất cứ lúc nào!</p>
</div>
</div>
</div>
</div>
</div>
</section>

</main>
    <!-- Contact End -->
    @endsection