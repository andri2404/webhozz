<!doctype html>
<html>
    <head>
        <title> Passing Data controller ke view laravel </title>
    </head>   
<body>
 <h3>Tutorial Laravel</h3>
 <a href="www.andri.com">Klik Disiini untuk belajar</a>

 <br/>
 <p>nama :{{ $nama }}</p>
 <p>Mata Pelajaran</p>
 <ul>
  @foreach($matkul as $m)
    <li>{{$m}}</li>

   @endforeach
</ul>

<br/>

<p>Alamat </p>
    <ul>
    @foreach($alamat as $a)
            <li>{{$a}}</li>

    @endforeach

    </ul>


    


</body>

</html>
