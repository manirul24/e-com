<x-layouts>


    <section id="foodies" class="my-5">

        <div class="container my-5 py-5">
            <div class="item cat col-md-12 col-lg-3 my-4">
                @foreach ($data as $row)
                    <img src="{{ $row->image }}" />
                    <table>

                        <tr>
                            <td>{{ $row->title }} - {{ $row->price }}</td>

                        </tr>

                    </table>
                @endforeach

            </div>


    </section>

</x-layouts>
