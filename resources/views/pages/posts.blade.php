@extends('layouts.page')

@section('style')
    @vite('resources/sass/pages/posts.sass')
@endsection

@section('content')
<ul class="posts no-scroll">
    <li>
        <img src="" alt="" class="logo">
        <p class="preview">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, velit! Deleniti vel beatae eaque, totam mollitia quas molestias, illo autem atque quia incidunt distinctio ducimus natus pariatur ratione reiciendis laboriosam.
        </p>
        <p class="body">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis a quia, deleniti cum natus dicta nesciunt consectetur et necessitatibus eos culpa, excepturi inventore, cupiditate voluptatem nulla beatae mollitia aliquam? Cupiditate!
            Nobis, doloribus expedita ipsa cum, dignissimos dolorem aperiam temporibus dolore et hic eveniet? Animi est voluptatibus aliquam, quibusdam saepe impedit incidunt quos vel deserunt. Rem corporis dolor quidem dolore sequi?
            Facere possimus expedita velit, in ullam eaque rem ex eveniet minus, consequuntur totam, rerum qui ducimus asperiores? Amet exercitationem labore expedita delectus inventore dicta fugiat sunt quia ipsum dolorum. A?
            Ipsa quod possimus magnam unde. Eligendi quod eveniet, ipsam animi asperiores alias deleniti. Nulla vero dolores animi reprehenderit officiis aliquam perspiciatis provident illo. Nisi, sed modi animi harum totam asperiores.
            Tempore quaerat sequi voluptatem beatae maiores magnam perspiciatis consectetur qui quis. Totam dignissimos ducimus iste aliquid quidem libero omnis et dolor repellendus doloribus amet mollitia laboriosam, tempore officiis rem modi.
            <a class="read-more" href="">Читать дальше</a>
        </p>

        <div class="footer">
            <img src="{{ asset('storage/icons/NbaNews.jpg') }}" alt="">
            <span>Величайший П.А.</span>
        </div>
    </li>
    <li>
        <img src="{{ asset('storage/icons/NbaNews.jpg') }}" alt="" class="logo">
        <p class="preview">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, velit! Deleniti vel beatae eaque, totam mollitia quas molestias, illo autem atque quia incidunt distinctio ducimus natus pariatur ratione reiciendis laboriosam.
        </p>
        <p class="body">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis a quia, deleniti cum natus dicta nesciunt consectetur et necessitatibus eos culpa, excepturi inventore, cupiditate voluptatem nulla beatae mollitia aliquam? Cupiditate!
            Nobis, doloribus expedita ipsa cum, dignissimos dolorem aperiam temporibus dolore et hic eveniet? Animi est voluptatibus aliquam, quibusdam saepe impedit incidunt quos vel deserunt. Rem corporis dolor quidem dolore sequi?
            Facere possimus expedita velit, in ullam eaque rem ex eveniet minus, consequuntur totam, rerum qui ducimus asperiores? Amet exercitationem labore expedita delectus inventore dicta fugiat sunt quia ipsum dolorum. A?
            Ipsa quod possimus magnam unde. Eligendi quod eveniet, ipsam animi asperiores alias deleniti. Nulla vero dolores animi reprehenderit officiis aliquam perspiciatis provident illo. Nisi, sed modi animi harum totam asperiores.
            Tempore quaerat sequi voluptatem beatae maiores magnam perspiciatis consectetur qui quis. Totam dignissimos ducimus iste aliquid quidem libero omnis et dolor repellendus doloribus amet mollitia laboriosam, tempore officiis rem modi.
            <a class="read-more" href="">Читать дальше</a>
        </p>

        <div class="footer">
            <img src="{{ asset('storage/icons/NbaNews.jpg') }}" alt="">
            <span>Величайший П.А.</span>
        </div>
    </li>
    <li>
        <img src="" alt="" class="logo">
        <p class="preview">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, velit! Deleniti vel beatae eaque, totam mollitia quas molestias, illo autem atque quia incidunt distinctio ducimus natus pariatur ratione reiciendis laboriosam.
        </p>
        <p class="body">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis a quia, deleniti cum natus dicta nesciunt consectetur et necessitatibus eos culpa, excepturi inventore, cupiditate voluptatem nulla beatae mollitia aliquam? Cupiditate!
            Nobis, doloribus expedita ipsa cum, dignissimos dolorem aperiam temporibus dolore et hic eveniet? Animi est voluptatibus aliquam, quibusdam saepe impedit incidunt quos vel deserunt. Rem corporis dolor quidem dolore sequi?
            Facere possimus expedita velit, in ullam eaque rem ex eveniet minus, consequuntur totam, rerum qui ducimus asperiores? Amet exercitationem labore expedita delectus inventore dicta fugiat sunt quia ipsum dolorum. A?
            Ipsa quod possimus magnam unde. Eligendi quod eveniet, ipsam animi asperiores alias deleniti. Nulla vero dolores animi reprehenderit officiis aliquam perspiciatis provident illo. Nisi, sed modi animi harum totam asperiores.
            Tempore quaerat sequi voluptatem beatae maiores magnam perspiciatis consectetur qui quis. Totam dignissimos ducimus iste aliquid quidem libero omnis et dolor repellendus doloribus amet mollitia laboriosam, tempore officiis rem modi.
            <a class="read-more" href="">Читать дальше</a>
        </p>

        <div class="footer">
            <img src="{{ asset('storage/icons/NbaNews.jpg') }}" alt="">
            <span>Величайший П.А.</span>
        </div>
    </li>
    {{-- <a href="">
        <div class="post">
            <div class="header">
                <h2>НБА. Плей-офф. Финал Запада. «Даллас» обыграл «Миннесоту» и повел 3-0 в серии</h2>
            </div>
            <div class="body">
                <img src="{{ asset('storage/icons/NbaNews.jpg') }}" alt="">
                <p>Метта Сэндифорд-Артест высказался о том, как изменилась защита в современной НБА.
                    «Каждый игрок, завершив карьеру, автоматически становится хейтером. Дело не в том, что нам не нравятся молодые игроки, мы просто хотим играть. Поэтому мы говорим, что они слабаки.
                    Но я смотрел на этих молодых парней и подумал: «Погодите. Они не слабаки. Правила изменились». Посмотрите на Энтони Эдвардса. Я думаю, что дело не игроках, а в правилах. Сравните нынешние правила с правилами в 90-х – это совершенно другая игра. Многие винят игроков, но я считаю, что дело в правилах», – сказал чемпион НБА 2010 года в составе «Лейкерс».</p>
            </div>
            <div class="footer">
                <span class="date">Ср, 25 мая 2024 года</span>
            </div>
        </div>
    </a>
    <a href="">
        <div class="post">
            <div class="header">
                <h2>Стало известно, в какой клуб НБА может перейти Леброн Джеймс этим летом</h2>
            </div>
            <div class="body">
                <p>«Филадельфия» проявляет серьёзный интерес к форварду «Лос-Анджелес Клипперс» Полу Джорджу. Однако если «Сиксерз» не сможет подписать его, клуб рассматривает варианты с переходом нескольких высокооплачиваемых баскетболистов НБА, которые потенциально могут быть в статусе свободных агентов – это Леброн Джеймс, форвард «Нью-Йорк Никс» О’Джи Ануноби, Джимми Батлер из «Майами Хит», Зак Лавин из «Чикаго Буллз» и Брэндон Ингрэм из «Нью-Орлеан Пеликанс».</p>
            </div>
            <div class="footer">
                <span class="date">Ср, 25 мая 2024 года</span>
            </div>
        </div>
    </a>
    <a href="">
        <div class="post">
            <div class="header">
                <h2>66 очков Дончича и Ирвинга помогли «Далласу» обыграть «Миннесоту» и увеличить преимущество в серии до 3-0</h2>
            </div>
            <div class="body">
                <img src="{{ asset('storage/icons/LukaDonchich.jpg') }}"
                    alt="">
                <p>В ночь на 26 мая (мск) состоялся 3-й матч третьего раунда плей-офф НБА «Даллас Маверикс» — «Миннесота Тимбервулвз». Встреча завершилась победой «Маверикс» со счетом 116:107.
                    Самыми результативными в составе победителей были Лука Дончич и Кайри Ирвинг, набравшие по 33 очка...</p>
            </div>
            <div class="footer">
                <span class="date">Ср, 25 мая 2024 года</span>
            </div>
        </div>
    </a>
    <a href="">
        <div class="post">
            <div class="header">
                <h2>Стало известно, в какой клуб НБА может перейти Леброн Джеймс этим летом</h2>
            </div>
            <div class="body">
                <p>«Филадельфия» проявляет серьёзный интерес к форварду «Лос-Анджелес Клипперс» Полу Джорджу. Однако если «Сиксерз» не сможет подписать его, клуб рассматривает варианты с переходом нескольких высокооплачиваемых баскетболистов НБА, которые потенциально могут быть в статусе свободных агентов – это Леброн Джеймс, форвард «Нью-Йорк Никс» О’Джи Ануноби, Джимми Батлер из «Майами Хит», Зак Лавин из «Чикаго Буллз» и Брэндон Ингрэм из «Нью-Орлеан Пеликанс».</p>
            </div>
            <div class="footer">
                <span class="date">Ср, 25 мая 2024 года</span>
            </div>
        </div>
    </a>
    <a href="">
        <div class="post">
            <div class="header">
                <h2>66 очков Дончича и Ирвинга помогли «Далласу» обыграть «Миннесоту» и увеличить преимущество в серии до 3-0</h2>
            </div>
            <div class="body">
                <img src="{{ asset('storage/icons/LukaDonchich.jpg') }}"
                    alt="">
                <p>В ночь на 26 мая (мск) состоялся 3-й матч третьего раунда плей-офф НБА «Даллас Маверикс» — «Миннесота Тимбервулвз». Встреча завершилась победой «Маверикс» со счетом 116:107.
                    Самыми результативными в составе победителей были Лука Дончич и Кайри Ирвинг, набравшие по 33 очка...</p>
            </div>
            <div class="footer">
                <span class="date">Ср, 25 мая 2024 года</span>
            </div>
        </div>
    </a>
    <a href="">
        <div class="post">
            <div class="header">
                <h2>Стало известно, в какой клуб НБА может перейти Леброн Джеймс этим летом</h2>
            </div>
            <div class="body">
                <img src="{{ asset('storage/icons/LukaDonchich.jpg') }}" alt="">
                <p>«Филадельфия» проявляет серьёзный интерес к форварду «Лос-Анджелес Клипперс» Полу Джорджу. Однако если «Сиксерз» не сможет подписать его, клуб рассматривает варианты с переходом нескольких высокооплачиваемых баскетболистов НБА, которые потенциально могут быть в статусе свободных агентов – это Леброн Джеймс, форвард «Нью-Йорк Никс» О’Джи Ануноби, Джимми Батлер из «Майами Хит», Зак Лавин из «Чикаго Буллз» и Брэндон Ингрэм из «Нью-Орлеан Пеликанс».</p>
            </div>
            <div class="footer">
                <span class="date">Ср, 25 мая 2024 года</span>
            </div>
        </div>
    </a> --}}
</ul>
@endsection
