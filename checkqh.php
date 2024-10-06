<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>طلب رجيع</title>
    <link rel="stylesheet" href="./css/checkqc.css">
</head>
<body>
    <header class="navbar">
        <div class="navbar-container">
            <a href="./" class="navbar-link home-link">الرئيسية</a>
            <a href="#about" class="navbar-link center-link">من نحن</a>
            <a href="https://wa.me/966534435949" class="navbar-link contact-link">تواصل معنا</a>
        </div>
    </header>

    <main>
        <section class="intro">
            <h1>طلب رجيع</h1>

            <!-- Question 1: رقم الصنف إن وجد -->
            <div class="question-container">
                <div class="question-number">1</div>
                <div class="question-text">
                    <label for="item-number" class="question-label">رقم الصنف إن وجد</label>
                    <input type="number" id="item-number" placeholder="ادخل رقم الصنف" class="answer-input">
                </div>
            </div>

            <!-- Question 2: اسم الصنف -->
            <div class="question-container">
                <div class="question-number">2</div>
                <div class="question-text">
                    <label for="item-name" class="question-label">اسم الصنف</label>
                    <input type="text" id="item-name" placeholder="ادخل اسم الصنف" class="answer-input">
                </div>
            </div>

            <!-- Question 3: ملاحظات -->
            <div class="question-container">
                <div class="question-number">3</div>
                <div class="question-text">
                    <label for="notes" class="question-label">ملاحظات</label>
                    <textarea id="notes" placeholder="ادخل ملاحظاتك" class="answer-input large-textarea"></textarea>
                </div>
            </div>

            <!-- Question 4: اسم الجهة المرجعة -->
            <div class="question-container">
                <div class="question-number">4</div>
                <div class="question-text">
                    <label for="returning-department" class="question-label">اسم الجهة المرجعة: مدرسة \ إدارة \ مكتب</label>
                    <input type="text" id="returning-department" placeholder="ادخل الجهة المرجعة" class="answer-input">
                </div>
            </div>

            <!-- Question 5: الاسم الثلاثي -->
            <div class="question-container">
                <div class="question-number">5</div>
                <div class="question-text">
                    <label for="full-name" class="question-label">الاسم الثلاثي</label>
                    <input type="text" id="full-name" placeholder="ادخل اسمك الثلاثي" class="answer-input">
                </div>
            </div>

            <!-- Question 6: السجل المدني -->
            <div class="question-container">
                <div class="question-number">6</div>
                <div class="question-text">
                    <label for="id-number" class="question-label">السجل المدني</label>
                    <input type="tel" id="id-number" placeholder="ادخل السجل المدني" inputmode="numeric" class="answer-input">
                </div>
            </div>

            <!-- Question 7: رقم الجوال -->
            <div class="question-container">
                <div class="question-number">7</div>
                <div class="question-text">
                    <label for="phone-number" class="question-label">رقم الجوال</label>
                    <input type="tel" id="phone-number" placeholder="ادخل رقم الجوال" inputmode="numeric" class="answer-input">
                </div>
            </div>

            <!-- Tech Section -->
            <div class="section-title">أسئلة العضو الفني</div>
            <!-- Question 8: الاسم الثلاثي للعضو الفني -->
            <div class="question-container">
                <div class="question-number">8</div>
                <div class="question-text">
                    <label for="tech-full-name" class="question-label">الاسم الثلاثي للعضو الفني</label>
                    <input type="text" id="tech-full-name" placeholder="ادخل الاسم الثلاثي" class="answer-input">
                </div>
            </div>

            <!-- Question 9: السجل المدني للعضو الفني -->
            <div class="question-container">
                <div class="question-number">9</div>
                <div class="question-text">
                    <label for="tech-id-number" class="question-label">السجل المدني للعضو الفني</label>
                    <input type="tel" id="tech-id-number" placeholder="ادخل السجل المدني" inputmode="numeric" class="answer-input">
                </div>
            </div>

            <!-- Question 10: رقم الجوال للعضو الفني -->
            <div class="question-container">
                <div class="question-number">10</div>
                <div class="question-text">
                    <label for="tech-phone-number" class="question-label">رقم الجوال للعضو الفني</label>
                    <input type="tel" id="tech-phone-number" placeholder="ادخل رقم الجوال" inputmode="numeric" class="answer-input">
                </div>
            </div>

            <!-- Warehouse Section -->
            <div class="section-title">أسئلة أمين مستودع الرجيع</div>
            <!-- Question 11: الاسم الثلاثي لأمين مستودع الرجيع -->
            <div class="question-container">
                <div class="question-number">11</div>
                <div class="question-text">
                    <label for="warehouse-full-name" class="question-label">الاسم الثلاثي لأمين مستودع الرجيع</label>
                    <input type="text" id="warehouse-full-name" placeholder="ادخل الاسم الثلاثي" class="answer-input">
                </div>
            </div>

            <!-- Question 12: السجل المدني لأمين مستودع الرجيع -->
            <div class="question-container">
                <div class="question-number">12</div>
                <div class="question-text">
                    <label for="warehouse-id-number" class="question-label">السجل المدني لأمين مستودع الرجيع</label>
                    <input type="tel" id="warehouse-id-number" placeholder="ادخل السجل المدني" inputmode="numeric" class="answer-input">
                </div>
            </div>

            <!-- Question 13: رقم الجوال لأمين مستودع الرجيع -->
            <div class="question-container">
                <div class="question-number">13</div>
                <div class="question-text">
                    <label for="warehouse-phone-number" class="question-label">رقم الجوال لأمين مستودع الرجيع</label>
                    <input type="tel" id="warehouse-phone-number" placeholder="ادخل رقم الجوال" inputmode="numeric" class="answer-input">
                </div>
            </div>

            <!-- Word File Download Button -->
            <div class="download-container">
                <button type="button" class="download-button">تحميل ملف الرجيع (Word)</button>
                <p>لم يتم وضع الملف</p>
            </div>

            <!-- Submit Button -->
            <div class="submit-container">
                <button type="submit" class="submit-button">إرسال</button>
            </div>
        </section>
    </main>
</body>
</html>