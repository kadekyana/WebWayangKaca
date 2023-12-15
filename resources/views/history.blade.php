@include('header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>

        .grid{
            display: grid;
            grid-template-columns: repeat(4,1fr);
        }
        @media(max-width:1000px){
            .grid{
                grid-template-columns:repeat(2,1fr);
            }
        }

        @media(max-width:500px){
            .grid{
                grid-template-columns:repeat(2,1fr);
            }
        }

    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <video  class="w-100" src="{{ asset('video/landing.mp4') }}" type="video/mp4" controls muted autoplay loop>
                </video>
            </div>
        </div>
    </div>

    <div class="container" style="">
        <div class="row ">
            <div class="col-12 p-5" style=" text-align:justify;">
                <h1 class="text-center mt-5 mb-5">Sejarah Lukisan Wayang Kaca</h1>
                <p style="font-size: 20px;">Sejarah lukisan Wayang Kaca bermula dari Maistro Jero Dalang Diah, dimana sebelum beliau menekuni lukisan Wayang kaca, beliau merupakan dalang wayang kulit pada tahun 1927. Kelahiran Jero Dalang Diah adalah 1909. Pada tahun 1927 beliau yang merupakan Dalang Wayang kulit menerima pesanan dari Wayan Nitia yang memesan Wayang Kaca. Pada awalnya Jero Dalang sempat kaget dengan lukisan kaca berobjek dengan busana kimono. Lalu Jero Dalang mengamati secara detail lalu beliau mengelupas bagian pertama, lalu menemukan bahwa ada lapisan chatnya setelah itu terdapat coretan hitam di bawahnya. Setelah itu beliau mencoba dan menyanggupi pesanan itu. Beliau sebagai pembuat wayang kulit merasa tertantang untuk membuat lukisan itu.</p>
                <p style="font-size: 20px">Pada awal pertama Jero Dalang Diah menggunakan jelajar/mangsia, namun percobaan beliau gagal. Suatu hari beliau pergi ke pasar dan menemukan bahwa tinta bak dapat di pakai untuk membuat lukisannya, lalu beliau mencoba dan berhasil. Langkah selanjutnya pada pewarnaannya, beliau mencoba mewarnainya menggunakan cat air namun gagal. lalu beliau mencoba lagi dan berhasil. lalu pada langkah terakhir beliau menggunakan latar polos dengan warna biru langit. Pada tahun 1970 datang seorang petani jeruk dari Bondalem den petani kopi dari Gitgit mereka memesan lukisan Wayang Kaca dengan latarbelakang pemandangan Akhirnya beliau mendapat pesanan dari puluhan hingga ratusan lembar.</p>
                <p style="font-size: 20px">Pada tahun 1971 datang seorang peneliti dari mancanegara bernama nyonya Esler, beliau meminta lukisan dengan tema pemandangan. Pada tahun 1973 terdapat penelitian dari intelektual muda dari kampus Undiksha, serta memberikan sebuah saran agar tidak hanya seting pemandangan saja dan akhirnya laris. Pada tahun 2000 Pak Ardiman dari Undiksha menjadi kuratornya. Pak Ardiman mengajak seniman Wayang Kaca pameran di berbagai tempat, mulai dari lovina lalu ke Bentara Budaya Bali yang terletak di Baypas jl.Ida Bagus Mantra.</p>
            </div>        
        </div>

        <main class="grid" style="; padding-top:30px; align-items:center; grid-gap:30px;">
            <article style="box-shadow: 5px 5px 5px 0px black; border-radius:10px;">
                <img src="{{asset ('image/Arjuna.jpeg')}}" style="height:300px; width:300px; border-radius:10px; " alt="">
            </article>
            <article style="box-shadow: 5px 5px 5px 0px black; border-radius:10px;">
                <img src="{{asset ('image/DewaSiwa.jpeg')}}" style="height:300px; width:300px; border-radius:10px; " alt="">
            </article>
            <article style="box-shadow: 5px 5px 5px 0px black; border-radius:10px;">
                <img src="{{asset ('image/Ramayana.jpeg')}}" style="height:300px; width:300px; border-radius:10px; "alt="">
            </article>
            <article style="box-shadow: 5px 5px 5px 0px black; border-radius:10px;">
                <img src="{{asset ('image/DewiSupraba.jpeg')}}" style="height:300px; width:300px; border-radius:10px; " alt="">
            </article>
            <article style="box-shadow: 5px 5px 5px 0px black; border-radius:10px;">
                <img src="{{asset ('image/ArjunaWiwaha.jpeg')}}" style="height:300px; width:300px; border-radius:10px; " alt="">
            </article>
        </main>
    </div>
    
</body>
</html>
    
@include('footer')

