<?php require("header.php") ?>

<!-- mid nav end -->
<!-- Main Nav start -->
<?php require("navbar.php") ?>

<!-- Main Nav end -->
<main>



  <?php
  $exam_test = test_exam();

  foreach ($exam_test as $test_exam) {
    var_dump($test_exam);
  };






  ?>
  <!-- Slider section start -->
  <section class="container-fluid  d-flex justify-content-center  " style="background-color:#161E31">
    <div class="row w-100 my-2">
      <div class="col-md-12 col-xl-7 col-12 mb-2">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

          <div class="carousel-inner ">
            <div class="carousel-item active ">
              <a href="https://bdjobwar.com/batch-details/13">
                <img class="d-block rounded slider-img" style="object-fit:stretch;" height="400px" width="100%" src="https://bdjobwar.com/storage/sliders/August2022/QjkmQQxwDDnepeI8NAUH.jpg" alt="First slide">
              </a>
            </div>
            <div class="carousel-item ">
              <a href="https://bdjobwar.com/batch-details/1">
                <img class="d-block rounded slider-img" style="object-fit:stretch;" height="400px" width="100%" src="https://bdjobwar.com/storage/sliders/July2022/DGGJfOWuXYaCgt9xVFX7.png" alt="First slide">
              </a>
            </div>
            <div class="carousel-item ">
              <a href="https://bdjobwar.com/batch-details/12">
                <img class="d-block rounded slider-img" style="object-fit:stretch;" height="400px" width="100%" src="https://bdjobwar.com/storage/sliders/July2022/A1dhsCu5YGkUUYGJw3vT.png" alt="First slide">
              </a>
            </div>
          </div>
          <button class="carousel-control-prev  " type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class=" bg-dark rounded-circle d-flex justify-content-center align-items-center " style="height:40px;width:40px" aria-hidden="true"><i class="fa  fa-arrow-left"></i></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class=" bg-dark rounded-circle d-flex justify-content-center align-items-center " style="height:40px;width:40px" aria-hidden="true"><i class="fa  fa-arrow-right"></i></span>

            <span class="visually-hidden">Next</span>
          </button>
        </div>

      </div>
      <div class="col-md-12 col-xl-5 col-12">
        <div class="card shadow video-card" style="background-color: none;">
          <div class="card-body">
            <h4 style="font-weight: 600;">
              Videos
            </h4>
            <ul class="videos m-0 p-0">
              <li class="rounded">
                <a class="my-video-links" style="text-decoration: none;color:inherit" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=pyeHdFfX_Ls">
                  <span class=""><i class="fa fa-play"></i></span> কিভাবে রেজিস্ট্রেশন করবেন?
                </a>
              </li>
              <li class="rounded">
                <a class="my-video-links" style="text-decoration: none;color:inherit" data-autoplay="true" data-vbtype="video" href="https://youtu.be/efeDUgksP34">
                  <span class=""><i class="fa fa-play"></i></span> কিভাবে লগইন করবেন?
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- Slider section end -->
  <!-- Live section start -->
  <section class="live-section" id="live-section" style="background-image: url(https://bdjobwar.com/frontEnd-assets/img/bg.png)">
    <div class="live-section-title" style="background-image: url(https://bdjobwar.com/frontEnd-assets/img/Blog.png)">
      <h1 class="text-uppercase" style="font-weight:500 ; font-size:25px">লাইভ সেকশন</h1>
    </div>
    <div class="container">
      <div class="row " id="live-section-free">
        <div class="col-md-6">
          <h6 class="mt-2 fw-bold live-exam-heading mb-4">
            <i class="far fa-file-alt fs-3 text-muted"></i> <span class="text-danger"> লাইভ পরীক্ষা চলছে <sup>Free</sup></span>
          </h6>
        </div>
        <div class="col-md-6">
          <h6 class="mt-2 fw-bold live-exam-heading mb-4">
            <i class="fas fa-file-alt fs-3 text-muted"></i> <span class="text-success">সম্প্রতি বন্ধ <sup>Free</sup></span>
          </h6>
         <?php foreach ($exam_test as $test_exam) {?>
          <div class="card border border-success rounded shadow m-2">

            <div class="card-body">
              <div class=" d-flex justify-content-between gap-2 flex-wrap mb-3 text-muted" style="font-size: 12px ;font-weight:700">
                <span>শুরু : <?php echo $test_exam->exam_star_date ?> </span> <span> শেষ : <?php echo $test_exam->exam_compleate_date ?></span>
              </div>
              <a href="https://bdjobwar.com/exam/EXM2022338798" style="text-decoration:none">
                <h6 class="text-success" style="font-weight: 700;"><?php echo $test_exam->exam_title ?></h6>
              </a>
              <div style="height:2px;width:100px" class="bg-danger"></div>
              <p class="text-secondary mt-2" style="font-size: 14px;">
                <?php echo $test_exam->exam_subject ?>
              </p>
              <div class=" d-flex flex-sm-column flex-md-row gap-2  flex-wrap justify-content-between align-items-center mt-4">

                <a class="btn btn-success btn-sm " href="" style="font-size: 13px ;">টেস্ট দিন </a>
                <div class="d-flex  flex-column gap-1 text-secondary" style="font-size: 14px;">
                  <span>
                    <i class="fa fa-coins"></i> : <?php echo $test_exam->exam_paid_or_free ?>
                  </span>
                  <span>
                    <i class="fa fa-clock"></i> :

                    <?php echo $test_exam->exam_time ?>
                  </span>
                  <span>
                    <i class="fa fa-users"></i> :

                    <?php echo $test_exam->exam_member ?>
                  </span>

                </div>
              </div>

            </div>
          </div>
          <?php } ?>
         
          </div>
      <div class="row" id="live-section-paid">
        <div class="col-md-6">
          <h6 class="mt-2 fw-bold live-exam-heading mb-4">
            <i class="far fa-file-alt fs-3 text-muted"></i> <span class="text-danger"> লাইভ পরীক্ষা চলছে <sup>Paid</sup></span>
          </h6>
          <div class="card border border-success rounded shadow m-2">

            <div class="card-body">
              <div class=" d-flex justify-content-between gap-2 flex-wrap mb-3 text-muted" style="font-size: 12px ;font-weight:700">
                <span>শুরু : ২০ সেপ্টেম্বর, ২০২২ সন্ধ্যা ০৭:০০ </span> <span> শেষ : ২১ সেপ্টেম্বর, ২০২২ রাত ১১:৫৯</span>
              </div>
              <a href="https://bdjobwar.com/exam/EXM2022673913" style="text-decoration:none">
                <h6 class="text-success" style="font-weight: 700;">জব সলিউশন ব্যাচ-০১</h6>
              </a>
              <div style="height:2px;width:100px" class="bg-danger"></div>
              <p class="text-secondary mt-2" style="font-size: 14px;">
                পরীক্ষা- ১৮
              </p>
              <div class=" d-flex flex-sm-column flex-md-row gap-2  flex-wrap justify-content-between align-items-center mt-4">

                <a class="btn btn-success btn-sm " href="https://bdjobwar.com/exam/EXM2022673913" style="font-size: 13px ;">টেস্ট দিন </a>
                <div class="d-flex  flex-column gap-1 text-secondary" style="font-size: 14px;">
                  <span>
                    <i class="fa fa-coins"></i> : পেইড
                  </span>
                  <span>
                    <i class="fa fa-clock"></i> :

                    40 মিনিট
                  </span>
                  <span>
                    <i class="fa fa-users"></i> :

                    ৫ জন
                  </span>

                </div>
              </div>




            </div>
          </div>
          <div class="card border border-success rounded shadow m-2">

            <div class="card-body">
              <div class=" d-flex justify-content-between gap-2 flex-wrap mb-3 text-muted" style="font-size: 12px ;font-weight:700">
                <span>শুরু : ২০ সেপ্টেম্বর, ২০২২ সন্ধ্যা ০৭:০০ </span> <span> শেষ : ২১ সেপ্টেম্বর, ২০২২ রাত ১১:৫৯</span>
              </div>
              <a href="https://bdjobwar.com/exam/EXM2022557219" style="text-decoration:none">
                <h6 class="text-success" style="font-weight: 700;">প্রাথমিক সহকারি শিক্ষক নিয়োগ প্রস্তুতি (এডভান্স ব্যাচ-০২)</h6>
              </a>
              <div style="height:2px;width:100px" class="bg-danger"></div>
              <p class="text-secondary mt-2" style="font-size: 14px;">
                পরীক্ষা-০৩
              </p>
              <div class=" d-flex flex-sm-column flex-md-row gap-2  flex-wrap justify-content-between align-items-center mt-4">

                <a class="btn btn-success btn-sm " href="https://bdjobwar.com/exam/EXM2022557219" style="font-size: 13px ;">টেস্ট দিন </a>
                <div class="d-flex  flex-column gap-1 text-secondary" style="font-size: 14px;">
                  <span>
                    <i class="fa fa-coins"></i> : পেইড
                  </span>
                  <span>
                    <i class="fa fa-clock"></i> :

                    50 মিনিট
                  </span>
                  <span>
                    <i class="fa fa-users"></i> :

                    ২৫ জন
                  </span>

                </div>
              </div>




            </div>
          </div>
          <div class="card border border-success rounded shadow m-2">

            <div class="card-body">
              <div class=" d-flex justify-content-between gap-2 flex-wrap mb-3 text-muted" style="font-size: 12px ;font-weight:700">
                <span>শুরু : ২০ সেপ্টেম্বর, ২০২২ রাত ০৮:০০ </span> <span> শেষ : ২১ সেপ্টেম্বর, ২০২২ রাত ১১:৫৯</span>
              </div>
              <a href="https://bdjobwar.com/exam/EXM2022966154" style="text-decoration:none">
                <h6 class="text-success" style="font-weight: 700;">জব সলিউশন ব্যাচ-০৩</h6>
              </a>
              <div style="height:2px;width:100px" class="bg-danger"></div>
              <p class="text-secondary mt-2" style="font-size: 14px;">
                পরীক্ষা- ০১
              </p>
              <div class=" d-flex flex-sm-column flex-md-row gap-2  flex-wrap justify-content-between align-items-center mt-4">

                <a class="btn btn-success btn-sm " href="https://bdjobwar.com/exam/EXM2022966154" style="font-size: 13px ;">টেস্ট দিন </a>
                <div class="d-flex  flex-column gap-1 text-secondary" style="font-size: 14px;">
                  <span>
                    <i class="fa fa-coins"></i> : পেইড
                  </span>
                  <span>
                    <i class="fa fa-clock"></i> :

                    50 মিনিট
                  </span>
                  <span>
                    <i class="fa fa-users"></i> :

                    ২৩ জন
                  </span>

                </div>
              </div>




            </div>
          </div>
        </div>
        <div class="col-md-6">
          <h6 class="mt-2 fw-bold live-exam-heading mb-4">
            <i class="fas fa-file-alt fs-3 text-muted"></i> <span class="text-success">সম্প্রতি বন্ধ <sup>Paid</sup></span>
          </h6>
          <div class="card border border-success rounded shadow m-2">

            <div class="card-body">
              <div class=" d-flex justify-content-between gap-2 flex-wrap mb-3 text-muted" style="font-size: 12px ;font-weight:700">
                <span>শুরু : ১৯ সেপ্টেম্বর, ২০২২ রাত ০৮:০০ </span> <span> শেষ : ২০ সেপ্টেম্বর, ২০২২ রাত ১১:৫৯</span>
              </div>
              <a href="https://bdjobwar.com/exam/EXM2022575849" style="text-decoration:none">
                <h6 class="text-success" style="font-weight: 700;">English Exam- 11</h6>
              </a>
              <div style="height:2px;width:100px" class="bg-danger"></div>
              <p class="text-secondary mt-2" style="font-size: 14px;">
                Master Book
              </p>
              <div class=" d-flex flex-sm-column flex-md-row gap-2  flex-wrap justify-content-between align-items-center mt-4">

                <a class="btn btn-success btn-sm " href="https://bdjobwar.com/exam/EXM2022575849" style="font-size: 13px ;">টেস্ট দিন </a>
                <div class="d-flex  flex-column gap-1 text-secondary" style="font-size: 14px;">
                  <span>
                    <i class="fa fa-coins"></i> : পেইড
                  </span>
                  <span>
                    <i class="fa fa-clock"></i> :

                    15 মিনিট
                  </span>
                  <span>
                    <i class="fa fa-users"></i> :

                    ৫৫ জন
                  </span>

                </div>
              </div>




            </div>
          </div>
          <div class="card border border-success rounded shadow m-2">

            <div class="card-body">
              <div class=" d-flex justify-content-between gap-2 flex-wrap mb-3 text-muted" style="font-size: 12px ;font-weight:700">
                <span>শুরু : ১৯ সেপ্টেম্বর, ২০২২ সন্ধ্যা ০৭:০০ </span> <span> শেষ : ২০ সেপ্টেম্বর, ২০২২ রাত ১১:৫৯</span>
              </div>
              <a href="https://bdjobwar.com/exam/EXM2022105331" style="text-decoration:none">
                <h6 class="text-success" style="font-weight: 700;">জব সলিউশন ব্যাচ-০২</h6>
              </a>
              <div style="height:2px;width:100px" class="bg-danger"></div>
              <p class="text-secondary mt-2" style="font-size: 14px;">
                পরীক্ষা-১০
              </p>
              <div class=" d-flex flex-sm-column flex-md-row gap-2  flex-wrap justify-content-between align-items-center mt-4">

                <a class="btn btn-success btn-sm " href="https://bdjobwar.com/exam/EXM2022105331" style="font-size: 13px ;">টেস্ট দিন </a>
                <div class="d-flex  flex-column gap-1 text-secondary" style="font-size: 14px;">
                  <span>
                    <i class="fa fa-coins"></i> : পেইড
                  </span>
                  <span>
                    <i class="fa fa-clock"></i> :

                    50 মিনিট
                  </span>
                  <span>
                    <i class="fa fa-users"></i> :

                    ৭০ জন
                  </span>

                </div>
              </div>




            </div>
          </div>
          <div class="card border border-success rounded shadow m-2">

            <div class="card-body">
              <div class=" d-flex justify-content-between gap-2 flex-wrap mb-3 text-muted" style="font-size: 12px ;font-weight:700">
                <span>শুরু : ১৮ সেপ্টেম্বর, ২০২২ রাত ১০:০০ </span> <span> শেষ : ১৯ সেপ্টেম্বর, ২০২২ সকাল ১১:৫৯</span>
              </div>
              <a href="https://bdjobwar.com/exam/EXM2022671139" style="text-decoration:none">
                <h6 class="text-success" style="font-weight: 700;">প্রাইমারি এডভান্স ব্যাচ</h6>
              </a>
              <div style="height:2px;width:100px" class="bg-danger"></div>
              <p class="text-secondary mt-2" style="font-size: 14px;">
                পরীক্ষা ১৩
              </p>
              <div class=" d-flex flex-sm-column flex-md-row gap-2  flex-wrap justify-content-between align-items-center mt-4">

                <a class="btn btn-success btn-sm " href="https://bdjobwar.com/exam/EXM2022671139" style="font-size: 13px ;">টেস্ট দিন </a>
                <div class="d-flex  flex-column gap-1 text-secondary" style="font-size: 14px;">
                  <span>
                    <i class="fa fa-coins"></i> : পেইড
                  </span>
                  <span>
                    <i class="fa fa-clock"></i> :

                    50 মিনিট
                  </span>
                  <span>
                    <i class="fa fa-users"></i> :

                    ৫৫ জন
                  </span>

                </div>
              </div>




            </div>
          </div>
        </div>

      </div>
      <div class="row">

        <div class="col-md-12 mb-4">
          <h6 class="mt-2 fw-bold live-exam-heading mb-4">
            <i class="fas fa-poll fs-3 text-muted"></i> <span class="text-success">সর্বশেষ ফলাফল </span>
          </h6>
          <table class="table table-striped table-light">
            <thead class="text-muted">
              <tr>
                <th scope="col">পরীক্ষা</th>
                <th scope="col">বিষয়</th>
                <th scope="col">ফলাফল</th>
              </tr>
            </thead>
            <tbody class="">
              <tr>
                <td>সেট ও ভেনচিত্র <br>
                  <small>
                    গণিত
                  </small>
                </td>
                <td>Primary</td>
                <td><a class="btn btn-sm btn-danger" href="https://bdjobwar.com/exam/all/results/EXM2022338798">দেখুন</a></td>
              </tr>
              <tr>
                <td>নিবন্ধন পরীক্ষা-০২ <br>
                  <small>
                    পরীক্ষা-০২
                  </small>
                </td>
                <td>শিক্ষক নিবন্ধন</td>
                <td><a class="btn btn-sm btn-danger" href="https://bdjobwar.com/exam/all/results/EXM2022541360">দেখুন</a></td>
              </tr>
              <tr>
                <td>প্রাইমারি এডভান্স ব্যাচ <br>
                  <small>
                    পরীক্ষা ১৩
                  </small>
                </td>
                <td>Primary</td>
                <td><a class="btn btn-sm btn-danger" href="https://bdjobwar.com/exam/all/results/EXM2022671139">দেখুন</a></td>
              </tr>
              <tr>
                <td>জব সলিউশন ব্যাচ- ০১ <br>
                  <small>
                    পরীক্ষা ১৭
                  </small>
                </td>
                <td>Job Solution</td>
                <td><a class="btn btn-sm btn-danger" href="https://bdjobwar.com/exam/all/results/EXM2022608982">দেখুন</a></td>
              </tr>
              <tr>
                <td>Math free exam-06 <br>
                  <small>
                    ট্রেন
                  </small>
                </td>
                <td>BCS Preliminary</td>
                <td><a class="btn btn-sm btn-danger" href="https://bdjobwar.com/exam/all/results/EXM2022730043">দেখুন</a></td>
              </tr>
              <tr>
                <td>জব সলিউশন ব্যাচ-০২ <br>
                  <small>
                    পরীক্ষা-১০
                  </small>
                </td>
                <td>Job Solution</td>
                <td><a class="btn btn-sm btn-danger" href="https://bdjobwar.com/exam/all/results/EXM2022105331">দেখুন</a></td>
              </tr>
              <tr>
                <td>জব সলিউশন পরীক্ষা ব্যাচ-০২ <br>
                  <small>
                    পরীক্ষা-০৯
                  </small>
                </td>
                <td>Job Solution</td>
                <td><a class="btn btn-sm btn-danger" href="https://bdjobwar.com/exam/all/results/EXM2022990875">দেখুন</a></td>
              </tr>
              <tr>
                <td>English Exam- 11 <br>
                  <small>
                    Master Book
                  </small>
                </td>
                <td>Primary</td>
                <td><a class="btn btn-sm btn-danger" href="https://bdjobwar.com/exam/all/results/EXM2022575849">দেখুন</a></td>
              </tr>
            </tbody>
          </table>
        </div>


      </div>
      <div class="row">
        <div class="col-md-6">
          <h6 class="mt-2 fw-bold live-exam-heading mb-4">
            <i class="far fa-file-alt fs-3 text-muted"></i> <span class="text-success">আসন্ন পরীক্ষা </span>
          </h6>
          <div class="card border border-success rounded shadow m-2">

            <div class="card-body">
              <div class=" d-flex justify-content-between gap-2 flex-wrap mb-3 text-muted" style="font-size: 12px ;font-weight:700">
                <span>শুরু : ২১ সেপ্টেম্বর, ২০২২ সন্ধ্যা ০৭:০০ </span> <span> শেষ : ২২ সেপ্টেম্বর, ২০২২ রাত ১১:৫৯</span>
              </div>
              <a href="#" style="text-decoration:none">
                <h6 class="text-success" style="font-weight: 700;">জব সলিউশন ব্যাচ-২</h6>
              </a>
              <div style="height:2px;width:100px" class="bg-danger"></div>
              <p class="text-secondary mt-2" style="font-size: 14px;">
                পরীক্ষা-১১
              </p>
              <div class=" d-flex flex-sm-column flex-md-row gap-2  flex-wrap justify-content-between align-items-center mt-4">

                <button class="btn btn-secondary btn-sm " style="font-size: 13px ;">শীঘ্রই আসছে</button>

                <div class="d-flex  flex-column gap-1 text-secondary" style="font-size: 14px;">
                  <span>
                    <i class="fa fa-coins"></i> : পেইড
                  </span>
                  <span>
                    <i class="fa fa-clock"></i> :

                    50 মিনিট
                  </span>
                  <span>
                    <i class="fa fa-users"></i> :

                    ০ জন
                  </span>

                </div>
              </div>




            </div>
          </div>
          <div class="card border border-success rounded shadow m-2">

            <div class="card-body">
              <div class=" d-flex justify-content-between gap-2 flex-wrap mb-3 text-muted" style="font-size: 12px ;font-weight:700">
                <span>শুরু : ২১ সেপ্টেম্বর, ২০২২ রাত ০৮:০০ </span> <span> শেষ : ২২ সেপ্টেম্বর, ২০২২ রাত ১১:৫৯</span>
              </div>
              <a href="#" style="text-decoration:none">
                <h6 class="text-success" style="font-weight: 700;">নিবন্ধন পরীক্ষা- ০৩</h6>
              </a>
              <div style="height:2px;width:100px" class="bg-danger"></div>
              <p class="text-secondary mt-2" style="font-size: 14px;">
                নিবন্ধন ব্যাচ
              </p>
              <div class=" d-flex flex-sm-column flex-md-row gap-2  flex-wrap justify-content-between align-items-center mt-4">

                <button class="btn btn-secondary btn-sm " style="font-size: 13px ;">শীঘ্রই আসছে</button>

                <div class="d-flex  flex-column gap-1 text-secondary" style="font-size: 14px;">
                  <span>
                    <i class="fa fa-coins"></i> : পেইড
                  </span>
                  <span>
                    <i class="fa fa-clock"></i> :

                    45 মিনিট
                  </span>
                  <span>
                    <i class="fa fa-users"></i> :

                    ০ জন
                  </span>

                </div>
              </div>




            </div>
          </div>
          <div class="card border border-success rounded shadow m-2">

            <div class="card-body">
              <div class=" d-flex justify-content-between gap-2 flex-wrap mb-3 text-muted" style="font-size: 12px ;font-weight:700">
                <span>শুরু : ২১ সেপ্টেম্বর, ২০২২ রাত ০৮:০০ </span> <span> শেষ : ২১ সেপ্টেম্বর, ২০২২ রাত ১১:৫৯</span>
              </div>
              <a href="#" style="text-decoration:none">
                <h6 class="text-success" style="font-weight: 700;">Math Free Exam-07</h6>
              </a>
              <div style="height:2px;width:100px" class="bg-danger"></div>
              <p class="text-secondary mt-2" style="font-size: 14px;">
                Math
              </p>
              <div class=" d-flex flex-sm-column flex-md-row gap-2  flex-wrap justify-content-between align-items-center mt-4">

                <button class="btn btn-secondary btn-sm " style="font-size: 13px ;">শীঘ্রই আসছে</button>

                <div class="d-flex  flex-column gap-1 text-secondary" style="font-size: 14px;">
                  <span>
                    <i class="fa fa-coins"></i> : ফ্রি
                  </span>
                  <span>
                    <i class="fa fa-clock"></i> :

                    20 মিনিট
                  </span>
                  <span>
                    <i class="fa fa-users"></i> :

                    ০ জন
                  </span>

                </div>
              </div>




            </div>
          </div>
          <div class="card border border-success rounded shadow m-2">

            <div class="card-body">
              <div class=" d-flex justify-content-between gap-2 flex-wrap mb-3 text-muted" style="font-size: 12px ;font-weight:700">
                <span>শুরু : ২২ সেপ্টেম্বর, ২০২২ রাত ০৮:০০ </span> <span> শেষ : ২৩ সেপ্টেম্বর, ২০২২ রাত ১১:৫৯</span>
              </div>
              <a href="#" style="text-decoration:none">
                <h6 class="text-success" style="font-weight: 700;">জব সলিউশন ব্যাচ-০৩</h6>
              </a>
              <div style="height:2px;width:100px" class="bg-danger"></div>
              <p class="text-secondary mt-2" style="font-size: 14px;">
                পরীক্ষা-০২
              </p>
              <div class=" d-flex flex-sm-column flex-md-row gap-2  flex-wrap justify-content-between align-items-center mt-4">

                <button class="btn btn-secondary btn-sm " style="font-size: 13px ;">শীঘ্রই আসছে</button>

                <div class="d-flex  flex-column gap-1 text-secondary" style="font-size: 14px;">
                  <span>
                    <i class="fa fa-coins"></i> : পেইড
                  </span>
                  <span>
                    <i class="fa fa-clock"></i> :

                    50 মিনিট
                  </span>
                  <span>
                    <i class="fa fa-users"></i> :

                    ০ জন
                  </span>

                </div>
              </div>




            </div>
          </div>
          <div class="card border border-success rounded shadow m-2">

            <div class="card-body">
              <div class=" d-flex justify-content-between gap-2 flex-wrap mb-3 text-muted" style="font-size: 12px ;font-weight:700">
                <span>শুরু : ২২ সেপ্টেম্বর, ২০২২ রাত ০৮:০০ </span> <span> শেষ : ২৩ সেপ্টেম্বর, ২০২২ রাত ১১:৫৯</span>
              </div>
              <a href="#" style="text-decoration:none">
                <h6 class="text-success" style="font-weight: 700;">English Exam-12</h6>
              </a>
              <div style="height:2px;width:100px" class="bg-danger"></div>
              <p class="text-secondary mt-2" style="font-size: 14px;">
                Master Book
              </p>
              <div class=" d-flex flex-sm-column flex-md-row gap-2  flex-wrap justify-content-between align-items-center mt-4">

                <button class="btn btn-secondary btn-sm " style="font-size: 13px ;">শীঘ্রই আসছে</button>

                <div class="d-flex  flex-column gap-1 text-secondary" style="font-size: 14px;">
                  <span>
                    <i class="fa fa-coins"></i> : পেইড
                  </span>
                  <span>
                    <i class="fa fa-clock"></i> :

                    15 মিনিট
                  </span>
                  <span>
                    <i class="fa fa-users"></i> :

                    ০ জন
                  </span>

                </div>
              </div>




            </div>
          </div>
        </div>
        <div class="col-md-6">
          <h6 class="mt-2 fw-bold live-exam-heading mb-4">
            <i class="fas fa-file-invoice fs-3 text-muted"></i> <span class="text-success">নোটিশ বোর্ড </span>
          </h6>
          <div class="card mb-3 col-md-12" style="">
            <div class="card-body">

              <h6 class="up-exam-title"><a href="https://bdjobwar.com/storage/notices/August2022/hjSba0OKqp8VoMzez3Q0.pdf">Download Bd Job War App</a></h6>
              <p class="live-exam-date pt-2"><span><i class="far fa-calendar-alt"></i> 22 Aug ,2022 </span></p>
              <a href="https://bdjobwar.com/storage/notices/August2022/hjSba0OKqp8VoMzez3Q0.pdf" class="btn btn-success">নোটিশ দেখুন</a>
            </div>
          </div>



        </div>
      </div>

    </div>
  </section>
  <section class="live-section" id="courses">
    <div class="live-section-title" style="background-image: url(https://bdjobwar.com/frontEnd-assets/img/Blog.png)">
      <h1 class="text-uppercase" style="font-weight:700 ;font-size:25px">আমাদের কোর্সসমূহ</h1>
    </div>
    <div class="container">
      <div class="row py-5">

        <div class="col-md-4 mb-3">
          <div class="card border-success shadow package-hover">

            <img src="https://bdjobwar.com/storage/courses/September2022/wT8FIIteQXpVAcMqAt8Q.jpg" height="300px" style="object-fit:stretch" class="card-img-top" alt="...">


            <div class="card-body">
              <h4 class="card-title" title="শিক্ষক নিবন্ধন প্রস্তুতি">শিক্ষক নিবন্ধন প্রস্তুতি</h4>
              <div style="height:2px;width:100px" class="bg-danger"></div>
              <div class=" d-flex flex-sm-column flex-md-row gap-3  flex-wrap justify-content-between align-items-center mt-4">

                <a class="btn btn-success btn-lg " href="https://bdjobwar.com/course/sikshk-nibndhn-prstuti/12" style="font-size: 13px ;">ব্যাচসমূহ</a>
                <div class="d-flex  gap-5 text-dark" style="font-size: 14px;">

                  <span>
                    <i class="fa fa-users"> ব্যাচ</i> :

                    ১ টি</span>

                </div>
              </div>
            </div>
          </div>

        </div>


        <div class="col-md-4 mb-3">
          <div class="card border-success shadow package-hover">

            <img src="https://bdjobwar.com/storage/courses/August2022/T54yj8NqFMN2xqPbAhtu.jpg" height="300px" style="object-fit:stretch" class="card-img-top" alt="...">


            <div class="card-body">
              <h4 class="card-title" title="জব সলিউশন পরীক্ষা">জব সলিউশন পরীক্ষা</h4>
              <div style="height:2px;width:100px" class="bg-danger"></div>
              <div class=" d-flex flex-sm-column flex-md-row gap-3  flex-wrap justify-content-between align-items-center mt-4">

                <a class="btn btn-success btn-lg " href="https://bdjobwar.com/course/jb-sliusn-preeksha/9" style="font-size: 13px ;">ব্যাচসমূহ</a>
                <div class="d-flex  gap-5 text-dark" style="font-size: 14px;">

                  <span>
                    <i class="fa fa-users"> ব্যাচ</i> :

                    ৩ টি</span>

                </div>
              </div>
            </div>
          </div>

        </div>


        <div class="col-md-4 mb-3">
          <div class="card border-success shadow package-hover">

            <img src="https://bdjobwar.com/storage/courses/July2022/jWhzj4Hqzpt7JqNdnXYW.png" height="300px" style="object-fit:stretch" class="card-img-top" alt="...">


            <div class="card-body">
              <h4 class="card-title" title="প্রাথমিক সহকারি শিক্ষক নিয়োগ প্রস্তুতি">প্রাথমিক সহকারি শিক্ষক নিয়োগ...</h4>
              <div style="height:2px;width:100px" class="bg-danger"></div>
              <div class=" d-flex flex-sm-column flex-md-row gap-3  flex-wrap justify-content-between align-items-center mt-4">

                <a class="btn btn-success btn-lg " href="https://bdjobwar.com/course/prathmik-shkari-sikshk-niyog-prstuti/8" style="font-size: 13px ;">ব্যাচসমূহ</a>
                <div class="d-flex  gap-5 text-dark" style="font-size: 14px;">

                  <span>
                    <i class="fa fa-users"> ব্যাচ</i> :

                    ২ টি</span>

                </div>
              </div>
            </div>
          </div>

        </div>


        <div class="col-md-4 mb-3">
          <div class="card border-success shadow package-hover">

            <img src="https://bdjobwar.com/storage/courses/August2022/raDze96adfgr6SWqPD7U.png" height="300px" style="object-fit:stretch" class="card-img-top" alt="...">


            <div class="card-body">
              <h4 class="card-title" title="বিষয়ভিত্তিক পরীক্ষা">বিষয়ভিত্তিক পরীক্ষা</h4>
              <div style="height:2px;width:100px" class="bg-danger"></div>
              <div class=" d-flex flex-sm-column flex-md-row gap-3  flex-wrap justify-content-between align-items-center mt-4">

                <a class="btn btn-success btn-lg " href="https://bdjobwar.com/course/bishyvittik-preeksha/7" style="font-size: 13px ;">ব্যাচসমূহ</a>
                <div class="d-flex  gap-5 text-dark" style="font-size: 14px;">

                  <span>
                    <i class="fa fa-users"> ব্যাচ</i> :

                    ২ টি</span>

                </div>
              </div>
            </div>
          </div>

        </div>


        <div class="col-md-4 mb-3">
          <div class="card border-success shadow package-hover">

            <img src="https://bdjobwar.com/storage/courses/July2022/4yTaxGWpgQPZIDb24HlA.png" height="300px" style="object-fit:stretch" class="card-img-top" alt="...">


            <div class="card-body">
              <h4 class="card-title" title="ফ্রি পরীক্ষাসমূহ">ফ্রি পরীক্ষাসমূহ</h4>
              <div style="height:2px;width:100px" class="bg-danger"></div>
              <div class=" d-flex flex-sm-column flex-md-row gap-3  flex-wrap justify-content-between align-items-center mt-4">

                <a class="btn btn-success btn-lg " href="https://bdjobwar.com/course/fri-preekshasmuuh/5" style="font-size: 13px ;">ব্যাচসমূহ</a>
                <div class="d-flex  gap-5 text-dark" style="font-size: 14px;">

                  <span>
                    <i class="fa fa-users"> ব্যাচ</i> :

                    ৩ টি</span>

                </div>
              </div>
            </div>
          </div>

        </div>


      </div>
    </div>
  </section>
  <!-- Live section end -->
  <!-- Package section start -->
  <section class="live-section" id="package">
    <div class="live-section-title" style="background-image: url(https://bdjobwar.com/frontEnd-assets/img/Blog.png)">
      <h1 class="text-uppercase" style="font-weight:700 ;font-size:25px">আমাদের প্যাকেজসমূহ</h1>
    </div>
    <div class="container">
      <div class="row py-5">
        <div class="col-md-3 col-12">
          <div class="card border border-success shadow package-hover ">

            <div class="card-body d-flex  flex-column justify-content-center align-items-center shadow  p-5 gap-2">
              <div style="height:80px;width:80px" class="text-success shadow rounded-circle border-success border d-flex justify-content-center flex-column  align-items-center">
                <i class="fa fa-gifts fa-2x"></i>
              </div>
              <h4 class="text-uppercase" style="font-weight:700 ;">
                মাসিক
              </h4>
              <h5 style="font-weight:700;">

                ১০০ &#2547;

              </h5>
              <ul class="premium-feature">
                <li><span>প্রশ্ন ব্যাংক সার্চ ।</span></li>
                <li><span>সকল পেইড কোর্স ।</span></li>
                <li><span>জব সলিউশন ।</span></li>
                <li><span>পিডিএফ ডাউনলোড ।</span></li>
                <li><span>সকল লাইভ ও আর্কাইভ পরীক্ষা ।</span></li>

              </ul>

            </div>
          </div>
          <a class="btn btn-outline-danger d-block my-3 text-uppercase" href="https://bdjobwar.com/package/masik/1"> বিস্তারিত দেখুন</a>

        </div>




      </div>
    </div>


    <section class="">
      <div class=" py-4 d-flex flex-column flex-md-row justify-content-around gap-3" style="background-image: url(https://bdjobwar.com/frontEnd-assets/img/Blog.png)">
        <div class="d-flex flex-column justify-content-center align-items-center text-light">
          <i class="fa fa-users fa-3x"></i>
          <h6>সাবস্ক্রাইবার </h6>
          <h5>৪২৩৭</h5>
        </div>

        <div class="d-flex flex-column justify-content-center align-items-center text-light gap-2">
          <i class="fa fa-file-alt fa-3x"></i>
          <h6>মডেল টেস্ট </h6>
          <h5>১৬৫</h5>
        </div>

        <div class="d-flex flex-column justify-content-center align-items-center text-light gap-2">
          <i class="fa fa-question-circle fa-3x"></i>
          <h6>প্রশ্ন সংখ্যা </h6>
          <h5>৭০৯০</h5>
        </div>


      </div>
    </section>

</main>
<?php require("footer_sub.php") ?>
<?php require("footer.php") ?>