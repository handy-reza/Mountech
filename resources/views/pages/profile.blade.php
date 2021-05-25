@extends('layouts.frontend.master')
@section('title', 'profile')
@section('content')

<article>

    <div class="post">
        <div class="pcontainer">
            <div class="row" style="align-items: center;">
                <div class="column-33 ">
                    <h1 class="xlarge-font"><b>Hallo, </b></h1>
                    <h1 class="large-font"><b>A bit about me </b></h1>
                    <h3 class="small-font"> Nama saya Handy Reza Alfanda,
                        <br>Umur saya 20 tahun. Saya lahir di Malang, 11 Maret 2001. <br>Saat ini, saya sedang menempuh pendidikan di Universitas Muhammadiyah Malang jurusan teknik Informatika .
                    </h3>

                </div>
                <div class="column-33">
                    <img src="{{asset('frontend/image/reza3D.png')}}" width="400" height="500')}}" style="margin-top: 60px ">
                </div>
            </div>
        </div>
    </div>


</article>

@endsection