@extends('layouts.page')

@section('style')
    @vite('resources/sass/pages/paper.sass')
@endsection

@section('content')
    <div class="paper">
        <p class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, delectus ab possimus tempore quos unde quibusdam libero obcaecati, suscipit ea quo atque velit fugit dolorem qui, odit similique iste modi!</p>
        <p class="date-time">Ср, 25 мая 2024</p>
        <img src="https://russiabasket.ru/Files/Publications/lvhutduk.jpg" alt="" class="preview">
        <div class="text">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti qui natus adipisci, culpa, nobis vel quibusdam, aperiam ratione reprehenderit tempora perspiciatis! Totam, quis. Neque minus cum placeat enim, quo exercitationem.</p>
            <p>Sunt quas obcaecati natus magnam pariatur nemo ipsum possimus inventore magni! Dignissimos, sunt animi aspernatur ad sint voluptate? Ipsa, tenetur quo nobis quis quaerat atque quam qui omnis ex doloremque?</p>
            <p>Veritatis cupiditate laborum repudiandae rerum possimus quasi porro nemo necessitatibus, itaque, velit harum facilis officia illo, dolorum inventore natus impedit libero. Suscipit sunt laborum deleniti excepturi ducimus aspernatur, laudantium animi?</p>
            <p>Quos, dicta perferendis nam velit totam quia autem placeat delectus id quae dolorem molestiae necessitatibus eum, soluta minima. Iure illum officiis assumenda. Eligendi quisquam illo autem veritatis aliquam fuga vero?</p>
            <p>Sint laborum veritatis repudiandae reiciendis iste amet quam sit tempora nihil minus, facilis ut temporibus natus. Dolores tenetur blanditiis in laudantium. Perferendis, quibusdam porro nostrum quisquam quis aliquid dolore quia.</p>
        </div>
    </div>
    <ul class="comments">
        <span class="box-header">Комментарии</span>
        <li>
            <div class="logo">
                <img src="https://russiabasket.ru/Files/Publications/lvhutduk.jpg" alt="">
            </div>
            <span class="sender">Владимир М.Н.</span>
            <div class="massege">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex sit placeat, blanditiis temporibus assumenda autem illum quo libero mollitia fugiat non perspiciatis quasi dicta necessitatibus praesentium aliquam, deserunt ea alias!</div>
            <span class="date-time">01.01.2024</span>
        </li>
        <li>
            <div class="logo">
                <img src="https://russiabasket.ru/Files/Publications/lvhutduk.jpg" alt="">
            </div>
            <span class="sender">Владимир М.Н.</span>
            <div class="massege">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex sit placeat, blanditiis temporibus assumenda autem illum quo libero mollitia fugiat non perspiciatis quasi dicta necessitatibus praesentium aliquam, deserunt ea alias!</div>
            <span class="date-time">01.01.2024</span>
        </li>
        <li>
            <div class="logo">
                <img src="https://russiabasket.ru/Files/Publications/lvhutduk.jpg" alt="">
            </div>
            <span class="sender">Владимир М.Н.</span>
            <div class="massege">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex sit placeat, blanditiis temporibus assumenda autem illum quo libero mollitia fugiat non perspiciatis quasi dicta necessitatibus praesentium aliquam, deserunt ea alias!</div>
            <span class="date-time">01.01.2024</span>
        </li>
        <li>
            <div class="logo">
                <img src="https://russiabasket.ru/Files/Publications/lvhutduk.jpg" alt="">
            </div>
            <span class="sender">Владимир М.Н.</span>
            <div class="massege">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex sit placeat, blanditiis temporibus assumenda autem illum quo libero mollitia fugiat non perspiciatis quasi dicta necessitatibus praesentium aliquam, deserunt ea alias!</div>
            <span class="date-time">01.01.2024</span>
        </li>
        <li>
            <div class="logo">
                <img src="https://russiabasket.ru/Files/Publications/lvhutduk.jpg" alt="">
            </div>
            <span class="sender">Владимир М.Н.</span>
            <div class="massege">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex sit placeat, blanditiis temporibus assumenda autem illum quo libero mollitia fugiat non perspiciatis quasi dicta necessitatibus praesentium aliquam, deserunt ea alias!</div>
            <span class="date-time">01.01.2024</span>
        </li>
        <li>
            <div class="logo">
                <img src="https://russiabasket.ru/Files/Publications/lvhutduk.jpg" alt="">
            </div>
            <span class="sender"><a href="">Владимир М.Н.</a></span>
            <div class="massege">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex sit placeat, blanditiis temporibus assumenda autem illum quo libero mollitia fugiat non perspiciatis quasi dicta necessitatibus praesentium aliquam, deserunt ea alias!</div>
            <span class="date-time">01.01.2024</span>
        </li>
    </ul>
@endsection