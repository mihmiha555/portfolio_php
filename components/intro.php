<section class="intro">
    <div class="container">

        <h2 class="subheading">Давайте познакомимся</h2>

        <figure class="user-image">
            <img style="border-radius: 50%" src="<?= $image ?>" alt="Фотография <?= $name ?>">
        </figure>

        <div>
            <h3>Пара слов о&nbsp;себе</h3>
            <p>Всем привет, меня зовут <?= $name ?> и&nbsp;я&nbsp;<span class="term">системный программист</span>.
                В&nbsp;сфере моих интересов находятся операционные системы, процессорные архитектуры,
                компиляторы и&nbsp;низкоуровневая оптимизация. Мне всегда хотелось разобраться в&nbsp;том, как
                компьютеры работают на&nbsp;самом деле.</p>
            <p>Я&nbsp;студент <span class="term">МФ&nbsp;МГТУ им. Н.Э. Баумана</span>, специальность &laquo;Информатика
                и&nbsp;вычислительная техника&raquo;.
                Окончил бакалавриат в&nbsp;2021&nbsp;году, в&nbsp;настоящий момент учусь в&nbsp;магистратуре.
            </p>
        </div>

        <div>
            <h3>Чем могу быть полезен</h3>
            <p>Могу разрабатывать практически весь спектр системного&nbsp;ПО, начиная от&nbsp;системных утилит
                и&nbsp;библиотек и&nbsp;заканчивая драйверами устройств. Хорошо знаю несколько компьютерных архитектур
                (<span class="term">x86, NIOS2, RISC V</span>).
                Имеется неплохой опыт работы непосредственно с&nbsp;ядром <span class="term">Linux</span>,
                в&nbsp;частности,
                в&nbsp;области аппаратной виртуализации.
                Пишу в&nbsp;основном на&nbsp;<span class="term">C</span> и&nbsp;<span class="term">ассемблере</span>,
                для
                создания объектно-ориентированных систем использую
                <span class="term">C++</span>.
            </p>
        </div>

        <div class="skills">
            <h3>Мои навыки</h3>

            <div class="buttons-block">
                <h3>Сортировать по:</h3>
                <button class="sort-button" data-attr="name">названию навыка</button>
                <button class="sort-button" data-attr="level">уровню владения</button>
            </div>

            <dl class="skills-list">
                <!-- Content is generated using JS -->
            </dl>
        </div>
    </div>
</section>
