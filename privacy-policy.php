<?php
/*
Template Name: Политика конфиденциальности онлайн
*/
?>

<?php get_header(); ?>

<body>
    <header class="header">
        <div class="header_inner container">
            <!-- Логотип -->

            <?php get_template_part('parts/logo'); ?>
            <!-- Меню десктоп -->

            <?php get_template_part('parts/landing-nav'); ?>


            <!-- Социальные сети    -->
            <?php get_template_part('parts/socials-icons'); ?>

            <?php get_template_part('parts/burger-button'); ?>

    </header>

    <body>
        <main class="container section policy">
            <h1 class="dark-text">Политика конфиденциальности</h1>
            <p class="paragraphe dark-text">Настоящая Политика конфиденциальности (далее — «Политика») определяет порядок обработки и защиты персональных данных пользователей (далее — «Пользователь»), предоставляемых при использовании сайта <?php echo esc_html(get_bloginfo('name')); ?>.</p>

            <h2 class="section__title dark-text">1. Общие положения</h2>
            <p class="paragraphe dark-text">1.1. Оператором персональных данных является <?php the_field('business_name', 'options'); ?>, зарегистрированный по адресу: <?php the_field('operator_address', 'options'); ?>, ИНН: <?php the_field('inn', 'options'); ?>, ОГРН/ОГРНИП: <?php the_field('ogrn', 'options'); ?>.</p>
            <p class="paragraphe dark-text">1.2. Настоящая Политика разработана в соответствии с Федеральным законом от 27.07.2006 №152-ФЗ «О персональных данных» и иными нормативными правовыми актами Российской Федерации в области защиты персональных данных.</p>

            <h2 class="section__title dark-text">2. Персональные данные, обрабатываемые Оператором</h2>
            <p class="paragraphe dark-text">2.1. Оператор обрабатывает персональные данные, предоставляемые Пользователем добровольно при заполнении форм на Сайте, включая:</p>
            <ul>
                <li class="paragraphe dark-text">Имя</li>
                <li class="paragraphe dark-text">Номер телефона</li>
            </ul>
            <p class="paragraphe dark-text">2.2. Также на Сайте осуществляется сбор обезличенных данных о Пользователях с использованием сервисов интернет-статистики, таких как Яндекс.Метрика и VK Pixel, посредством файлов cookie.</p>

            <h2 class="section__title dark-text">3. Цели обработки персональных данных</h2>
            <p class="paragraphe dark-text">3.1. Оператор обрабатывает персональные данные Пользователей в следующих целях:</p>
            <ul>
                <li class="paragraphe dark-text">Обеспечение обратной связи с Пользователем;</li>
                <li class="paragraphe dark-text">Предоставление информации об услугах и ответов на запросы Пользователя;</li>
                <li class="paragraphe dark-text">Улучшение качества работы Сайта и его содержания;</li>
                <li class="paragraphe dark-text">Проведение статистических и иных исследований на основе обезличенных данных.</li>
            </ul>

            <h2 class="section__title dark-text">4. Правовые основания обработки персональных данных</h2>
            <p class="paragraphe dark-text">4.1. Оператор обрабатывает персональные данные Пользователя на основании:</p>
            <ul>
                <li class="paragraphe dark-text">Согласия Пользователя на обработку его персональных данных;</li>
                <li class="paragraphe dark-text">Необходимости исполнения договора, стороной которого является Пользователь;</li>
                <li class="paragraphe dark-text">Иных оснований, предусмотренных законодательством Российской Федерации.</li>
            </ul>

            <h2 class="section__title dark-text">5. Условия обработки и хранения персональных данных</h2>
            <p class="paragraphe dark-text">5.1. Обработка персональных данных осуществляется с соблюдением принципов и правил, предусмотренных законодательством Российской Федерации.</p>
            <p class="paragraphe dark-text">5.2. Персональные данные Пользователей хранятся в течение срока, необходимого для достижения целей обработки, или в течение срока, установленного законодательством Российской Федерации.</p>
            <p class="paragraphe dark-text">5.3. Оператор принимает необходимые организационные и технические меры для защиты персональных данных от неправомерного или случайного доступа, уничтожения, изменения, блокирования, копирования, распространения, а также от иных неправомерных действий третьих лиц.</p>

            <h2 class="section__title dark-text">6. Передача персональных данных третьим лицам</h2>
            <p class="paragraphe dark-text">6.1. Оператор не передает персональные данные Пользователей третьим лицам, за исключением случаев, предусмотренных законодательством Российской Федерации.</p>
            <p class="paragraphe dark-text">6.2. Обезличенные данные Пользователей, собираемые с использованием сервисов интернет-статистики, используются для анализа поведения Пользователей на Сайте и улучшения его содержания.</p>

            <h2 class="section__title dark-text">7. Права Пользователя</h2>
            <p class="paragraphe dark-text">7.1. Пользователь имеет право:</p>
            <ul>
                <li class="paragraphe dark-text">Получать информацию, касающуюся обработки его персональных данных;</li>
                <li class="paragraphe dark-text">Требовать уточнения, блокирования или уничтожения своих персональных данных в случае, если они являются неполными, устаревшими, неточными, незаконно полученными или не являются необходимыми для заявленной цели обработки;</li>
                <li class="paragraphe dark-text">Отозвать свое согласие на обработку персональных данных, направив соответствующее уведомление Оператору по адресу электронной почты: <?php the_field('operator_email'); ?>.</li>
            </ul>

            <h2 class="section__title dark-text">8. Использование файлов cookie</h2>
            <p class="paragraphe dark-text">8.1. Сайт использует файлы cookie для обеспечения его корректной работы и улучшения пользовательского опыта.</p>
            <p class="paragraphe dark-text">8.2. Пользователь может настроить параметры использования файлов cookie в настройках своего веб-браузера.</p>

            <h2 class="section__title dark-text">9. Изменения в Политике конфиденциальности</h2>
            <p class="paragraphe dark-text">9.1. Оператор имеет право вносить изменения в настоящую Политику. Новая редакция Политики вступает в силу с момента ее размещения на Сайте, если иное не предусмотрено новой редакцией Политики.</p>

            <h2 class="section__title dark-text">10. Контактная информация</h2>
            <p class="paragraphe dark-text">По всем вопросам, связанным с обработкой персональных данных, Пользователь может обратиться к Оператору по следующим контактным данным:</p>
            <ul>
                <li class="paragraphe dark-text">
                    Адрес:
                    <?php
                    $delivery_address = get_field('delivery_address', 'options');
                    $operator_address = get_field('operator_address', 'options');
                    echo esc_html($delivery_address ? $delivery_address : $operator_address);
                    ?>
                </li>

                <li class="paragraphe dark-text">
                    Электронная почта: <a href="mailto:<?php the_field('operator_email', 'options'); ?>" class="text-underline dark-text"><?php the_field('operator_email', 'options'); ?></a>
                </li>
                <li class="paragraphe dark-text">
                    Телефон:
                    <?php
                    $raw_phone = get_field('tel_number', 'options');

                    // Удалим все лишние символы (кроме цифр) для href
                    $clean_phone = preg_replace('/\D+/', '', $raw_phone);

                    // Форматируем номер для отображения: +7 999 166 66 66
                    if (preg_match('/^7?(\d{3})(\d{3})(\d{2})(\d{2})$/', $clean_phone, $matches)) {
                        $formatted_phone = "+7 {$matches[1]} {$matches[2]} {$matches[3]} {$matches[4]}";
                    } else {
                        $formatted_phone = $raw_phone; // если не совпадает, оставим как есть
                    }
                    ?>

                    <a href="tel:+<?php echo esc_attr($clean_phone); ?>" class="text-underline dark-text">
                        <?php echo antispambot($formatted_phone); ?>
                    </a>

                </li>

            </ul>

        </main>





        <?php get_footer(); ?>
        <?php get_template_part('parts/mobile-menu-landing'); ?>

        <?php wp_footer(); ?>
    </body>

    </html>
