<template>
    <app-layout>
       <div class="container">
            <my-video :sources="video.sources" :options="video.options"></my-video>
        </div>
    </app-layout>
</template>
<script>

import {videoPlayer} from 'vue-videojs7'
import AppLayout from '@/Layouts/AppLayout'
export default {
    data(){
        return{
             video: {
                sources: [{
                    src: 'http://vjs.zencdn.net/v/oceans.mp4',
                    type: 'video/mp4'
                }],
                options: {
                    autoplay: false,
                    volume: 0.6,
                    muted: "muted"
                }
             }
        }
    },
    components:{
        AppLayout,
          videoPlayer
    },
    mounted(){
    }
}
</script>