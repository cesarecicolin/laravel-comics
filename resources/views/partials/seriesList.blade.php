<section class=" pt-5 pb-5 bk-black">
    <div class="container">
        <div class="row  row-cols-6 ">
            @foreach ($links as $comics)
                <div>
                    <img class="my-img" src="{{ $comics['thumb'] }}" class="card-img-top" alt="...">
                    <div class="card-body">

                    </div>
                    <h5 class="card-title">{{ $comics['series'] }}</h5>



                </div>
            @endforeach
        </div>
            <div class="text-center">
                <button class="btn btn-primary">LOAD MORE</button>
            </div>
                


    </div>




</section>
