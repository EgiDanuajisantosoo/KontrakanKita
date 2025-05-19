import './bootstrap';
// import '../../assets/vendor/libs/jquery/jquery.js';
// import '../assets/vendor/scss/core.scss';
// import '../assets/css/demo.css';
// import '../css/app.css';
// import '../../assets/vendor/libs/jquery/jquery.js';
// import '../../assets/vendor/libs/popper/popper.js';
// import '../../assets/vendor/js/bootstrap.js';


import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
    forceTLS: true
});
