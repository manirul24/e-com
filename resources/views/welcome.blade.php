<x-app>

    <section id="categories">
        <div class="container my-3 py-5">
            <div class="row my-5">
                @foreach ($data as $row)
                    <div class="col text-center">
                        <a href="{{ route('cat', $row->id) }}" class="categories-item">

                            <img src="{{ asset($row->categoryImg) }}" width="100" />
                            <h5>{{ $row->categoryName }}</h5>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>






</x-app>
