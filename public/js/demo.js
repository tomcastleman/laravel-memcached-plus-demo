new Vue({
    el: '#memcached-plus-demo',
    data: {
        cacheKey: '',
        cacheValue: '',
        cacheValueServer: '',
        sessionCounter: 0,
        sessionAll: '',
        sessionDebug: '',
    },
    computed: {
        cacheGettable: function() {
            return this.cacheKey.length;
        },
        cacheSettable: function() {
            return this.cacheKey.length && this.cacheValue.length;
        }
    },
    methods: {
        cachePut: function () {
            this.$http['post']('/cache/' + this.cacheKey + '/' + this.cacheValue);
        },
        cacheGet: function () {
            this.$http['get']('/cache/' + this.cacheKey).then(function(response) {
                this.cacheValueServer = response.data.data;
            }).bind(this);
        },
        cacheFlush: function () {
            this.$http['delete']('/cache/');
        },
        sessionCounterRefresh: function () {
            this.$http['get']('/session/counter').then(function(response) {
                this.sessionCounter = response.data.data;
            }).bind(this);
        },
        sessionCounterIncrement: function () {
            this.$http['put']('/session/counter').then(function() {
                this.sessionCounterRefresh();
            }).bind(this);
        },
        sessionCounterReset: function () {
            this.$http['delete']('/session/counter').then(function() {
                this.sessionCounterRefresh();
            }).bind(this);
        },
        sessionAll: function () {
            this.$http['get']('/session/all').then(function(response) {
                this.sessionAll = response.data.data;
            }).bind(this);
        },
        sessionDebug: function () {
            this.$http['get']('/session/debug').then(function(response) {
                this.sessionDebug = response.data.data;
            }).bind(this);
        }
    },
    ready: function () {
        this.sessionCounterRefresh();
    }
});