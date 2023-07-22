<?= $this->extend('layout/template');?> 
<?= $this->section('content');?> 
<div class="breadcrumbarea">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="breadcrumb__content__wraper" data-aos="fade-up">
          <div class="breadcrumb__title">
            <h2 class="heading">Featured Courses</h2>
          </div>
          <div class="breadcrumb__inner">
            <ul>
              <li>
                <a href="index.html">Home</a>
              </li>
              <li> Featured Course</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="shape__icon__2">
    <img class=" shape__icon__img shape__icon__img__1" src="img/herobanner/herobanner__1.png" alt="photo">
    <img class=" shape__icon__img shape__icon__img__2" src="img/herobanner/herobanner__2.png" alt="photo">
    <img class=" shape__icon__img shape__icon__img__3" src="img/herobanner/herobanner__3.png" alt="photo">
    <img class=" shape__icon__img shape__icon__img__4" src="img/herobanner/herobanner__5.png" alt="photo">
  </div>
</div>
<!-- breadcrumbarea__section__end-->
<!-- course__section__start   -->
<div class="coursearea sp_top_100 sp_bottom_100">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="course__text__wraper" data-aos="fade-up">
          <div class="course__text">
            <p>Showing 1–12 of 54 Results</p>
          </div>
          <div class="course__icon">
            <ul class="nav property__team__tap" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <a href="#" class="single__tab__link active" data-bs-toggle="tab" data-bs-target="#projects__one">
                  <i class="icofont-layout"></i>
                </a>
              </li>
              <li class="nav-item" role="presentation">
                <a href="#" class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__two">
                  <i class="icofont-listine-dots"></i>
                </a>
              </li>
              <li class="short__by__new">
                <select class="form-select" aria-label="Default select example">
                  <option selected>Short by New</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-4 col-12">
        <div class="course__sidebar__wraper" data-aos="fade-up">
          <div class="course__heading">
            <h5>Search here</h5>
          </div>
          <div class="course__input">
            <input type="text" placeholder="Search product">
            <div class="search__button">
              <button>
                <i class="icofont-search-1"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="course__sidebar__wraper" data-aos="fade-up">
          <div class="categori__wraper">
            <div class="course__heading">
              <h5>Categories</h5>
            </div>
            <div class="course__categories__list">
              <ul>
                <li>
                  <a href="#"> BRIEF <span>4</span>
                  </a>
                </li>
                <li>
                  <a href="#"> Pelatihan Berbasis Komoditas <span>1</span>
                  </a>
                </li>
                <li>
                  <a href="#"> Pelatihan Berbasis Kompetensi <span>12</span>
                  </a>
                </li>
                <li>
                  <a href="#"> Sertifikasi <span>2</span>
                  </a>
                </li>
                <li>
                  <a href="#"> Project Assignment <span>2</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-9 col-lg-9 col-md-8 col-12">
        <div class="tab-content tab__content__wrapper with__sidebar__content" id="myTabContent">
          <div class="tab-pane fade  active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">
            <div class="row"> 
                <?php if(!empty($courses)) {
                    $zaincode = new \App\Libraries\Zaincode();
                            foreach ($courses as $kc => $vc) {?> 
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 col-12 aos-init aos-animate" data-aos="fade-up">
                    <div class="gridarea__wraper gridarea__wraper__2">
                    <div class="gridarea__img">
                        <a href="course-details.html">
                        <!-- <img src="img/grid/grid_1.png" alt="grid"> -->
                        <img src="<?= base_url('/img/grid/grid_1.png');}?>" alt="grid">
                        </a>
                        <div class="gridarea__small__button"></div>
                        <div class="gridarea__small__icon">
                        <a href="#">
                            <i class="icofont-heart-alt"></i>
                        </a>
                        </div>
                    </div>
                    <div class="gridarea__content">
                        <div class="gridarea__heading">
                        <h3>
                            <a href="course-details.html"> <?=$vc['mpName']?></a>
                        </h3>
                        </div>
                        <div class="gridarea__price">Rp. 120.000 <del>/ Rp. 670.000</del>
                        <span>
                            <del class="del__2">Free</del>
                        </span>
                        </div>
                        <div class="gridarea__bottom">
                        <a href="instructor-details.html">
                            <div class="gridarea__small__img">
                            <img src="img/grid/grid_small_1.jpg" alt="grid">
                            <div class="gridarea__small__content">
                                <h6>BRIEF</h6>
                            </div>
                            </div>
                        </a>
                        <div class="gridarea__star">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <span>(44)</span>
                        </div>
                        </div>
                    </div> 
                    <?php }
                                    }?>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="projects__two" role="tabpanel" aria-labelledby="projects__two">
            <div class="gridarea__wraper gridarea__wraper__2 gridarea__course__list" data-aos="fade-up"> 
                <?php if(!empty($courses)) {
                    $zaincode = new \App\Libraries\Zaincode();
                    foreach ($courses as $kc => $vc) {?> 
                <div class="gridarea__img">
                <!-- <a href="course-details.html"><img src="img/grid/grid_5.png" alt="grid"></a> -->
                <a href="course-details.html">
                  <img src="<?php if(!empty($ve['images'])){ echo ''.$ve['images'][0]['path'].'';}else{ echo ''.base_url().'img/grid/grid_5.png';}?>" alt="grid">
                </a>
                <div class="gridarea__small__button">
                  <div class="gridarea__small__icon">
                    <a href="#">
                      <i class="icofont-heart-alt"></i>
                    </a>
                  </div>
                </div>
                <div class="gridarea__content">
                  <div class="gridarea__heading">
                    <h3>
                      <a href="course-details.html"><?=$vc['mpName']?> </a>
                    </h3>
                  </div>
                  <div class="gridarea__price"> Rp. 32.000 <del>/ Rp. 67.000</del>
                    <span>Free.</span>
                  </div>
                  <div class="gridarea__bottom">
                    <div class="gridarea__bottom__left">
                      <a href="instructor-details.html">
                        <div class="gridarea__small__img">
                          <img src="img/grid/grid_small_1.jpg" alt="grid">
                          <div class="gridarea__small__content">
                            <h6>BRILEAF</h6>
                          </div>
                        </div>
                      </a>
                      <div class="gridarea__star">
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <span>(44)</span>
                      </div>
                    </div>
                    <div class="gridarea__details">
                      <a href="course-details.html">Know Details <i class="icofont-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div> 
                <?php }
                }?>
              </div>
            </div>
            <div class="main__pagination__wrapper" data-aos="fade-up">
              <ul class="main__page__pagination">
                <li>
                  <a class="disable" href="#">
                    <i class="icofont-double-left"></i>
                  </a>
                </li>
                <li>
                  <a class="active" href="#">1</a>
                </li>
                <li>
                  <a href="#">2</a>
                </li>
                <li>
                  <a href="#">3</a>
                </li>
                <li>
                  <a href="#">
                    <i class="icofont-double-right"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- course__section__end   --> 
<?= $this->endSection(); ?>