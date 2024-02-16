<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poetry Paradise</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
   
 <link rel="stylesheet" href="m.css" />
</head>
<body>
    <header>
        <!-- <h1>Welcome to Poetry Paradise</h1> -->
        <h1>رُوحُ قلمْ وتمرِّدٍ حِبريٍّ … فتَمَعَّنوا 🖊🤍<h1>
            <h3>✨سَتَجِدُ كُلَّ ما يروي ظَمَأَ قِرائتِكَ من مختلفِ النصوصِ التي تدَفَّقَت من مزجِ المشاعرِ ✨<h3>
    </header>

    <nav>
    <a href="#" onclick="showModal()">تفاصيل الموقع ومين احنا ؟</a>

<div id="modalOverlay" class="modal-overlay">
  <div class="modal">
    <span class="close" onclick="hideModal()">&times;</span>
    <p> ولله هو شوفو أنا خيط من نسج معجمي ^_^ فحبيت أعمل هالصفحه للي بيحب يقرأ ومنها بحاول شوي شوي أنشر كتاباتي فكونوا بخير والله يوفقكم ... أهم شي حقوق النشر ترا اه؟؟  </p>
  </div>
</div>
<a href="#" style="font-size: larger; color: #FFFFCC; font-weight: bold; text-decoration: underline;">أهلا وسهلا يا قراء</a>

    <a href="#" id="contactLink">بنحب رأيكم كمان  </a>
</nav>
<div id="contactForm" style="display:none; border: 1px solid #ccc; padding: 20px; background-color: #f9f9f9;">
   
    <label for="name">الاسم:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="rating">تقييمكم:</label><br>
    <div class="star-rating">
        <input type="radio" id="star5" name="rating" value="5"><label for="star5"></label>
        <input type="radio" id="star4" name="rating" value="4"><label for="star4"></label>
        <input type="radio" id="star3" name="rating" value="3"><label for="star3"></label>
        <input type="radio" id="star2" name="rating" value="2"><label for="star2"></label>
        <input type="radio" id="star1" name="rating" value="1"><label for="star1"></label>
    </div>
    <label for="notes">أي أفكار أو ملاحظات؟؟:</label><br>
    <textarea id="notes" name="notes"></textarea><br>
    <button onclick="submitForm()">تم انهاء المهمه بنجاح</button>
</div>

<script>
    function showModal() {
  var modalOverlay = document.getElementById("modalOverlay");
  modalOverlay.style.display = "block";
}

function hideModal() {
  var modalOverlay = document.getElementById("modalOverlay");
  modalOverlay.style.display = "none";
}

document.getElementById("contactLink").addEventListener("click", function() {
    document.getElementById("contactForm").style.display = "block";
});

function submitForm() {
    var name = document.getElementById("name").value;
    var rating = document.querySelector('input[name="rating"]:checked').value;
    var notes = document.getElementById("notes").value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "submit_form.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            alert(xhr.responseText); 
        }
    };
    xhr.send("name=" + name + "&rating=" + rating + "&notes=" + notes);
}

</script>

<h4 >كله بوساطه كيان قلم فتاة تهوى العجم والبلاغه 🖊️🖊️<h4>
    <div class="poet-list">
        <a href="poet-details.php?poet=P1" class="poet-card" target="_blank">
            <h2 class="poet-name">نحنُ مُخَدَّرين
</h2>
            <p class="poet-description"> بالوراءِ من الذاكرة
</p>
        </a>
        <a href="poet-details.php?poet=P2" class="poet-card" target="_blank">
            <h2 class="poet-name">أَلعَنُ مِنَ</h2>
            <p class="poet-description">اللَظى حفنةٌ مِن خُطاك  </p>
        </a>
    </div>
    <div class="poet-list">
        <a href="poet-details.php?poet=P3" class="poet-card" target="_blank">
            <h2 class="poet-name">مُذ قِدَمٍ  
</h2>
            <p class="poet-description">  حِينَ تمازَجَ قلبكَ مع قلبي  
</p>
        </a>

        <a href="poet-details.php?poet=P4" class="poet-card" target="_blank">
            <h2 class="poet-name">محقُ
</h2>
            <p class="poet-description">قُدُسِ الوَلَه انتَ</p>
        </a>
    </div>
    <div class="poet-list">
        <a href="poet-details.php?poet=P5" class="poet-card" target="_blank">
            <h2 class="poet-name">كتبتُ  
</h2>
            <p class="poet-description"> وكتبتْ  </p>
        </a>
        <a href="poet-details.php?poet=P6" class="poet-card" target="_blank">
            <h2 class="poet-name">إِلتَحِفْ</h2>
            <p class="poet-description">مِن غِطاءِ</p>
        </a>
    </div>
    <div class="poet-list">
        <a href="poet-details.php?poet=P7" class="poet-card" target="_blank">
            <h2 class="poet-name">عيناكَ كصدفِ محارِ نصعِهِمآ يَشُّدانِني
</h2>
            <p class="poet-description">ومن رتابَةِ هندَسَتِهمآ بالرَّمَقِ القُدُسِيِّ يُغدِقانِني
</p>
        </a>
        <a href="poet-details.php?poet=P8" class="poet-card" target="_blank">
            <h2 class="poet-name">حتّى الهواء المحيطيّ</h2>
            <p class="poet-description">الذي يدجج السمآ أشعرهُ مُبتذلاً</p>
        </a>
    </div>
    <div class="poet-list">
        <a href="poet-details.php?poet=P9" class="poet-card" target="_blank">
            <h2 class="poet-name">َزَفَت خَطَّاطاتِه</h2>
            <p class="poet-description">يوماً من غَشى الاشتياقِ ؛
</p>
        </a>
        <a href="poet-details.php?poet=P10" class="poet-card" target="_blank">
            <h2 class="poet-name">انا
</h2>
            <p class="poet-description">لستُ بميّالِ</p>
        </a>
    </div>
    <div class="poet-list">
        <a href="poet-details.php?poet=P11" class="poet-card" target="_blank">
            <h2 class="poet-name">حُبِّي</h2>
            <p class="poet-description">قِطعٌ</p>
        </a>
        <a href="poet-details.php?poet=P12" class="poet-card" target="_blank">
            <h2 class="poet-name">🖤
</h2>
            <p class="poet-description">عَلَّنآ</p>
        </a>
    </div>
    <div class="poet-list">
        <a href="poet-details.php?poet=P13" class="poet-card" target="_blank">
            <h2 class="poet-name">لَوْ 
</h2>
            <p class="poet-description">أنَّكَ تدارَكتَ قُدُسَ حُبٍّ </p>
        </a>


        <a href="poet-details.php?poet=P14" class="poet-card" target="_blank">
            <h2 class="poet-name">ماذا </h2>
            <p class="poet-description">لو جاء مُعتَذِراً</p>
        </a>
    </div>
    <div class="poet-list">
        <a href="poet-details.php?poet=P16" class="poet-card" target="_blank">
            <h2 class="poet-name">تُحفَرُ  
</h2>
            <p class="poet-description">على قلبي نسائِمُكِ</p>
        </a>

        
        <a href="poet-details.php?poet=P15" class="poet-card" target="_blank">
            <h2 class="poet-name">بكامِلِ نرجسيّة </h2>
            <p class="poet-description">حين يقولونَ </p>
        </a>
    </div>




    </div>
    <div class="poet-list">
        <a href="poet-details.php?poet=P17" class="poet-card" target="_blank">
            <h2 class="poet-name">من بين إقحامٍ 
        </h2>
            <p class="poet-description">لرمدِ كلماتي</p>
        </a>

        
        <a href="poet-details.php?poet=P18" class="poet-card" target="_blank">
            <h2 class="poet-name">آهٍ </h2>
            <p class="poet-description">ما أردى </p>
        </a>
    </div>
    <div class="poet-list">
        <a href="poet-details.php?poet=P19" class="poet-card" target="_blank">
            <h2 class="poet-name">أفي 
عيناكَ
        </h2>
            <p class="poet-description">إيقاعٌ</p>
        </a>

        
        <a href="poet-details.php?poet=P20" class="poet-card" target="_blank">
            <h2 class="poet-name">ماذا </h2>
            <p class="poet-description">عساي </p>
        </a>
    </div>



    <div class="poet-list">
        <a href="poet-details.php?poet=P21" class="poet-card" target="_blank">
            <h2 class="poet-name"> يا مُرَّ 
 
        </h2>
            <p class="poet-description">هَمّيَّ الجميل</p>
        </a>

        
        <a href="poet-details.php?poet=P22" class="poet-card" target="_blank">
            <h2 class="poet-name">أَيُغتالُ
 </h2>
            <p class="poet-description">الوردُ  </p>
        </a>
    </div>





    
    <div class="poet-list">
        <a href="poet-details.php?poet=P23" class="poet-card" target="_blank">
            <h2 class="poet-name"> وكيفَ
 
        </h2>
            <p class="poet-description">يُقحَلُّ </p>
        </a>

        
        <a href="poet-details.php?poet=P24" class="poet-card" target="_blank">
            <h2 class="poet-name">ما بالُكَ
 </h2>
            <p class="poet-description">يا بالي  </p>
        </a>
    </div>





    <div class="poet-list">
        <a href="poet-details.php?poet=P25" class="poet-card" target="_blank">
            <h2 class="poet-name"> الهوامِـش 
 
        </h2>
            <p class="poet-description">لَم  </p>
        </a>

        
        <a href="poet-details.php?poet=P26" class="poet-card" target="_blank">
            <h2 class="poet-name">ماذا 
 </h2>
            <p class="poet-description">لو
 </p>
        </a>
    </div>





    
    <div class="poet-list">
        <a href="poet-details.php?poet=P27" class="poet-card" target="_blank">
            <h2 class="poet-name"> أتعرفُ 
 
        </h2>
            <p class="poet-description">ما   </p>
        </a>

        
        <a href="poet-details.php?poet=P28" class="poet-card" target="_blank">
            <h2 class="poet-name">غَزَارَةُ  
 </h2>
            <p class="poet-description">مَطَرْ
 </p>
        </a>
    </div>

    <div class="poet-list">
        <a href="poet-details.php?poet=P29" class="poet-card" target="_blank">
            <h2 class="poet-name"> ليتَ  
 
        </h2>
            <p class="poet-description">الأجدادَ    </p>
        </a>

        
        <a href="poet-details.php?poet=P30" class="poet-card" target="_blank">
            <h2 class="poet-name">ولكنَنّآ    
 </h2>
            <p class="poet-description">وبعدَ الحاصِلِ
 </p>
        </a>
    </div>





    <div class="poet-list">
        <a href="poet-details.php?poet=P31" class="poet-card" target="_blank">
            <h2 class="poet-name"> وامّا  
 
        </h2>
            <p class="poet-description">عن الصديقٰ    </p>
        </a>

        
        
    </div>

    <?php
$name = $_POST['name'] ?? '';
$rating = $_POST['rating'] ?? '';

$to = "your@email.com";
$subject = "New Rating from $name";
$message = "Rating: $rating stars";
$headers = "From: $name\r\n";

mail($to, $subject, $message, $headers);

echo "<!-- Thank you for your rating! -->"; 
?>
</body>
</html>
 






<!-- 




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poet Details</title>
    <link rel="stylesheet" href="m.css" />
</head>
<body>
    <header>
        <h1>Poet Details</h1>
    </header>

    <nav>
        <a href="#" onclick="window.close();">Close</a>
    </nav>

    <div class="poet-details">
        <?php
            // Retrieve the poet name from the query parameter
            $poet = $_GET['poet'];

            // Display the poet details based on the poet name
            if ($poet == "emily_dickinson") {
                echo "<h2 class='poet-name'>نحنُ مُخَدَّرين …
                </h2>";
                echo "<p class='poet-description'>نحنُ مُخَدَّرين …
                بالوراءِ من الذاكرة….
                    بشكلٍ تدريجيّ….
                      بِضعٌ من اللآإدراكِ بدايةً…..
                             لكنّهُ يُحشدُ فينا حتّى غَدّق….
                                                 كَالكافيين تماماً …
                               ولكنْ أشدَّ خطورة….
                       يُطغى على العُقولِ بلا رحمة…..
                   أشعرهُ صدعاً لا يمكن إِلفاتهُ ولا يمكن جبره
              لا حِلّ ولا حَلل لذاك الجوفِ ….
         كَ قناعٍ زائفٍ للهروبِ من الواقِع …
      لكنّنا ندركُ بأن الواقعِ قد هرب منّا ….
                         وتواقَع….
                             اضحينآ ضحاياه….
                            ذاك العالمُ المتردِّي سافِكَ اليقين…
                             أَشعُرُهُ يسلبُ منّا شخوصنآ حتى              تنحتَ أمامناً شخوصاً ليست بالشُّخوصِ … بل بعالمٍ موازٍ … ربّمآ تحت ركودِ التوقعاتِ … والآمالِ…
      وماذا يرفاعلُ الذي يظنهم حقيقةً وانهُ بالتجزءاتِ نقصاً مُعَبِّقِ….؟
      هُوّ سُمٌّ ذاك الدُوبامين التجرّعيّ….
      وان اردَّتَ جولةً للأخبار فيها غوصاً … فستُضحي غنيمة التربُّطِّ لأنَّك بلا عتادٍ ولا قوتٍ للاستباحاتِ ..💔
      ولكنّ ربُّ الكونِ اعظمِ وسَـ يُسقى كلُّ ساقٍ بما سقى ولن يظلم ربُّكَ احدآ.. والوعدُ وعداً قائمآ</p>";
            } elseif ($poet == "langston_hughes") {
                echo "<h2 class='poet-name'>Langston Hughes</h2>";
                echo "<p class='poet-description'>A leading figure of the Harlem Renaissance, his poetry reflects the struggles and joys of African Americans.</p>";
            } else {
                echo "<p>Poet not found.</p>";
            }
        ?>
    </div>
</body>
</html> -->
