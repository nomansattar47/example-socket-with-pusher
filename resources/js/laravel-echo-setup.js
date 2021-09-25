import Echo from 'laravel-echo';

window.Echo = new Echo({
    broadcaster: 'pusher',
    host: window.location.hostname + ":" + 6001
});
