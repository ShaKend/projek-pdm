<?php 
session_start();

//NAVBAR
include('./static/navbar.php'); 


?>

    <div class="container text-center mt-5">
      <!-- <div class="explanation text-start">
        BMI is a measurement of a person's leanness or corpulence based on their height and weight, and is intended to quantify tissue mass. It is widely used as a general indicator of whether a person has a healthy body weight for their height. Specifically, the value obtained from the calculation of BMI is used to categorize whether a person is underweight, normal weight, overweight, or obese depending on what range the value falls between. These ranges of BMI vary based on factors such as region and age, and are sometimes further divided into subcategories such as severely underweight or very severely obese. Being overweight or underweight can have significant health effects, so while BMI is an imperfect measure of healthy body weight, it is a useful indicator of whether any additional testing or action is required. Refer to the table below to see the different categories based on BMI that are used by the calculator.
      </div> -->
      <div class="row justify-content-start px-4">
        <!-- bagian kiri  -->
        <div class="col-5 bgblack rounded-4 py-4">
          <div class="row justify-content-start px-3">
            <h4 class="text-start">Kalkulator</h4>
            <hr />
          </div>

          <!-- kiri paling atas -->
          <form action="" method="post" name="forms" class="d-inline" autocomplete="off">
            <div class="row justify-content-start mt-2">
              <div class="col-5 text-end">
                <h5>Berat:</h5>
              </div>
  
              <div class="col-6">
                <div class="input-group mb-3">
                  <span class="input-group-text inputs"><i class="bi bi-pencil-fill"></i></span>
                  <input type="text" class="form-control inputs numbers" placeholder="kg" aria-label="Username" aria-describedby="basic-addon1" id="berat" name="berat" />
                </div>
              </div>
              <!-- end row seblah kiri bagian paling atas  -->
            </div>
  
            <!-- kiri tengah  -->
            <div class="row justify-content-start">
              <div class="col-5 text-end">
                <h5>Tinggi:</h5>
              </div>
  
              <div class="col-6">
                <div class="input-group mb-3">
                  <span class="input-group-text inputs"><i class="bi bi-pencil-fill"></i></span>
                  <input type="text" class="form-control inputs numbers" placeholder="cm" aria-label="Username" aria-describedby="basic-addon1" id="tinggi" name="tinggi" />
                </div>
              </div>
  
              <!-- end row kiri tengah  -->
            </div>
  
            <!-- kiri tengah  -->
            <div class="row justify-content-start">
              <div class="col-5 text-end">
                <h5>Usia:</h5>
              </div>
  
              <div class="col-6">
                <div class="input-group mb-3">
                  <span class="input-group-text inputs" id="basic-addon1"><i class="bi bi-pencil-fill"></i></span>
                  <input type="text" class="form-control inputs numbers" placeholder="tahun" aria-label="Username" aria-describedby="basic-addon1" id="usia" name="usia" />
                </div>
              </div>
  
              <!-- end row kiri tengah  -->
            </div>
  
            <!-- kiri bawah  -->
            <div class="row justify-content-start">
              <div class="col-5 text-end">
                <h5>Jenis Kelamin:</h5>
              </div>
  
              <div class="col-6 ps-0">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                  <label class="form-check-label" for="flexRadioDefault1"> Pria </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked />
                  <label class="form-check-label" for="flexRadioDefault2"> Wanita </label>
                </div>
              </div>
  
              <!-- end row kiri bawah  -->
            </div>
  
            <!-- kiri bawah  -->
            <div class="row justify-content-start mt-3">
              <div class="col-5">
                <!-- INI TINGGALING KOSONG AJA
                  BIAR MENJOROK KEDALAM -->
              </div>
  
              <div class="col-6 text-start">
                <button class="btn btn-light me-4 fw-medium">Reset</button>
                <button class="btn btn-light fw-medium" id="hitung" name="hitung">Hitung</button>
              </div>
  
              <!-- end row kiri bawah  -->
            </div>
          </form>

          <!-- end bagian kiri -->
        </div>

        <!-- bagian kanan -->
        <div class="col-6 text-start py-3">
          <h4 id="changed">Fungsi Kalkulator</h4>
          <hr />

          <div class="row justify-content-start">
            <p id="indexBMI">
              BMI atau Body Mass Index adalah metode sederhana untuk menilai apakah berat badan Anda sesuai dengan tinggi badan. Silakan masukkan berat badan Anda dalam kilogram dan tinggi badan Anda dalam centimeter pada formulir. Setelah
              itu, klik "Hitung" untuk mendapatkan nilai BMI Anda. Hasilnya akan memberi Anda gambaran umum tentang kategori berat badan Anda, apakah itu berat badan kurang, normal, kelebihan berat badan, atau obesitas.
            </p>
          </div>

          <div class="row justify-content-start">
            <p>Jika Anda memiliki pertanyaan atau kekhawatiran lebih lanjut tentang kesehatan Anda, kami sarankan untuk berkonsultasi dengan profesional kesehatan.</p>
          </div>
        </div>

        <!-- end dari row -->
      </div>
    </div>

<!-- footer  -->
<?php include('./static/footer.php'); ?>
