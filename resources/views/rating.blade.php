<!DOCTYPE html>
<html lang="ar" dir="rtl">
<style>
@font-face {
  font-family: 'Graphik Arabic SemiBold';
  src: url('../webfonts/GraphikArabicSemiBold.ttf') format('truetype');
}

:root {
  --dark-color: #19283f;
  --green-color: #33d1cc;
  --red-color: #ff3150;
  --yellow-color: #ffc400;
  --section-color: #eff7fa;
}


body {
  direction: rtl;
  font-family: 'Graphik Arabic SemiBold', sans-serif;
  margin: 0;
  padding: 0; /* Reset default body padding */
  text-align: center;
  background-color: #f4f4f4;
}

#ratings-container {

  width: 100%; /* Ensure it takes the full width of its parent */
  max-width: 900px;
  text-align: center;
  padding: 20px;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  margin: 0 auto; /* Center horizontally */
}



.section-title {
  font-size: 20px;
  font-weight: bold;
  padding: 10px;
  margin-bottom: 20px;
}

.rating-item {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
  border-bottom: 1px solid #ddd;
}

.rating-item .rating-title {
  min-width: 200px;
  max-width: 200px;
  text-align: center;
  text-align: start;;
}
.rating-item .star {
  color:#ddd;
  font-size:medium;
}
/* .rating-item .star:hover {
  color: #cccccc;
} */

.add-description {
  color: black;
  font-weight: 200;
  background-color: transparent;
  padding: 2px;
}
.add-description:hover {
  background-color: #cccccc;
}
.rating-item:last-child {
  border-bottom: none;
}
.star {
  font-size: 2em;
  color: #ccc;
  cursor: pointer;
  
}
.star:hover,
.star.active {
  color: #ffcc00;
}
.button-save {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}
button {
  padding: 10px 20px;
  font-size: 18px;
  font-weight: bold;
  background-color: #74b6ef;
  color: #fff;
  border: none;
  cursor: pointer;
}
button:hover {
  background-color: green;
}
@media (max-width: 768px) {
  .container {
    padding: 10px;
  }
  .section-title {
    font-size: 18px;
  }
  .rating-item {
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
  }
  .rating-item .rating-title {
    text-align: center !important;

  }
}
#description-input{
  display: none;

}
/* Base styles for the input field */
/* #description-input {
  width: 100%;
  display: none;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
  transition: border-color 0.3s ease, box-shadow 0.3s ease; */


/* Focus effect */
/* #description-input:focus {
  border-color: #74b6ef;
  box-shadow: 0 0 5px rgba(116, 182, 239, 0.5);
} */

/* Hover effect */


/* Responsive design */




</style>
<head>
    <!-- تعليق: تحديد ترميز النص والعرض والمقياس الأولي للصفحة -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- تعليق: تحديد العنوان الذي يظهر في شريط العناوين -->
    <title>تقييم الجامعات</title>

    <!-- تعليق: ربط ملفات CSS لـ Bootstrap و Font Awesome و Google Fonts -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>

    <!-- تعليق: بداية قسم الصفحة الرئيسي -->
    <div class="container">
        <!-- تعليق: إضافة لوغو الجامعة -->
        <div class="img-logo">
            <img src="./logo.png" alt="logo" style="max-width: 200px; display: block; margin: 0 auto;">
        </div>
        <!-- تعليق: عنوان القسم -->
        <div class="section-title">قيـَم الجامعـة</div>
        <!-- تعليق: حاوية للتقييمات -->
        <div id="ratings-container"></div>
        <!-- تعليق: تضمين ملفات JavaScript هنا -->
    </div>
    <div class="button-save">
        <button type="button" class="open-modal" data-open="modal1">حفظ التقييم</button>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
    </div>
    <!-- تعليق: بداية الكود JavaScript لإنشاء قسم التقييم -->
   
    <!-- تعليق: ربط ملف JavaScript خارجي -->
    <script src="./js/script.js">
        const titlesAndIds = [
    {
      //العنوان الرئيسي للقسم
      title: "تقييم الاكاديمي",
      //  القيم التي ستظهر تحت القسم
      values: [
        { title: 'المقررات الدراسية', id: 'Lectures' },
        { title: 'المحاضرات', id: 'TeachingStaff' },
        { title: ' طاقم التدريس', id: 'Courses' },
      ],
    },
    {
      title: "تقييم خدمي",
      values: [
        { title: 'الامن', id:'security_services'},
        { title: 'الاستجابه لاحتياجات الطلاب', id: 'responding-students' },
        { title: 'تنسيق نزولات ميدانيه للتدريب', id: 'coordinating-field-trips-training' },
        { title: 'تاهيل الطلاب لسوق العمل', id: 'preparing-students-labor-market' },
      ],
    },
    {
      //العنوان الرئيسي للقسم
      title: "تقييم مالي",
      //  القيم التي ستظهر تحت القسم
      values: [
        { title: 'الرسوم$', id: 'inancialcharges' },
        
      ],
    },
    {
      title: "تقييم الانشطه",
      values: [
        { title: 'الرحلات', id: 'trips' },
              { title: 'المسابقات', id: 'contests' },
              { title: 'الفعاليات', id: 'Events' },
              { title: 'اشراك الطلاب في نشاطات', id: 'studient_activities' },
  
  
      ],
    }
  ];



    

function createRatingSection(title, values, starsId, includeComment = true) {
  //  تعليق: إنشاء القسم الرئيسي
  const sectionDiv = document.createElement("div");
  sectionDiv.classList = "rating-section";
  // تعليق: إنشاء عنوان  القسم الرئيسي
  const sectionTitle = document.createElement("h3");
  sectionTitle.classList = "section-title";
  sectionTitle.append(title);
  sectionDiv.append(sectionTitle);
  for (const value of values) {
    // تعليق: إنشاء قسم التقييم
    const ratingSection = document.createElement("div");
    ratingSection.className = "rating";

    // تعليق: إنشاء عنصر التقييم
    const ratingItem = document.createElement("div");
    ratingItem.className = "rating-item";

    // تعليق: إنشاء عنصر العنوان
    const titleDiv = document.createElement("div");
    titleDiv.classList = "rating-title";
    const titleSpan = document.createElement("span");

    titleSpan.textContent = value.title;
    titleDiv.appendChild(titleSpan);
    // تعليق: إنشاء عنصر النجوم
    const starsDiv = document.createElement("div");
    starsDiv.id = value.id;
    for (let i = 1; i <= 5; i++) {
      const star = document.createElement("span");
      star.className = "fa-solid fa-star star";
      
      star.dataset.value = i;
      starsDiv.appendChild(star);
    }

    // تعليق: إنشاء حاوية الوصف

    // تعليق: إنشاء نص للحاوية
    const inputGroupText = document.createElement("span");

    inputGroupText.className = "input-group-text";
    inputGroupText.id = "inputGroup-sizing-sm";
    inputGroupText.textContent = "نشر";
    if (includeComment) {
      ratingItem.appendChild(titleDiv);
      ratingItem.appendChild(starsDiv);
      ratingSection.appendChild(ratingItem);
      sectionDiv.appendChild(ratingItem);
    }
  }
  return sectionDiv;
}

const ratingsContainer = document.getElementById("ratings-container");

titlesAndIds.forEach(({ title, values }) => {
  const ratingSection = createRatingSection(title, values);
  ratingsContainer.appendChild(ratingSection);
});

function setRating(ratingContainer, rating) {
  const stars = ratingContainer.querySelectorAll(".star");
  for (let i = 0; i < stars.length; i++) {
    if (i < rating) {
      stars[i].classList.add("active");
    } else {
      stars[i].classList.remove("active");
    }
  }
}

function handleRatingClick(event) {
  const selectedStar = event.target;
  const ratingContainer = selectedStar.parentNode;
  const rating = parseInt(selectedStar.getAttribute("data-value"));

  setRating(ratingContainer, rating);
}

document.body.addEventListener("click", handleRatingClick, true);
document.body.addEventListener("mouseover", handleRatingHover, true);

    </script>
</body>

</html>