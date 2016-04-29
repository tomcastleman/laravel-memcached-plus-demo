# Heroku Demo App

This app demonstrates how to use the [laravel-memcached-plus](https://github.com/b3it/laravel-memcached-plus)
package with [Laravel 5.2](http://laravel.com/docs/5.2) on [Heroku](http://heroku.com) with the
[MemCachier](https://devcenter.heroku.com/articles/memcachier) addon.

If you want to have a click around and see the code working this
app is already running [here](https://laravel-memcached-plus-demo.herokuapp.com/).
See [`/app/Http/routes.php`](https://github.com/b3it/laravel-memcached-plus-demo/blob/master/app/Http/routes.php)
for the test URLs available.

## Deploy your own

To have a tinker or just for fun you may want to deploy your own!

### Automatic

This button will deploy this to a new app on your Heroku account, complete with all configuration
and the MemCachier free addon.

[![Deploy](https://www.herokucdn.com/deploy/button.png)](https://heroku.com/deploy)

### Manual

If you're rolling your own you should configure your Heroku environment something like this:

```
heroku config:set   APP_ENV=development\
                    APP_DEBUG=true\
                    APP_KEY=base64:`dd if=/dev/random bs=1 count=32 2>/dev/null | base64`\
                    APP_URL=`heroku apps:info --shell | grep web-url | sed "s/web-url=//" | sed "s/\/$//" `\
                    CACHE_DRIVER=memcachedfoo\
                    SESSION_DRIVER=memcached

heroku addons:add memcachier:dev
```

## Laravel on Heroku

This is just a fresh Laravel 5.2 installation with changes detailed in [the latest commit](https://github.com/b3it/laravel-memcached-plus-demo/commits/master).

So memcached aside it may be useful for you to see how to run Laravel 5.* on Heroku!

## Support

Do let me know if you have any questions!