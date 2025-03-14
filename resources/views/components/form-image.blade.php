@props([
    'name',
    'id' => '',
    'label' => '',
    'icon' => '',
    'accept' => 'image/png,image/jpg,image/jpeg,image/webp',
])

<div class="form-group">
    @if($label)
        <label class="form-control-label" for="{{ $id }}">
            @if($icon)
                <i class="{{ $icon }}"></i>
            @endif
            {{ $label }}
        </label>
    @endif
    <div class="file-drop-area" id="file-drop-area">
        <span class="fake-btn" id="fake-btn">Choose file</span>
        <span class="file-msg">or drag and drop file here</span>
        <input class="file-input" type="file" name="{{ $name }}" id="{{ $id }}" accept="{{ $accept }}" style="display: none;">
    </div>
    <div id="preview-container" class="preview-container"></div>
</div>

<style>
.file-drop-area {
    position: relative;
    display: flex;
    align-items: center;
    width: 100%;
    max-width: 100%;
    padding: 25px;
    border: 2px dashed #d3d3d3;
    border-radius: 3px;
    transition: 0.2s;
    cursor: pointer;
}
.file-drop-area.is-active {
    background-color: #f0f0f0;
}
.fake-btn {
    flex-shrink: 0;
    background-color:rgb(84, 114, 222);
    color: white;
    padding: 8px 15px;
    border-radius: 3px;
    margin-right: 10px;
    cursor: pointer;
    transition: background-color 0.2s;
}
.fake-btn:hover {
    background-color: rgb(64, 94, 202);
}
.file-msg {
    font-size: 16px;
    font-weight: 300;
    color: #999;
}
.preview-container {
    margin-top: 10px;
    position: relative;
    text-align: center;
}
.preview-container img {
    max-width: 100%;
    max-height: 300px;
    height: auto;
    display: inline-block;
}
@keyframes spin {
    to { transform: rotate(360deg); }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const fileInput = document.querySelector('.file-input');
    const fileDropArea = document.getElementById('file-drop-area');
    const previewContainer = document.getElementById('preview-container');
    const fakeBtn = document.getElementById('fake-btn');

    fakeBtn.addEventListener('click', () => {
        fileInput.click();
    });

    fileDropArea.addEventListener('dragover', (event) => {
        event.preventDefault();
        fileDropArea.classList.add('is-active');
    });

    fileDropArea.addEventListener('dragleave', () => {
        fileDropArea.classList.remove('is-active');
    });

    fileDropArea.addEventListener('drop', (event) => {
        event.preventDefault();
        fileDropArea.classList.remove('is-active');
        const files = event.dataTransfer.files;
        handleFiles(files);
    });

    fileInput.addEventListener('change', (event) => {
        const files = event.target.files;
        handleFiles(files);
    });

    function handleFiles(files) {
        previewContainer.innerHTML = '<div class="loading-spinner"></div>';
        for (const file of files) {
            const reader = new FileReader();
            reader.onload = (event) => {
                const img = new Image();
                img.src = event.target.result;
                img.onload = () => {
                    const canvas = document.createElement('canvas');
                    const ctx = canvas.getContext('2d');
                    const maxWidth = 800;
                    const scaleSize = maxWidth / img.width;
                    canvas.width = maxWidth;
                    canvas.height = img.height * scaleSize;
                    ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
                    const resizedImage = canvas.toDataURL('image/jpeg');
                    previewContainer.innerHTML = '';
                    const imgElement = document.createElement('img');
                    imgElement.src = resizedImage;
                    previewContainer.appendChild(imgElement);
                };
            };
            reader.readAsDataURL(file);
        }
    }
});
</script>
