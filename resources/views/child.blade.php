@section('title', 'Page Title')

@section('navbar')
    @parent
    <p>This is appended to the master sidebar.</p>
    <p class="mb-5">This is my body content.</p><br>
    <a href="#primo">vai al primo paragrafo</a>
@endsection

@section('footer')
    @parent
    <p>This is appended to the master footer.</p>
@endsection
