<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

// Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
//     return (int) $user->id === (int) $id;
// });

// Broadcast::channel('post-{postId}', function ($user, $postId) {
//     return (int) $postId === (int) \App\Models\Post::find($postId)->id;
// });

Broadcast::channel('chat', function ($user) {
    return $user;
});

// Broadcast::channel('my-channel', function ($user) {
//     return $user;
// });
