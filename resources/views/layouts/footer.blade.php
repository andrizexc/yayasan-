<section class="footer col-md-12">
    @if(!Auth::check())
    <div class="container">
        <div class="back-footer">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 con ig">
                    <h3>Gallery</h3>
                    <hr class="garis">
                    <div id="footer-gallery-js" class="list-unstyled quick-links row gmbr"></div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 con artikel">
                    <h3>Artikel</h3>
                    <hr class="garis">
                    <ul id="footer-article-js" class="list-unstyled quick-links"></ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 con agenda">
                    <h3>Agenda</h3>
                    <hr class="garis">
                    <ul id="footer-schedule-js" class="list-unstyled quick-links"></ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 con tentang">
                    <h3>Tentang</h3>
                    <hr class="garis">
                    <ul class="list-unstyled quick-links">
                        <li>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</p>
                        </li>
                        <li class="btn-tentang">
                            <a class="lokasi" href="#"><i class="fas fa-map-marker-alt"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                            <a href="#"><i class="fas fa-phone"></i></a>
                        </li>
                        <li>
                            <p>Jalan Burangrang No. 08 Bandung 40262</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="copyright col-md-12">
        <p id="app-footer">Copyright &copy;</p>
    </div>
</section>
<script>
    document.getElementById('app-footer').innerHTML += ` ${new Date().getFullYear()} - <a href="{{ url('/') }}">Yayasan Badan Peguruan Indonesia Bandung</a>`
</script>