{{--<script src="/build/assets/app-BFeHgTTW.js"></script>--}}

{{--@verbatim--}}
<div id="myapp">
    <hello-vue/>
    @{{ message }}
</div>
{{--@endverbatim--}}

<script>
    import HelloVue from './Components/HelloVue.vue';

    const { createApp } = Vue

    createApp({
        components: {
            'hello-vue' : HelloVue,
            // 'chart' : Chart,
        },
        data() {
            return {
                message: 'Hello Vue!'
            }
        }
    }).mount('#myapp')
</script>
