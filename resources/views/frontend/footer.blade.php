<!-- FOOTER -->
<footer id="footer">
  <div class="container">
      <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-6">
              <h4 class="uppercase">eventr'15</h4>
                <p class="small">Vestibulum in ultrices justo. Praesent placerat justo metus, vitae malesuada lacus eleifend vel. Vivamus viverra volutpat leo, a gravida dolor posuere congue.</p>
                <ul class="list-unstyled list-inline uppercase">
                  @if(!empty(Config::get('settings')->facebook))
                    <li><a href="{{ Config::get('settings')->facebook }}"><i class="fa fa-lg fa-facebook"></i></a></li>
                  @endif
                  @if(!empty(Config::get('settings')->twitter))
                    <li><a href="{{ Config::get('settings')->twitter }}"><i class="fa fa-lg fa-twitter"></i></a></li>
                  @endif
                  @if(!empty(Config::get('settings')->instagram))
                    <li><a href="{{ Config::get('settings')->instagram }}"><i class="fa fa-lg fa-instagram"></i></a></li>
                  @endif
                  @if(!empty(Config::get('settings')->email))
                    <li><a href="{{ Config::get('settings')->email }}"><i class="fa fa-lg fa-email"></i></a></li>
                  @endif
                </ul>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6">
              <h4 class="uppercase">FAQ</h4>
                <!--<p class="small">Etiam nec porta risus. Aliquam id odio orci. Duis accumsan feugiat feugiat.</p>-->

                <dl class="faqs">
                  <dt>Is this the first question?</dt>
                  <dd class="small">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</dd>

                  <dt>Mauris ac metus in justo rhoncus?</dt>
                  <dd class="small">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</dd>

                  <dt>Praesent eleifend lacinia?</dt>
                  <dd class="small">Nam eget dui. Etiam rhoncus. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo.</dd>

                    <dt> Cras id metus vitae?</dt>
                  <dd class="small">Vivamus dignissim urna id condimentum lacinia. Fusce tristique ultrices est, at semper turpis ullamcorper eu.</dd>
                </dl>
            </div>


            <div class="col-lg-6 col-md-6 col-sm-12">
                <h4 class="uppercase">newsletter</h4>

                <div class="row">
                    <div class="col-lg-8">
                        <input type="email" id="newsletter_email">
                    </div>
                    <div class="col-lg-4">
                        <button class="button button-big button-line-light" onclick="newsletter_send();">subscribe</button>
                    </div>
                </div>

                <p class="small">Pellentesque laoreet leo ut suscipit feugiat. Sed ultricies convallis nunc quis malesuada.</p>

            </div>

        </div>
    </div>
</footer>

<!-- SUBFOOTER -->
<div class="subfooter">
  <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <ul class="list-unstyled list-inline pull-right uppercase">
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Press Kit</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>
