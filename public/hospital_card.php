<!-- <?php include 'db.php' ?> -->
<!-- <?php include 'connect.php' ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="hospital_card.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
  <title>Hospital Lists</title>
</head>

<body>
  <div class="mainDiv">
    <h1>
      <img src="hospital.png" height="100rem" alt="" /> Hospital Cards
    </h1>
    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1440 320">
      <path fill="#34495e" fill-opacity="1" d="M0,96L60,112C120,128,240,160,360,149.3C480,139,600,85,720,85.3C840,85,960,139,1080,138.7C1200,139,1320,85,1380,58.7L1440,32L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
    </svg>
  </div>
  <div class="cards">
       <div  class="card">
            <h2 class="card-title">Apollo spectra Hospital</h2>
            <img src="Apollo.jpg" alt="">
            <div class="card-desc">
                <div class="icons">
                    <span class="icon address-btn"><em class="fas fa-address-card"></em></span>
                    <span class="icon phone-btn"><em class="fas fa-phone"></em></span>
                    <span class="icon link-btn"><em class="fas fa-link"></em></span>
                </div>
                <p class="address">Gwalior, Vikas Nagar 18, Kila Gate Road, Vikas
                    Nagar, Near Sai Baba Mandir, Gwalior, Madhya
                    Pradesh 474002</p>
                    <hr>
                <p class="phone">0751-245 4600</p>
                <hr>
                <p class="link"><a href="https://www.apollospectra.com/our-hospitals/gwalior/vikas-nagar/best-hospital-in-vikas-nagar-gwalior/">link</a></p>
            
            </div>
        </div>
        <div  class="card">
            <h2 class="card-title">BIMR Hospital</h2>
            <img src="ho-2.jpg" alt="">
            <div class="card-desc">
                <div class="icons">
                    <span class="icon address-btn"><em class="fas fa-address-card"></em></span>
                    <span class="icon phone-btn"><em class="fas fa-phone"></em></span>
                    <span class="icon link-btn"><em class="fas fa-link"></em></span>

                </div>
                <p class="address">BIMR Hospitals Surya Mandir Road, Residency,
                    Gwalior - 474005</p>
                <hr><p class="phone">0751-2405 617</p>
            <hr>    <p class="link"><a href="https://www.bimrhospital.com/">link</a></p>
            
            </div>
        </div>
        <div  class="card">
            <h2 class="card-title">Agrawal Hospital </h2>
            <img src="h4.jpg" alt="">
            <div class="card-desc">
                <div class="icons">
                    <span class="icon address-btn"><em class="fas fa-address-card"></em></span>
                    <span class="icon phone-btn"><em class="fas fa-phone"></em></span>
                    <span class="icon link-btn"><em class="fas fa-link"></em></span>

                </div>
                <p class="address">H-204 Madhav Nagar, Gwalior, Madhya Pradesh, 474002</p>
                  <hr>
                <p class="phone">2423 700</p>
             <hr>
                <p class="link"><a href="http://www.ahrihospital.com/">link</a></p>
            
            </div>
        </div>
        <div  class="card">
            <h2 class="card-title">Arora Hospital</h2>
            <img src="ho-4.jpg" alt="">
            <div class="card-desc">
                <div class="icons">
                    <span class="icon address-btn"><em class="fas fa-address-card"></em></span>
                    <span class="icon phone-btn"><em class="fas fa-phone"></em></span>
                    <span class="icon link-btn"><em class="fas fa-link"></em></span>
                </div>
                <p class="address">20, Lalitpur Colony, Lashkar, Madhya Pradesh, 474009</p>
                <hr><p class="phone">2372 435</p>
             <hr>
                <p class="link"><a href="https://www.facebook.com/200201544131025/posts/arora-hospitallalitpur-colonygwalior/290866688397843/">link</a></p>
            
            </div>
        </div>
        <div  class="card">
            <h2 class="card-title">Chandak Hospital </h2>
            <img src="h5.jpg" alt="">
            <div class="card-desc">
                <div class="icons">
                    <span class="icon address-btn"><em class="fas fa-address-card"></em></span>
                    <span class="icon phone-btn"><em class="fas fa-phone"></em></span>
                    <span class="icon link-btn"><em class="fas fa-link"></em></span>

                </div>
                <p class="address">No: 14, Hospital Road, Gwalior, Madhya
                    Pradesh, 474009</p>
                    <hr>
                <p class="phone">2324 131</p>
                <hr>
                <p class="link"><a href="https://www.facebook.com/pages/category/Hospital/Chandak-Hospital-and-Research-Institute-252287644956670/">link</a></p>
         
            </div>
      
     
 

  </div>

  </div>
  <div class="form-container">
    <div class="form-container-back">
      <form action="/RGPV-Hackathon/hospital_card_form.php" method="post" enctype="multipart/form-data">
        <div class="form">
          <div class="title">Add A Hospital</div>
          <div class="subtitle">Enter details of hospital</div>

          <div class="input-container ic1">
            <input id="hospital_name" class="input" type="text" placeholder=" " name="hospital_name" required />
            <div class="cut"></div>
            <label for="hospital_name" class="placeholder">Hospital name</label>
          </div>

          <div class="input-container ic2">
            <textarea name="details" required class="input" placeholder=" " id="details" cols="30" rows="10" style="margin: 0px; height: 50px" ;></textarea>
            <div class="cut"></div>
            <label for="details" class="placeholder">Address</label>
          </div>

          <div class="input-container ic2">
            <input id="contact" class="input" name="contact" type="tel" placeholder=" " />
            <div class="cut cut-short"></div>
            <label for="contact" class="placeholder">Contact</>
          </div>

          <div class="input-container ic2">
            <input id="link" class="input" name="link" type="text" placeholder=" " />
            <div class="cut cut-short"></div>
            <label for="Link" class="placeholder">Link</>
          </div>

          <div class="input-container ic2">
            <input id="photo" class="input" type="file" placeholder=" " name="photo" required />
            <div class="cut cut-short"></div>
            <label for="photo" class="placeholder">Choose image</label>
          </div>


          <input type="submit" name="submit" value="submit" class="submit">
        </div>
      </form>
    </div>
  </div>
</body>

</html>
