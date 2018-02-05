<template>
    <vue-dropzone ref="myVueDropzone" id="dropzone" :options="dropzoneOptions" />
</template>


<script>
	import vue2Dropzone from "vue2-dropzone";
	import "vue2-dropzone/dist/vue2Dropzone.css";
	
	export default {
		name:       "app",
		components: {
			vueDropzone: vue2Dropzone
		},
		data:       function() {
			return {
				dropzoneOptions: {
					url:            "https://httpbin.org/post",
					thumbnailWidth: 150,
					maxFilesize:    0.5,
					headers:        {"My-Awesome-Header": "header value"}
				}
			}
		}
	}
</script>
