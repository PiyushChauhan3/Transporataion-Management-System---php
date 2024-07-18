<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "transportation_ms";

try {
  $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Transportation MS</title>
  <link rel="icon" href="logo-icon.ico" type="image/x-icon">
  <meta name="description"
    content="Efficiently manage your transportation needs with our comprehensive Transportation Management System. From ticket booking to vehicle reservations and goods transportation, we have you covered.">
  <meta name="keywords"
    content="Transportation, Management, System, Ticket Booking, Vehicle Reservations, Goods Transportation">
  <meta name="author" content="Transportation MS">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />

  <style data-tag="reset-style-sheet">
    html {
      line-height: 1.15;
    }

    body {
      margin: 0;
    }

    * {
      box-sizing: border-box;
      border-width: 0;
      border-style: solid;
    }

    p,
    li,
    ul,
    pre,
    div,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    figure,
    blockquote,
    figcaption {
      margin: 0;
      padding: 0;
    }

    button {
      background-color: transparent;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
      font-family: inherit;
      font-size: 100%;
      line-height: 1.15;
      margin: 0;
    }

    button,
    select {
      text-transform: none;
    }

    button,
    [type="button"],
    [type="reset"],
    [type="submit"] {
      container-type: button;
    }

    button::-moz-focus-inner,
    [type="button"]::-moz-focus-inner,
    [type="reset"]::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
      border-style: none;
      padding: 0;
    }

    button:-moz-focus,
    [type="button"]:-moz-focus,
    [type="reset"]:-moz-focus,
    [type="submit"]:-moz-focus {
      outline: 1px dotted ButtonText;
    }

    a {
      color: inherit;
      text-decoration: inherit;
    }

    input {
      padding: 2px 4px;
    }

    img {
      display: block;
    }

    html {
      scroll-behavior: smooth;
    }
  </style>
  <style data-tag="default-style-sheet">
    html {
      font-family: Noto Sans;
      font-size: 16px;
    }

    body {
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      text-transform: none;
      letter-spacing: normal;
      line-height: 1.15;
      color: var(--dl-color-theme-neutral-dark);
      background-color: var(--dl-color-theme-neutral-light);

      fill: var(--dl-color-theme-neutral-dark);
    }
  </style>
  <link rel="stylesheet" href="https://unpkg.com/animate.css@4.1.1/animate.css" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    data-tag="font" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=STIX+Two+Text:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap"
    data-tag="font" />
  <link rel="stylesheet" href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css" />

</head>

<body>
  <link rel="stylesheet" href="style.css" />
  <div>
    <link href="index.css" rel="stylesheet" />

    <div class="home-container">
      <div class="navbar4-container">
        <?php include 'navbar4.php'; ?>
      </div>

      <div class="home-hero2">
        <div class="hero3-header9">
          <img alt="Transportation Management System" src="hero_img.png" class="thq-img-ratio-16-9" />
          <div class="hero3-content thq-section-padding">
            <div class="hero3-max-width thq-section-max-width thq-flex-row">
              <div class="hero3-column">
                <h1 class="thq-heading-1 hero3-text">
                  <span>Streamline Your Transportation Management</span>
                </h1>
              </div>
              <div class="hero3-column1">
                <p class="hero3-text1 thq-body-large">
                  <span>
                    Efficiently manage your transportation needs with our
                    comprehensive Transportation Management System. From
                    ticket booking to vehicle reservations and goods
                    transportation, we have you covered.
                  </span>
                </p>
                <button id="hero3-button thq-button-filled" class="hero3-button thq-button-filled">
                  <span class="thq-body-small"><span><a href="booking.php">Get Started</a></span></span>
                </button>
                <div class="hero3-actions"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="home-logos3"></div>
      <?php include 'Services.php'; ?>
      <div class="home-features5"></div>
      <div class="home-features6"></div>
      <div class="home-features7"></div>
      <div class="home-cta8">
        <div class="cta1-container thq-section-padding">
          <div class="cta1-max-width thq-section-max-width">
            <div class="cta1-content">
              <h2 class="cta1-heading1 thq-heading-2">
                <span>Efficient Transportation Management System</span>
              </h2>
              <p class="cta1-content1 thq-body-large">
                <span>
                  Streamline your ticket booking process with our
                  user-friendly platform.
                </span>
              </p>
              <div class="cta1-actions">
                <button id="thq-button-filled cta1-button" class="thq-button-filled cta1-button">
                  <span class="cta1-action1 thq-body-small">
                    <span><a href="booking.php">Book Tickets Now</a></span>
                  </span>
                </button>
                <button class="thq-button-outline cta1-button1">
                  <span class="cta1-action2 thq-body-small">
                    <span><a href="vehicle_booking.php">Explore Vehicle Booking Options</a></span>
                  </span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="home-faq9">
        <div class="faq1-faq7 thq-section-padding">
          <div class="faq1-max-width thq-section-max-width">
            <div class="thq-flex-column">
              <h2 class="thq-heading-2"><span>FAQs</span></h2>
              <p class="faq1-text1 thq-body-large">
                <span>
                  Your Questions Answered: Everything You Need to Know About
                  Our TMS
                </span>
              </p>
            </div>
            <div class="faq1-list thq-flex-column">
              <div class="faq1-list-item1">
                <p class="faq1-faq1-question thq-body-large">
                  <span>
                    1. What is a Transportation Management System (TMS)?
                  </span>
                </p>
                <span class="thq-body-small">
                  <span>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Suspendisse varius enim in eros elementum tristique. Duis
                    cursus, mi quis viverra ornare, eros dolor interdum nulla,
                    ut commodo diam libero vitae erat. Aenean faucibus nibh et
                    justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae
                    risus tristique posuere.
                  </span>
                </span>
              </div>
              <div class="faq1-list-item2">
                <p class="faq1-faq2-question thq-body-large">
                  <span>2. How can a TMS benefit my business?</span>
                </p>
                <span class="thq-body-small">
                  <span>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Suspendisse varius enim in eros elementum tristique. Duis
                    cursus, mi quis viverra ornare, eros dolor interdum nulla,
                    ut commodo diam libero vitae erat. Aenean faucibus nibh et
                    justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae
                    risus tristique posuere.
                  </span>
                </span>
              </div>
              <div class="faq1-list-item3">
                <p class="faq1-faq3-question thq-body-large">
                  <span>3. Is a TMS suitable for my business size?</span>
                </p>
                <span class="thq-body-small">
                  <span>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Suspendisse varius enim in eros elementum tristique. Duis
                    cursus, mi quis viverra ornare, eros dolor interdum nulla,
                    ut commodo diam libero vitae erat. Aenean faucibus nibh et
                    justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae
                    risus tristique posuere.
                  </span>
                </span>
              </div>
              <div class="faq1-list-item4">
                <p class="faq1-faq4-question thq-body-large">
                  <span>4. How does a TMS improve route planning?</span>
                </p>
                <span class="thq-body-small">
                  <span>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Suspendisse varius enim in eros elementum tristique. Duis
                    cursus, mi quis viverra ornare, eros dolor interdum nulla,
                    ut commodo diam libero vitae erat. Aenean faucibus nibh et
                    justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae
                    risus tristique posuere.
                  </span>
                </span>
              </div>
              <div class="faq1-list-item5">
                <p class="faq1-faq5-question thq-body-large">
                  <span>
                    5. Can a TMS integrate with my existing systems?
                  </span>
                </p>
                <span class="thq-body-small">
                  <span>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Suspendisse varius enim in eros elementum tristique. Duis
                    cursus, mi quis viverra ornare, eros dolor interdum nulla,
                    ut commodo diam libero vitae erat. Aenean faucibus nibh et
                    justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae
                    risus tristique posuere.
                  </span>
                </span>
              </div>
              <div class="faq1-container"></div>
            </div>
            <div class="thq-flex-column">
              <div class="faq1-content1">
                <h2 class="thq-heading-2">
                  <span>Still have a question?</span>
                </h2>
                <p class="faq1-text3 thq-body-large">

                </p>
              </div>
              <div class="faq1-container1">
                <button class="thq-button-outline faq1-button">
                  <span class="thq-body-small"><span><a href="contactus.php ">Contact</a></span></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="home-contact10" id="home-contact10">
        <div class="contact4-contact20 thq-section-padding">
          <div class="contact4-max-width thq-section-max-width">
            <div class="contact4-section-title">
              <span class="thq-body-small">
                <span>
                  We are available Monday to Friday from 9am to 5pm.
                </span>
              </span>
              <div class="contact4-content">
                <h2 class="thq-heading-2"><span>Contact Us</span></h2>
                <p class="contact4-text2 thq-body-large">
                  <span>
                    For any inquiries or assistance, please feel free to reach
                    out to us.
                  </span>
                </p>
              </div>
            </div>
            <div class="contact4-row">
              <div class="contact4-content1">
                <svg viewBox="0 0 1024 1024" class="thq-icon-medium">
                  <path
                    d="M854 342v-86l-342 214-342-214v86l342 212zM854 170q34 0 59 26t25 60v512q0 34-25 60t-59 26h-684q-34 0-59-26t-25-60v-512q0-34 25-60t59-26h684z">
                  </path>
                </svg>
                <div class="contact4-contact-info">
                  <div class="contact4-content2">
                    <h3 class="contact4-text3 thq-heading-3">Email</h3>
                    <p class="contact4-text4 thq-body-large">
                      <span>
                        Follow us on social media for updates and news:
                      </span>
                    </p>
                  </div>
                  <span class="contact4-email thq-body-small">
                    <span>info@transportationmanagement.com</span>
                  </span>
                </div>
              </div>
              <div class="contact4-content3">
                <svg viewBox="0 0 1024 1024" class="contact4-icon2 thq-icon-medium">
                  <path
                    d="M282 460q96 186 282 282l94-94q20-20 44-10 72 24 152 24 18 0 30 12t12 30v150q0 18-12 30t-30 12q-300 0-513-213t-213-513q0-18 12-30t30-12h150q18 0 30 12t12 30q0 80 24 152 8 26-10 44z">
                  </path>
                </svg>
                <div class="contact4-contact-info1">
                  <div class="contact4-content4">
                    <h3 class="contact4-text5 thq-heading-3">Phone</h3>
                    <p class="contact4-text6 thq-body-large">
                      <span>Facebook: @TransportationManagement</span>
                    </p>
                  </div>
                  <span class="contact4-phone thq-body-small">
                    <span>+123-456-7890</span>
                  </span>
                </div>
              </div>
              <div class="contact4-content5">
                <svg viewBox="0 0 1024 1024" class="contact4-icon4 thq-icon-medium">
                  <path
                    d="M512 0c-176.732 0-320 143.268-320 320 0 320 320 704 320 704s320-384 320-704c0-176.732-143.27-320-320-320zM512 512c-106.040 0-192-85.96-192-192s85.96-192 192-192 192 85.96 192 192-85.96 192-192 192z">
                  </path>
                </svg>
                <div class="contact4-contact-info2">
                  <div class="contact4-content6">
                    <h3 class="contact4-text7 thq-heading-3">Office</h3>
                    <p class="contact4-text8 thq-body-large">
                      <span>Twitter: @TransportManage</span>
                    </p>
                  </div>
                  <span class="contact4-address thq-body-small">
                    <span>Surat , Gujarat</span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="home-footer11">
        <div class="footer15-container thq-section-padding">
          <div class="footer15-max-width thq-section-max-width">
            <div class="footer15-content">
              <div class="footer15-actions">
                <div class="footer15-newsletter">
                  <span class="footer15-content1 thq-body-small">
                    <span>
                      Providing efficient and reliable transportation
                      solutions.
                    </span>
                  </span>
                  <div class="footer15-actions1">
                    <div class="footer15-form">
                      <div class="footer15-container1">
                        <input type="email" placeholder="Enter your email" class="footer15-text-input thq-input" />
                      </div>
                      <button class="footer15-button thq-button-outline">
                        <span class="thq-body-small">
                          <span><a href="contactus.php">Contact Us</a></span>
                        </span>
                      </button>
                    </div>
                    <span class="footer15-content2 thq-body-small">
                      <span>
                        Stay connected with us on social media for updates and
                        news.
                      </span>
                    </span>
                  </div>
                </div>
                <div class="footer15-container2">
                  <img src="public/logo-colored-jpg-thumb-200h.png" alt="image" class="footer15-image" />
                  <div class="footer15-social-links">
                    <svg viewBox="0 0 877.7142857142857 1024" class="footer15-icon thq-icon-small">
                      <path
                        d="M713.143 73.143c90.857 0 164.571 73.714 164.571 164.571v548.571c0 90.857-73.714 164.571-164.571 164.571h-107.429v-340h113.714l17.143-132.571h-130.857v-84.571c0-38.286 10.286-64 65.714-64l69.714-0.571v-118.286c-12-1.714-53.714-5.143-101.714-5.143-101.143 0-170.857 61.714-170.857 174.857v97.714h-114.286v132.571h114.286v340h-304c-90.857 0-164.571-73.714-164.571-164.571v-548.571c0-90.857 73.714-164.571 164.571-164.571h548.571z">
                      </path>
                    </svg>
                    <svg viewBox="0 0 877.7142857142857 1024" class="footer15-icon02 thq-icon-small">
                      <path
                        d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z">
                      </path>
                    </svg><svg viewBox="0 0 950.8571428571428 1024" class="footer15-icon04 thq-icon-small">
                      <path
                        d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z">
                      </path>
                    </svg>
                    <svg viewBox="0 0 877.7142857142857 1024" class="footer15-icon06 thq-icon-small">
                      <path
                        d="M135.429 808h132v-396.571h-132v396.571zM276 289.143c-0.571-38.857-28.571-68.571-73.714-68.571s-74.857 29.714-74.857 68.571c0 37.714 28.571 68.571 73.143 68.571h0.571c46.286 0 74.857-30.857 74.857-68.571zM610.286 808h132v-227.429c0-121.714-65.143-178.286-152-178.286-70.857 0-102.286 39.429-119.429 66.857h1.143v-57.714h-132s1.714 37.143 0 396.571v0h132v-221.714c0-11.429 0.571-23.429 4-32 9.714-23.429 31.429-48 68-48 47.429 0 66.286 36 66.286 89.714v212zM877.714 237.714v548.571c0 90.857-73.714 164.571-164.571 164.571h-548.571c-90.857 0-164.571-73.714-164.571-164.571v-548.571c0-90.857 73.714-164.571 164.571-164.571h548.571c90.857 0 164.571 73.714 164.571 164.571z">
                      </path>
                    </svg>
                    <svg viewBox="0 0 1024 1024" class="footer15-icon08 thq-icon-small">
                      <path
                        d="M406.286 644.571l276.571-142.857-276.571-144.571v287.429zM512 152c215.429 0 358.286 10.286 358.286 10.286 20 2.286 64 2.286 102.857 43.429 0 0 31.429 30.857 40.571 101.714 10.857 82.857 10.286 165.714 10.286 165.714v77.714s0.571 82.857-10.286 165.714c-9.143 70.286-40.571 101.714-40.571 101.714-38.857 40.571-82.857 40.571-102.857 42.857 0 0-142.857 10.857-358.286 10.857v0c-266.286-2.286-348-10.286-348-10.286-22.857-4-74.286-2.857-113.143-43.429 0 0-31.429-31.429-40.571-101.714-10.857-82.857-10.286-165.714-10.286-165.714v-77.714s-0.571-82.857 10.286-165.714c9.143-70.857 40.571-101.714 40.571-101.714 38.857-41.143 82.857-41.143 102.857-43.429 0 0 142.857-10.286 358.286-10.286v0z">
                      </path>
                    </svg>
                  </div>
                  <div class="footer15-media">
                    <div class="footer15-container3">
                      <div class="footer15-container4"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="footer15-credits">
              <div class="footer15-row"></div>
              <span class="footer15-content3 thq-body-small">
                <span>
                  © 2022 Transportation Management System. All Rights
                  Reserved.
                </span>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script defer="" src="https://unpkg.com/@teleporthq/teleport-custom-scripts"></script>


</body>

</html>
