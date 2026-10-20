<?php
// --- Название и описание (Задание 1) ---
$siteName = "Косметический салон «К/С»";
$pageTitle = "Главная";
$description = "Профессиональный уход за лицом, волосами и ногтями. Комфортная атмосфера и индивидуальный подход к каждой клиентке.";

// --- Контакты (Задание 2) ---
$address = "г. Оренбург, ул. Советская, д. 15";
$phone = "+7 (3532) 45-67-89";
$email = "info@ks-salon.ru";
$workHours = "Ежедневно с 9:00 до 20:00";

// --- Данные карточки (Задание 3, Вариант 8) ---
$procedureName = "Глубокое увлажнение кожи";
$procedureDesc = "Интенсивная процедура для восстановления водного баланса и упругости кожи. Подходит для всех типов.";
$procedureDuration = "90 минут"; // дополнительная характеристика
$imagePath = "https://queenlux.by/wp-content/uploads/1598249978_23.jpg"; // можно взять картинку с вашего сайта
$imageAlt = "Косметическая процедура увлажнения";

// --- Расчёт стоимости (Задание 4, Вариант 8) ---
const MATERIALS_COST = 350; // Расходные материалы (фиксировано)
$procedurePrice = 1400; // Цена одной процедуры
$procedureCount = 2;    // Количество процедур

$proceduresTotal = $procedurePrice * $procedureCount; // Стоимость процедур
$grandTotal = $proceduresTotal + MATERIALS_COST;      // Общая сумма

// --- Аванс (Задание 5) ---
const PREPAYMENT_PERCENT = 30;
$prepayment = $grandTotal * (PREPAYMENT_PERCENT / 100);
$remainder = $grandTotal - $prepayment;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ВЫВОД ЗАГОЛОВКА ВКЛАДКИ (Задание 1) -->
    <title><?php echo $pageTitle . " — " . $siteName; ?></title>
    
    <!-- ПОДКЛЮЧЕНИЕ ШРИФТОВ GOOGLE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans:wght@400;600&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body { 
            background-color: #fcecec; 
            color: #3a3a3a; 
            line-height: 1.6; 
            font-family: 'Open Sans', sans-serif;
        }
        a { text-decoration: none; color: inherit; }

        /* --- ШАПКА НА ВСЮ ШИРИНУ --- */
        header {
            display: flex;
            align-items: center;
            padding: 15px 5%;
            background-color: #f8dede;
            border-bottom: 1px solid #d9baba;
            position: sticky;
            top: 0;
            z-index: 1000;
            width: 100%;
        }
        .logo { 
            font-family: 'Playfair Display', serif;
            font-size: 28px; 
            font-weight: 700; 
            color: #8B3A4A; 
            margin-right: 30px;
        }
        nav { flex-grow: 1; }
        nav ul { 
            display: flex; 
            list-style: none; 
            gap: 30px; 
            justify-content: flex-end;
        }
        nav ul li a { 
            font-family: 'Montserrat', sans-serif;
            font-size: 15px; 
            font-weight: 600;
            color: #5a4a4a; 
            transition: color 0.3s; 
        }
        nav ul li a:hover { color: #8B3A4A; }

        /* --- БЛОК "КРАСОТА И УХОД" НА ФОНЕ ФОТО --- */
        #home {
            position: relative;
            width: 100%;
            height: 500px;
            background: url('https://img.magnific.com/free-photo/top-view-beauty-products-with-copy-space_23-2149446515.jpg') no-repeat center center/cover;
            display: flex;
            align-items: center;
            padding: 0 5%;
            color: #fff;
        }
        #home::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }
        .hero-text {
            position: relative;
            z-index: 2;
            max-width: 600px;
            text-align: left;
        }
        .hero-text h1 { 
            font-family: 'Playfair Display', serif;
            font-size: 56px; 
            font-weight: 700;
            margin-bottom: 15px; 
            color: #fff;
        }
        .hero-text p { 
            font-family: 'Open Sans', sans-serif;
            font-size: 18px; 
            margin-bottom: 25px; 
        }
        .hero-text p:last-of-type {
            font-size: 15px;
            color: #f0dada;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: #d9baba;
            color: #fff;
            border-radius: 5px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            font-size: 15px;
            transition: background 0.3s;
            border: none;
            cursor: pointer;
        }
        .btn:hover { background-color: #8B3A4A; }

        /* --- СЕКЦИЯ "ПОЧЕМУ ВЫБИРАЮТ НАС" --- */
        section { padding: 60px 5%; border-bottom: 1px solid #e0caca; }
        
        h2 {
            font-family: 'Playfair Display', serif;
            font-size: 36px;
            font-weight: 700;
            text-align: left;
            margin-bottom: 30px;
            color: #8B3A4A;
        }

        #why-us .features {
            display: flex;
            justify-content: flex-start;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 30px;
        }
        .feature-item {
            flex: 1;
            min-width: 200px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            font-size: 15px;
            color: #5a4a4a;
            padding: 20px;
            background-color: #f8dede;
            border-radius: 8px;
            text-align: left;
        }

        /* --- ДОПОЛНИТЕЛЬНЫЕ СТИЛИ ДЛЯ НОВЫХ БЛОКОВ --- */
        .contact-block {
            background: #f8dede;
        }
        .card-container {
            display: flex; 
            gap: 30px; 
            flex-wrap: wrap; 
            align-items: flex-start; 
            background: #fff; 
            padding: 20px; 
            border-radius: 8px;
        }
        .card-img {
            width: 300px; 
            height: 200px; 
            object-fit: cover; 
            border-radius: 8px;
        }
        .calc-box {
            background: #fff; 
            padding: 20px; 
            border-radius: 8px; 
            margin-top: 20px; 
            max-width: 400px;
            border: 1px solid #e0caca;
        }

        /* --- ПОДВАЛ --- */
        footer {
            background-color: #f8dede;
            padding: 30px 5%;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
            font-size: 14px;
            color: #5a4a4a;
            border-top: 1px solid #d9baba;
            font-family: 'Open Sans', sans-serif;
        }
        .footer-col { display: flex; flex-direction: column; gap: 10px; }
        .footer-col a { text-decoration: underline; }
        .footer-col a:hover { color: #8B3A4A; }
    </style>
</head>
<body>

    <header>
        <!-- ВЫВОД НАЗВАНИЯ САЙТА (Задание 1) -->
        <div class="logo"><?php echo $siteName; ?></div>
        <nav>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="services.html">Услуги</a></li>
                <li><a href="about.html">О нас</a></li>
                <li><a href="about.html#contacts">Контакты</a></li>
                <li><a href="about.html#contacts" class="btn" style="padding: 5px 15px; font-size: 13px;">Записаться</a></li>
            </ul>
        </nav>
    </header>

    <section id="home">
        <div class="hero-text">
            <!-- ВЫВОД ЗАГОЛОВКА И ОПИСАНИЯ (Задание 1) -->
            <h1><?php echo $pageTitle; ?></h1>
            <p><?php echo $description; ?></p>
            <p style="font-size: 15px; color: #f0dada;">Профессиональный уход и комфортная атмосфера</p>
            <a href="about.html#contacts" class="btn">Записаться</a>
        </div>
    </section>

    <!-- ================= НОВЫЙ БЛОК: КАРТОЧКА (Задание 3) ================= -->
    <section id="procedure-card">
        <h2>Наша услуга</h2>
        <div class="card-container">
            <!-- ВЫВОД ПУТИ И ALT ИЗ ПЕРЕМЕННЫХ -->
            <img src="<?php echo $imagePath; ?>" alt="<?php echo $imageAlt; ?>" class="card-img">
            <div style="flex: 1; min-width: 250px;">
                <h3 style="font-size: 24px; color: #8B3A4A; margin-bottom: 10px;"><?php echo $procedureName; ?></h3>
                <p style="margin-bottom: 10px;"><?php echo $procedureDesc; ?></p>
                <p><strong>Продолжительность:</strong> <?php echo $procedureDuration; ?></p>
            </div>
        </div>
    </section>

    <!-- ================= НОВЫЙ БЛОК: РАСЧЁТ (Задание 4 и 5) ================= -->
    <section id="calculation">
        <h2>Стоимость и оплата</h2>
        
        <div class="calc-box">
            <h3 style="color: #8B3A4A; margin-bottom: 10px;">Расчёт стоимости</h3>
            <p>Цена процедуры: <strong><?php echo $procedurePrice; ?> руб.</strong></p>
            <p>Количество процедур: <strong><?php echo $procedureCount; ?> шт.</strong></p>
            <p>Стоимость процедур: <strong><?php echo $proceduresTotal; ?> руб.</strong></p>
            <p>Расходные материалы: <strong><?php echo MATERIALS_COST; ?> руб.</strong></p>
            <hr style="margin: 10px 0; border: none; border-top: 1px solid #d9baba;">
            <p style="font-size: 20px; color: #8B3A4A;"><strong>Итого: <?php echo $grandTotal; ?> руб.</strong></p>
        </div>

        <!-- БЛОК АВАНСА -->
        <div class="calc-box" style="background: #f8dede;">
            <h3 style="color: #8B3A4A; margin-bottom: 10px;">Условия оплаты</h3>
            <p>Общая стоимость: <strong><?php echo $grandTotal; ?> руб.</strong></p>
            <p>Аванс (<?php echo PREPAYMENT_PERCENT; ?>%): <strong><?php echo $prepayment; ?> руб.</strong></p>
            <p>Остаток к оплате: <strong><?php echo $remainder; ?> руб.</strong></p>
        </div>
    </section>

    <section id="why-us">
        <h2>Почему выбирают нас</h2>
        <div class="features">
            <div class="feature-item">Профессиональная команда</div>
            <div class="feature-item">Уютная атмосфера</div>
            <div class="feature-item">Индивидуальный подход</div>
            <div class="feature-item">Высокое качество</div>
        </div>
    </section>

    <!-- ================= НОВЫЙ БЛОК: КОНТАКТЫ (Задание 2) ================= -->
    <section id="contacts-block" class="contact-block">
        <h2>Контакты</h2>
        <p><strong>Адрес:</strong> <?php echo $address; ?></p>
        <p><strong>Телефон:</strong> <?php echo $phone; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <!-- ИСПОЛЬЗОВАНИЕ КОНКАТЕНАЦИИ (Задание 2, п.3) -->
        <p><?php echo "Режим работы: " . $workHours; ?></p>
    </section>

    <footer>
        <div class="footer-col">
            <span><?php echo $siteName; ?></span>
            <span>2026</span>
        </div>
        <div class="footer-col">
            <!-- Вывод телефона и адреса из переменных (Задание 2, п.4) -->
            <span><?php echo $phone; ?></span>
            <span><?php echo $address; ?></span>
        </div>
        <div class="footer-col">
            <a href="#">Вконтакте</a>
            <a href="#">Instagram</a>
            <a href="#">MAX</a>
        </div>
    </footer>

</body>
</html>
