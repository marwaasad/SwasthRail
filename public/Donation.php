<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Donation</title>
    <link rel="stylesheet" href="donation.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Acme&amp;display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    <style>
      body {
        background: url("dbackground.jpg") no-repeat;
        background-size: cover;
        width: 100vw;
        height: 100vh;
      }
      h1 {
        width: 70%;
        position: absolute;
        top: 15%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 80px;
        text-transform: uppercase;
        font-family: "Acme", sans-serif;
        letter-spacing: 3px;
        color: whitesmoke;
        text-shadow: 7px 7px 10px darkblue;
      }
    </style>
  </head>

  <body>
    <h1>welcome to donation page</h1>
    <div class="slider owl-carousel">
      <div class="card">
        <div class="img">
          <img src="bloodd.gif" alt="Blood Donation" />
        </div>
        <div class="content">
          <div class="title">Blood</div>

          <p>
            Blood donation is the most important social service to humankind.by
            donating we can give others a life support. <br />
            <strong
              >"Sometimes money cannot save life but donated blood can".</strong
            >
          </p>
          <div class="btn">
            <button>
              <a
                href="Blood donation.html"
                style="color: white; text-decoration: none"
                >Read more</a
              >
            </button>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img">
          <img src="volunteers.jpg" alt="" />
        </div>
        <div class="content">
          <div class="title">Volunteer</div>

          <p>
            Change will not come if we wait for some other person, or if we wait
            for some other time. We are the ones we’ve been waiting for. We are
            the change that we seek.”
          </p>
          <div class="btn">
            <button>
              <a
                href=" volunteer.html"
                style="color: white; text-decoration: none"
                >Read more</a
              >
            </button>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img">
          <img src=" food.jpg" alt="" />
        </div>
        <div class="content">
          <div class="title">Food</div>

          <p>
            Some Waste food to show that they are rich few donate food,Because
            they have a rich heart Don't be rude, donate some food.
          </p>
          <div class="btn">
            <button>
              <a href=" food.html" style="color: white; text-decoration: none"
                >Read more</a
              >
            </button>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img">
          <img src=" support.jpg" alt="" />
        </div>
        <div class="content">
          <div class="title">Support</div>

          <p>
            I don’t think you ever stop giving. I really don’t. I think it’s an
            on-going process. And it’s not just about being able to write a
            check. It’s being able to touch somebody’s life.” “Fundraising is
            the gentle art of teaching the joy of giving.”
          </p>
          <div class="btn">
            <button>
              <a
                href=" support.html"
                style="color: white; text-decoration: none"
                >Read more</a
              >
            </button>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img">
          <img src=" funds.jpg" alt="" />
        </div>
        <div class="content">
          <div class="title">Fund</div>

          <p>
            Making a donation is the ultimate sign of solidarity.actions speak
            louder than the words Small Acts when multiplied by millions of
            people can transform the world.
          </p>
          <div class="btn">
            <button>
              <a href=" fund.html" style="color: white; text-decoration: none"
                >Read more</a
              >
            </button>
          </div>
        </div>
      </div>
    </div>

    <script>
      $(".slider").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000, //2000ms = 2s;
        autoplayHoverPause: true,
      });
    </script>
  </body>
</html>
