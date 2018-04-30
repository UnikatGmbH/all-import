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
					url:            "/all-import/upload",
					thumbnailWidth: 150,
					maxFilesize:    500,
                    acceptedFiles: ".xml, .csv",
					init:           function() {
						this.on("success", function(file, response) {
							window.location.href = "/all-import/" + response;
							// location.reload();
						});
						this.on("error", function(response, message) {
							console.log(response);
							console.log(message);
						})
					}
				}
			}
		}
	}
</script>
