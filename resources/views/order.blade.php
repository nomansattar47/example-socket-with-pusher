<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{--<p>Thank you {{ $post->post_title }}, your order has been placed.</p>--}}

<!-- <script src="//{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script> -->
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
    console.log('begin');
    Echo.channel('home')
        .listen('.new-message', function(e) {
            alert(JSON.stringify(e));
            console.log('listened');
            console.log(e);
        });
    console.log('end');
    
    // Echo.join(`chat`)
    // .here((users) => {
    //     console.log(users);
    // })
    // .joining((user) => {
    //     console.log(`${user.name} joined now`);
    // })
    // .leaving((user) => {
    //     console.log(`${user.name} leaved`);
    // })
    // .error((error) => {
    //     console.error('myError: '+error);
    // });
});
</script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>