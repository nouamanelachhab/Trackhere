@extends('shopify-app::layouts.default')

@section('content')
    <!-- You are: (shop domain name) -->
    <p>You are: {{ $shopDomain ?? Auth::user()->name }}</p>
    <form action="">
    <input type="text" placeholder="input color"></input>
    <button onclick="myFunction()">save</button>
    </form>
    <script>
function myFunction() {
  alert();
}
</script>

    <?php echo '<br>'.Auth::user()->name.'<br>'; ?>

 
@endsection

@section('scripts')
    @parent

    <script>
        actions.TitleBar.create(app, { title: 'Welcome' });
    </script>
@endsection