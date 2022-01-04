<footer id="mu-footer">
  <!-- start footer top -->
  <div class="mu-footer-top">
    <div class="container">
      <div class="mu-footer-top-area">
        <div class="row">
          {{-- <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="mu-footer-widget">
              <h4>Information</h4>
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="">Features</a></li>
                <li><a href="">Course</a></li>
                <li><a href="">Event</a></li>
                <li><a href="">Sitemap</a></li>
                <li><a href="">Term Of Use</a></li>
              </ul>
            </div>
          </div> --}}
          {{-- <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="mu-footer-widget">
              <h4>Student Help</h4>
              <ul>
                <li><a href="">Get Started</a></li>
                <li><a href="#">My Questions</a></li>
                <li><a href="">Download Files</a></li>
                <li><a href="">Latest Course</a></li>
                <li><a href="">Academic News</a></li>
              </ul>
            </div>
          </div> --}}
          {{-- <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="mu-footer-widget">
              <h4>News letter</h4>
              <p>Get latest update, news & academic offers</p>
              <form class="mu-subscribe-form">
                <input type="email" placeholder="Type your Email">
                <button class="mu-subscribe-btn" type="submit">Subscribe!</button>
              </form>
            </div>
          </div> --}}
          <div style="text-align: center" class="col-lg-12 col-md-12 col-sm-12">
            <div class="mu-footer-widget">
              <h4>Kontak</h4>
              <address>
                <p>{{$contents->alamat}}</p>
                <p>Kontak: {{$contents->no_kontak}} </p>
                <p>WhatsApp: {{$contents->no_wa}}</p>
                <p>Email:{{$contents->email}}</p>
              </address>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end footer top -->
  <!-- start footer bottom -->
  <div class="mu-footer-bottom">
    <div class="container">
      <div class="mu-footer-bottom-area">
        <p>&copy;Paud Meccazia Junior </p>
      </div>
    </div>
  </div>
  <!-- end footer bottom -->
</footer>
