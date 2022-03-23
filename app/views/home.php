<!DOCTYPE html>
<html>

<head>
    <!-- meta -->
    <!-- The <meta> tag defines metadata about an HTML document. Metadata is data (information) about data. -->
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- title -->
    <title>E-library</title>
    <!-- link -->
    <!-- tag defines the relationship between the current document and an external resource -->
    <link rel="stylesheet" href="app/public/css/style.css">
</head>

<body>


    <nav class="navbar">
        <!-- logo -->
        <div class="logo"></div>

        <!--navigation menu -->
        <ul class="nav-links">
            <!-- checkbox hack-->
            <input type="checkbox" id="checkbox_toggle" />
            <label for="checkbox_toggle" class="hamburger">&#9776;</label>
            <!-- NAVIGATION MENUS -->

            <div class="menu">
                <li><span><img src="icons/person.svg" /> </span><a><button class="myBtn"> ادخل لحسابك </button>أو<button
                            class="myBtn"> سجل الآن </button></a>
                </li>
                <li><span><img src="icons/star.svg" class="icons" /> </span><a href="/"> المفضلة </a></li>
                <li><span><img src="icons/ship.svg" class="icons" /> </span><a href="/"> تتبع الشحنة </a></li>
                <li><span><img src="icons/correct.svg" class="icons" /> </span><a href="/"> طلبات الصيانة </a></li>
                <li><span><img src="icons/help.svg" class="icons" /> </span><a href="/"> المساعدة </a></li>
                <li><span><img src="icons/map.svg" class="icons" /> </span><a href="/"> فروعنا </a></li>

                <li><span><img src="icons/sudia.svg" class="icons" /> </span><a href="/"> المملكة العربية السعودية </a>
                </li>
                <li ><input type="button" id="directionSwitch" class="myBtn2" value="English"/><span><img src="icons/translate.svg" class="icons" /> </span></li>

            </div>


        </ul>
    </nav>
    <nav class="Secondnavbar">

        <div class="logo1">
            <a href="index.html">
                <img src="./images/mylogo.png"  class="imagesize" /> 
            </a>

        </div>
        <div class="search">
            <input type="text" />
            <img src="icons/search.svg" class="searchicon" />
        </div>

        <div class="cart">
            <img src="icons/cart.svg" />
        </div>
    </nav>



    <!-- start Body -->
    <!-- cover slide -->
    <!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <img src="./images/advertisement1.jpg" style="width:100%">
      <div class="text">Caption Text</div>
    </div>
  
    <div class="mySlides fade">
      <img src="./images/advertisement2.jpg" style="width:100%">
      <div class="text">Caption Two</div>
    </div>
  
    <div class="mySlides fade">
      <img src="./images/advertisement3.jpg" style="width:100%">
      <div class="text">Caption Three</div>
    </div>
    <div class="mySlides fade">
        <img src="./images/advertisement4.jpg" style="width:100%">
        <div class="text">Caption Three</div>
      </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

     <!-- The dots/square -->
  <div class="small-square" style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span> 
    <span class="dot" onclick="currentSlide(3)"></span> 
  </div>
</div>

  
 


  <!-- end cover slide -->
      <!-- category slide -->
      <section>
        <div class="title">
            <h1 class="topic">تصفح حسب القسم</h1>
        </div>
        <div class="category">
            <article class="category__item">
                <img src="icons/debt.svg" class="category__img_1" alt="دين">
                <a href="categories.html" class="category__title category__title--brown">دين</a>
            </article>
            <article class="category__item">
                <img src="icons/history.svg" class="category__img_1" alt="تاريخ">
                <a href="categories.html" class="category__title category__title--orange">تاريخ</a>
            </article>
            <article class="category__item">
                <img src="icons/novels.svg" class="category__img_1" alt="روايات">
                <a href="categories.html" class="category__title category__title--purple">روايات</a>
            </article>
            <article class="category__item">
                <img src="icons/policy.svg" class="category__img_1" alt="سياسة">
                <a href="categories.html" class="category__title category__title--fuchsia">سياسة</a>
            </article>
            <article class="category__item">
                <img src="icons/economie.svg" class="category__img_1" alt="اقتصاد">
                <a href="categories.html" class="category__title category__title--blue">اقتصاد</a>
            </article>
            <article class="category__item">
                <img src="icons/cooking.svg" class="category__img_1" alt="طبخ">
                <a href="categories.html" class="category__title category__title--green">طبخ</a>
            </article>
            <article class="category__item">
                <img src="icons/education.svg" class="category__img_1" alt="تربية">
                <a href="categories.html" class="category__title category__title--pink">تربية</a>
            </article>
          
        </div>
    </section>


      <!--End  category  -->

      <!-- advertisment section -->

      <section>
        <div class="advertisement">
            <article class="advertisement__item">
                <a href="#"><img src="./images/advertisement1.jpg" class="advertisement__img" alt=""></a>
            </article>
            <article class="advertisement__item">
                <a href="#"><img src="./images/advertisement2.jpg" class="advertisement__img" alt=""></a>
            </article>
            <article class="advertisement__item">
                <a href="#"><img src="./images/advertisement3.jpg" class="advertisement__img" alt=""></a>
            </article>
            <article class="advertisement__item">
                <a href="#"><img src="./images/advertisement4.jpg" class="advertisement__img" alt=""></a>
            </article>
          
        </div>
        <div class="makeflex">
            <img src="./images/advertisement5.jpg" class="advertisement__item--main-img " width="100%" alt="">
        </div>
    </section>

      <!-- end advertisment section -->




         <!-- offer -->
         <section>
            <header class="title">
                <h1 class="topic">العروض الحالية</h1>
                <!-- <div class="inner-box" id="day"></div> -->
            </header>
            <div class="category">
               
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                        
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>

                    
                <div class="inner-box" id="day"></div>
                    

                    <div class="action">
                        <a href="#" ><img src="icons/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                  
                <div class="inner-box" id="day2"></div>
                    <div class="action">
                        <a href="#" ><img src="icons/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    
                <!-- <div class="inner-box" id="day"></div> -->
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    
                <div class="inner-box" id="day3"></div>
                   
                    <div class="action">
                        <a href="#" ><img src="./images/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    
                <!-- <div class="inner-box" id="day"></div> -->
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    
                <div class="inner-box" id="day4"></div>
                   
                    <div class="action">
                        <a href="#" ><img src="icons/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    
                <!-- <div class="inner-box" id="day"></div> -->
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                   
                <div class="inner-box" id="day5"></div>
                    <div class="action">
                        <a href="#" ><img src="icons/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                
               
            </div>
        </section>

<!-- end offer -->




         <!-- Relegin -->
         <section>
            <header class="title">
                <h1 class="topic">الكتب الدينية </h1>
            </header>
            <div class="category">
               
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                
                    <div class="action">
                        <a href="#" ><img src="icons/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                  
                    <div class="action">
                        <a href="#" ><img src="icons/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                   
                    <div class="action">
                        <a href="#" ><img src="./images/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                   
                    <div class="action">
                        <a href="#" ><img src="icons/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                   
                    <div class="action">
                        <a href="#" ><img src="icons/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                
               
            </div>
        </section>

<!-- end relegin -->



         <!-- history -->
         <section>
            <header class="title">
                <h1 class="topic">الكتب التاريخية </h1>
            </header>
            <div class="category">
               
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                
                    <div class="action">
                        <a href="#" ><img src="icons/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                  
                    <div class="action">
                        <a href="#" ><img src="icons/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                   
                    <div class="action">
                        <a href="#" ><img src="./images/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                   
                    <div class="action">
                        <a href="#" ><img src="icons/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                   
                    <div class="action">
                        <a href="#" ><img src="icons/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                
               
            </div>
        </section>

<!-- end history -->



         <!-- politic -->
         <section>
            <header class="title">
                <h1 class="topic">السياسة </h1>
            </header>
            <div class="category">
               
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                
                    <div class="action">
                        <a href="#" ><img src="icons/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                  
                    <div class="action">
                        <a href="#" ><img src="icons/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                   
                    <div class="action">
                        <a href="#" ><img src="./images/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                   
                    <div class="action">
                        <a href="#" ><img src="icons/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                   
                    <div class="action">
                        <a href="#" ><img src="icons/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                
               
            </div>
        </section>

<!-- end politics -->



         <!-- economy -->
         <section>
            <header class="title">
                <h1 class="topic">الاقتصاد </h1>
            </header>
            <div class="category">
               
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                
                    <div class="action">
                        <a href="#" ><img src="icons/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                  
                    <div class="action">
                        <a href="#" ><img src="icons/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                   
                    <div class="action">
                        <a href="#" ><img src="./images/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                   
                    <div class="action">
                        <a href="#" ><img src="icons/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                   
                    <div class="action">
                        <a href="#" ><img src="icons/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                
               
            </div>
        </section>

<!-- end economy -->




         <!-- cook -->
         <section>
            <header class="title">
                <h1 class="topic">الطبخ </h1>
            </header>
            <div class="category">
               
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                
                    <div class="action">
                        <a href="#" ><img src="icons/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                  
                    <div class="action">
                        <a href="#" ><img src="icons/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                   
                    <div class="action">
                        <a href="#" ><img src="./images/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                   
                    <div class="action">
                        <a href="#" ><img src="icons/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                   
                    <div class="action">
                        <a href="#" ><img src="icons/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                
               
            </div>
        </section>

<!-- end cook -->




         <!-- romance -->
         <section>
            <header class="title">
                <h1 class="topic">أفضل الروايات الرومتنسية </h1>
            </header>
            <div class="category">
               
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                
                    <div class="action">
                        <a href="#" ><img src="icons/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                  
                    <div class="action">
                        <a href="#" ><img src="icons/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                   
                    <div class="action">
                        <a href="#" ><img src="./images/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                   
                    <div class="action">
                        <a href="#" ><img src="icons/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                <article class="card">
                    <img src="./images/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="book-type">
                        <img src="icons/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                        <img src="icons/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">كبريا وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                   
                    <div class="action">
                        <a href="#" ><img src="icons/star.svg" alt="المفضلة" ></a>
                        <a href="#" ><img src="icons/cart.svg" alt="السلة" ></a>
                        <a href="#" ><img src="icons/share.svg" alt="مشاركة" ></a>
                    </div>
                </article>
                
               
            </div>
        </section>

<!-- end romance -->
    <!-- End Body -->





<!-- start model -->
<div class="modal">
    <div class="modal-content">

        <span class="close close">×</span>

        <p><i class="arrow left"></i></p>
        <section dir="rtl" class="login-signup">
            <div class="right login">
                <h1 class="login-title">تسجيل الدخول</h1>
                <form id="login-form" class="login-form">
                    <div class="input-wrap">
                        <input name="email" type="email" title="البريد الالكتروني أو رقم الجوال" />
                        <label for="name">البريد الالكتروني أو رقم الجوال</label>
                    </div>
                    <div class="input-wrap">
                        <label for="password">كلمة السر</label>
                        <input type="password" name="password" />
                        <p class="forget">نسيت؟</p>
                    </div>
                    <button>تسجيل الدخول</button>
                </form>

                <div class="go-to-signup">
                    <p>ليس لديك حساب؟</p>
                    <p class="new-account-button">انشاء حساب جديد</p>
                </div>
            </div>
        </section>


        <p><i class="arrow right"></i></p>
    </div>
</div>

<div class="modal">
    <div class="modal-content">
        <p><i class="arrow left"></i></p>
        <span class="close close">×</span>

        <section dir="rtl" class="login-signup">

            <div class="left signup">
                <h1 class="login-title">إنشاء حساب</h1>
                <form id="signup-form" class="signup-form">
                    <div class="two-input">
                        <div class="input-wrap">
                            <input name="number" type="tel" />
                            <label for="name">رقم الجوال</label>
                        </div>
                        <div class="input-wrap">
                            <label for="">رمز البلد</label>
                            <input type="password" name="password" />
                        </div>
                    </div>
                    <p>سوف نرسل لك رمز التحقق عن طريق رسالة نصية</p>

                    <div class="input-wrap">
                        <label for="password">ارسال رمز التحقق</label>
                        <input type="password" name="password" />
                    </div>

                    <div class="input-wrap">
                        <label for="password">الاسم الاول</label>
                        <input type="password" name="password" />
                    </div>

                    <div class="input-wrap">
                        <label for="password">اسم العائله</label>
                        <input type="password" name="password" />
                    </div>

                    <div class="input-wrap">
                        <label for="password">البريد الالكتروني</label>
                        <input type="password" name="password" />
                    </div>

                    <div class="input-wrap">
                        <label for="password">تاكيد البريد الالكتروني</label>
                        <input type="password" name="password" />
                    </div>
                    <div class="input-wrap">
                        <label for="password">كلمة السر</label>
                        <input type="password" name="password" />
                    </div>

                    <div class="checkbox-div">
                        <span></span>
                        <input type="checkbox"  />
                        <p>أوافق على الشروط والأحكام</p>
                    </div>
                    <div class="checkbox-div">
                        <span></span>

                        <input type="checkbox" disabled="disabled" />
                        <p>التسجيل للانضمام للنشرة البريدية</p>
                    </div>

                    <button>انشاء حساب</button>
                </form>
            </div>
        </section>
        <p><i class="arrow right"></i></p>
    </div>

</div>

<!-- end model -->

    
        <!--FOOTER-->
        <div class="myfooter">
            <div class="">
                <p>انضم إلى نشرتنا البريدية</p>
                <div class="form">

                    <input type="text" />

                    <button class="mybutton">اشتراك</button>


                </div>

                <p class="social">تواصل معنا</p>
                <ul class="contact">
                    <li class="icons">
                        <img src="icons/svgexport-55.svg" />
                    </li>
                    <li>
                        <img src="icons/svgexport-56.svg" />
                    </li>
                    <li>
                        <img src="icons/svgexport-57.svg" />
                    </li>
                    <li>
                        <img src="icons/svgexport-58.svg" />
                    </li>
                    <li>
                        <img src="icons/svgexport-59.svg" />
                    </li>
                    <li>
                        <img src="icons/svgexport-61.svg" />
                    </li>
                    <li>
                        <img src="icons/svgexport-56.svg" />
                    </li>
                </ul>

            </div>
            <div class="">
                <p>خدمة العملاء</p>
                <ul>
                    <li> مبيعات الشركات </li>
                    <li>الأسئلة المتكررة </li>
                    <li> دليل التسوق والمطبوعات </li>
                    <li>مواقع المعارض </li>
                    <li>سياسة الضمان </li>
                    <li> سياسة الاسترجاع والاستبدال </li>
                    <li> اتصل بنا </li>
                    <li> 920000089 </li>
                </ul>

            </div>

            <div class="">
                <p>خدمات جرير </p>
                <ul>
                    <li>تذاكر جرير </li>
                    <li> خدمة تقسيط المشتريات </li>
                    <li> خدمات ما بعد البيع </li>
                    <li> خدمة الحماية الشاملة </li>
                    <li> خدمة تمديد الضمان </li>
                    <li> حماية أجهزة آبل </li>
                    <li> بطاقة خصم جرير </li>
                    <li> بطاقة جرير للهدايا </li>
                </ul>

            </div>

            <div class="">
                <p> روابط سريعة </p>
                <ul>
                    <li> إصدارات جرير </li>
                    <li> قارئ جرير </li>
                    <li> شركاء برامج المكافئات </li>
                    <li>خدمات شركات الإتصالات </li>

                </ul>

            </div>

            <div class="">
                <p> عن جرير </p>
                <ul>
                    <li> من نحن </li>
                    <li> الحوكمة </li>
                    <li> علاقات المستثمرين والتقارير</li>
                    <li> الاستدامة </li>
                    <li>الأخبار</li>

                </ul>
                <p>فرص العمل </p>
            </div>




        </div>
        <div class="makeflex">
            <ul class="contact">
                <li class="icons">
                    <img src="icons/svgexport-62.svg" />
                </li>
                <li>
                    <img src="icons/svgexport-63.svg" />
                </li>
                <li>
                    <img src="icons/svgexport-64.svg" />
                </li>
                <li>
                    <img src="icons/svgexport-65.svg" />
                </li>
                <li>
                    <img src="icons/svgexport-66.svg" />
                </li>
                <li>
                    <img src="icons/svgexport-67.svg" />
                </li>
                <li>
                    <img src="icons/svgexport-67.svg" />
                </li>
            </ul>
            <div class="lastText">
                <p>

                    سياسة الخصوصية | شروط الخدمة </p>

                <p> .جميع الحقوق محفوظة لمكتبة جرير © 2022. س.ت. 1010032264. اونلاين س.ت. 1010654213
                </p>
            </div>
        </div>
        <!--END FOOTER-->
        
    	<script src="app/public/js/javascript.js"></script>


        <script>
            



// Set the date we're counting down to

var countDownDate = new Date("Jun 30, 2022").getTime();
var x = setInterval(function() {

// Get today's date and time

var now = new Date("Jun 27, 2022").getTime();

  // Find the distance between now and the count down date

  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
//   console.log(this.days,"ddddddddd");

  document.getElementById('day').innerHTML = ' تبقى للعرض '+days + ' ايام ';
  document.getElementById('day2').innerHTML = ' تبقى للعرض '+days + ' ايام ';
  document.getElementById('day3').innerHTML = ' تبقى للعرض '+days + ' ايام ';
  document.getElementById('day4').innerHTML = ' تبقى للعرض '+days + ' ايام ';
  document.getElementById('day5').innerHTML = ' تبقى للعرض '+days + ' ايام ';

  // If the count down is finished, write some text

  if (distance < 0) {

clearInterval(x);

document.getElementById("demo").innerHTML = "offer end";

}



}, 1000);


// language
document.getElementById('directionSwitch').addEventListener('click', function() {
  var docDirection = document.documentElement.dir;  
  var isRTL = (docDirection === 'rtl');
  document.documentElement.dir = isRTL ? 'ltr' : 'rtl';

});
          



        </script>

        <script>
              // Get the modal
              var modal = document.getElementsByClassName("modal");

// Get the button that opens the modal
var modal_btn = document.getElementsByClassName("myBtn");

// Get the <span> element that closes the modal
var span_close = document.getElementsByClassName("close");

// Get left and right arrows
var left = document.getElementsByClassName("left");
var right = document.getElementsByClassName("right");

// set data indexes on errrythang.
function setDataIndex() {
    for (i = 0; i < modal_btn.length; i++) {
        modal_btn[i].setAttribute('data-index', i);
        modal[i].setAttribute('data-index', i);
        span_close[i].setAttribute('data-index', i);
        left[i].setAttribute('data-index', i);
        right[i].setAttribute('data-index', i);
    }
}

//add onclicks to all the model buttons and display models when clicked
for (i = 0; i < modal_btn.length; i++) {
    modal_btn[i].onclick = function () {
        var ElementIndex = this.getAttribute('data-index');
        modal[ElementIndex].style.display = "block";
        document.body.classList.add("noScroll");
    };

    // When the user clicks on <span> (x), close the modal
    span_close[i].onclick = function () {
        var ElementIndex = this.getAttribute('data-index');
        modal[ElementIndex].style.display = "none";
        document.body.classList.remove("noScroll");
    };

    right[i].onclick = function () {
        var ElementIndex = this.getAttribute('data-index');
        var CurrentModal = parseInt(ElementIndex, 10);

        if (CurrentModal === modal_btn.length - 1) {
            var NextModal = 0;
        } else {
            var NextModal = CurrentModal + 1;
        }

        modal[CurrentModal].style.display = "none";
        modal[NextModal].style.display = "block";
    };

    left[i].onclick = function () {
        var ElementIndex = this.getAttribute('data-index');
        var CurrentModal = parseInt(ElementIndex, 10);

        if (CurrentModal === 0) {
            var PreviousModal = modal_btn.length - 1;
        } else {
            var PreviousModal = CurrentModal - 1;
        }

        modal[PreviousModal].style.display = "block";
        modal[CurrentModal].style.display = "none";
    };
}


window.onload = function () {
    setDataIndex();
};

// close the modal when you click outside the box
window.onclick = function (event) {
    if (event.target === modal[event.target.getAttribute('data-index')]) {
        modal[event.target.getAttribute('data-index')].style.display = "none";
        document.body.classList.remove("noScroll");
    }
};
        </script>
    </body>
    </html>
