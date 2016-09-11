<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <style>

            .laravel {
                font-family: 'Lato';
                font-size: 96px;
                text-align: center;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="laravel">
                <div class="title">Laravel 5</div>
            </div>
            <div id="memcached-plus-demo">

                <h2>Memcached Plus Test</h2>

                <div class="form-inline">

                    <h3>Cache</h3>

                    <h4>Put</h4>
                    <div class="form-group">
                        <label for="cachePutKey">Key</label>
                        <input v-model="cacheKey" class="form-control" id="cachePutKey" placeholder="Key">
                    </div>
                    <div class="form-group">
                        <label for="cachePutValue">Value</label>
                        <input v-model="cacheValue" class="form-control" id="cachePutValue" placeholder="Value">
                    </div>
                    <button v-on:click="cachePut" class="btn btn-default" :disabled="!cacheSettable">Put</button>

                    <h4>Get</h4>
                    <div class="form-group">
                        <label for="cacheGetKey">Key</label>
                        <input v-model="cacheKey" class="form-control" id="cacheGetKey" placeholder="Key">
                    </div>
                    <div class="form-group">
                        <label for="cacheGetValue">Value</label>
                        <input v-model="cacheValueServer" readonly="readonly" class="form-control" id="cacheGetValue" placeholder="Value">
                    </div>
                    <button v-on:click="cacheGet" class="btn btn-default" :disabled="!cacheGettable">Get</button>

                    <h4>Flush</h4>
                    <button v-on:click="cacheFlush" class="btn btn-default">Flush</button>

                    <h3>Session</h3>

                    <h4>Counter</h4>
                    <div class="form-group">
                        <label for="sessionSetValue">Value</label>
                        <input v-model="sessionCounter" readonly="readonly" class="form-control" id="sessionSetValue" placeholder="Value">
                    </div>
                    <button v-on:click="sessionCounterIncrement" class="btn btn-default">Increment</button>
                    <button v-on:click="sessionCounterReset" class="btn btn-default">Reset</button>

                    <h4>All</h4>
                    <button v-on:click="sessionAllGet" class="btn btn-default">All</button>
                    <pre>@{{ sessionAll | json }}</pre>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.21/vue.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.0/vue-resource.min.js"></script>
        <script src="/js/demo.js"></script>
    </body>
</html>
