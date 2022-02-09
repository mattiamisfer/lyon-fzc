@extends('layouts.app')

@section('content')
<div id="videoDiv2">
    <video id="video2" preload="" autoplay="" muted="" playsinline="" loop="">

    <source src="{{ asset('assets/corporate-1.mp4')}}" type="video/mp4">
    </video>
        <div id="videoMessage2" class="styling">
            <h1>Need a website?</h1>
            <h2>We're available for</h2>
            <h3>HTML projects</h3>
            <p class="videoClick">
                <a href="portfolio.php">Check our rates</a>
            </p>
        </div>
    </div>
    <!-- BLOCKS WRAP -->
    <div class="tagline" style="display:;">
      <div class="container">
        <div class="row">
          <span style="color: RED;">Paint Protection Film (PPF)</span> and <span style="color: RED;">Ceramic Coating</span> has gained popularity over recent years with people just like you, wanting to conserve the brilliance of their shiny new vehicle. <br>But which option is best for you?


          </div>
          </div>
          </div>

     <!--- <div class="row">
        <div class="col-md-4 col-sm-4" style="overflow:hidden; margin-top: 40px; margin-bottom: 40px;">
          <div class="block-content">
          <span>
          INNOVATION
           </span>
          </div>
        </div>
        <div class="col-md-4 col-sm-4" style="overflow:hidden; margin-top: 40px; margin-bottom: 40px;">
          <div class="block-content">
          <span>
          EXCELLENCE
            </span>
          </div>
        </div>
        <div class="col-md-4 col-sm-4" style="overflow:hidden; margin-top: 40px; margin-bottom: 40px;">
          <div class="block-content">
          <span>
          SOCIAL RESPONSIBILITY
             </span>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <!-- FEATURED PRODUCTS -->



    <!-- FEATURED PRODUCTS -->

    <div class="featured-products" style="display:;">
      <div class="container">
        <div class="row">
          <h5 class="heading"><span>Paint Protection Film</span></h5>

          <div id="isotope" class="isotope">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
              <div class="product-item" >
                <div class="item-thumb relative"> <img src="{{ asset('assets/images/washthumb.jpg')}}" class="img-responsive" alt=""/> <a href="https://bluefloras.com/word-demo/" target="_blank">
                  <div class="overlay-rmore fa fa-link quickview" data-toggle="modal"></div>
                  </a>

                </div>
              </div>
            </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >

                 <h2> More than protection.</h2>
                 <br>
    <p>Our flagship product, DYNOshield is a premium paint protection film offering top-notch performance, durability, and reliability. </p>

    <p>DYNOshield’s nano-glass top coat is bonded to the film at a molecular level during the manufacturing process, virtually eliminating the need for waxes or after-market top coatings. Hydrophobic and highly damage-resistant, DYNOshield also boasts super self-healing properties and puncture resistance, effectively shielding against surface-level nicks and scratches. </p>
     <div class="viewall">
                        <!---<a href="<img src="images/products/dynomageblue.jpg" class="img-responsive" alt=""/> <a href="https://bluefloras.com/word-demo/index.php?route=product/category&path=305" target="_blank">Browse all Products</a>--->
                        </div>
            </div>
            <div class="pagebrk"></div>
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
            <!--- <h2 style="text-align:center;margin-bottom: 30px;"> Features</h2>--->
             <div class="col-md-3 col-sm-3 " style="text-align:center;" >
           <img src="{{ asset('assets/images/icons/gloss.png')}}" alt="" class="img-responsive" style="width: 40%; height: auto;margin:0px auto 0px auto;"/>
          <span class="steak">Ultra-Gloss Finish
    </span>
          <p class="text-justify" style="color:#666666;">Enhance the depth of your color and add extra gloss to your car with the DYNOshield’s ultra-gloss finish.</p>
          </div>

           <div class="col-md-3 col-sm-3 " style="text-align:center;" >
           <img src="{{ asset('assets/images/icons/hydrophobic1.png')}}" alt="" class="img-responsive" style="width: 40%; height: auto;margin:0px auto 0px auto;"/>
          <span class="steak">Hydrophobic</span>
          <p class="text-justify" style="color:#666666;">DYNOshield’s top coating allows water, dust, debris, and other elements less likely to stick on your car’s surface, making it easier to clean.</p>
          </div>

           <div class="col-md-3 col-sm-3 " style="text-align:center;" >
           <img src="{{ asset('assets/images/icons/healing.png')}}" alt="" class="img-responsive" style="width: 40%; height: auto;margin:0px auto 0px auto;"/>
          <span class="steak">Self-Healing</span>
          <p class="text-justify" style="color:#666666;">DYNOshield boasts super self-healing properties, effectively shielding against swirl marks, surface-level nicks and scratches.
    </p>
          </div>

           <div class="col-md-3 col-sm-3 " style="text-align:center;" >
           <img src="{{ asset('assets/images/icons/stain.png')}}" alt="" class="img-responsive" style="width: 40%; height: auto;margin:0px auto 0px auto;"/>
          <span class="steak">Stain & Damage Resistant
    </span>
          <p class="text-justify" style="color:#666666;">Worried about stains? Our film protects your car against even the toughest stains means fewer worries about any discoloration.

    </p>

          </div>

             </div>

            </div>

            </div>

              </div>
            </div>






          </div>
        </div>
      </div>
    </div>
    <!-- POLICY -->
    <div class="policy-item parallax-bg1">

      <div class="container">
        <div class="row">
        <div class="col-md-12 col-sm-12" >
        <h2 style="color:#fff; text-align:center;">IGL Coatings</h2>
         <div class="pi-wrap" style="text-align:center;">
        <!--- <div class="col-md-5 col-sm-5 " >

             <img src="images/igl.png" alt="" class="img-responsive"/>

              </div>--->
         <div class="col-md-10 col-sm-12 col-md-offset-1" >
          <div class="col-md-3 col-sm-3 " style="text-align:center;" >
           <img src="{{ asset('assets/images/icons/solid.png')}}" alt="" class="img-responsive" style="width: 40%; height: auto;margin:0px auto 0px auto;"/>
          <span class="igl">HIGH SOLIDS</span>
          <p class="text-justify" style="color:#FFF;">100% active material content and 0% solvent creating a thick film build</p>
          </div>
          <div class="col-md-3 col-sm-34 " >
          <img src="{{ asset('assets/images/icons/10h.png')}}" alt="" class="img-responsive" style="width: 40%; height: auto;margin:0px auto 0px auto;"/>
          <span class="igl">EXTREME HARDNESS</span>
          <p class="text-justify" style="color:#FFF;">100% active material content and 0% solvent creating a thick film build</p>
          </div>
          <div class="col-md-3 col-sm-3 " >
          <img src="{{ asset('assets/images/icons/glass.png')}}" alt="" class="img-responsive" style="width: 40%; height: auto;margin:0px auto 0px auto;"/>
          <span class="igl">GLASS LIKE FINISH</span>
          <p class="text-justify" style="color:#FFF;">Formulated with a high solid formulation of the purest raw material creating a layer of glass-like coating on the surface resulting in a stunning gloss finish</p>
          </div>
          <div class="col-md-3 col-sm-3 " >
          <img src="{{ asset('assets/images/icons/clean.png')}}" alt="" class="img-responsive" style="width: 40%; height: auto;margin:0px auto 0px auto;"/>
          <span class="igl">SELF-CLEANING</span>
          <p class="text-justify" style="color:#FFF;">100% active material content and 0% solvent creating a thick film build</p>
          </div>
                      <div class="clearfix" style="padding: 30px;border-bottom: 2px solid #bc1515;"></div>

          <div class="col-md-3 col-sm-3 " >
          <img src="{{ asset('assets/images/icons/surfaceclean.png')}}" alt="" class="img-responsive" style="width: 40%; height: auto;margin:0px auto 0px auto;"/>
          <span class="igl">SILKY SMOOTH SURFACE</span>
          <p class="text-justify" style="color:#FFF;">100% active material content and 0% solvent creating a thick film build</p>
          </div>
          <div class="col-md-3 col-sm-3 " >
          <img src="{{ asset('assets/images/icons/droprestnt.png')}}" alt="" class="img-responsive" style="width: 40%; height: auto;margin:0px auto 0px auto;"/>
          <span class="igl">WATERSPOT RESISTANCE</span>
          <p class="text-justify" style="color:#FFF;">100% active material content and 0% solvent creating a thick film build</p>
          </div>
          <div class="col-md-3 col-sm-3 " >
          <img src="{{ asset('assets/images/icons/hydrophobic.png')}}" alt="" class="img-responsive" style="width: 40%; height: auto;margin:0px auto 0px auto;"/>
          <span class="igl">SUPERB HYDROPHOBIC QUALITY</span>
          <p class="text-justify" style="color:#FFF;">100% active material content and 0% solvent creating a thick film build</p>
          </div>
          <div class="col-md-3 col-sm-3 " >
          <img src="{{ asset('assets/images/icons/safe.png')}}" alt="" class="img-responsive" style="width: 40%; height: auto;margin:0px auto 0px auto;"/>
          <span class="igl">SAFER FOR USER & ENVIRONMENT</span>
          <p class="text-justify" style="color:#FFF;">There is no foul odour as its carrier is a harmless mixture of non-carcinogenic low volatile solvent synthesized using nanotechnology.
    </p>
          </div>


              </div>


            <!--<img src="images/directors.jpg" alt="" class="img-responsive directors"/>-->
             <!--- --->



            </div>
          </div>

        </div>
        <!---<div class="viewall">
                        <a href="<img src="images/products/dynomageblue.jpg" class="img-responsive" alt=""/> <a href="https://bluefloras.com/word-demo/index.php?route=product/category&path=302" target="_blank">Browse all Products</a>
                        </div>--->
            </div>
      </div>
    </div>
     <div class="block-main container">
    <div class="row">
        <div class="col-md-6 col-sm-6" style="overflow:hidden; margin-top: 10px; margin-bottom: 40px;">
        <div class="intro">
         <video preload="" autoplay="" muted="" playsinline="" loop="" controls="" style="max-width: 100%; height: auto; margin-top: 10px; " width="720">

                                          <source src="{{ asset('assets/images/promo.mp4')}}" type="video/mp4">


                                            </video>
                                            </div>
                                            <div class="features">
        <div class="salientfeatrs">
          <span>
          INNOVATION
           </span>
          </div>
        <div class="salientfeatrs">
          <span>
          EXCELLENCE
           </span>
          </div>
          <div class="salientfeatrs">
          <span>
          SOCIAL RESPONSIBILITY
            </span>
          </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-" style="overflow:hidden; margin-top: 40px; margin-bottom: 40px;">
        <div class="col-md-12 col-sm-12" style="overflow:hidden; margin-top: 10px; margin-bottom: 10px;font-size: 16px; line-height: 28px;text-align:justify">

        <p>Car Zone is a well-recognized and one of the BEST industry’s leading Product Distributor and Car Care company in the UAE. We’ve a very diverse business model. We not only offer variety of vehicle care services but also deals in huge range of Car Protection, Window Tint Film Car Care Products and Tools. That makes “CAR ZONE” a definite one stop shop.</p>
        <p>Our vision is to consistently provide QUALITY SERVICE and WORKMANSHIP to our valuable clients. We offer our retail and corporate accounts with friendly, professional and specialized services to their vehicle’s needs. We aim in a responsible business growth that is back boned by creating a healthy competition in and out of the company. Our mission is to spread across the UAE and go world-wide with a sustained growth level.</p>


        </div>

        </div>
        </div>
        </div>
                <div class="home-blog">
                <!---    <div class="container">--->

                        <div class="row">
                         <h5 class="heading"><span>Our Products</span></h5>
                            <div class="col-md-4 col-sm-12" style="margin:0px !important; padding:0px !important; background-color:#333;height: 385px;border-right: 5px solid #FFF;">
                               <img src="{{ asset('assets/images/iglcoatings.jpg')}}" class="img-responsive" alt=""/> <a href="https://bluefloras.com/word-demo/" target="_blank">


                            </div>

                            <div class="col-md-4 col-sm-12" style="margin:0px !important; padding:0px !important; background-color:#333;height: 385px;border-right: 5px solid #FFF;border-left: 5px solid #FFF;">
                                <img src="{{ asset('assets/images/stekuae.jpg')}}" class="img-responsive" alt=""/> <a href="https://bluefloras.com/word-demo/" target="_blank">

                            </div>
                             <div class="col-md-4 col-sm-12" style="margin:0px !important; padding:0px !important; background-color:#333;height: 385px;border-left: 5px solid #FFF;">
                                <img src="{{ asset('assets/images/ourservicekit.jpg')}}" class="img-responsive" alt=""/> <a href="https://bluefloras.com/word-demo/" target="_blank">

                            </div>


                        </div>
                        <div class="viewall">
                        <a href="<img src="images/products/dynomageblue.jpg" class="img-responsive" alt=""/> <a href="https://bluefloras.com/word-demo/" target="_blank">Browse all Products</a>
                        </div>
                 <!---   </div>  --------->
                </div>

                <!-- NEW ARRIVALS -->


                <div class="space30 clearfix"></div>

                <!-- TESTIMONIAL -->
                <div class="testimonial parallax-bg2">
                    <div class="container">
                    <h5 class="heading space40"><span>What Clients Says</span></h5>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="quote-carousel">
                                    <div>

                                        <div class="quote-info">

                                            <p class="bubble">"They provide excellent care for my cars. Thoroughly professional with immense expertise."</p><br>
                                            <h4>Elena Gomes</h4>
                                            <cite>July 28 - 2018</cite>
                                        </div>
                                    </div>
                                    <div>

                                        <div class="quote-info">

                                            <p class="bubble">"Awesome service. Very amiable. Can vouch to anybody with 100% assurance"</p><br>
                                            <h4>Ali Azhar</h4>
                                            <cite>July 28 - 2018</cite>
                                        </div>
                                    </div>
                                    <div>

                                        <div class="quote-info">

                                            <p class="bubble">"Very much impressed with their service. Prompt, precise and professional. "</p><br>
                                            <h4>Rizvi Shah</h4>
                                            <cite>July 28 - 2018</cite>
                                        </div>
                                    </div>
                                    <div>

                                        <div class="quote-info">

                                            <p class="bubble">"I got an excellent service for my car, from cooperation i was very pleased, everything was done at the highest level.Boldly I recommend to all this company."</p><br>
                                            <h4>Rahman Basith</h4>
                                            <cite>July 28 - 2018</cite>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
