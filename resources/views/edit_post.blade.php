<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>Create</fieldset>
    <form action="{{ url('create_post') }}" method="POST">
    <input type="text" name="post_title" />
    <textarea name="content"></textarea>
    <input type="submit" />
        {{ csrf_field() }}
    </form>
    <br><br>
    <fieldset>Update</fieldset>
    <form action="{{ url('edit_post') }}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="{{$post->id}}" />
    <input type="text" name="post_title" value="{{$post->post_title}}" />
    <textarea name="content">{{$post->content}}</textarea>
    @php
        // var_dump($post->getMedia());
        $mediaItems = $post->getMedia('posts');
        // if($mediaItems)
            // $mediaItems[0]->getFullUrl();
    @endphp
    @isset($mediaItems)
        @forelse ($post->getMedia('posts') as $media)
            <img src="{{$media->getFullUrl()}}" / width="120px">
        @empty
            <input type="file" name="image" >
        @endforelse
    @endisset
    <input type="submit" />
        {{ csrf_field() }}
    </form>

</body>
</html>
