let previewList = "preview-blog-list";
let previewPost = "preview-blog-post"
function showBlogListImage() {
    return {
        showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById(previewList );
                preview.src = src;
                preview.style.display = "block";
            }
        }
    }
}
function showBlogPostImage() {
    return {
        showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById(previewPost);
                preview.src = src;
                preview.style.display = "block";
            }
        }
    }
}
 tinymce.init({
    selector: 'textarea#tinymce',
    height: 200,
     plugins: "link image code",
     toolbar: 'undo redo | styleselect | forecolor | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image | code'
})
