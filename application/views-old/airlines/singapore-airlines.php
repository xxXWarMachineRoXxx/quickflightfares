<?php
defined('BASEPATH') or exit('No direct script access allowed');
define('Airline', 'Singapore Airlines');


?>
<script>
   document.title = "Book Cheap Flight Ticket on <?= Airline ?> | Get Cheap Flight Deal <?= Airline ?> - Airfaremoss";
   document.getElementsByTagName('meta')["keywords"].content = "<?= Airline ?>, <?= Airline ?> , <?= Airline ?> Flights, <?= Airline ?> Reservations, <?= Airline ?> Booking, <?= Airline ?> Flight Deals, <?= Airline ?> Flight Tickets, <?= Airline ?> Flight Reservations, <?= Airline ?> Flight Booking, <?= Airline ?> Flight Deals, <?= Airline ?> Flight Tickets, <?= Airline ?> Flight Reservations, <?= Airline ?> Flight Booking, <?= Airline ?> Flight Deals, <?= Airline ?> Flight Tickets, <?= Airline ?> Flight Reservations, <?= Airline ?> Flight Booking, <?= Airline ?> Flight Deals, <?= Airline ?> Flight Tickets, <?= Airline ?> Flight Reservations, <?= Airline ?> Flight Booking, <?= Airline ?> Flight Deals, <?= Airline ?> Flight Tickets, <?= Airline ?> Flight Reservations, <?= Airline ?> Flight Booking, <?= Airline ?> Flight Deals, <?= Airline ?> Flight Tickets, <?= Airline ?> Flight Reservations, <?= Airline ?> Flight Booking"; ";       
   document.getElementsByTagName('meta')["description"].content = "Find cheap flight at Airfaremoss. Get the best fairs With US - call us @ <?= TFN ?>";   
</script>
<div id="header-wrapper" class="wrap-inpg py-4 py-md-5"
   style="background-image: url('frontend/images/singapore-airlines.jpg'); background-postion: 5px; background-size: cover;">
   <?php include 'includes/api-banner.php'; ?>
</div>
<div class="whysky mb-4 mb-md-5">
   <?php include 'includes/deals.php'; ?>
</div>
<div class="container mb-3 mb-md-4">
   <div class="flight-list">
      <div class="headingtxt mb-3 text-center">
         <h3 class="headh3 txt-ff"><span>
               <?= Airline ?>
            </span> Flight Deals <small>(Round Trip)</small> </h3>
         <span class="mxw lead text-center center-block txt-ff" data-aos="fade-down"></span>
      </div>
      <div class="row g-3">
         <div class="col-md-8 col-12 fdl">
            <div class="row g-3">
               <div class="col-md-6 col-12">
                  <div class="flight-status fs-indx bxd">
                     <a title="Flight From New York to Porto"
                        href="<?= base_url() ?>Result?depart=NYC&arrival=OPO&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                        <div class="row align-items-center no-gutters">
                           <div class="col-lg-8 col-8">
                              <div class="dd-box">
                                 NYC <i class="ti-exchange-vertical"></i> OPO<br>
                                 <span>New York to Porto</span>
                                 <hr>
                                 <span>
                                    <?= DR_DATE ?>
                                 </span>
                              </div>
                           </div>
                           <div class="col-lg-4 col-4">
                              <strong>$399<i class="ti-info-alt price-info"></i></strong>
                              <button class="bknw">Book Now</button>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-6 col-12">
                  <div class="flight-status fs-indx bxd">
                     <a title="Flight From Nassau to Tampa"
                        href="<?= base_url() ?>Result?depart=NAS&arrival=TPA&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                        <div class="row align-items-center no-gutters">
                           <div class="col-lg-8 col-8">
                              <div class="dd-box">
                                 NAS <i class="ti-exchange-vertical"></i> TPA<br>
                                 <span>Nassau to Tampa</span>
                                 <hr>
                                 <span>
                                    <?= DR_DATE ?>
                                 </span>
                              </div>
                           </div>
                           <div class="col-lg-4 col-4">
                              <strong>$359<i class="ti-info-alt price-info"></i></strong>
                              <button class="bknw">Book Now </button>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-6 col-12">
                  <div class="flight-status fs-indx bxd">
                     <a title="Flight From London to Dublin"
                        href="<?= base_url() ?>Result?depart=LON&arrival=DUB&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                        <div class="row align-items-center no-gutters">
                           <div class="col-lg-8 col-8">
                              <div class="dd-box">
                                 LON <i class="ti-exchange-vertical"></i> DUB<br>
                                 <span>London to Dublin</span>
                                 <hr>
                                 <span>
                                    <?= DR_DATE ?>
                                 </span>
                              </div>
                           </div>
                           <div class="col-lg-4 col-4">
                              <strong>$59<i class="ti-info-alt price-info"></i></strong>
                              <button class="bknw">Book Now </button>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-6 col-12">
                  <div class="flight-status fs-indx bxd">
                     <a title="Flight From Miami to Lisbon"
                        href="<?= base_url() ?>Result?depart=MIA&arrival=LIS&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                        <div class="row align-items-center no-gutters">
                           <div class="col-lg-8 col-8">
                              <div class="dd-box">
                                 MIA <i class="ti-exchange-vertical"></i> LIS<br>
                                 <span>Miami to Lisbon</span>
                                 <hr>
                                 <span>
                                    <?= DR_DATE ?>
                                 </span>
                              </div>
                           </div>
                           <div class="col-lg-4 col-4">
                              <strong>$549<i class="ti-info-alt price-info"></i></strong>
                              <button class="bknw">Book Now </button>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-6 col-12">
                  <div class="flight-status fs-indx bxd">
                     <a title="Flight From London to Tel Aviv Yafo"
                        href="<?= base_url() ?>Result?depart=LON&arrival=TLV&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                        <div class="row align-items-center no-gutters">
                           <div class="col-lg-8 col-8">
                              <div class="dd-box">
                                 LON <i class="ti-exchange-vertical"></i> TLV<br>
                                 <span>London to Tel Aviv Yafo</span>
                                 <hr>
                                 <span>
                                    <?= DR_DATE ?>
                                 </span>
                              </div>
                           </div>
                           <div class="col-lg-4 col-4">
                              <strong>$199<i class="ti-info-alt price-info"></i></strong>
                              <button class="bknw">Book Now </button>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-6 col-12">
                  <div class="flight-status fs-indx bxd">
                     <a title="Flight From Dublin to Tampa"
                        href="<?= base_url() ?>Result?depart=DUB&arrival=TPA&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                        <div class="row align-items-center no-gutters">
                           <div class="col-lg-8 col-8">
                              <div class="dd-box">
                                 DUB <i class="ti-exchange-vertical"></i> TPA<br>
                                 <span>Dublin to Tampa</span>
                                 <hr>
                                 <span>
                                    <?= DR_DATE ?>
                                 </span>
                              </div>
                           </div>
                           <div class="col-lg-4 col-4">
                              <strong>$449<i class="ti-info-alt price-info"></i></strong>
                              <button class="bknw">Book Now </button>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-12">
            <?php include 'sm-inc.php'; ?>
         </div>
      </div>
   </div>
</div>
<div class="about-spirit-airlines content-wrap mb-4 mb-md-4">
   <div class="container">
      <div class="headingtxt hdadjt">
         <div class="headh3 txt-ff">
            <?= Airline ?>
         </div>
      </div>
      <p>Enjoy cheap flight deals to your destination without compromising on services by booking tickets with Airfaremoss. We present numerous deals on various world’s renowned airlines. At Airfaremoss, we secure the best deals on Singapore Airlines.
      </p>
      <h3>About</h3>
      <p>Singapore Airlines is the flag carrier airline of Singapore. It is headquartered in Singapore Changi Airport and operates scheduled and charter flights to over 130 destinations in 60 countries in Asia, Europe, North America, Oceania, and South America. Singapore Airlines is a founding member of the Star Alliance.</p>
      <p>Singapore Airlines offers a variety of classes of service, including Economy Class, Premium Economy Class, Business Class, and Suites Class. The airline's Economy Class seats are spacious and comfortable, and the food is of high quality. Premium Economy Class offers more legroom and wider seats, as well as access to the airline's lounges. Business Class offers lie-flat seats, gourmet meals, and attentive service. Suites Class offers private suites with lie-flat beds, personal chefs, and butler service.</p>
      
      <p>Here are some additional facts about Singapore Airlines:</p>
      <ul>
  <li>Singapore Airlines' fleet consists of over 120 aircraft, including Airbus A350s, Boeing 777s, and Boeing 787s.</li>
  <li>Singapore Airlines' main hubs are Singapore Changi Airport and Seoul Incheon International Airport.</li>
  <li>Singapore Airlines' major destinations in the United States include New York, Los Angeles, San Francisco, Chicago, and Washington, D.C.</li>
  <li>Singapore Airlines is a founding member of the Star Alliance, which also includes Lufthansa, United Airlines, Air Canada, and Swiss International Air Lines.</li>
</ul>
<h3>Book your Singapore Airlines flight to the United States with Airfaremoss</h3>
<p>Airfaremoss is a travel agency that specializes in cheap and easy call only booking. We can help you book your Singapore Airlines flight to the United States at the best possible price. We also offer a variety of other travel services, such as hotel reservations, car rentals, and travel insurance.
To book your Singapore Airlines flight to the United States with Airfaremoss, simply call us at 1-888-811-2217. We'll be happy to help you find the perfect flight for your needs.
</p>
      <div class="all-content">
         <h3>Booking Method</h3>
         <p>To book a low-cost flight, passengers must go to the Airfaremoss website. Online flight booking saves money
            since it may be done without paying a service fee. Nobody needs to travel to the airport to reserve a seat.
            The most convenient option is to book your <strong>affordable flight tickets online</strong>, but you may
            also arrange your trip by phoning our reservation number. CFly to any corner of the world including New York, San Francisco, and Chicago. Connect to Airfaremoss to book flights to the United States or any other Air France International flight routes. You can connect us at +1 888-811-2217.

         </p>
         <h3>What distinguishes Airfaremoss as a rare star?</h3>
         <p>Airfaremoss may provide you with happiness and smiles at the lowest cost. There are several inexpensive
            airlines offers available, and you do not need to look hard for them. Booking in advance will help you save
            money on plane tickets, as last-minute purchases may incur expensive surcharges. If you are planning a
            family vacation, be sure to let the travel agent know in advance so they can provide you with better
            bargains that will give you a lovely trip with cost-saving values. Be with us and enjoy a hassle-free
            <strong>affordable flight journey</strong>.</p>
      </div>
      <a class="readmore stmpbtn" href="#">Read more...</a>
   </div>
</div>
<?php include "popup-ad.php"?>
<!--end here us-airlines-->

<style>
   .tfn-bottom-section {
      display: block !important;
   }

   body {
      margin-bottom: 45.5px
   }

   a {
      color: #343a40;
   }

   .modal {
      top: 0 !important;
   }

   .rmpc {
      background: #bd98ff;
      padding: 15px;
   }

   .txt01 {
      display: none;
   }
</style>



<script>
   $('.airline-name').text('<?= Airline ?>');
   $('.txt02').text('Flight Deals');

</script>